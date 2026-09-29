<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class SyncProductPrices extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:sync-product-prices';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Singkronasi harga varian produk dari API berdasarkan SKU';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Memulai proses singkronasi harga produk...');

        $apiUrl = 'https://app.kspprecast.com/api/public_products.php';

        try {
            $response = Http::timeout(30)->get($apiUrl);
        } catch (\Exception $e) {
            $this->error('Gagal terhubung ke API: ' . $e->getMessage());
            return self::FAILURE;
        }

        if (!$response->successful() || !$response->json('ok')) {
            $this->error('API mengembalikan response gagal.');
            return self::FAILURE;
        }

        $apiProducts = $response->json('products') ?? [];

        if (empty($apiProducts)) {
            $this->warn('Data produk dari API kosong.');
            return self::SUCCESS;
        }

        $updateCount = 0;
        $notFoundCount = 0;

        foreach ($apiProducts as $apiItem) {
            $sku = $apiItem['sku'] ?? null;
            $price = $apiItem['price'] ?? null;

            if (!$sku || $price === null) {
                continue;
            }

            $variant = ProductVariant::where('sku', $sku)->first();

            if ($variant) {
                if ((float) $variant->price !== (float) $price) {
                    $variant->update(['price' => $price]);
                    $updateCount++;
                }
            } else {
                $notFoundCount++;
            }
        }

        Cache::forget('products');
        Cache::forget('homepage_data');
        Cache::forget('products_all');

        $this->info("Sinkronisasi Selesai!");
        $this->info("- Total varian yang berhasil di-update : {$updateCount}");
        if ($notFoundCount > 0) {
            $this->warn("- SKU dari API yang belum terdaftar di database : {$notFoundCount}");
        }

        return self::SUCCESS;
    }
}

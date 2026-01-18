<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {

            // Hapus foreign key terlebih dahulu
            if (Schema::hasColumn('products', 'product_category_id')) {
                $table->dropForeign(['product_category_id']);
                $table->dropColumn('product_category_id');
            }

            // Hapus meta_keyword
            if (Schema::hasColumn('products', 'meta_keyword')) {
                $table->dropColumn('meta_keyword');
            }
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {

            // Kembalikan product_category_id
            $table->foreignId('product_category_id')
                  ->nullable()
                  ->constrained('product_categories')
                  ->nullOnDelete()
                  ->after('id');

            // Kembalikan meta_keyword
            $table->string('meta_keyword')->nullable()->after('meta_description');
        });
    }
};

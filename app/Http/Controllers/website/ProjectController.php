<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\ProductCategory;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
    public function index() {
        $contacts = Cache::remember('contacts', 3600, function () {
            return Contact::first();
        });

        $medsos = Cache::remember('mediasocials', 3600, function () {
            return MediaSocial::get();
        });

        $productCat = Cache::remember('product_categories', 3600, function () {
            return ProductCategory::get();
        });

        $projects = Cache::remember('projects', 3600, function () {
            return Project::with('images')->latest()->get();
        });

        return view('web.page.project', compact(
            'contacts',
            'medsos',
            'productCat',
            'projects',
        ));
    }

    public function show($slug) {
         $contacts = Cache::remember('contacts', 3600, function () {
            return Contact::first();
        });

        $medsos = Cache::remember('mediasocials', 3600, function () {
            return MediaSocial::get();
        });

        $productCat = Cache::remember('product_categories', 3600, function () {
            return ProductCategory::get();
        });

        // Cache per project berdasarkan slug (unik)
        $project = Cache::remember("project_{$slug}", 3600, function () use ($slug) {
            return Project::with('images')->where('slug', $slug)->firstOrFail();
        });

        $relatedProjects = Project::with('images')->where('id', '!=', $project->id)
                            ->latest()
                            ->take(3)
                            ->get();

        return view('web.page.project-detail', compact(
            'contacts',
            'medsos',
            'productCat',
            'project',
            'relatedProjects'
        ));
    }
}

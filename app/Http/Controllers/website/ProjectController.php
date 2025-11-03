<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\MediaSocial;
use App\Models\ProductCategory;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $contacts = Contact::first();
        $medsos = MediaSocial::get();
        $productCat = ProductCategory::get();
        $projects = Project::get();

        return view('web.page.project', compact(
            'contacts',
            'medsos',
            'productCat',
            'projects',
        ));
    }

    public function show($slug) {
        $contacts = Contact::first();
        $medsos = MediaSocial::get();
        $productCat = ProductCategory::get();
        $project = Project::where('slug', $slug)->firstOrFail();

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function top()
    {
        $categories = Job::select('job_category')->distinct()->pluck('job_category');
        return view('jobs.top', compact('categories'));
    }

    public function index($category)
    {
        $jobs = Job::where('job_category', $category)->get();
        return view('jobs.index', compact('jobs'));
    }

    public function show($category, Job $job)
    {
        abort_if($job->job_category !== $category, 404);
        return view('jobs.show', compact('job'));
    }
}

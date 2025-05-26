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

    public function index(Request $request, $category)
    {
        $query = Job::where('job_category', $category);
        if ($request->has('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }
        if ($request->has('keyword')) {
            $query->where('title', 'like', '%' . $request->keyword . '%');
        }
        $jobs = $query->orderBy('created_at', 'desc')->paginate(10);
        $locations = Job::select('location')->distinct()->pluck('location');
        return view('jobs.index', compact('jobs', 'category', 'locations'));
    }

    public function show($category, Job $job)
    {
        abort_if($job->job_category !== $category, 404);
        return view('jobs.show', compact('job'));
    }
}

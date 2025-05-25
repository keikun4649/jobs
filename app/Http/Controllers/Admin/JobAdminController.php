<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class JobAdminController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->paginate(20);
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'employment_type' => 'required',
            'salary' => 'nullable',
            'job_category' => 'required',
        ]);

        Job::create($data);
        return redirect()->route('admin.jobs.index');
    }

    public function edit(Job $job)
    {
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'employment_type' => 'required',
            'salary' => 'nullable',
            'job_category' => 'required',
        ]);

        $job->update($data);
        return redirect()->route('admin.jobs.index');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return back();
    }
}

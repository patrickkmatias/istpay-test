<?php

namespace App\Http\Controllers;

use App\Http\Requests\Job\IndexJobRequest;
use App\Http\Requests\Job\StoreJobRequest;
use App\Http\Requests\Job\UpdateJobRequest;
use App\Http\Resources\JobResource;
use App\Models\Job;
use Inertia\Inertia;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(IndexJobRequest $request)
    {
        $input = $request->all();

        $jobs = Job::type($input['type'])
            ->paused($input['paused'])
            ->search($input['query'])
            ->paginate($input['per_page']);

        return Inertia::render('Jobs/List', [
            'jobs' => JobResource::collection($jobs),
            'filters' => $input
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
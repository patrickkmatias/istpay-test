<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Job;
use App\Http\Resources\JobResource;
use App\Http\Resources\CandidateResource;
use App\Http\Requests\ApplyCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;

class CandidateController extends Controller
{
    /**
     * Create a candidate for user if not exists 
     * and then apply to the given job.
     */
    public function apply(ApplyCandidateRequest $request, Job $job)
    {
        if ($job->paused) throw new \ErrorException('Cannot apply to paused job.');

        $user = $request->user();

        if (!$user->hasCandidate()) Candidate::create(['user_id' => $user->id]);

        $candidate = Candidate::where('user_id', $user->id)->first();
        
        $candidate->apply($job);        
        
        return inertia('Jobs/List', [
            'candidate' => [
                'last_apply' => new JobResource($job)
            ]
        ]);
    }

    /**
     * If candidate exists unapply to the given job.
     */
    public function unapply(ApplyCandidateRequest $request, Job $job)
    {
        $user = $request->user();

        if (!$user->hasCandidate())
            throw new \ErrorException('You need to be a candidate before unapplying.');

        $candidate = Candidate::where('user_id', $user->id)->first();

        $candidate->unapply($job);

        return response(null, 204);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidateRequest $request, Candidate $candidate)
    {
        $candidate->update($request->all());

        $candidate->save();

        return inertia('Jobs/List', [
            'candidate' => [
                'reference' => new CandidateResource($candidate)
            ]
        ]);
    }
}

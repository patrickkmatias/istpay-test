<?php

namespace Tests\Feature;

use App\Models\Candidate;
use App\Models\Job;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class CandidatesTest extends TestCase
{
    use RefreshDatabase;

    private $user;
    private $job;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->job = Job::factory()->create();
        $this->user->candidate->delete();
    }

    private function apply_candidate(User $user, Job $job)
    {
        $path = route('candidates.apply', $job->id);

        return $this->actingAs($user)->post($path);
    }

    public function test_candidate_can_apply_to_job()
    {
        $response = $this->apply_candidate($this->user, $this->job);

        $this->assertTrue($this->user->hasCandidate());

        $response->assertInertia(
            fn(Assert $page) => $page
                ->has('candidate.last_apply')
                ->where('candidate.last_apply.id', $this->job->id)
        );

        $response->assertOk();
    }

    public function test_candidate_cannot_apply_to_paused_job()
    {
        $this->job->paused = true;
        $this->job->save();
        
        $this->apply_candidate($this->user, $this->job);

        $this->assertFalse($this->user->hasCandidate());
    }

    public function test_candidate_can_be_edited()
    {
        $this->apply_candidate($this->user, $this->job);

        $candidate = Candidate::where('user_id', $this->user->id)->first();

        $path = route('candidates.update', $candidate->id);

        $data = [
            'note' => 'Edited note test'
        ];

        $response = $this->actingAs($this->user)->patch($path, $data);

        $response->assertInertia(
            fn(Assert $page) => $page
                ->where('candidate.reference.note', $data['note'])
        );
    }

    public function test_candidate_can_unapply_to_job()
    {
        $path = route('candidates.unapply', $this->job->id);

        $this->apply_candidate($this->user, $this->job);

        $response = $this->actingAs($this->user)->delete($path);

        $this->assertFalse($this->user->hasCandidate());

        $response->assertNoContent();
    }
}
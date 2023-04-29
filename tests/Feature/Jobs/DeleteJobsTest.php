<?php

namespace Tests\Feature;

use App\Models\Job;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteJobsTest extends TestCase
{
    use RefreshDatabase;

    public function test_job_can_be_deleted()
    {
        $user = User::factory()->create();

        $job = Job::factory()->create();

        $path = route('jobs.destroy', $job->id);

        $response = $this->actingAs($user)->delete($path);

        $response->assertNoContent();
    }

    public function test_jobs_can_be_deleted_in_batch()
    {
        $user = User::factory()->create();

        $jobs = Job::factory(10)->create()->toArray();

        $ids = implode(',', array_map(fn($job) => $job['id'], $jobs));

        $path = route('jobs.destroy', $ids);

        $response = $this->actingAs($user)->delete($path);

        $response->assertNoContent();
    }

}
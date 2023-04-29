<?php

namespace Tests\Feature;

use App\Models\Job;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UpdateJobTest extends TestCase
{
    use RefreshDatabase;

    public function test_job_can_be_edited()
    {
        $user = User::factory()->create();

        $job = Job::factory()->create();

        $path = route('jobs.update', $job->id);

        $data = [
            'title' => 'Test job',
            'description' => 'Test job description',
            'type' => 'CLT',
            'paused' => false,
        ];

        $response = $this->actingAs($user)->patch($path, $data);

        $response
            ->assertSee($data)
            ->assertOk();
    }

}
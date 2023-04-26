<?php

namespace Tests\Feature;

use App\Models\User;
use Inertia\Testing\AssertableInertia as Assert;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexJobsTest extends TestCase
{
    use RefreshDatabase;

    public function test_jobs_data_is_displayed(): void
    {
        $user = User::factory()->create();

        $this->seed();

        $response = $this
            ->actingAs($user)
            ->get('/jobs')->assertInertia(
                fn(Assert $page) => $page
                    ->component('Jobs/List')
                    ->has(
                        'jobs', fn(Assert $jobs) => $jobs
                            ->has('data', 10)
                            ->has('links')
                            ->has('meta')
                    )
                    ->has(
                        'filters', fn(Assert $filters) => $filters
                            ->where('type', null)
                            ->where('query', null)
                            ->where('paused', false)
                    )
            );

        $response->assertOk();
    }
}
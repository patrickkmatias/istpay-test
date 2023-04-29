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
            ->get('/jobs')
            ->assertInertia(
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
                            ->where('per_page', 10)
                            ->where('type', null)
                            ->where('query', null)
                            ->where('paused', false)
                    )
            );

        $response->assertOk();
    }

    public function test_jobs_can_be_paginated(): void
    {
        $user = User::factory()->create();

        $this->seed();

        $response = $this
            ->actingAs($user)
            ->get('/jobs?per_page=5')
            ->assertInertia(
                fn(Assert $page) => $page
                    ->has(
                        'jobs', fn(Assert $jobs) => $jobs
                            ->has('data', 5)
                            ->has('links')
                            ->has('meta')
                            ->where('meta.last_page', 4)
                            ->where('meta.per_page', 5)
                    )
            )->assertOk();
    }

    public function test_jobs_can_be_filtered_by_type(): void
    {
        $user = User::factory()->create();

        $this->seed();

        $type = 'CLT';

        $response = $this
            ->actingAs($user)
            ->get('/jobs?per_page=15&type=' . $type)
            ->assertInertia(
                fn(Assert $page) => $page
                    ->has(
                        'jobs', fn(Assert $jobs) => $jobs
                            ->has('data', 10)
                            ->where('data.0.type', $type)
                            ->etc()
                    )
            )->assertOk();
    }

    public function test_jobs_can_be_searched(): void
    {
        $user = User::factory()->create();

        $this->seed();

        $query = 'content';

        $title = 'Content Writer';

        $response = $this
            ->actingAs($user)
            ->get('/jobs?per_page=10&type=Freelance&query=' . $query)
            ->assertInertia(
                fn(Assert $page) => $page
                    ->has(
                        'jobs', fn(Assert $jobs) => $jobs
                            ->has('data', 2)
                            ->where('data.0.title', $title)
                            ->etc()
                    )
            )->assertOk();
    }

    public function test_jobs_can_be_filtered_with_paused(): void
    {
        $user = User::factory()->create();

        $this->seed();

        $response = $this
            ->actingAs($user)
            ->get('/jobs?per_page=10&type=Freelance&paused=true&query=data%20scientist')
            ->assertInertia(
                fn(Assert $page) => $page
                    ->has(
                        'jobs', fn(Assert $jobs) => $jobs
                            ->has('data', 2)
                            ->where('data.1.paused', 1)
                            ->etc()
                    )
            )->assertOk();
    }
}
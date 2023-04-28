<?php

namespace Tests\Feature;

use App\Models\User;
use Inertia\Testing\AssertableInertia as Assert;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateJobTest extends TestCase
{
    use RefreshDatabase;

    public function test_job_can_be_created()
    {
        $user = User::factory()->create();

        $path = '/jobs';

        $data = [
            'title' => 'Test job',
            'description' => 'Test job description',
            'type' => 'CLT',
            'paused' => false,
        ];

        $this->actingAs($user)->post($path, $data)->assertSee($data)->assertOk();

        $data = array_diff_key($data, ['paused' => false]);

        $this->actingAs($user)->post($path, $data)->assertOk();

        $data = array_diff_key($data, ['description' => '']);

        $this->actingAs($user)->post($path, $data)->assertOk();
    }

    public function test_throw_if_no_required_fields()
    {
        $user = User::factory()->create();

        $path = '/jobs';

        $data = ['title' => 'Test job'];

        $this->actingAs($user)->post($path, $data)->assertFound();

        $data = ['type' => 'CLT'];

        $this->actingAs($user)->post($path, $data)->assertFound();
    }

    public function test_throw_if_invalid_input()
    {
        $user = User::factory()->create();

        $path = '/jobs';

        $data = [
            'title' => 'Test job',
            'type' => 'Internship',
        ];

        $this->actingAs($user)->post($path, $data)->assertFound();

        $data = [
            'title' => 'averybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybignameaverybigname',
            'type' => 'CLT',
        ];

        $this->actingAs($user)->post($path, $data)->assertFound();
    }
}
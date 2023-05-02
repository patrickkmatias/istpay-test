<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Candidate;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            JobSeeder::class
        ]);

        User::factory(100)->create();

        $candidates = Candidate::all();

        $jobs = Job::where('paused', false)->get();

        foreach ($candidates as $candidate) {
            $num_jobs = rand(1, rand(1, count($jobs)));
            $rand_jobs = $jobs->random($num_jobs);

            foreach ($rand_jobs as $job) {
                $candidate->apply($job);
            }
        }

        $test = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $test->candidate->delete();
    }
}
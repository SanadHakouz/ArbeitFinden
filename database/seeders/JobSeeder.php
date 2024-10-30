<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some tags
        $tags = Tag::factory(3)->create();

        // Create 20 jobs with sequences for 'featured' and 'schedule' attributes, and attach tags to each
        Job::factory(20)
            ->create(new Sequence(
                ['featured' => false, 'schedule' => 'Full Time'],
                ['featured' => true, 'schedule' => 'Part Time'],
            ))
            ->each(function ($job) use ($tags) {
                // Attach 1-3 random tags to each job
                $job->tags()->attach(
                    $tags->random(rand(1, 3))->pluck('id')->toArray()
                );
            });
    }
}

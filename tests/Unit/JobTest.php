<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

it('belongs to an employer', function () {
    //AAA
    //Arrange
    //Act
    //Assert
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
    'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();

});

it('can have tags', function(){

    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);

});
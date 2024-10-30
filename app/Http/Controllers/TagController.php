<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Job;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('results', ['jobs' => $tag->jobs->load(['employer', 'tags'])]);
    }
}
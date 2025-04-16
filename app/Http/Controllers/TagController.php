<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        $jobs = $tag->jobs;
        $jobs->load(['tags', 'employer']);

        return view('results', ['jobs' => $jobs]);
    }
}

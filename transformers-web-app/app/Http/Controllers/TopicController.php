<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function showTopic($topic) {
        return view('topic', ['topic' => $topic]);
    }
}

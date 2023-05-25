<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $publications = Publication::orderBy('created_at', 'desc')->paginate(10);
        return view('feed', ['publications' => $publications]);
    }
}
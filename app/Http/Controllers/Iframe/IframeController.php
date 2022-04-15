<?php

namespace App\Http\Controllers\Iframe;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IframeController extends Controller
{
    public function __invoke($id, Request $request)
    {
        $post = Post::findOrFail($id);
        return view('iframe.post', compact('post'));
    }
}

<?php

namespace App\UseCases\Post;

use App\Http\Requests\Post\IndexRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class IndexAction
{
    public function __invoke(IndexRequest $request)
    {
        $query = Post::query()
            ->latest();
        return PostResource::collection($query->paginate());
    }
}

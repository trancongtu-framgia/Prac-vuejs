<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Resources\PostResources;

class PostsController extends Controller
{
    public function getPosts(Request $request)
    {
        $posts = Post::with('user')->orderBy('created_at')->get();
        $resource = PostResources::collection($posts);
        return response ([
            'status' => 1,
            'message' => 'Success',
            'data' => $resource,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = 1;
        $post = Post::create($data);
        if ($post) {
            return response(
                [
                    'message' => 'thêm thành công!',
                ]
            );
        }
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return response()->json($post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $updatePost = $post->update($request->all());
        if ($updatePost) {
            return response()->json('Sua thanh cong!');
        }
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $deletePost = $post->delete();

        if ($deletePost) {
            return response(
                [
                    'message' => $id
                ]
            );
        }
    }
}

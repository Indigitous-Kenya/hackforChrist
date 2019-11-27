<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // if ($request->has('post_tags')) {
        //     foreach($request->input('post_tags') as $id)
        //     {
        //         DB::table('post_tag')->insert(
        //             [
        //                 'post_id' => $post->id,
        //                 'tag_id' => $id,
        //             ]
        //         );
        //     }
        //     # code...
        // }
    }
}

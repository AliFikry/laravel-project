<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        return [post::all()];

    }
    public function store()
    {
        request()->validate([
            'title'=>'required',
            'content'=>'required'
        ]);
    
    return post::create([
        
        'title' =>request('title'),
        'content' => request('content'),
        ]);
    }
    public function update(post $posts)
    {
        request()->validate([
            'title'=>'required',
            'content'=>'required'
        ]);
        $success= $posts->update([
        'title'=>request('title'),
        'content'=>request('content')
        ]);
        return [
            "success" => $success
        ];
    }
    public function destroy(post $posts)
    {
        $success =$posts->delete();

        return [
            "success" =>$success
        ];
    }
}

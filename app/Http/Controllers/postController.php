<?php

namespace App\Http\Controllers;
use App\Models\post;

// use Illuminate\Http\Request;

class postController extends Controller
{
    
    public function index()
    {
        return [post::all()];

    }
    public function store()
    {
        request()->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
    
    return post::create([
        
        'name' =>request('name'),
        'email' => request('email'),
        'password'=>request('password'),
        'admin'=>request('admin'),
        'verification'=>request('verification'),
        'verificationToken'=>request('verificationToken')
        ]);
    }

    public function update(post $posts)
    {
        request()->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);
        $success= $posts->update([
        'name'=>request('name'),
        'email'=>request('email'),
        'password'=>request('password'),
        'admin'=>request('admin'),
        'verification'=>request('verification'),
        'verificationToken'=>request('verificationToken')

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

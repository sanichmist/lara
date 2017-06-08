<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
//        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        $posts = Post::getPost();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {
        $f = 'Alex';
        $s = 'Iphrit';

        $fullname = $f . " " . $s;
        $email = "test@test.test";

        $data = [
            'email' => $email,
            'fullname' => $fullname,
        ];
        return view('pages.about')->withData($data);
    }

    public function getContact()
    {
        return view('pages.contact');
    }
}
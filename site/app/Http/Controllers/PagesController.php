<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.welcome');
    }

    public function about() {
        $first = 'Alex';
        $last = 'Curtis';

        $fullname = $first . " " . $last;
        $email = 'google@hotmail.com';
        return view('pages.about')->withFullname($fullname);
    }

    public function contact() {
        return view('pages.contact');
    }
}

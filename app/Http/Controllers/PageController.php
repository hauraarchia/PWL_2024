<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Haura Archia - 2341760006';
    }
    public function articles($articleId)
    {
        return 'Halaman artikel dengan ID ' .$articleId;
    }
}

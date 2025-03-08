<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($articleId)
    {
        return 'Halaman artikel dengan ID Artikel ' . $articleId;
    }
}

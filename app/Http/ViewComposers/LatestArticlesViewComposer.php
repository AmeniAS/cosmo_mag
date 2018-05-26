<?php

namespace App\Http\ViewComposers;

use App\Article;
use App\Product;

class LatestArticlesViewComposer
{
    public $latest_articles = [];

    public function __construct()
    {
        $this->latest_articles = Article::orderBy('updated_at', 'desc')
            ->limit(9)
            ->get();
    }

    public function compose($view)
    {
        $view->with('latest_articles', $this->latest_articles);
    }
}
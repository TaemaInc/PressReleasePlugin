<?php namespace Mathieutanguay\Pressrelease\Components;

use Cms\Classes\ComponentBase;
use Mathieutanguay\Pressrelease\Models\Article;

class ArticleList extends ComponentBase
{
    public $articles;

    public function componentDetails()
    {
        return [
            'name'        => 'articleList Component',
            'description' => 'Displays a list of press release articles'
        ];
    }

    public function onRun()
    {
        // $this->addCss('/plugins/mathieutanguay/podium/assets/css/style.css');

        $this->articles = Article::get()
            ->groupBy('category')->all();
    }


    public function defineProperties()
    {
        return [];
    }

}
<?php namespace Mathieutanguay\Pressrelease\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Article Back-end Controller
 */
class Articles extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mathieutanguay.Pressrelease', 'pressrelease', 'article');
    }
}
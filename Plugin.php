<?php namespace Mathieutanguay\Pressrelease;

use Backend;
use System\Classes\PluginBase;

/**
 * pressrelease Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'pressrelease',
            'description' => 'No description provided yet...',
            'author'      => 'mathieutanguay',
            'icon'        => 'icon-newspaper-o'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Mathieutanguay\Pressrelease\Components\ArticleList' => 'articleList',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'mathieutanguay.pressrelease.some_permission' => [
                'tab' => 'pressrelease',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'pressrelease' => [
                'label'       => 'pressrelease',
                'url'         => Backend::url('mathieutanguay/pressrelease/articles'),
                'icon'        => 'icon-newspaper-o',
                'permissions' => ['mathieutanguay.pressrelease.*'],
                'order'       => 500,
            ],
        ];
    }

}

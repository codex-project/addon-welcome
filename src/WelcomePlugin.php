<?php
/**
 * Part of the Codex Project packages.
 *
 * License and copyright information bundled with this package in the LICENSE file.
 *
 * @author Robin Radic
 * @copyright Copyright 2017 (c) Codex Project
 * @license http://codex-project.ninja/license The MIT License
 */
namespace Codex\Addon\Welcome;

use Codex\Addons\Annotations as CA;
use Codex\Addons\BasePlugin;
use Codex\Documents\Document;

/**
 * This is the class WelcomePlugin.
 *
 * @package        Codex\Addon
 * @author         CLI
 * @copyright      Copyright (c) 2015, CLI. All rights reserved
 * @CA\Plugin("welcome", description="Welcome page")
 */
class WelcomePlugin extends BasePlugin
{
    ## BasePlugin attributes

    public $views = [
        'welcome' => 'codex-welcome::welcome',
    ];

    ## ServiceProvider attributes

    protected $configFiles = [ 'codex-welcome' ];

    protected $viewDirs = [ 'views' => 'codex-welcome' ];

    public function boot()
    {
        $app = parent::boot();
        $assetPath = asset('vendor/codex');
        $ext       = config('app.debug') ? '.js' : '.min.js';
        $this->hook('controller:welcome', function ($controller) use ($assetPath, $ext) {
            $this->codex()->theme
                ->addStylesheet('codex.page.welcome', $assetPath . '/styles/codex.page.welcome.css', [ 'codex' ])
                ->addJavascript('wowjs', $assetPath . '/vendor/wowjs/wow' . $ext)
                ->addJavascript('codex.page.welcome', $assetPath . '/js/codex.page.welcome.js', [ 'codex', 'wowjs' ])
                ->addScript('init', <<<EOT
var app = new codex.App({
    el: '#app'
})
EOT
                );
        });
    }

    public function booted()
    {
        /** @var WebAppManifestHelper $manifest */
        $manifest = $this->app['codex.web-app-manifest'];
        if(false === $manifest->exists()){
            $manifest->generateFile();
        }

    }

    public function register()
    {
        $app = parent::register();

        $app->singleton('codex.web-app-manifest', function($app) {
            return new WebAppManifestHelper(config('codex-welcome.web-app-manifest.path'));
        });

        if ( $app[ 'config' ]->get('codex-welcome.http.enabled', false) ) {
            $this->registerHttp();
        }


        return $app;
    }

    protected function registerHttp()
    {
        $this->app->register(Http\HttpServiceProvider::class);
    }
}
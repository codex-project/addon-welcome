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

return [
    'web-app-manifest' => [
        'path' => public_path('manifest.webmanifest'),
        'overrides' => [
            'shortname' => 'codex',
            'scope' => '/',
            'description' => 'Codex is a file-based documentation platform built on top of Laravel. It\'s completely customizable and dead simple to use to create beautiful documentation.',
            'icons' => [

            ]
        ]
    ],
    'http' => [
        'enabled' => env('CODEX_WELCOME_ENABLED', true),
        'uri' => env('CODEX_WELCOME_URI', '/'),
    ]
];
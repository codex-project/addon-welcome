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
    'http' => [
        'enabled' => env('CODEX_WELCOME_ENABLED', true),
        'uri' => env('CODEX_WELCOME_URI', '/'),
    ]
];
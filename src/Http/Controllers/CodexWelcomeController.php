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
namespace Codex\Addon\Welcome\Http\Controllers;

use Codex\Http\Controllers\CodexController;

class CodexWelcomeController extends CodexController
{
    public function getIndex()
    {
        $res = $this->hookPoint('controller:welcome');
        if($res){
            return $res;
        }

        return $this->view->make($this->codex->view('welcome'));
    }
}
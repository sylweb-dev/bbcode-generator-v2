<?php

class CoreController
{

    public function show($viewName, $viewData = [])
    {
        $absoluteURL = '/';

        require __DIR__ . './../View/' . $viewName . '.tpl.php';
    }
}
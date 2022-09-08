<?php
spl_autoload_register(function ($class_name) {
    $folders = [
        'utils/',
        'Interface/',
        'Service/',
        'Service/HttpService/',
        'Controller/',
    ];

    //dump(scandir('./../app/utils'));

    foreach ($folders as $folder){
        if(file_exists('./../app/' . $folder . $class_name.'.php')){
//            dump($folder.$class_name.'.php');
            require $folder.$class_name.'.php';
            return;
        }
    }

});
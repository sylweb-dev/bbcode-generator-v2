<?php

class Router {
    protected AltoRouter $router;

    public function __construct() {
        $this->router = new AltoRouter();

        //* Page d'accueil du site
        $this->router->map(
            'GET',
            '/',
            [
                'controller' => 'MainController',
                'method' => 'home',
            ],
            'main-home'
        );

        //? Research Page
        $this->router->map(
            'GET',
            '/search',
            [
                'controller' => 'MainController',
                'method' => 'search',
            ],
            'main-search'
        );

        //? Generate Page
        $this->router->map(
            'GET|POST',
            '/generate-tv/[:id]',
            [
                'controller' => 'MainController',
                'method' => 'generate_tv',
            ],
            'main-generate-tv'
        );

        //? Generate Page
        $this->router->map(
            'GET',
            '/generate-movie/[:id]',
            [
                'controller' => 'MainController',
                'method' => 'generate_tv',
            ],
            'main-generate-movie'
        );
    }

   
    /**
     * Get the value of router
     */ 
    public function get() { return $this->router; }

    /**
     * Set the value of router
     *
     * @return  self
     */ 
    public function set($router) {
        $this->router = $router;
        return $this;
    }
}




// $router = new AltoRouter();
// $router->setBasePath($_SERVER['BASE_URI']);

// //! Root Home
// $router->map(
//     'GET',
//     '/',
//     [
//         'controller' => 'MainController',
//         'method' => 'home',
//     ],
//     'main-home'
// );


// $match = $router->match();
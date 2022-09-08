<?php

class MainController extends CoreController {

    public function home($arguments = [])
    {
        $this->show('pages/home', $arguments);
    }

    /**
     * @throws Exception
     */
    public function search($arguments = [])
    {
        if(isset($_GET['search'])) {

            $hs = new HttpService($_ENV['KEY_IMDB_API']);
            $req = $hs->search($_GET['search']);

            $arguments['list'] = $req->getData()->results;
        }

        $this->show('pages/home', $arguments);

    }

    public function generate($arguments = [])
    {
        $this->show('pages/generate', $arguments);
    }

    public function page404() {
        $this->show('pages/404');
    }
}
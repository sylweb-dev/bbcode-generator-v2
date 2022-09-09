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
            $page = $_GET['page'] ?? 1;
            $type = $_GET['type'] ?? "multi";
            $search = $_GET['search'];

            $ps = new PaginationService();

            $hs = new HttpService($_ENV['KEY_IMDB_API']);
            $req = $hs->search($_GET['search'], $type, $page);


            $arguments['data_url'] = [
                "search" => $search,
                "type" => $type,
                "type" => $type,
                "page" => $page,
            ];
            $arguments['list'] = $req->getData()->results;
            $arguments['pagination'] = [
                "page" => $req->getData()->page,
                "total_pages" => $req->getData()->total_pages,
                "total_results" => $req->getData()->total_results,
                "pages" => json_decode(json_encode($ps->paginate($page, $req->getData()->total_pages)), false),
            ];
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
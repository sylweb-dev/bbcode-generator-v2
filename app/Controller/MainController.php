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

        $this->show('pages/search', $arguments);
    }

    public function generate_tv($arguments = [])
    {
        if(isset($arguments['id'])) {
            $id = $arguments['id'];

            $rs = new RatingService();
            $cs = new ConvertionService();
            $hs = new HttpService($_ENV['KEY_IMDB_API']);

            $req = $hs->find($id, "tv");
            $data = $req->getData();

            $cast = json_decode(json_encode($hs->credits($id)->getData()->cast), true);
            setlocale(LC_TIME, "fr_FR");
            $release_date = new DateTime($data->first_air_date);
            //usort($cast, fn($a, $b) => $a['order'] <=> $b['order']);

            $countryResult = "";
            for ($i = 0; $i < sizeof($data->origin_country); $i++) {
                if($i < sizeof($data->origin_country)) {
                    $countryResult .= "{$data->origin_country[$i]}";
                } else {
                    $countryResult .= "{$data->origin_country[$i]}, ";
                }
            }

            $arguments['tv'] = $data;
            $arguments['generator'] = [
                "rating" => [
                    "image" => $rs->getStars($data->vote_average),
                    "note" => $data->vote_average,
                ],
                "casts" => array_slice($cast, 0, 4),
                "release" => $release_date,
                "countries" => $countryResult,
                "run_time" => $cs->timeToString($data->episode_run_time[0]),
                "type" => "tv"
            ];

            if(isset($_GET['datas'])) {
                $datas = json_decode($_GET['datas'], false);


            }
        }

//        dump($arguments);
        $this->show('pages/generate', $arguments);
    }

    public function page404() {
        $this->show('pages/404');
    }
}
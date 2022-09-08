<?php

class HttpService
{

    private string $api_key;
    private \Symfony\Component\HttpClient\ScopingHttpClient $client;

    const API_URL = 'https://imdb-api.com/fr/API/Search/';
    const METHODS = ['get', 'post', 'put', 'patch', 'delete'];

    /**
     * @param string $api_key
     * @throws Exception
     */
    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;

        if($this->api_key !== null) {
            $cli = \Symfony\Component\HttpClient\HttpClient::create([
                'max_redirects' => 5,
                "verify_peer" => false,
                "verify_host" => false,
            ]);
            $this->client = new \Symfony\Component\HttpClient\ScopingHttpClient($cli, []);

        } else {
            throw new \Exception('An ApiKey token is required to connect to the IMDB-API.');
        }
    }

    public function search(string $toSearch): HttpResponse
    {
        $response = new HttpResponse();

        $req = $this->client->request(
            'GET',
            self::API_URL . $this->api_key . '/' . $toSearch,
            []
        );

        return $this->fillResponse($req);
    }


    /**
     * Create an HttpResponse and fill it with all the data collected on the HttpClient Request.
     *
     * @param \Symfony\Contracts\HttpClient\ResponseInterface $request
     * @return HttpResponse
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function fillResponse(\Symfony\Contracts\HttpClient\ResponseInterface $request): HttpResponse
    {
        $response = new HttpResponse();
        $response->setCode($request->getStatusCode());

        if (str_starts_with(strval($response->getCode()), '2')) {
            $response->setError(false);
            $response->setHeader($request->getHeaders());
            $response->setContent($request->getContent());
            $response->setData(json_decode($request->getContent()));
        } else {
            $response->setError(true);
            if ($response->getCode() == 404) $response->setErrorMessage("404 Not found.");
            if ($response->getCode() == 403) $response->setErrorMessage("403 Forbidden.");
            if ($response->getCode() == 401) $response->setErrorMessage("403 Unauthorized.");
            if ($response->getCode() == 400) $response->setErrorMessage("400 Bad request.");
        }
        $response->setInfo($request->getInfo());

        return $response;
    }

    /**
     * Check if HTTP method used is in the allowed list.
     *
     * @param string $methodtocheck
     * @return bool
     */
    public function checkMethods(string $methodtocheck): bool
    {
        return in_array(strtolower($methodtocheck), self::METHODS, true);
    }


}
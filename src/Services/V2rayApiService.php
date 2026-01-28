<?php

require_once __DIR__ . '/../Http/HttpClient.php';

class V2rayApiService
{
    private HttpClient $http;
    private array $config;

    public function __construct(array $config)
    {
        $this->http = new HttpClient();
        $this->config = $config;
    }

    public function login(): string
    {
        return $this->http->post(
            $this->config['base_url'] . '/login',
            [
                'username' => $this->config['username'],
                'password' => $this->config['password'],
            ]
        );
    }

    public function status(): string
    {
        return $this->http->get(
            $this->config['base_url'] . '/status'
        );
    }
}

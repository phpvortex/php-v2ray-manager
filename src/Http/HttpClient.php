<?php

class HttpClient
{
    public function post(string $url, array $data = []): string
    {
        $ch = curl_init($url);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_COOKIEJAR => '',
            CURLOPT_COOKIEFILE => '',
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    public function get(string $url): string
    {
        $ch = curl_init($url);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_COOKIEJAR => '',
            CURLOPT_COOKIEFILE => '',
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}

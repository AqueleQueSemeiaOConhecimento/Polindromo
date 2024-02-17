<?php

require_once('config.php');

// Url da api
$url_api = URL_API;

// fazer a solicitação GET para a API
$resposta_get_api = file_get_contents($url_api);

$resposta = json_decode($resposta_get_api, true);


define('NAME_MACHINE', $resposta['hostname']);
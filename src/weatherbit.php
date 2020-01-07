<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
class WeatherBit {
  private $conf;
  private $settings;
  private $client;
  public function __construct($settings) {
    print_r($settings);
    $this->conf = parse_ini_file("weatherbit.conf");
    $this->client = new Client(['verify' => false]);
    $this->settings = $settings;
  }
  public function forecast_hourly($lat, $lon) {
    try {
      $response = $this->client->request('GET',
        $this->conf['forecast_hourly_url'] . '?' .
        'key='. $this->settings['key'] .
        '&hours='. $this->settings['hours'] . 
        '&lat='. $lat .
        '&lon='. $lon
      );
      return json_decode($response->getBody()->getContents());
    } catch (ClientException $e) {
      return ['error' => 'invalid request'];
    }

  }
}
?>

# Weatherbit-php
## installation
```
composer install elytica/weatherbit
```

## Usage
```
use elytica;
$settings = ['key' => 'API_KEY',
             'hours' => 48];
$weather = new elytica\WeatherBit($settings);
print_r($weather->forecast_hourly(0.0, 0.0)->data);
```

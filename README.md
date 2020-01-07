# Weatherbit-php

## Usage
```
$settings = ['key' => 'API_KEY',
             'hours' => 48];
$weather = new WeatherBit($settings);
print_r($weather->forecast_hourly(0.0, 0.0)->data);
```

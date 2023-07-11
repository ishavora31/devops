<?php

// Instantiate the WeatherAPI class with your API key
$apiKey = "YOUR_API_KEY";
$weatherAPI = new WeatherAPI($apiKey);

// Get the weather for a specific city
$city = "New York";
$weatherData = $weatherAPI->getWeather($city);

if ($weatherData) {
    // Display the weather information
    echo "Temperature: " . $weatherData['temp_c'] . "°C\n";
    echo "Condition: " . $weatherData['condition']['text'] . "\n";
    // You can access other weather attributes here
} else {
    echo "Failed to retrieve weather data";
}



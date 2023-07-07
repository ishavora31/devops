class WeatherAPI {
    private $apiKey;
    
    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }
    
    public function getWeather($city) {
        $url = "https://api.weatherapi.com/v1/current.json?key={$this->apiKey}&q={$city}";
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);
        curl_close($ch);
        
        if ($response) {
            $data = json_decode($response, true);
            return $data['current'];
        } else {
            return false;
        }
    }
}


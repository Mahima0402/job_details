<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['city'])) {
    $city = $_GET['city'];
    $query = urlencode('IT companies in ' . $city);
    $apiKey = 'AIzaSyBCvF3KicnetFHt6Ilv8lAwsJojSKe-g3s'; // Replace with your Google Maps API key

    $url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query={$query}&key={$apiKey}";

    $response = file_get_contents($url);
    header('Content-Type: application/json');
    echo $response;
  }
}
?>

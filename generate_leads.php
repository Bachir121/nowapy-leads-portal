<?php
include 'config.php';

$apiKey = 'YOUR_GOOGLE_API_KEY';
$location = '40.712776,-74.005974'; // NYC coordinates
$type = 'lodging';
$radius = 3000;

$searchURL = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$location&radius=$radius&type=$type&key=$apiKey";
$response = json_decode(file_get_contents($searchURL), true);

if ($response['status'] === 'OK') {
  foreach ($response['results'] as $place) {
    $placeId = $place['place_id'];
    $detailsURL = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&fields=name,formatted_phone_number,website,vicinity&key=$apiKey";
    $details = json_decode(file_get_contents($detailsURL), true);
    $info = $details['result'];

    $phone = $info['formatted_phone_number'] ?? null;
    $website = $info['website'] ?? null;

    if (!$phone || $website) continue;

    $stmt = $conn->prepare("INSERT INTO leads (name, phone, location, source) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $info['name'], $phone, $info['vicinity'], $type);
    $stmt->execute();
  }
  echo "✅ Leads imported!";
} else {
  echo "❌ Google API error: {$response['status']}";
}
?>

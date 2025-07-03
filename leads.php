<?php include 'config.php'; ?>

<h2>Captured Leads</h2>
<?php
$result = $conn->query("SELECT * FROM leads ORDER BY captured_at DESC");
while ($row = $result->fetch_assoc()) {
  echo "<div style='border:1px solid #ccc;padding:10px;margin-bottom:10px'>
    <strong>{$row['name']}</strong> ({$row['source']})<br>
    📞 {$row['phone']}<br>
    📍 {$row['location']}<br>
    🕒 Captured: {$row['captured_at']}
  </div>";
}
?>

<?php

include '../MySQL/conecta.php';


$id_paciente = 1;

$query = "SELECT areas_afetadas FROM avaliacoes_dor WHERE fk_paciente = $id_paciente";
$result = $conn->query($query);

$areas_contagem = array();

while ($row = $result->fetch_assoc()) {
    $areas = explode(',', $row['areas_afetadas']);
    foreach ($areas as $area) {
        $area = trim($area);
        if (array_key_exists($area, $areas_contagem)) {
            $areas_contagem[$area]++;
        } else {
            $areas_contagem[$area] = 1;
        }
    }
}

header("Content-type: image/svg+xml");

$width = 400;
$height = 200;
$barWidth = 30;
$barSpacing = 20;
$topMargin = 20;
$leftMargin = 40;

echo "<svg width='$width' height='$height' xmlns='http://www.w3.org/2000/svg'>";

$maxCount = max($areas_contagem);
$scaleFactor = ($height - $topMargin) / $maxCount;

$index = 0;
foreach ($areas_contagem as $area => $count) {
    $x = $leftMargin + ($barWidth + $barSpacing) * $index;
    $y = $height - $count * $scaleFactor;
    echo "<rect x='$x' y='$y' width='$barWidth' height='" . ($count * $scaleFactor) . "' fill='blue' />";
    echo "<text x='" . ($x + $barWidth / 2) . "' y='" . ($y - 5) . "' text-anchor='middle'>" . $count . "</text>";
    $index++;
}

echo "</svg>";
?>

<?php
/* leggere i dati del file */
$disksJson = file_get_contents(__DIR__ . '/../db/dischi.json');
/* specificare il contenuto */
header('Content-Type: application/json');
/* così che l'axios possa leggere i dati */
echo $disksJson;
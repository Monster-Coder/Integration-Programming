<?php
// dito mo lagay yung file path
$filename_ng_ina_mo = 'exercise3.txt';

// Check mo kung nag eexist ba yang file na yan
if (file_exists($filename_ng_ina_mo)) {
    // dito kukunin yung content ng file
    $laman_ng_file = file_get_contents($filename_ng_ina_mo);
    echo "Laman ng file using file_get_contents():<br>";
    
    echo '<div style="padding-left: 20px;">' . $laman_ng_file . "</div><br><br>";

    // Get mo content ng file ng naka array using file()
    $array = file($filename_ng_ina_mo);
    echo "Laman ng file using file() as an array:\n";
    echo '<div style="padding-left: 20px;">' . "<pre>";
    print_r($array);
    echo "</div></pre>";

} else {
    echo "File does not exist. Creating a new file...<br>";

    // Pag wala yung file na iccheck mo, dito yung auto gawa using file_put_contents()
    $nagkamali_ka = "wassup my\nninja\nwhiteman";
    file_put_contents($filename_ng_ina_mo, $nagkamali_ka);

    echo "ako na gumawa ng file para sayo luds.\n";
}
?>

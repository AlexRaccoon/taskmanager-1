<?php
/**
 * Created by PhpStorm.
 * User: wap34
 * Date: 05/05/17
 * Time: 15:54
 */

/**
 * loadTask($i)
 * Fonction permettant de lire le fichier csv passé en paramètre
 * @param $csvFile
 * @return array
 */
function loadTask($csvFile){
    $file = fopen($csvFile, "r");
    while(($data = fgetcsv($file)) !== FALSE) {
        $tasks[] = $data;
    }
    fclose($file);

    return $tasks;
}

/**
 * $tasklist = loadTask($filename);
 * var_dump($tasklist);
 */


/** fonction pour écrire
    saveTask fopen a
    saveTasks fopen w
 */
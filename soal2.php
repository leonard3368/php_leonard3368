<?php

if (!isset($_POST["NAME"])){
    echo '<form method="POST">';    
    echo 'Nama Anda: <input type="text" name="NAME">';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
}

if (isset($_POST["NAME"]) && !isset($_POST["AGE"])){
    echo '<form method="POST">';    
    echo '<input type="hidden" name="NAME" value="'.$_POST["NAME"].'">';
    echo 'Umur Anda: <input type="text" name="AGE">';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
}

if (isset($_POST["NAME"]) && isset($_POST["AGE"]) && !isset($_POST["HOBBY"])){
    echo '<form method="POST">';    
    echo '<input type="hidden" name="NAME" value="'.$_POST["NAME"].'">';
    echo '<input type="hidden" name="AGE" value="'.$_POST["AGE"].'">';
    echo 'Hobi Anda: <input type="text" name="HOBBY">';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
}

if (isset($_POST["NAME"]) && isset($_POST["AGE"]) && isset($_POST["HOBBY"])){
    echo 'Nama: '. $_POST["NAME"] . '<br>Umur: '. $_POST["AGE"] . '<br>Hobi: ' . $_POST["HOBBY"];
}
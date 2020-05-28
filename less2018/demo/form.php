<?php

if (isset($_POST["name"]) && isset($_POST["phonenumber"]) && isset($_POST["email"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'form-1' => $_POST["form-1"],
    	'form-2' => $_POST["form-2"],
    	'form-3' => $_POST["form-3"],
    	'form-4' => $_POST["form-4"],
    	'name' => $_POST["name"],
    	'phonenumber' => $_POST["phonenumber"],
    	'email' => $_POST["email"]
    ); 

    // Переводим массив в JSON
    echo json_encode($result); 
}
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Testar Personklassen</title>
</head>

<?php 

mb_internal_encoding("UTF-8");     

if(isset($_POST['name'])){ // Kontrollerar att data kommer 
    $name = $_POST['name'];

    if(!mb_check_encoding($name)){
        header('Location: index.html');
    }
    
    $name = htmlspecialchars($name);
    // Eller $data = strip_tags($data);

    $name = trim($name);
    $name = stripslashes($name);

    header('Content-Type: text/html; charset=utf-8');
    echo $name . "<br>";
}

if(isset($_POST['lastname'])){ // Kontrollerar att data kommer 
    $lastname = $_POST['lastname'];

    if(!mb_check_encoding($lastname)){
        header('Location: index.html');
    }
    
    $lastname = htmlspecialchars($lastname);
    // Eller $data = strip_tags($data);

    $lastname = trim($lastname);
    $lastname = stripslashes($lastname);

    header('Content-Type: text/html; charset=utf-8');
    echo $lastname ."<br>";
}

if(isset($_POST['password'])){ // Kontrollerar att data kommer 
    $password = $_POST['password'];

    if(!mb_check_encoding($password)){
        header('Location: index.html');
    }
    
    $password = htmlspecialchars($password);
    // Eller $data = strip_tags($data);

    $password = trim($password);
    $password = stripslashes($password);

    header('Content-Type: text/html; charset=utf-8');
    echo $password ."<br>";
}

if(isset($_POST['username'])){ // Kontrollerar att data kommer 
    $username = $_POST['username'];

    if(!mb_check_encoding($username)){
        header('Location: index.html');
    }
    
    $username = htmlspecialchars($username);
    // Eller $data = strip_tags($data);

    $username = trim($username);
    $username = stripslashes($username);

    header('Content-Type: text/html; charset=utf-8');
    echo $username;
}

?>
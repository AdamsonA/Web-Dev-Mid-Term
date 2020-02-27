<?php

require_once('./database.php');
require_once('./queries.php');
require_once('./helpers.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = json_decode(file_get_contents('php://input'), true);
    $username = $body['username'];
    $password = $body['password'];

    $query = findUserWithPassword($username);
    $result = runQuery($query);
    if ($result === NULL or empty($result)) {
        exitError("User does not exist");
    }

    $user = $result[0];
    if (password_verify($password, $user["password"])) {
        header('Content-Type: application/json');
        unset($user["password"]);
        echo json_encode($user);
    } else {
        exitError("Invalid username or password");
    }
} else {
    exitError("Must be a get request");
}
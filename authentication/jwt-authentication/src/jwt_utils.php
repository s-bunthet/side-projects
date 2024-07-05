<?php
require '../vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

$key = "your_secret_key";

function create_jwt($username) {
    global $key;
    $payload = [
        'iat' => time(),
        'exp' => time() + (60*60),
        'username' => $username
    ];
    return JWT::encode($payload, $key,'HS256');
}

function decode_jwt($jwt) {
    global $key;
    try {
        return JWT::decode($jwt,  new Key($key, 'HS256'));
    } catch (Exception $e) {
        var_dump($e);
        return null;
    }
}
?>

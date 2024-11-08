<?php

// This takes care of checking CSRF tokens and sanitizing input
// no need to do it manually
require_once('../../../inc/includes.php');

if (!isset($_POST) || empty($_POST)) return;

// Clear any messages from previous requests
unset($_SESSION['MESSAGE_AFTER_REDIRECT']);

// Validate that both passwords match
if ($_POST['password'] !== $_POST['password2']) {
    Session::addMessageAfterRedirect("Passwords do not match", true, ERROR, true);
    \Html::back();
}

$newAccount = [
    'name' => $_POST['name'],
    '_useremails' => [-1 => $_POST['name']],
    'firstname' => $_POST['firstname'],
    'realname' => $_POST['realname'],
    'password' => $_POST['password'],
    'password2' => $_POST['password2'],
    'is_active' => 0,
    'profiles_id' => 1,
    'entities_id' => 5,
];

$user = new User();
$result = $user->add($newAccount);

if ($result) {
    Session::addMessageAfterRedirect("Account created successfully", true, INFO, true);
    \Html::redirectToLogin();
} else {
    Session::addMessageAfterRedirect("Failed to create account", true, ERROR, true);
    \Html::back();
}

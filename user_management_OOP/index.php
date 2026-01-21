<?php
// Critical files → require_once
require_once "data/users.php";
require_once "utils/User.php";
require_once "utils/Validator.php";

// Helper file → include_once
include_once "utils/helpers.php";

/*
require_once is used because:
- If these files are missing, program must stop
- Avoids loading same file multiple times
*/

use Utils\User;
use Utils\Validator as UserValidator;
use function Utils\printLine;

// Load users data
$users = require "data/users.php";

// Create Validator object
$validator = new UserValidator();

// Loop through users
foreach ($users as $u) {

    // Create User object using constructor
    $user = new User($u['username'], $u['email'], $u['password']);

    // Display user
    $user->displayUser();

    // Validate fields
    echo "Username: " . $validator->validateUsername($user->username) . "<br>";
    echo "Email: " . $validator->validateEmail($user->email) . "<br>";
    echo "Password: " . $validator->validatePassword($user->password) . "<br>";

    printLine();
}
?>
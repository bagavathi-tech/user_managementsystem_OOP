<?php
namespace Utils;

class User
{
    public $username;
    public $email;
    public $password;

    // Constructor
    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email    = $email;
        $this->password = $password;
    }

    public function displayUser()
    {
        echo "User: " . $this->username . "<br>";
    }
}
?>
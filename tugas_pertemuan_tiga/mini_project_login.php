<?php
class User {
    public $username;
    public $password;

    public function login() {
        if ($this->username == "admin" && $this->password == "12345") {
            return "Login berhasil";
        } else {
            return "Login gagal";
        }
    }
}
$u = new User();
$u->username = "admin";
$u->password = "12345";
echo $u->login();
?>
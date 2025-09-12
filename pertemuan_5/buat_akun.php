<?php
class akun {
    public $username;
    public $password;
    public $email;

    public function login() {
        return "Selamat datang, " . ($this->username) . ". Password anda: ". ($this->password). ", dan email anda: ". ($this->email);
    }

    public function logout() {
        return "Anda telah keluar, " . ($this->username) . ". Password anda: ". ($this->password). ", dan email anda: ". ($this->email);
    }
}
$akun_user1 = new akun();
$akun_user2 = new akun();

$akun_user1->username = "franzxml";
$akun_user1->password = "1sampai8";
$akun_user1->email = "franspunyaemail@email.com";

$akun_user2->username = "paundrajkk";
$akun_user2->password = "12345678";
$akun_user2->email = "kocak-kocak@jkk.com";

echo $akun_user1->login();
echo "\n";
echo $akun_user2->logout();
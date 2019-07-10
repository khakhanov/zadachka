<?php
    class User
    {
        public $data;
        public $id;
        public $name;
        public $surname;
        public $email;
        public $gender;
        public $gang;
        public $score;
        public $date_of_birth;
        public $city;

        public function createUser()
        {
            //въебать PDO запроc
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($dsn, $user, $pass, $opt);
        };

        public function deleteUser()
        {

        };

        public function updateUser()
        {

        };

        public function getUser()
        {

        };
    }

<?php

    class User {
        public int $id;
        public string $username;
        public string $role;

        public function __construct(int $id, string $username, string $role="user") {
            $this->id = $id;
            $this->username = $username;
            $this->role = $role;
        }
    }


    function getUsers(int $limit=10): array {
        $result = array();

        for ( $i = 1; $i <= $limit; $i++ ) {
            $result[] = new User($i, "username_$i");
        }

        return $result;
    }

?>
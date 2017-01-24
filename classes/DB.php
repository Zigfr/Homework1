<?php

    class DB
    {
        public function __construct()
        {
            $this->connect = 'mysql:host=127.0.0.1;dbname=mainnew';
            $this->username = 'root';
            $this->password = '';
        }

        public function query(string $sql, array $data)
        {
            $dbh = new PDO($this->connect, $this->username, $this->password);
            $sth = $dbh->prepare($sql);
            $sth->execute($data);

        }

        public function sellect(string $sql_2, array $notes)
        {
            $data = new PDO($this->connect, $this->username, $this->password);
            $item = $data->prepare($sql_2);
            $item->execute($notes);
        }
    }
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
            $dat = $sth->execute($data);
            
            if($dat){
               echo 'OKK!!';
            }else{
                echo "baddd!!!";
            }
        }
    }
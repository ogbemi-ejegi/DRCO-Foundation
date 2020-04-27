<?php
    define('db_host', 'localhost');
    define('db_user', 'drcoohrp_admin');
    define('db_name', 'drcohrp_contact');
    define('db_password', '@l@m@nt???');
    try{
        $pdo = new PDO("mysql:host=".db_host.";dbname=".db_name, db_user, db_password);
    } catch(PDOException $e){
        echo($e->getMessage());
    }
 ?>
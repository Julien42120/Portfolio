<?php

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=c0Portfolio',"c0Julien",'Juju0603-');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        print "message !: " . $e->getMessage() . "<br>";
        die();
    }

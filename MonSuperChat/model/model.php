<?php

function getDBConnection() 
{

    $user = "root";
    $pass = "root";
    $host = "localhost";
    $dbname = "chat";

    try 
    {
        $dsn = 'mysql:host=' . $host . ';dbname =' . $dbname;
        echo $dsn;

        $option = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        $dbh = new PDO($dsn, $user, $pass, $option);
            var_dump($dbh);
            

        return $dbh; 
        var_dump($dbh);
            
    }
    catch (PDOException $e) 
    {
        print "Erreur connnexion!:" . $e->getMessage() . "<br/>";
        die();
    }

}

function findAll()
{
    $db = getDBConnection();

    try 
    {
        $query = 'SELECT * FROM message';

        $req = $db->prepare($query);
        // $req->bindValue(':pseudo', PDO::PARAM_STR);
        // $req->execute();
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $tab = $req->fetchAll();
        $req->closeCursor();
        var_dump($tab);

        return $tab;
    } 
    catch (PDOException $e) 
    {
        print "Erreur connnexion!:" .$e->getMessage() . "<br/>";
        die();
    }
}

$findall = findAll();

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
    

        $option = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        $dbh = new PDO($dsn, $user, $pass, $option);
            // var_dump($dbh);
             

        return $dbh; 
        
            
    }
    catch (PDOException $e) 
    {
        print "Erreur connnexion!:" . $e->getMessage() . "<br/>";
        die();
    }

}

function findAll(): array
{
    $db = getDBConnection();

    
        $req = $db->query('SELECT * FROM chat.message');

    
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $messages = $req->fetchAll();
        return $messages;
        $req->closeCursor();

}

// $messages = findAll();

function create(array $post)
{
    
    $db = getDBConnection();
    
    $req = $db->prepare('INSERT INTO chat.message (pseudo, content) 
                       VALUES (:pseudo, :content)');
    $req->bindValue(':pseudo', $post['pseudo'], PDO::PARAM_STR);
    $req->bindValue(':content', $post['message'], PDO::PARAM_STR);
    $req->execute();
    
}

function update(array $post)
{

    $db = getDBConnection();

    $req = $db->prepare('UPDATE message SET (:pseudo, :content) WHERE $_POST["pseudoup"]');
    $req->bindValue(':pseudo', $post['pseudoup'], PDO::PARAM_STR);
    $req->bindValue(':content', $post['messageup'], PDO::PARAM_STR);
    // $req->bindValue(':date', PDO::PARAM_INT);
    $req->execute();


}
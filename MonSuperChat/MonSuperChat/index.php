<?php
require 'model/model.php';
$messages = findAll();

if (!empty($_POST['pseudo']) && !empty($_POST['message']))
{ 
    create($_POST);

    
   
if(!empty($_POST['retrive']) OR !empty($_POST['retrive_com']))
{
    echo "ok";
    update($_POST);
    require 'View/Update.php';
    require 'Chat.php';

}  


// require 'View/Chat.php';
// if (empty($_POST['retrieve_com']))
// {
//     echo "ok";

// }

// if ($_POST['retrive'])

// {
    
// }
}
require 'View/Default.php';


    // $message = update($post);








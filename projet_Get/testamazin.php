<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- meta référencement -->
    <meta name="description" content="Web Dev PHP : Conditions, requêtes GET">
    <meta name="author" content="Camile Ghastine">

    <title>Questionnaire de satisfaction du service client Amazin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    
    <div class="container">
        <div id="commencer">
        <h1 class="mb-5">AMAZIN</h1>

        <h2>Questionnaire de satisfaction</h2>
            <br><br><br>
        </div>
    

<?php    
        $page=!empty($_GET['page']) ? $_GET['page'] :'0';
        
        if($page==='0'){
        
?>           
          
           <!-- step 0 : A afficher uniquement au chargement de la page -->
            <p>Vous avez contacté notre service client et nous aimerions avoir votre avis sur la qualité de ce service</p>
            <p>Commencez le questionnaire : <a href="?page=1" role="button" class="btn btn-success">Commencer</a></p>
<?php
            }



            if($page==='1'){

?>
            
            
            <h2>Question 1</h2>
            <p>L'agent a-t-il été agréable ?</p>
    
            <a href="?page=2&result=2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
            <a href="?page=2&result=0" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
            <a href="?page=2&result=1" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->
            
<?php        
            }

            if($page=='2'){
?>
                

                <!-- Etape 2 : A afficher uniquement une fois que l\'étape 1 a été résolue -->
                <h2>Question 2</h2>
                <p>L'agent a-t-il compris votre problème ?</p>
                <a href="?page=3&result=<?=$_GET['result'] + 2?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
                <a href="?page=3&result=<?=$_GET['result'] + 0?>" role="button" class="btn btn-danger">non</a> <!-- rapporte 1 point -->
                <a href="?page=3&result=<?=$_GET['result'] + 1?>" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 0 point -->

<?php                
            }
            if($page==='3'){
                 

?>            

                <!-- Etape 3 : A afficher uniquement une fois que l\'étape 2 a été résolue -->
                <h2>Question 3</h2>
                <p>L'agent a-t-il résolu votre problème ?</p>
                <a href="?page=fin&result=<?=$_GET['result'] + 1?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 1 point -->
                <a href="?page=5&result=<?=$_GET['result'] - 1?>" role="button" class="btn btn-danger">non</a> <!-- rapporte -1 point -->

<?php                
            }
            if($page==='5'){
                $_GET['tel']=isset($_GET['tel']) ? $_GET['tel'] : "" ;

?>

                <!-- Etape 4 : A afficher uniquement si "non" a été répondu à l\'étape 3 -->
                <p>Votre problème n'a pas été résolu.</p>
                <p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
                <!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone -->

<?php     
              for($i=0; $i<=9; $i++){
                  
                  
?>                  
                <a href="?page=5&result=<?=$_GET['result']?>&tel=<?=$_GET['tel'] . $i?>" role="button" class="btn btn-secondary"><?=$i?></a>
                      
<?php              
              }
        
?>  
            <br><br><br>   
                 
         <p>Votre numéro de téléphone est le<?=$_GET['tel']?></p>
         
         <a href="?page=fin2&result=<?=$_GET['result']?>&tel=<?=$_GET['tel']?>" role="button" class="btn btn-outline-success"><?="Valider le " . " " . $_GET['tel']?></a>
<?php

        }  

        if ($_GET['page']==='fin'){
        
         
            echo "Nous vous remercions pour votre notation :    " . "      ";
            for($etoile=0; $etoile<$_GET['result']; $etoile++){
                echo "⭐";
            }

            for($negatif=0; $negatif<(5-$_GET['result']); $negatif++){
                echo "⚫";
            }

        }
        elseif($_GET['page']==='fin2'){

            echo "Nous vous remercions pour votre notation :    " . "      ";
            for($etoile=0; $etoile<$_GET['result']; $etoile++){
                echo "⭐";
            }

            for($negatif=0; $negatif<(5-$_GET['result']); $negatif++){
                echo "⚫";

                
            }
                echo "<br><br><br>" . "Vous serez rappelé très prochainement au" ." " . $_GET['tel']; 
?>                
                <a href="?page=1" role="button" class="btn btn-outline-danger">Recommencer</a>
<?php                 
        }
?>         
   

    </div>
</body>

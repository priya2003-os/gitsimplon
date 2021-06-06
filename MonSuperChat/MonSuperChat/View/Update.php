<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="ytf-8" />
        <meta http-equiv="x-ua-compatible" content="">
        <meta name="viewport" content="width=device-widht, initial-scale=1">

        <title>Super Chat</title>
        <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">


</head>

<body>


<form method="POST" action="index.php">
    
    <fieldset>
        <div class="row">
            <div class="form-group col-4">
                <label for="InputPseudo" class="form-label mt-4">Votre pseudo</label>
                <input type="text" class="form-control" id="InputPseudo" name="pseudoup" aria-describedby="pseudo" placeholder="Enter votre pseudo">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>

            <div class="form-group col-8">
                <label for="Message" class="form-label mt-4">votre message</label>
                <textarea class="form-control" id="Message" name="messageup" rows="3" placeholder="Taper votre message"></textarea>
            </div>
        </div>  

        <div>    
            <button type="submit" class="btn btn-primary" name="retrive">Modifier</button>
        </div>
    </fieldset>    
</form> 
  


</body>
</html>
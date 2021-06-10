

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

  <div class="container">
    <form>
        <fieldset>
          <legend>Questionnaire</legend>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Coordonnées</label>              
            </div>
        
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">NOM</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Votre Nom">
            <label for="exampleInputEmail1" class="form-label mt-4">Prénom</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Votre Prénom">
            <label for="exampleInputEmail1" class="form-label mt-4">N° De Téléphone</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Votre n° De Téléphone">
            <label for="exampleInputEmail1" class="form-label mt-4">Date de l'achat</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Indiquer La Date D'achat">
          </div>
        </fieldset>        
      

        
            
        
          <div class="form-group">
            <label for="info" class="form-label mt-4">Dites-nous en plus :</label>
            <textarea class="form-control" id="info" rows="3"></textarea>
          </div>
    
        <fieldset class="form-group">
          <legend class="mt-4">Acceptez vous d'être rappelé ?</legend>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="rappeltel" id="optionsRadios1" value="option1" checked="">
                Oui
              </label>
            </div>

            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="rappeltel" id="optionsRadios2" value="option2">
                Non
              </label>
            </div>  
        </fieldset>

        <fieldset class="form-group">
          <legend class="mt-4">Questions 1 : L'agent a-t-il été agréable ?</legend>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="q1" id="optionsRadios1" value="option1" checked="">
              Oui
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="q1" id="optionsRadios2" value="option2">
              Non
            </label>
          </div>
          <div class="form-check disabled">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="q1" id="optionsRadios3" value="option3">
              Sans avis
            </label>
          </div>
        </fieldset>
      

      <fieldset class="form-group">
          <legend class="mt-4">Questions 2 : L'agent a-t-il compris votre problème ?</legend>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="q2" id="optionsRadios1" value="option1" checked="">
              Oui
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="q2" id="optionsRadios2" value="option2">
              Non
            </label>
          </div>
          <div class="form-check disabled">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="q2" id="optionsRadios3" value="option3">
              Sans avis
            </label>
          </div>
        </fieldset>
      

      <fieldset class="form-group">
          <legend class="mt-4">Questions 3 : L'agent a-t-il résolu votre problème ?</legend>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="q3" id="optionsRadios1" value="option1" checked="">
              Oui
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="q3" id="optionsRadios2" value="option2">
              Non
            </label>
          </div>
          <div class="form-check disabled">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="q3" id="optionsRadios3" value="option3">
              Sans avis
            </label>
          </div>
        </fieldset>
        <button type="submit" class="btn btn-primary">Submit</button>
      </fieldset>
    </form>
  </div>
</html>



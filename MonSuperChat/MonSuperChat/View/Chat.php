
<div class="container">

<h1>Chat Amazin</h1>

  <div class="card bg-light mb-3" style="max-width: 20rem;">
  <div class="card-header"></div>
  <div class="card-body">
    <!-- <h4 class="card-title">Light card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
  </div>

  <table class="table table-hover">
    <thead>
        <tr>
            <th scope="col" class="col-2" hidden>date</th>
            <th scope="col" class="col-2" hidden>pseudo</th>
            <th scope="col" class="col-8" hidden>message</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        foreach ($messages as $message) {
        ?>
            <tr class="table-light">
                <td class="col-2"><?=$message['date']?></td>
                <td class="col-2"><?=$message['pseudo']?></td>
                <td class="col-6"><?=$message['content']?></td>
                <td class="col-2">

                <!--Exemple pris sur : https://forums.commentcamarche.net/forum/affich-7617623-php-envoyer-post-data-avec-a-href -->
                    <form method="POST" id="upcontent" action="Update.php">
                        <input type="hidden" name="retrieve_com" id="upcontent">
                    </form>   
                        <a onclick="document.getElementById('upcontent').submit()" href="View/Update.php"><img src="https://img.icons8.com/material-sharp/24/000000/edit--v1.png"/></a>
                </td>   
            </tr>
        <?php
        }
        
        ?>
    </tbody>
</table>
</div>
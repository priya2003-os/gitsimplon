
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
        
        foreach ($findall as $row) {
        ?>
            <tr class="table-light">
                <td class="col-2"><?=$row['date']?></td>
                <td class="col-2"><?=$row['pseudo']?></td>
                <td class="col-8"><?=$row['content']?></td>
            </tr>
        <?php
        }
        
        ?>
    </tbody>
</table>
</div>
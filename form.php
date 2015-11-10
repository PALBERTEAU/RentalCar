<div class="panel panel-default">
  <div class="panel-heading">Ajouter une Voiture</div>
  <div class="panel-body">
      <?php if (!empty($sErr)) { ?>
            <div class="alert alert-danger" role="alert"><?= $sErr; ?></div>
      <?php } ?>
      <form action="index.php?controller=back&method=form" method="POST">
          <div class="form-group">
              <label for="marque">Marque</label>
              <input type="text" class="form_control" id="marque" placeholder="Marque" name="marque" required <?php if(!empty($marque)){?>value="<?= $marque; ?>"<?php } ?>>
          </div>
          <div class="form-group">
              <label for="modele">Modele</label>
              <input type="text" class="form_control" id="modele" placeholder="Modele" name="modele" required <?php if(!empty($model)){?>value="<?= $model; ?>"<?php } ?>>
          </div>
          <div class="form-group">
              <label for="Couleur">Couleur</label>
              <input type="text" class="form_control" id="couleur" placeholder="Couleur" name="couleur" required <?php if(!empty($couleur)){?>value="<?= $couleur; ?>"<?php } ?>>
          </div>
          <div class="form-group">
              <label for="image">Image</label>
              <?php if (isset($image)) { ?>
                  <a href="/data/<?php echo $image; ?>"><?php echo $image; ?></a> (pour effacer upload un nouveau fichier) <br/>
              <?php } ?>
              <input type="file" id="image" name="image">
          </div>
          <?php if (isset($id)) { ?>
                    <input type="hidden" name="id" value="<?= $id; ?>">
          <?php } ?>
          <button type="submit" class="btn btn-default">Ajoutez/Modifiez</button>
          <a href="index.php" class="btn btn-default">Annulez</a>
      </form>
  </div>
</div>


<h2> Voitures disponibles </h2>
<?php var_dump($_SESSION); ?>
<?php if(array_key_exists("role",$_SESSION) && $_SESSION['role']==1) {?>
<a href="index.php?controller=back&method=form" class="btn btn-default">Ajouter une Voiture</a>
<?php } ?>
<div class="row ">
  <ul class="car list-unstyled">
    <div class="row">
      <?php foreach ($aVoitures as $oVoiture): ?>
        <div class="col-md-3 thumbnail">
          <li> <img src="<?= $oVoiture->getImage(); ?>"/></li>
          <li> <?= $oVoiture->getMarque(); ?> </li>
          <li> <?= $oVoiture->getModele(); ?> </li>
          <li> <?= $oVoiture->getCouleur(); ?> </li>
          <?php if(empty($oVoiture->getClientId())){ ?>
            <a href="index.php?controller=back&method=rent&voiture=<?= $oVoiture->getId();?>" class="btn btn-default" role="button">Louer</a>
          <?php }elseif(array_key_exists('login',$_SESSION)){ ?>
            <a href="index.php?controller=back&method=unRent&voiture=<?= $oVoiture->getId();?>" class="btn btn-default" role="button">Rendre</a>
          <?php } ?>


          <?php if(array_key_exists("role",$_SESSION) && $_SESSION['role']==1) {?>
          <a href="index.php?controller=back&method=form&voiture=<?= $oVoiture->getId(); ?>" class="btn btn-default" role="button">Modifier</a>
          <a href="index.php?controller=back&method=delete&voiture=<?= $oVoiture->getId(); ?>" class="btn btn-default" role="button">Supprimer</a>
          <?php } ?>
        </div>
        <div class="col-md-1"></div>
      <?php endforeach; ?>
    </div>
  </ul>
</div>

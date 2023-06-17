 <?php
 $title= "Supprimer Stagiere";
?>
 <?php ob_start(); ?>

<p>Voulez vous vraiment supprimer le Stagiere?</p>
<a href="index.php?action=destroyAction&id=<?php echo $id ?>" class="btn btn-sm btn-danger ">valider la supression</a>
<a href="index.php?action=list" class="btn btn-sm btn-warning ">Annuler la supression</a>
<?php
$content=ob_get_clean();
include_once 'view/lyout.php';

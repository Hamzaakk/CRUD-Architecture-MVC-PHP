<?php ob_start();?>
<?php $title='Liste des stagieres'; ?>
<a href= "index.php?action=create" class="btn btn-primary">Add New Stagiere</a>
<table class="table table-striped my-1">
   <thead>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Login</th>
        <th>Opération</th>
    </tr>
   </thead>
   <tbody>
    <?php foreach($stagiere as $stagiere) {?>
        
        <tr>
            <td><?php echo $stagiere->id ;?></td>
            <td><?php echo $stagiere->nom ;?></td>
            <td><?php echo $stagiere->prénom ;?></td>
            <td><?php echo $stagiere->age ;?></td>
            <td><?php echo $stagiere->login ;?></td>
            <td>
            <a href="index.php?action=edit&id=<?php echo $stagiere->id ; ?>" class="btn btn-outline-primary btn-sm" value="edit">Modifier</a>
            <a href="index.php?action=delete&id=<?php echo $stagiere->id ; ?> "  class="btn btn-outline-danger btn-sm">Supprimer</a>
            </td>
        </tr>
        <?php }?>
   </tbody>
</table>
<?php $content=ob_get_clean(); ?>
<?php include_once './view/lyout.php';?>

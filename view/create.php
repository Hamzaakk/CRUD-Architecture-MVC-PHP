<?php $title='Ajouter Staigere'; ?>
<?php ob_start();?>
<form method="post" action="index.php?action=insert">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prénom">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Age</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="age">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Login</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="login">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-success" value="ajouter">Submit</button>
</form>

<?php $content=ob_get_clean(); ?>
<?php include_once './view/lyout.php';?>

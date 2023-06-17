<?php
  require_once './controller/StagierController.php';
  // indexAction() ;
  // var_dump($_GET['action']);  
  if(isset($_GET['action'])) 
  {
    $page = $_GET['action'];
    switch($page)
    {
      case 'create' :  createAction() ; break;
      case 'list'  : indexAction(); break;
      case 'insert' : storeAction();break;
      case 'destroyAction' :  ;destroyAction(); break;
      case 'edit' : editAction(); break;
      case 'delete' :  deleteAction();break;
      case 'editini' : editnitAction() ; break;

    }
  }
  
?>
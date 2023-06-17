<?php
    require_once './model/Stagiere.php';
    function indexAction() 
    {
        $stagiere= FindAll();
         require_once './view/liste_stagier.php';
    }
    function createAction() 
    {
        require_once './view/create.php';
    }
    function storeAction() // insertion stagiere in database
    {
      creat() ;     
      header('location:index.php?action=list');
    }
    function deleteAction()  
    {
        $id= $_GET['id'];
        require_once './view/delete.php';
    } 
    function destroyAction() 
    {
       $id=$_GET['id'];
        destroy($id);
        header('location:index.php?action=list');
        }
    function editAction()
    {
        $id=$_GET['id'];
        require_once './view/edit.php';
     
    }
    function editnitAction()
    {   $id=$_POST['id'];
        $nom=$_POST['nom'];
        $prénom=$_POST['prénom'];
        $age=$_POST['age'];
        $login=$_POST['login'];
        $password=$_POST['password'];
         edit($id,$nom,$prénom,$age,$login,$password); 
         header('location:index.php?action=list');
        }

 ?>   

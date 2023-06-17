<?php
      function DatabaseConnection() 
      {
            try {
                $pdo = new PDO('mysql:host=localhost;port=3306;dbname=ofppt','root', '');
            }catch (PDOException $erreur) {
                echo 'erreur';
                die();
            }
            return $pdo;
      }


      function FindAll() {
         $pdo = DatabaseConnection() ;
         $stagiere = $pdo->prepare('select * from stagiere');
         $stagiere->execute();
         $stagiere=$stagiere->fetchAll(PDO::FETCH_OBJ);
         return $stagiere;
      }



      function creat() {
        $pdo = DatabaseConnection() ;
        $sqlstate= $pdo->prepare('insert into stagiere value (null,?,?,?,?,?)');
         $sqlstate->execute([$_POST['nom'],$_POST['prénom'],$_POST['age'],$_POST['login'],$_POST['password']]);
        //we have methode in php extract() give chaque clé in variable
       
      }
      function edit($id,$nom,$prénom,$age,$login,$password)    
      {
          $pdo = DatabaseConnection();
          $sqlstate = $pdo->prepare('update stagiere set nom = ? , prénom=?, age= ? , login=? ,password =? where id=?');
          $sqlstate->execute([$nom,$prénom,$age,$login,$password,$id]);
        
      }
  
      function destroy($id) {
        $pdo = DatabaseConnection() ;
        $sqlstate= $pdo->prepare('delete from stagiere  where id=?');
        return $sqlstate->execute([$id]);
      }

?>
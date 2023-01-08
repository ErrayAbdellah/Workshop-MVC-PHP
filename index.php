
<?php require 'app/Views/view/head.php' ;
         require 'app/Model/blagues.php';
         require 'app/Controller/blagues.class.php';
         require "app/Views/nav.php" ;
         require "app/Views/show.php" ;
         require "app/Views/edit.php" ;
         
         
         if(isset($_GET['BntAdd'])){
               // header('location:index.php');
               require "app/Views/add.php" ;
         }
?>






<?php require 'app/Views/view/footer.php' ?>
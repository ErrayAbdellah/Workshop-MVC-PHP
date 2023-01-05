<?php require 'app/Views/view/head.php' ;

    $test = null ;

    if(isset($_GET["Add"])){
        // $test = 1;
        require "app/Views/addBluges.php" ;

    }

    // if($test){
    //     require "app/Views/addBluges.php" ;
    // }
?>

<!-- <input type="submit" value="ADD" name="btn"> -->

<button> <a href="<?= $_SERVER["PHP_SELF"]?>?Add"> Click</a></button>




<?php require 'app/Views/view/footer.php' ?>
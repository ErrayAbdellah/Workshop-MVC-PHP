
<?php 
    // if(isset())
?>
<div class="container form-floating border-5">
    <form method="POST" action="index.php">
        <textarea name="jokeEdit"  class=" form-control" placeholder="Leave a comment New Joke here" id="jokeEdit" style="height: 100px"></textarea>
        <input class="btn btn-success" type="submit" value="Edit">
        <a href="index.php" class="btn btn-danger">Cancel</a>
    </form>
</div>

<?php
$jokes = new ControllerJoke();
if(isset($_GET['edit'])){

    $joke = $jokes->showEdit($_GET['edit']);
    echo  "<script>document.getElementById('jokeEdit').value = `".$joke['texte']."`</script>";

        // if(isset()){
        //     $jokes->edit($_GET['edit']);
    
        //     header('location:index.php');
        // }
    }
?>
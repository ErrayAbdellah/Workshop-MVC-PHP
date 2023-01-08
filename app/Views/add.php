<?php
$jokes = new ControllerJoke();
    if(isset($_POST['joke'])) 
    {
        $jokes->add($_POST['joke']);
        header('location:index.php');
    }

?>


<div class="container form-floating border-5">
    <form method="POST" action="index.php">
        <textarea name="joke"  class=" form-control" placeholder="Leave a comment New Joke here" id="textJoke" style="height: 100px"></textarea>
        <input class="btn btn-success" type="submit" value="Add">
        <a href="index.php" class="btn btn-danger">Cancel</a>
    </form>
</div>
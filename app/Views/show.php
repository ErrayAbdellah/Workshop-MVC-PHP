<?php
    $jokes = new ControllerJoke();
    
    if(isset($_GET['delete'])){

    $jokes->delete($_GET['delete']);
    header('location:index.php');
    }
    if(isset($_GET['edit'])){

    

        if(isset()){
            $jokes->edit($_GET['edit']);
    
            header('location:index.php');
        }
    }


?>

<section class="container h-100 mt-5">
    <div class="joke">
        <table  class="table ">
           <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Jokes</th>
                </tr>
           </thead>
<?php
$i = 0;
    $jokes = new ControllerJoke();
    $result = $jokes->show();
    foreach ($result as $row) {
        $i++;
    ?>
            <tbody>
                <tr>
                    <th scop="row"><?= $i ?></th>
                    <td><?= $row['texte'] ?></td>
                    <form action="index.php" method="get">
                        <td> <a class="btn btn-dark" href="index.php?edit=<?= $row['id']?>" >Edit</a></td>
                        <td> <a class="btn btn-danger" href="index.php?delete=<?= $row['id']?>">Delete</a></td>
                    </form>
                </tr>
            </tbody>
    <?php } ?>
        </table>
    </div>
</section>



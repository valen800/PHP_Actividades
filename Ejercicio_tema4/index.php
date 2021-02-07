<?php
  include_once "./controller.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container text-center">
    <h1>Contactes</h1>
    <table class="table table-bordered text-center">
      <thead>
        <tr class="text-right">
          <th colspan="5"><?php echo $pagination->getPageCunterFormat() ?></th>
        </tr>
        <tr>
          <th><a href="index.php?sortByID=true&page=<?php echo $pagination->getCurrentPage() ?>">Id</a></th>
          <th><a href="index.php?sortByName=true&page=<?php echo $pagination->getCurrentPage() ?>">Cognoms,nom</a></th>
          <th colspan="3">Manteniment</th>
        </tr>
      </thead>
      <tbody>
        <!-- rows -->
        <?php echo $pagination->renderData(); ?>
        <tr>
          <td colspan="2">
            <a href="index.php?page=<?php echo 1;// startPage ?>"><img src="./img/home.png" alt="home"></a>
            <a href="index.php?page=<?php echo $pagination->prevPage();//previous function ?>"><img src="./img/left.png" alt="left"></a>
            <a href="index.php?page=<?php echo $pagination->nextPage();//next function?>"><img src="./img/right.png" alt="right"></a>
            <a href="index.php?page=<?php echo $pagination->getTotalPages($pagination->getTotalRecords());//Last Page ?>"><img src="./img/end.png" alt="last"></a>
          </td>
          <td colspan="3">
            <a href="#"><img src="./img/add.png" alt="addData"></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
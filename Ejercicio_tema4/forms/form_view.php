<?php 
include_once '../Classes/SQLDatabase.php';

    $conn = new SQLDatabase();
    $conn->connection();
    $data = $conn->query('SELECT nom,cognoms,direccio,localitat,provincia,cp,telefon1,telefon2,fax,mail FROM contactes WHERE id='.$_GET['id'].'');
    $conn->disconnect();

    $arr = mysqli_fetch_all($data, MYSQLI_ASSOC);
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
    <div class="container">
        <form action="../index.php" method="post">
            <fieldset class="mb-5">
                <legend>Identification</legend>
                <div class="form-inline">
                    <label class="mr-3" for="lName">Name: </label>
                    <input class="mr-5" type="text" class="form-control" id="nameInput" name="name" value="<?php echo $arr[0]['nom'] ?>" disabled>
                    <label class="mr-3" for="lLastname">Lastname: </label>
                    <input type="text" class="form-control" id="lastnameInput" name="lastname" value="<?php echo $arr[0]['cognoms'] ?>" disabled>
                </div>
            </fieldset>
            <fieldset class="mb-5">
                <legend>Personal data</legend>
                <div class="form-inline">
                    <label class="mr-3" for="lAddress">Address:</label>
                    <input class="mr-5" type="text" class="form-control" id="addressInput" name="address"  value="<?php echo $arr[0]['direccio'] ?>" disabled>
                    <label class="mr-3" for="lPostalCode">Postal Code:</label>
                    <input type="text" class="form-control" id="postalCodeInput" name="postalCode" value="<?php echo $arr[0]['cp'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="lLocation">Location:</label>
                    <input type="text" class="form-control" id="locationInput" name="location" value="<?php echo $arr[0]['localitat'] ?>" disabled>
                    <label for="lProvince">Province:</label>
                    <input type="text" class="form-control" id="provinceInput" name="province" value="<?php echo $arr[0]['provincia'] ?>" disabled>
                </div>
            </fieldset>
            <fieldset class="mb-5">
                <legend>Contact data</legend>
                <div class="form-inline">
                    <label class="mr-3" for="lPhone1">Phone 1:</label>
                    <input class="mr-3" type="text" class="form-control" id="Phone1Input" name="phone1" value="<?php echo $arr[0]['telefon1'] ?>" disabled>
                    <label class="mr-3" for="lPhone2">Phone 2:</label>
                    <input class="mr-3" type="text" class="form-control" id="Phone2Input" name="phone2" value="<?php echo $arr[0]['telefon2'] ?>" disabled>
                    <label class="mr-3" for="lFax">Fax:</label>
                    <input type="text" class="form-control" id="faxInput" name="fax" value="<?php echo $arr[0]['fax'] ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="lEmail">Email:</label>
                    <input type="email" class="form-control" id="EmailInput" name="email" value="<?php echo $arr[0]['mail'] ?>" disabled>
                </div>
            </fieldset>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-info">Close</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
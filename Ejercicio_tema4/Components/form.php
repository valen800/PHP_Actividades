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
        <form action="" method="post">
            <fieldset class="mb-5">
                <legend>Identification</legend>
                <div class="form-inline">
                    <label class="mr-3" for="lName">Name: </label>
                    <input class="mr-5" type="text" class="form-control" id="nameInput">
                    <label class="mr-3" for="lLastname">Lastname: </label>
                    <input type="text" class="form-control" id="lastnameInput">
                </div>
            </fieldset>
            <fieldset class="mb-5">
                <legend>Personal data</legend>
                <div class="form-inline">
                    <label class="mr-3" for="lAddress">Address:</label>
                    <input class="mr-5" type="text" class="form-control" id="addressInput">
                    <label class="mr-3" for="lPostalCode">Postal Code:</label>
                    <input type="text" class="form-control" id="postalCodeInput">
                </div>
                <div class="form-group">
                    <label for="lLocation">Location:</label>
                    <input type="text" class="form-control" id="locationInput">
                    <label for="lProvince">Province:</label>
                    <input type="text" class="form-control" id="provinceInput">
                </div>
            </fieldset>
            <fieldset class="mb-5">
                <legend>Contact data</legend>
                <div class="form-inline">
                    <label class="mr-3" for="lPhone1">Phone 1:</label>
                    <input class="mr-3" type="text" class="form-control" id="Phone1Input">
                    <label class="mr-3" for="lPhone2">Phone 2:</label>
                    <input class="mr-3" type="text" class="form-control" id="Phone2Input">
                    <label class="mr-3" for="lFax">Fax:</label>
                    <input type="text" class="form-control" id="faxInput">
                </div>
                <div class="form-group">
                    <label for="lEmail">Email:</label>
                    <input type="email" class="form-control" id="EmailInput">
                </div>
            </fieldset>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
                <div class="col">
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-danger align-left">Cancel</button>
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
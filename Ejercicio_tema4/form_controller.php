<?php
include_once './Classes/Person.php';
include_once './Classes/SQLDatabase.php';

    isset($_POST['name']) || empty($_POST['name']) ? $name = "DefaultName" : $name = $_POST['name'];
    isset($_POST['lastname']) || empty($_POST['lastname']) ? $lastname = null : $lastname = $_POST['lastname'];;
    isset($_POST['address']) || empty($_POST['address']) ? $address = null : $address = $_POST['address'];;
    isset($_POST['postalCode']) || empty($_POST['postalCode']) ? $postalCode = null : $postalCode = $_POST['postalCode'];;
    isset($_POST['location']) || empty($_POST['location']) ? $location = null : $location = $_POST['location'];;
    isset($_POST['province']) || empty($_POST['province']) ? $province = null : $province = $_POST['province'];;
    isset($_POST['phone1']) || empty($_POST['phone1']) ? $phone1 = null : $phone1 = $_POST['phone1'];;
    isset($_POST['phone2']) || empty($_POST['phone2']) ? $phone2 = null : $phone2 = $_POST['phone2'];;
    isset($_POST['fax']) || empty($_POST['fax']) ? $fax = null : $fax = $_POST['fax'];;
    isset($_POST['email']) || empty($_POST['email']) ? $email = null : $email = $_POST['email'];;

    $conn = new SQLDatabase();
    $person = new Person($name, $lastname, $address, $postalCode, $location, $province, $phone1, $phone2, $fax, $email);

    $conn->connection();
    if ($conn->insert($person)) {

    }
    $conn->disconnect();

?>
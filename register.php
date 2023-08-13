<?
    include('db.php');


    $parentSurname = $_POST['parentSurname'];
    $parentName = $_POST['parentName'];
    $parentPhone = $_POST['parentPhone'];
    $parentAddress = $_POST['parentAddress'];
    $childSurname = $_POST['childSurname'];
    $childName = $_POST['childName'];
    $childDate = $_POST['childDate'];

    $sql = "INSERT INTO `users` (parentSurname, parentName, parentPhone, parentAddress, childSurname, childName) VALUES ('$parentSurname', '$parentName', '$parentPhone', '$parentAddress', '$childSurname', '$childName')";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $result = $connect->query($sql);

        echo 'success';
    }
    

    
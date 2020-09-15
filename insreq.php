<?php
    require_once "configuration.php";
    require_once "Details.php";
    require_once "DB.php";

    use Details;
    use DB;
    $data = json_decode(file_get_contents("php://input"));
    if($data!=null){
    $connect = new Database();

    $object = new Details($connect->connect());
    if($object->insertData($data)==True)
    {
        echo "<h1>Succesfull</h1>";
    }
    else
    {
        echo "<h1>Unsuccesfull</h1>";
    }}
    else{
        print "No data";
    }
?>
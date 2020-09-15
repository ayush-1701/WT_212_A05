<?php
    require_once "configuration.php";
    require_once "Details.php";
    require_once "DB.php";

    use Details;
    use DB;

    header('Content-type: application/json');
    $connect = new Database();

    $object = new Details($connect->connect());
    $result = $object->getData();
    
    if($result->rowCount()>0)
    {
        $DataList = array("records" => array()
        );

        $DataList=array();
        while($row = $result->fetch(\PDO::FETCH_ASSOC)) {
            $DataList["records"][] = $row;
        }
        echo json_encode($DataList);
    }
    else{
       echo json_encode(["No data"]);
    }
?>
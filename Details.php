<?php
    class Details
    {
        private $connection=null;

        public function __construct($con){
            $this->con=$con;
        }
        public function insertData($data){
            $sql = "insert into student(Name,Gender,Mobile,email) values(:name,:gender,:mobile,:email)";
            $stmt = $this->con->prepare($sql);
            $name=$data->First_Name." ".$data->Last_Name;
            $stmt->bindParam(":name",$name);
            $stmt->bindParam(":gender",$data->Gender);
            $stmt->bindParam(":mobile",$data->Mobile_No);
            $stmt->bindParam(":email",$data->Email);

            if($stmt->execute()==TRUE){
                return true;
            }
            else{
                return false;
            }
        }

        public function getData(){
            $sql = "select * from student";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            return $stmt;
        }

    }
?>
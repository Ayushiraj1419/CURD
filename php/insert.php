<?php 
$connection = mysqli_connect('localhost','root','','curd');

extract($_POST);

$data = '';
foreach($_POST as $k => $v){
    if(empty($data)){
        $data .= "$k = '$v'";

    }else{
        $data .= ", $k = '$v'";
    }
}

$sql = "INSERT INTO student set $data";
$result = mysqli_query($connection, $sql);

if($result){
    echo "Dta submitted successfuly";
}else{
    echo "Done";
}
   
?>
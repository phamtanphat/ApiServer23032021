<?php
    require("connect.php");
    require("response.php");

    $query = "SELECT * FROM meal";

    $data = mysqli_query($con , $query);

    if (!$con->error){
        if($data->num_rows <= 0){
            echo json_encode(new Response([],"Thành công"));
        }else{

        }
    }else{
        echo $con->error;
    }

    class Meal{
        
    }


    
?>
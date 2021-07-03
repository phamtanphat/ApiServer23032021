<?php
    require("connect.php");
    require("response.php");
    require("mealModel.php");

    $id = $_GET['id'];
    $query = "SELECT * FROM meal WHERE id = $id";

    $data = mysqli_query($con , $query);

    $array = [];

    $meal;

    if (!$con->error){
        if($data->num_rows <= 0){
            echo json_encode(new Response([],"Thành công"));
        }else{
            while($row = $data->fetch_assoc()){
                $meal =  new MealModel(
                    $row['id'],
                    $row['name'],
                    $row['image'],
                    $row['youtube'],
                    $row['instruction'],
                    $row['calo'],
                    $row['ingredient'],
                    $row['carbo'],
                    $row['protein'],
                );
            }
            echo json_encode(new Response($meal,"Lấy dữ liệu thành công"));
        }
    }else{
        echo json_encode(new Response(null,$con->error));;
    }

    
?>
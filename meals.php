<?php
    require("connect.php");
    require("response.php");
    require("mealModel.php");

    $query = "SELECT * FROM mel";

    $data = mysqli_query($con , $query);

    $array = [];

    if (!$con->error){
        if($data->num_rows <= 0){
            echo json_encode(new Response([],"Thành công"));
        }else{
            while($row = $data->fetch_assoc()){
                array_push($array , new MealModel(
                    $row['id'],
                    $row['name'],
                    $row['image'],
                    $row['youtube'],
                    $row['instruction'],
                    $row['calo'],
                    $row['ingredient'],
                    $row['carbo'],
                    $row['protein'],
                ));
            }
            echo json_encode(new Response($array,"Lấy dữ liệu thành công"));
        }
    }else{
        echo json_encode(new Response(null,$con->error));;
    }

    
?>
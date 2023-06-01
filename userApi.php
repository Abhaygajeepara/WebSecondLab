<?php
    $con = 
    
    mysqli_connect("localhost","root","","ecommerce");
    
    $response = array();
    if($con){
        $sql = "select * from user";
        $result = mysqli_query($con,$sql);
        header("CONTENT-TYPE:JSON");
        if($result){
            $i = 0;
            while($row = mysqli_fetch_assoc($result)){
                $response[$i]['id'] = $row['id'];
                $response[$i]['email'] = $row['email'];
                $response[$i]['password'] = $row['password'];
                $response[$i]['name'] = $row['name'];
                $i++;
            }
            echo json_encode($response,JSON_PRETTY_PRINT);
        }
    }else{
        echo "Connetion failed";
        }
?>
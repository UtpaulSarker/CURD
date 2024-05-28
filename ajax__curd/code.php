<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "crud");

if (isset($_POST['checking_add'])) {
    $requestno = $_POST['requestno'];
    $area = $_POST['area'];
    $date = $_POST['date'];
    $ndate = $_POST['ndate'];
    $price = $_POST['price'];
    $total = $_POST['total'];
    $product = $_POST['product'];

    $query = "INSERT INTO crud (requestno,area,date,ndate,price,total,product) VALUES ('$requestno','$area','$date','$ndate','$price','$total','$product')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo $return  = "Successfully Stored";
    } else {
        echo $return  = "Something Went Wrong.!";
    }
}

if (isset($_POST["checking_view"])) {
    $data_id = $_POST['data_id'];
    $result_array = [];

    $query = "SELECT * FROM crud WHERE id='$data_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    } else {
        echo $return = "No Record Found.!";
    }
}


if (isset($_POST["checking_edit"])) {
    $data_id = $_POST['data_id'];
    $result_array = [];

    $query = "SELECT * FROM crud WHERE id='$data_id' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $row) {
            array_push($result_array, $row);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    } else {
        echo $return = "No Record Found.!";
    }
}


if (isset($_POST['checking_update'])) {
    $id = $_POST['data_id'];
    $requestno = $_POST['requestno'];
    $area = $_POST['area'];
    $date = $_POST['date'];
    $ndate = $_POST['ndate'];
    $price = $_POST['price'];
    $total = $_POST['total'];
    $product = $_POST['product'];
    $query = "UPDATE crud SET requestno='{$requestno}',area='{$area}',date='{$date}',ndate='{$ndate}',price='{$price}',total='{$total}',product='{$product}' WHERE id=$id";
    $query_run = mysqli_query($conn, $query);
    // $query_run=true;
    if ($query_run) {
        echo $return  = "Successfully Updated the Data";
    } else {
        echo $return  = "Something Went Wrong.!";
    }
}


if (isset($_POST['checking_delete'])) {
    $id = $_POST['data_id'];


    $query = "DELETE FROM crud  WHERE id=$id";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo $return  = "Successfully Delete the Data";
    } else {
        echo $return  = "Something Went Wrong.!";
    }
}

if (isset($_POST['mark_delete'])) {
    $id = $_POST['data_id'];

    //$ids = str_split($id, 3);

    //$_taskids = implode(",", $ids);
                if ($id) {
                    $query = "DELETE FROM crud WHERE id in($id)";
                    $query_run = mysqli_query($conn, $query);
                    if ($query_run) {
                        echo $return="Sucessfully Delete";
                    } else {
                        echo $return  = "Something Went Wrong.!";
                    }
                }

}

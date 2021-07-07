<?php
    $query = "SELECT * FROM <Table Name>";
    $result = mysqli_query($con, $query);
    $result_final = array();

    while($row = mysqli_fetch_array($result)){
        $result_final[] = $row;
    }
    echo json_encode($result_final, JSON_PRETTY_PRINT);
?>
<?php
    $query = "SELECT * FROM <Table Name>";
    $result = mysqli_query($con, $query);
    $result_final = array();

    header("Content-Type: JSON");
    while($row = mysqli_fetch_array($result)){
        $result_final[] = $row;
    }
    echo json_encode($result_final, JSON_PRETTY_PRINT);
?>

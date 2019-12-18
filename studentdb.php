<?php
require_once "connection.php";

function getStudents($where, $order){
    global $db;

    $select ="SELECT * FROM Student";
    if (isset($where) && !empty($where)) {
        $select = $select. " WHERE name like '%".$where."%'";
    }
    if ($order=="D") {
        $select = $select. " ORDER BY name DESC";
    } else {
        $select = $select. " ORDER BY name ASC";
    }
    
    $result = mysqli_query($db, $select);

    $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($db);

    return $data;
}

function getStudent($id){
    global $db;

    $select ="SELECT * FROM Student WHERE id=".$id;
    
    $result = mysqli_query($db, $select);

    $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($db);

    return $data;
}

?>

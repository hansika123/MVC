<?php 
    //database connection
    require "../model/model.php";
    $DB = new DB();

    //search users
    $results = $DB->select(
        "SELECT * FROM `user` WHERE `name`  LIKE ?  order by `id`",
        ["%{$_POST['search']}%"]
    );

    //output results
    echo json_encode(count($results)==0 ? null : $results);
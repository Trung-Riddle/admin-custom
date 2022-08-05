<?php
function getAll_Pro(){
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT id, name_dm, name, visible FROM tbl_product"); 
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt -> fetchAll();
    return $kq;
}
?>
<?php include './view/header.php';
        include './view/nav.php';
        include './view/dash.php';
        include './moduels/connect.php';
        connect_db();
        include './moduels/product.php';
        if(isset($_GET['act'])){
                $act =$_GET["act"];
                switch($act){
                  // product controller
                    case 'product':
                      $kq = getAll_Pro();
                      include './view/product.php'; 
                      break;
                  }
                }
?>

  
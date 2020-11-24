<?php 

//session_start();
//if(!isset($_SESSION['cart'])){
   // $_SESSION['cart']=array();
//}
//$ce = json_encode( $_SESSION['cart']);

//echo'<pre>'.$ce.'</pre>';

?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <?php include('headstyle.php') ?>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <?php include('navbar.php')?>

    <div class="jumbotron jumbotron-fluid jumbotron-bg d-flex align-items-end">
        <div class="container">
            <div class="bg-lighter p-3">
                <h1 class="wel display-3">歡迎光臨~</h1>
                <p class="sb lead">我們用最真誠的態度，做好每一個壽司</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group sticky-top">
                    <a href="#pane-1" class="list-group-item list-group-item-action active" data-toggle="list">
                        <i class="fas fa-utensils"></i>壽司
                    </a>
                    <a href="#pane-2" class="list-group-item list-group-item-action" data-toggle="list">
                        <i class="fas fa-ice-cream"></i>點心
                    </a>
                    <a href="#pane-3" class="list-group-item list-group-item-action" data-toggle="list">
                        <i class="fas fa-wine-glass-alt"></i>飲品
                    </a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane active" id="pane-1">
                        <div class="row">
                            <?php
                                $server='127.0.0.1:3307';
                                $user='root';
                                $database='test';
                                $database='test';
                                $dbppass='';

                                $db = new mysqli($server,$user,$dbppass,$database);

                                if(mysqli_connect_errno()){
                                    echo'<p>連線失敗</p>';
                                    exit();
                                }

                                $query="SELECT * FROM sushi";
                                $stmt = $db ->prepare($query);
                                $stmt->execute();
                                $stmt->store_result();
                                $stmt->bind_result($sid,$spro,$spd,$sp);
                                while($stmt->fetch())
                                {
                                    echo
                                    '<div class="col-md-4 mb-4">
                                        <div class="card box-shadow text-center h-100">
                                            <img class="card-img-top" src="https://images.unsplash.com/photo-1494281258937-45f28753affd?w=1350" alt="商品圖片" alst="Card image cap">
                                            <form action="change_page.php?pn='.$spro.'&pr='.$sp.'" method="POST">
                                                <div class="card-body">
                                                    <h5 class="card-title">'.$spro.'</h5>
                                                    <p class="card-text text-danger">價格：'.$sp.'</p>
                                                    <small><h6>細項：'.$spd.'</small></h6>
                                                </div>
                                                <div class="card-footer">
                                                    <input type="number" class="input-lg form-control" name="amount" id="quantity" value="1" >
                                                    <input type="submit" class="btn btn-danger mt-2" name="add_to_cart" value="確認">
                                                </div>
                                            </form>
                                        </div>
                                    </div>';
                                }

                            ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="pane-2">
                        <div class="row">
                            <?php

                                $query="SELECT * FROM dessert";
                                $stmt = $db ->prepare($query);
                                $stmt->execute();
                                $stmt->store_result();
                                $stmt->bind_result($deid,$dpro,$dpd,$dp);
                                while($stmt->fetch())
                                {
                                    echo
                                    '<div class="col-md-4 mb-4">
                                        <div class="card box-shadow text-center h-100">
                                            <img class="card-img-top" src="https://images.unsplash.com/photo-1494281258937-45f28753affd?w=1350" alt="商品圖片" alst="Card image cap">
                                            <form action="change_page.php?pn='.$dpro.'&pr='.$dp.'" method="POST">
                                                <div class="card-body">
                                                    <h5 class="card-title">'.$dpro.'</h5>
                                                    <p class="card-text text-danger">價格：'.$dp.'</p>
                                                    <h6><small>細項：'.$dpd.'</small></h6>
                                                </div>
                                                <div class="card-footer">
                                                    <input type="number" class="input-lg form-control" name="amount" id="quantity" value="1" >
                                                    <input type="submit" class="btn btn-danger mt-2" name="add_to_cart" value="確認">
                                                </div>
                                            </form>
                                        </div>
                                    </div>';
                                }

                            ?>
                        </div>
                    </div>
                    <div class="tab-pane" id="pane-3">
                        <div class="row">
                            <?php

                                $query="SELECT * FROM drink";
                                $stmt = $db ->prepare($query);
                                $stmt->execute();
                                $stmt->store_result();
                                $stmt->bind_result($drid,$dripro,$dripd,$drip);
                                while($stmt->fetch())
                                {
                                    echo
                                    '<div class="col-md-4 mb-4">
                                        <div class="card box-shadow text-center h-100">
                                            <img class="card-img-top" src="https://images.unsplash.com/photo-1494281258937-45f28753affd?w=1350" alt="商品圖片" alst="Card image cap">
                                            <form action="change_page.php?pn='.$dripro.'&pr='.$drip.'" method="POST">
                                                <div class="card-body">
                                                    <h5 class="card-title">'.$dripro.'</h5>
                                                    <p class="card-text text-danger">價格：'.$drip.'</p>
                                                    <h6><small>細項：'.$dripd.'</small></h6>
                                                </div>
                                                <div class="card-footer">
                                                    <input type="number" class="input-lg form-control" name="amount" id="quantity" value="1" >
                                                    <input type="submit" class="btn btn-danger mt-2" name="add_to_cart"value="確認">
                                                </div>
                                            </form>
                                        </div>
                                    </div>';
                                }
                                $stmt->free_result();
                                $db->close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>

</body>
</html>
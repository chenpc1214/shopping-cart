<?php session_start() ?>

<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <?php include('headstyle.php') ?>
</head>
<body>
    <?php

    $number=$_POST['amount'];
    $product=$_GET['pn'];
    $price=$_GET['pr'];
    $items=array($product,$price,$number);
    

    if(empty($_SESSION['cart'])){

        
        
        $_SESSION['cart'][]=$items;
        //$jec=json_encode($_SESSION['cart']);
        //$jdc=json_decode($jec);
        //echo'<pre>'.print_r($jdc).'</pre>';
        include('first_add.html');
        $arrc=array_column(($_SESSION['cart']),0);
    }
    else
    {
        if (!empty($_SESSION['cart'])) {
            $arrc=array_column($_SESSION['cart'], 0);
            if (in_array($items[0], $arrc)) {

                //$_SESSION['cart'][]=$items;
                for ($i=0;$i<count($_SESSION['cart']);$i++) {
                    if ($_SESSION['cart'][$i][0]==$items[0]) {
                        $_SESSION['cart'][$i][2]+=$items[2];
                        include('same_thing.html');
                    }
                }
            }
            else
            {
                $_SESSION['cart'][]=$items;
                include('different_thing.html');
                
            }
        }
    }
    
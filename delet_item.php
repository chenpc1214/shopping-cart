<?php

session_start();

$product=$_GET['action'];  //商品名稱


if(isset($product))
{
    foreach($_SESSION['cart'] as $key=>$value)
    {
        if(in_array($product,$value))
        {
            unset($_SESSION['cart'][$key]);
            echo '<meta http-equiv="refresh" content="0;url=cart.php">';


        }
    }
}


/*if(isset($product))
{
    $key=array_search($product,array_column($_SESSION['cart'],0));  //這種方法不慎理想
    unset($_SESSION['cart'][$key]);
    print_r($_SESSION['cart']);
    echo'<p>已經刪除物品'.$key.'</p>';
    header('Refresh:10;url=cart.php');

    
}*/


 //print_r(json_encode($_SESSION['cart']));

    /*for($i=0;$i<count($_SESSION['cart']);$i++)
    {
        if(in_array($arrg,$_SESSION['cart'][$i]))
        {
            unset($_SESSION['cart'][$i]);
            echo'<p>被刪除了</p>';
        }
    }*/


?>
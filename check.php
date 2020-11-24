<?php session_start() ?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <?php include('headstyle.php');
          include('navbar.php');

          $_SESSION['temp'][]=$_SESSION['cart'];  //另做一個購物車(temp)，裝現在的東西，送出訂單後，(cart)購物車理當不該有東西了

          for($i=0;$i<count($_SESSION['temp']);$i++)
          {
            $arr_pn=array_column($_SESSION['temp'][$i],0);
            $arr_pr=array_column($_SESSION['temp'][$i],1);
            $arr_number=array_column($_SESSION['temp'][$i],2);

          }
          
          $total=0;
          
     ?>
</head>
<body>

    <div class="container">
        <h2>最終訂購資訊</h2>
        <p></p>            
            <table class=" table table-striped">
                <thead>
                    <tr>
                        <th>產品名稱</th>
                        <th>價格</th>
                        <th>數量</th>
                        <th>小計</th>
                        <th>總計</th>
                    </tr>
                </thead>
                <tbody>

                <?php
        
                    
                    if(empty($_SESSION['cart']))
                    {
                        echo'<p>您還未選購商品</p>';
                    }
                    else
                    {
                        for($i=0;$i<count($_SESSION['temp']);$i++)
                        {
                            echo 
                                '<tr>
                                    <td>'.$arr_pn[$i].'</td>
                                    <td>'.$arr_pr[$i].'</td>
                                    <td>'.$arr_number[$i].' 個</td>
                                    <td>NT '.$arr_pr[$i]*$arr_number[$i].'</td>
                                    <td></td>
                                </tr>';
                                $total+=($arr_pr[$i]*$arr_number[$i]);
                        }
                    }
                    echo'<tr>
                            <td colspan=4></td><td>$NT' .$total.'</td>
                        </tr>';

                        unset($_SESSION['cart']);

                ?>
                
                </tbody>
            </table>
    </div>
    
</body>
</html>
<?php session_start() ?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <?php include('headstyle.php');
          include('navbar.php');
          
          $arr_pn=array_column($_SESSION['cart'],0);
          $arr_pr=array_column($_SESSION['cart'],1);
          $arr_number=array_column($_SESSION['cart'],2);
          $total=0;
          
     ?>
</head>
<body>

    <div class="container">
        <h2>以下是您的訂購資訊</h2>
        <p></p>            
            <table class=" table table-striped">
                <thead>
                    <tr>
                        <th>產品名稱</th>
                        <th>價格</th>
                        <th>數量</th>
                        <th>小計</th>
                        <th>刪除</th>
                        <th>總計</th>
                    </tr>
                </thead>
                <tbody>

                <?php
        
                    
                    if(empty($_SESSION['cart']))
                    {
                        echo '<p>購物車沒東西~~~~~~~手刀搶購去</p>';
                    }
                    else
                    {
                        for($i=0;$i<count($_SESSION['cart']);$i++)
                        {
                            echo 
                                '<tr>
                                    <td>'.$arr_pn[$i].'</td>
                                    <td>'.$arr_pr[$i].'</td>
                                    <td>'.$arr_number[$i].' 個</td>
                                    <td>NT '.$arr_pr[$i]*$arr_number[$i].'</td>
                                    <td><a href=delet_item.php?action='.$arr_pn[$i].'>刪除</a></td>
                                    <td></td>
                                </tr>';
                                $total+=($arr_pr[$i]*$arr_number[$i]);
                        }
                    }
                    echo'<tr>
                            <td colspan=5></td><td>'.$total.'</td>
                        </tr>';

                    echo '<td colspan=6 class=text-center>
                          <form action=check.php method="POST">'.
                          '<input type="submit" class="btn btn-success" value = "確認購買">'
                          .'</form></td>';
                        
                          

                
                ?>
                
                </tbody>
            </table>
    </div>
    
</body>
</html>

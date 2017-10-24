<?php date_default_timezone_set("PRC");
header("Content-type: text/html; charset=utf-8");
//$link = mysqli_connect("localhost","a0925210840","c1d0c94d","a0925210840");
$link = mysqli_connect("localhost","root","","zhang");
mysqli_query($link,'set names utf8');
if($link){
    include "data.php";
    $len = count($proListData);
    for($i = 0; $i < $len ; $i++){
        $sql_str = "INSERT INTO `zxd_pro_list`(`pro_id`, `pro_desc`, `imgSrc`, `num`, `weight`, `price`, `month_sale`) VALUES ('".$proListData[$i]['pro_id']."','".$proListData[$i]['pro_desc']."','".$proListData[$i]['imgSrc']."','".$proListData[$i]['num']."','".$proListData[$i]['weight']."','".$proListData[$i]['price']."','".$proListData[$i]['month_sale']."')";
        mysqli_query($link,$sql_str);
    }
    $sql_str1 = "SELECT * FROM `zxd_pro_list` WHERE 1";
    $res = mysqli_query($link,$sql_str1);
    $rows = [];
    while($row = mysqli_fetch_assoc($res)){
        $rows[] = $row;
    }
    if(count($rows) > 0){
        echo "您的数据已导入成功!";
    }
}else{
    die("database connect failed…");
}


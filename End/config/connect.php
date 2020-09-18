<?php
    if(!defined('TEMPLATE')){
        die("Bạn không có quyền truy cập vào file này");
    }
    mysqli_connect('localhost' , 'root', '', 'git-demo-2');
    if($conn){
        mysqli_connect($conn, "SET NAMES 'uft8'");
    }
    else{
        die("Không thể kết nối tới MySQL Sever");
    }
?>
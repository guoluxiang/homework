<?php 
     require_once '../connect.php';  
 //     通过$_GET函数获得select.php中点击delete超链接所提交的name 
     $name=$_GET['name']; 
 //     删除数据库中名字de 一行数据 
     $sql="DELETE FROM library WHERE name='$name'"; 
 //     访问数据库成功则输出delete successful!的提示框，并且跳转到select.php 
  
     if(mysqli_query($con, $sql)){ 
         echo "<script>alert('delete successful!'); 
             window.location.href='select.php';</script>"; 
     }else{ 
         echo "<script>alert('delete failed!'); 
             window.location.href='select.php';</script>"; 
     } 
?>
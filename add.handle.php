<?php  
    require_once '../connect.php'; 
//    把 name content price发送到$_POST
	 $name=$_POST['name']; 
	 	  $content=$_POST['content']; 
     $price=$_POST['price']; 
     echo $name; 
 //     在数据库中增加 name content price  
     $sql="INSERT INTO library(name,content,price)VALUES('$name','$content',$price)"; 
  
 //     访问失败的情况 
     if(mysqli_query($con, $sql)){ 
         echo "<script>alert('add successful!'); 
             window.location.href='select.php';</script>"; 
     }else{ 
         echo "<script>alert('add failed!'); 
             window.location.href='select.php';</script>"; 
     } 

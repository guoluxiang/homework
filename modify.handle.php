<?php 
     require_once '../connect.php'; 
     //     modify传给$_POS
     //php中点击“提交”按钮所提交的name和content 
     $name=$_POST['name']; 
 //   例如  $name='zhangsan'; 
     $content=$_POST['content']; 
 //    用来 更新数据库中的name和content 
     $sql="UPDATE library SET content='$content'WHERE name='$name'"; 
     
     if(mysqli_query($con, $sql)){ 
         echo "<script>alert('modify successful!'); 
             window.location.href='select.php';</script>"; 
     }else{ 
         echo "<script>alert('modify failed!'); 
             window.location.href='select.php';</script>"; 
     } 
?>
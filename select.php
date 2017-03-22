<?php 
 //     将connect.php包含进来 
     require_once '../connect.php'; 
     $sql="SELECT * FROM library "; 
 //     $temp是个mysql_result类型的变量 
     $temp=mysqli_query($con, $sql); 
     //通过mysql_fetch_assoc可以将放在$temp中的id ,name,content,price拿出来，每次取出来一行 
      while ($row=mysqli_fetch_assoc($temp)) 
     { 
         //每次取出来的一行数据放到$data数组中 
         $data[]=$row; 
     } 
 ?> 
 <!-- html5和php的语句不能混合在一起书写 --> 
 <!--     增加add超链接 --> 
     <a href="add.php">add</a> 
 <?php  
     echo "<br>"; 
 //     将data数组中的每一个元素输出 
     foreach ($data as $everyData) 
     { 
         echo $everyData['name'].":".$everyData['price']. 
         "&nbsp&nbsp&nbsp".$everyData['content']; 
 ?> 
 <!--     增加delete和modify的超链接，“？”后面的name是点击链接所提交的参数 --> 
     <a href="delete.handle.php?name=<?php echo $everyData['name']?>">delete</a> 
     <a href="modify.php?name=<?php echo $everyData['name']?> ">modify</a> 
 <?php  
     echo "<br>"; 
     } 
 ?> 

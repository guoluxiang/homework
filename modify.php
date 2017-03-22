<?php 
 //     通过$_GET函数获得select.php中点击delete超链接所提交的name 
     $name=$_GET['name']; 
 ?> 
 <html> 
 <body>    
 <!--     此表格提交的对象为modify.handle.php --> 
 <form action="modify.handle.php" method="post"> 
 <!--     直接将获得的name参数填写在name框中 --> 
         name:<input type="text" name="name" value=<?php echo $name?>><br> 
         content:<input type="text" name="content"><br> 
         price:<input type="text" name="price"><br> 
         <input type="submit" value="提交"> 
 </form> 
 </body> 
 </html> 

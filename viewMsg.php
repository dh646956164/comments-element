<?php
header("content-type:text/html;charset=utf-8");  //设置编码
?>
<?php 
    $filename = 'message.rtf';
    if(file_exists($filename)&&filesize($filename) >0){
          //从message.txt里面取数据
          $str = file_get_contents($filename);
         //通过反序列化把字符串转化成我们的二维数组
          $userInfo = unserialize($str);
      }else{
          $userInfo = null;
     }
 ?>
 <!DOCTYPE html>
 <html>
 <head lang="en">
     <meta charset="UTF-8">
     <title></title>
     <script src="jquery-2.2.3.js" type="text/javascript"></script>
 </head>
 <body>
     <h3 style="text-align:center;">留言列表页-<a href="addMsg.php">添加留言</a></h3>
     <table style="margin: 0 auto;" border="1" width="80%" cellpadding="0" cellspacing="0" backcolor="blue">
         <tr style="text-align:center;">
         <td>编号</td>
         <td>标题</td>
         <td>内容</td>
         <td>留言者</td>
         <td>发布时间</td>
         <td>心情</td>
         </tr>
        <?php
             foreach ($userInfo as $key=>$val){ 
         ?>
        <tr style="text-align:center;">
         <td><?php echo $key?></td>
         <td><?php echo $val['username'];?></td>
        <td><?php echo $val['title'];?></td>
         <td><?php echo $val['content'];?></td>
        <td><?php echo $val['time'];?></td>
        <td><img width="100" height="50" alt="" src="img/<?php echo $val['moon'];?>"></td>
        </tr>
        <?php }  ?>
    </table>
 </body>
 </html>
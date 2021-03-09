<?php
header("content-type:text/html;charset=utf-8");  //设置编码
?>
<?php
 $username = isset($_GET['user'])?$_GET['username']:'';
 $title =  isset($_GET['job'])?$_GET['title']:'';
 $content =  isset($_GET['123'])?$_GET['content']:'';
 $time = date('Y-m-d h:i:s');
  $act = isset($_GET['act'])?$_GET['act']:'';
  
 $filename = 'message.rtf';
 // echo $username.$title.$content.$moon;
 //来到doAction页面的时候先做一个判断1、message页面是否已经存在 2、文件里面有没有数据 3、有数据的话就把数据取出来
 if(file_exists($filename)&&filesize($filename)>0){
     //从message.txt里面取数据
     $str = file_get_contents($filename);
     //通过反序列化把字符串转化成我们的二维数组
     $arr = unserialize($str);
 }
 
 if ($act == 'add') {
     $arr[]=array(
        'username'=>$username,
        'title'=>$title,
        'content'=>$content,
        'time'=>$time
     );
    $data = serialize($arr);
  // print_r($arr);
     //判断是否添加成功了
     if(file_put_contents($filename, $data)){
         echo 'successful！<br/><a href="addMsg.php">again</a>|<a href="viewMsg.php">check</a>';
     }else{
         echo 'false！';
     }
 }
 ?>
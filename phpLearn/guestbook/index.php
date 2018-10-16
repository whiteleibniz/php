<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/13
 * Time: 9:30
 */
include "conn.php";
$sql="select * from  `message`";
$result=mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if($num){
while ($array=mysqli_fetch_array($result)){
?>

<table border="0" cellpadding="1" align="center" bgcolor="#f5f5dc" width="500">
    <tr bgcolor="#f0f8ff">
        <td width="100">用户名</td>
        <td width="100">邮箱</td>
        <td width="100">内容</td>
    </tr>
    <tr bgcolor="#7fffd4">
        <td width="100"><a href="reply.php?mid=<?php echo $array['id']?>"><?php echo $array['username']?></a></td>
        <td width="100"><?php echo  $array['email']?></td>
        <td width="100"><?php echo  $array['content']?></td>
    </tr>
</table>
<?php
}}
?>
<br>
<div align="center"><a href="add.php">我要留言！</a></div>


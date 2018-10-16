<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/13
 * Time: 10:13
 */
include "conn.php";

if (!empty($_GET['mid'])) {
    $mid = $_GET['mid'];
    $sql = "select * from reply WHERE mid=$mid";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);
    if($num){
        while ($array=mysqli_fetch_array($result)){

?>
    <table align="center" cellpadding="1" bgcolor="#f0f8ff">
        <tr bgcolor="#f0ffff">
            <td>回复人</td>
            <td>回复人邮箱</td>
            <td>回复内容</td>
        </tr>
        <tr bgcolor="#deb887">
            <td><?php echo $array['username'];?></td>
            <td><?php echo $array['email']?></td>
            <td><?php echo $array['content']?></td>
        </tr>
    </table>
<?php
        }
    }?>

    <div align="center">
        <form action="reply.php" method="post">
            回复人姓名:<input type="text" name="username"></br>
            回复人邮箱:<input type="email" name="email"></br>
            回复内容：<textarea name="content"></textarea></br>
            <input type="hidden" name="mid" value="<?php echo $mid?>">
            <input type="reset" value="重置">
            <input type="submit" value="回复"name="post" >
        </form>
    </div>

<?php }?>

<?php
if (!empty($_POST['post'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $content = $_POST['content'];
    $mid = $_POST['mid'];
    $sql = "insert into `reply` (`username`,`email`,`content`,`mid`) VALUES (" . "'" . $username . "'," . "'" . $email . "'," . "'" . $content . "'," . "'" . $mid . "'" . ")";
    $result  = mysqli_query($conn,$sql);
    if($result){
        echo "<script type=\"text/javascript\">alert('留言成功！');location.href='reply.php?mid=$mid'</script>";
    }else{
        echo "<script type=\"text/javascript\">alert('留言失败！');location.href='reply.php?mid=$mid'</script>";
    }
}
?>


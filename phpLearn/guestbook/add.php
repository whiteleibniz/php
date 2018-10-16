<?php
include "conn.php";

if(!empty($_POST['post'])){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $content=$_POST["content"];

    $sql = "insert into `message` (`username`,`email`,`content`) VALUES ("."'".$username."',"."'".$email."',"."'".$content."')";
    echo $sql;
    $result = mysqli_query($conn,$sql);
    if($result){
       echo "<script type=\"text/javascript\">alert('留言成功！');location.href='index.php'</script>";
    }else{
        echo "<script type=\"text/javascript\">alert('留言失败！');location.href='index.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言板</title>
</head>
    <form action="add.php" method="post" name="message">
        用户名:<input type="text" name="username"></br>
        邮箱:<input type="email" name="email"></br>
        内容:<textarea name="content"></textarea></br>
        <input type="reset" value="重置">
        <input type="submit" value="留言" name="post"></br>
    </form>
</body>
</html>
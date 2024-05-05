<?php
echo "輸入的姓名為： ".$_POST['Nam']."<br>";
echo "輸入的密碼為： ".$_POST['password']."<br>";
echo "輸入的出生日期為： ".$_POST['date']."<br>";
echo "輸入的信箱為： ".$_POST['mail']."<br>";
echo "輸入的學號為： ".$_POST['id']."<br>";
echo "勾選的年級： ".$_POST['grade']."<br>";
echo "輸入的修課名稱為： "."<br>";
foreach($_POST["sel"] as $value) 
{
    echo $value."<br>";
}

?>
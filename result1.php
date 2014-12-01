<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><center>
<br><h3 align="left">โต๊ะ=<?php 
echo $_POST['select13']; ?> <br>
<br>จำนวนชาม=<?php
echo $_POST['select']; ?> ชาม<br>
<br>เลือกเส้น=<?php
echo $_POST['select2']; ?> <br>
<br>น้ำซุบ=<?php
echo $_POST['select3']; ?> <br>



<br>ไข่มะตูมราคาล่ะ15 บ.=<?php
echo $_POST['select9']*55; ?> บาท<br>



<br>กุ้งราคาตัวล่ะ55บ.=<?php
echo $_POST['select10']*55; ?> บาท<br>

<br>ปลาหมึกราคาตัวล่ะ55บ.=<?php
echo $_POST['select11']*55; ?> บาท<br>

<br><br>

#ส่วนผสม<br>
<?php if(isset($_POST['CheckboxGroup1_'])){?>
หมูสับ<br><?php }?>

 <?php if(isset($_POST['CheckboxGroup1_2'])){?>
ลูกชิ้น<br><?php }?>

 <?php if(isset($_POST['CheckboxGroup1_3'])){?>
ตับลวก<br> <?php }?>

 <?php if(isset($_POST['CheckboxGroup1_4'])){?>
ผักชี <br><?php }?>

 <?php if(isset($_POST['CheckboxGroup1_5'])){?>
กระเทียม <br><?php }?>

 <?php if(isset($_POST['CheckboxGroup1_6'])){?>
ถั่วงอก<br><?php }?>
 
 #ราคารวม<br>s
<?php echo $_POST['select']*35+($_POST['select9']*55)+($_POST['select10']*55)+($_POST['select11']*15); ?>

</body>
</html>
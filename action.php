<?php 
$con=mysqli_connect('localhost','root','','carservice');
session_start();
if (isset($_POST['alogin'])) {
	$name=$_POST['uname'];
	$psw=$_POST['psw'];
	$sql="SELECT * FROM admin WHERE name='$name'AND psw='$psw'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)==1) {
		$_SESSION['aname']=$name;
		header('location:../admin.php');
	}
}
if (isset($_POST['signup'])) {
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$pno=$_POST['pno'];
	$add=$_POST['add'];
	$psw=$_POST['psw'];
	$email=$_POST['email'];
	$sql="SELECT * FROM user_info WHERE uname='$uname'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "<h4>USERNAME ALREADY EXIST PLEASE ENTER VALID USERNAME</h4>";
	}else{
		$sql="INSERT INTO `user_info` (`uid`, `name`, `uname`, `adds`, `psw`, `email`, `pno`) 
		VALUES (NULL, '$name', '$uname', '$add', '$psw', '$email', '$pno')";
		$run=mysqli_query($con,$sql);
		if($run){
			$_SESSION['uid']=mysqli_insert_id($con);
			$_SESSION['uname']=$uname;
			header('location:login.php');
		}
	}
}
if (isset($_POST['login'])) {
   $name=$_POST['uname'];
   $psw=$_POST['psw'];
   $sql="SELECT * FROM user_info WHERE uname='$name'AND psw='$psw'";
   $run=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($run);
   if (mysqli_num_rows($run)==1) {
        $_SESSION['uid']=$row['uid'];
		$_SESSION['uname']=$name;
		header('location:../profile.php');
	}
}
if (isset($_POST['bookservice'])) {
	$uid=$_SESSION['uid'];
	$cname=$_POST['cname'];
	$cno=$_POST['cno'];
	$cmodel=$_POST['cmodel'];
	$stype=$_POST['stype'];
	$date=$_POST['date'];
	$prob=$_POST['prob'];
	$sql="SELECT * FROM service_booking WHERE uid='$uid' AND cname='$cname'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "<h4 class='text-center' >Already Booked Service</h4>";
	}else{
		$sql="INSERT INTO `service_booking` (`sid`, `uid`, `cname`, `cno`, `cmodel`, `ser_date`, `ser_type`, `problem`) 
		VALUES (NULL, '$uid', '$cname', '$cno', '$cmodel', '$date', '$stype', '$prob') ";
		$run=mysqli_query($con,$sql);
		if ($run) {
			header('location:../profile.php');
		}
	}
}
if (isset($_POST['add'])) {
	$_SESSION['ssid']=$_POST['sid'];
	$_SESSION['suid']=$_POST['uid'];
}
if (isset($_POST['addservice1'])) {
	$suid=$_SESSION['suid'];
	$ssid=$_SESSION['ssid'];
	$pname=$_POST['pname'];
	$pprice=$_POST['pprice'];
	$scharge=$_POST['scharge'];
	$sql="SELECT * FROM service_details WHERE sid='$ssid'AND part='$pname'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "Already  Entered this part";
		unset($_SESSION['ssid']);
		unset($_SESSION['suid']);
	}else{
		$sql="INSERT INTO `service_details` (`sid`, `part`, `part_price`, `service_charge`) 
		VALUES ('$ssid', '$pname', '$pprice', '$scharge')";
		$run=mysqli_query($con,$sql);
		if($run){
			echo "Services Added";
			unset($_SESSION['ssid']);
		    unset($_SESSION['suid']); 
				
		}else{
			echo "Please Enter valid details";
			unset($_SESSION['ssid']);
		    unset($_SESSION['suid']);
			
		}
	}

}
if (isset($_POST['bill'])) {
	$_SESSION['ssid']=$_POST['sid'];
	$_SESSION['suid']=$_POST['uid'];
}
if (isset($_POST['back'])) {
	unset($_SESSION['ssid']);
	unset($_SESSION['suid']);
}
if (isset($_POST['cancle'])) {
	$sid=$_POST['sid'];
	$uid=$_POST['uid'];
	$sql="DELETE FROM service_booking WHERE sid='$sid'AND uid='$uid'";
	$run=mysqli_query($con,$sql);
	if ($run) {
		echo "Booking cancle";
	}
}
if (isset($_POST['pay'])) {
	$sid=$_POST['sid'];
	$uid=$_SESSION['uid'];
	$sql1="DELETE FROM service_booking WHERE sid='$sid'AND uid='$uid'";
	$run1=mysqli_query($con,$sql1);
	$sql2="DELETE FROM service_details WHERE sid='$sid'";
	$run2=mysqli_query($con,$sql2);
	if ($run2) {
		echo "Your payment is successful .... Thanku....";
	}
}
?> 
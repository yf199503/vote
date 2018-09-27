<?php session_start(); ?>
<?php
	$sName = $_REQUEST['sName'];//姓名
	$vitae = $_REQUEST['vitae'];//个人简历
	$anvitae = $_REQUEST['anvitae'];//案例简历
	$lianjie = $_REQUEST['lianjie'];//案例链接
	$piaoshu = $_REQUEST['piaoshu'];//票数
	$position = $_REQUEST['position'];//职位
	$state = $_REQUEST['state'];//状态
if ((($_FILES['file']['type'] == 'image/gif')||($_FILES['file']['type'] == 'image/jpg')||($_FILES['file']['type'] == 'image/png')||($_FILES['file']['type'] == 'video/mp4')||($_FILES['file']['type'] == 'image/jpeg')||($_FILES['file']['type'] == 'image/pjpeg'))&&($_FILES['file']['size'] < 10241000)){
	if($_FILES["file"]["error"] > 0){
		echo "错误: " . $_FILES["file"]["error"] . "<br />";
	}else{
		$filename = "upload/".date('YmdHis')."jpg";
		move_uploaded_file($_FILES["file"]["tmp_name"],$filename);
	}
}else{
	echo "类型错误";

}
	$conn = mysqli_connect("127.0.0.1","root","");
	mysqli_select_db($conn,"vote");
	mysqli_query($conn,"set names utf8");

	$sql = "insert into vote(name,summary,caseshow,position,pic,url,votenum,status) value('{$sName}','{$vitae}','{$anvitae}','{$position}','{$filename}','{$lianjie}','{$piaoshu}','{$state}')";

	$result = mysqli_query($conn,$sql);
	if($result){
		echo "数据插入成功";
		header("Refresh:100;url=vote-input.php");
	}else{
		echo "数据插入失败".mysqli_error($conn);
		header("Refresh:100;url=vote-input.php");
	}
	mysqli_close($conn );
?>
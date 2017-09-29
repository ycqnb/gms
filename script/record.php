<?php
	// 屏蔽提示
	error_reporting(E_ALL || ~E_NOTICE);

	$Title = "这里是操作记录页";
	require_once("../html/header.html");
	require_once("../config/menu.php");
	
	// 检测登陆状态
	require_once("check.php");
	$checkVal = JurisdictionCheck(basename($_SERVER["PHP_SELF"]), $_SESSION[uid]);
	if ($checkVal != 0) {
		echo "<script language=javascript>alert('$error_notice[$checkVal]');history.back();</script>";
	}

	require_once("../config/DBList.php");
?>

<table width = '100%' class = 'record_table'>
	<tr><th>名称</th><th>操作信息</th><th>操作服</th><th>玩家信息</th><th>时间</th></tr>
	<?php
		$conn = GetDBByIndex(0);
		if ($conn != null) {
			$sql = "select * from option_record order by id desc";
			$query = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
				echo "<tr><th>$row[username]</th><th>$row[option]</th><th>$row[optionserver]</th><th>$row[player]</th><th>$row[time]</th></tr>";
			}
			mysqli_free_result($query);
			mysqli_close($conn);
		}
	?>
</table>


<?php
	if($_POST[submitcommand]){
		$conn = GetDBByIndex($_POST[serverid]);
		if ($conn == null) {
			exit();
		}

		$sql = "insert into gmcommand(worldid, type, command, param) values('$_POST[serverid]', '$_POST[type]', '$_POST[command]', '$_POST[param]')";
		mysqli_query($conn, $sql);

		if ($_POST[type] == 1) {
			OnRecordOptionGuid($_SESSION[name], 'GM命令-'.$_POST[command], $_POST[serverid], $_POST[param]);
		}
		else {
			OnRecordOption($_SESSION[name], 'GM命令-'.$_POST[command], $_POST[serverid], $_POST[param]);
		}
		header("Location: #");
	}

	if($_POST[submitcommand2]){
		if ($_SESSION[DBIndex] != $_POST[serverid]) {
			$conn = GetDBByIndex($_POST[serverid]);
			if ($conn != null) {
				$_SESSION[DBIndex] = $_POST[serverid];
				header("Location: #");
			}
		}
	}

	require_once("../html/bottom.html");
?>
<?php
	$Title = "这里是GM命令页";
	require_once("../html/header.html");
	echo "<div class = 'shade_div'></div>";
	require_once("../config/menu.php");

	require_once("../script/check.php");

	// 检测登陆状态
	$checkVal = JurisdictionCheck(basename($_SERVER["PHP_SELF"]), $_SESSION[uid]);
	if ($checkVal != 0) {
		ThrowError($checkVal);
	}

	require_once("../config/DBList.php");
	require_once("../script/optionrecord.php");
	require_once("../script/selectserver.php");
?>

<form action="" method="post" class = 'command_form2'>
 	<!--服id：<input name="serverid" type="text" />-->
 	类型：<input name="type" type="text" />
 	命令：<input name="command" type="text" />
 	参数：<input name="param" type="text" />
 	<input name="submitcommand" type="submit" value="提交" />
</form>

<hr class = 'command_hr' />

<?php
	if($_POST[submitcommand]){
		$conn = GetDBByIndex($_SESSION[DBIndex]);
		$serverId = GetServerId($_SESSION[DBIndex]);
		if ($conn == null || $_SESSION[DBIndex] <= 0 || $serverId <= 0) {
			alertMsg("请先选择服再操作");
		}
		else {
			if (empty($_POST[type]) || empty($_POST[command]) || empty($_POST[param])) {
				alertMsg("请先填好信息");
			}
			else {
				$sql = "insert into gmcommand(worldid, type, command, param) values('$serverId', '$_POST[type]', '$_POST[command]', '$_POST[param]')";
				mysqli_query($conn, $sql);
		
				if ($_POST[type] == 1) {
					OnRecordOptionGuid($_SESSION[name], 'GM命令-'.$_POST[command], $_SESSION[DBIndex], $_POST[param]);
				}
				else {
					OnRecordOption($_SESSION[name], 'GM命令-'.$_POST[command], $_SESSION[DBIndex], $_POST[param]);
				}
			}
		}
	}

	$table_class = 'command_table';
	require_once("../script/GMCommandTable.php");

	require_once("../html/bottom.html");
?>
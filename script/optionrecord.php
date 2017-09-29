<?php
	// 屏蔽提示
	error_reporting(E_ALL || ~E_NOTICE);

	$absolute_path = dirname(dirname(__FILE__));

	require_once("$absolute_path/config/DBList.php");

	// 设置默认时区为北京
	date_default_timezone_set('PRC');

	function OnRecordOption($userName, $option, $server, $player) {
		// 这里不检测了，直接记录
		$conn = GetDBByIndex(0);
		if ($conn == null) {
			exit();
		}

		$conn1 = GetDBByIndex($server);
		if ($conn1 == null) {
			// 所选服不存在
			exit("所选服不存在");
		}

		$time = date("Y/m/d h:i:sa");

		$sql = "insert into option_record(username, `option`, optionserver, player, time) value('$userName', '$option', '$server', '$player', '$time')";
		mysqli_query($conn, $sql);
	}

	function OnRecordOptionGuid($userName, $option, $server, $guid) {
		$conn = GetDBByIndex(0);
		if ($conn == null) {
			exit();
		}

		$conn1 = GetDBByIndex($server);
		if ($conn1 == null) {
			// 所选服不存在
			exit("所选服不存在");
		}

		$sql1 = "select * from charfulldata where guid = '$guid'";
		$query = mysqli_query($conn1, $sql1);
		$row = mysqli_fetch_array($query);
		if ($row == null) {
			// 操作角色不存在
			exit("操作角色不存在");
		}

		$player = $row[charname];

		$time = date("Y/m/d h:i:sa");

		$sql2 = "insert into option_record(username, `option`, optionserver, player, time) value('$userName', '$option', '$server', '$player', '$time')";
		mysqli_query($conn, $sql2);
	}
?>
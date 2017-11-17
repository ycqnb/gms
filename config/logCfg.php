<?php
	function GetLogTypeName($LogTypeVal) {
		$logTypeInfo = array(
			2 => "穿上装备",
			3 => "取下装备",
			4 => "丢弃物品",
			5 => "新服奖励(首周)",
			6 => "每日奖励",
			7 => "在线奖励",
			8 => "系统商店购买",
			9 => "拾取",
			10 => "GM指令给予",
			11 => "里程碑奖励",
			12 => "任务奖励",
			13 => "接受送信任务给予",
			14 => "采集任务给予",
			15 => "统一消耗",
			16 => "装备强化扣除材料",
			17 => "完成送信任务删除",
			18 => "完成采集任务删除",
			19 => "装备强化修改属性",
			20 => "装备打星修改属性",
			21 => "商店回购栏增加",
			22 => "从商店回购",
			23 => "商店回购栏减少",
			24 => "物品使用",
			25 => "邮件提取获得",
			26 => "任务物品",
			27 => "美人亲密奖励",
			28 => "放弃任务物品删除",
			29 => "千里传音消耗",
			30 => "寄售行扣除",
			31 => "宝石镶嵌",
			32 => "宝石摘除",
			33 => "每日幸运抽奖",
			34 => "活跃度奖励",
			35 => "元宝商店",
			36 => "生活技能消耗",
			37 => "生活技能产出",
			38 => "乾坤袋材料消耗",
			39 => "乾坤袋配方产出",
			40 => "有效期到了删除",
			41 => "求婚戒指删除/结婚戒指删除",
			42 => "求婚后给新的",
			43 => "GM指令清背包",
			44 => "等级礼包条件",
			45 => "充值活动首充礼包奖励",
			46 => "放入仓库 从背包删除",
			47 => "放入仓库 往仓库添加",
			48 => "仓库取出 从仓库删除",
			49 => "仓库取出 往背包添加",
			50 => "更改名字",
			51 => "激活码礼包",
			52 => "添加星级装备",
			53 => "使用红蓝药专用",
			54 => "消耗雾影寻踪",
			55 => "分享",
			56 => "分享奖励礼包",
			57 => "师门商店购买时删除",
			58 => "师门商店购买",
			59 => "里程碑奖励",
			60 => "脚本设置药动态数据域",
			61 => "脚本删除药",
			62 => "畅游老玩家回馈奖励",
			63 => "添加商票",
			64 => "删除商票",
			65 => "装扮圣诞树",
			66 => "修改跑商商票金币",
			67 => "装备失魂Tick",
			68 => "红装重置",
			69 => "战场递交物品",
			70 => "玩家商店购买",
			71 => "玩家商店卖东西",
			72 => "玩家商店开空位",
			73 => "存入运营资金",
			74 => "玩家商店下架",
			75 => "购买物品",
			76 => "行酒令",
			77 => "礼包/福利/活动奖励",
			78 => "穿上法宝",
			79 => "脱下法宝",
			80 => "洗练法宝",
			81 => "升品法宝",
			82 => "VIP礼包获得物品",

			10001 => "经济相关在此之后添加！！！",
			10002 => "卖出增加",
			0003 => "里程碑奖励",
			10004 => "任务奖励",
			10005 => "GM命令操作",
			10006 => "新服奖励(首周)",
			10007 => "每日奖励",
			10008 => "在线奖励",
			10009 => "购买扣除",
			10010 => "消耗系统消耗",
			10011 => "原地复活",
			10012 => "邮件提取获得",
			10013 => "掉落金币",
			10014 => "摇钱树金币奖励",
			10015 => "摇钱树元宝消耗",
			10016 => "武道之巅奖励",
			10017 => "GM指令增加",
			10018 => "技能升级消耗",
			10019 => "副本奖励消耗",
			10020 => "副本奖励",
			10021 => "日常任务消耗",
			10022 => "日常任务奖励",
			10023 => "每日幸运抽奖",
			10024 => "活跃度领奖",
			10025 => "寄售行扣除元宝",
			10026 => "每日幸运抽奖扣除元宝",
			10027 => "创建帮会扣除",
			10028 => "创建帮会失败返还",
			10029 => "副本扫荡奖励",
			10030 => "元宝商店消耗",
			10031 => "创建师门扣除",
			10032 => "创建师门失败返还",
			10033 => "雇佣扣除",
			10034 => "酒楼结算奖励",
			10035 => "酒楼结算失败扣除",
			10036 => "生活技能制作费用",
			10037 => "购买时装消耗元宝",
			10038 => "乾坤袋合成配方费用",
			10039 => "购买体力",
			10040 => "华山论剑消耗	",
			10041 => "华山论剑获得",
			10042 => "装备打星消耗金币",
			10043 => "充值获得元宝",
			10044 => "门派大弟子",
			10045 => "江湖名人录",
			10046 => "排行奖励",
			10047 => "BUFF",
			10048 => "帮战",
			10049 => "江湖名人录",
			10050 => "副本重置",
			10051 => "等级礼包赠送",
			10052 => "充值活动首充礼包奖励",
			10053 => "充值活动首周礼包奖励",
			10054 => "充值活动月卡礼包奖励",
			10055 => "充值活动成长礼包奖励",
			10056 => "扣除的税",
			10057 => "充值活动不定时返利奖励",
			10058 => "SNS每日分享奖励",
			10059 => "分享南瓜奖励",
			10060 => "南瓜分享礼包",
			10061 => "金钱礼包使用获取金钱",
			10062 => "江湖郎中恢复血蓝消耗金币",
			10063 => "许愿池还愿",
			10064 => "帮会邮件消耗金币",
			10065 => "许愿池许愿中奖",
			10066 => "充值活动老服返利",
			10067 => "GMTool",
			10068 => "GMTool",
			10069 => "台湾需求，渠道返利",
			10070 => "跑商完成给金币",
			10071 => "活动奖励",
			10072 => "战场奖励",
			10073 => "帮派改名消耗",
			10074 => "帮派修炼消耗",
			10075 => "拜师见面礼",
			10076 => "门派挑战",
			10030 => "绑元宝商店消耗[OLD]",
			10077 => "寻宝摸金报名",
			10078 => "寻宝摸金奖励",
			10079 => "点击buff Npc",
			10080 => "购买养老金",
			10081 => "兑换货币(失去)",
			10082 => "兑换货币(得到)",

			20001 => "统一消耗相关在此之后添加！！！",
			20002 => "装备强化",
			20003 => "装备打星",
			20004 => "系统商店购买",
			20005 => "美人亲密",
			20006 => "美人进化",
			20007 => "背包解锁",
			20008 => "伙伴强化",
			20009 => "伙伴技能升级",
			20010 => "伙伴抽取 普通",
			20011 => "伙伴抽取 元宝",
			20012 => "世界地图传送 金币",
			20013 => "购买时装",
			20014 => "伙伴升星",
			20015 => "激活酒楼餐桌",
			20016 => "升级师门技能",
			20017 => "副本奖励",
			20018 => "副本抽奖",
			20019 => "副本扫荡",
			20020 => "使用物品给奖励",
			20021 => "伙伴技能激活",
			20022 => "使用物品获得相应的HP，MP，真气",
			20023 => "生活技能消耗体能",
			20024 => "技能消耗金币",
			20025 => "美人加速进化",
			20026 => "酒楼上菜完成",
			20027 => "抽取侠客",
			20028 => "积分兑换侠客",
			20029 => "伙伴资质重洗消耗道具",
			20030 => "宝石镶嵌",
			20031 => "开服奖励",
			20032 => "改名字",
			20033 => "激活师门技能",
			20034 => "仓库分页解锁",
			20035 => "黑市扣除",
			20036 => "开服7天奖励",
			20037 => "强化转移",
			20038 => "基础洗练",
			20039 => "词条洗练",
			20040 => "词条新属性替换旧属性",
			20041 => "装备打孔",
			20042 => "宝石升级消耗",
			20043 => "装备维修",
			20044 => "装备拆解",
			20045 => "装备失魂修复",
			20046 => "上架物品舒服手续费",
			20047 => "活动消耗",
			20048 => "退出结义",
			20049 => "结义",
			20050 => "夺宝",
			20051 => "使用夺宝积分道具",
			20052 => "发红包消耗",
			20053 => "抢红包",
			20054 => "微博送花",
			20055 => "微博设置空间礼物",

			30001 => "伙伴相关在此之后添加！！！",
			30002 => "玩家登陆",
			30003 => "装备技能",
			30004 => "卸载技能",
			30005 => "激活技能",
			30006 => "升级技能",
			30007 => "金币抽取伙伴",
			30008 => "元宝抽取伙伴",
			30009 => "伙伴强化",
			30010 => "伙伴加点",
			30011 => "免费抽取伙伴",
			30012 => "伙伴强化被吸收（材料伙伴）",
			30013 => "伙伴洗练",
			30014 => "提升悟性",
			30015 => "提升修为",
			30016 => "遗弃宠物",

			40001 => "玩家发送文本邮件",
			40002 => "GM指令发送文本邮件",
			40003 => "GM指令发送文本金钱邮件",
			40004 => "GM指令发送文本物品邮件",
			40005 => "GM指令发送文本美人邮件",
			40006 => "GM指令发送文本金钱物品邮件",
			40007 => "副本奖励发给玩家物品",
			40008 => "寄售行下架返回的物品",
			40009 => "寄售行金钱收益",
			40010 => "获得寄售行买的物品",
			40011 => "每日幸运抽奖奖励",
			40012 => "副本扫荡奖励发给玩家物品",
			40013 => "帮会日常活动奖励",
			40014 => "世界boss活动",
			40015 => "华山论剑",
			40016 => "GMI发送邮件",
			40017 => "PK发送邮件",
			40018 => "脚本发邮件",
			40019 => "充值获得元宝",
			40020 => "VIP升级获得物品",
			40021 => "门派大弟子",
			40022 => "江湖名人录",
			40023 => "帮战奖励",
			40024 => "SNS",
			40025 => "帮会系统邮件",
			40026 => "结婚邮件",
			40027 => "充值活动首充礼包奖励",
			40028 => "合服邮件",
			40029 => "黑市邮件",
			40030 => "师门邮件",
			40031 => "雇佣",
			40032 => "帮会改名",
			40033 => "师门改名",
			40034 => "充值首周奖励玩家掉线发邮件",
			40035 => "充值不定时返利玩家掉线发邮件",
			40036 => "分享南瓜",
			40037 => "排行榜奖励",
			40038 => "许愿池送余额",
			40039 => "跑商抢劫",
			40040 => "装饰圣诞树奖励",
			40041 => "帮会商店",
			40042 => "帮会跑商 商票过期",
			40043 => "帮会跑商 离开帮会",
			40044 => "帮主/副帮主发送帮会全员邮件",
			40045 => "离线七天的邮件奖励",
			40046 => "台湾需求，渠道返利",
			40047 => "给队友发礼物",
			40048 => "邮件拾取",
			40049 => "答题邮件奖励",
			40050 => "师徒见面礼",
			40051 => "玩家挑战",
			40052 => "徒弟出师",
			40053 => "夺宝",
			40053 => "寻宝摸金奖励",
			40054 => "红包到期没有领取的部分",
			40055 => "红包排行",
			40056 => "福利系统邮件奖励",
			40057 => "7日签到  [0123是这几个活动的ID]",
			40058 => "30日签到",
			40059 => "在线奖励",
			40060 => "充值奖励",
			40061 => "系统提示",

			45001 => "帮战",
			45002 => "脚本",
			45003 => "杀怪",
			45004 => "新服奖励",
			45005 => "天数奖励",
			45006 => "在线奖励",
			45007 => "激活奖励",
			45008 => "副本奖励",
			45009 => "幸运抽奖",
			45010 => "GM指令",
			45011 => "里程碑",
			45012 => "日常",
			45013 => "主线",
			45014 => "酒楼",
			45015 => "世界BOSS",
			45016 => "BUFF",
			45017 => "离线经验",
			45018 => "活动奖励经验",
			45019 => "门派挑战",
			45020 => "玩家毕业",
			45021 => "迎头经验",

			50001 => "日常任务 门派任务增加",
			50002 => "日常任务 活跃度领奖增加",

			60000 => "玩家商店：开店",
			);

		$RetInfo = "(".$LogTypeVal.")";
		if ($logTypeInfo[$LogTypeVal]) {
			$RetInfo = $logTypeInfo[$LogTypeVal].$RetInfo;
		}

		return $RetInfo;
	}
?>
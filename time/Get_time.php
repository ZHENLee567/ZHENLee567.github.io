<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>距离考研时间</title>
	<style>
		body{
		background: url(background.jpg) no-repeat center 0px; //repeat设置重复，center设置位置
		background-position: center 0;
		background-size: cover;}
		
	</style>
</head>

<body>
	<h1 align="center">现在时间是</h1>
	<h1 align="center"><?php
						//下面用一if语句检测系统的香港时区的时间,我们用的PHP一般以香港时间为准的,
						if(function_exists('date_default_timezone_set')) { 
						   date_default_timezone_set('Hongkong');//该函数为PHP5.1内置. 
						} 

						// 打印当前时间  PHP_EOL 换行符，兼容不同系统
						header("refresh: 1"); //时间每秒刷新一次
						echo date("Y 年 m 月 d 日 H 点 i 分 s 秒")  . PHP_EOL;
                        ?></h1>
	<h1 align="center">距离2021考研还剩下</h1>
	<h1 align="center"><?php
						$enddate="2020-12-19 00:00:00";//开始时间
						$startdate=date("Y-m-d H:i:s");//结束时间
						$date=floor((strtotime($enddate)-strtotime($startdate))/86400);
						echo $date."天";
                        ?></h1>

</body>
</html>
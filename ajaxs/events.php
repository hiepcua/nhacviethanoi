<?php
session_start();
define('incl_path','../global/libs/');
require_once(incl_path.'gfconfig.php');
require_once(incl_path.'gffunc.php');

echo '{
	"monthly": [
		{
			"id": 1,
			"name": "This is a JSON event",
			"startdate": "2021-2-18",
			"enddate": "2021-2-20",
			"starttime": "12:00",
			"endtime": "2:00",
			"color": "#FFB128",
			"url": ""
		},
		{
			"id": 2,
			"name": "This is a JSON event",
			"startdate": "2021-2-19",
			"enddate": "",
			"starttime": "12:00",
			"endtime": "2:00",
			"color": "#EF44EF",
			"url": ""
		}
	]
}';
?>

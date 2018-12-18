<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-12-16 00:27:54 --> 404 Page Not Found: Package/badges.html
ERROR - 2018-12-16 00:28:26 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 00:28:42 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 00:29:02 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 00:30:14 --> 404 Page Not Found: Connectors/system
ERROR - 2018-12-16 00:30:14 --> 404 Page Not Found: Connectors/system
ERROR - 2018-12-16 00:32:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:32:27 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 00:32:28 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 00:32:28 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 00:33:00 --> 404 Page Not Found: Package/img
ERROR - 2018-12-16 00:37:48 --> Severity: Error --> Call to undefined method Output_model::get_package_detail() /home/biozelders/public_html/application/controllers/Package.php 34
ERROR - 2018-12-16 00:39:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:39:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:39:45 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:39:45 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:40:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:40:24 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:40:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:40:24 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:41:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:41:59 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:41:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:41:59 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:42:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:42:22 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:42:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:42:23 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:43:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:43:00 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:43:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:43:00 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:44:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:44:57 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:44:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:44:57 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:45:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:45:16 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:45:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:45:16 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:45:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:45:41 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:45:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:45:42 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:48:30 --> Query error: Table 'biozelde_db.tbl_gender' doesn't exist - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `trn`.`trn_firstname`, `trn`.`trn_lastname`, `trn`.`trn_job`, `pc`.`pck_review`, `cty`.`cty_name`, `stt`.`stt_name`, `gnd`.`gnd_name`
FROM `tbl_package` AS `pc`
JOIN `tbl_trainer` AS `trn` ON `trn`.`trn_id` = `pc`.`pck_trainer_id`
JOIN `tbl_city` AS `cty` ON `cty`.`cty_id` = `trn`.`trn_city_id`
JOIN `tbl_city_state` AS `stt` ON `stt`.`stt_id` = `trn`.`trn_state_id`
JOIN `tbl_gender` AS `gnd` ON `gnd`.`gnd_id` = `trn`.`trn_gender`
WHERE `pc`.`pck_id` = '1'
ERROR - 2018-12-16 00:48:30 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 13
ERROR - 2018-12-16 00:49:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:49:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:49:23 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:49:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:49:55 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:49:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:49:55 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:50:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:50:51 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:50:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:50:52 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:51:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:51:26 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:51:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:51:26 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:51:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:51:49 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:51:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:51:49 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:51:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:51:54 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:51:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:51:55 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:52:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:52:07 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:52:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:52:07 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:52:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:52:40 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:52:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:52:40 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:52:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:52:56 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:52:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:52:56 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:53:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:53:12 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:53:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:53:12 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:55:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:55:19 --> 404 Page Not Found: Assets/img
ERROR - 2018-12-16 00:55:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:55:19 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:55:31 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 00:56:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:56:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:56:17 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 00:57:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:57:52 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:57:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:57:53 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:58:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:58:00 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:58:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:58:00 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:58:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:58:55 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:58:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:58:56 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:59:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:59:00 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 00:59:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 00:59:00 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:01:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:01:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:01:22 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:02:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:02:29 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:02:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:02:30 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:02:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:02:47 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:02:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:02:48 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:03:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:03:14 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:03:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:03:15 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:03:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:03:36 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:03:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:03:36 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:04:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:04:06 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:04:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:04:06 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:09:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/common/package/package-detail.php 112
ERROR - 2018-12-16 01:09:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:09:22 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:09:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/common/package/package-detail.php 112
ERROR - 2018-12-16 01:09:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:09:22 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:09:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:09:28 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:09:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:09:28 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:09:49 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:09:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:09:49 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:10:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:10:26 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:10:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:10:26 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:11:16 --> Severity: Parsing Error --> syntax error, unexpected 'echo' (T_ECHO) /home/biozelders/public_html/application/views/common/package/package-detail.php 111
ERROR - 2018-12-16 01:13:22 --> Severity: Warning --> array_push() expects parameter 1 to be array, string given /home/biozelders/public_html/application/controllers/Package.php 38
ERROR - 2018-12-16 01:13:22 --> Severity: Warning --> array_push() expects parameter 1 to be array, string given /home/biozelders/public_html/application/controllers/Package.php 38
ERROR - 2018-12-16 01:13:22 --> Severity: Warning --> array_push() expects parameter 1 to be array, string given /home/biozelders/public_html/application/controllers/Package.php 38
ERROR - 2018-12-16 01:13:22 --> Severity: Warning --> array_push() expects parameter 1 to be array, string given /home/biozelders/public_html/application/controllers/Package.php 38
ERROR - 2018-12-16 01:13:22 --> Severity: Warning --> implode(): Invalid arguments passed /home/biozelders/public_html/application/views/common/package/package-detail.php 111
ERROR - 2018-12-16 01:13:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:13:23 --> Severity: Warning --> implode(): Invalid arguments passed /home/biozelders/public_html/application/views/common/package/package-detail.php 111
ERROR - 2018-12-16 01:13:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:13:23 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:13:35 --> Severity: Warning --> implode(): Invalid arguments passed /home/biozelders/public_html/application/views/common/package/package-detail.php 111
ERROR - 2018-12-16 01:13:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:13:35 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:13:35 --> Severity: Warning --> implode(): Invalid arguments passed /home/biozelders/public_html/application/views/common/package/package-detail.php 111
ERROR - 2018-12-16 01:13:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:13:35 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:13:46 --> Severity: Warning --> array_push() expects parameter 1 to be array, string given /home/biozelders/public_html/application/controllers/Package.php 38
ERROR - 2018-12-16 01:13:46 --> Severity: Warning --> array_push() expects parameter 1 to be array, string given /home/biozelders/public_html/application/controllers/Package.php 38
ERROR - 2018-12-16 01:13:46 --> Severity: Warning --> array_push() expects parameter 1 to be array, string given /home/biozelders/public_html/application/controllers/Package.php 38
ERROR - 2018-12-16 01:13:46 --> Severity: Warning --> array_push() expects parameter 1 to be array, string given /home/biozelders/public_html/application/controllers/Package.php 38
ERROR - 2018-12-16 01:13:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:13:46 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:13:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:13:46 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:13:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:13:56 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:13:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:13:56 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:14:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:14:27 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:14:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:17:36 --> Query error: Table 'biozelde_db.tbl_perid' doesn't exist - Invalid query: SELECT *
FROM `tbl_package_periods` AS `pp`
JOIN `tbl_perid` AS `pr` ON `pr`.`prd_id` = `pp`.`pp_period_id`
WHERE `pp`.`pp_package_id` = '1'
ERROR - 2018-12-16 01:17:36 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 9
ERROR - 2018-12-16 01:17:58 --> Query error: Table 'biozelde_db.tbl_period' doesn't exist - Invalid query: SELECT *
FROM `tbl_package_periods` AS `pp`
JOIN `tbl_period` AS `pr` ON `pr`.`prd_id` = `pp`.`pp_period_id`
WHERE `pp`.`pp_package_id` = '1'
ERROR - 2018-12-16 01:17:58 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 9
ERROR - 2018-12-16 01:18:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:18:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:18:07 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:21:40 --> Severity: Warning --> implode(): Invalid arguments passed /home/biozelders/public_html/application/views/common/package/package-detail.php 132
ERROR - 2018-12-16 01:21:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:21:40 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:21:40 --> Severity: Warning --> implode(): Invalid arguments passed /home/biozelders/public_html/application/views/common/package/package-detail.php 132
ERROR - 2018-12-16 01:21:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:21:40 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:22:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:22:03 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:22:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:22:03 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:30:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:30:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:30:30 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:37:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:37:53 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:37:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:37:53 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:40:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:40:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:40:04 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:40:04 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:40:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:40:09 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:40:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:40:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:40:29 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:40:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:40:29 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:42:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:42:28 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:42:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:42:29 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:43:13 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:44:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:44:13 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:44:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:44:13 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:44:13 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:44:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:44:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:44:20 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:44:21 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 01:44:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:44:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:45:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:45:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:45:55 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:46:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:46:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:46:43 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:46:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:46:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:46:55 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:47:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:47:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:47:28 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:47:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:47:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:47:48 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:47:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:47:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:47:58 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:48:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:48:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:48:24 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:48:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:48:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:49:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:49:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:49:14 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:49:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:49:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:50:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:52:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:52:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:52:28 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:53:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:54:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:54:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:54:28 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:55:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:55:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:55:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:55:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:55:34 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:56:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:56:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:56:59 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:57:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:57:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:57:06 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 01:57:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:57:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 01:57:50 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:01:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:01:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:01:25 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:04:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:04:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:04:40 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:04:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:04:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:04:49 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:09:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:09:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:09:32 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:09:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:09:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:10:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:10:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:10:53 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:11:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:11:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:11:37 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:12:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:12:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:12:05 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:13:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:13:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:13:09 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:14:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:14:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:14:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:14:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:14:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:14:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:14:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:14:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:18:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:18:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:18:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:18:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:18:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:18:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:18:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:18:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:19:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:19:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:19:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:19:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:20:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:20:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:21:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:21:48 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 02:21:48 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 02:21:48 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 02:21:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:22:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:22:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:23:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:23:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:23:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:23:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:24:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:24:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:24:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:24:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:25:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:25:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:25:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:25:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:25:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:25:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:25:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:25:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:25:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:25:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:26:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:26:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:27:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:27:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:27:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:27:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:28:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:28:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:29:20 --> Severity: Parsing Error --> syntax error, unexpected '?>' /home/biozelders/public_html/application/views/common/package/package-detail.php 36
ERROR - 2018-12-16 02:29:35 --> Severity: Parsing Error --> syntax error, unexpected '?>' /home/biozelders/public_html/application/views/common/package/package-detail.php 36
ERROR - 2018-12-16 02:29:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:29:48 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:30:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:30:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:32:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:32:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:32:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:32:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:32:39 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:33:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:33:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:34:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:34:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:34:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:34:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:34:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:34:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:37:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:37:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:37:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:37:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:38:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:38:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:38:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:38:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:39:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:39:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:39:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:40:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:40:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:40:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:41:32 --> 404 Page Not Found: Wp-json/oembed
ERROR - 2018-12-16 02:41:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:41:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:41:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:41:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:42:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:42:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:42:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:42:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:42:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:42:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:44:07 --> Severity: Parsing Error --> syntax error, unexpected '}', expecting ',' or ';' /home/biozelders/public_html/application/views/common/package/package-detail.php 288
ERROR - 2018-12-16 02:44:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:44:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:44:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:44:29 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:45:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:45:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:45:08 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:47:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:47:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:47:02 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:47:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:47:09 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:47:09 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:47:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:47:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:47:50 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:48:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:48:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-16 02:48:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:48:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:50:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:50:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:52:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:52:34 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:57:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 02:57:59 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 02:58:00 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 02:58:00 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 03:47:57 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 05:29:34 --> 404 Page Not Found: Wp-admin/setup-config.php
ERROR - 2018-12-16 05:29:42 --> 404 Page Not Found: Courses/html5css3-essentials-in-4-hours
ERROR - 2018-12-16 05:59:08 --> 404 Page Not Found: Wp-admin/setup-config.php
ERROR - 2018-12-16 05:59:10 --> 404 Page Not Found: Wp-admin/setup-config.php
ERROR - 2018-12-16 05:59:14 --> 404 Page Not Found: Wp-admin/setup-config.php
ERROR - 2018-12-16 06:03:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 07:51:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 07:51:25 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 07:51:25 --> 404 Page Not Found: Tel:/61280932400
ERROR - 2018-12-16 07:51:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 07:51:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 07:51:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 07:51:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 07:51:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 12:40:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 12:40:05 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 12:40:05 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 12:40:06 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 14:58:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 14:58:07 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 14:58:07 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 14:58:07 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 14:58:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 14:58:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 14:58:16 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 14:58:16 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 14:58:16 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 14:58:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 14:58:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 15:07:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 15:08:01 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 15:08:02 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-16 16:54:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 16:54:36 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 16:54:37 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 16:54:37 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 17:00:39 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 17:00:46 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 17:00:46 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 17:00:47 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 18:11:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 19:24:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-16 19:24:42 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 19:24:43 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-16 19:24:43 --> 404 Page Not Found: Img/badges

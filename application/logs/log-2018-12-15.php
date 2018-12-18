ERROR - 2018-12-15 19:38:48 --> Query error: Incorrect parameter count in the call to native function 'radians' - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`, (6371 * acos (cos ( radians() ) * cos( radians( pc.pck_latitude ) ) * cos( radians( pc.pck_longtitude ) - radians() ) + sin ( radians() ) * sin( radians( pc.pck_latitude ) ) )) AS distance
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 19:38:48 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 62
ERROR - 2018-12-15 19:39:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
AND `pc`.`pck' at line 9 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
AND `pc`.`pck_status` = '2'
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 19:39:45 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 62
ERROR - 2018-12-15 19:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`, (6371 * acos (cos ( radians() ) * cos( radians( pc.pck_latitude ) ) * cos( radians( pc.pck_longtitude ) - radians() ) + sin ( radians() ) * sin( radians( pc.pck_latitude ) ) )) AS distance
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 19:40:03 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 62
ERROR - 2018-12-15 19:40:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`, (6371 * acos (cos ( radians() ) * cos( radians( pc.pck_latitude ) ) * cos( radians( pc.pck_longtitude ) - radians() ) + sin ( radians() ) * sin( radians( pc.pck_latitude ) ) )) AS distance
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 19:40:14 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 62
ERROR - 2018-12-15 19:40:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 19:40:21 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 61
ERROR - 2018-12-15 19:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:40:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`, (6371 * acos (cos ( radians() ) * cos( radians( pc.pck_latitude ) ) * cos( radians( pc.pck_longtitude ) - radians() ) + sin ( radians() ) * sin( radians( pc.pck_latitude ) ) )) AS distance
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 19:40:40 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 62
ERROR - 2018-12-15 19:40:41 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:40:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`, (6371 * acos (cos ( radians() ) * cos( radians( pc.pck_latitude ) ) * cos( radians( pc.pck_longtitude ) - radians() ) + sin ( radians() ) * sin( radians( pc.pck_latitude ) ) )) AS distance
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 19:40:42 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 62
ERROR - 2018-12-15 19:40:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 19:40:45 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:40:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 19:40:52 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 19:40:52 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 19:40:52 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 19:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:40:56 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:40:56 --> Query error: Incorrect parameter count in the call to native function 'radians' - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`, (6371 * acos (cos ( radians() ) * cos( radians( pc.pck_latitude ) ) * cos( radians( pc.pck_longtitude ) - radians() ) + sin ( radians() ) * sin( radians( pc.pck_latitude ) ) )) AS distance
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND 509 IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 19:40:56 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 62
ERROR - 2018-12-15 19:41:05 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:41:06 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:42:21 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:42:30 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:42:30 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:42:54 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:44:55 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:44:56 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:45:04 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:45:05 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:45:27 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:45:28 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:48:36 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:48:37 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:48:51 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:49:34 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:49:34 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:50:16 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:50:51 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:50:51 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:55:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 19:55:04 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:55:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 19:55:07 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:55:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 19:55:12 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:55:15 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 19:55:15 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:55:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 19:55:22 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 19:55:22 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 19:55:22 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 19:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:55:25 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:55:26 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:56:33 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:56:34 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:56:44 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:56:45 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:56:52 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:56:53 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:57:14 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:57:18 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:57:28 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:57:36 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:57:54 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:57:55 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:58:16 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:58:55 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:59:41 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:59:42 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:59:43 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:59:46 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:59:47 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:59:52 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 19:59:52 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 19:59:58 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:00:12 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:00:13 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:00:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:00:57 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:01:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:01:02 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:01:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:01:05 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:01:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:01:14 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:01:14 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:01:14 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:01:17 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:01:18 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:01:42 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:02:23 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:02:23 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:02:32 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:02:33 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:03:51 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:03:51 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:04:08 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:04:09 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:04:15 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:04:15 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:05:00 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:05:01 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:05:11 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:05:11 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:05:25 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:05:28 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:05:28 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:05:28 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:05:28 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:05:28 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:05:31 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:05:32 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:06:23 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:06:38 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:06:42 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:06:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:06:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:07:03 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:07:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:07:04 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:07:04 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:07:04 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:07:19 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:07:42 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:08:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:08:36 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:08:41 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:08:41 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:08:47 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:08:47 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:08:47 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:08:47 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:08:47 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:08:50 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:08:53 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:09:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:09:09 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:09:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:09:34 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:09:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:09:36 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:09:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:09:41 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:09:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:09:46 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:09:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:09:49 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:09:53 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:09:59 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:10:07 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-15 20:10:08 --> 404 Page Not Found: Assets/js
ERROR - 2018-12-15 20:11:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:11:12 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:11:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:11:16 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:11:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:11:19 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:11:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:11:33 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:11:34 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:11:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:11:37 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:11:43 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:11:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC
 LIMIT 3
ERROR - 2018-12-15 20:11:44 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 20:11:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:11:53 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:12:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:12:00 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:12:00 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:12:00 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:12:00 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:12:03 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 20:40:35 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:40:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:41:02 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:41:05 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 20:41:17 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 20:41:17 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:41:17 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:41:17 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 20:52:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 21:04:29 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:04:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 21:04:42 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:05:09 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:05:13 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:05:38 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:05:40 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 21:05:40 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 21:05:40 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 21:05:40 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 21:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`, (6371 * acos (cos ( radians(41.0484736) ) * cos( radians( pc.pck_latitude ) ) * cos( radians( pc.pck_longtitude ) - radians(29.0807808) ) + sin ( radians(41.0484736) ) * sin( radians( pc.pck_latitude ) ) )) AS distance
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC, `distance` ASC
 LIMIT 3
ERROR - 2018-12-15 21:05:47 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 21:06:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`' at line 10 - Invalid query: SELECT `pc`.`pck_id`, `pc`.`pck_name`, `pc`.`pck_category_id`, `pc`.`pck_profession_id`, `pc`.`pck_trainer_id`, `pc`.`pck_location_id`, `pc`.`pck_state_id`, `pc`.`pck_latitude`, `pc`.`pck_longtitude`, `pc`.`pck_cover`, `pc`.`pck_picture`, `pc`.`pck_description`, `sh`.`cty_id`, `sh`.`cty_name`, `lc`.`stt_id`, `lc`.`stt_name`, `lc`.`latitude`, `lc`.`longtitude`, `tra`.`trn_id`, `tra`.`trn_firstname`, `tra`.`trn_lastname`, `tra`.`trn_job`, `tra`.`trn_city_id`, `tra`.`trn_state_id`, `tra`.`trn_gender`, `tra`.`trn_picture`, `pc`.`pck_review`, `cta`.`ctg_name`, (6371 * acos (cos ( radians(41.0484736) ) * cos( radians( pc.pck_latitude ) ) * cos( radians( pc.pck_longtitude ) - radians(29.0807808) ) + sin ( radians(41.0484736) ) * sin( radians( pc.pck_latitude ) ) )) AS distance
FROM `tbl_package` AS `pc`
LEFT JOIN `tbl_city_state` AS `lc` ON `lc`.`stt_id` = `pc`.`pck_state_id`
LEFT JOIN `tbl_trainer` AS `tr` ON `tr`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_profession` AS `pr` ON `pr`.`prf_id` = `pc`.`pck_profession_id`
LEFT JOIN `tbl_city` AS `sh` ON `sh`.`cty_id` = `pc`.`pck_location_id`
LEFT JOIN `tbl_trainer` AS `tra` ON `tra`.`trn_id` = `pc`.`pck_trainer_id`
LEFT JOIN `tbl_category` AS `cta` ON `cta`.`ctg_id` = `pc`.`pck_category_id`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ORDER BY `pc`.`pck_review` DESC, `distance` ASC
 LIMIT 3
ERROR - 2018-12-15 21:06:32 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 93
ERROR - 2018-12-15 21:06:36 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 21:07:46 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:07:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)' at line 4 - Invalid query: SELECT *
FROM `tbl_package` AS `pc`
WHERE `pc`.`pck_status` = '2'
AND  IN (SELECT pll.pll_state_id FROM tbl_package_location_list AS pll)
ERROR - 2018-12-15 21:07:46 --> Severity: Error --> Call to a member function result() on boolean /home/biozelders/public_html/application/models/Output_model.php 9
ERROR - 2018-12-15 21:08:24 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:08:25 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:09:20 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:10:27 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:10:42 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:11:04 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:11:17 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:11:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 21:11:48 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:13:05 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:13:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 21:13:13 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:14:00 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:14:16 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:14:38 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:15:09 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:15:19 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:17:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 21:17:17 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:17:33 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:19:01 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:19:03 --> 404 Page Not Found: Package_filter_category_set/0
ERROR - 2018-12-15 21:19:06 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:19:13 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:19:15 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:19:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 21:19:25 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:20:19 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:20:26 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:20:41 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:20:45 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:20:49 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:20:55 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:21:16 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:21:39 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:22:09 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:22:30 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:22:33 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:22:36 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:59:07 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 21:59:20 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:00:19 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:00:21 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:00:29 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:00:31 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:00:39 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:02:13 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:02:17 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:02:27 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:02:28 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:02:42 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:03:19 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:03:58 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:04:35 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:04:49 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:04:50 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:05:17 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:05:59 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:06:06 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:06:07 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:06:18 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:07:38 --> 404 Page Not Found: Package/package_list_table
ERROR - 2018-12-15 22:07:40 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:09:02 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:09:03 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:11:02 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:11:10 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:11:19 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:11:19 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:11:38 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:11:38 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:11:39 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:11:55 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:11:55 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:13:11 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:13:11 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:13:38 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:13:38 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:14:04 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:14:04 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:14:19 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:15:29 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:15:30 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:16:29 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:16:30 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:17:32 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:17:32 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:18:04 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:18:04 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:18:19 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:18:20 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:18:41 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:18:41 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:18:57 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:19:08 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:19:09 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:20:04 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:20:04 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:21:31 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:21:32 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:21:34 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:21:36 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:22:11 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:22:12 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:23:00 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:23:00 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:23:46 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:24:13 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:24:17 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:24:42 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:24:43 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:25:44 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:25:44 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:26:13 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:26:13 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:26:28 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:26:28 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:27:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 22:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:27:45 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:28:00 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:28:00 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:28:07 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:28:07 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:28:48 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:28:49 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:29:09 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:29:09 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:29:26 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:29:26 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:29:44 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:29:45 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:30:05 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 22:30:06 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:30:07 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:30:07 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 22:30:08 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 22:30:08 --> 404 Page Not Found: Img/badges
ERROR - 2018-12-15 22:30:38 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:30:38 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:31:25 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:31:26 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:31:47 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:31:48 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:32:11 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:32:12 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:32:42 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:32:42 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:33:40 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:33:40 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:34:28 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:34:29 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:34:43 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:34:43 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:34:52 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:34:53 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:35:56 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:35:56 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:37:48 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:37:49 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:38:21 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:38:21 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:39:27 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:39:28 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:40:08 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:40:08 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:40:16 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:40:17 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:40:19 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:40:52 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:40:53 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:40:54 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:41:52 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:42:51 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:43:45 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:43:48 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:43:51 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:44:15 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:44:16 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:45:29 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:45:30 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:45:33 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:46:06 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:46:09 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:46:16 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:46:44 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:46:44 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:46:50 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:47:37 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:47:37 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:48:04 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:48:05 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:48:06 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:49:04 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:49:04 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:50:28 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:50:28 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:50:28 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:50:46 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:50:46 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:51:43 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:51:43 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:51:57 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:51:58 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:51:59 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:52:22 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:53:06 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:53:07 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:53:41 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:53:42 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:53:55 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:55:53 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:55:54 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:56:07 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:56:07 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:56:17 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 22:56:57 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:57:44 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:57:58 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:58:36 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 22:59:17 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:01:52 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:02:04 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 23:02:26 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 23:02:27 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:02:34 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 23:03:37 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 23:03:38 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:05:06 --> 404 Page Not Found: Assets/css
ERROR - 2018-12-15 23:05:06 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:05:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/biozelders/public_html/application/views/static/bottom.php 15
ERROR - 2018-12-15 23:05:39 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:06:05 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:06:15 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:06:27 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:06:38 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:06:42 --> Severity: Warning --> Missing argument 1 for Package::package_ordering_set() /home/biozelders/public_html/application/controllers/Package.php 21
ERROR - 2018-12-15 23:06:43 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:07:54 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:58:54 --> 404 Page Not Found: Package/img
ERROR - 2018-12-15 23:58:59 --> 404 Page Not Found: Package/img

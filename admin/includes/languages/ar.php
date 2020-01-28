<?php
	function lang ($phrase) {
		static $lang = array(
			'Message' => 'welcome ar' ,
			'Admin' => 'administrator ar' 
		);
	return $lang[$phrase];

	}
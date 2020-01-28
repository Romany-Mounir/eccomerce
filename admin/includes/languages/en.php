<?php
	function lang ($phrase) {
		static $lang = array(
			//homepage
			'HOME_ADMIN' => 'home' ,
			'CATEGORIES' => 'categories',
			'co_ADMIN' => 'control pannel' 

		);
		return $lang[$phrase];
	}
?>
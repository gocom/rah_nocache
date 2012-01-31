<?php	##################
	#
	#	rah_nocache-plugin for Textpattern
	#	version 0.2
	#	by Jukka Svahn
	#	http://rahforum.biz
	#
	#	Copyright (C) 2011 Jukka Svahn <http://rahforum.biz>
	#	Licensed under GNU Genral Public License version 2
	#	http://www.gnu.org/licenses/gpl-2.0.html
	#
	###################

	if(@txpinterface == 'admin') {
		rah_nocache();
		register_callback('rah_nocache_head','admin_side','head_end');
	}

/**
	Send no-cache headers.
*/

	function rah_nocache() {
		header('Cache-Control: no-store, no-cache, must-revalidate, pre-check=0, post-check=0, max-age=0');
		header('Expires: Sat, 24 Jul 2003 05:00:00 GMT');
		header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header('Pragma: no-cache');
	}

/**
	Add meta elements to the <head>
*/

	function rah_nocache_head() {
		echo 
			n.n.
				'	<meta http-equiv="Expires" content="Sat, 24 Jul 2003 05:00:00 GMT" />'.n.
				'	<meta http-equiv="Pragma" content="no-cache" />'.n.n
			;
	}
?>
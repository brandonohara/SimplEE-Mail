<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');	
/*
	* SimplEE Mail Module
	*
	* @package   SimplEE Mail
	* @author    Brandon O'Hara <brandon@brandonohara.com>
	* @copyright Copyright (c) 2014 Brandon O'Hara
*/

require_once(PATH_THIRD."simplee_mail/config.simplee_mail.php");
					

class Simplee_mail {
	
	function __construct(){
		//EE super global
		$this->EE =& get_instance();
	}

}
/* End of file mod.simplee_mail.php */
/* Location: system/expressionengine/third_party/simplee_mail/mod.simplee_mail.php */
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	* SimplEE Mail Installer
	*
	* @package   SimplEE Mail
	* @author    Brandon O'Hara <brandon@brandonohara.com>
	* @copyright Copyright (c) 2015 Brandon O'Hara
*/
require_once(PATH_THIRD."simplee_mail/config.simplee_mail.php");

class Simplee_mail_upd {

	var $module_name = SIMPLEE_MAIL_EE_NAME;
    var $version = SIMPLEE_MAIL_VERSION;
    
    function install(){
	    ee()->load->dbforge();
	    
	    $data = array(
	        'module_name' => $this->module_name,
	        'module_version' => $this->version,
	        'has_cp_backend' => 'n',
	        'has_publish_fields' => 'n'
	    );
	    ee()->db->insert('modules', $data);
	    
		return TRUE;
	}
	
	function uninstall(){
	    ee()->load->dbforge();
	    
		ee()->db->where('module_name', $this->module_name);
	    ee()->db->delete('modules');
	
	    return TRUE;
	}
	
	function update($current = ''){
	    return FALSE;
	}
}
/* End of file upd.simplee_mail.php */
/* Location: system/expressionengine/third_party/simplee_mail/upd.simplee_mail.php */
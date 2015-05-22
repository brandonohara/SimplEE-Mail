<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	require_once(PATH_THIRD."simplee_mail/config.simplee_mail.php");
	
	class Simplee_mail_ft extends EE_Fieldtype {
	
		//var $has_array_data = TRUE;
		var $info = array(
			'name' => SIMPLEE_MAIL_NAME,
			'version' => SIMPLEE_MAIL_VERSION
		);
		
		function install(){
			return array('key' => '');
		}
		
		function display_global_settings(){
			return '';
		}
	
		function save_global_settings(){
			return array_merge($this->settings, $_POST);
		}
		
		function display_settings($data){
			//ee()->table->add_row("LABEL", form_dropdown('update_entries', array('no' => "No", 'yes' => "Yes")));
		}
		
		function save_settings($data){
		    return array();
		}
		
		function display_field($data){
			return '';
		}
		
		function save($data){
			//return base64_encode(serialize($data));
			return $data;
		}
		
		function replace_tag($data, $params = array(), $tagdata = FALSE){
			return $data;
		}
		
		/* ========================================================
		=========================   MATRIX   ====================== */
		
		
		function display_cell( $data ){
	    	return form_input($this->cell_name, $data);
	    }
	    
	    function save_cell($data){
			$parts = $this->parse_parts($data);
			$phone = $this->format_parts($parts);
			return $phone;
	    }
	    
	    /* ========================================================
		=========================   GRID   ======================== */
	
		public function accepts_content_type($name){
		    return ($name == 'channel' || $name == 'grid');
		}
	}
/* End of file ft.simplee_mail.php */
/* Location: ./system/expressionengine/third_party/simplee_mail/ft.simplee_mail.php */
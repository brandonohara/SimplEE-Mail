<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	require_once(PATH_THIRD."simplee_mail/config.simplee_mail.php");
	
	$plugin_info = array(
		'pi_name' 			=> SIMPLEE_MAIL_NAME,
		'pi_version' 		=> SIMPLEE_MAIL_VERSION,
		'pi_author' 		=> 'Brandon OHara',
		'pi_author_url' 	=> 'http://brandonohara.com/',
		'pi_description' 	=> '',
	    'pi_usage'        	=> Simplee_mail::usage()
	);

	class Simplee_mail {
		public $plugin_name = SIMPLEE_MAIL_NAME;
    
		public function __construct(){
			
		}
		
		public static function usage(){
	        return "";
	    }
	}

/* End of file pi.simplee_mail.php */
/* Location: ./system/expressionengine/third_party/simplee_mail/pi.simplee_mail.php */

<?php
	// †
	session_cache_limiter('nocache');
	
	mb_language("Japanese");
	mb_internal_encoding("utf-8");
	
	header("Content-Type: text/html; charset=utf-8");
	
	$_COLOR = array(
								"black"=>array("R"=>hexdec("22"), "G"=>hexdec("22"), "B"=>hexdec("22")), 
								"red"=>array("R"=>hexdec("FF"), "G"=>hexdec("4F"), "B"=>hexdec("4F")), 
								"white"=>array("R"=>hexdec("FF"), "G"=>hexdec("FF"), "B"=>hexdec("FF")), 
								"green"=>array("R"=>hexdec("4C"), "G"=>hexdec("B8"), "B"=>hexdec("49")), 
								"blue"=>array("R"=>hexdec("8B"), "G"=>hexdec("BF"), "B"=>hexdec("DA")), 
								"gray"=>array("R"=>hexdec("C4"), "G"=>hexdec("C4"), "B"=>hexdec("C4")), 
								"a_root"=>array("R"=>hexdec("BC"), "G"=>hexdec("37"), "B"=>hexdec("40")), 
								"a_other"=>array("R"=>hexdec("FF"), "G"=>hexdec("4F"), "B"=>hexdec("4F")), 
								"b_root"=>array("R"=>hexdec("F3"), "G"=>hexdec("C5"), "B"=>hexdec("15")), 
								"b_other"=>array("R"=>hexdec("EC"), "G"=>hexdec("E9"), "B"=>hexdec("33"))
							);
	
	function hexval($_str){
		return intval($_str, 16);
	}
	
	function _hsc($_str){
		print htmlspecialchars($_str);
	}
	
	function _get_params($_param, $_avoids){
		$arr_ret = array();
		foreach($_param as $key=>$value){
			if(!is_array($value)){
				$_exist = false;
				foreach($_avoids as $_avoid){
					if($key == $_avoid){
						$_exist = true;
						break;
					}
				}
				if(!$_exist){
					$arr_ret[$key] = $value;
				}
			}
		}
		unset($arr_ret['PHPSESSID']);
		unset($arr_ret['submit']);
		return $arr_ret;
	}
?>
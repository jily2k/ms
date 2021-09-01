<?php
	// †
	session_cache_limiter('nocache');
	
	$_NOTES = array();

	$_NOTES[0] = array("key"=>"C", "name"=>"  C  ", "relative"=>0, "s"=>"C", "f"=>"C", "type"=>"n");
	$_NOTES[1] = array("key"=>"C#/Db", "name"=>"C#/Db", "relative"=>1, "s"=>"C#", "f"=>"Db", "type"=>"f");
	$_NOTES[2] = array("key"=>"D", "name"=>"  D  ", "relative"=>2, "s"=>"D", "f"=>"D", "type"=>"s");
	$_NOTES[3] = array("key"=>"D#/Eb", "name"=>"D#/Eb", "relative"=>3, "s"=>"D#", "f"=>"Eb", "type"=>"f");
	$_NOTES[4] = array("key"=>"E", "name"=>"  E  ", "relative"=>4, "s"=>"E", "f"=>"E", "type"=>"s");
	$_NOTES[5] = array("key"=>"F", "name"=>"  F  ", "relative"=>5, "s"=>"F", "f"=>"F", "type"=>"f");
	$_NOTES[6] = array("key"=>"F#/Gb", "name"=>"F#/Gb", "relative"=>6, "s"=>"F#", "f"=>"Gb", "type"=>"f");
	$_NOTES[7] = array("key"=>"G", "name"=>"  G  ", "relative"=>7, "s"=>"G", "f"=>"G", "type"=>"s");
	$_NOTES[8] = array("key"=>"G#/Ab", "name"=>"G#/Ab", "relative"=>8, "s"=>"G#", "f"=>"Ab", "type"=>"f");
	$_NOTES[9] = array("key"=>"A", "name"=>"  A  ", "relative"=>9, "s"=>"A", "f"=>"A", "type"=>"s");
	$_NOTES[10] = array("key"=>"A#/Bb", "name"=>"A#/Bb", "relative"=>10, "s"=>"A#", "f"=>"Bb", "type"=>"f");
	$_NOTES[11] = array("key"=>"B", "name"=>"  B  ", "relative"=>11, "s"=>"B", "f"=>"B", "type"=>"s");
	
	$_REAL_NOTES = array();
	
	for($i=0; $i<=4; $i++){
		foreach($_NOTES as $_key=>$_NOTE){
			$_note = $_NOTE;
			$_note['level'] = $i + 1;
			$_REAL_NOTES[$_key+(12*$i)] = $_note;
		}
	}
	
	$_CHORDS = array();
	$_CHORDS['M7'] = array("name"=>"M7", "degree"=>array(4, 3, 4));
	$_CHORDS['M79'] = array("name"=>"M7(9)", "degree"=>array(4, 3, 4, 3));
	$_CHORDS['m'] = array("name"=>"m", "degree"=>array(3, 4));
	$_CHORDS['m7'] = array("name"=>"m7", "degree"=>array(3, 4, 3));
	$_CHORDS['m7b5'] = array("name"=>"m7(b5)", "degree"=>array(3, 3, 4));
	$_CHORDS['m79'] = array("name"=>"m7(9)", "degree"=>array(3, 4, 3, 4));
	$_CHORDS['m711'] = array("name"=>"m7(11)", "degree"=>array(3, 2, 2, 3));
	$_CHORDS['mM7'] = array("name"=>"mM7", "degree"=>array(3, 4, 4));
	$_CHORDS['7'] = array("name"=>"7", "degree"=>array(4, 3, 3));
	$_CHORDS['7b9'] = array("name"=>"7(b9)", "degree"=>array(4, 3, 3, 3));
	$_CHORDS['79'] = array("name"=>"7(9)", "degree"=>array(4, 3, 3, 4));
	$_CHORDS['7#9'] = array("name"=>"7(#9)", "degree"=>array(4, 3, 3, 5));
	$_CHORDS['7b13'] = array("name"=>"7(b13)", "degree"=>array(4, 3, 1, 2));
	$_CHORDS['713'] = array("name"=>"7(13)", "degree"=>array(4, 3, 2, 1));
	$_CHORDS['7sus4'] = array("name"=>"7sus4", "degree"=>array(5, 2, 3));
	$_CHORDS['sus4'] = array("name"=>"sus4", "degree"=>array(5, 2));
	$_CHORDS['6'] = array("name"=>"6", "degree"=>array(4, 3, 2));
	$_CHORDS['m6'] = array("name"=>"m6", "degree"=>array(3, 4, 2));
	$_CHORDS['dim7'] = array("name"=>"dim7", "degree"=>array(3, 3, 3));
	/*
	$_CHORDS['add9'] = array("name"=>"add9", "degree"=>array());
	$_CHORDS['dim'] = array("name"=>"dim", "degree"=>array());
	*/
	$_SCALES = array();
	$_SCALES['M'] = array("name"=>"メジャー", "degree"=>array(2, 2, 1, 2, 2, 2, 1));
	$_SCALES['nm'] = array("name"=>"ナチュラル・マイナー", "degree"=>array(2, 1, 2, 2, 1, 2, 2));
	$_SCALES['hm'] = array("name"=>"ハーモニック・マイナー", "degree"=>array(2, 1, 2, 2, 1, 3, 1));
	$_SCALES['mm'] = array("name"=>"メロディック・マイナー", "degree"=>array(2, 1, 2, 2, 2, 2, 1));
	$_SCALES['alt'] = array("name"=>"オルタード", "degree"=>array(1, 2, 1, 2, 2, 2, 2));
	$_SCALES['hmp5'] = array("name"=>"ハーモニック・マイナー P5th ビロウ", "degree"=>array(1, 3, 1, 2, 1, 2, 2));
	$_SCALES['lydb7'] = array("name"=>"リディアンb7", "degree"=>array(2, 2, 2, 1, 2, 1, 2));
	$_SCALES['dim'] = array("name"=>"ディミニッシュ", "degree"=>array(2, 1, 2, 1, 2, 1, 2, 1));
	$_SCALES['com'] = array("name"=>"コンディミ", "degree"=>array(1, 2, 1, 2, 1, 2, 1, 2));
	$_SCALES['Mp'] = array("name"=>"メジャー・ペンタトニック", "degree"=>array(2,2,3,2,3));
	$_SCALES['mp'] = array("name"=>"マイナー・ペンタトニック", "degree"=>array(3,2,2,3,2));
	$_SCALES['ionian'] = array("name"=>"イオニアン", "degree"=>array(2,2,1,2,2,2,1));
	$_SCALES['dorian'] = array("name"=>"ドリアン", "degree"=>array(2,1,2,2,2,1,2));
	$_SCALES['phrygian'] = array("name"=>"フリジアン", "degree"=>array(1,2,2,2,1,2,2));
	$_SCALES['lydian'] = array("name"=>"リディアン", "degree"=>array(2,2,2,1,2,2,1));
	$_SCALES['mixolydian'] = array("name"=>"ミクソリディアン", "degree"=>array(2,2,1,2,2,1,2));
	$_SCALES['aeolian'] = array("name"=>"エオリアン", "degree"=>array(2,1,2,2,1,2,2));
	$_SCALES['locrian'] = array("name"=>"ロクリアン", "degree"=>array(1,2,2,1,2,2,2));
	
	$_DEGREE = array();
	$_DEGREE[1] 	= " 1 ";
	$_DEGREE[2] 	= " b9 ";
	$_DEGREE[3] 	= "2/9";
	$_DEGREE[4] 	= "m3/#9";
	$_DEGREE[5] 	= " M3 ";
	$_DEGREE[6] 	= "4/11";
	$_DEGREE[7] 	= " b5 ";
	$_DEGREE[8] 	= " 5 ";
	$_DEGREE[9] 	= " b6 ";
	$_DEGREE[10] 	= "6/13";
	$_DEGREE[11] 	= " m7 ";
	$_DEGREE[12] 	= " M7 ";
	/*
	function _get_circle_of_fifth(){
		global $_NOTES;
		
	}
	*/
	//print _get_degree(_get_note_id("A"), _get_note_id("A"));
	
	//print _get_key_type(_get_note_id("G"));
	
	function _get_key_type($_root_id){
		global $_NOTES;
		
		return $_NOTES[_get_note_id_by_id($_root_id)]['type'];
	}
	
	function _get_degree($_root_id, $_note_id){
		global $_DEGREE;
		
		$_root_id_rel = _get_note_id_by_id($_root_id);
		$_note_id_rel = _get_note_id_by_id($_note_id);
		
		if($_note_id_rel >= $_root_id_rel){
			$_diff = $_note_id_rel - $_root_id_rel;
			
			return $_DEGREE[$_diff + 1];
		}else{
			$_diff = 12 - ($_root_id_rel - $_note_id_rel);
			
			return $_DEGREE[$_diff + 1];
		}
	}
	
	function _get_note_id($_name){
		global $_NOTES;
		$_id = null;
		foreach($_NOTES as $_key=>$_note){
			if($_note['key'] == $_name){
				$_id = $_key;
				break;
			}
		}
		return $_id;
	}
	
	function _get_note_id_by_id($_id){
		return ($_id % 12);
	}
	
	//print _get_note_name(_get_note_id("G#/Ab"), _get_note_id("A#/Bb"));
	
	function _get_note_name($_id, $_key_id=""){
		global $_NOTES;
		
		if($_key_id != ""){
			return $_NOTES[$_id % 12][_get_key_type($_key_id)];
		}else{
			return $_NOTES[$_id % 12]['name'];
		}
	}
	
	//print _get_note_diff(0, 0);
	
	function _get_note_diff($_base_note_id, $_note_id){
		$_note_id = $_note_id + 12;
		
		$_diff = $_note_id - $_base_note_id;
		
		return $_diff % 12;
	}
	
	function _get_note_near_by_id($_id, $_diff, $_real=false){
		if($_real){
			$_id_tmp = $_id + $_diff;
		}else{
			$_id_tmp = ($_id + $_diff) % 12;
		}
		return $_id_tmp;
	}
	
	function _get_key_notes($_key, $_mode, $_real=false, $_trans_id=0){
		return _get_key_notes_by_id(_get_note_id($_key), $_mode, $_real, $_trans_id);
	}
	
	function _get_key_notes_by_id($_key_id, $_mode, $_real=false, $_trans_id=0){
		global $_SCALES;
		
		//$_root_note = _get_note_id($_key);
		
		$_trans_diff = _get_note_diff(0, $_trans_id);
		$_root_note = _get_note_id_by_id($_key_id - $_trans_diff);
		
		$_key_notes = array();
		$_key_notes[] = $_root_note;
		
		$_num = 1;
		if($_real){ $_num = 5; }
		
		$_sum = 0;
		
		for($i=0; $i<$_num; $i++){

			foreach($_SCALES[$_mode]['degree'] as $_degree){
				$_sum += $_degree;
				$_key_notes[] = _get_note_near_by_id($_root_note, $_sum, $_real);
				//$j++;
			}
		}
		return $_key_notes;
	}
	
	function _get_diatonic_chord_names($_id, $_mode, $_trans_id=0){
		
		$_chord_names = array();
		
		$_arr_chord_ids = _get_diatonic_chord_ids($_id, $_mode, $_trans_id);
		
		foreach($_arr_chord_ids as $_chord_ids){
			$_chord_names[] = _get_chord_name($_chord_ids);
		}
		
		return $_chord_names;
	}
	
	//print_r(_get_diatonic_chord_ids(0, "nm"));
	
	function _get_diatonic_chord_ids($_id, $_mode, $_trans_id=0){
		
		$_key_notes = _get_key_notes_by_id($_id, $_mode, false, $_trans_id);
		$_chord_ids = array();
		
		for($i=0; $i<count($_key_notes); $i++){
			$_chord_tones = array();
			
			$_prev = $_key_notes[0];
			
			for($j=0; $j<=6; $j+=2){
				$_id_tmp = $_key_notes[($i+$j) % 7];
				
				if($_id_tmp < $_prev){
					$_id_tmp += 12;
				}
				
				if($_id_tmp < $_prev){
					$_chord_tones[] = $_id_tmp + 12;
				}else{
					$_chord_tones[] = $_id_tmp;
				}
				$_prev = $_id_tmp;
			}
			
			$_chord_ids[] = $_chord_tones;
		}
		return $_chord_ids;
	}
	
	function _get_diatonic_chords_by_id($_id, $_mode, $_trans_id=0){
		return _get_diatonic_chord_names($_id, $_mode, $_trans_id);
	}
	
	function _get_diatonic_chords($_key, $_mode, $_trans_id=0){
		return _get_diatonic_chords_by_id(_get_note_id($_key), $_mode, $_trans_id);
	}
	
	function _get_chord_name($_chord_tone_ids=array(), $_root_id=null){
		global $_NOTES;
		global $_REAL_NOTES;
		
		$_chord_name = "";
		
		$_flg_oncode = true;
		if(is_numeric($_root_id)){
			foreach($_chord_tone_ids as $_chord_tone_id){
				if(($_chord_tone_id % 12) == $_root_id){
					$_flg_oncode = false;
					break;
				}
			}
		}else{
			$_flg_oncode = false;
		}
		
		$_ids_ordered = array();
		foreach($_chord_tone_ids as $_chord_tone){
			$_id_tmp = $_chord_tone;
			$_ids_ordered[] = $_id_tmp;
		}
		//ksort($_ids_ordered);
		//print_r($_ids_ordered);
		
		$_chord_name .= $_REAL_NOTES[$_ids_ordered[0]]['name'];
		
		$_id_pre = $_ids_ordered[0];
		$i=1;
		$_mode = "";
		$_op_1 = "";
		$_op_2 = "";
		
		$_arr_root_diff = array();
		
		$_root_diff = 0;
		
		foreach($_ids_ordered as $_id_ordered){
			
			$_diff = $_id_ordered - $_id_pre;
			$_root_diff += $_diff;
			
			$_arr_root_diff[] = $_root_diff;
			
			$_id_pre = $_id_ordered;
			$i++;
		}
		//print_r($_arr_root_diff);
		
		// 2nd
		if($_arr_root_diff[1] == 3){
			$_mode = "m";
		}elseif($_arr_root_diff[1] == 4){
			$_mode = "M";
		}
		
		// 3rd
		if($_mode == "m"){
			if($_arr_root_diff[2] == 6){
				$_op_2 = "(-5)";
			}
		}elseif($_mode == "M"){
			if($_arr_root_diff[2] == 8){
				$_op_2 = "(#5)";
			}
		}
		
		// 4th
		if($_arr_root_diff[3] == 11){
			if($_mode == "M"){
				$_op_1 = "7";
			}else{
				$_op_1 = "M7";
			}
		}elseif($_arr_root_diff[3] == 10){
			//if($_mode == "M" && $_diff == 3){
			if($_mode == "M" && $_arr_root_diff[3] - $_arr_root_diff[2] == 3){
				$_mode = "";
			}
			$_op_1 = "7";
		}
		
		if($_arr_root_diff[1] == 3 && $_arr_root_diff[2] == 6 && $_arr_root_diff[3] == 9){
			$_op_1 = "dim";
			$_op_2 = "";
		}
		
		$_chord_name .= "{$_mode}{$_op_1}{$_op_2}";
		
		if($_flg_oncode){
			$_chord_name .= " on ".$_NOTES[$_root_id]['name'];
		}
		return $_chord_name;
	}
	
	function _get_chord_tones_by_name($_root, $_chord_cat, $_real=false, $_trans_id=0){
		return _get_chord_tones_by_id(_get_note_id($_root), $_chord_cat, $_real, $_trans_id);
	}
	
	function _get_chord_tones_by_id($_root_id, $_chord_cat, $_real=false, $_trans_id=0){
		global $_NOTES;
		global $_CHORDS;
		
		$_chord_tones = array();
		
		$_trans_diff = _get_note_diff(0, $_trans_id);
		
		$_diff = 0;
		
		$_root_id -= $_trans_diff;
		$_chord_tones[] = $_root_id;
		
		foreach($_CHORDS[$_chord_cat]['degree'] as $_degree){
			$_diff += $_degree;
			$_chord_tones[] = _get_note_near_by_id($_root_id, $_diff, $_real);
		}
		
		return $_chord_tones;
	}
	
?>

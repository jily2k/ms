/*****************************************
 *	mlib.js
 *	†
 *****************************************/

var note_c =  { id: 0,  key: "C",     name: "C",     level: 1, freq: 8.17579, relative: 0,  s: "C",  f: "C",  type: "n", tonejsname: "C",  color: "w" };
var note_cs = { id: 1,  key: "C#/Db", name: "C#/Db", level: 1, freq: 8.66195, relative: 1,  s: "C#", f: "Db", type: "f", tonejsname: "C#", color: "b" };
var note_d =  { id: 2,  key: "D",     name: "D",     level: 1, freq: 9.17702, relative: 2,  s: "D",  f: "D",  type: "s", tonejsname: "D",  color: "w" };
var note_ds = { id: 3,  key: "D#/Eb", name: "D#/Eb", level: 1, freq: 9.72271, relative: 3,  s: "D#", f: "Eb", type: "f", tonejsname: "D#", color: "b" };
var note_e =  { id: 4,  key: "E",     name: "E",     level: 1, freq: 10.30086, relative: 4,  s: "E",  f: "E",  type: "s", tonejsname: "E",  color: "w" };
var note_f =  { id: 5,  key: "F",     name: "F",     level: 1, freq: 10.91338, relative: 5,  s: "F",  f: "F",  type: "f", tonejsname: "F",  color: "w" };
var note_fs = { id: 6,  key: "F#/Gb", name: "F#/Gb", level: 1, freq: 11.56232, relative: 6,  s: "F#", f: "Gb", type: "f", tonejsname: "F#", color: "b" };
var note_g =  { id: 7,  key: "G",     name: "G",     level: 1, freq: 12.24985, relative: 7,  s: "G",  f: "G",  type: "s", tonejsname: "G",  color: "w" };
var note_gs = { id: 8,  key: "G#/Ab", name: "G#/Ab", level: 1, freq: 12.97827, relative: 8,  s: "G#", f: "Ab", type: "f", tonejsname: "G#", color: "b" };
var note_a =  { id: 9,  key: "A",     name: "A",     level: 1, freq: 13.75, relative: 9,  s: "A",  f: "A",  type: "s", tonejsname: "A",  color: "w" };
var note_as = { id: 10, key: "A#/Bb", name: "A#/Bb", level: 1, freq: 14.56761, relative: 10, s: "A#", f: "Bb", type: "f", tonejsname: "A#", color: "b" };
var note_b =  { id: 11, key: "B",     name: "B",     level: 1, freq: 15.43385, relative: 11, s: "B",  f: "B",  type: "s", tonejsname: "B",  color: "w" };

var notes = [];
notes.push(note_c);
notes.push(note_cs);
notes.push(note_d);
notes.push(note_ds);
notes.push(note_e);
notes.push(note_f);
notes.push(note_fs);
notes.push(note_g);
notes.push(note_gs);
notes.push(note_a);
notes.push(note_as);
notes.push(note_b);

var real_notes = [];
real_notes.push(note_c);
real_notes.push(note_cs);
real_notes.push(note_d);
real_notes.push(note_ds);
real_notes.push(note_e);
real_notes.push(note_f);
real_notes.push(note_fs);
real_notes.push(note_g);
real_notes.push(note_gs);
real_notes.push(note_a);
real_notes.push(note_as);
real_notes.push(note_b);

for(var i=1; i<=11; i++){
	for(var nn=0; nn<notes.length; nn++){
		var n = notes[nn];
		var new_n = { 
			id: n.id + (i * 12), 
			key: n.key, 
			name:n.name, 
			relative: n.relative + (i * 12), 
			s: n.s, 
			f: n.f, 
			type: n.type, 
			tonejsname: n.tonejsname, 
			freq: n.freq * Math.pow(2, i), 
			level: n.level + i, 
			color: n.color
		};
		real_notes.push(new_n);
	}
}

for(var i=0; i<real_notes.length; i++){
	var n = real_notes[i];
	console.log(i + " id:" + n.id + " name:" + n.name + " level:" + n.level + " freq:" + n.freq + " relative:" + n.relative);
}

/*
for(var i=0; i<=1; i++){
	for(var nn=0; nn<notes.length; nn++){
		var n = notes[nn];
		n.level = n.level + i;
		//n.freq = n.freq * 2;
		debug(n);
		real_notes.push(n);
	}
}
*/

function debug(n){
	console.log(" id:" + n.id + " name:" + n.name + " level:" + n.level + " freq:" + n.freq + " relative:" + n.relative);
}

/*************************************
 * Chord
 *************************************/

var chord_M7 = { id: "M7", name: "M7", degree: [4, 3, 4] };
var chord_M79 = { id: "M79", name: "M7(9)", degree: [4, 3, 4, 3] };
var chord_m = { id: "m", name: "m", degree: [3, 4] };
var chord_m7 = { id: "m7", name: "m7", degree: [3, 4, 3] };
var chord_m7b5 = { id: "m7b5", name: "m7(b5)", degree: [3, 3, 4] };
var chord_m79 = { id: "m79", name: "m7(9)", degree: [3, 4, 3, 4] };
var chord_m711 = { id: "m711", name: "m7(11)", degree: [3, 2, 2, 3] };
var chord_mM7 = { id: "mM7", name: "mM7", degree: [3, 4, 4] };
var chord_7 = { id: "7", name: "7", degree: [4, 3, 3] };
var chord_7b9 = { id: "7b9", name: "7(b9)", degree: [4, 3, 3, 3] };
var chord_79 = { id: "79", name: "7(9)", degree: [4, 3, 3, 4] };
var chord_7s9 = { id: "7s9", name: "7(#9)", degree: [4, 3, 3, 5] };
var chord_7b13 = { id: "7b13", name: "7(b13)", degree: [4, 3, 1, 2] };
var chord_713 = { id: "713", name: "7(13)", degree: [4, 3, 2, 1] };
var chord_7sus4 = { id: "7sus4", name: "7sus4", degree: [5, 2, 3] };
var chord_sus4 = { id: "sus4", name: "sus4", degree: [5, 2] };
var chord_6 = { id: "6", name: "6", degree: [4, 3, 2] };
var chord_m6 = { id: "m6", name: "m6", degree: [3, 4, 2] };
var chord_dim7 = { id: "dim7", name: "dim7", degree: [3, 3, 3] };

var chords = [];
chords.push(chord_M7);
chords.push(chord_M79);
chords.push(chord_m);
chords.push(chord_m7);
chords.push(chord_m7b5);
chords.push(chord_m79);
chords.push(chord_m711);
chords.push(chord_mM7);
chords.push(chord_7);
chords.push(chord_7b9);
chords.push(chord_79);
chords.push(chord_7s9);
chords.push(chord_7b13);
chords.push(chord_713);
chords.push(chord_7sus4);
chords.push(chord_sus4);
chords.push(chord_6);
chords.push(chord_m6);
chords.push(chord_dim7);

/*************************************
 * Scale
 *************************************/

var scale_M = { id: "M", name: "メジャー", degree: [2, 2, 1, 2, 2, 2, 1] };
var scale_nm = { id: "nm", name: "ナチュラル・マイナー", degree: [2, 1, 2, 2, 1, 2, 2] };
var scale_hm = { id: "hm", name: "ハーモニック・マイナー", degree: [2, 1, 2, 2, 1, 3, 1] };
var scale_mm = { id: "mm", name: "メロディック・マイナー", degree: [2, 1, 2, 2, 2, 2, 1] };
var scale_alt = { id: "alt", name: "オルタード", degree: [1, 2, 1, 2, 2, 2, 2] };
var scale_hmp5 = { id: "hmp5", name: "ハーモニック・マイナー P5th ビロウ", degree: [1, 3, 1, 2, 1, 2, 2] };
var scale_lydb7 = { id: "lydb7", name: "リディアンb7", degree: [2, 2, 2, 1, 2, 1, 2] };
var scale_dim = { id: "dim", name: "ディミニッシュ", degree: [2, 1, 2, 1, 2, 1, 2, 1] };
var scale_com = { id: "com", name: "コンディミ", degree: [1, 2, 1, 2, 1, 2, 1, 2] };
var scale_Mp = { id: "Mp", name: "メジャー・ペンタトニック", degree: [2,2,3,2,3] };
var scale_mp = { id: "mp", name: "マイナー・ペンタトニック", degree: [3,2,2,3,2] };
var scale_ionian = { id: "ionian", name: "イオニアン", degree: [2,2,1,2,2,2,1] };
var scale_dorian = { id: "dorian", name: "ドリアン", degree: [2,1,2,2,2,1,2] };
var scale_phrygian = { id: "phrygian", name: "フリジアン", degree: [1,2,2,2,1,2,2] };
var scale_lydian = { id: "lydian", name: "リディアン", degree: [2,2,2,1,2,2,1] };
var scale_mixolydian = { id: "mixolydian", name: "ミクソリディアン", degree: [2,2,1,2,2,1,2] };
var scale_aeolian = { id: "aeolian", name: "エオリアン", degree: [2,1,2,2,1,2,2] };
var scale_locrian = { id: "locrian", name: "ロクリアン", degree: [1,2,2,1,2,2,2] };

var scales = [];
scales.push(scale_M);
scales.push(scale_nm);
scales.push(scale_hm);
scales.push(scale_mm);
scales.push(scale_alt);
scales.push(scale_hmp5);
scales.push(scale_lydb7);
scales.push(scale_dim);
scales.push(scale_com);
scales.push(scale_Mp);
scales.push(scale_mp);
scales.push(scale_ionian);
scales.push(scale_dorian);
scales.push(scale_phrygian);
scales.push(scale_lydian);
scales.push(scale_mixolydian);
scales.push(scale_aeolian);
scales.push(scale_locrian);

/*************************************
 * Degree
 *************************************/

var deg_1 = { id: 1, name: "1" }
var deg_2 = { id: 2, name: "b9" }
var deg_3 = { id: 3, name: "2/9" }
var deg_4 = { id: 4, name: "m3/#9" }
var deg_5 = { id: 5, name: "M3" }
var deg_6 = { id: 6, name: "4/11" }
var deg_7 = { id: 7, name: "b5" }
var deg_8 = { id: 8, name: "5" }
var deg_9 = { id: 9, name: "b6/b13" }
var deg_10 = { id: 10, name: "6/13" }
var deg_11 = { id: 11, name: "m7" }
var deg_12 = { id: 12, name: "M7" }

var degree = [];
degree.push(deg_1);
degree.push(deg_2);
degree.push(deg_3);
degree.push(deg_4);
degree.push(deg_5);
degree.push(deg_6);
degree.push(deg_7);
degree.push(deg_8);
degree.push(deg_9);
degree.push(deg_10);
degree.push(deg_11);
degree.push(deg_12);

function get_ext_notes(note_ids){
	var ext_notes = [];
	for(var i=0; i<=8; i++){
		Array.prototype.push.apply(ext_notes, notes_oct_up(note_ids, i));
	}
	return ext_notes;
}

function notes_oct_up(arr, oct){
	var ret_arr = [];
	for(var i=0; i<arr.length; i++){
		ret_arr.push(arr[i] + (12*oct));
	}
	return ret_arr;
}

function log(tgt){
	console.log(tgt);
}

/*************************************
 * get_freq
 * get frequency
 *************************************/

function get_freq(note_id){
	var freq = real_notes[note_id].freq;
	return freq;
}

/*************************************
 * get_note_by_tonejsname
 * get note by note.js name
 *************************************/

function get_note_by_tonejsname(tonejsname){
	var id;
	for(var i=0; i<notes.length; i++){
		var note = notes[i];
		if(note.tonejsname == tonejsname){
			id = note.id;
			break;
		}
	}
	return get_note_by_id(id);
}

/*************************************
 * get_note_by_id
 * get note object by note id
 *************************************/
/*
var note = get_note_by_id(34, true);
console.log("name:" + note.name);
*/
function get_note_by_id(id, real){
	//var real = (real == undefined) ? real : false;
	var notes_tmp = null;
	notes_tmp = real_notes;
	
	for(var i=0; i<notes_tmp.length; i++){
		var note = notes_tmp[i];
		if(note.id == id){
			return note;
			break;
		}
	}
	return null;
}

/*************************************
 * get_note_id
 * get note id by the note name from notes
 *************************************/
 
function get_note_id(name){
	var id;
	for(var i=0; i<notes.length; i++){
		var note = notes[i];
		if(note.key == name){
			id = note.id;
			break;
		}
	}
	return id;
}

/*************************************
 * get_note_id_real
 * get note id by the note name and level 
 * from real_notes
 *************************************/
 
function get_note_id_real(name, level){
	var id;
	for(var i=0; i<real_notes.length; i++){
		var note = real_notes[i];
		if(note.key == name && note.level == level){
			id = note.id;
			break;
		}
	}
	return id;
}

/*************************************
 * get_note_id_by_id
 * get note id from one octave or multiple octave
 *************************************/

function get_note_id_by_id(note_id, real){
	//var real = (real == undefined) ? real : false;
	var nid = null;
	if(real == false){
		nid = (note_id % 12);
	}else{
		nid = note_id;
	}
	return nid;
}

/*************************************
 * get_note_diff
 * get diff from two note ids
 *************************************/

function get_note_diff(base_note_id, note_id){
	note_id = note_id + 12;
	var diff = note_id - base_note_id;
	return (diff % 12)
}

/*************************************
 * get_degree
 * get degree between two notes
 *************************************/
 
function get_degree(root_id, note_id){
	var root_id_rel = get_note_id_by_id(root_id);
	var note_id_rel = get_note_id_by_id(note_id);
	
	var diff = null;
	if(note_id_rel >= root_id_rel){
		diff = note_id_rel - root_id_rel;
	}else{
		diff = 12 - (root_id_rel - note_id_rel);
	}
	
	diff++;
	
	var deg = null;
	for(var d=0; d<degree.length; d++){
		deg = degree[d];
		if(diff == deg.id){
			break;
		}
	}
	
	return deg;
}

function get_key_notes(key, mode, real, trans_id){
	var real = (real !== undefined) ? real : false;
	var trans_id = (trans_id !== undefined) ? trans_id : 0;
	
	return get_key_notes_by_id(get_note_id(key), mode, real, trans_id);
}

function get_key_notes_by_id(key_id, mode, real, trans_id){
	var real = (real !== undefined) ? real : false;
	var trans_id = (trans_id !== undefined) ? trans_id : 0;
	
	var trans_diff = get_note_diff(0, trans_id);
	var root_note = get_note_id_by_id(key_id - trans_diff);
	
	var key_notes = [];
	key_notes.push(root_note);
	
	var num = 1;
	if(real){ num = 5; }
	
	var sum = 0;
	
	var scale = search_scale(mode);
	for(var i=0; i<scale.degree.length; i++){
		sum += scale.degree[i];
		key_notes.push(get_note_near_by_id(root_note, sum, real));
	}
	
	return key_notes;
}

function get_note_near_by_id(id, diff, real){
	var real = (real !== undefined) ? real : false;
	var id_tmp;
	if(real){
		id_tmp = id + diff;
	}else{
		id_tmp = (id + diff) % 12;
	}
	return id_tmp;
}

function get_chord_tones_by_name(root_id, chord_cat, real, trans_id){
	var real = (real !== undefined) ? real : false;
	var trans_id = (trans_id !== undefined) ? trans_id : 0;
	
	var chord_tones = [];
	var trans_diff = get_note_diff(0, trans_id);
	var diff = 0;
	root_id -= trans_diff;
	chord_tones.push(root_id);
	
	var chord = search_chord(chord_cat);
	for(var i=0; i<chord.degree.length; i++){
		diff += chord.degree[i];
		chord_tones.push(get_note_near_by_id(root_id, diff, real));
	}
	return chord_tones;
}

function search_scale(scale_id){
	for(var i=0; i<scales.length; i++){
		var sc = scales[i];
		if(sc.id == scale_id){
			return sc;
			break;
		}
	}
}

function search_note(note_id){
	/*
	for(var i=0; i<notes.length; i++){
		var n = notes[i];
		if(n.id == note_id){
			return n;
			break;
		}
	}
	return null;
	*/
	return get_note_by_id(note_id, false);
}

function search_chord(chord_id){
	for(var i=0; i<chords.length; i++){
		var c = chords[i];
		if(c.id == chord_id){
			return c;
			break;
		}
	}
}

function getValue(obj, key, undefinedValue) {
	var k = key.split('.');
	for (var i = 0, v = obj; i < k.length; i++) {
		if (!(k[i] in v)) {return undefinedValue;}
		v = v[k[i]];
	}
	return v;
}


<?php
	// †
	$_DEBUG = true;
?>
	<script type="text/javascript">
	$(document).ready(function(){
		<?php if(!$_DEBUG): ?>
		var debug = false;
		<?php else: ?>
		var debug = true;
		<?php endif; ?>
		
		var synth = new Tone.Synth().toMaster();
		
		var state = true;
		var waveform = "sawtooth";
		var note_level = "5";
		var note_length = "8n";
		
		function note_attack(note){
			if(!state) return;
			synth.triggerAttackRelease(note.tonejsname + note_level, note_length);
		}
		
		function note_release(){
			state = true;
		}
		
		var synth_synth = new Tone.Synth().toMaster();
		var synth_mono = new Tone.MonoSynth().toMaster();
		var synth_fm = new Tone.FMSynth().toMaster();
		var synth_poly = new Tone.PolySynth().toMaster();
		var synth_metail = new Tone.MetalSynth().toMaster();
		
		$('#sel_synth').change(function() {
			var val = $(this).val();
			alert(val);
			
			if(val == "Synth"){ synth = synth_synth; }
			else if(val == "MonoSynth"){ synth = synth_mono; }
			else if(val == "FMSynth"){ synth = synth_fm; }
			else if(val == "PolySynth"){ synth = synth_poly; }
			else if(val == "MetalSynth"){ synth = synth_metal; }
		});
		
		$('#canvas')
			.drawSlice({
			  layer: true,
			  name: 'c-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#00bfff',
			  x: 180, y: 110,
			  start: -15, end: 15,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("C")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'f-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#00ff7f',
			  x: 180, y: 110,
			  start: 15, end: 45,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("F")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'bb-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#daa520',
			  x: 180, y: 110,
			  start: 45, end: 75,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("A#/Bb")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'eb-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#d8bfd8',
			  x: 180, y: 110,
			  start: 75, end: 105,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("D#/Eb")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'ab-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#ff00ff',
			  x: 180, y: 110,
			  start: 105, end: 135,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("G#/Ab")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'db-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#cd853f',
			  x: 180, y: 110,
			  start: 135, end: 165,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("C#/Db")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'gb-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#00fa9a',
			  x: 180, y: 110,
			  start: 165, end: 195,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("F#/Gb")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'b-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#87cefa',
			  x: 180, y: 110,
			  start: 195, end: 225,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("B")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'e-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#708090',
			  x: 180, y: 110,
			  start: 225, end: 255,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("E")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'a-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#228b22',
			  x: 180, y: 110,
			  start: 255, end: 285,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("A")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'd-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#ff6347',
			  x: 180, y: 110,
			  start: 285, end: 315,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("D")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawSlice({
			  layer: true,
			  name: 'g-slice',
			  groups: ['chart', 'slices'],
			  fillStyle: '#6c0',
			  x: 180, y: 110,
			  start: 315, end: 345,
			  radius: 100,
			  spread: 1 / 40, 
			  data: {
				nid: get_note_id("G")
			  }, 
			  mouseover: function(layer) {
				note_attack(notes[layer.data.nid]);
			  },
			  mouseout: function(layer) {
				note_release();
			  }
			})

			.drawText({
			  layer: true,
			  name: 'c-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 180, y: 20,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'C'
			})

			.drawText({
			  layer: true,
			  name: 'f-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 225, y: 32,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'F'
			})

			.drawText({
			  layer: true,
			  name: 'bb-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 260, y: 65,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'Bb'
			})

			.drawText({
			  layer: true,
			  name: 'eb-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 270, y: 110,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'Eb'
			})

			.drawText({
			  layer: true,
			  name: 'ab-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 260, y: 155,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'Ab'
			})

			.drawText({
			  layer: true,
			  name: 'db-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 225, y: 190,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'Db'
			})

			.drawText({
			  layer: true,
			  name: 'gb-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 180, y: 200,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'Gb'
			})

			.drawText({
			  layer: true,
			  name: 'b-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 135, y: 190,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'B'
			})

			.drawText({
			  layer: true,
			  name: 'e-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 100, y: 155,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'E'
			})

			.drawText({
			  layer: true,
			  name: 'a-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 90, y: 110,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'A'
			})

			.drawText({
			  layer: true,
			  name: 'd-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 100, y: 65,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'D'
			})

			.drawText({
			  layer: true,
			  name: 'g-label',
			  groups: ['chart', 'labels'],
			  fillStyle: '#fff',
			  x: 135, y: 32,
			  fontFamily: 'sans-serif',
			  fontSize: 15,
			  text: 'G'
			})
			;
	});
	</script>
	
	<div class="container-fluid">
		<b>Circle Of Fifth</b>
		<!--<h2>Circle Of Fifth</h2>-->
		<div class="row">
			<div class="col-xs-12 bg-info">
				sounds when you mouse-over.
			</div>

			<br>

			<div class="col-xs-6">
				<br>
				<canvas id="canvas" width="400" height="250"></canvas>
			</div>
			
			<div class="col-xs-6">
				<!--
				<br>
				Synth: 
				<select id="sel_synth" class="form-control">
					<option value="Synth">Synth</option>
					<option value="MonoSynth">MonoSynth</option>
					<option value="FMSynth">FMSynth</option>
					<option value="PolySynth">PolySynth</option>
					<option value="MetalSynth">MetalSynth</option>
				</select>
				-->
			</div>
			
			<div class="col-xs-12">
				Web Audio APIを利用しています。ブラウザによっては、利用できない場合があります。
			</div>
			
		</div>
	</div>
	
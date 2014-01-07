<?php 
/*
 * http://pippinsplugins.com/user-friendly-short-codes-plugin-example/ 
 * http://return-true.com/2011/12/adding-tinymce-button-to-wordpress-via-plugin-part-2/
 *
 */
?>
<html>
<head>
	<title>Formazione Posts</title>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" src="/wp-includes/js/tinymce/tiny_mce_popup.js"></script>
	<script language="javascript" type="text/javascript" src="/wp-content/plugins/formazioneposts/tinymce/tabber.js" ></script>	
	<link rel="stylesheet" href="/wp-content/plugins/formazioneposts/tinymce/formazioneposts.css" type="text/css" media="screen" /></link>
		
<script type="text/javascript">

	var FormazioneTiny = {
		e: '',
		init: function(e) {
			FormazioneTiny.e = e;
			tinyMCEPopup.resizeToInnerSize();
		},
		insert: function createGalleryShortcode(e) {
			
			var field_bg_option = jQuery('input:radio[name=fp_background_field]:checked').val();
			var module = jQuery('input:radio[name=fp_module]:checked').val();
			var pl1_num = jQuery('input#pl1-num').val();
			var pl1_name = jQuery('input#pl1-name').val();		 
			var pl2_num = jQuery('input#pl2-num').val();		 
			var pl2_name = jQuery('input#pl2-name').val();		 
			var pl3_num = jQuery('input#pl3-num').val();
			var pl3_name = jQuery('input#pl3-name').val();		 
			var pl4_num = jQuery('input#pl4-num').val();		 
			var pl4_name = jQuery('input#pl4-name').val();		 
			var pl5_num = jQuery('input#pl5-num').val();
			var pl5_name = jQuery('input#pl5-name').val();		 
			var pl6_num = jQuery('input#pl6-num').val();		 
			var pl6_name = jQuery('input#pl6-name').val();		 
			var pl7_num = jQuery('input#pl7-num').val();		 
			var pl7_name = jQuery('input#pl7-name').val();		 
			var pl8_num = jQuery('input#pl8-num').val();
			var pl8_name = jQuery('input#pl8-name').val();		 
			var pl9_num = jQuery('input#pl9-num').val();		 
			var pl9_name = jQuery('input#pl9-name').val();		 
			var pl10_num = jQuery('input#pl10-num').val();
			var pl10_name = jQuery('input#pl10-name').val();		 
			var pl11_num = jQuery('input#pl11-num').val();		 
			var pl11_name = jQuery('input#pl11-name').val();		 
			
			var output = '';
		
			// setup the output of our shortcode
			output = '[formazione-posts ';
			output += 'field_bg_option=' + field_bg_option;
			output += ' module=' + module;
			output += ' pl1_num=' + getValPlayer(pl1_num, '0');
			output += ' pl1_name=' + getValPlayer(pl1_name, '');
			output += ' pl2_num=' + getValPlayer(pl2_num, '0');
			output += ' pl2_name=' + getValPlayer(pl2_name, '');
			output += ' pl3_num=' + getValPlayer(pl3_num, '0');
			output += ' pl3_name=' + getValPlayer(pl3_name, '');
			output += ' pl4_num=' + getValPlayer(pl4_num, '0');
			output += ' pl4_name=' + getValPlayer(pl4_name, '');
			output += ' pl5_num=' + getValPlayer(pl5_num, '0');
			output += ' pl5_name=' + getValPlayer(pl5_name, '');
			output += ' pl6_num=' + getValPlayer(pl6_num, '0');
			output += ' pl6_name=' + getValPlayer(pl6_name, '');
			output += ' pl7_num=' + getValPlayer(pl7_num, '0');
			output += ' pl7_name=' + getValPlayer(pl7_name, '');
			output += ' pl8_num=' + getValPlayer(pl8_num, '0');
			output += ' pl8_name=' + getValPlayer(pl8_name, '');
			output += ' pl9_num=' + getValPlayer(pl9_num, '0');
			output += ' pl9_name=' + getValPlayer(pl9_name, '');
			output += ' pl10_num=' + getValPlayer(pl10_num, '0');
			output += ' pl10_name=' + getValPlayer(pl10_name, '');
			output += ' pl11_num=' + getValPlayer(pl11_num, '0');
			output += ' pl11_name=' + getValPlayer(pl11_name, '');
			
			output += '/]';
						
			tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		
			tinyMCEPopup.close();
			
		}
	}
	tinyMCEPopup.onInit.add(FormazioneTiny.init, FormazioneTiny);

	function getValPlayer(val, defaultValue){
		if (val==''){return defaultValue;}
		else{return val;}
	}
		
	jQuery(document).ready(function() {
		jQuery('#fp_module_442').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>terzino dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale dx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>terzino sx</b>");
			jQuery("#lbl-pl6").html("<b>ala dx</b>");
			jQuery("#lbl-pl7").html("<b>mezzala dx</b>");
			jQuery("#lbl-pl8").html("<b>mezzala sx</b>");
			jQuery("#lbl-pl9").html("<b>ala sx</b>");
			jQuery("#lbl-pl10").html("<b>attaccante dx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante sx</b>");
		});
		
		jQuery('#fp_module_433').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>terzino dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale dx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>terzino sx</b>");
			jQuery("#lbl-pl6").html("<b>mezzala dx</b>");
			jQuery("#lbl-pl7").html("<b>centrale</b>");
			jQuery("#lbl-pl8").html("<b>mezzala sx</b>");
			jQuery("#lbl-pl9").html("<b>attaccante dx</b>");
			jQuery("#lbl-pl10").html("<b>attaccante cx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante sx</b>");
		});

		jQuery('#fp_module_451').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>terzino dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale dx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>terzino sx</b>");
			jQuery("#lbl-pl6").html("<b>ala dx</b>");
			jQuery("#lbl-pl7").html("<b>mezzala dx</b>");
			jQuery("#lbl-pl8").html("<b>centrale</b>");
			jQuery("#lbl-pl9").html("<b>mezzala sx</b>");
			jQuery("#lbl-pl10").html("<b>ala sx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante</b>");
		});

		jQuery('#fp_module_541').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>terzino dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale dx</b>");
			jQuery("#lbl-pl4").html("<b>centrale cx</b>");
			jQuery("#lbl-pl5").html("<b>centrale sx</b>");
			jQuery("#lbl-pl6").html("<b>terzino sx</b>");
			jQuery("#lbl-pl7").html("<b>ala dx</b>");
			jQuery("#lbl-pl8").html("<b>mezzala dx</b>");
			jQuery("#lbl-pl9").html("<b>mezzala sx</b>");
			jQuery("#lbl-pl10").html("<b>ala sx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante</b>");
		});

		jQuery('#fp_module_4231').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>terzino dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale dx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>terzino sx</b>");
			jQuery("#lbl-pl6").html("<b>mediano dx</b>");
			jQuery("#lbl-pl7").html("<b>mediano sx</b>");
			jQuery("#lbl-pl8").html("<b>ala dx</b>");
			jQuery("#lbl-pl9").html("<b>trequartista</b>");
			jQuery("#lbl-pl10").html("<b>ala sx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante</b>");
		});

		jQuery('#fp_module_4321').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>terzino dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale dx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>terzino sx</b>");
			jQuery("#lbl-pl6").html("<b>mediano dx</b>");
			jQuery("#lbl-pl7").html("<b>mediano cx</b>");
			jQuery("#lbl-pl8").html("<b>mediano sx</b>");
			jQuery("#lbl-pl9").html("<b>ala dx</b>");
			jQuery("#lbl-pl10").html("<b>ala sx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante</b>");
		});

		jQuery('#fp_module_4312').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>terzino dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale dx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>terzino sx</b>");
			jQuery("#lbl-pl6").html("<b>mezzala dx</b>");
			jQuery("#lbl-pl7").html("<b>centrale</b>");
			jQuery("#lbl-pl8").html("<b>mezzala sx</b>");
			jQuery("#lbl-pl9").html("<b>trequartista</b>");
			jQuery("#lbl-pl10").html("<b>attaccante dx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante sx</b>");
		});

		jQuery('#fp_module_352').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>centrale dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale cx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>ala dx</b>");
			jQuery("#lbl-pl6").html("<b>mezzala dx</b>");
			jQuery("#lbl-pl7").html("<b>centrale</b>");
			jQuery("#lbl-pl8").html("<b>mezzala sx</b>");
			jQuery("#lbl-pl9").html("<b>ala sx</b>");
			jQuery("#lbl-pl10").html("<b>attaccante dx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante sx</b>");
		});

		jQuery('#fp_module_3412').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>centrale dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale cx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>ala dx</b>");
			jQuery("#lbl-pl6").html("<b>mezzala dx</b>");
			jQuery("#lbl-pl7").html("<b>mezzala sx</b>");
			jQuery("#lbl-pl8").html("<b>ala sx</b>");
			jQuery("#lbl-pl9").html("<b>trequartista</b>");
			jQuery("#lbl-pl10").html("<b>attaccante dx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante sx</b>");
		});

		jQuery('#fp_module_343').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>centrale dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale cx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>ala dx</b>");
			jQuery("#lbl-pl6").html("<b>mezzala dx</b>");
			jQuery("#lbl-pl7").html("<b>mezzala sx</b>");
			jQuery("#lbl-pl8").html("<b>ala sx</b>");
			jQuery("#lbl-pl9").html("<b>attaccante dx</b>");
			jQuery("#lbl-pl10").html("<b>attaccante cx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante sx</b>");
		});

		jQuery('#fp_module_3412').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>centrale dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale cx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>ala dx</b>");
			jQuery("#lbl-pl6").html("<b>mezzala dx</b>");
			jQuery("#lbl-pl7").html("<b>mezzala sx</b>");
			jQuery("#lbl-pl8").html("<b>ala sx</b>");
			jQuery("#lbl-pl9").html("<b>trequartista</b>");
			jQuery("#lbl-pl10").html("<b>attaccante dx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante sx</b>");
		});

		jQuery('#fp_module_3421').on('click',function(event) {
			jQuery("#lbl-pl2").html("<b>centrale dx</b>");
			jQuery("#lbl-pl3").html("<b>centrale cx</b>");
			jQuery("#lbl-pl4").html("<b>centrale sx</b>");
			jQuery("#lbl-pl5").html("<b>ala dx</b>");
			jQuery("#lbl-pl6").html("<b>mezzala dx</b>");
			jQuery("#lbl-pl7").html("<b>mezzala sx</b>");
			jQuery("#lbl-pl8").html("<b>ala sx</b>");
			jQuery("#lbl-pl9").html("<b>ala dx</b>");
			jQuery("#lbl-pl10").html("<b>ala sx</b>");
			jQuery("#lbl-pl11").html("<b>attaccante</b>");
		});
		
});
	
</script>	

<style type="text/css">
.formazione-list{
	list-style-type:none;
}
.formazione-number{
	width:30px;
}
.formazione-list div{
	width: 100px;
	float: left;
}
.button {
	border: 1px solid #555;
	margin: 0;
	padding: 0 0 1px;
	float: right;
	font-weight: bold;
	font-size: 11px;
	width: 94px;
	height: 24px;
	color: #000;
	cursor: pointer;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	background: #FFF;
	background-color: #eee;
	background-image: linear-gradient(to top, #ddd, #fff);
	text-align: center;
	text-decoration: none;
}
</style>
</head>
<body>
		
	<div class="tabber">
	
		<div class="tabbertab">
			<h2>Campo di sfondo</h2>
			<label for="fp_background_field"><b>Campo di sfondo:</b></label>
			<table class="table">
				<tbody>
					<tr valign="top">
					  <td>
							<input type="radio" name="fp_background_field" id="fp_background_field10" value="10" />
					    <?php echo '<img src="/wp-content/plugins/formazioneposts/images/football_pitch_10.png" width="40%"> ';?>
					  </td>
					  <td>
							<input type="radio" name="fp_background_field" id="fp_background_field11" value="11" />
					    <?php echo '<img src="/wp-content/plugins/formazioneposts/images/football_pitch_11.png" width="40%"> ';?>
					  </td>
					  <td>
							<input type="radio" name="fp_background_field" id="fp_background_field12" value="12" />
					    <?php echo '<img src="/wp-content/plugins/formazioneposts/images/football_pitch_12.png" width="40%"> ';?>
					  </td>
				  </tr>
					<tr valign="top">
					  <td>
							<input type="radio" name="fp_background_field" id="fp_background_field13" value="13" />
					    <?php echo '<img src="/wp-content/plugins/formazioneposts/images/football_pitch_13.png" width="40%"> ';?>
					  </td>
					  <td>
							<input type="radio" name="fp_background_field" id="fp_background_field14" value="14" checked/>
					    <?php echo '<img src="/wp-content/plugins/formazioneposts/images/football_pitch_14.png" width="40%"> ';?>
					  </td>
					  <td>
							<input type="radio" name="fp_background_field" id="fp_background_field15" value="15" />
					    <?php echo '<img src="/wp-content/plugins/formazioneposts/images/football_pitch_15.png" width="40%"> ';?>
					  </td>
					</tr>
					
				</tbody>
			</table>
		</div>
	
		<div class="tabbertab">
		<h2>Modulo</h2>
		<label for="fp_module"><b>Modulo:</b></label>
		<table class="table">
			<tbody>
				<tr valign="top">
					<td style="width:120px;">
						<input type="radio" name="fp_module" id="fp_module_442" value="442" checked />4-4-2
				  </td>
				  <td style="width:120px;">
						<input type="radio" name="fp_module" id="fp_module_433" value="433" />4-3-3
				  </td>
				  <td style="width:120px;">
						<input type="radio" name="fp_module" id="fp_module_451" value="451" />4-5-1
				  </td>
			  </tr>
				<tr valign="top">
				  <td style="width:120px;">
						<input type="radio" name="fp_module" id="fp_module_541" value="541" />5-4-1
				  </td>
				  <td style="width:120px;">
						<input type="radio" name="fp_module" id="fp_module_4231" value="4231" />4-2-3-1
				  </td>
				  <td style="width:120px;">
						<input type="radio" name="fp_module" id="fp_module_4321" value="4321" />4-3-2-1
				  </td>
				</tr>
				<tr valign="top">
					<td>
						<input type="radio" name="fp_module" id="fp_module_4312" value="4312" />4-3-1-2
				  </td>
					<td>
						<input type="radio" name="fp_module" id="fp_module_352" value="352" />3-5-2
				  </td>
					<td>
						<input type="radio" name="fp_module" id="fp_module_3412" value="3412" />3-4-1-2
				  </td>
			 </tr>
				<tr valign="top">
					<td>
						<input type="radio" name="fp_module" id="fp_module_343" value="343" />3-4-3
				  </td>
					<td>
						<input type="radio" name="fp_module" id="fp_module_3412" value="3412" />3-4-1-2
				  </td>
					<td>
						<input type="radio" name="fp_module" id="fp_module_3421" value="3421" />3-4-2-1
				  </td>
			 </tr>
			 
			</tbody>
		</table>
		</div>
	
		<div class="tabbertab">
		<h2>Formazione</h2>
		<ul>
			<li class="formazione-list">
				<div><label id="lbl-pl1"><b>portiere:</b></label></div>
				<input type="text" name="pl1-num" id="pl1-num" value="1" class="formazione-number"/>
				<input type="text" name="pl1-name" id="pl1-name" value="" />
			</li>
			<li class="formazione-list">
				<div><label id="lbl-pl2"><b>terzino dx:</b></label></div>
				<input type="text" name="pl2-num" id="pl2-num" value="2" class="formazione-number"/>
				<input type="text" name="pl2-name" id="pl2-name" value="" />
			</li>
			<li class="formazione-list">
				<div><label id="lbl-pl3"><b>centrale dif dx:</b></label></div>
				<input type="text" name="pl3-num" id="pl3-num" value="3" class="formazione-number"/>
				<input type="text" name="pl3-name" id="pl3-name" value="" />
			</li>
			<li class="formazione-list">
				<div><label id="lbl-pl4"><b>centrale dif sx:</b></label></div>
				<input type="text" name="pl4-num" id="pl4-num" value="4" class="formazione-number"/>
				<input type="text" name="pl4-name" id="pl4-name" value="" />
			</li>
			<li class="formazione-list">
				<div><label id="lbl-pl5"><b>terzino sx:</b></label></div>
				<input type="text" name="pl5-num" id="pl5-num" value="5" class="formazione-number"/>
				<input type="text" name="pl5-name" id="pl5-name" value="" />
			</li>
			<li class="formazione-list">
				<div><label id="lbl-pl6"><b>ala dx:</b></label></div>
				<input type="text" name="pl6-num" id="pl6-num" value="6" class="formazione-number"/>
				<input type="text" name="pl6-name" id="pl6-name" value="" />
			</li>
			<li class="formazione-list">
				<div><label id="lbl-pl7"><b>mezzala dx:</b></label></div>
				<input type="text" name="pl7-num" id="pl7-num" value="7" class="formazione-number"/>
				<input type="text" name="pl7-name" id="pl7-name" value="" />
			</li>
			<li class="formazione-list">
				<div><label id="lbl-pl8"><b>mezzala sx:</b></label></div>
				<input type="text" name="pl8-num" id="pl8-num" value="8" class="formazione-number"/>
				<input type="text" name="pl8-name" id="pl8-name" value="" />
			</li>
			<li class="formazione-list">
				<div><label id="lbl-pl9"><b>ala sx:</b></label></div>
				<input type="text" name="pl9-num" id="pl9-num" value="9" class="formazione-number"/>
				<input type="text" name="pl9-name" id="pl9-name" value="" />
			</li>
			<li class="formazione-list">
				<div><label id="lbl-pl10"><b>attaccante dx:</b></label></div>
				<input type="text" name="pl10-num" id="pl10-num" value="10" class="formazione-number"/>
				<input type="text" name="pl10-name" id="pl10-name" value="" />
			</li>
			<li class="formazione-list">
				<div><label id="lbl-pl11"><b>attaccante sx:</b></label></div>
				<input type="text" name="pl11-num" id="pl11-num" value="11" class="formazione-number"/>
				<input type="text" name="pl11-name" id="pl11-name" value="" />
			</li>
			
		</ul>
		</div>
	
	</div>		
		
	<p><a class="button" href="javascript:tinyMCEPopup.close();">Annulla</a></p>
	<p><a class="button" href="javascript:FormazioneTiny.insert(FormazioneTiny.e)">Inserisci</a></p>
</body>
</html>
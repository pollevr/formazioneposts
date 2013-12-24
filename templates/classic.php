<?php
/*
 * Standard template for this plugin
 * 
 */

class Formazione {
	public $structures = array(
		'4-4-2' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','32.5'=>'26.6','57.5'=>'26.6','82.5'=>'26.6'),
				array('7.5'=>'53.4','32.5'=>'53.4','57.5'=>'53.4','82.5'=>'53.4'),
				array('32.5'=>'80','57.5'=>'80')
			),
		'3-5-2' => array(
				array('40.5'=>'0'),
				array('20'=>'26.6','45'=>'26.6','70'=>'26.6'),
				array('7.5'=>'53.4','26.25'=>'53.4','45'=>'53.4','63.75'=>'53.4','82.5'=>'53.4'),
				array('32.5'=>'80','57.5'=>'80')
			),
		'4-5-1' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','32.5'=>'26.6','57.5'=>'26.6','82.5'=>'26.6'),
				array('7.5'=>'53.4','26.25'=>'53.4','45'=>'53.4','63.75'=>'53.4','82.5'=>'53.4'),
				array('45'=>'80')
			),
		'4-3-3' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','32.5'=>'26.6','57.5'=>'26.6','82.5'=>'26.6'),
				array('20'=>'53.4','45'=>'53.4','70'=>'53.4'),
				array('20'=>'80','45'=>'80','70'=>'80')
			),
		'3-4-3' => array(
				array('40.5'=>'0'),
				array('20'=>'26.6','45'=>'26.6','70'=>'26.6'),
				array('7.5'=>'53.4','32.5'=>'53.4','57.5'=>'53.4','82.5'=>'53.4'),
				array('20'=>'80','45'=>'80','70'=>'80')
			),
		'5-4-1' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','26.25'=>'26.6','45'=>'26.6','63.75'=>'26.6','82.5'=>'26.6'),
				array('7.5'=>'53.4','32.5'=>'53.4','57.5'=>'53.4','82.5'=>'53.4'),
				array('45'=>'80')
			),
		'5-3-2' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','26.25'=>'26.6','45'=>'26.6','63.75'=>'26.6','82.5'=>'26.6'),
				array('20'=>'53.4','45'=>'53.4','70'=>'53.4'),
				array('32.5'=>'80','57.5'=>'80')
			),
		'4-2-3-1' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','32.5'=>'26.6','57.5'=>'26.6','82.5'=>'26.6'),
				array('26.25'=>'45','63.75'=>'45'),
				array('7.5'=>'65','45'=>'65','82.5'=>'65'),
				array('45'=>'80')
			),
		'4-3-2-1' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','32.5'=>'26.6','57.5'=>'26.6','82.5'=>'26.6'),
				array('20'=>'45','45'=>'45','70'=>'45'),
				array('7.5'=>'65','82.5'=>'65'),
				array('45'=>'80')
			),
		'4-3-1-2' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','32.5'=>'26.6','57.5'=>'26.6','82.5'=>'26.6'),
				array('20'=>'45','45'=>'45','70'=>'45'),
				array('45'=>'65'),
				array('32.5'=>'80','57.5'=>'80')
			),
		'3-4-1-2' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','32.5'=>'26.6','57.5'=>'26.6','82.5'=>'26.6'),
				array('7.5'=>'45','32.5'=>'45','57.5'=>'45','82.5'=>'45'),
				array('45'=>'65'),
				array('32.5'=>'80','57.5'=>'80')
			),
		'3-4-2-1' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','32.5'=>'26.6','57.5'=>'26.6','82.5'=>'26.6'),
				array('7.5'=>'45','32.5'=>'45','57.5'=>'45','82.5'=>'45'),
				array('26.25'=>'65','63.75'=>'65'),
				array('45'=>'80')
			),
	);
	
	/*
	 * This functions output the html structure for the choosed formation
	 */
	public function get_html($schema = '4-4-2',$array_names = array(), $background_id='14') {
		
		$image_name = "/wp-content/plugins/formazioneposts/images/football_pitch_".$background_id.".png";
		$style_field='background-image: url("' . $image_name . '")';
		$html = '<div class="dc-ff-football-formation" style="'.$style_field.'">';
		print_r($array_names);
		if(empty($schema) || !isset($this->structures[$schema]))
			return false;
		$incremental = 0;
		//var_dump("NUMERO1");
		foreach($this->structures[$schema] as $formation => $locations) {
			//var_dump("NUMERO2");
			//if(!isset($array_names[$incremental]))
				//continue;
			var_dump($array_names[0]["number"]);
			foreach($locations as $top => $left) {
				$html .= '
					<div class="dc-ff-player" style="top: '.$top.'%; left: '.$left.'%;">
						<div class="dc-ff-player-number">'.$array_names["number"].'</div>
						<div class="dc-ff-player-name">'.$array_names["name"].'</div>
					</div>
				';
			}
			
			$incremental++;
		}//var_dump("NUMERO4");
		$html .= '</div>';
		//var_dump("INIZIO".$html."FINE");
		return $html;
	}
}

?>
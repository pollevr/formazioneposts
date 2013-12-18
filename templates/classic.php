<?php
/*
 * Standard template for this plugin
 * 
 */

class formation_structural {
	public $structures = array(
		'1-4-4-2' => array(
				array('40.5'=>'0'),
				array('7.5'=>'26.6','37.5'=>'26.6','57.5'=>'26.6','82.5'=>'26.6'),
				array('7.5'=>'53.4','37.5'=>'53.4','57.5'=>'53.4','82.5'=>'53.4'),
				array('32.5'=>'80','57.5'=>'80')
			),
		'3-5-2' => array(
				array('20'=>'26.6','45'=>'26.6','70'=>'26.6'),
				array(''=>'',''=>'',''=>'',''=>'',''=>''),
				array(''=>'',''=>'')
			),
		'4-5-1' => array(
				array(''=>'',''=>'',''=>''),
				array(''=>'',''=>'',''=>'',''=>'',''=>''),
				array(''=>'',''=>'')
			),
		'4-3-3' => array(
				array(''=>'',''=>'',''=>''),
				array(''=>'',''=>'',''=>'',''=>'',''=>''),
				array(''=>'',''=>'')
			),
		'3-4-3' => array(
				array(''=>'',''=>'',''=>''),
				array(''=>'',''=>'',''=>'',''=>'',''=>''),
				array(''=>'',''=>'')
			),
		'5-4-1' => array(
				array(''=>'',''=>'',''=>''),
				array(''=>'',''=>'',''=>'',''=>'',''=>''),
				array(''=>'',''=>'')
			),
		'5-3-2' => array(
				array(''=>'',''=>'',''=>''),
				array(''=>'',''=>'',''=>'',''=>'',''=>''),
				array(''=>'',''=>'')
			),
		'4-2-3-1' => array(
				array(''=>'',''=>'',''=>''),
				array(''=>'',''=>'',''=>'',''=>'',''=>''),
				array(''=>'',''=>'')
			),
		'4-3-2-1' => array(
				array(''=>'',''=>'',''=>''),
				array(''=>'',''=>'',''=>'',''=>'',''=>''),
				array(''=>'',''=>'')
			),
		'4-3-1-2' => array(
				array(''=>'',''=>'',''=>''),
				array(''=>'',''=>'',''=>'',''=>'',''=>''),
				array(''=>'',''=>'')
			),
	);
	
	/*
	 * This functions output the html structure for the choosed formation
	 */
	public function get_html($schema = '1-4-4-2',$array_names = array()) {
		$background_field = get_option( 'fp_background_field' );
		$image_name = plugins_url("backgrounds/football_pitch_".$fp_background_field.".png", __FILE__ );
		
		$html = '<div class="dc-ff-football-formation" style="background-image: url('.$style_field.');">';
		
		if(empty($schema) || !isset($this->structures[$schema]))
			return false;
		
		$incremental = 0
		
		foreach($this->structures[$schema] as $formation => $locations) {
			if(!isset($array_names[$incremental]))
				continue;
			
			foreach($locations as $top => $left) {
				$html .= '
					<div class="dc-ff-player" style="top: '.$top.'%; left: '.$left.'%;">
						<div class="dc-ff-player-number">'.$array_names[$incremental]["number"].'</div>
						<div class="dc-ff-player-name">'.$array_names[$incremental]["name"].'</div>
					</div>
				';
			}
			
			$incremental++;
		}
		
		$html .= '</div>';
		
		return $html;
	}
}

?>
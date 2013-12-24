<div class="wrap">
	<div id="icon-options-general" class="icon32"><br /></div>
	<h2>Configurazione di Formazione Posts</h2>
	<p>&nbsp;</p>
	
	<form method="post" action="options.php" id="fp_admin_options">
		<?php settings_fields('fp_options_group'); ?>
				
		<table class="form-table">
			<tbody>
				<tr valign="top">
				  <th scope="row"><label for="fp_background_field"><b>Campo di sfondo:</b></label></th>
				  <td>
						<input type="radio" name="fp_background_field" id="fp_background_field1" value="1" <?php checked( 1 == get_option( 'fp_background_field' ) ); ?> />
				    <?php echo '<img src="/wp-content/plugins/formazioneposts/images/football_pitch_1.png" width="10%"> ';?>
				  </td>
				</tr>
				<tr valign="top">
					<th scope="row"></th>
				  <td>
						<input type="radio" name="fp_background_field" id="fp_background_field2" value="2" <?php checked( 2 == get_option( 'fp_background_field' ) ); ?> />
				    <?php echo '<img src="' . plugins_url( 'images/football_pitch_2.png' , __FILE__ ) . '" width="10%"> ';?>
				  </td>
				</tr>
				<tr valign="top">
					<th scope="row"></th>
				  <td>
						<input type="radio" name="fp_background_field" id="fp_background_field3" value="3" <?php checked( 3 == get_option( 'fp_background_field' ) ); ?> />
				    <?php echo '<img src="' . plugins_url( 'images/football_pitch_3.png' , __FILE__ ) . '" width="10%"> ';?>
				  </td>
				</tr>
				<tr valign="top">
					<th scope="row"></th>
				  <td>
						<input type="radio" name="fp_background_field" id="fp_background_field4" value="4" <?php checked( 4 == get_option( 'fp_background_field' ) ); ?> />
				    <?php echo '<img src="' . plugins_url( 'images/football_pitch_4.png' , __FILE__ ) . '" width="10%"> ';?>
				  </td>
				</tr>
				<tr valign="top">
					<th scope="row"></th>
				  <td>
						<input type="radio" name="fp_background_field" id="fp_background_field5" value="5" <?php checked( 5 == get_option( 'fp_background_field' ) ); ?> />
				    <?php echo '<img src="' . plugins_url( 'images/football_pitch_5.png' , __FILE__ ) . '" width="10%"> ';?>
				  </td>
				</tr>
				<tr valign="top">
					<th scope="row"></th>
				  <td>
						<input type="radio" name="fp_background_field" id="fp_background_field11" value="11" <?php checked( 11 == get_option( 'fp_background_field' ) ); ?> />
				    <?php echo '<img src="/wp-content/plugins/formazioneposts/images/football_pitch_11.png" width="10%"> ';?>
				  </td>
				</tr>
				<tr valign="top">
					<th scope="row"></th>
				  <td>
						<input type="radio" name="fp_background_field" id="fp_background_field12" value="12" <?php checked( 12 == get_option( 'fp_background_field' ) ); ?> />
				    <?php echo '<img src="' . plugins_url( 'images/football_pitch_12.png' , __FILE__ ) . '" width="13%"> ';?>
				  </td>
				</tr>
				
				<tr valign="top">
					<th scope="row"></th>
					<td>
						<p>
							<input type="submit" class="button-primary" id="submit" name="submit" value="<?php _e('Save Changes') ?>" />
						</p>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>
<!-- Saskaitos -->

<ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li><a href="index.php?module=<?php echo $module; ?>&action=list">Saskaitos</a></li>
	<li><?php if(!empty($id)) echo "saskaitos redagavimas"; else echo "Nauja saksaita"; ?></li>
</ul>
<div class="float-clear"></div>
<div id="formContainer">
	<?php if($formErrors != null) { ?>
		<div class="errorBox">
			Neįvesti arba neteisingai įvesti šie laukai:
			<?php 
				echo $formErrors;
			?>
		</div>
	<?php } ?>
	<form action="" method="post">
		<fieldset>
			<legend>Saskaitos</legend>
			<p>
				<label class="field" for="id">id<?php echo in_array('id', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="id" name="id" class="textbox textbox-70" value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>">
				<?php if(key_exists('id', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['id']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="data">data<?php echo in_array('data', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="data" name="data" class="textbox textbox-150" value="<?php echo isset($data['data']) ? $data['data'] : ''; ?>">
				<?php if(key_exists('data', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['data']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="laikas">laikas<?php echo in_array('laikas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="laikas" name="laikas" class="textbox textbox-150" value="<?php echo isset($data['laikas']) ? $data['laikas'] : ''; ?>">
				<?php if(key_exists('laikas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['laikas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="suma">suma<?php echo in_array('suma', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="suma" name="suma" class="textbox textbox-150" value="<?php echo isset($data['suma']) ? $data['suma'] : ''; ?>">
				<?php if(key_exists('suma', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['suma']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="fk_STATYMAS">statymas<?php echo in_array('fk_STATYMAS', $required) ? '<span> *</span>' : ''; ?></label>
				<select id="fk_STATYMAS" name="fk_STATYMAS">
					<option value="-1">---------------</option>
					<?php
						$brands = $carsObj->getStatymai();
						foreach($brands as $key => $val) {
							$selected = "";
							if(isset($data['fk_STATYMAS']) && $data['fk_STATYMAS'] == $val['nr']) {
								$selected = " selected='selected'";
							}
							echo "<option{$selected} value='{$val['nr']}'>{$val['nr']}</option>";
						}
					?>
				</select>
			</p>
		</fieldset>
		<p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
		<p>
			<input type="submit" class="submit button" name="submit" value="Išsaugoti">
		</p>
		<?php if(isset($data['id'])) { ?>
			<input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
		<?php } ?>
	</form>
</div>
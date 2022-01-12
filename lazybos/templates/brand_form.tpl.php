<!-- Darbuotojai -->

<ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li><a href="index.php?module=<?php echo $module; ?>&action=list">Darbuotojai</a></li>
	<li><?php if(!empty($id)) echo "Darbuotojo redagavimas"; else echo "Naujas darbuotojas"; ?></li>
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
			<legend>Darbuotojo informacija</legend>
			<p>
				<label class="field" for="id">id<?php echo in_array('id', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="id" name="id" class="textbox textbox-150" value="<?php echo isset($data['id']) ? $data['id'] : ''; ?>">
				<?php if(key_exists('id', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['id']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="vardas">vardas<?php echo in_array('vardas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="vardas" name="vardas" class="textbox textbox-150" value="<?php echo isset($data['vardas']) ? $data['vardas'] : ''; ?>">
				<?php if(key_exists('vardas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['vardas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="name">pavarde<?php echo in_array('pavarde', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="pavarde" class="textbox textbox-150" value="<?php echo isset($data['pavarde']) ? $data['pavarde'] : ''; ?>">
				<?php if(key_exists('pavarde', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['pavarde']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="name">telefonas<?php echo in_array('telefonas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="telefonas" class="textbox textbox-150" value="<?php echo isset($data['telefonas']) ? $data['telefonas'] : ''; ?>">
				<?php if(key_exists('telefonas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['telefonas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="name">el pastas<?php echo in_array('e_pastas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="e_pastas" class="textbox textbox-150" value="<?php echo isset($data['e_pastas']) ? $data['e_pastas'] : ''; ?>">
				<?php if(key_exists('e_pastas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['e_pastas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="fk_LAZYBU_BENDROVE">Lazybu bendove<?php echo in_array('fk_LAZYBU_BENDROVE', $required) ? '<span> *</span>' : ''; ?></label>
				<select id="fk_LAZYBU_BENDROVE" name="fk_LAZYBU_BENDROVE">
					<option value="-1">---------------</option>
					<?php
						$brands = $brandsObj->getLazybuBendroves();
						foreach($brands as $key => $val) {
							$selected = "";
							if(isset($data['fk_LAZYBU_BENDROVE']) && $data['fk_LAZYBU_BENDROVE'] == $val['id_']) {
								$selected = " selected='selected'";
							}
							echo "<option{$selected} value='{$val['id_']}'>{$val['pavadinimas']}</option>";
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
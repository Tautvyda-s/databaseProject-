<!-- Klientai -->

<ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li><a href="index.php?module=<?php echo $module; ?>&action=list">Klientai</a></li>
	<li><?php if(!empty($asmens_kodas)) echo "Kliento redagavimas"; else echo "Naujas klientas"; ?></li>
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
			<legend>Kliento informacija</legend>
			<p>
				<label class="field" for="name">Asmens kodas<?php echo in_array('asmens_kodas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="asmens_kodas" class="textbox textbox-150" value="<?php echo isset($data['asmens_kodas']) ? $data['asmens_kodas'] : ''; ?>">
				<?php if(key_exists('asmens_kodas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['asmens_kodas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="name">vardas<?php echo in_array('vardas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="vardas" class="textbox textbox-150" value="<?php echo isset($data['vardas']) ? $data['vardas'] : ''; ?>">
				<?php if(key_exists('vardas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['vardas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="name">pavarde<?php echo in_array('pavarde', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="pavarde" class="textbox textbox-150" value="<?php echo isset($data['pavarde']) ? $data['pavarde'] : ''; ?>">
				<?php if(key_exists('pavarde', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['pavarde']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="name">lytis<?php echo in_array('lytis', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="lytis" class="textbox textbox-150" value="<?php echo isset($data['lytis']) ? $data['lytis'] : ''; ?>">
				<?php if(key_exists('lytis', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['lytis']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="name">gimimo_metai<?php echo in_array('gimimo_metai', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="gimimo_metai" class="textbox textbox-150" value="<?php echo isset($data['gimimo_metai']) ? $data['gimimo_metai'] : ''; ?>">
				<?php if(key_exists('gimimo_metai', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['gimimo_metai']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="name">adresas<?php echo in_array('adresas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="adresas" class="textbox textbox-150" value="<?php echo isset($data['adresas']) ? $data['adresas'] : ''; ?>">
				<?php if(key_exists('adresas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['adresas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="name">telefonas<?php echo in_array('telefonas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="telefonas" class="textbox textbox-150" value="<?php echo isset($data['telefonas']) ? $data['telefonas'] : ''; ?>">
				<?php if(key_exists('telefonas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['telefonas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="name">e_pastas<?php echo in_array('e_pastas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="name" name="e_pastas" class="textbox textbox-150" value="<?php echo isset($data['e_pastas']) ? $data['e_pastas'] : ''; ?>">
				<?php if(key_exists('e_pastas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['e_pastas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="brand">Darbuotojas<?php echo in_array('fk_DARBUOTOJAS', $required) ? '<span> *</span>' : ''; ?></label>
				<select id="brand" name="fk_DARBUOTOJAS">
					<option value="-1">Pasirinkite darbuotoja</option>
					<?php
						// išrenkame visas markes
						$brands = $modelsObj->getDarbuotojai();
						foreach($brands as $key => $val) {
							$selected = "";
							if(isset($data['fk_DARBUOTOJAS']) && $data['fk_DARBUOTOJAS'] == $val['id']) {
								$selected = " selected='selected'";
							}
							echo "<option{$selected} value='{$val['id']}'>{$val['vardas']} {$val['pavarde']}</option>";
						}
					?>
				</select>
			</p>
			
		</fieldset>
		<p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
		<p>
			<input type="submit" class="submit button" name="submit" value="Išsaugoti">
		</p>
		<?php if(isset($data['asmens_kodas'])) { ?>
			<input type="hidden" name="asmens_kodas" value="<?php echo $data['asmens_kodas']; ?>" />
		<?php } ?>
	</form>
</div>
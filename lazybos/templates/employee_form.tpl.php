<!-- Lazybu bendroves -->

<ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li><a href="index.php?module=<?php echo $module; ?>&action=list">Lazybu bendroves</a></li>
	<li><?php if(!empty($id_)) echo "Lazybu bendroviu redagavimas"; else echo "Nauja lazybu bendrove"; ?></li>
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
				<label class="field" for="pavadinimas">pavadinimas<?php echo in_array('pavadinimas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="pavadinimas" name="pavadinimas" class="textbox textbox-70" value="<?php echo isset($data['pavadinimas']) ? $data['pavadinimas'] : ''; ?>">
				<?php if(key_exists('pavadinimas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['pavadinimas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="miesto_filialas">miesto filialas<?php echo in_array('miesto_filialas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="miesto_filialas" name="miesto_filialas" class="textbox textbox-70" value="<?php echo isset($data['miesto_filialas']) ? $data['miesto_filialas'] : ''; ?>">
				<?php if(key_exists('miesto_filialas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['miesto_filialas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="adresas">adresas<?php echo in_array('adresas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="adresas" name="adresas" class="textbox textbox-70" value="<?php echo isset($data['adresas']) ? $data['adresas'] : ''; ?>">
				<?php if(key_exists('adresas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['adresas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="telefonas">telefonas<?php echo in_array('telefonas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="telefonas" name="telefonas" class="textbox textbox-70" value="<?php echo isset($data['telefonas']) ? $data['telefonas'] : ''; ?>">
				<?php if(key_exists('telefonas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['telefonas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="e_pastas">e pastas<?php echo in_array('e_pastas', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="e_pastas" name="e_pastas" class="textbox textbox-70" value="<?php echo isset($data['e_pastas']) ? $data['e_pastas'] : ''; ?>">
				<?php if(key_exists('e_pastas', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['e_pastas']} simb.)</span>"; ?>
			</p>
			<p>
				<label class="field" for="id_">id<?php echo in_array('id_', $required) ? '<span> *</span>' : ''; ?></label>
				<input type="text" id="id_" name="id_" class="textbox textbox-70" value="<?php echo isset($data['id_']) ? $data['id_'] : ''; ?>">
				<?php if(key_exists('id_', $maxLengths)) echo "<span class='max-len'>(iki {$maxLengths['id_']} simb.)</span>"; ?>
			</p>
		</fieldset>
		<p class="required-note">* pažymėtus laukus užpildyti privaloma</p>
		<p>
			<input type="submit" class="submit button" name="submit" value="Išsaugoti">
		</p>
	</form>
</div>
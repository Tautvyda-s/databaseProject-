<ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Klientai</li>
</ul>
<div id="actions">
	<a href='index.php?module=<?php echo $module; ?>&action=create'>Naujas klientas</a>
</div>
<div class="float-clear"></div>

<?php if(isset($_GET['remove_error'])) { ?>
	<div class="errorBox">
		Modelis nebuvo pašalintas. Pirmiausia pašalinkite to modelio automobilius.
	</div>
<?php } ?>

<table class="listTable">
	<tr>
		<th>Asmens kodas</th>
		<th>Vardas</th>
		<th>Pavarde</th>
		<th>Lytis</th>
		<th>Gimimo metai</th>
		<th>Adresas</th>
		<th>Telefonas</th>
		<th>El. pastas</th>
		<th></th>
	</tr>
	<?php
		// suformuojame lentelę
		foreach($data as $key => $val) {
			echo
				"<tr>"
					. "<td>{$val['asmens_kodas']}</td>"
					. "<td>{$val['vardas']}</td>"
					. "<td>{$val['pavarde']}</td>"
					. "<td>{$val['lytis']}</td>"
					. "<td>{$val['gimimo_metai']}</td>"					
					. "<td>{$val['adresas']}</td>"
					. "<td>{$val['telefonas']}</td>"
					. "<td>{$val['e_pastas']}</td>"

					. "<td>"
						. "<a href='#' onclick='showConfirmDialog(\"{$module}\", \"{$val['asmens_kodas']}\"); return false;' title=''>šalinti</a>&nbsp;"
						. "<a href='index.php?module={$module}&action=edit&id={$val['asmens_kodas']}' title=''>redaguoti</a>"
					. "</td>"
				. "</tr>";
		}
	?>
</table>

<?php
	// įtraukiame puslapių šabloną
	include 'templates/paging.tpl.php';
?>
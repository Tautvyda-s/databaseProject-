<ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Lazybu bendroves</li>
</ul>
<div id="actions">
	<a href='index.php?module=<?php echo $module; ?>&action=create'>Nauja lazybu bendrove</a>
</div>
<div class="float-clear"></div>

<?php if(isset($_GET['remove_error'])) { ?>
	<div class="errorBox">
		Klientas nebuvo pašalintas, nes turi užsakymą (-ų).
	</div>
<?php } ?>

<table class="listTable">
	<tr>
		<th>Pavadinimas</th>
		<th>Miesto filialas</th>
		<th>Adresas</th>
		<th>telefonas</th>
		<th>e pastas</th>
		<th>id</th>
		<th></th>
	</tr>
	<?php
		// suformuojame lentelę
		foreach($data as $key => $val) {
			echo
				"<tr>"
					. "<td>{$val['pavadinimas']}</td>"
					. "<td>{$val['miesto_filialas']}</td>"
					. "<td>{$val['adresas']}</td>"
					. "<td>{$val['telefonas']}</td>"
					. "<td>{$val['e_pastas']}</td>"
					. "<td>{$val['id_']}</td>"

					. "<td>"
						. "<a href='#' onclick='showConfirmDialog(\"{$module}\", \"{$val['id_']}\"); return false;' title=''>šalinti</a>&nbsp;"
						. "<a href='index.php?module={$module}&action=edit&id={$val['id_']}' title=''>redaguoti</a>"
					. "</td>"
				. "</tr>";
		}
	?>
</table>

<?php
	// įtraukiame puslapių šabloną
	include 'templates/paging.tpl.php';
?>
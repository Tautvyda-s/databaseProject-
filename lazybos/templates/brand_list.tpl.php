<ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Darbuotojai</li>
</ul>
<div id="actions">
	<a href='index.php?module=<?php echo $module; ?>&action=create'>Naujas darbuotojas</a>
</div>
<div class="float-clear"></div>

<?php if(isset($_GET['remove_error'])) { ?>
	<div class="errorBox">
		Darbuotojas nebuvo pašalinta. Pirmiausia pašalinkite .
	</div>
<?php } ?>

<table class="listTable">
	<tr>
		<th>id</th>
		<th>vardas</th>
		<th>pavarde</th>
		<th>telefonas</th>
		<th>e pastas</th>
		<th>lazybu bendorve</th>
		<th></th>
	</tr>
	<?php
		// suformuojame lentelę
		foreach($data as $key => $val) {
			echo
				"<tr>"
					. "<td>{$val['id']}</td>"
					. "<td>{$val['vardas']}</td>"
					. "<td>{$val['pavarde']}</td>"
					. "<td>{$val['telefonas']}</td>"
					. "<td>{$val['e_pastas']}</td>"
					. "<td>{$val['fk_LAZYBU_BENDROVE']}</td>"
					. "<td>"
						. "<a href='#' onclick='showConfirmDialog(\"{$module}\", \"{$val['id']}\"); return false;' title=''>šalinti</a>&nbsp;"
						. "<a href='index.php?module={$module}&action=edit&id={$val['id']}' title=''>redaguoti</a>"
					. "</td>"
				. "</tr>";
		}
	?>
</table>

<?php
	// įtraukiame puslapių šabloną
	include 'templates/paging.tpl.php';
?>
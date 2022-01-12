<ul id="pagePath">
	<li><a href="index.php">Pradžia</a></li>
	<li>Saskaitos</li>
</ul>
<div id="actions">
	<a href='index.php?module=<?php echo $module; ?>&action=create'>Nauja saskaita</a>
</div>
<div class="float-clear"></div>

<?php if(isset($_GET['remove_error'])) { ?>
	<div class="errorBox">
		Automobilis nebuvo pašalinta, nes yra įtrauktas į sutartį (-is).
	</div>
<?php } ?>

<table class="listTable">
	<tr>
		<th>id</th>
		<th>data</th>
		<th>laikas</th>
		<th>suma</th>
		<th>statymo id</th>
		<th></th>
	</tr>
	<?php
		// suformuojame lentelę
		foreach($data as $key => $val) {
			echo
				"<tr>"
					. "<td>{$val['id']}</td>"
					. "<td>{$val['data']}</td>"
					. "<td>{$val['laikas']}</td>"
					. "<td>{$val['suma']}</td>"
					. "<td>{$val['fk_STATYMAS']}</td>"
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
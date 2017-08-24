
<table>
<form name="simpan_barang"  action="<?php echo $action;?>" method="post">
	<tr>
		<td> nama barang : </td> <td><input type="text" name="nama_barang"> </td>
	</tr>
	<tr>
		<td> kode barang : </td> <td><input type="text" name="kode_barang"> </td>
	</tr>
	<tr>
		<td>
			Kategori : <td><select name="kategori">
				<option value="1">fur</option>
				<option value="2">komp</option>
				<option value="3">Others</option>
			</select></td>
		</td>
	</tr>
	<tr><td> <input type="submit" name="simpan" value="Simpan Data"> </td></tr>

</form>
</table>
<div class="container">

<?php

foreach ($hasil as $hasilx) {
	
if ($hasilx->kategori==1) { 
	echo "furniture";
	
}else{
	echo "aaa";
}

?>
}


</div>

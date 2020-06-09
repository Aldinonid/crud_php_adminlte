<?php

$id = $_GET["id"];

if (deleteStudent($id) > 0) {
	echo "
		<script>
			alert('Data has been deleted !');
			document.location.href = 'index.php?page=view_mhs';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data delete failed !');
			document.location.href = 'index.php?page=view_mhs';
		</script>
	";
}

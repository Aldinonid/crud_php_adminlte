<?php

$id = $_GET["id"];

if (deleteLecture($id) > 0) {
	echo "
		<script>
			alert('Data has been deleted !');
			document.location.href = 'index.php?page=view_dosen';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data delete failed !');
			document.location.href = 'index.php?page=view_dosen';
		</script>
	";
}

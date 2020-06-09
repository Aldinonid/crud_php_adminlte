<?php

$id = $_GET["id"];

if (deleteCourse($id) > 0) {
	echo "
		<script>
			alert('Data has been deleted !');
			document.location.href = 'index.php?page=view_matkul';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data delete failed !');
			document.location.href = 'index.php?page=view_matkul';
		</script>
	";
}

<?php 
require 'functions.php';

$id = $_GET["id"];

if( delete($id) > 0 ) {
	echo "
		<script>
			alert('Data has been deleted !');
			document.location.href = 'view_mhs.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data delete failed !');
			document.location.href = 'view_mhs.php';
		</script>
	";
}

?>
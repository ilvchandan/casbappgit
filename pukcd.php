<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = '';
  if(isset($_POST['lcns'])) $name = $_POST['lcns'];
  if(empty($name)) {
    echo 'Truck';
  } else {
	  $ch = array(
				"CASB Management",
				"NT",
				"Irix",
				"Linux"
			);
	  if(in_array(strtolower($name), array_map('strtolower', $ch))) {
		echo 'Hyva';
	  } else {
		echo 'Truck';
	  }
  }
} else {
  echo 'Truck';
}
?>
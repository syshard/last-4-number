
<?php
		$fullNumber = $_POST["code"];
		echo $fullNumber."<br>";
		$last4Digits = substr($fullNumber, 5);
		$prefixos = str_repeat('*',10);
		echo $prefixos.$last4Digits;
		// expected output: "************5581"


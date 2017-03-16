<?php
	function uzdevums1(){
		//IZVADA PHP VERSIJU
		echo "PHP versija ir: ";
		echo phpversion() . ".<br>";
	};

	function uzdevums2(){
		//Uzrakstīt php skriptu, kas izvada tekstu uz ekrāna.
		echo "Izvadam tekstu uz ekrana!";
	};

	function uzdevums3(){
		//Uzrakstīt php skriptu, kas saskaita divus skaitļus un uz ekrāna izvada to rezultātu.

		$a = 2;
		$b = 3;
		$c = $a + $b;

		echo "Rezultats: $c";
	};

	function uzdevums4(){
		//Uzrakstīt php skriptu, kas nosaka virknes garumu.
		echo "Virknes garums ir: ";
		echo strlen("Hello World, I dont like PHP");
	};

	function uzdevums5(){
		//Dots teikums: „Es mācos programmēt PHP valodā.” Uzrakstīt php skriptu, kas
		//nosaka, kurā pozīcijā atrodas mazais un lielais "p" burts.
		echo "Mazais p atrodas: ";
		echo strpos("Es mācos programmēt PHP valodā.", "p");
		echo "<br>Lielais P atrodas: ";
		echo strpos("Es mācos programmēt PHP valodā.", "P");
	};

	function uzdevums6(){
		//. Uzrakstīt php skriptu, kas izvada šādu noformatētu tekstu: 
		//„PHP ir php skriptu valoda ar kuras palīdzību tiek veidoti MySql vaicājumi”.

		echo("<b>PHP ir php</b> <i>skriptu valoda ar kuras</i> <u>palīdzību tiek veidoti</u> <b>MySql vaicājumi</b>");
	};

	function uzdevums7(){
		//Uzrakstīt php skriptu, kas izvada skaitļus
		//no 1 līdz 100 rindā izmantojot gan while, gan for ciklus.

		//FOR LOOP VIRKNE
		echo "<b>FOR LOOP VIRKNE<br></b>";
		for ($i = 0; $i <= 100; $i++) { 
			echo "$i,";
			if ($i == 20) {
				echo "<br>";
			}elseif ($i == 40) {
				echo "<br>";
			}elseif ($i == 60) {
				echo "<br>";			
			}elseif ($i == 80) {
				echo "<br>";
			}
		}
		echo "<br>";
		//WHILE LOOP VIRKNE
		echo '<b>WHILE LOOP VIRKNE<br></b>';
		$cipari = 0;
		while ( $cipari <= 100) {
			$cipari++;
			echo "$cipari,";
			if ($cipari == 100) {
				break;
			}elseif ($cipari == 20) {
				echo "<br>";
			}elseif ($cipari == 40) {
				echo "<br>";
			}elseif ($cipari == 60) {
				echo "<br>";
			}elseif ($cipari == 80) {
				echo "<br>";
			}
		}
	};

	function uzdevums8(){
		//Uzrakstīt php skriptu, kas izvada skaitļus no 1 līdz 10 kollonā 
		//gan while, gan for ciklus.

		//FOR LOOP CIKLS
		echo "<b>FOR LOOP CIKLS<br></b>";
		for ($i = 0; $i <= 10; $i++) { 
			echo "$i </br>"; 
		}

		//WHILE LOOP CIKLS
		echo "<b>WHILE LOOP CIKLS<br></b>";
		$cipari = 0;
		while ( $cipari <= 10) {
			$cipari++;
			echo "$cipari </br>";
			if ($cipari == 10) {
				break;
			}
		}
	};

	function uzdevums9(){
		//Uzrakstīt php skriptu, kas atspoguļo switch darbības principu gan skaitļiem, 
		//gan tekstam.

		//SWITCH AR TEKSTU
		echo "<b>SWITCH AR TEKSTU<br></b>";
		$teksts = "Labdien";

		switch ($teksts) {
		    case "Labvakar":
		        echo "Labvakar";
		        break;
		    case "Labdien":
		        echo "Labdien";
		        break;
		    case "Ata":
		        echo "Ata";
		        break;
		    default:
		        echo "Es ar Jums negribu sveicinaties!";
		}
		echo "<br>";

		//SWITCH AR CIPARIEM
		echo "<b>SWITCH AR CIPARIEM<br></b>";
		$skaitlis = "2";

		switch ($skaitlis) {
		    case "1":
		        echo "2*1=2";
		        break;
		    case "2":
		        echo "2*3=6";
		        break;
		    case "3":
		        echo "4*3=12";
		        break;
		    default:
		        echo "2017";
		}
	};

	function uzdevums10(){
		//Uzrakstīt php skriptu, kas atspoguļo if..., elseif...., else konstrukciju.

		$cipars = 0;

		if ($cipars > 50) {
			echo "Cipars ir lielaks par 50";
		}elseif ($cipars == 20) {
			echo "Cipars ir mazaks par 20";
		}else{
			echo "Cipars ir nulle";
		}
	};

	function uzdevums11(){
		//Uzrakstīt php skriptu, kas uz ekrāna izvada alfabētu.

		foreach (range('A', 'Z') as $char) {
	    	echo "$char," . "\n";
		}
	};

	function uzdevums12(){
		//Uzrakstīt php skriptu, kas izvada uz ekrāna izvada ASCII tabulas simbolus un to 
		//kodus sākot no 127. līdz 64. Piemēram, 127 = •, 26 = ~, 125 = } u.c.

		for ($chr = 127; $chr >= 64; $chr--) {
	    	echo "$chr" . " = ";
	    	echo chr($chr) . ", ";

	    	if ($chr == 97) {
	    		echo "<br>";
	    	}
		}
	};
?>
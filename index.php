<?php 
	include 'funkcijas.php';
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="main.css">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="hover.js"></script>

</head>
<body>
<div class="container">
	<div class="table-responsive"> 
	  <table class="table table-hover">
	    <thead>
	    	<tr>
	    		<th>Uzdevums</th>
	    		<th>Atbilde</th>
	    	</tr>
	    </thead>
	    <tbody>
	    	<tr>
	    		<td class="numurs">Pirmais</td>
	    		<td>
	    			<?php 
						uzdevums1();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Otrais</td>
	    		<td>
	    			<?php 
						uzdevums2();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Trešais</td>
	    		<td>
	    			<?php 
						uzdevums3();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Ceturtais</td>
	    		<td>
	    			<?php 
						uzdevums4();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Piektais</td>
	    		<td>
	    			<?php 
						uzdevums5();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Sestais</td>
	    		<td>
	    			<?php 
						uzdevums6();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Septītais</td>
	    		<td>
	    			<?php 
						uzdevums7();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Astotais</td>
	    		<td>
	    			<?php 
						uzdevums8();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Devītais</td>
	    		<td>
	    			<?php 
						uzdevums9();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Desmitais</td>
	    		<td>
	    			<?php 
						uzdevums10();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Vienpadsmitais</td>
	    		<td>
	    			<?php 
						uzdevums11();
					?>
	    		</td>
	    	</tr>
	    	<tr>
	    		<td class="numurs">Divpadsmitais</td>
	    		<td>
	    			<?php 
						uzdevums12();
					?>
	    		</td>
	    	</tr>
	    </tbody>
	  </table>
	</div>
</div>
</body>
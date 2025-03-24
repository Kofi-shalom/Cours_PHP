 <?php

	include_once __DIR__ .'/controller/config.php';

	# inclusion de la configuration /* */

	include_once __DIR__ .'/partial/head.inc.php';

	#head 


   ?>


<body>
	
   <?php 

	include_once __DIR__ .'/partial/header.inc.php';

	#header

     ?>
<main>

	<?php
	include_once __DIR__ .'/partial/main.inc.php';

	#main

	?>

</main>

   <?php 

	include_once __DIR__.'/partial/footer.inc.php';

    ?>
	


	<!-- footer -->
 	<pre>
	<?php
	print_r($_SERVER)
	?>
	</pre>
	
	
	<!--cours https://hackmd.io/iNktz6XzRyu7gGmKvPpXfQ?view-->
</html>

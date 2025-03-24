<?php

	include_once __DIR__ .'/controller/config.php';

	# inclusion de la configuration /* */

	include_once __DIR__ .'/partial/head.inc.php';
?>




<!-- head -->
<body>
	<!--cours https://hackmd.io/iNktz6XzRyu7gGmKvPpXfQ?view-->
	<header>
		<h1>
			🚀 
			<?php print title." ".$version ?>
		</h1>
	</header>

	<!-- header -->

	<main>
        <figure>
            <img src="./asset/cover.svg" alt="cover php">
            <figcaption>
                <h2>
                    PHP version 8 <?= $version ?>
                </h2>
            </figcaption>
        </figure>
		<section>
			<h2>Nous sommes le : 10-01-2021</h2>
			<p>
				Votre navigateur est : Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:84.0) Gecko/20100101 Firefox/84.0<br>
				Votre adress IP est le :127.0.0.1
				<br>Signature serveur
				
			</p>
			<address>Apache/2.4.46 (Win64) OpenSSL/1.1.1g PHP/7.2.34 Server at localhost Port 80</address>
		</section>
	</main>
	<!-- main -->
	<!-- <pre>
	</pre> -->
	<footer>
		<p>&copy; - MIT - <time datetime="<?= $date->format('Y-m-d') ?>">
			<?= $date->format('Y') ?>
		</time>
	</p>
	</footer>
	
</html>

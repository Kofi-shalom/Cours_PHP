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
			<h2>Nous sommes le : <?=$date->format('d/m/Y') ?></h2>
			<p>
				Votre navigateur est : <?= $navigator ?><br>
				Votre adress IP est le : <?= $remote ?>
				<br>Signature serveur
				
			</p>
			<?= $signature ?>
		</section>
	</main>
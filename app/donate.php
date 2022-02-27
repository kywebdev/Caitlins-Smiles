<!doctype html>
<html lang="en">
    <head>
        <title>Donate | Caitlin's Smiles</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="donate">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
		<main>
			<section class="intro">
				<div class="container">
					<h1>Donate</h1>
				</div>
			</section>
			<section>
				<div class="container">
					<h2 class="text-center">Donate supplies, donate some money</h2>
					<div class="donate-button-callouts">
						<a href="donate-supplies.php" class="donate-button-callout">
							<div class="donate-button-callout__img">
								<img src="img/donate-supplies.jpg" alt="" />
							</div>
							<div class="donate-button-callout__overlay"></div>
							<div class="donate-button-callout__text">
								<span>Donate supplies</span>
								<button class="orange-btn">Learn More</button>
							</div>
						</a>
						<a href="donate-money.php" class="donate-button-callout">
							<div class="donate-button-callout__img">
								<img src="img/donate-money.jpg" alt="" />
							</div>
							<div class="donate-button-callout__overlay"></div>
							<div class="donate-button-callout__text">
								<span>Donate some money</span>
								<button class="orange-btn">Learn More</button>
							</div>
						</a>
					</div>
				</div>
			</section>
		</main>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>
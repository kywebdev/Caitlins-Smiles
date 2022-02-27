<!doctype html>
<html lang="en">
    <head>
        <title>Fundraising | Caitlin's Smiles</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="volunteer">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
		<section class="hero">
			<div class="hero__img">
				<picture>
					<source srcset="img/fundraising-hero-mobile.jpg" media="(max-width: 700px)">
					<img src="img/fundraising-hero-desktop.jpg" alt="" />
				</picture>
			</div>
			<div class="hero__overlay"></div>
			<div class="hero__text">
				<h1>Fundraising</h1>
			</div>
		</section>
		<main>
			<section class="volunteer-content">
				<div class="container">
					<a href="volunteer.php" class="orange-btn back-btn">Back</a>
					<h2>Raise the smiles and fuel the joy.</h2>
					<p>We have several fundraisers throughout the year — some large, some small. We need people to plan, lead, assist or simply help with these events.</p>
					<div class="text-center btn-container">
						<a href="volunteer-signup.php" class="orange-btn">Become a Volunteer</a>
					</div>
				</div>
			</section>
		</main>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>
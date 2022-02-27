<!doctype html>
<html lang="en">
    <head>
        <title>Events | Caitlin's Smiles</title>
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
					<source srcset="img/events-hero-mobile.jpg" media="(max-width: 700px)">
					<img src="img/events-hero-desktop.jpg" alt="" />
				</picture>
			</div>
			<div class="hero__overlay"></div>
			<div class="hero__text">
				<h1>Events</h1>
			</div>
		</section>
		<main>
			<section class="volunteer-content">
				<div class="container">
					<a href="volunteer.php" class="orange-btn back-btn">Back</a>
					<h2>Host a Caitlin's Smiles event.</h2>
					<p>We sometimes need people to assist with various events throughout the year, such as staffing an information table or setting up for an event. If you have volunteered making craft kits and would like to do more, you might like to help with events.</p>
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
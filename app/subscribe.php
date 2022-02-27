<!doctype html>
<html lang="en">
    <head>
        <title>Subscribe | Caitlin's Smiles</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body>
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
		<main>
			<section class="intro">
				<div class="container">
					<h1 class="orange-title">Subscribe</h1>
				</div>
			</section>
			<section>
				<div class="container">
					<h2>Sign up and get involved.</h2>
					<p>Caitlin’s Smiles provides children in hospitals with arts and crafts activities in the forms of “Bags of Smiles”, individual arts and crafts kits, homemade cards and treasure and treat kits. These kits help us put smiles on the faces of children facing chronic or life-threatening illnesses by encouraging them to focus upon creative arts activities to boost their self-confidence and self-worth. We would not be able to that without the support and help from our wonderful volunteers.</p>
					<p>By entering your email address into the box below, you will be subscribing to our quarterly newsletter you can find out how you can help out from home by assembling cards, craft kits and “Bags of Smiles” on your own. You'll periodically receive information about programs and events. We absolutely do not share this information and it is used only for Caitlins Smiles related events and programs.</p>
					<div class="form form-sm mb-30">
						<form>
							<div>
								<label for="fname" class="sr-only">First name</label>
								<input type="text" id="fname" placeholder="First name" />
							</div>
							<div>
								<label for="lname" class="sr-only">Last name</label>
								<input type="text" id="lname" placeholder="Last name" />
							</div>
							<div>
								<label for="email" class="sr-only">Email address</label>
								<input type="email" id="email" placeholder="Email address" />
							</div>
							<div class="text-center">
								<input type="reset" id="clear" value="Clear form" />
							</div>
							<div class="text-center">
								<input type="submit" id="submit" value="Sign me up!" />
							</div>
						</form>
					</div>
				</div>
			</section>
		</main>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>
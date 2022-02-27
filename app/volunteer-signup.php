<!doctype html>
<html lang="en">
    <head>
        <title>Volunteer Sign-up | Caitlin's Smiles</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="volunteer">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
		<main>
			<section class="intro">
				<div class="container">
					<h1 class="orange-title">I Want to Volunteer!</h1>
				</div>
			</section>
			<section>
				<div class="container">
					<h2>We are so excited to have you!</h2>
					<p>Complete the application below and hit submit when completed. We will contact you with the next steps! Welcome to Caitlin's Smiles.</p>
					<div class="form volunteer-form mb-30">
						<h2>Volunteer Application</h2>
						<form action="volunteer-signup-thankyou.php#thankyou">
							<div>
								<label for="name" class="sr-only">Your name</label>
								<input type="text" id="name" placeholder="Your name" />
							</div>
							<div>
								<label for="addr" class="sr-only">Address</label>
								<input type="text" id="addr" placeholder="Address" />
							</div>
							<div>
								<label for="city" class="sr-only">City</label>
								<input type="text" id="city" placeholder="City" />
							</div>
							<div class="half">
								<label for="state" class="sr-only">State</label>
								<select id="state">
									<option disabled selected>State</option>
									<option>Pennsylvania</option>
									<option>New York</option>
									<option>Maryland</option>
									<option>Delaware</option>
								</select>
							</div>
							<div class="half">
								<label for="zip" class="sr-only">Zip code</label>
								<input type="text" id="zip" placeholder="Zip code" />
							</div>
							<div>
								<label for="phone" class="sr-only">Phone number</label>
								<input type="tel" id="phone" placeholder="Phone number" />
							</div>
							<div>
								<label for="email" class="sr-only">Email address</label>
								<input type="email" id="email" placeholder="Email address" />
							</div>
							<div class="radio-group">
								<span>Preferred contact method:</span>
								<div class="radio-button">
									<input type="radio" id="phone-check" name="method" />
									<label for="phone-check">Phone</label>
								</div>
								<div class="radio-button">
									<input type="radio" id="email-check" name="method" />
									<label for="email-check">Email</label>
								</div>
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
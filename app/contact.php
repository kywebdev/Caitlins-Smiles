<!doctype html>
<html lang="en">
    <head>
        <title>Contact Us | Caitlin's Smiles</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="contact">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
		<main>
			<section class="intro">
				<div class="container">
					<h1>Contact Us</h1>
				</div>
			</section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 contact-info">
							<p>We'd love to hear from you!</p>
							<h2>Email:</h2>
							<p>Cheryl Hornung: <strong><a href="mailto:caitlinssmiles@comcast.net">caitlinssmiles@comcast.net</a></strong></p>
							<h2>Address & Phone</h2>
							<p>3303 N. 6th St<br />
							Harrisburg, PA 17110<br />
							(717) 412-4759</p>
						</div>
						<div class="col-md-6">
							<div class="office-hours">
								<h2>Office Hours</h2>
								<span class="days">Monday - Thursday</span>
								<span class="hours">9am-5pm</span>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="container">
					<div class="form contact-form">
						<h2>Send us a message</h2>
						<form>
							<div>
								<label for="name" class="sr-only">Your name</label>
								<input type="text" id="name" placeholder="Your name" />
							</div>
							<div>
								<label for="email" class="sr-only">Email address</label>
								<input type="email" id="email" placeholder="Email address" />
							</div>
							<div>
								<label for="phone" class="sr-only">Phone number</label>
								<input type="tel" id="phone" placeholder="Phone number" />
							</div>
							<div>
								<label for="subject" class="sr-only">Subject</label>
								<select id="subject">
									<option disabled selected>Subject</option>
									<option>Volunteer</option>
									<option>Event related</option>
									<option>Donation related</option>
									<option>Other</option>
								</select>
							</div>
							<div>
								<label for="message" class="sr-only">Type your message here...</label>
								<textarea id="message" placeholder="Type your message here..."></textarea>
							</div>
							<div class="text-center">
								<input type="reset" id="clear" value="Clear form" />
							</div>
							<div class="text-center">
								<input type="submit" id="submit" value="Send" />
							</div>
						</form>
					</div>
				</div>
			</section>
			<section class="google-map">
				<div class="container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24343.27728387387!2d-76.91286206045767!3d40.29996477937887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c8c6b7cd00d3cb%3A0xe3835341162bff2c!2sCaitlin&#39;s%20Smiles!5e0!3m2!1sen!2sus!4v1617991998962!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</section>
			<section class="staff">
				<div class="container">
					<h2>Staff</h2>
					<div class="team-members">
						<div class="row">
							<div class="col-lg-4 col-md-6 team-member">
								<div class="team-member__img">
									<img src="img/headshot.png" alt="" />
								</div>
								<div class="team-member__info">
									<span class="team-member__info__first-name">Cheryl</span>
									<span class="team-member__info__last-name">Hornung</span>
									<span class="team-member__info__role">Founder & Director</span>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 team-member">
								<div class="team-member__img">
									<img src="img/headshot.png" alt="" />
								</div>
								<div class="team-member__info">
									<span class="team-member__info__first-name">Skip</span>
									<span class="team-member__info__last-name">Wachter</span>
									<span class="team-member__info__role">Volunteer Coordinator</span>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 team-member">
								<div class="team-member__img">
									<img src="img/headshot.png" alt="" />
								</div>
								<div class="team-member__info">
									<span class="team-member__info__first-name">Karen</span>
									<span class="team-member__info__last-name">Brucklacher</span>
									<span class="team-member__info__role">Events & Communication Coordinator</span>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 team-member">
								<div class="team-member__img">
									<img src="img/headshot.png" alt="" />
								</div>
								<div class="team-member__info">
									<span class="team-member__info__first-name">Kim</span>
									<span class="team-member__info__last-name">Fino</span>
									<span class="team-member__info__role">Office Manager</span>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 team-member">
								<div class="team-member__img">
									<img src="img/headshot.png" alt="" />
								</div>
								<div class="team-member__info">
									<span class="team-member__info__first-name">Kim</span>
									<span class="team-member__info__last-name">Mumper</span>
									<span class="team-member__info__role">Retired</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>
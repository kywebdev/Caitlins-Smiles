<!doctype html>
<html lang="en">
    <head>
        <title>News | Caitlin's Smiles</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="news">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
		<main>
			<section class="intro">
				<div class="container">
					<h1>News</h1>
					<p class="text-center">The latest news on Caitlin's Smiles.</p>
				</div>
			</section>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-lg-8 news-articles">
							<article>
								<div class="article-img-mobile text-center">
									<img src="img/volunteer-hands-mobile.png" alt="" />
								</div>
								<div class="article-header">
									<div class="article-info">
										<div class="article-info-top">
											<span class="article-date d-none d-sm-block">June 12, 2020</span>
											<span class="article-date d-sm-none">06.12.20</span>
											<span class="article-category volunteer"><a href="">Volunteer Work</a></span>
										</div>
										<div class="article-title">
											<h2><a href="news-details.php">Elizabethtown college volunteer night</a></h2>
										</div>
									</div>
									<div class="article-img text-right">
										<img src="img/volunteer-hands-desktop.png" alt="" />
									</div>
								</div>
								<div class="article-footer">
									<div class="article-snippet">
										<p>Caitlin’s Smiles returns to Elizabethtown College on Monday, November 12, from 6 to 8 pm, for an evening of making smiles.</p>
									</div>
									<div class="see-more">
										<a href="news-details.php"></a>
									</div>
								</div>
							</article>
							<article>
								<div class="article-img-mobile text-center">
									<img src="img/the-burg-mobile.png" alt="" />
								</div>
								<div class="article-header">
									<div class="article-info">
										<div class="article-info-top">
											<span class="article-date d-none d-sm-block">July 18, 2020</span>
											<span class="article-date d-sm-none">07.18.20</span>
											<span class="article-category feature"><a href="">Feature Release</a></span>
										</div>
										<div class="article-title">
											<h2><a href="news-details.php">THE BURG: Caitlin's Smiles efforts</a></h2>
										</div>
									</div>
									<div class="article-img text-right">
										<img src="img/the-burg-desktop.png" alt="" />
									</div>
								</div>
								<div class="article-footer">
									<div class="article-snippet">
										<p>Check out how Caitlin’s Smiles efforts are impacting and comforting children in hospitals all over!</p>
									</div>
									<div class="see-more">
										<a href="news-details.php"></a>
									</div>
								</div>
							</article>
							<article>
								<div class="article-img-mobile text-center">
									<img src="img/night-of-smiles-mobile.png" alt="" />
								</div>
								<div class="article-header">
									<div class="article-info">
										<div class="article-info-top">
											<span class="article-date d-none d-sm-block">May 8, 2020</span>
											<span class="article-date d-sm-none">05.8.20</span>
											<span class="article-category updates"><a href="">Updates</a></span>
										</div>
										<div class="article-title">
											<h2><a href="news-details.php">Call for art and fine crafts</a></h2>
										</div>
									</div>
									<div class="article-img text-right">
										<img src="img/night-of-smiles-desktop.png" alt="" />
									</div>
								</div>
								<div class="article-footer">
									<div class="article-snippet">
										<p>Caitlin's Smiles is now accepting artwork and fine crafts for its “A Night of Smiles” Art Auction, to be held on October 6, 2018.</p>
									</div>
									<div class="see-more">
										<a href="news-details.php"></a>
									</div>
								</div>
							</article>
							<article>
								<div class="article-img-mobile text-center">
									<img src="img/art-in-the-park-mobile.png" alt="" />
								</div>
								<div class="article-header">
									<div class="article-info">
										<div class="article-info-top">
											<span class="article-date d-none d-sm-block">May 8, 2020</span>
											<span class="article-date d-sm-none">05.8.20</span>
											<span class="article-category volunteer"><a href="">Volunteer Work</a></span>
										</div>
										<div class="article-title">
											<h2><a href="news-details.php">Art in the park</a></h2>
										</div>
									</div>
									<div class="article-img text-right">
										<img src="img/art-in-the-park-desktop.png" alt="" />
									</div>
								</div>
								<div class="article-footer">
									<div class="article-snippet">
										<p>The Harrisburg Senators are looking for local artists of all ages to display their art work at the Senator’s game on May 26th for their first ever 'Art in the Park' event! Artwork will be displayed around the ballpark that day for fans.</p>
									</div>
									<div class="see-more">
										<a href="news-details.php"></a>
									</div>
								</div>
							</article>
							<div class="load-more">
								<button class="orange-btn">Load More</button>
							</div>
						</div>
						<div class="col-lg-4 news-search-sidebar">
							<div class="searchbar">
								<form action="news-search.php">
									<label for="search" class="sr-only">Search here</label>
									<input type="search" id="search" placeholder="Search here" />
									<button type="submit" id="submit"><span class="fas fa-search"></span></button>
								</form>
							</div>
							<div class="text-center">
								<a href="gallery.php" class="photo-gallery-btn"><span>View</span> Photo Gallery</a>
							</div>
							<div class="categories">
								<h3>Categories</h3>
								<ul class="category-links">
									<li>
										<a href="" class="volunteer">Volunteer Work</a>
									</li>
									<li>
										<a href="" class="feature">Feature Release</a>
									</li>
									<li>
										<a href="" class="updates">Updates</a>	
									</li>
								</ul>
							</div>
							<div class="mailing-list">
								<img src="img/volunteer-module.jpg" alt="" />
								<div class="overlay">
									<div>
										<p>Join Our <span>Mailing List</span></p>
										<a href="subscribe.php" class="orange-btn btn-shadow">Subscribe</a>
									</div>
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
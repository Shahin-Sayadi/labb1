<?php get_header(); ?> <!-- laddar in header -->
<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<ul class="menu">
							<li class="current-menu-item">
								<a href="index.html">Hem</a>
							</li>
							<li>
								<a href="blogg.html">Blogg</a>
							</li>
							<li>
								<a href="undersida">Undersida</a>
							</li>
							<li>
								<a href="undersida2">Undersida 2</a>
							</li>
							<li>
								<a href="undersida3">Undersida 3</a>
							</li>
							<li>
								<a href="undersida4">Undersida 4</a>
							</li>
							<li>
								<a href="kontakt.html">Kontakt</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>


        <?php
        while(have_posts()) {
            the_post();
        ?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
                            <?php the_post_thumbnail();?> 
								<div class="text">
									<h1><?php the_title(); ?></h1>
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
        <?php    
        }
        ?>
        <?php get_footer(); ?> <!-- laddar in footer -->
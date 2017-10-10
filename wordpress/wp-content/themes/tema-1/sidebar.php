<!-- Sidebar -->
<div id="sidebar">
	<div class="inner">

		<!-- Search -->
			<section id="search" class="alt">
				<form method="post" action="#">
					<input type="text" name="query" id="query" placeholder="Search" />
				</form>
			</section>


		<!-- Menu -->
		<?php 
		$args = array(
			'menu'        => 'main-menu',          
			'container'   => 'nav',
			'container_id' => 'menu'
			//'items_wrap'   => '<span class="opener">texto</span><ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>'
		);
		wp_nav_menu( $args );
		?>

		<!-- Menu -->
		<!-- 	<nav id="menu">
				<header class="major">
					<h2>Menu</h2>
				</header>
				<ul>
					<li><a href="index.html">INICIO</a></li>
					<li><a href="generic.html">QUIENES SOMOS</a></li>
					<li><a href="elements.html">ARTICULOS</a></li>

						<li
						<span class="opener">Submenu</span>
						<ul>
							<li><a href="biblia.html">Biblia</a></li>
							<li><a href="moral.html">Moral</a></li>
							<li><a href="liturgia.html">Liturgia</a></li>
							<li><a href="sacramentos.html">Sacramentos</a></li>
						</ul>
					</li>
				</ul>
			</nav>

		-->
		<!-- Section -->
		<section>
			<header class="major">
				<h2>Contactos</h2>
			</header>
			<p>Somos un equipo de formación teológica, si tienes alguna consulta o una inquietud sobre la teología, no dudes en contactarnos</p>
			<ul class="contact">
				<li class="fa-envelope-o"> <!--<a href="#">-->comunidadteologia@gmail.com</a></li>
				<li class="fa-phone">(000) 000-0000</li>
				<li class="fa-home">Lima #345<br />
				Miraflores</li>
			</ul>
		</section>
		<?php get_footer(); ?>
	</div>
</div>

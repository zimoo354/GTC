<?php require_once 'header.php' ?>

<!-- SECTION DIVIDER -->

<section id="main-bp">
	<?php for ($i=1; $i < 7; $i++) echo "<img src='img/$i.jpg' class='slide'>"  ?>
	<div class="overlay"></div>
	<div class="row pad-und-xxs">
		<div class="s6 m3 col">
			<img src="img/logo-h.png">
		</div>
		<div class="s6 m9 col">
			<ul class="menu">
				<li><a href="app.php" class="button">Get Started</a></li>
				<li><a href="#" onclick="$('#contact').modal('open');">Contact</a></li>
				<li><a href="#" onclick="$('#about-us').modal('open');">About us</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="s12 col">
				<img src="img/slogan.png" class="slogan">
			</div>
			<div class="s12 col">
				<a href="app.php" class="button">Get Started</a>
			</div>
		</div>
	</div>
</section>

<div id="about-us" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4>About Us</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit libero non eum id natus saepe placeat suscipit voluptas tempora eveniet, nesciunt inventore dolore, quaerat error accusamus perferendis magni ex laudantium.</p>
		<img src="img/3.jpg">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae cumque voluptatum vel dignissimos deleniti similique vitae voluptatibus rerum, iure accusantium. Enim quia sequi optio incidunt eveniet rem hic similique quisquam.</p>
		<img src="img/clares.png" style="display: block; margin: 0 auto; max-width: 220px;">
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
	</div>
</div>

<div id="contact" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4>Contact Us</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		<form id="contact-form">
		<div class="input-field">
			<label>Name</label>
			<input type="text" name="name" class="validate" required>
		</div>
		<div class="input-field">
			<label>Mail</label>
			<input type="email" name="mail" class="validate" required>
		</div>
		<div class="input-field">
			<label>Message</label>
			<input type="text" name="msg" class="validate" required>
		</div>
		<a id="send-contact" class="waves-effect waves-light btn right"><i class="fa fa-send right"></i> Send</a>
		<input type="text" class="hide display-none">
		</form>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>
	</div>
</div>

<!-- SECTION DIVIDER -->

<?php require_once 'footer.php' ?>
<script src="script.js"></script>

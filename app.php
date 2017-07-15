<?php require_once 'header.php' ?>

<!-- SECTION DIVIDER -->
<section id="back-blue">
	<div class="container">
		<div class="s12 col">
			
		</div>
	</div>
</section>

	<section id="main-form" class="container pad-und-lg">

		<div  id="content" class="row display-none">


		</div>
		<div class="row">
			<div class="fixed-action-btn vertical">
				<a id="send-info" class="btn-floating btn-large blue">
				<i class="material-icons">send</i>
				</a>
				<ul>
				<li><a class="btn-floating blue" onclick="addCard()"><i class="material-icons">add</i></a></li>
				<li><a class="btn-floating blue" onclick="$('#tutorial').modal('open');"><i class="material-icons">help_outline</i></a></li>
				</ul>
			</div>
		</div>

	</section>

<!-- SECTION DIVIDER -->

<div id="tutorial" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4>How to use GTC?</h4>
		<p>The first step to start using GTC is to know some of the 14 possible values that have to be sent to the server so that through certain predefined calculations, we can obtain the expected values.</p>
		<img src="img/tut1.jpg">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae cumque voluptatum vel dignissimos deleniti similique vitae voluptatibus rerum, iure accusantium. Enim quia sequi optio incidunt eveniet rem hic similique quisquam.</p>
		<img src="img/clares.png" style="display: block; margin: 0 auto; max-width: 220px;">
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
	</div>
</div>

<?php require_once 'footer.php' ?>
<script src="script-app.js"></script>

<div class="row card pad-und-xs">
	<div class="s6 col">
		<h5>Bundle #<?php echo $_GET['c']; ?></h5>
	</div>
	<div class="s6 col">
		<a class="btn-floating btn-large waves-effect waves-light red right" onclick="removeCard(this)"><i class="material-icons">close</i></a>
	</div>
	<form id="bundle-<?php echo $_GET['c']; ?>" class="bundle">
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c1">atmosphere-p0</label>
				<input type="text" class="value" name="c1" id="c1" placeholder="100000">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c2">atmosphere-t0</label>
				<input type="text" class="value" name="c2" id="c2" placeholder="288">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c3">inlet-sigma</label>
				<input type="text" class="value" name="c3" id="c3" placeholder="0.98">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c4">comp-pi_c</label>
				<input type="text" class="value" name="c4" id="c4" placeholder="5">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c5">comp-eta_stag_p</label>
				<input type="text" class="value" name="c5" id="c5" placeholder="0.89">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c6">comb_chamber-eta_burn</label>
				<input type="text" class="value" name="c6" id="c6" placeholder="0.98">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c7">comb_chamber-Q_n</label>
				<input type="text" class="value" name="c7" id="c7" placeholder="43000000">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c8">comb_chamber-T_stag_out</label>
				<input type="text" class="value" name="c8" id="c8" placeholder="1600">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c9">turbine-eta_stag_p</label>
				<input type="text" class="value" name="c9" id="c9" placeholder="0.91">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c10">turbine-p_stag_out</label>
				<input type="text" class="value" name="c10" id="c10" placeholder="170000">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c11">load-power</label>
				<input type="text" class="value" name="c11" id="c11" placeholder="2300000">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c12">outlet-sigma</label>
				<input type="text" class="value" name="c12" id="c12" placeholder="0.99">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c13">regenerator-T_stag_hot_in</label>
				<input type="text" class="value" name="c13" id="c13" placeholder="1100">
			</div>
		</div>
		<div class="col s12 m6">
			<div class="input-group">
				<label for="c14">regenerator-T_stag_hot_out</label>
				<input type="text" class="value" name="c14" id="c14" placeholder="900">
			</div>
		</div>

	</form>
</div>
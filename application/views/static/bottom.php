<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="<?php echo base_url('assets') ?>/js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url('assets') ?>/js/common_scripts.min.js"></script>
	<script src="<?php echo base_url('assets') ?>/js/jquery.autocomplete.min.js"></script>
	<script src="<?php echo base_url('assets') ?>/js/jquery.mask.min.js"></script>
	<script src="<?php echo base_url('assets') ?>/js/functions.js"></script>
	<script src="<?php echo base_url('assets/js/pages/main.js') ?>"></script>


	<!-- SPECIFIC SCRIPTS -->
	<?php
		foreach($scripts AS $script) {
			echo '<script src="'.$script.'"></script>';
		}
	?>
<script src="<?php echo base_url('assets/js/pages/'.$jslib.'.js') ?>"></script>
</body>

</html>

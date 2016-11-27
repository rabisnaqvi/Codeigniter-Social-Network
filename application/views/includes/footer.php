<input type="hidden" id="cb_csrf_secured" value="<?= $this->security->get_csrf_hash() ?>">
<!--jQuery CDN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!--Bootstrap JS CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--Form Validator-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<!-- Ajax JS -->
<script src="<?= base_url('includes/js/ajax.js'); ?>"></script>
<!--Main Js file-->
<script src="<?= base_url('includes/js/main.js'); ?>"></script>
</body>

</html>
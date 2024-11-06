<?php include('header.php'); ?>
<body>
<section class="my-5 py-5">
<div class="container text-center mt-3 pt-5">
<h3 class="form-weight-bold">Descubra seu signo:</h3>
<hr class="mx-auto">
</div>
<div class="mx-auto container">
<form id="signo-form" method="POST" action="show_zodiac_sign.php">
<p style="color:red" class="text-center"><?php
if(isset($_GET['error'])){ echo $_GET['error']; }?></p>
<div class="form-group">
<label>Data de nascimento</label>
<input type="data" class="form-control"
id="inputDataNascimento" name="data_nascimento" placeholder="Ex.: 21/05/1992"
required/>
</div>
<div class="form-group">
<input type="submit" class="btn" id="signo-btn" name="signo_btn"
value="Descobrir"/>
</div>
</form>
</div>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
crossorigin="anonymous"></script>
</body>
</html>
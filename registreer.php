<!DOCTYPE html>
<html lang="en">
  <?php
	include "html/head.html";
  ?>

  <body>

 <?php
	include "html/nav.html";
  ?>

	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2">
				</div><!-- /col-lg-5 -->
				<div class="col-lg-4">
					<h1>Registreer</h1>
					<form class="form-inline" role="form">
					  <div class="form-group">
					    <input type="text" class="form-control" id="regNaam" placeholder="Enter your name">
						<input type="password" class="form-control" id="regWW1" placeholder="Enter your password">
						<input type="password" class="form-control" id="regWW2" placeholder="Confirm password">
						<input type="email" class="form-control" id="regEmail" placeholder="Enter your email address">
					  </div>
					  <button type="submit" class="btn btn-warning btn-lg">Registreer!</button>
					</form>					
				</div><!-- /col-lg-4 -->
				<div class="col-lg-5">
					<img class="img-responsive" src="assets/img/Schachtenboek.png" alt="">
				</div><!-- /col-lg-5 -->
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->
  <?php
	include "html/footer.html";
  ?>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

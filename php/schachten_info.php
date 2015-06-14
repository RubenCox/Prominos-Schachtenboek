
	<div id="headerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h1>Welkom </br>
					<?php
							echo	$_SESSION['username'];
					?>
					</h1>				
				</div><!-- /col-lg-4 -->
				<div class="col-lg-4">
					<img class="img-responsive boek" src="assets/img/Schachtenboek.png" alt="SchachtenBoek">
				</div><!-- /col-lg-4 -->
				<div class="col-lg-4">
					<h1>Make your landing page<br/>
					look really good.</h1>				
				</div><!-- /col-lg-4 -->
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /headerwrap -->
<div class="container">
	<div class="row">
		<div class="tab-content">
					<div class="tab-pane active col-lg-12 centered" id="daftar">
						<br/>
						<p><button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-plus"></span> Nieuwe Schacht</button></p>
						<br/>
						<div class="table-responsive">
							<table class="table table-hover">
									<thead>
										<tr>
											<th class="centered">Naam</th>
											<th class="centered">Leeftijd</th>
											<th class="centered">Studie</th>
											<th class="centered">Peter/Meter</th>
											<th class="centered">Aanwezigheid</th>
											<th class="centered">Opdrachten</th>
											<th class="centered">Straffen</th>
										</tr>
									</thead>
									<tbody>
									<?php
										require_once 'medoo.min.php';
										$database = new medoo();
										
										$datas = $database->select("Schachten", "*"
										);
										
										foreach($datas as $data)
											{
												
												echo 	"<tr>
															<td>".$data['Voornaam']." ".$data['Naam']."</td>
															<td>".$data['Leeftijd']."</td>
															<td>".$data['Studie']."</td>
															<td>".$data['Peter/Meter']."</td>
															<td>".$data['Aanwezigheid']."</td>
															<td>".$data['Opdrachten']."</td>
															<td>".$data['Straffen']."</td>
															<td>
																<a href=''><span class='glyphicon glyphicon-edit'></span> Edit</a>
															</td>
															<td>
																<a href=''><span class='glyphicon glyphicon-trash'></span> Delete</a>
															</td>
														</tr>";
											}
									
									
									?>
									</tbody>
							</table>
						</div>
						<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
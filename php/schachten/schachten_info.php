<div class="container tab">
	<div class="row">
		<div class="tab-content">
					<div class="tab-pane active col-lg-12 centered" id="daftar">
						<br/>
						<p>
							<a href="schacht_new_page.php">
								<button type="button" class="btn btn-primary btn-lg">
									<span class="glyphicon glyphicon-plus">
									</span> Nieuwe Schacht
								</button>
							</a>
						</p>
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
										require_once 'php/medoo.min.php';
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
																<a href='schacht_edit_page.php?id=".$data['SchachtID']."'><span class='glyphicon glyphicon-edit'></span> Edit</a>
															</td>
															<td>
																<a href='php/schachten/delete_schacht.php?id=".$data['SchachtID']."' onclick=\"return confirm('Wil je deze schacht verwijderen?');\"><span class='glyphicon glyphicon-trash'></span> Delete</a>
															</td>
														</tr>";
											}
									
									
									?>
									</tbody>
							</table>
						</div>
						<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">0</a></li>
							<li><a href="#">1</a></li>
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
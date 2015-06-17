<div class="container tab" >
	<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
				<h3>SCHACHTEN</h3>
				<hr/>
			</div>
	</div><!-- /row -->
	<script>
	var schachten, asc1 = 1,
            asc2 = 1,
            asc3 = 1,
			asc4 = 1,
			asc5 = 1,
			asc6 = 1,
			asc7 = 1;
       $( document ).ready(function () {
            schachten = document.getElementById("schachten");
			
			$('.menu-toggle').click(function(){
			$(this).removeClass("menu-toggle");
			$(".menu-toggle span").removeClass( "glyphicon-sort-by-alphabet-alt" );
			$(".menu-toggle span").removeClass( "glyphicon-sort-by-alphabet" );
			$(".menu-toggle span").addClass( "glyphicon-sort");
			
			$(this).find('span').removeClass("glyphicon-sort");
			
				if($(this).find('span').hasClass("glyphicon-sort-by-alphabet-alt") || $(this).find('span').hasClass("glyphicon-sort-by-alphabet")){
				$(this).find('span').toggleClass("glyphicon-sort-by-alphabet").toggleClass("glyphicon-sort-by-alphabet-alt");
				}
				else if($(this).find('span').hasClass("glyphicon-sort-by-order-alt") || $(this).find('span').hasClass("glyphicon-sort-by-order")){
					$(this).find('span').toggleClass("glyphicon-sort-by-order").toggleClass("glyphicon-sort-by-order-alt");
				}else if($(this).hasClass("table_number")){
					$(this).find('span').addClass("glyphicon-sort-by-order");
				}
				else{
					$(this).find('span').addClass("glyphicon-sort-by-alphabet");	
				}
			
			
			$("tr th").addClass("menu-toggle");
		});
        });
	</script>
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
							<a href="pdf/index.php" target="_blank">
								<button type="button" class="btn btn-success btn-lg">
									<span class="glyphicon glyphicon-download-alt">
									</span> Genereer PDF
								</button>
							</a>
						</p>
						<br/>
						<div class="table-responsive">
							<table class="table table-hover">
									<thead>
										<tr>
											<th class="centered table_schacht menu-toggle btn-primary" onclick="sort_schachten(schachten, 0, asc1); asc1 *= -1; asc2 = 1; asc3 = 1; asc4 = 1; asc5 = 1; asc6 = 1; asc7 = 1;">Naam<span class="glyphicon glyphicon-sort"></span></th>
											<th class="centered table_schacht menu-toggle table_number btn-primary" onclick="sort_schachten(schachten, 1, asc2); asc1 = 1; asc2 *= -1; asc3 = 1; asc4 = 1; asc5 = 1; asc6 = 1; asc7 = 1;">Leeftijd <span class="glyphicon glyphicon-sort"></span></th>
											<th class="centered table_schacht menu-toggle btn-primary" onclick="sort_schachten(schachten, 2, asc3); asc1 = 1; asc2 = 1; asc3 *= -1; asc4 = 1; asc5 = 1; asc6 = 1; asc7 = 1;">Studie <span class="glyphicon glyphicon-sort"></span></th>
											<th class="centered table_schacht menu-toggle btn-primary" onclick="sort_schachten(schachten, 3, asc4); asc1 = 1; asc2 = 1; asc3 = 1; asc4 *= -1; asc5 = 1; asc6 = 1; asc7 = 1;">Peter/Meter <span class="glyphicon glyphicon-sort"></span></th>
											<th class="centered table_schacht menu-toggle table_number btn-primary" onclick="sort_schachten(schachten, 4, asc5); asc1 = 1; asc2 = 1; asc3 = 1; asc4 = 1; asc5 *= -1; asc6 = 1; asc7 = 1;">Aanwezigheid <span class="glyphicon glyphicon-sort"></span></th>
											<th class="centered table_schacht menu-toggle table_number btn-primary" onclick="sort_schachten(schachten, 5, asc6); asc1 = 1; asc2 = 1; asc3 = 1; asc4 = 1; asc5 = 1; asc6 *= -1; asc7 = 1;">Opdrachten <span class="glyphicon glyphicon-sort"></span></th>
											<th class="centered table_schacht menu-toggle table_number btn-primary" onclick="sort_schachten(schachten, 6, asc7); asc1 = 1; asc2 = 1; asc3 = 1; asc4 = 1; asc5 = 1; asc6 = 1; asc7 *= -1;">Straffen <span class="glyphicon glyphicon-sort"></span></th>
										</tr>
									</thead>
									<tbody id="schachten">
									<?php
										require_once 'php/medoo.min.php';
										$database = new medoo();
										
										$datas = $database->select("Schachten", "*"
										);
										foreach($datas as $data)
											{
												$aanwezigheid = $data['Aanwezigheid_Andere'] + $data['Aanwezigheid_Prominos'];
												echo 	"<tr>
															<td>".$data['Voornaam']." ".$data['Naam']."</td>
															<td>".$data['Leeftijd']."</td>
															<td>".$data['Studie']."</td>
															<td>".$data['Peter/Meter']."</td>
															<td>".$aanwezigheid."</td>
															<td>".$data['Opdrachten']."</td>
															<td>".$data['Straffen']."</td>
															<td>
																<a class='gl_size' href='schacht_edit_page.php?id=".$data['SchachtID']."'><span class='glyphicon glyphicon-edit '></span><span class='hidden-xs'>Edit</span></a>
															</td>
															<td>
																<a href='php/schachten/delete_schacht.php?id=".$data['SchachtID']."' onclick=\"return confirm('Wil je deze schacht verwijderen?');\"><span class='glyphicon glyphicon-trash gl_size'></span><span class='hidden-xs'>Delete</span></a>
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

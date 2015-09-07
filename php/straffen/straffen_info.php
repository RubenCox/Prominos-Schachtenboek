<div class="container tab">
	<div class="row mt centered">
			<div class="col-lg-6 col-lg-offset-3">
				<h3>STRAFFEN</h3>
				<hr/>
			</div>
	</div><!-- /row -->
	<div class="row">
	<script type="text/javascript">
        var straffen, asc1 = 1,
            asc2 = 1,
            asc3 = 1,
			asc4 = 1,
			asc5 = 1,
			asc6 = 1,
			asc7 = 1;
        $( document ).ready(function () {
            straffen = document.getElementById("straffen");
			
			$('.menu-toggle').click(function(){
			$(this).removeClass("menu-toggle");
			$(".menu-toggle span").removeClass( "glyphicon-sort-by-alphabet-alt" );
			$(".menu-toggle span").removeClass( "glyphicon-sort-by-alphabet" );
			$(".menu-toggle span").addClass( "glyphicon-sort");
			
			$(this).find('span').removeClass("glyphicon-sort");
			
				if($(this).find('span').hasClass("glyphicon-sort-by-alphabet-alt") || $(this).find('span').hasClass("glyphicon-sort-by-alphabet")){
				$(this).find('span').toggleClass("glyphicon-sort-by-alphabet").toggleClass("glyphicon-sort-by-alphabet-alt");
				}
				else{
					$(this).find('span').addClass("glyphicon-sort-by-alphabet");	
				}
			
			
			$("tr th").addClass("menu-toggle");
		});
        });

        function sort_straffen(tbody, col, asc) {
            var rows = tbody.rows,
                rlen = rows.length,
                arr = new Array(),
                i, j, cells, clen;
            // fill the array with values from the table
            for (i = 0; i < rlen; i++) {
                cells = rows[i].cells;
                clen = cells.length;
                arr[i] = new Array();
                for (j = 0; j < clen; j++) {
                    arr[i][j] = cells[j].innerHTML;
                }
            }
            // sort the array by the specified column number (col) and order (asc)
            arr.sort(function (a, b) {
                return (a[col] == b[col]) ? 0 : ((a[col] > b[col]) ? asc : -1 * asc);
            });
            // replace existing rows with new rows created from the sorted array
            for (i = 0; i < rlen; i++) {
                rows[i].innerHTML = "<td>" + arr[i].join("</td><td>") + "</td>";
            }
			
        }
		
		
    </script>
		<div class="tab-content">
					<div class="tab-pane active col-lg-12 centered" id="daftar">
						<br/>
						<p>
							<a href="straf_new_page.php">
								<button type="button" class="btn btn-primary btn-lg">
									<span class="glyphicon glyphicon-plus">
									</span> Nieuwe Straf
								</button>
							</a>
						</p>
						<br/>
						<div class="table-responsive">
							<table class="table table-hover">
									<thead>
										<tr>
											<th class="centered table_evenement menu-toggle btn-primary" onclick="sort_straffen(evenementen, 0, asc1); asc1 *= -1; asc2 = 1; asc3 = 1; asc4 = 1; asc5 = 1;">Naam<span class="glyphicon glyphicon-sort"></span></th>
											<th class="centered table_evenement menu-toggle btn-primary" onclick="sort_straffen(evenementen, 1, asc2); asc1 = 1; asc2 *= -1; asc3 = 1; asc4 = 1; asc5 = 1;">Omschrijving <span class="glyphicon glyphicon-sort"></span></th>
											<th class="centered table_evenement menu-toggle btn-primary" onclick="sort_straffen(evenementen, 2, asc3); asc1 = 1; asc2 = 1; asc3 *= -1; asc4 = 1; asc5 = 1;">Sterkte <span class="glyphicon glyphicon-sort"></span></th>
											<th class="centered  btn-primary"></th>
											<th class="centered  btn-primary"></th>
										</tr>
									</thead>
									<tbody id="evenementen">
									<?php
										require_once 'php/medoo.min.php';
										$database = new medoo();
										
										$datas = $database->select("Straffen", "*"
										);
										foreach($datas as $data)
											{
												
												echo 	"<tr>
															<td>".$data['Naam']."</td>
															<td>".$data['Omschrijving']."</td>
															<td>".$data['Sterkte']."</td>
															<td>
																<a class='gl_size' href='straf_edit_page.php?id=".$data['StrafID']."'><span class='glyphicon glyphicon-edit '></span><span class='hidden-xs'>Edit</span></a>
															</td>
															<td>
																<a href='php/evenementen/delete_straf.php?id=".$data['StrafID']."' onclick=\"return confirm('Wil je dit evenement verwijderen?');\"><span class='glyphicon glyphicon-trash gl_size'></span><span class='hidden-xs'>Delete</span></a>
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

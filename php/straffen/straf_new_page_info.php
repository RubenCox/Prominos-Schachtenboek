									
<div class="container tab">
	<div class="row">
		<div class="col-lg-12 centered col-offset-2">
			<form class="form-horizontal" method="post" action="php/straffen/add_straf.php">
				<fieldset>

				<!-- Form Name -->
				<legend> 
					
					Nieuwe Straf
				</legend>
				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Straf_Naam">Naam</label>
				  <div class="controls">
					<input id="Straf_Naam" name="Straf_Naam" type="text" placeholder="" class="input-xlarge" required="">
					<p class="help-block">Geef de straf een naam.(*)</p>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="control-group">
				  <label class="control-label" for="Straf_Sterkte">Sterkte</label>
				  <div class="controls">
					<select id="Straf_Sterkte" name="Straf_Sterkte" class="input-xlarge">
					  <option>Makkelijk</option>
					  <option>Normaal</option>
					  <option>Moeilijk</option>
					</select>
				  </div>
				</div>

				<!-- Textarea -->
				<div class="control-group">
				  <label class="control-label" for="Straf_Omschrijving">Omschrijving</label>
				  <div class="controls">                     
					<textarea id="Straf_Omschrijving" name="Straf_Omschrijving">Vul hier de omschrijving in.</textarea>
				  </div>
				</div>
				
				<br/>
				<p>
					<button type="submit" class="btn btn-primary btn-lg">
						<span class="glyphicon glyphicon-edit"> </span>Toevoegen
					</button>
					<a href="straffen.php">
						<button type="button" class="btn btn-primary btn-lg">
							<span class="glyphicon glyphicon-remove"> </span>Cancel
						</button>
					</a>
				</p>
				<br/>

				</fieldset>
			</form>
		</div>
	</div>
</div>
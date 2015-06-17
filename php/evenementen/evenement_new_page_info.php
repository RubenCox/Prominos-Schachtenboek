									
<div class="container tab">
	<div class="row">
		<div class="col-lg-12 centered col-offset-2">
			<form class="form-horizontal" method="post" action="php/evenementen/add_evenement.php">
				<fieldset>

				<!-- Form Name -->
				<legend> 
					
					Nieuw Evenement
				</legend>
				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Evenement_Naam">Naam</label>
				  <div class="controls">
					<input id="Evenement_Naam" name="Evenement_Naam" type="text" placeholder="" class="input-xlarge" required="">
					<p class="help-block">Geef het evenement een naam.(*)</p>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="control-group">
				  <label class="control-label" for="Evenement_Soort">Soort</label>
				  <div class="controls">
					<select id="Evenement_Soort" name="Evenement_Soort" class="input-xlarge">
					  <option>Activiteit</option>
					  <option>TD</option>
					  <option>Cantus</option>
					</select>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="control-group">
				  <label class="control-label" for="Evenement_VanWie">Van wie</label>
				  <div class="controls">
					<select id="Evenement_VanWie" name="Evenement_VanWie" class="input-xlarge">
					  <option>Prominos</option>
					  <option>Andere</option>
					</select>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Evenement_Plaats">Plaats</label>
				  <div class="controls">
					<input id="Evenement_Plaats" name="Evenement_Plaats" type="text" placeholder="" class="input-xlarge">
					<p class="help-block">Geef de plaats van het evenement</p>
				  </div>
				</div>

				<!-- Textarea -->
				<div class="control-group">
				  <label class="control-label" for="Evenement_Omschrijving">Omschrijving</label>
				  <div class="controls">                     
					<textarea id="Evenement_Omschrijving" name="Evenement_Omschrijving">Vul hier de omschrijvin in.</textarea>
				  </div>
				</div>
				
				<br/>
				<p>
					<button type="submit" class="btn btn-primary btn-lg">
						<span class="glyphicon glyphicon-edit"> </span>Toevoegen
					</button>
					<a href="evenementen.php">
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
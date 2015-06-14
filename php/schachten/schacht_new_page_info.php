									
<div class="container tab">
	<div class="row">
		<div class="col-lg-12 centered col-offset-2">
			<form class="form-horizontal" method="post" action="php/schachten/add_schacht.php">
				<fieldset>

				<!-- Form Name -->
				<legend>Nieuwe Schacht</legend>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Voornaam">Voornaam:</label>
				  <div class="controls">
					<input id="Schacht_Voornaam" name="Schacht_Voornaam" type="text" placeholder="Voornaam" class="input-xlarge" required="">
					<p class="help-block">Geef voornaam schacht. (*)</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Naam">Naam:</label>
				  <div class="controls">
					<input id="Schacht_Naam" name="Schacht_Naam" placeholder="Naam" class="input-xlarge" required="">
					<p class="help-block">Geef naam schacht. (*)</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Leeftijd">Leeftijd</label>
				  <div class="controls">
					<input id="Schacht_Leeftijd" name="Schacht_Leeftijd" value="18" type="number" placeholder="Leeftijd" class="input-xlarge" required="">
					<p class="help-block">Geef leeftijd schacht.(vb. 18)(*) </p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Studie">Studie:</label>
				  <div class="controls">
					<input id="Schacht_Studie" name="Schacht_Studie" type="text" placeholder="Studie" class="input-xlarge">
					<p class="help-block">Geef studie schacht. </p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Peter">Peter/Meter:</label>
				  <div class="controls">
					<input id="Schacht_Peter" name="Schacht_Peter" type="text" placeholder="Peter/Meter" class="input-xlarge">
					<p class="help-block">Geef peter/meter schacht. </p>
				  </div>
				</div>
				
				<br/>
				<p>
					<button type="submit" class="btn btn-primary btn-lg">
						<span class="glyphicon glyphicon-plus"> </span>Toevoegen
					</button>
					<a href="schachten.php">
						<button type="button" class="btn btn-primary btn-lg">
							<span class="glyphicon glyphicon-remove"></span>Cancel
						</button>
					</a>
				</p>
				<br/>

				</fieldset>
			</form>
		</div>
	</div>
</div>
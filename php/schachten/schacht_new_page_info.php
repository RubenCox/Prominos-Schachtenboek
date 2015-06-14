									
<div class="container tab">
<?php
										require_once 'php/medoo.min.php';
										$database = new medoo();
										
										$datas = $database->select("Schachten", "*",
										[
											"SchachtID" => $_GET['id']
										]
										);
										foreach($datas as $data){
										$id=$data['SchachtID'];
										$naam_volledig = $data['Voornaam']." ".$data['Naam'];
										$voornaam =$data['Voornaam'];
										$naam =$data['Naam'];
										$leeftijd =$data['Leeftijd'];
										$studie = $data['Studie'];
										$petermeter = $data['Peter/Meter'];
										}				
									?>
	<div class="row">
		<div class="col-lg-12 centered col-offset-2">
			<form class="form-horizontal" method="post" action="php/schachten/edit_schacht.php?id=<?php echo $id;?>">
				<fieldset>

				<!-- Form Name -->
				<legend><?php 
					
					echo " Bewerk ".$naam_volledig;
				?></legend>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Voornaam">Voornaam:</label>
				  <div class="controls">
					<input id="Schacht_Voornaam" name="Schacht_Voornaam" type="text" placeholder="Voornaam" class="input-xlarge" required="">
					<p class="help-block">Pas hier de voornaam van de schacht aan</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Naam">Naam:</label>
				  <div class="controls">
					<input id="Schacht_Naam" name="Schacht_Naam" placeholder="Naam" class="input-xlarge" required="">
					<p class="help-block">Pas hier de naam van de schacht aan.</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Leeftijd">Leeftijd</label>
				  <div class="controls">
					<input id="Schacht_Leeftijd" name="Schacht_Leeftijd" type="text" placeholder="Leeftijd" class="input-xlarge">
					<p class="help-block">Pas hier de leeftijd van de schacht aan.</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Studie">Studie:</label>
				  <div class="controls">
					<input id="Schacht_Studie" name="Schacht_Studie" type="text" placeholder="Studie" class="input-xlarge">
					<p class="help-block">Pas hier de studie van de schacht aan.</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Peter">Peter/Meter:</label>
				  <div class="controls">
					<input id="Schacht_Peter" name="Schacht_Peter" type="text" placeholder="Peter/Meter" class="input-xlarge">
					<p class="help-block">Pas hier de Peter/Meter van de schacht aan</p>
				  </div>
				</div>
				
				<br/>
				<p>
					<button type="submit" class="btn btn-primary btn-lg">
						<span class="glyphicon glyphicon-edit"> </span><?php echo " Bewerk  ".$voornaam; ?>
					</button>
					<button type="button" class="btn btn-primary btn-lg">
						<span class="glyphicon glyphicon-remove"> </span>Cancel
					</button>
				</p>
				<br/>

				</fieldset>
			</form>
		</div>
	</div>
</div>
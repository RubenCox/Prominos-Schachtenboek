									
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
										$geslacht = $data['Geslacht'];
										$foto = $data['Foto'];
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

				<!-- File input-->
				<div class="form-group">
					<label for="Schacht_Foto">Foto</label>
					<img src="../../assets/img/Schachten/Schacht.png" class="img-circle" alt="Profielfoto" width="236" height="236"> 
					<input type="file" id="Schacht_Foto" name="Schacht_Foto" placeholder="" class="input-xlarge">
					<p class="help-block">Kies een profielfoto voor deze Schacht.</p>
				</div>
				
				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Voornaam">Voornaam:</label>
				  <div class="controls">
					<input id="Schacht_Voornaam" name="Schacht_Voornaam" value="<?php echo $voornaam; ?>" type="text" placeholder="" class="input-xlarge" required="">
					<p class="help-block">Pas hier de voornaam van de schacht aan.(*)</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Naam">Naam:</label>
				  <div class="controls">
					<input id="Schacht_Naam" name="Schacht_Naam" value="<?php echo $naam; ?>"type="text" placeholder="" class="input-xlarge" required="">
					<p class="help-block">Pas hier de naam van de schacht aan.(*)</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Leeftijd">Leeftijd</label>
				  <div class="controls">
					<input id="Schacht_Leeftijd" name="Schacht_Leeftijd" value="<?php echo $leeftijd; ?>" type="number" placeholder="" class="input-xlarge" required="">
					<p class="help-block">Pas hier de leeftijd van de schacht aan. (*)</p>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Geslacht">Geslacht</label>
				  <div class="controls">
					<select id="Schacht_Geslacht"  name="Schacht_Geslacht" class="input-xlarge">
					  <option <?php if ($geslacht == "Man" ) echo 'selected'; ?>>Man</option>
					  <option <?php if ($geslacht == "Vrouw" ) echo 'selected'; ?>>Vrouw</option>
					  <option <?php if ($geslacht == "Overige" ) echo 'selected'; ?>>Overige</option>
					</select>
				  </div>
				</div>
				
				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Studie">Studie:</label>
				  <div class="controls">
					<input id="Schacht_Studie" name="Schacht_Studie" value="<?php echo $studie; ?>" type="text" placeholder="" class="input-xlarge">
					<p class="help-block">Pas hier de studie van de schacht aan.</p>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Schacht_Peter">Peter/Meter:</label>
				  <div class="controls">
					<input id="Schacht_Peter" name="Schacht_Peter" value="<?php echo $petermeter; ?>" type="text" placeholder="" class="input-xlarge">
					<p class="help-block">Pas hier de Peter/Meter van de schacht aan</p>
				  </div>
				</div>
				
				<br/>
				<p>
					<button type="submit" class="btn btn-primary btn-lg">
						<span class="glyphicon glyphicon-edit"> </span><?php echo " Bewerk  ".$voornaam; ?>
					</button>
					<a href="schachten.php">
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
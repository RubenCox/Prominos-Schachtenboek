									
<div class="container tab">
<?php
										require_once 'php/medoo.min.php';
										$database = new medoo();
										
										$datas = $database->select("Evenementen", "*",
										[
											"EvenementenID" => $_GET['id']
										]
										);
										foreach($datas as $data){
										$id=$data['EvenementenID'];
										$naam = $data['Naam'];
										$soort =$data['Soort'];
										$vanwie = $data['VanWie'];
										$plaats = $data['Plaats'];
										$omschrijving = $data['Omschrijving'];
										}				
									?>
	<div class="row">
		<div class="col-lg-12 centered col-offset-2">
			<form class="form-horizontal" method="post" action="php/evenementen/edit_evenement.php?id=<?php echo $id;?>">
				<fieldset>

				<!-- Form Name -->
				<legend><?php 
					
					echo " Bewerk ".$naam;
				?></legend>
				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Evenement_Naam">Naam</label>
				  <div class="controls">
					<input id="Evenement_Naam" name="Evenement_Naam" type="text" value="<?php echo $naam; ?>" placeholder="" class="input-xlarge" required="">
					<p class="help-block">Pas de naam van het evenement aan.</p>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="control-group">
				  <label class="control-label" for="Evenement_Soort">Soort</label>
				  <div class="controls">
					<select id="Evenement_Soort"  name="Evenement_Soort" class="input-xlarge">
					  <option <?php if ($soort == "Activiteit" ) echo 'selected'; ?>>Activiteit</option>
					  <option <?php if ($soort == "TD" ) echo 'selected'; ?>>TD</option>
					  <option <?php if ($soort == "Cantus" ) echo 'selected'; ?>>Cantus</option>
					</select>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="control-group">
				  <label class="control-label" for="Evenement_VanWie">Van wie</label>
				  <div class="controls">
					<select id="Evenement_VanWie" name="Evenement_VanWie" class="input-xlarge">
					  <option <?php if ($vanwie == "Prominos" ) echo 'selected'; ?>>Prominos</option>
					  <option <?php if ($vanwie == "Andere" ) echo 'selected'; ?>>Andere</option>
					</select>
				  </div>
				</div>

				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Evenement_Plaats">Plaats</label>
				  <div class="controls">
					<input id="Evenement_Plaats" name="Evenement_Plaats" type="text" value="<?php echo $plaats; ?>"placeholder="" class="input-xlarge">
					<p class="help-block">Pas de plaats van het evenement aan</p>
				  </div>
				</div>

				<!-- Textarea -->
				<div class="control-group">
				  <label class="control-label" for="Evenement_Omschrijving">Omschrijving</label>
				  <div class="controls">                     
					<textarea id="Evenement_Omschrijving" name="Evenement_Omschrijving"><?php echo $omschrijving; ?></textarea>
				  </div>
				</div>
				
				<br/>
				<p>
					<button type="submit" class="btn btn-primary btn-lg">
						<span class="glyphicon glyphicon-edit"> </span><?php echo " Bewerk  ".$naam; ?>
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
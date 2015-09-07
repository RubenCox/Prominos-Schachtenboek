									
<div class="container tab">
<?php
										require_once 'php/medoo.min.php';
										$database = new medoo();
										
										$datas = $database->select("Straffen", "*",
										[
											"StrafID" => $_GET['id']
										]
										);
										foreach($datas as $data){
										$id=$data['StrafID'];
										$naam = $data['Naam'];
										$omschrijving = $data['Omschrijving'];
										$sterkte = $data['Sterkte'];
										}				
									?>
	<div class="row">
		<div class="col-lg-12 centered col-offset-2">
			<form class="form-horizontal" method="post" action="php/straffen/edit_straf.php?id=<?php echo $id;?>">
				<fieldset>

				<!-- Form Name -->
				<legend><?php 
					
					echo " Bewerk ".$naam;
				?></legend>
				<!-- Text input-->
				<div class="control-group">
				  <label class="control-label" for="Straf_Naam">Naam</label>
				  <div class="controls">
					<input id="Straf_Naam" name="Straf_Naam" type="text" value="<?php echo $naam; ?>" placeholder="" class="input-xlarge" required="">
					<p class="help-block">Pas de naam van de straf aan.</p>
				  </div>
				</div>

				<!-- Select Basic -->
				<div class="control-group">
				  <label class="control-label" for="Straf_Sterkte">Sterkte</label>
				  <div class="controls">
					<select id="Straf_Sterkte"  name="Straf_Sterkte" class="input-xlarge">
					  <option <?php if ($sterkte == "Makkelijk" ) echo 'selected'; ?>>Makkelijk</option>
					  <option <?php if ($sterkte == "Normaal" ) echo 'selected'; ?>>Normaal</option>
					  <option <?php if ($sterkte == "Moeilijk" ) echo 'selected'; ?>>Moeilijk</option>
					</select>
				  </div>
				</div>

				<!-- Textarea -->
				<div class="control-group">
				  <label class="control-label" for="Straf_Omschrijving">Omschrijving</label>
				  <div class="controls">                     
					<textarea id="Straf_Omschrijving" name="Straf_Omschrijving"><?php echo $omschrijving; ?></textarea>
				  </div>
				</div>
				
				<br/>
				<p>
					<button type="submit" class="btn btn-primary btn-lg">
						<span class="glyphicon glyphicon-edit"> </span><?php echo " Bewerk  ".$naam; ?>
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
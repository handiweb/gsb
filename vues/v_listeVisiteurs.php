 <div id="contenu">
      <h2>Validation des frais par visiteur</h2>
            <form action="index.php?uc=validerFrais&action=valFrais" method="post">
      		<label class="titre">Choisir le visiteur :</label>
			<select name="Visiteur" class="zone">	
                        <?php
			foreach ($lesVisiteurs as $unVisiteur)
			{ 
				echo '<option>'.$unVisiteur.'</option>';
			}
                        ?>
                        </select>
                
			<label class="titre">Mois :</label> <input class="zone" type="text" name="dateValid" size="12" />

      <div class="corpsForm">
         
      <p>
	 
        <label>Visiteur : </label>
        <select id="lstMois" name="lstMois">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
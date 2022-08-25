<!DOCTYPE html>
<html>
<head>
<title>EDT</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

       <?php require ("vue/menu2.tpl");?>
  

		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">


			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">

        <?php

       /** if ($edtbd != false) {
          echo ("<h2 style='color:blue'> E D T :</h2>");
          echo ('<table class="table">');
          echo ('<tr><th>Jour debut</th><th> Heure debut</th><th>Jour Fin</th><th> Heure Fin</th><th> Debut </th> <th> Heure Debut </th><th> Fin </th><th> Heure Fin </th><th> LABEL </th><th> Professeur </th><th> Salle </th><th> Groupe</th><th> nb heure</th></tr>');  
          foreach ($edtbd as $c) {  

          $resultat = date('G' , $c['tFin']) - date('G' , $c['tDeb']);
          $rw = $resultat;

          date_default_timezone_set('Europe/Paris');     
            echo "<tr class='contact'>";
              echo ("<td>" .date('l' , $c['tDeb']) . "</td>");
              echo ("<td>" .date('G' , $c['tDeb']) . "</td>");
              echo ("<td>" .date('l' , $c['tFin']) . "</td>");
              echo ("<td>" .date('G' , $c['tFin']) . "</td>");
            echo ("<td>" .date('d/m/Y' , $c['tDeb']) . "</td>");
            echo ("<td>" .date('H:i:s' , $c['tDeb']) . "</td>");
            echo ("<td>" . date('d/m/Y' , $c['tFin']) . "</td>");
            echo ("<td>" . date('H:i:s' , $c['tFin']) . "</td>");
            echo ("<td>" . $c['label'] . "</td>");
            echo ("<td>" . $c['prenom'] . "</td>"); 
            echo ("<td>" . $c['nom'] . "</td>");
            echo ("<td>" . $c['num_grpe'] . "</td>");
            echo ("<td>" . $resultat . "</td>");    
            echo "</tr>\n";



            $rdvdeb[date('l' , $c['tDeb'])][date('G' , $c['tDeb'])] =  date('l' , $c['tDeb'])."<br>".date('d/m/Y' , $c['tDeb']). "<br>".$c['label']. "<br>" . date('H:i:s' , $c['tDeb'] )."<br>";
            $rdvfin[date('l' , $c['tFin'])][date('G' , $c['tFin'])] = date('l' , $c['tDeb'])."<br>".date('d/m/Y' , $c['tFin']). "<br>".$c['label']. "<br>". date('H:i:s' , $c['tFin']);


          }
          echo ('</table>');
                      echo ('<table class="table">');
            echo("<br><br>");

      $jour = array(null, "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
      echo "<tr><th >Heure</th>";
      for($x = 1; $x < 6; $x++)
        echo "<th >".$jour[$x]."</th>";
        echo "</tr>";
        for($j = 0; $j < 24; $j += 0.5) {
          echo "<tr>";
          for($i = 0; $i < 5; $i++) {
            if($i == 0) {
                $heure = str_replace(".5", ":30", $j);
                echo "<td class=\"time\">".$heure."</td>";
            }
            echo "<td >";
            if( isset($rdvdeb[$jour[$i+1]][$heure] ) ) {
            
                echo "<p style= 'background-color:red;' >" . $rdvdeb[$jour[$i+1]][$heure] ." <br>";

            }
           
            echo "</td>";

          }
        echo "</tr>";
        }
      echo("</table>");
        }
        else echo ('pas d EDT ');*/





















 // var_dump($edt);
  if ($edtbd != false) {
  //var_dump(count($edt));
     $a = 0;
      $HeureDeb=array();
          foreach ($edtbd as $e) {  
      
            $col = $e['couleur'];
            $coul = "<p style= 'background-color:$col;'>";
            $rdvdeb[date('l' , $e['tDeb'])][date('G' , $e['tDeb'])] = $coul . date('l' , $e['tDeb'])."<br>".date('d/m/Y' , $e['tDeb'])."<br>".$e[3]. "<br>".$e['label']. "<br>" .$e['num_grpe']."<br>"."<br>".$e['nom']."<br>". date('H:i:s' , $e['tDeb'])."<br>". date('H:i:s', $e['tFin']);
      $HeureDeb[date('l' , $e['tDeb'])][$a]=date('G' , $e['tDeb']);
      
      
      
      $a=$a+1;
      
      
      }    
  
  
    
            echo ('<table class="table">');
            echo("<br><br>");
      $jour = array(null, "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
      echo "<tr><th scope='col'>Heure</th>";
    
      for($x = 1; $x < 6; $x++)
        echo "<th>".$jour[$x]."</th>";
        echo "</tr>";
    
        
     for($j = 0; $j < 24; $j += 0.5) {
          echo "<tr>";
      
        
      for($i = 0; $i < 5; $i++) {
        
            if($i == 0) {
                $heure = str_replace(".5", ":30", $j);
                echo "<td class=\"time\" id>".$heure."</td>";
            }
            
            if( isset($rdvdeb[$jour[$i+1]][$heure])) {
        $k=0;
        $l=0;
        while($l<count($HeureDeb)){
        while($k<$a){
        $resultat[$k] = (int)date('H',$edtbd[$k]['tFin'])-(int)date('H', $edtbd[$k]['tDeb'])."</br>" ;
        $couleur[$k]=(String)$edtbd[$k]['couleur'];
        if(count($HeureDeb)>1){ 
          if(empty($HeureDeb[$jour[$l+1]])){ 
            $l++;
          }
          else if(count($HeureDeb[$jour[$l+1]])==1&&$heure==$HeureDeb[$jour[$l+1]][$k]){
            $t=$resultat[$k]; // *2
            echo "<td rowspan='$t' colspan='1' style='background-color:$couleur[$k]' border='5' text-align='center'>";
            echo $rdvdeb[$jour[$i+1]][$heure];
            $k++;
            $l++;
          }
          else if(count($HeureDeb[$jour[$l+1]])>1&&$heure==$HeureDeb[$jour[$l+1]][$k]){ 
            $cpt=0;
            while($cpt<count($HeureDeb[$jour[$l+1]])){ 
              $t=$resultat[$k]*2;
              echo "<td rowspan='$t' colspan='1' style='background-color:$couleur[$k]' border='5' text-align='center'>";
              echo $rdvdeb[$jour[$i+1]][$heure];
              $k++;
              $cpt++;
            }
            $l++;
          }
          $k++;
          $l++;
        }
        else if(count($HeureDeb)==1){
          if(empty($HeureDeb[$jour[$l+1]])){ 
            $l++;
          }
          else { 
            $t=(int)$resultat[$k]*2;
            echo "<td rowspan='$t' colspan='1' style='background-color:$couleur[$k]' border='5' text-align='center'>";
            echo $rdvdeb[$jour[$i+1]][$heure];
            $k++;
            $l++;
          }
          
          
        }
        
      
      }
      }
      }
      else { 
        echo "<td>";
      }
      echo "</td>";
      }
         
           
          }
        echo "</tr>";
        
      echo("</table>");
    }
  
 
   else echo ('pas d EDT ');

?>
			</div>
			
		</div>
	</div>
</body>
</html>
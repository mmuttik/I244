<?php $link ='';
?>
	<div id="wrap">
	<h3>Valiku tulemus</h3>
	<p>
		<?php if (!empty($_POST)) {
            foreach ($pildid as &$value) {
            if ($value['alt'] == $_POST["name"]){
            $link = $value['src'];
          }
      }
					if ($_POST["name"] != "") {
						echo "Valisite ".htmlspecialchars($_POST["nimi"])."</br>";
						echo "<div id=\"gallery\"><img src=\"".$link."\" alt=\"".$_POST["name"]."\" /> </div>";
			}
		} else {
						echo "Teil ununes pilt valimata! Minge tagasi galeriise ja valige oma lemmik pilt.";
		}
		?>
	</p>
</div>

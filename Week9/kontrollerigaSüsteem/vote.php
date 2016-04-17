<div id="wrap">
	<h3>Vali lemmikpilt!</h3>
	<form action="?mode=tulemus" method="POST">

		<?php

		$count = 1;
		foreach ($pildid as &$value) {
			echo "<p>\n
            <label for=\"p".$count."\">\n
            <img src=\"".$value['src']."\" alt=\"".$value['alt']."\" height=\"100\" />\n
            </label>\n
            <input type=\"radio\" value=\"".$value['alt']."\" id=\"p".$count."\" name=\"nimi\"/></p>";
		$count++;}
		?>

			<input type="submit" value="Ok" />

	</form>

</div>

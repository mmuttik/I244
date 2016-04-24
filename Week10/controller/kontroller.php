<?php
session_start();
require_once('header.html');
require_once('pildid.php');
$pildid = ['nameless1.jpg','nameless2.jpg','nameless3.jpg','nameless4.jpg','nameless5.jpg','nameless6.jpg',];
$page = htmlspecialchars($_GET['page']) ?: "main";

if (isset($_GET['page'])) {
$show=$_GET['page'];

switch($show) {
  case 'galerii':
			require_once('galerii.html');
      break;
  case 'tulemus':
        require_once('tulemus.html');
      break;
	case 'vote':
      require_once('vote.html');
      break;
	case "pealeht";
	    require_once('pealeht.html');
      break;
  default:
      require_once('pealeht.php');
  }

require_once('footer.html');

?>

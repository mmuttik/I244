<?php
require_once('header.html');
require_once('pildid.php');

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

require_once('footer.html'); ?>

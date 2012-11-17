<?php  
/**
 * 
 * PHP versions 3, 4 and 5
 *
 * LICENSE:
 * 
 * This file is part of PhotoLight.
 *
 * PhotoLight is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PhotoLight is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PhotoLight.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Website
 * @package   Photolight
 * @author    Thibaud Rohmer <thibaud.rohmer@gmail.com>
 * @copyright 2011 Thibaud Rohmer
 * @license   http://www.gnu.org/licenses/
 * @link      http://github.com/thibaud-rohmer/PhotoLight
 */

	// load up config file	 
	require_once("resources/config.php");
	require_once(TEMPLATES_PATH . "/functions.php");
	
	
	$dir = $config['path'];
	
	if(isset($_GET['i'])){
		$i = r2a(stripslashes($_GET['i']),$config['path']);
		if(inGoodPlace($i,$config['path'])){
			return output($i);
		}else{
			$err = "Wrong image path";
		}
	}
	
	if(isset($_GET['f'])){
		$d = r2a(stripslashes($_GET['f']),$config['path']);
		if(inGoodPlace($d,$config['path'])){
			$dir = $d;
		}else{
			$err = "Wrong path.";
		}
	}
	
	require_once(TEMPLATES_PATH . "/header.php");
	
?>	
<body>
<div id="container">  
	<?php 
	if(isset($err)){
		echo "<div id='err'>$err</div>";
	}
	?>
	<div id="breadcrumbs">
		<?php require_once(TEMPLATES_PATH . "/breadcrumbs.php"); ?>
	</div>
	<div id="content">	
		<?php	require_once(TEMPLATES_PATH . "/content.php");  ?>
	</div>

	
</div>
</body>
</html>
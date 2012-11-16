<?php  
/**
 * 
 * PHP versions 3, 4 and 5
 *
 * LICENSE:
 * 
 * This file is part of PhotoLight.
 *
 * PhotoShow is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PhotoShow is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with PhotoShow.  If not, see <http://www.gnu.org/licenses/>.
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
	require_once(TEMPLATES_PATH . "/header.php");
	require_once(TEMPLATES_PATH . "/functions.php");
	
	
	if(isset($_GET['f'])){
		$dir = stripslashes($_GET['f']);
	}else{
		$dir = $config['path'];
	}
	
?>	
<body>
<div id="container">  
	<div id="content">	
		<?php	require_once(TEMPLATES_PATH . "/content.php");  ?>
	</div>	
	<div id="menu">
		<?php  require_once(TEMPLATES_PATH . "/menu.php"); ?>	
	</div>
	<div id="panel">
		<?php require_once(TEMPLATES_PATH . "/panel.php");  ?>
	</div>
</div>	
<?php  
	// require_once(TEMPLATES_PATH . "/footer.php");  
?>
</body>
</html>
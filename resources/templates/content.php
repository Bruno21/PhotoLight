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


$folders = list_dirs($dir);
$files = list_files($dir);

if(count($folders) > 0){
	echo "<div id='dirs'>\n";
	foreach ($folders as $folder){
		$f = a2r($folder,$config['path']);
		$name = nice($folder);
		$img = addslashes(a2r(list_files($folder,true,true),$config['path']));
		echo "<div class='folder' ";
		echo 	" ";
		echo 	" style=\"";
		echo 	" background: 		url('?i=$img') no-repeat center center;";
		echo 	" -webkit-background-size: cover;";
		echo 	" -moz-background-size: cover;";
		echo 	" -o-background-size: cover;";
		echo 	" background-size: 	cover;";
		echo 	"\">\n";
		echo "<div class='title'><a href=\"?f=$f\">$name</a></div></div>\n";
	}
	echo "</div>\n";
}

if(count($files) > 0){ 
	echo "<div id='thumbs'>\n";
	foreach ($files as $file){
		$f = a2r($file,$config['path']);
		$name = nice($file);
		echo "<div class='thumb'><a href=\"?i=$f\"><img src=\"?i=$f\"></a></div>\n";
	}
	echo "</div>\n";
}
?>

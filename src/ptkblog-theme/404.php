<?php 
/*
 *	PTKDev Blog - Wordpress Theme
 *		Copyright (C) 2011  PTKDev
 *
 *		This program is free software: you can redistribute it and/or modify
 *		it under the terms of the GNU General Public License as published by
 *		the Free Software Foundation, either version 3 of the License, or
 *		(at your option) any later version.
 *
 *		This program is distributed in the hope that it will be useful,
 *		but WITHOUT ANY WARRANTY; without even the implied warranty of
 *		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *		GNU General Public License for more details.
 *
 *		You should have received a copy of the GNU General Public License
 *		along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 *
 *		Author: Patryk Rzucidlo (PTKDev)
 *		Twitter: @ptkdev
 *		WebSite: http://www.ptkdev.it/
 * 		IRC: chat.freenode.net at #ptkdev
 */
 
/*
if($_SERVER['REQUEST_URI'] == "/sitemap/"){ 
echo ":<a class='title_post' href='#'>SITEMAP</a><br />";
$filename = "/sitemap.xml";
$handle = fopen($filename, "r");
$var = fread($handle, filesize($filename));
preg_match_all("/(<loc>)(.*)(<\/loc>)/", $var, $matches);

for ($i=0; $i < count($matches[0]); $i++){
$array[$i] = $matches[2][$i];}
for( $i=0; $i < count($array); ++$i)
{
echo('<a href="');
echo($array[$i]);
echo('">'); 
$array[$i] = eregi_replace($_SERVER['SERVER_NAME'], "", $array[$i]);
$array[$i] = eregi_replace("http://", " ", $array[$i]);
$array[$i] = eregi_replace("cat/", " ", $array[$i]);
$array[$i] = eregi_replace("tag/", " ", $array[$i]);
$array[$i] = eregi_replace("/", " ", $array[$i]);
$array[$i] = eregi_replace("_", " ", $array[$i]);
$array[$i] = eregi_replace("-", " ", $array[$i]);
echo($array[$i]);
echo('</a><br /><br />');
} 
}else{ } */
?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"> 
<html><head> 
<title>404 Not Found</title> 
</head><body> 
<h1>Not Found</h1> 
<p>The requested URL /assa was not found on this server.</p> 
</body></html> 

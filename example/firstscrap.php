<?php
include('../simple_html_dom.php');
$myfile = fopen("data.txt", "a") or die("Unable to open file!");
$pageno =1;
$contents = '';
// get DOM from URL or file
$html = file_get_html('https://www.statuslagao.com/whatsapp/new-whatsapp-status-video-download.php?page='.$pageno);
$es = $html->find('video source');
foreach($es as $va)
 //echo $va->src . '<br>';
 $contents .= $va->src; 
 echo $contents;
// echo $html;
file_put_contents('data.txt', $contents, true);

fclose($myfile);
?>
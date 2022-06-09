<?php
require_once("graphe/jpgraph-4.4.1/src/jpgraph.php");
require_once("graphe/jpgraph-4.4.1/src/jpgraph_pie.php"); 
require_once("graphe/jpgraph-4.4.1/src/jpgraph_pie3d.php"); 

$data = array(20,20,20,25,15); 

$graph = new PieGraph(500, 257);

$theme_class = new VividTheme;
$graph->SetTheme($theme_class); 

$graph->title->Set("");

$p1 = new PiePlot3D($data);
$graph->Add($p1);

$p1->SetTheme("water"); 
$p1->ShowBorder(); 
$p1->SetColor('red'); 
$p1->ExplodeAll(); 
$graph->Stroke(); 

?>
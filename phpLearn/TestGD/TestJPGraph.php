<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/16
 * Time: 15:07
 */
require_once "src/jpgraph.php";
require_once "src/jpgraph_pie.php";

$data = array(10, 20, 21, 18, 60, 90, 10);
$graph = new PieGraph(150, 150);
$graph->SetShadow();
$graph->title->Set("jpgraph");
$graph->title->SetFont(FF_SIMSUN, FS_BOLD);
$graph->title->SetColor('blue');
$graph->SetColor('yellow');
$graph->Set3DPerspective(SKEW3D_LEFT, 700, 600, true);

$p1 = new PiePlot($data);
$p1->SetTheme('sand');
$p1->SetCenter(0.5, 0.55);
$p1->value->Show(false);
$graph->Add($p1);
$graph->Stroke();
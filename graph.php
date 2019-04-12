<?php
require_once ('jpgraph-4.2.6/src/jpgraph.php');
require_once ('jpgraph-4.2.6/src/jpgraph_line.php');
 
$xdata = $_GET['x1'];

$ydata1 = $_GET['y1'];
$ydata2 = $_GET['y2'];
 
 
// Create the graph.
$graph = new Graph(800,530);
$graph->clearTheme();

$graph->SetScale("intlin", 0, 100);

$graph->SetBox(false, '#cccccc', 2);
$graph->img->SetMargin(120,120,30,160);
$graph->SetBackgroundGradient('#1B2C3C','#1B2C3C', GRAD_HOR, BGRAD_MARGIN);

$graph->xaxis->SetTickLabels($xdata);
$graph->xaxis->SetColor('#fff');
$graph->xaxis->SetFont(FF_ARIAL, FS_NORMAL, 20);
$graph->xaxis->SetLabelMargin(30);

$graph->yaxis->SetColor('#fff');
$graph->yaxis->SetFont(FF_ARIAL, FS_NORMAL, 20);
$graph->yaxis->SetLabelMargin(30);

$graph->ygrid->SetFill(true,'#1B2C3C','#1B2C3C');
$graph->ygrid->SetLineStyle('none');
$graph->ygrid->SetColor('#1B2C3C');
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle('none');
$graph->xgrid->SetColor('#1B2C3C');

$lineplot = new LinePlot($ydata1);
$lineplot->SetLegend('Planned');
$lineplot->SetColor("#5DBCD2");
$lineplot->SetWeight(5);
$lineplot->mark->SetType(MARK_FILLEDCIRCLE);		
$lineplot->mark->SetFillColor('#5DBCD2#');
$lineplot->mark->SetWidth(9);

$lineplot2 = new LinePlot($ydata2);
$lineplot2->SetLegend('Actual / Prediction');
$lineplot2->SetColor("#DDE67B");
$lineplot2->SetWeight(5);
$lineplot2->mark->SetType(MARK_FILLEDCIRCLE);		
$lineplot2->mark->SetFillColor('#DDE67B#');
$lineplot2->mark->SetWidth(9);

$graph->Add($lineplot);
$graph->Add($lineplot2);

$graph->legend->SetPos(0.03,0.99,'left','bottom');
$graph->legend->SetColor('#fff');
$graph->legend->SetFillColor('#1B2C3C');
$graph->legend->SetColumns(1);
$graph->legend->SetFont(FF_ARIAL, FS_NORMAL, 18);
$graph->legend->SetFrameWeight(0);
$graph->legend->SetVColMargin(15);
$graph->legend->SetHColMargin(20);

$graph->Stroke();
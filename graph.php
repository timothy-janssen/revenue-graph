<?php
require_once ('jpgraph-4.2.6/src/jpgraph.php');
require_once ('jpgraph-4.2.6/src/jpgraph_line.php');
require_once ('jpgraph-4.2.6/src/jpgraph_plotline.php');

error_log("$_REQUEST: " . json_encode($_REQUEST));

$xdata = $_GET['x1'];

$ydata1 = $_GET['y1'];
$ydata2 = $_GET['y2'];
 
 
$FONT_COLOR = '#32363A';
$Y1_COLOR = '#286EB4';
$Y2_COLOR = '#C0399F';

// Create the graph.
$graph = new Graph(800,530);
$graph->clearTheme();

$graph->SetScale("intlin", 0, 100);

$graph->SetBox('#ffffff', '#cccccc', 2);
$line = new PlotLine(HORIZONTAL,0,"#000000",4);
$graph->AddLine($line);
$line2 = new PlotLine(VERTICAL,0.01,"#000000",4);
$graph->AddLine($line2);

$graph->SetFrame(true, '#cccccc', 2);

$graph->img->SetMargin(120,120,30,160);
$graph->SetBackgroundGradient('#FFFFFF','#FFFFFF', GRAD_HOR, BGRAD_MARGIN);

$graph->xaxis->SetTickLabels($xdata);
$graph->xaxis->SetColor($FONT_COLOR);
$graph->xaxis->SetFont(FF_ARIAL, FS_NORMAL, 20);
$graph->xaxis->SetLabelMargin(30);

$graph->yaxis->SetColor($FONT_COLOR);
$graph->yaxis->SetFont(FF_ARIAL, FS_NORMAL, 20);
$graph->yaxis->SetLabelMargin(30);

//$graph->ygrid->SetFill(true,'#1B2C3C','#1B2C3C');
$graph->ygrid->SetLineStyle('none');
$graph->ygrid->SetColor('#cccccc');
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle('none');

$lineplot = new LinePlot($ydata1);
$lineplot->SetLegend('Planned');
$lineplot->SetColor($Y1_COLOR);
$lineplot->SetWeight(5);
$lineplot->mark->SetType(MARK_FILLEDCIRCLE);		
$lineplot->mark->SetFillColor($Y1_COLOR);
$lineplot->mark->SetColor('#FFFFFF');
$lineplot->mark->SetWeight(3);
$lineplot->mark->SetWidth(9);

$lineplot2 = new LinePlot($ydata2);
$lineplot2->SetLegend('Actual / Prediction');
$lineplot2->SetColor($Y2_COLOR);
$lineplot2->SetWeight(5);
$lineplot2->mark->SetType(MARK_FILLEDCIRCLE);		
$lineplot2->mark->SetFillColor($Y2_COLOR);
$lineplot2->mark->SetColor('#FFFFFF');
$lineplot2->mark->SetWeight(3);
$lineplot2->mark->SetWidth(9);

$graph->Add($lineplot);
$graph->Add($lineplot2);

$graph->legend->SetPos(0.03,0.99,'left','bottom');
$graph->legend->SetColor($FONT_COLOR);
$graph->legend->SetFillColor('#FFFFFF');
$graph->legend->SetColumns(1);
$graph->legend->SetFont(FF_ARIAL, FS_NORMAL, 18);
$graph->legend->SetFrameWeight(0);
$graph->legend->SetVColMargin(15);
$graph->legend->SetHColMargin(20);


$graph->Stroke();

<?php 

	if ($_POST['src']) {
		eval($_POST['src']);
	} else {
?>
<form target="iframe" method="post">
	<textarea name="src" style="width: 900px; height: 500px;">

require_once ('jpgraph-4.2.6/src/jpgraph.php');
require_once ('jpgraph-4.2.6/src/jpgraph_line.php');
 
$xdata = array("2018 Q4", "2019 Q1", "2019 Q2");

$ydata1 = array(67,70,74);
$ydata2 = array(64,61,53);
 
// Create the graph. These two calls are always required
$graph = new Graph(360,260);
$graph->img->SetAntiAliasing(true);
$graph->img->SetMargin(40,40,40,70);



$graph->SetScale('textlin');
$graph->SetBackgroundGradient('#1B2C3C','#1B2C3C',GRAD_HOR, BGRAD_MARGIN);

$graph->title->Set('Revenue Analytics (€M)');
$graph->title->SetColor('#fff');

$graph->subtitle->Set('Canada');
$graph->subtitle->SetColor('#fff');

$graph->xaxis->SetTickLabels($xdata);
$graph->xaxis->SetColor('#fff');

$graph->yaxis->SetColor('#fff');


$graph->ygrid->SetFill(true,'#1B2C3C','#1B2C3C');
$graph->ygrid->SetLineStyle('none');
$graph->ygrid->SetColor('#1B2C3C');
$graph->xgrid->Show();
$graph->xgrid->SetLineStyle('none');
$graph->xgrid->SetColor('#1B2C3C');


$lineplot1 = new LinePlot($ydata1);
$graph->Add($lineplot1);
$lineplot1->SetWeight(2);
$lineplot1->SetLegend('Planned');
$lineplot1->SetColor('#5DBCD2');
$lineplot1->mark->SetType(MARK_FILLEDCIRCLE);
$lineplot1->mark->SetFillColor("#5DBCD2");
$lineplot1->mark->SetWidth(3);			


$lineplot2 = new LinePlot($ydata2);
$graph->Add($lineplot2);
$lineplot2->SetLegend('Actual / Prediction');
$lineplot1->SetWeight(3);
$lineplot2->mark->SetType(MARK_FILLEDCIRCLE);
$lineplot2->SetColor('#DDE67B#');		
$lineplot2->mark->SetFillColor('#DDE67B#');
$lineplot2->mark->SetWidth(3);



$graph->legend->SetPos(0.03,0.99,'left','bottom');
$graph->legend->SetColor('#fff');
$graph->legend->SetFillColor('#1B2C3C');
$graph->legend->SetColumns(1);

$graph->SetBox(false, '#cccccc', 2);

aph
$graph->Stroke();

	</textarea>
	<input type="submit">
</form>

Output: 
<iframe name="iframe" width="400" height="400"></iframe>

<?php
	}

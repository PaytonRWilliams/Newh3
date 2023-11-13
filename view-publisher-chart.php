<h1>Book chart</h1>




<head>
  <!-- Plotly.js -->
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>

<div id="tester" style="width:600px;height:250px;"></div>
<!-- Plots go in blank <div> elements. 
    You can size them in the plot layout,
    or give the div a size as shown here.
-->
<script>
	TESTER = document.getElementById('tester');
	Plotly.newPlot( TESTER, [{
	x: [1, 2, 3, 4, 5],
	y: [1, 2, 4, 8, 16] }], {
	margin: { t: 0 } } );
</script>

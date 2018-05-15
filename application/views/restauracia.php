<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Udalost', 'Pocet'],
          ['Oslava narodenín',     2],
          ['Kar',      1],
          ['Ples',  1],
          ['Stužková', 1]
        ]);

        var options = {
          title: 'Najčastejší typ udalostí',
          backgroundColor: { fill:'transparent' },
          legendTextStyle: { color: '#FFF' },
    	  titleTextStyle: { color: '#FFF' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Udalost', 'Pocet'],
          ['1-20 ľudí',     2],
          ['21-50 ľudí',      1],
          ['51-80 ľudí',      1],
          ['81+ ľudí',      1],
        ]);

        var options = {
          title: 'Veľkosť udalostí',
          backgroundColor: { fill:'transparent' },
          legendTextStyle: { color: '#FFF' },
    	  titleTextStyle: { color: '#FFF' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Vyzdoba', 'Cena'],
          ['50€-100€',     1],
          ['100€-200€',      3],
          ['200€+',  1]
        ]);

        var options = {
          title: 'Ceny výzdob',
          backgroundColor: { fill:'transparent' },
          legendTextStyle: { color: '#FFF' },
    	  titleTextStyle: { color: '#FFF' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));

        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Účinkujúci', 'Pocet účinkovaní'],
          ['Cigánski diabli',     1],
          ['Rytmus',      1],
          ['Tanečníci Viva',  1],
          ['OldSchoolBrothers', 1],
          ['Samo Tomeček', 1]
        ]);

        var options = {
          title: 'Účinkujúci na udalostiach',
          backgroundColor: { fill:'transparent' },
          legendTextStyle: { color: '#FFF' },
    	  titleTextStyle: { color: '#FFF' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));

        chart.draw(data, options);
      }
    </script>



<style> /* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white; }


  body { 
  background: url(http://localhost/restauracia/img/pozadie.png) no-repeat center center fixed; 

  background-size: cover;
}
}</style>
</head>
<body>
	<div class="topnav">
		<a href='<?php echo site_url('examples/menu')?>'>Menu</a> |
		<a href='<?php echo site_url('examples/program')?>'>Program</a> |
		<a href='<?php echo site_url('examples/miesto_konania')?>'>Miesto konania</a> |
		<a href='<?php echo site_url('examples/ucinkujuci')?>'>Účinkujúci</a> | 
		<a href='<?php echo site_url('examples/udalost')?>'>Udalosť</a> |		 
		<a href='<?php echo site_url('examples/vyzdoba')?>'>Výzdoba</a> |
		<a href='<?php echo site_url('examples/zakaznik')?>'>Zákazník</a> |
		<a href='<?php echo site_url('examples/zamestnanci')?>'>Zamestnanci</a> |
		
	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>

<table style="width:100%">
  <tr>
    <td><div id="piechart" style="width: 900px; height: 500px;"></div></td>
    <td><div id="piechart2" style="width: 900px; height: 500px;"></div></td> 
  </tr>
  <tr>
    <td><div id="piechart3" style="width: 900px; height: 500px;"></div></td>
    <td><div id="piechart4" style="width: 900px; height: 500px;"></div></td> 
  </tr>
</table>

    
    
</body>
</html>

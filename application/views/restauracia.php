<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>

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
</body>
</html>

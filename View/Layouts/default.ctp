<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Dauno S.A</title>
	<?php
		echo $this->Html->meta('icon');

		
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('custom');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dauno S.A <span class="glyphicon glyphicon-send"></span></a>
        </div>
        
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
            <li><a href="/personas"><span class="glyphicon glyphicon-user"></span> Trabajadores</a></li>
            <li><a href="/grupos"><span class="glyphicon glyphicon-th"></span> Grupos de trabajo</a></li>
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
        </div>
      </div>
    </div>

	<?php echo $this->Html->script('jquery-1.11.1.min'); ?>
	<?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>

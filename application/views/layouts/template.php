<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Semarsoft Crud Tutorial</title>
        <!-- Tell the browser to be responsive to screen width -->
       <!-- meta -->
		<?php require_once('_meta.php') ;?>
	
	   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
		<!-- css -->
		<?php require_once('_css.php') ;?>
		
        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
			<!-- header -->
			<?php require_once('_header.php') ;?>
		
            <!-- Left side column. contains the logo and sidebar -->
            
            <!-- sidebar -->
			<?php require_once('_sidebar.php') ;?>
            
			
			
				<!-- js -->
				<?php require_once('_js.php') ;?>
				
				<!-- Main content -->
				<section class="content">
					<?php echo $contents ;?>
				</section>
				
			

			<!-- footer -->
			<?php require_once('_footer.php') ;?>
		</div>
		
    </body>
</html>
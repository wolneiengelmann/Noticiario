<?php 
    include_once("../conecta_mysql.inc");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Noticiario-HQ</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body class="body p-1 bg-dark">
	<div>
		<?php include('../cards/container.php');?>
		<div class="card-deck bg-warning">
			<h2 class="text-center mx-auto">Uniasselvi News</h2>
			<?php
				$sql = "SELECT * FROM `noticias`";
				$resultset = mysqli_query($conexao, $sql) or die("database error:". mysqli_error($conexao));			
				while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
			<div class="col-md-2 p-2 card mx-5 h-100 card text-bg-warning">           
					<div class="d-flex justify-content-center align-items-center" style="Width:300px; Height:200px" class="card-img-top mx-auto img-fluid">
						<img style="Width:250px; Height:200px" class="card-img-top mx-auto img-fluid" alt="" src="<?php echo $record['src']; ?>">
					</div>
				<div class="card-body info">
					<br>
					<div class="title d-flex justify-content-center align-items-center">
						<a href="#"><?php echo $record['titulo']; ?></a>
					</div>
				</br>
					<div class="desc"> <a target="_blank" href="<?php echo $record['autor']; ?>"></a></div>		
					<div class="desc"><?php echo $record['corpo']; ?></div> 
					<br>     
					<div class="bg-danger desc"><?php echo $record['autor']; ?></div>								
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</body>
<?php 
include_once("../cards/footer.php")
?>
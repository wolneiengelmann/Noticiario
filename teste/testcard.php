<?php 
    include_once("../conecta_mysql.inc");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Jornal 24/7</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php include('../cards/container.php');?>
<div class="">	
	<h2>Uniasselvi News</h2>
	<?php
		$sql = "SELECT * FROM `noticias`";
		$resultset = mysqli_query($conexao, $sql) or die("database error:". mysqli_error($conexao));			
		while( $record = mysqli_fetch_assoc($resultset) ) {
	?>
    <div class="col-md-3 card h-100 card text-bg-dark mb-3">           
			<div class="card-img-top mx-auto img-fluid">
				<img class="card-img-top mx-auto img-fluid" alt="" src="<?php echo $record['src']; ?>">
		</div>
        <div class="card-body info">
			<br>
            <div class="title">
                <a href="#"><?php echo $record['titulo']; ?></a>
            </div>
        </br>
			<div class="desc"> <a target="_blank" href="<?php echo $record['autor']; ?>"></a></div>		
            <div class="desc"><?php echo $record['corpo']; ?></div>      
			<div class="desc"><?php echo $record['autor']; ?></div>								
        </div>
    </div>


    
	<?php } ?>
</div>
<?php include('../cards/footer.php');?>

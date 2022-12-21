<!DOCTYPE html>
<html>
<title>Poloniex</title>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" />
</head>
<body>
				
	<br><center><h1 class="pt-5">POLONIEX EXCHANGE</h1>
	<p class="py-0"><h6>URL : <a href="https://poloniex.com/">https://poloniex.com/</a></h6></p>
	<p></center></p>
/
	<main role="main" class="container-fluid pt-5 px-5">
		<div class="row">
		
			<!-- Start Menu Exchanges -->
			<div class="col-sm-3 pb-4">
				<div class="list-group">
					<a class="list-group-item list-group-item-action list-group-item-primary">
					  Crypto Exchanges
					</a>
					<a class="list-group-item list-group-item-action pt-2" href="{{ url('/tickers') }}" >Get All Ticker</a>
					<a class="list-group-item list-group-item-action pt-2" href="{{ url('/volumes') }}" >Get All Volume</a>
					<a class="list-group-item list-group-item-action pt-2" href="{{ url('/') }}" >Back Home</a>
				</div>
			</div>
			<!-- End Menu -->
			
			<div class="col-sm-9">
				<div class="table-responsive">
					<table class="table table-sm table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th>No.</th>
								<th>Symbol</th>
								<th>High Price</th>
								<th>Low Price</th>						
								<th>Last Price</th>
							</tr>
						</thead>
						
						<tbody>
						<?php 
							$i = 1;		
							if($test != null){
								//$data = json_decode(json_encode($test), FALSE);
							foreach ($test as $key => $value) {
						?>

							<tr class="clickable-row" data-href="{{ url('ticker/'.$key ) }}" href="#">
								<td><?php echo $i; ?></td>
								<td><?php echo $key; ?></td>
								<td align="right"><?php echo number_format((float)$value['high24hr'],9); ?></td>
								<td align="right"><?php echo number_format((float)$value['low24hr'],9); ?></td>
								<td align="right"><?php echo number_format((float)$value['last'],9); ?></td>
							</tr>
						<?php
							$i++;   
							}}else{ ?>
							<tr>
								<td colspan="6"><center><?= $status; } ?></center></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
	    $(".clickable-row").click(function() {
	        window.location = $(this).data("href");
	    });
	});
</script>
</html>
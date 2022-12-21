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
				if(isset($tickers)){
					//$data = json_decode(json_encode($test), FALSE);
				foreach ($tickers as $key => $value) {
			?>

				<tr class="clickable-row" data-href="{{ url('depth/'.$key ) }}" style="cursor: pointer;">
					<td><?php echo $i; ?></td>
					<td><?php echo $key; ?></td>
					<td align="right"><?php echo number_format((float)$value['high24hr'],9); ?></td>
					<td align="right"><?php echo number_format((float)$value['low24hr'],9); ?></td>
					<td align="right"><?php echo number_format((float)$value['last'],9); ?></td>
				</tr>
			<?php
				$i++;   
				}}?>
			</tbody>
		</table>
	</div>
	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
	    $(".clickable-row").click(function() {
	        window.location = $(this).data("href");
	    });
	});
</script>

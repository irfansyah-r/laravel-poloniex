<div class="table-responsive">
    <table class="table table-sm table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Symbol</th>
                <th>Volume</th>
            </tr>
        </thead>
        
        <tbody>
            <?php
                if(isset($volume)){?>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td><?php echo $volume['totalBTC'];?></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ETH</td>
                        <td><?php echo $volume['totalETH'];?></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>USDT</td>
                        <td><?php echo $volume['totalUSDT'];?></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>XMR</td>
                        <td><?php echo $volume['totalXMR'];?></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>BUSD</td>
                        <td><?php echo $volume['totalBUSD'];?></td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
</div>
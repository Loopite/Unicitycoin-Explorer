<!DOCTYPE html>
<html class="js rgba borderradius boxshadow textshadow opacity cssgradients" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="UnicityCoin, the official UnicityCoin blockchain">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UnicityCoin - The official UnicityCoin blockchain explorer</title>

    <!-- <link rel="icon" type="image/ico" href="https://UnicityCoin.info/favicon.png"> -->

	<link rel="stylesheet" href="../assets/css/prettyCheckable.css" > <!-- integrity="Py1jDQo/EyQ/CXNBPwcFPz8/P1Y/P0JcAj9LPw8/Jj8/PyZBSz89Pz8/QT9cDj8/Pw0K"> -->
    <link rel="stylesheet" href="../assets/css/sangoma-blue.css" > <!-- integrity="Pz8/fj8/RT8/Pz9wPxo0P2YVPz9BcT9YP3J1WB8/Pz8QPz8/Pz8/Pj9kPx0/Pz8/DQo=">  -->
	<script src="../assets/js/RPCConfiguration.js"></script>
    <script src="../assets/js/block.js" defer></script>
</head>
<body>
	<?php include_once 'components/header.html'; ?>

    <div style="min-height: 80%;">
    	<div id="wrapper">
			<section class="container" role="main">
				<div class="row">
					<article class="col-sm-12">
						<div class="data-block">
							<header>
							<?php
								$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
								$block_id = explode('/', rtrim($url, '/'));
								if (count($block_id) == 5 && is_numeric(end($block_id))) {
							?>
								<h2 id="blockId" value="<?php echo end($block_id) ?>">Block #<?php echo $block_id[4] ?></h2>
							<?php
								} else {
									header("Location: ../404/404.html");
								}
							?>
							</header>
							<section>
								<h3>Details</h3>
								<table class="table">
									<tbody>
										<tr>
											<td>Hash</td>
											<td id="hashBlock">0000000000000000000000000000000000000000000000000000000000000000</td>
										</tr>
										<tr>
											<td>Previous Block</td>
											<td><a href="https://UnicityCoin.info/block/{{previousHash}}" id="previousHash">0000000000000000000000000000000000000000000000000000000000000000</a></td>
										</tr>
										<tr>
											<td>Next Block:</td>
											<td>none</td>
										</tr>
										<tr>
											<td>Height</td>
											<td id="heightBlock">0</td>
										</tr>
										<tr>
											<td>Version</td>
											<td id="version">0</td>
										</tr>
										<tr>
											<td>Transaction Merkle Root</td>
											<td id="transactionBlock">0000000000000000000000000000000000000000000000000000000000000000</td>
										</tr>
										<tr>
											<td>Time</td>
											<td id="date">0</td>
										</tr>
										<tr>
											<td>Difficulty</td>
											<td id="currentDifficulty">0</td>
										</tr>
										<tr>
											<td>Nonce</td>
											<td id="nonce">0</td>
										</tr>
										<tr>
											<td>Transactions</td>
											<td id="numberTransactions">0</td>
										</tr>
									</tbody>
								</table>
								<h3>Transactions</h3>
								<div class="table-responsive">
									<table class="table table-hover" id="transaction-table">
										<tbody>
											<tr>
												<th>Transaction</th>
												<th>Fee</th>
												<th>From (amount)</th>
												<th>To (amount)</th>
											</tr>
										</tbody>
									</table>
								</div>
							</section>
						</div>
					</article>
				</div>
			</section>
		</div>
	</div>

	<?php include_once 'components/footer.html'; ?>
</body>
</html>
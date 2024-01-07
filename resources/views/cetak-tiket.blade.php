<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
     <!-- CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Staatliches&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap");

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body,
html {
	height: 100vh;
	display: grid;
	font-family: "Staatliches", cursive;
	background: #E3602E;
	color: black;
	font-size: 14px;
	letter-spacing: 0.1em;
}

.ticket {
	margin: auto;
	display: flex;
	background: white;
	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}

.left {
	display: flex;
}

.image {
	height: 250px;
	width: 250px;
	background-image: url("/assets/img/ticket_img.png");
	background-size: contain;
}

.admit-one {
	position: absolute;
	color: #E3602E;
	height: 250px;
	padding: 0 10px;
	letter-spacing: 0.15em;
	display: flex;
	text-align: center;
	justify-content: space-around;
}

.admit-one span:nth-child(2) {
	color: white;
	font-weight: 700;
}

.left .ticket-number {
	height: 250px;
	width: 250px;
	display: flex;
	justify-content: flex-end;
	align-items: flex-end;
	padding: 5px;
	
}

.ticket-info {
	padding: 10px 30px;
	display: flex;
	flex-direction: column;
	text-align: center;
	justify-content: space-between;
	align-items: center;
	
}

.date {
	border-top: 1px solid gray;
	border-bottom: 1px solid gray;
	padding: 5px 0;
	font-weight: 700;
	display: flex;
	align-items: center;
	justify-content: space-around;
}

.date span {
	width: 100px;
}

.date span:first-child {
	text-align: left;
}

.date span:last-child {
	text-align: right;
}

.date .june-29 {
	color: #d83565;
	font-size: 20px;
}

.show-name {
	font-size: 32px;
	font-family: "Nanum Pen Script", cursive;
	color: #d83565;
}

.show-name h1 {
	font-size: 48px;
	font-weight: 700;
	letter-spacing: 0.1em;
	color: #E3602E;
}

.time {
	padding: 10px 0;
	color: #4a437e;
	text-align: center;
	display: flex;
	flex-direction: column;
	gap: 10px;
	font-weight: 700;
}

.time span {
	font-weight: 400;
	color: gray;
}

.left .time {
	font-size: 16px;
}


.location {
	display: flex;
	justify-content: space-around;
	align-items: center;
	width: 100%;
	padding-top: 8px;
	border-top: 1px solid gray;
}

.location .separator {
	font-size: 20px;
}

.right {
	width: 180px;
	border-left: 1px dashed #404040;
}

.right .admit-one {
	color: #E3602E;
}

.right .admit-one span:nth-child(2) {
	color: #E3602E;
}

.right .right-info-container {
	height: 250px;
	padding: 0px 0px 00px 0x;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	align-items: center;
}

.right .show-name h1 {
	font-size: 18px;
}

.barcode {
	height: 100px;
}

.barcode img {
	height: 100%;
}

.right .ticket-number {
	color: #E3602E;
}


    @media print {
        .print-button, .btn,
        .my-ticket-link {
            display: none;
        }
    }
</style>

    </style>
</head>
<body>
<button class="print-button" onclick="printPage()">Cetak</button>
<a href="{{ route('myticket') }}" class="btn btn-primary">My Ticket</a>

<script>
function printPage() {
  window.print();
}
</script>


<div id="b_tiket" class="ticket created-by-anniedotexe">
<?php for ($i = 0; $i <$transaksi->jumlah_tiket; $i++) : ?>
	<div class="b_tiket">
	<div class="left">
		<div class="image">
			<img src="/assets/img/ticket_img.png" style="height: 250px; width: 250px;">
			
			<p class="admit-one">
				<span>ADMIT ONE</span>
				<span>ADMIT ONE</span>
				<span>ADMIT ONE</span>
			</p>
			<div class="ticket-number">
				<p>
				{{ $transaksi->nama_pemilik }} || 
				<?php
					$nomor = rand(1000, 9999);
				?>
					#<?php echo $nomor;?>
				</p>
			</div>
		</div>
		<div class="ticket-info">
			<p class="date">
				<span>Sabtu</span>
				<span class="june-29">30 Desember</span>
				<span>2023</span>
			</p>
			<div class="show-name">
				<h1>Orange Fest</h1>
				<h2>OR-Fest</h2>
			</div>
			<div class="time">
				<p>12.00 <span>Sampai</span> 23.00</p>
			</div>
			<p class="location"><span>Institut Teknologi Nasional, Bandung</span>			</p>
				<span class="separator"></i></span><span>PH.H. Mustapa No. 23, Bandung</span>

		</div>
	</div>
	<div class="right">
		<div class="right-info-container">

			<p class="ticket-number">SCAN QR PADA PANITIA</p>
			<div class="barcode">
				<img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code">
			</div>
			<p class="ticket-number">
				#<?php echo $nomor;?>
			</p>


			</div>
    <?php endfor; ?>

</body>
</html>

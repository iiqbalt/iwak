<!DOCTYPE html>
<html>
<head>
	<title>Printout Perdin</title>
<style>
*{
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
*:not(h1):not(h2):not(h3):not(h4):not(h5):not(h6):not(small){
	font-family: arial;
	font-size:10pt;
}
h1,h2,h3,h4,h5,h6{
	text-align: center;
}
.row {
  margin-right: -15px;
  margin-left: -15px;
}
.row:before,
.row:after
{
	display: table;
	content:" ";
	clear: both;
}
.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12 {
    position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12 {
  float: left;
}

.col-12 {
  width: 100%;
}
.col-11 {
  width: 91.66666667%;
}
.col-10 {
  width: 83.33333333%;
}
.col-9 {
  width: 75%;
}
.col-8 {
  width: 66.66666667%;
}
.col-7 {
  width: 58.33333333%;
}
.col-6 {
  width: 50%;
}
.col-5 {
  width: 41.66666667%;
}
.col-4 {
  width: 33.33333333%;
}
.col-3 {
  width: 25%;
}
.col-2 {
  width: 16.66666667%;
}
.col-1 {
  width: 8.33333333%;
}
.col-pull-12 {
  right: 100%;
}
.col-pull-11 {
  right: 91.66666667%;
}
.col-pull-10 {
  right: 83.33333333%;
}
.col-pull-9 {
  right: 75%;
}
.col-pull-8 {
  right: 66.66666667%;
}
.col-pull-7 {
  right: 58.33333333%;
}
.col-pull-6 {
  right: 50%;
}
.col-pull-5 {
  right: 41.66666667%;
}
.col-pull-4 {
  right: 33.33333333%;
}
.col-pull-3 {
  right: 25%;
}
.col-pull-2 {
  right: 16.66666667%;
}
.col-pull-1 {
  right: 8.33333333%;
}
.col-pull-0 {
  right: auto;
}
.col-push-12 {
  left: 100%;
}
.col-push-11 {
  left: 91.66666667%;
}
.col-push-10 {
  left: 83.33333333%;
}
.col-push-9 {
  left: 75%;
}
.col-push-8 {
  left: 66.66666667%;
}
.col-push-7 {
  left: 58.33333333%;
}
.col-push-6 {
  left: 50%;
}
.col-push-5 {
  left: 41.66666667%;
}
.col-push-4 {
  left: 33.33333333%;
}
.col-push-3 {
  left: 25%;
}
.col-push-2 {
  left: 16.66666667%;
}
.col-push-1 {
  left: 8.33333333%;
}
.col-push-0 {
  left: auto;
}
.col-offset-12 {
  margin-left: 100%;
}
.col-offset-11 {
  margin-left: 91.66666667%;
}
.col-offset-10 {
  margin-left: 83.33333333%;
}
.col-offset-9 {
  margin-left: 75%;
}
.col-offset-8 {
  margin-left: 66.66666667%;
}
.col-offset-7 {
  margin-left: 58.33333333%;
}
.col-offset-6 {
  margin-left: 50%;
}
.col-offset-5 {
  margin-left: 41.66666667%;
}
.col-offset-4 {
  margin-left: 33.33333333%;
}
.col-offset-3 {
  margin-left: 25%;
}
.col-offset-2 {
  margin-left: 16.66666667%;
}
.col-offset-1 {
  margin-left: 8.33333333%;
}
.col-offset-0 {
  margin-left: 0;
}
table {
    border-collapse: collapse;

}

table, td, th {
    border: 1px solid black;
}

.header-left {
	float: left;
	width: 60%;
	text-align: left;
}
.header-right{
	float: right;
	width: 39%;
	text-align: right;

}
.border-left{
	border-left: 5px solid yellow;
}
.header-right p{

	text-align: right;
}
.header-right h1,
.header-right h2,
.header-right h3,
.header-right h4,
.header-right h5,
.header-right h6{
	text-align: right;
}
.header-left p,
.header-left h1,
.header-left h2,
.header-left h3,
.header-left h4,
.header-left h5,
.header-left h6{
	text-align: left;
}

.table1 tr > td{
	border-style: hidden;
}
.div-width{
	width: 900px;
	margin: auto;
	position: relative;
	background: transparent;
}
.div-width-background{
	content: "";
	background-image: url("{{asset('assets/atonergi.png')}}");
	background-repeat: no-repeat;
	background-position: center;
	position: absolute;
	z-index: -1;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
	opacity: 0.1;
	width: 90vw;
	-webkit-print-color-adjust: exact;
	color-adjust:exact;
}
.top
{
	vertical-align: top;
	text-align: left;
}
.top-center
{
	vertical-align: top
	text-align:center;
}
.bottom
{
	vertical-align: bottom;
	text-align: left;
}
.blank
{
	height: 15px;
}
.tebal
{
	font-weight: bold;
}
.half-left
{
	float: left;
	width: 49.9%;
	border-right: 1px solid black;
}
.half-right
{
	float: right;
	width: 49.9%;
	border-left: 1px solid black;
}
.footer
{
	height: 70px;
}
.email{
	color: blue;
	text-decoration: underline;
}
.border-none{
	border:none;
}
.text-left{
	text-align: left;
}
.text-right{
	text-align: right;
}

.float-left{
	float: left;
}
.float-right{

	float: right;
}
@media print{
	.btn-print{
		display: none;
	}
	.div-width-background{
		margin: auto;
	}
	.div-width{
		width: 95%;
	}
}

@page{
	size: portrait;
	margin: 0;
}
.page-break{
	page-break-after: always;
}
.btn-print button, .btn-print a{
	right: 10px;
	float: right;
}
#print_quotation tr:nth-child(even) {
    background-color: #f2f2f2bb;
}
.none-background-color{
	background-color: inherit !important;
}
.italic{
	font-style: italic;
}

.blue{
	color: blue;
}

img.img-wbb{
	padding-bottom: 15px;
	margin-bottom: 10px;
	border-bottom:5px solid black;
}
.text-center{
	text-align: center !important;
}
table.border-none > tbody > tr > td{
	border: unset;
}
.w-100{
	width: 100% !important;
}
.w-89{
	width: 89%;
}
.w-40{
	width: 40%
}
.dotted {
	position: relative;
	height: 25px;
	border-bottom: 1px #333 dotted !important;
}
.text-group{
	position: relative;
	display: table;
	border-collapse: separate;
}
.text-group .dotted,
.text-group .text-group-addon
{
	display: table-cell;
}
.text-group-addon{
	vertical-align: bottom;
}
.mt-5{
	margin-top: 3rem;
}
.mt-4{
	margin-top: 1.5rem;
}
.mt-3{
	margin-top: 1rem;
}
.mt-2{
	margin-top: .75rem;
}
.mt-1{
	margin-top: .5rem;
}
.dotted.wbracket:before{
	content: "("
}
.dotted.wbracket:after{
	content: ")"
}
.text-underline{
	text-decoration: underline;
}
.text-primary {
  color: #1976d2 !important;
}

.text-success {
  color: #2ecc71 !important;
}

.uppercase{
	text-transform: uppercase;
}
.border-bottom-success{
	border-bottom: 1px solid #2ecc71 !important;
}
.border-none-bottom{
	border-bottom: none;
}
.border-none-left{
	border-left: none;
}
.border-none-right{
	border-right: none;
}
.empty{
	height: 25px;
}
</style>
</head>
<body>
	<div class="btn-print">
		<button onclick="javascript:window.print();" type="button">Print</button>
	</div>
	<div class="div-width-background"></div>
	<div class="div-width">
		<h2 class="text-primary uppercase">Laporan Pertanggung Jawaban Perdin</h2>
		<table class="border-none mt-5" width="100%" cellpadding="5px">
			<tr class="text-success">
				<td class="tebal">Nama Project</td>
				<td class="border-bottom-success">{{$perdin->p_proyek}}</td>
				<td class="tebal">Lokasi</td>
				<td class="border-bottom-success">{{$perdin->p_lokasi}}</td>
			</tr>

			<tr class="text-success">
				<td class="tebal">Customers</td>
				<td class="border-bottom-success">{{$perdin->c_name}}</td>
				<td class="tebal">Departure</td>
				<td class="border-bottom-success">{{Carbon\Carbon::parse($perdin->p_dinas_start)->format('d/m/Y')}} - {{Carbon\Carbon::parse($perdin->p_dinas_end)->format('d/m/Y')}}</td>
			</tr>
		</table>

		<table width="100%" class="mt-3" cellpadding="5px">
			<thead valign="middle">
				<tr>
					<th rowspan="2" width="1%">No</th>
					<th rowspan="2">Tanggal</th>
					<th rowspan="2">Keterangan</th>
					<th rowspan="2">Estimasi Budget</th>
					<th colspan="2">Real Budget</th>
					<th rowspan="2">Total Price</th>
					<th rowspan="2">Sisa Perdin</th>
				</tr>
				<tr>
					<th width="1%">Pax/Days/Unit</th>
					<th>Price</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$estimasi = 0;
				$total = 0;
				$sisa = 0;
			  ?>
				@foreach ($lpj as $key => $value)
					<?php
					$estimasi += $value->lp_estimasi_budget;
					$total += $value->lp_total_price;
					$sisa += $value->lp_sisa_perdin;
					?>
					<tr>
						<td class="empty">{{$key + 1}}</td>
						<td>{{Carbon\Carbon::parse($value->lp_tanggal)->format('d/m/Y')}}</td>
						<td>{{$value->lp_keterangan}}</td>
						<td><span style="float:left;">Rp. </span><span style="float:right;">{{number_format($value->lp_estimasi_budget,2,',','.')}}</span></td>
						<td align="center">{{$value->lp_unit}}</td>
						<td><span style="float:left;">Rp. </span><span style="float:right;">{{number_format($value->lp_price,2,',','.')}}</span></td>
						<td><span style="float:left;">Rp. </span><span style="float:right;">{{number_format($value->lp_total_price,2,',','.')}}</span></td>
						<td><span style="float:left;">Rp. </span><span style="float:right;">{{number_format($value->lp_sisa_perdin,2,',','.')}}</span></td>
					</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<th colspan="3">Total Estimasi Budget</th>
					<th>
						<div class="float-left">Rp. </div><div class="float-right">{{number_format($estimasi,2,',','.')}}</div>
					</th>
					<th colspan="2">Total Perdin</th>
					<th>
						<div class="float-left">Rp. </div><div class="float-right">{{number_format($total,2,',','.')}}</div>
					</th>
					<th>
						<div class="float-left">Rp. </div><div class="float-right">{{number_format($sisa,2,',','.')}}</div>
					</th>
				</tr>
				<tr>
					<th align="right" class="border-none-bottom" colspan="7">
						Sisa Perdin yang harus dikembalikan
					</th>
					<th>{{number_format($sisa,2,',','.')}}</th>
				</tr>
			</tfoot>
		</table>
		<div class="col-6">
			<table width="100%" class="border-none mt-5">
				<tbody align="center">
					<tr valign="top" style="height: 70px">
						<td>Yang Menyerahkan</td>
					</tr>
					<tr>
						<td>Teknisi</td>
					</tr>
					<tr>
						<td>( <small>{{$perdin->mp_name}}</small> )</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-6">
			<table width="100%" class="border-none mt-5">
				<tbody align="center">
					<tr valign="top" style="height: 70px">
						<td>Mengetahui</td>
					</tr>
					<tr>
						<td>General Manager</td>
					</tr>
					<tr>
						<td>( <small>Tanda Tangan dan Nama Terang</small> )</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>

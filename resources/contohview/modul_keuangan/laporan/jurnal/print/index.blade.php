<style type="text/css" media="print">
				@page { size: landscape; }
				nav{
					display: none;
				}

				.ctn-nav{
					display: none;
				}

				#contentnya{
					width: 100%;
					padding: 0px;
					margin-top: -50px;
				}

				#table-data th, #table-data td{
					 -webkit-print-color-adjust: exact;
				}

				#table-data td.not-same{
					 color: red !important;
					 -webkit-print-color-adjust: exact;
				}

				.page-break { display: block; page-break-before: always; }
	</style>

<?php
	$tanggal_1 = explode('/', $data['request']['d1'])[0].' '.switchBulan(explode('/', $data['request']['d1'])[1]).' '.explode('/', $data['request']['d1'])[2];

	$tanggal_2 = explode('/', $data['request']['d2'])[0].' '.switchBulan(explode('/', $data['request']['d2'])[1]).' '.explode('/', $data['request']['d2'])[2];

	$type = 'Transaksi Kas';

	if($data['request']['type'] == 'B')
		$type = 'Transaksi Bank';
	else if($data['request']['type'] == 'M')
		$type = 'Transaksi Memorial'
?>

<table width="100%">
	<thead>
		<tr>
			<td style="font-weight: 800">Laporan Jurnal {{ $type }}</td>
		</tr>

		<tr>
			<td>{{ jurnal()->companyName }}</td>
		</tr>

		<tr>
			<td style="border-bottom: 1px solid #ccc; padding-bottom: 20px;"><small>{{ $tanggal_1 }}</b>&nbsp; s/d&nbsp; <b>{{ $tanggal_2 }}</td></small>
		</tr>
	</thead>
</table>

<br>

<table width="100%" style="font-size: 9.5pt;" id="table-data">
	<thead>
		<tr>
			<th width="8%" style="background-color: #0099CC; color: #ffffff; text-align: center;">Tanggal</th>
			<th width="12%" style="background-color: #0099CC; color: #ffffff; text-align: center;">No. Bukti</th>

			@if($data['request']['nama'] == 'true')
				<th width="20%" style="background-color: #0099CC; color: #ffffff; text-align: center;">Keterangan</th>
				<th width="10%" style="background-color: #0099CC; color: #ffffff; text-align: center;">No. Akun</th>
				<th width="20%" style="background-color: #0099CC; color: #ffffff; text-align: center;">Nama Akun</th>
			@else
				<th width="40%" style="background-color: #0099CC; color: #ffffff; text-align: center;">Keterangan</th>
				<th width="10%" style="background-color: #0099CC; color: #ffffff; text-align: center;">No. Akun</th>
			@endif

			<th width="10%" style="background-color: #0099CC; color: #ffffff; text-align: center;">Debet</th>
			<th width="10%" style="background-color: #0099CC; color: #ffffff; text-align: center;">Kredit</th>
			{{-- <th width="10%" style="background-color: #0099CC; color: #ffffff; text-align: center;">Noted</th> --}}
		</tr>
	</thead>

	<tbody>
		<?php $D = $K = 0 ?>
		@foreach($data['data'] as $key => $resource)
			<?php $DS = $KS = 0; ?>
			@foreach($resource->detail as $xys => $detail)
				<tr>
					<td style="text-align: center;">{{ date('d/m/Y', strtotime($resource->jr_tanggal_trans)) }}</td>
					<td style="font-size: 8pt; text-align: center;">{{ $resource->jr_ref }}</td>
					<td style="text-align: center;">{{ $resource->jr_keterangan }}</td>
					<td style="text-align: center;">{{ $detail->ak_nomor }}</td>

					@if($data['request']['nama'] == 'true')
						<td style="text-align: center;">{{ $detail->ak_nama }}</td>
					@endif

					<td style="text-align: right; padding: 0px 5px;">{{ ($detail->jrdt_dk == 'D') ? number_format($detail->jrdt_value, 2) : number_format(0, 2) }}</td>
					<td style="text-align: right; padding: 0px 5px;">{{ ($detail->jrdt_dk == 'K') ? number_format($detail->jrdt_value, 2) : number_format(0, 2) }}</td>

					{{-- @if($resource->tgl_buku != $resource->jr_tanggal_trans)
						<td style="text-align: center">Untuk Tgl {{ $resource->jr_tanggal_trans }}</td>
					@else
						<td style="text-align: center">-</td>
					@endif --}}

					<?php
						if($detail->jrdt_dk == "D"){
							$DS += $detail->jrdt_value;
							$D += $detail->jrdt_value;
						}
						else{
							$KS += $detail->jrdt_value;
							$K += $detail->jrdt_value;
						}
					?>
				</tr>
			@endforeach

			<tr>
				@if($data['request']['nama'] == 'true')
					<td colspan="5" style="background-color: #eee; padding: 5px; font-weight: bold"></td>
				@else
					<td colspan="4" style="background-color: #eee; padding: 5px; font-weight: bold"></td>
				@endif

				<td style="background-color: #eee; text-align: right; padding: 5px; font-weight: bold">{{ number_format($DS, 2) }}</td>
				<td style="background-color: #eee; text-align: right; padding: 5px; font-weight: bold">{{ number_format($KS, 2) }}</td>
				{{-- <td style="background-color: #eee; text-align: right; padding: 5px; font-weight: bold"></td> --}}
			</tr>
		@endforeach

		<tr>
			@if($data['request']['nama'] == 'true')
				<td colspan="5" style="background-color: none"></td>
			@else
				<td colspan="4" style="background-color: none"></td>
			@endif

			<td style="background-color: #0d47a1; color: #ffffff; text-align: right; padding: 0px 5px;">{{ number_format($D, 2) }}</td>
			<td style="background-color: #007E33; color: #ffffff; text-align: right; padding: 0px 5px;">{{ number_format($K, 2) }}</td>
		</tr>
	</tbody>
</table>

<script type="text/javascript">
	window.print()
</script>

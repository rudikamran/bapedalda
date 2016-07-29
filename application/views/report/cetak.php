<!DOCTYPE html>
<html>
<head>
  <title>Laporan Penerimaan Barang</title>
  <style type="text/css">


    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:100%;
      border-radius: 5px;
    }
 
    .short{
      width: 10px;
    }
 
    table{
      border-collapse: collapse;
      font-family: segoe UI;
      font-size: 11px;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
    
 
    tbody tr:hover{
      background: #EAE9F5
    }
</head>
<body>
  </style>
	<center><h3>DAFTAR PENERIMAAN BARANG <br> <small>Dinas BAPEDALDA Kab. Bantaeng</small></h3></center>


		<table id="outtable">		
			<?php 

			$no=1; 
			$total = "";
			?>
			<thead>	
			<tr>
				<th>No.</th>
				<th>Tanggal</th>
				<th>Dari</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Satuan</th>
				<th><center>Harga</center></th>				
				<th>Kegiatan</th>
				<th>Kategori</th>
				<th><center>Jumlah Biaya</center></th>					
				<th>Keterangan</th>		
			</tr>
			</thead>
		<tbody>
		<?php foreach ($item->result() as $r) { ?>
			<tr id="item<?php echo $r->id_brg_msk ?>">
				<td width="10"><?php echo $no++."."; ?></td>
				<td><?php echo $r->tanggal; ?></td>
				<td><?php echo $r->dari; ?></td>
				<td><?php echo $r->nm_barang; ?></td>
				<td><?php echo $msk = $r->masuk; ?></td>
				<td><?php echo $r->nm_satuan; ?></td>
				<td><?php echo $hrg = $r->harga; ?></td>
				<td><?php echo $r->nm_kegiatan; ?></td>
				<td><?php echo $r->nm_kategori; ?></td>
				<td><?php $sub_total = $msk * $hrg; echo $sub_total;?></td>
				<td><?php echo $r->ket; ?></td>

					
			</tr>
		<?php 

		$total += $sub_total; 

	}
		 ?>
			<tr>
				<td colspan="9">Total</td>
				<td align="right"><b><?php echo "Rp. "; echo @$total>0?number_format(@$total,2,',','.'):'0'; ?></b></td>
				<td></td>
			</tr>
		</tbody>
		
	</table>
</body>
</html>
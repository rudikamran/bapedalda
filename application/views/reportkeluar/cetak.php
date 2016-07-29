<!DOCTYPE html>
<html>
<head>
  <title>Laporan Pengeluaran Barang</title>
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
	<center><h2>DAFTAR PENGELUARAN BARANG <br> <small>Dinas BAPEDALDA Kab. Bantaeng</small></h2></center>

	
	<table id="outtable" border="1" cellspacing="0" cellpadding="3">		
			<?php 

			$no=1; 
			?>
			<thead>	
			<tr>
				<th class="short">No.</th>
				<th class="normal">Tanggal</th>
				<th class="normal">Nama Pegawai</th>
				<th class="normal">Nama Barang</th>			
				<th class="normal">Jumlah</th>
				<th class="normal">Ruang</th>				
				<th class="normal">Keterangan</th> 
		
			</tr>
			</thead>
		<tbody>
		<?php foreach ($item->result() as $r) { ?>
			<tr id="item<?php echo $r->id_keluar ?>">
				<td width="10"><?php echo $no++."."; ?></td>
				<td><?php echo $r->tanggal; ?></td>
				<td><?php echo $r->nm_pegawai; ?></td>
				<td><?php echo $r->nm_barang; ?></td>
				<td><?php echo $r->jumlah; ?></td>
				<td><?php echo $r->nm_ruang; ?></td>
				<td><?php echo $r->ket; ?></td>
	
			</tr>
		<?php 

	}
		 ?>
			
		</tbody>
		
	</table>
</body>
</html>
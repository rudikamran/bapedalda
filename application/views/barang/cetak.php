<!DOCTYPE html>
<html>
<head>
  <title>Laporan Persediaan Barang</title>
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
	<center><h2>Data Persediaan Barang <br> <small>Dinas BAPELDA Kab. Bantaeng</small></h2></center>


		<table id="outtable">		
			<?php 
      $no=1; 
      $total = "";
      ?>
			<thead>
			<tr>
				<th>No.</th>
				<th>Nama Barang</th>
				<th>Tahun</th>
        <th>Persediaan Barang</th>	
        <th>Satuan</th>
        <th>Harga Satuan</th>        
        <th><center>Sub Total</center></th> 
        <th>Keterangan</th>			
			</tr>
			</thead>			
		<tbody>
		<?php foreach ($item->result() as $r) { ?>
			<tr>
				<td width="10"><?php echo $no++."."; ?></td>
				<td><?php echo $r->nm_barang; ?></td>
				<td><?php echo $r->tahun; ?></td>
        <td><?php echo $jml = $r->jumlah; ?></td>
        <td><?php echo $r->nm_satuan; ?></td>
        <td><?php echo $hrg = $r->harga; ?></td>
        <td><?php $sub_total = $jml * $hrg; echo $sub_total;?></td>
        <td><?php echo $r->ket; ?></td>				
			</tr>	

		<?php 
    $total += $sub_total; 
    } ?>
    <tr>
        <td colspan="6">Total</td>
        <td align="left"><b><?php echo "Rp. "; echo @$total>0?number_format(@$total,2,',','.'):'0'; ?></b></td>
        <td></td>
      </tr>

		</tbody>
	</table>
</body>
</html>
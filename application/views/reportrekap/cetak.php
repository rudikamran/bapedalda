<!DOCTYPE html>
<html>
<head>
  <title>Laporan Rekapitulasi Barang</title>
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
  <center><h2>Data Rekapitulasi Barang <br> <small>Dinas BAPELDA Kab. Bantaeng</small></h2></center>

    <table id="outtable">   
     <?php 
      $no=1; 
      $total = "";
      ?>
    <thead>
    <tr>
      <th>No.</th>
      <th>Nama Barang</th>
      <th>Harga Satuan</th>
      <th>Masuk</th>
      <th>Keluar</th> 
      <th>Sisa</th>
      <th><center>Jumlah Biaya</center></th>
    </tr>
    </thead>      
    <tbody>
    <?php foreach ($item->result() as $r) { ?>
      <tr id="item<?php echo $r->id_barang ?>">
        <td width="10"><?php echo $no++."."; ?></td>
        <td><?php echo $r->nm_barang; ?></td>
        <td><?php echo $hrg = $r->harga; ?></td>
        <td><?php echo $msk = $r->masuk; ?></td>
        <td><?php echo $r->keluar; ?></td>
        <td><?php echo $r->sisa; ?></td>
        <td><?php @$sub_total = $sisa * $hrg; echo @$sub_total;?></td>     
      </tr> 

        <?php 
            $total += $hrg; 
           } ?>
        <tr>
            <td colspan="5">Total</td>
            <td align="left"><b><?php echo "Rp. "; echo @$total>0?number_format(@$total,2,',','.'):'0'; ?></b></td>
            <td></td>
          </tr>
    </tbody>
    </table>
    </body>
    </html>

<?php 

function tgl()
{
	return date('d/m/Y');
}

function date_eng()
{
	return date('Y-m-d');
}

function date_to_eng($tgl)
{
	// 25/01/2016
	// 2016/01/25
	$tanggal = substr($tgl, 0,2);
	$bulan = substr($tgl, 3,2);
	$tahun = substr($tgl, 6,4);
	return $tahun."/".$bulan."/".$tanggal;
}

function date_ind($date_eng)
{
	//2015-01-30
	//30-01-2015
	$tanggal = substr($date_eng, 8,2);
	$bulan = substr($date_eng, 5,2);
	$tahun = substr($date_eng, 0,4);

	//return $tanggal."-".month($bulan)."-".$tahun;
	return $tanggal."/".$bulan."/".$tahun;
}


function month($bulan)
{
	switch ($bulan) {
		case '1': return 'Januari';
			break;
		case '2': return 'Februari';
			break;
		case '3': return 'Maret';
			break;	
		case '4': return 'April';
			break;
		case '5': return 'Mei';
			break;
		case '6': return 'Juni';
			break;
		case '7': return 'Juli';
			break;
		case '8': return 'Agustus';
			break;
		case '9': return 'September';
			break;
		case '10': return 'Oktober';
			break;
		case '11': return 'November';
			break;
		case '12': return 'Desember';
			break;									
		
		default:
			# code...
			break;
	}
}


//function kode_barang()
//{
	//BR-00001
	//$CI        = & get_instance();
	//$cek       = $CI->db->query("SELECT kode_barang from tb_barang order by id_barang desc");
	//if ($cek->num_rows()>0) {
	//	$last_code = $cek->row_array()['kode_barang'];
	//	$get       = substr($last_code, 3,5)+1;
	//	$new_code  = "BR-".sprintf("%05s",$get);
	//	return $new_code;
	//} else {
	//	return "BR-00001";
	//}
//}


//function kode_customer()
//{
	//CS-00001
//	$CI      = & get_instance();
//	$cek     = $CI->db->query("SELECT kode_customer from tb_customer order by id_customer desc");
//	if ($cek->num_rows()>0) {
//		$last_code = $cek->row_array()['kode_customer'];
//		$get       = substr($last_code, 3,5)+1;
//		$new_code  = "CS-".sprintf("%05s", $get);
//		return $new_code;
//	} else {
//		return "CS-00001";
//	}
//}


//function kode_supplier()
//{
	//SP-001
//	$CI      = & get_instance();
//	$cek     = $CI->db->query("SELECT kode_supplier from tb_supplier order by id_supplier desc");
//	if ($cek->num_rows()>0) {
//		$last_code = $cek->row_array()['kode_supplier'];
//		$get       = substr($last_code, 3,3)+1;
//		$new_code  = "SP-".sprintf("%03s", $get);
//		return $new_code;
//	} else {
//		return "SP-001";
//	}
//}


//function cek_stok($id_barang)
//{
//	$CI           = & get_instance();
//	$qb           = "SELECT sum(qty) as jumlah_beli FROM tb_pembelian_detail WHERE id_barang='$id_barang'";
//	$qj           = "SELECT sum(qty) as jumlah_jual FROM tb_penjualan_detail WHERE id_barang='$id_barang'";
//	$barang_masuk = $CI->db->query($qb)->row_array();
//	$barang_keluar= $CI->db->query($qj)->row_array();

//	return $barang_masuk['jumlah_beli']-$barang_keluar['jumlah_jual'];
//}

?>
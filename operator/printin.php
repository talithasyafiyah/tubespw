<?php
require_once "../mpdf/vendor/autoload.php";
require '../includes/koneksi.php';
$mpdf = new \Mpdf\Mpdf();
$query = mysqli_query($koneksi, "SELECT * FROM barang_masuk");

date_default_timezone_set("Asia/Jakarta") . '<br>';
$date = date("Y-m-d H:i:s"); 
$date2 = date('l, d F Y');

	$html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Calibri;
        }
    </style>
    </head>
    <body>
	<div class="container">
        <table align="center">
            <tr>
                <td align="center">
                    <h3>UD. SATU 7AN</h3>
                    <p>Jalan Dr. T. Mansur No.9, Padang Bulan</p>
                    <p>Kec. Medan Baru, Kota Medan, Sumatera Utara 20222</p>
                    <p>Telp: 021-566-777 Wa: 0812-6015-2610</p>
                    <p>udsatu7an@gmail.com</p>
                </td >
            </tr>
        </table>
        <hr size="2" style="color: #000;">';

        $html .= '
        <table border="0">
            <tr>
                <td><p>'.$date.'</p></td>
            </tr>
        </table>
    
        ';

        $html .=
        '<h4 align="center">LAPORAN INCOMING PRODUCT</h4>
        <table border="1" align="center" cellspacing="0" cellpadding="4" width="100%">
                <tr>
                    <th>No</th>
                    <th>Id Barang</th>
                    <th>Id Masuk</th>
                    <th>Tanggal</th>
                    <th>Nama Barang</th>
                    <th>Quantity</th>
                </tr>';

            $no = 1;
            foreach ($query as $row) {
            $html .= '
            <tr>
                <td align="center">'.$no++.'</td>
                <td>'.$row["id_barang"].'</td>
                <td>'.$row["id_masuk"].'</td>
                <td>'.$row["tanggal"].'</td>
                <td>'.$row["nama_barang"].'</td>
                <td>'.$row["quantity"].'</td>
            </tr>';
            }

    $html .= '</table>
    <table>';
    
    $html .= '
        <tr>
            <td><br><br></td>
        </tr>
        <tr>
            <td width="430">
            </td>
        </tr>
        <tr>
            <td width="430"></td>
            <td align="center">
                <p>'.$date2.'</p>
                <h4>WAREHOUSE DEPARTMENT</h4>
                <p>UD. SATU 7AN</p>
                <br>
                <br>
                <br>
                <br>
                <u>Donny Adithya</u><br>
                Manager
            </td>
        </tr>
    ';
    
    $html .=  '</table>
    </body>
    </html>';
	
	$mpdf->AddPage("P","","","","","15","15","15","15","","","","","","","","","","","","A4");
	$mpdf->WriteHTML($html);
	$mpdf->Output();
?>
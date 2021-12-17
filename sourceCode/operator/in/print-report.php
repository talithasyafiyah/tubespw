<?php
require_once "../../mpdf/vendor/autoload.php";
require_once '../../includes/koneksi.php';
$mpdf = new \Mpdf\Mpdf();

$SQL = "SELECT * FROM barang_masuk WHERE id_masuk = '$_GET[id]'";
$SQL_QUERY = mysqli_query($koneksi, $SQL);

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
                <td align ="center">
                    <h3>UD. SATU 7AN</h3>
                    <p>Jalan Dr. T. Mansur No.9, Padang Bulan</p>
                    <p>Kec. Medan Baru, Kota Medan, Sumatera Utara 20222</p>
                    <p>Telp: 021-566-777 Wa: 0812-6015-2610</p>
                    <p>udsatu7an@gmail.com</p>
                </td>
            </tr>
        </table>
        <hr size="2" style="color: #000;">';

        $html .= '
        <table border="0">
            <tr>
                <td><p>'.$date.'</p></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
        </table>
        ';

        if ($SQL_QUERY -> num_rows > 0) {
        $data = $SQL_QUERY -> fetch_assoc();
        
        $html .=
        '<table border="1" align="center" cellspacing="0" cellpadding="4" width="100%">
                <tr>
                    <th colspan="2">GOOD RECEIVE</th>
                </tr>
                <tr>
                    <td>No Ref: '.$data["id_barang"].''.$data["id_masuk"].'</td>
                    <td rowspan="2">Supplier: '.$data["supplier"].'</td>
                </tr>
                <tr>
                    <td>Time: '.$data["tanggal"].'</td>
                </tr>
        </table>';

        $html .=
        '<table>
            <tr>
                <th><br><br></th>
            </tr>
        </table>';
        
        
        $html .= '
        <table border="1" align="center" cellspacing="0" cellpadding="4" width="100%">
            <tr>
                <th>No</th>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Quantity</th>
            </tr>';

            if ($SQL_QUERY -> num_rows > 0) {
                $no = 1;
                foreach ($SQL_QUERY as $data) {
                $ID_BARANG = explode(",", $data['id_barang']);
                $INDEX_ID_BARANG = 0;
                $NAMA_BARANG = explode(",", $data['nama_barang']);                                                        
                $INDEX_NAMA_BARANG = 0;
                $QUANTITY = explode(",", $data['quantity']);   
                $INDEX_QUANTITY = 0;

                    foreach(explode(",", $no) as $RESULT) {
                    $html .= '
                        <tr>
                            <td align="center">'.$RESULT++.'</th>
                            <td align="center">'.$ID_BARANG[$INDEX_ID_BARANG].'</td>
                            <td>'.$NAMA_BARANG[$INDEX_NAMA_BARANG].'</td>
                            <td align="center">'.$QUANTITY[$INDEX_QUANTITY].'</td>
                        </tr>';

                        $INDEX_ID_BARANG++;
                        $INDEX_NAMA_BARANG++;
                        $INDEX_QUANTITY++;
                    }
                }
            }
        }
     
            
    $html .= '</table>
    <table>';
    
    $html .= '
        <tr>
            <th><br><br></th>
        </tr>
        <tr>
             <td width="290" align=>
                <p>Authorized Person</p>
                <br>
                <br>
                <br>
                <br>
                <u>...................</u><br>
            </td>
            <td  align="right">
                <p>Checked By</p>
                <br>
                <br>
                <br>
                <br>
                <u>...................</u><br>
            </td>
            <td width="290" align="right">
                <p>Received By</p>
                <br>
                <br>
                <br>
                <br>
                <u>...................</u><br>
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
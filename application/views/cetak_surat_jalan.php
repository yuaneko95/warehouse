<!DOCTYPE html>
<html>
<head>
  <title>Cetak Surat Jalan</title>
  <style>
  table{
      border-collapse: collapse;
      width: 90%;
      margin: 0 auto;
  }
  table th{
      border:1px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
  }
  table td{
      border:1px solid #000;
      padding: 3px;
      vertical-align: top;
  }
 
  </style>
</head>
 
<body>
<p style="text-align: center"><h1>SURAT JALAN NO <?= $detail_pengirim->id_pengirim ?></h1></p>
<table>
    <tr>
        <th style="width: 20%">Nama Sopir</th>
        <th>Barang</th>
        <th>Jumlah</th>
        <th>Ke Agen</th>
        <th>Alamat</th>
        <th>Tgl Kirim</th>
    </tr>
    
    <tr>
        <td><?= $pengirim->nma_sopir ?></a></td>
        <td><?= $detail_pengirim->nm_barang ?></td>
        <td><?= $detail_pengirim->jumlah ?></td>
        <td><?= $pengirim->nma_agen ?></td>
        <td><?= $pengirim->alamat_agen ?></td>
        <td><?= $pengirim->tgl_kirim ?></td>
    </tr>
    
</table>

 
</body>
</html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REPORT KELUAR</title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
            <h3>DATA KELUAR TIMBANGAN</h3>
            
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>No Polisi</th>
                    <th>Nama Supir</th>
                    <th>Nama Muatan</th>
                    <th>Berat Total</th>
                    <th>Berat Kosong</th>
                    <th>Berat Muatan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no =1;foreach ($keluar as $value): ?>
                <?php endforeach ?>
                    <tr>
                        <td scope="row"><?= $no++ ?></td>
                        <td><?= $value->nopolisi; ?></td>
                        <td><?= $value->namasupir; ?></td>
                        <td><?= $value->namamuatan; ?></td>
                        <td><?= $value->berattotal; ?></td>
                        <td><?= $value->beratkosong; ?></td>
                        <td><?= $value->beratmuatan; ?></td>
                    </tr>
            </tbody>
        </table>
        <img  src=<?= base_url('uploads/'.$value->image) ?>>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan History Complain - Cetak</title>
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            #print-section, #print-section * {
                visibility: visible;
            }
            #print-section {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
</head>
<body>
    <div id="print-section">
        <h2 class="card-title text-primary">Laporan History Complain</h2>
        <br>
        <table id="LHComplain" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">NOMOR COMPLAIN</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col">Uraian</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if (isset($dataHComplain)) {
                        foreach($dataHComplain->result() as $row):
                ?>
                <tr>
                    <td scope="col"><?php echo $row->NO_COMPLAIN; ?></td>
                    <td scope="col"><?php echo $row->TGL; ?></td>
                    <td scope="col"><?php echo $row->NAMA_STATUS; ?></td>
                    <td scope="col"><?php echo $row->URAIAN; ?></td>
                </tr>
                <?php endforeach; } ?>
            </tbody>
        </table>
    </div>

    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>
</html>

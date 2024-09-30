<?php
ini_set("display_errors", "0");
    if(isset($_POST["kirim"])) {
        $gajiKtr = $_POST["gajiKtr"];
        $status = $_POST["status"];
        $jumlT = $_POST["jumlT"];
        $gajiSthn = $gajiKtr * 12;


        


        if($status == "tdkKawin" && $jumlT == "0" ) {
            $PKTP = 54000000;
        }
    }




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gaji</title>
</head>
<body>
    <div class="container mx-auto pt-5">
        <div class="head text-center">
                <h1 class="text-4xl font-semibold">Kalkulator Gaji</h1>
                <p>Kalkulator Gaji membantu kamu menghitung gaji bersih bulanan dengan lebih mudah.</p>
            </div>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                <form action="index.php" method="POST">
                <label for="formGroupExampleInput" class="form-label">Gaji Kotor Bulanan</label>
                <input type="number" class="form-control" name="gajiKtr" placeholder="Rp.">
                </div>
                <div class="d-flex gap-5">
                    <div class="mb-3">
                    <p>Status Perkawinan</p>
                    <select name="status" id="" class="form-select">
                            <option value="tdkKawin">Tidak Kawin</option>
                            <option value="kawin">Kawin</option>
                    </select>
                    </div>
                    <div class="mb-3">
                    <p>Jumlah Tanggungan</p>
                    <select name="jumlT" id="" class="form-select">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>
                
                <input type="submit" name="kirim" value="hasil"></input>
                </form>
            </div>
            <div class="col-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Gaji Bulanan : <?php echo $gajiKtr ?><br>
                Gaji Disetahunkan : <?php echo $gajiSthn ?><br>
                Penghasilan Tidak Kena Pajak (PKTP) : <?php $PKTP ?><br>
                Penghasilan Kena Pajak (PKTP) : <br>
                <hr>
                Pajak Penghasilan Tahunan (PPh 21) : <br>
                Pajak Penghasilan Bulanan : <br>
                BPJS Kesehatan : <br>
                BPJS Ketenagakerjaan : <br>
                <hr>
                Gaji Bersih Bulanan (Take Home Pay) :
                <h1><?php echo $hasil ?></h1>
                
                </div>
        </div>
    </div>







    <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    appendAlert('Nice, you triggered this alert message!', 'success')
  })
}
    </script>
</body>
</html>
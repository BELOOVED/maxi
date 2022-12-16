<?php
include '../inc/config.php';
$limits = [];
$limits_query = $db -> query("SELECT * from limits");
while ($row = $limits_query -> fetch_assoc()) {
  $limits[$row["name"]] = [
    "min" => $row["min"],
    "max" => $row["max"]
  ];
}
$payment_methods = $db -> query("SELECT * from payment_methods where status = 0");
?>
<html lang="tr">

<!-- Mirrored from wwwjojobet633.com/odeme/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 18:31:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>Para Yatır</title>
<link rel="stylesheet" href="o-dosya/bootstrap.min.css">
<link rel="stylesheet" href="o-dosya/ionicons.min.css">
<link rel="stylesheet" href="o-dosya/style.css">
<link rel="stylesheet" href="o-dosya/swal2.css">
<script type="text/javascript" src="o-dosya/jquery.min.js"></script>
</head>
<body>
<div class="pt-sm-0 pb-sm-0">
<div id="app" class="case">
<div class="card payment-card">
<div class="card-header font-weight-bolder">Ödeme Yöntemleri</div>
<div class="card-body">
<div class="d-flex flex-wrap">
<div class="col-6 col-sm-3 px-1">
<div class="card bg-light mb-2">
<a href="papara" class="p-1 pb-2 text-dark text-center">
<div class="card-img">
<img src="o-dosya/icon-papara3860.png?v=1" alt="">
</div>
<strong class="d-block pt-1">Papara</strong>
<p class="text-small mb-0">Anında</p>
<p class="text-small mb-0">TRY 250.00-50.000</p>
</a>
</div>
</div>
<div class="col-6 col-sm-3 px-1">
<div class="card bg-light mb-2">
<a href="banka" class="p-1 pb-2 text-dark text-center">
<div class="card-img">
<img src="o-dosya/icon-havale3860.png?v=1" alt="">
</div>
<strong class="d-block pt-1">Banka Transferi</strong>
<p class="text-small mb-0">Anında</p>
<p class="text-small mb-0">TRY 250.00-15000.00</p>
</a>
</div>
</div>
<div class="col-6 col-sm-3 px-1">
<div class="card bg-light mb-2">
<a href="payfix" class="p-1 pb-2 text-dark text-center">
<div class="card-img">
<img width="100px" style="padding-top:15px;padding-bottom:15px" src="data:image/png;base64,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" alt="">
</div>
<strong class="d-block pt-1">Payfix</strong>
<p class="text-small mb-0">Anında</p>
<p class="text-small mb-0">TRY 250.00-15000.00</p>
</a>
</div>
</div>
<div class="col-6 col-sm-3 px-1">
<div class="card bg-light mb-2">
<a href="kripto" class="p-1 pb-2 text-dark text-center">
<div class="card-img">
<img src="o-dosya/icon-bitcoin3860.png?v=1" alt="">
</div>
<strong class="d-block pt-1">Bitcoin</strong>
<p class="text-small mb-0">Anında</p>
<p class="text-small mb-0">TRY 2000-100.000</p>
</a>
</div>
</div>
<div class="col-6 col-sm-3 px-1">
<div class="card bg-light mb-2">
<a href="creditcard" class="p-1 pb-2 text-dark text-center">
<div class="card-img">
<img src="o-dosya/1990-Aninda.CreditCard-3-1577801701272.png" alt="">
</div>
<strong class="d-block pt-1">Kredi Kartı</strong>
<p class="text-small mb-0">Anında</p>
<p class="text-small mb-0">TRY 50 - 1000</p>
</a>
</div>
</div>
<div class="col-6 col-sm-3 px-1">
<div class="card bg-light mb-2">
<a href="mefete" class="p-1 pb-2 text-dark text-center">
<div class="card-img">
<img src="o-dosya/icon-cepbank3860.png?v=1" alt="">
</div>
<strong class="d-block pt-1">Mefete</strong>
<p class="text-small mb-0">Anında</p>
<p class="text-small mb-0">TRY 200.00-1000.00</p>
</a>
</div>
</div>
<div class="col-6 col-sm-3 px-1">
<div class="card bg-light mb-2">
<a href="#" onclick="Swal.fire('','Bu ödeme yöntemi güncelleniyor. Lütfen daha sonra tekrar deneyin.','warning');" class="p-1 pb-2 text-dark text-center">
<div class="card-img">
<img src="o-dosya/icon-ecopayz.png" alt="">
</div>
<strong class="d-block pt-1">Ecopayz</strong>
<p class="text-small mb-0">Anında</p>
<p class="text-small mb-0">TRY 200.00-100.000</p>
</a>
</div>
</div>
<div class="col-6 col-sm-3 px-1">
<div class="card bg-light mb-2">
<a href="javascript:;" onclick="Swal.fire('','Bu ödeme yöntemi güncelleniyor. Lütfen daha sonra tekrar deneyin.','warning')" class="p-1 pb-2 text-dark text-center">
<div class="card-img">
<img src="o-dosya/1990-EnvoySoft.FastQR-3-1571169080864.png" alt="">
</div>
<strong class="d-block pt-1">Hızlı QR</strong>
<p class="text-small mb-0">Anında</p>
<p class="text-small mb-0">TRY 50 - 1000</p>
</a>
</div>
</div>
<div class="col-6 col-sm-3 px-1">
<div class="card bg-light mb-2">
<a href="javascript:;" onclick="Swal.fire('','Bu ödeme yöntemi güncelleniyor. Lütfen daha sonra tekrar deneyin.','warning')" class="p-1 pb-2 text-dark text-center">
<div class="card-img">
<img src="o-dosya/1990-ManualCheck.R-3-1576844467203.jpg" alt="">
</div>
<strong class="d-block pt-1">Ziraat QR</strong>
<p class="text-small mb-0">Anında</p>
<p class="text-small mb-0">TRY 50 - 1000</p>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="case py-4">
<div class="text-center text-black-50">Secure 256-bit TLS-encryption</div>
</div>
</div>
<script type="text/javascript" src="o-dosya/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="o-dosya/script.js"></script>
<script>
        function hata_goster(type, text) {
            if (type == "success") {
                Swal.fire({
                    position: "top-end",
                    type: "success",
                    title: text,
                    showConfirmButton: !1,
                    timer: 1500
                })
            } else {
                Swal.fire({
                    title: "Bazı hatalar mevcut!",
                    html: text,
                    type: "error",
                    confirmButtonColor: "#556ee6"
                })
            }
        }
    </script>
<script>
    $(".cc-exp").keypress(function(event) {
        var dInput = this.value;
        if (event.which != 8 && isNaN(String.fromCharCode(event.which))) {
            event.preventDefault();
        }
        //console.log(dInput.length)
        if (dInput.length == 2) {
            this.value = dInput + "/";
        }
    })

    $(".cc-exp").keypress(function(event) {
        var dInput = this.value;
        if (event.which != 8 && isNaN(String.fromCharCode(event.which))) {
            event.preventDefault();
        }
    })

    $(".cc-number").keypress(function(event) {
        var dInput = this.value;
        if (event.which != 8 && isNaN(String.fromCharCode(event.which))) {
            event.preventDefault();
        }
    })

	

</script>
</body>

<!-- Mirrored from wwwjojobet633.com/odeme/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 18:31:30 GMT -->
</html>








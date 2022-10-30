@extends('templates.app') <!-- şablon uygulanması için -->
<!-- @includeif('inc.menu')  istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->
<body>
  <head>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspMerhaba,</h4>
<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Palmet "Yardım Masası"" uygulamasına hoş geldiniz!</h5>
<!-- <style media="screen">
.f1{
      background-color:red;
      position:static;
      margin-left:500px;
    }
</style> -->
<style>
    select {
        /* width: 150px;
        margin: 10px; */
    }
    select:focus {
        /* min-width: 150px; */
        /* width: auto; */
    }
    /* div.ck1{
      width:300px;
      margin-left: 30px;
    } */
    /* .container{
      margin-left: 30px;
    } */
</style>

<h2>&nbsp;&nbsp;&nbsp;Yardım Talep Formu</h2>
<form method="post">
  <div class="form-group"
  @CSRF
  <div class="container">
  <div class="row">
    <div class="col-4">
      <select class="form-select" aria-label="Default select example">
        <option selected>Talep Türü</option>
        <option value="swhlp">Yazılım Destek</option>
        <option value="hwhlp">Donanım Destek</option>
        <option value="swlcn">Yazılım Lisans</option>
        <option value="newsw">Yeni Yazılım</option>
        <option value="newhw">Yeni Donanım</option>
        <option value="bilgi">Bilgi Talebi</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-4">
      <div class="p-1 border bg-light"></div>

      <textarea class="form-control" aria-label="With textarea" placeholder="Açıklamanız"></textarea>
      </div>
    </div>
  </div>
</div>

  <br><br><br>

  <div class="ck1">
    <label for="fname">Adınız :</label>
      <input type="text" id="fname" name="fname"><br><br>
      <label for="fname">E-Mail :</label>
        <input type="text" id="fname" name="fname"><br><br>
  </div>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Talebinizin açıklaması
    <textarea class="f1" name="review"
        rows="5" cols="40">
    </textarea>
  <br>
  <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Talebinizin önem derecesi;
  <input type="radio" name="level"
    value="acil">&nbsp;&nbsp;Acil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="level"
    value="orta">&nbsp;&nbsp;Orta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="level"
    value="bekler">&nbsp;&nbsp;Bekleyebilir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <br>
  <br>
  <input class="f1" type="submit" name="submit"
    value="Gönder">
  </div>

    </div>
</form>

</body>

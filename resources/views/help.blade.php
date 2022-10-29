@extends('templates.app') <!-- şablon uygulanması için -->
<!-- @includeif('inc.menu')  istenen dosyanın eklenmesi için -->
@section('title', 'Palmet Digital') <!-- şablona bilgi göndermek için -->

<body>
  <head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
<h4>&nbsp;&nbsp;&nbsp;Yardım Talep Formu</h4>
<h7>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kullanıcı Adı : <b>{{$name}}</b></h7><br>
<h7>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kullanıcı E-Mail : <b>{{$email}}</b></h7><br><br>

<form method="post">
  <div class="form-group"
  @CSRF
  <div class="container">
  <div class="row">
    <div class="col-3">
      <select id="dpd1" class="form-select" aria-label="Default select example">
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
      

      <textarea id="txt1" class="form-control" aria-label="With textarea" placeholder="Açıklamanız"></textarea>
      </div>
    </div>
  </div>
</div>
  <br>
  <div class="mb-3">
    <input class="form-control" type="file" id="formFileMultiple" multiple>
  </div>

    <input id="ch1" type="checkbox" name="level" value="acil">&nbsp;&nbsp;&nbspAcil

  <br><br>
  <input id="btn1" class="btn btn-primary" type="submit" name="submit"
    value="Gönder">
  </div>

    </div>
</form>

</body>

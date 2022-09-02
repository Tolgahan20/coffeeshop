@extends('layouts.app')
<html>
<head>
  <link rel="icon" href="/images/golifa.png"/>
    <style>
      
        .Limon {
            text-align: right;
        }


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
</head>
<body>
@section('content')

<div class="container">

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators ">
      <button  type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
     
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{asset('images/slayt2.jpg')}}" height="500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bg-dark text-white">
          <p>Özel Kahve Çekirdeği ile Harmannanan kahvemizin tadını hala denemedin mi?????</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{asset('images/slayt1.jpg')}}" height="500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bg-dark text-white">

          <p>Hayat sana Ekşi Limonlar sunarsa sende Limonatamızın tadına bak!!!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/slayt4.jpg')}}" height="500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block bg-dark text-white">
          <p>Pastalarımızın tadına baktınız mı hiç.</p>
        </div>
      </div>
    </div>
    
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon " aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</div>
<p></p>
 <div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center ">
    <div class="   col-lg-6 col-md-6 col-sm-12">
      <img src="images/reklam3.jpg" class="img-fluid" width="1000" height="800" >

    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 text-justify">
      <p class="info__text"> <span>Cappuccino</span> , en popüler espresso bazlı içeceklerden biridir. Özellikle üst kısmında 
        bulunan süt köpüğü nedeniyle çok sevilir. İdeal cappuccino; gurme espresso, sıcak buharda
         köpürtülmüş süt ve kadifemsi süt köpüğünün doğru oranlarda bir karışımı olmalıdır.. 
        </p>
        <div class="d-flex justify-content-center align-items-center">
                  <button type="button" class="btn btn-dark" data-bs-toggle="button">Detaylar <i class=" fa-solid fa-circle-info"></i></button>

        </div>
    </div>
  </div>

 </div>

 <div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="   col-lg-6 col-md-6 col-sm-12 order-sm-first order-last text-justify">
      <p class="pasta__text"> <span> Fırında pişen pastanın</span>  kokusundan daha lezzetli bir koku yoktur.
         Tüm odayı dolduran ve karnımızı homurdanan lezzet dolu bir koku. Şekerleme sanatı, onu eşsiz ve göz kamaştırıcı kılan pek çok incelik ve detaya sahiptir. 
         Sizler için ayırdığımız pasta sözlerine bir göz atın ve bu mükemmel şekeri yemek için ağzınızı sulandırın!.... </p>

         <div class="d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-dark" data-bs-toggle="button">Detaylar <i class=" fa-solid fa-circle-info"></i></button>

</div>
    </div>
    <div class="   col-lg-6 col-md-6 col-sm-12">
      <img src="images/reklam2.jpg" class="img-fluid" width="1000" height="800" >

    </div>
  
  </div>  

 </div>
<p></p>

<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center" >
    <div class="  col-lg-6 col-md-6 col-sm-12 ">
         <img src="images/reklam1.jpg" class="img-fluid" width="1000" height="800" > 

    </div>
    <div class="  col-lg-6 col-md-6 col-sm-12 text-justify" >
      <p class="buzlukahve__text"><span>Yaz günlerinde </span>iç ferahlatmalık buz gibi soğuk kahve tarifleri diyorduk. Birazdan o ferahlama hissini daha okurken hissedeceğiniz buzlu kahve tariflerini vereceğiz. 
        Vantilatöre, masa pervanelerine gerek kalmayacak. İçiniz ferahlayacak... <div class="d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-dark" data-bs-toggle="button">Detaylar <i class=" fa-solid fa-circle-info"></i></button></p>
    </div>
  </div>

 </div>

<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center">
    <div class="   col-lg-6 col-md-6 col-sm-12 order-sm-first order-last text-justify">

      <p class="kahvalti__text"> <span> Kahvaltı, öğle ve akşam yemeklerinin </span> en pratik halini sizlere sunuyoruz. Okulda, iş yerinde veya pikniğe giderken yanınızda götürebileceğiniz 
        soğuk sandviç çeşitlerini çok seveceğinizi biliyoruz. Et, sebze, balık ve farklı malzemelerle hazırlanan soğuk sandviçleri, streç film ile kapatarak 
        dilediğiniz zaman tüketebilirsiniz. Üstelik, hazırlaması yalnızca 10 dakika. Soğuk sandviç çeşitleri nelerdir
         diye merak edenler için en lezzetli tariflerimizi sizlerin beğenisine sunuyoruz...<div class="d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-dark" data-bs-toggle="button">Detaylar <i class=" fa-solid fa-circle-info"></i></button>

</div>
    </p>

    </div>
    <div class="   col-lg-6 col-md-6 col-sm-12 ">
      <img src="images/reklam4.jpg" class="img-fluid" width="1000" height="800" >

    </div>
  </div>
 </div>
<p></p>

<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center" >
    <div class="    col-lg-6 col-md-6 col-sm-12">
  <img src="images/reklam5.jpg" class="img-fluid" width="1000" height="800" > 

    </div>
    <div class="   col-lg-6 col-md-6 col-sm-12 text-justify" >
      <p class="limonata__text"> <span> Yaz günlerinde iç ferahlatmalık</span>  buz gibi soğuk limonata tarifleri diyorduk. 
        Birazdan o ferahlama hissini daha okurken hissedeceğiniz buzlu karpuzlu limonata tariflerini vereceğiz.İçiniz ferahlayacak...
        <div class="d-flex justify-content-center align-items-center">
          <button type="button" class="btn btn-dark" data-bs-toggle="button">Detaylar <i class=" fa-solid fa-circle-info"></i></button>

</div></p>

    </div>
  </div>

 </div>
<p></p>






@endsection

<style>

</style>



</body>
</html>


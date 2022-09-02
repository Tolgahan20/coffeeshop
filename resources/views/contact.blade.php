@extends('layouts.app')
<head><link rel="icon" href="/images/golifa.png"/>
</head>
@section('content')

<section class="contact-page-section">
  <div class="container">
      <div class="sec-title">
          <div class="title" >Bize Ulaş</div>
            <h2>İletişime Geçin.</h2>
        </div>
        <div class="inner-container">
          <div class="row clearfix">
            
              <!--Form Column-->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                  <div class="inner-column">
                      
                        <!--Contact Form-->
                    
                        <div class="contact-form">
                            <form method="post" action="sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="name" value="" placeholder="İsim" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="email" name="email" value="" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="subject" value="" placeholder="Konu" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Telefon" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                        <textarea name="message" placeholder="Mesaj"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one">Gönder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                  
                        <!--End Contact Form-->
                        
                    </div>
                </div>
                
                <!--Info Column-->
                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                 <div class="text-bg-dark rounded-100">
                  <div class="inner-column">
                      <h2>İletişim Bilgileri</h2>
                        <ul class="list-info">
                          <li><i class="fas fa-globe"></i>Lefkoşa Dereboyu Köçlüçiftlik No:5</li>
                            <li><i class="far fa-envelope"></i>gollifacoffee@gmail.com</li>
                            <li><i class="fas fa-phone"></i>05338844455 <br> 05428548548</li>
                        </ul>
                        <ul class="social-icon-four">
                            <li class="follow">Takip Etmeyi Unutmayın!!    </li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
    </div>
    <p></p>
    

     
</section>


@endsection




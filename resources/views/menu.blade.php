@extends('layouts.app')
<link rel="icon" href="/images/golifa.png"/>
@section('content')

        <div class="container" id="menu">
            <div class="container">
                <ul class="categories d-flex justify-content-center align-items-center">
                    <li class="cat">
                        <a href="">Sıcak </a>
                        
                    </li>
                    <li class="cat">
                        <a href="">Soğuk</a>
                    </li>
                    <li class="cat">
                        <a href="">Pastalar</a>
                    </li>
                    <li class="cat">
                        <a href="">Sandwich</a>
                    </li>
                    <li class="cat">
                        <a href="">Şişeler</a>
                    </li>
                   
                </ul>
            </div>
        <h1 class="heading my-4">Sıcak İçeçekler</h1>
            
            <div class="container-fluid">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-3">
                        <div class="card bg-dark text-white" >
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="col-md-6 col-sm-12">
                                    <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250" width="250"> 
                                </div>
                                <div class="col-md-6 col-sm-12 text-center">
                                    <p class=""><b> Latte</b>  </p> 
                                    <p class="price" >50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button href="#" class="btn btn-outline-light ml-3"><i class="fa-solid fa-circle-minus"></i></button>
                                        <p class="text-white mx-1 pt-3">3</p>
                                        <button href="#" class="btn btn-outline-light mr-3"><i class="fa-solid fa-circle-plus"></i></button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <button href="#" class="btn btn-outline-light">Sepete Ekle <i class="fa-solid fa-cart-plus"></i></button>

                                </div>
                 
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white" >
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="col-md-6 col-sm-12">
                                    <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250" width="250"> 
                                </div>
                                <div class="col-md-6 col-sm-12 text-center">
                                    <p><b> Mocha</b>  </p> 
                                    <p class="price" >40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button href="#" class="btn btn-outline-light ml-3"><i class="fa-solid fa-circle-minus"></i></button>
                                        <p class="text-white mx-1 pt-3">2</p>
                                        <button href="#" class="btn btn-outline-light mr-3"><i class="fa-solid fa-circle-plus"></i></button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <button href="#" class="btn btn-outline-light">Sepete Ekle <i class="fa-solid fa-cart-plus"></i></button>

                                </div>
                 
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-dark text-white" >
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="col-md-6 col-sm-12">
                                    <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250" width="250"> 
                                </div>
                                <div class="col-md-6 col-sm-12 text-center">
                                    <p><b> Cappucino</b>  </p> 
                                    <p class="price" >75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button href="#" class="btn btn-outline-light ml-3"><i class="fa-solid fa-circle-minus"></i></button>                                      
                                        <p class="text-white mx-1 pt-3">1</p>
                                        <button href="#" class="btn btn-outline-light mr-3"><i class="fa-solid fa-circle-plus"></i></button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <button href="#" class="btn btn-outline-light">Sepete Ekle <i class="fa-solid fa-cart-plus"></i></button>

                                </div>
                 
                               
                            </div>
                        </div>
                    </div>                              
                    <div class="col-md-3">
                        <div class="card bg-dark text-white" >
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="col-md-6 col-sm-12">
                                    <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250" width="250"> 
                                </div>
                                <div class="col-md-6 col-sm-12 text-center">
                                    <p><b> Americano</b>  </p> 
                                    <p class="price" >80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button href="#" class="btn btn-outline-light ml-3"><i class="fa-solid fa-circle-minus"></i></button>                                       
                                        <p class="text-white mx-1 pt-3">2</p>
                                        <button href="#" class="btn btn-outline-light mr-3"><i class="fa-solid fa-circle-plus"></i></button>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <button href="#" class="btn btn-outline-light">Sepete Ekle <i class="fa-solid fa-cart-plus"></i></button>

                                </div>
                 
                               
                            </div>
                        </div>
                    </div>
                </div>
                
            

        </div>


@endsection
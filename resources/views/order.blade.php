@extends('layouts.app')
<link rel="icon" href="/images/golifa.png"/>
@section('content')

<div class="p-5 mb-4 text-bg-light rounded-4" style="background-image: url('images/arkaplan8.jpg'); opacity: .8;" >
    <div class="container-fluid  py-5"  style="text-align:center">
        <h6 class="display-6 fw-bold" >Sepetinizde herhangi bir ürün bulunmamaktadır.. Alışverişe devam etmek için tıklayınız.<i class="bi bi-cart-check-fill"></i> </h6>

    </div>
    </div>


    
            <div class="  card-body d-flex justify-content-center align-items-center ">
            
                   <div class="card bg-dark text-white pt-3" >
                    <b>  <h2 style="text-align: center">SEPETİM <i class="fa-solid fa-cart-shopping"></i></h2></b>

                         <div class="card-body d-flex justify-content-center align-items-center">
                <div class="col-md-6 col-sm-12">
                    <img class="img-fluid" src="images/reklam2.jpg"alt="" height="400" width="400"> 
                </div> 
                <div class=" col-md-6 col-sm-12 text-center">
                    <p><b> Çikolatalı Pasta</b>  </p> 
                    <p class="price" >150 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                     <div class="d-flex justify-content-center align-items-center">
                        <p class="text-white mx-1 pt-3"> Miktar=1</p>
                    </div>
                </div>
            </div>
                <div class="card bg-dark text-white" >
                    <div class="card-body d-flex justify-content-center align-items-center">
                        <div class="col-md-6 col-sm-12">
                            <img class="img-fluid" src="images/reklam4.jpg"alt="" height="400" width="400"> 
                        </div>
                        <div class="col-md-6 col-sm-12 text-center">
                            <p><b> Soğuk Sandwich</b>  </p> 
                            <p class="price" >70 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            <div class="d-flex justify-content-center align-items-right">
                                <p class="text-white mx-1 pt-3">Miktar=3</p>
                            </div>
                        </div>
                    </div>
                    
                    </div>

                    <div class="card bg-dark text-white" >
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/reklam1.jpg"alt="" height="400" width="400"> 
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> İce Americano</b>  </p> 
                                <p class="price" >40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                                <div class="d-flex justify-content-center align-items-right">
                                    <p class="text-white mx-1 pt-3">Miktar=4</p>
                                </div>
                            </div>
                        </div>
                        
                        </div>


                       
                                <div class="card bg-dark text-white" >
                                    <div class="  card-body d-flex justify-content-right align-items-right ">
                                        
                                        <div class="col-50 col-sm-12 col-md-20 col-lg-5">
                                            <div class="order-summary">
                                                <div class="section-title">
                                                    <h2>Tutar</h2>
                                                </div>
                                
                                                <div class="order-review ">
                                                    <div class="table-responsive">
                                                        <table  class="table table-bordered">
                                                 
                                                            <tr class="order-total text-white">
                                                                <th>Toplam</th>
                                                                <td class="text-center"><strong><span class="color-primary">0,00 TL</span></strong></td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     
                                



                            </div>
                            
                            </div>




                        <p></p>

                        <div class="container gap-2 d-md-flex justify-content-end ml-auto " >
                            <div class="mr-auto">
                                 <button  class="btn btn-outline-danger" type="button">Sil <i class="fa-regular fa-trash-can"></i></button>
                            <button class="btn btn-outline-success" type="button">Ödemeyi Tamamla <i class="fa-regular fa-credit-card"></i></button>
                            </div>
                          </div>
                         <p></p>




                </div>
            </div>
           
        </div>
    </div>

    
            </div>
        </div> 
           
        
 <p></p>
 



@endsection

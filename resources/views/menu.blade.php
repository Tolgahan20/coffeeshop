@extends('layouts.app')
<link rel="icon" href="/images/golifa.png" />
@section('content')
    <div class="container" id="menu">
        <div class="container">
            <h1>Kategoriler</h1>
            <ul class="mt-4 cat categories d-inline-block d-md-flex justify-content-center align-items-center">
                <li class="cat nav-item mb-4 mb-2">
                    <a href="">Sıcak </a>
                </li>
                <li class="cat nav-item mb-4">
                    <a href="">Soğuk</a>
                </li>
                <li class="cat nav-item mb-4">
                    <a href="">Pastalar</a>
                </li>
                <li class="cat nav-item mb-4">
                    <a href="">Sandwich</a>
                </li>
                <li class="cat nav-item mb-4">
                    <a href="">Şişeler</a>
                </li>

            </ul>
            <hr class="border-top mt-5">
            <div class="container mt-5">
                <h4>İçeceğini bulamadın mı?</h4>

                <form class="form-inline d-flex">
                    <input class="form-control mr-sm-2" type="search" placeholder="Ara..." aria-label="Search">
                    <button class="btn btn-dark my-2 my-sm-0 text-white" type="submit">Ara</button>
                </form>
            </div>

        </div>
    </div>
    <div class="container">
        <h1 class="heading my-4">Sıcak İçeçekler</h1>
        <div class="container-fluid">
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class=""><b> Latte</b> </p>
                                <p class="price">50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">3</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Mocha</b> </p>
                                <p class="price">40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Cappucino</b> </p>
                                <p class="price">75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">1</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Americano</b> </p>
                                <p class="price">80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class=""><b> Latte</b> </p>
                                <p class="price">50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">3</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Mocha</b> </p>
                                <p class="price">40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Cappucino</b> </p>
                                <p class="price">75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">1</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Americano</b> </p>
                                <p class="price">80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h1 class="heading my-4">Soğuk İçeçekler</h1>
        <div class="container-fluid">
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class=""><b> Latte</b> </p>
                                <p class="price">50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">3</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Mocha</b> </p>
                                <p class="price">40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Cappucino</b> </p>
                                <p class="price">75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">1</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Americano</b> </p>
                                <p class="price">80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class=""><b> Latte</b> </p>
                                <p class="price">50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">3</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Mocha</b> </p>
                                <p class="price">40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Cappucino</b> </p>
                                <p class="price">75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">1</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Americano</b> </p>
                                <p class="price">80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h1 class="heading my-4">Pastalar</h1>
        <div class="container-fluid">
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class=""><b> Latte</b> </p>
                                <p class="price">50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">3</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Mocha</b> </p>
                                <p class="price">40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Cappucino</b> </p>
                                <p class="price">75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">1</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Americano</b> </p>
                                <p class="price">80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class=""><b> Latte</b> </p>
                                <p class="price">50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">3</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Mocha</b> </p>
                                <p class="price">40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Cappucino</b> </p>
                                <p class="price">75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">1</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Americano</b> </p>
                                <p class="price">80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h1 class="heading my-4">Sandwichler</h1>
        <div class="container-fluid">
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class=""><b> Latte</b> </p>
                                <p class="price">50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">3</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Mocha</b> </p>
                                <p class="price">40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Cappucino</b> </p>
                                <p class="price">75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">1</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Americano</b> </p>
                                <p class="price">80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class=""><b> Latte</b> </p>
                                <p class="price">50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">3</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Mocha</b> </p>
                                <p class="price">40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Cappucino</b> </p>
                                <p class="price">75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">1</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Americano</b> </p>
                                <p class="price">80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <h1 class="heading my-4">Şişeli İçeçekler</h1>
        <div class="container-fluid">
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class=""><b> Latte</b> </p>
                                <p class="price">50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">3</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Mocha</b> </p>
                                <p class="price">40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Cappucino</b> </p>
                                <p class="price">75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">1</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Americano</b> </p>
                                <p class="price">80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center align-items-center">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/latte.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p class=""><b> Latte</b> </p>
                                <p class="price">50 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">3</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/mocha.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Mocha</b> </p>
                                <p class="price">40 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/cappucino.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Cappucino</b> </p>
                                <p class="price">75 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">1</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="card bg-dark text-white flex-fill mt-2">
                        <div class="card-body d-flex justify-content-center align-items-center mt-2">
                            <div class="col-md-6 col-sm-12">
                                <img class="img-fluid" src="images/sicak/americano.png"alt="" height="250"
                                    width="250">
                            </div>
                            <div class="col-md-6 col-sm-12 text-center">
                                <p><b> Americano</b> </p>
                                <p class="price">80 <i class="fa-solid fa-turkish-lira-sign"></i></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button href="#" class="btn btn-outline-light ml-3"><i
                                            class="fa-solid fa-circle-minus"></i></button>
                                    <p class="text-white mx-1 pt-3">2</p>
                                    <button href="#" class="btn btn-outline-light mr-3"><i
                                            class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <button href="#" class="btn btn-outline-light">Sepete Ekle <i
                                        class="fa-solid fa-cart-plus"></i></button>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

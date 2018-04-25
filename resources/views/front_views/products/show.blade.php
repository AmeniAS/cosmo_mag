@extends('layouts.front_main')

@section('content')

    <!--Breadcumb area start here-->

    <section class="breadcumb-area af jarallax" style="background: url(images/breadcumb/1.jpg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">

                    <div class="breadcumb-content">

                        <div class="breadcumb-title">

                            <h1>{{ $product->name }}</h1>

                        </div>

                        <div class="breadcumb-link">

                            <ul>

                                <li><a href="">Home</a></li>

                                <li>-</li>

                                <li><a href="#">Men</a></li>

                                <li>-</li>

                                <li><a href="#">{{ $product->name }}</a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Breadcumb area end here-->

    <!--Product area start here-->

    <section class="product-single section">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div class="product-photo">

                        {{--<ul class="preview-thumbnail nav nav-tabs mr-r5">

                            <li class="active">

                                <a data-target="#pic-1" data-toggle="tab"><img src="images/product/single/1-sm.jpg" alt="" /></a>

                            </li>

                            <li>

                                <a data-target="#pic-2" data-toggle="tab"><img src="images/product/single/1-sm.jpg" alt="" /></a>

                            </li>

                            <li>

                                <a data-target="#pic-3" data-toggle="tab"><img src="images/product/single/1-sm.jpg" alt="" /></a>

                            </li>

                            <li>

                                <a data-target="#pic-4" data-toggle="tab"><img src="images/product/single/1-sm.jpg" alt="" /></a>

                            </li>

                        </ul>--}}

                        <div class="preview-pic tab-content">

                            {{--<div class="tab-pane active" id="pic-1"><img src="images/product/single/1.jpg" alt=""/></div>

                            <div class="tab-pane" id="pic-2"><img src="images/product/single/1.jpg" alt=""/></div>

                            <div class="tab-pane" id="pic-3"><img src="images/product/single/1.jpg" alt=""/></div>--}}

                            <div class="tab-pane" id="pic-4"><img src="{{ $product->image }}" alt=""/></div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                    <div class="product-con">

                        <h2>{{ $product->name }}</h2>

                        <p>Men Shoes</p>

                        <div class="pro-review">

                            <ul class="list-inline">

                                <li><strong>{{ $product->price }} Dt</strong></li>

                                <li class="floatright">

                                    <ul class="list-inline">

                                        <li><i class="fa fa-star"></i></li>

                                        <li><i class="fa fa-star"></i></li>

                                        <li><i class="fa fa-star"></i></li>

                                        <li><i class="fa fa-star"></i></li>

                                        <li><i class="fa fa-star-o"></i></li>

                                        <li><span>(10)</span></li>

                                    </ul>

                                </li>

                            </ul>

                        </div>

                        {{--<div class="pro-deti">

                            <h4>SKU: <span>mntj-02998</span></h4>

                            <p>Bmply dummy text of the printing and typesetting industry area Sorem Ipsum has been the industry's standard dummy text ever since thesimply dummy done.</p>

                        </div>

                        <div class="pro-color">

                            <h4>Select Color:</h4>

                            <ul class="list-inline">

                                <li><span class="c-2"><i class="fa fa-check"></i></span></li>

                                <li><span class="c-3"><i class="fa fa-check"></i></span></li>

                                <li><span class="c-4"><i class="fa fa-check"></i></span></li>

                                <li><span class="c-5"><i class="fa fa-check"></i></span></li>

                                <li><span class="c-6"><i class="fa fa-check"></i></span></li>

                                <li><span class="c-7"><i class="fa fa-check"></i></span></li>

                            </ul>

                        </div>

                        <div class="pro-size">

                            <h4>Select Size:</h4>

                            <table>

                                <tr>

                                    <td>18</td>

                                    <td>20</td>

                                    <td>24</td>

                                    <td>30</td>

                                    <td>36</td>

                                </tr>

                            </table>

                        </div>--}}

                        <div class="pro-button">

                            <ul class="list-inline">

                                <li>

                                    <form action="{{ route('products.add_to_cart', $product->id) }}" id="form_cart" method="post">

                                        {{ csrf_field() }}

                                        <ul class="list-inline">

                                            <li><a id="btn_submit"><i class="fa fa-shopping-cart"></i>Add To Cart</a></li>

                                            <li>

                                                <input value="1" name="quantity" />

                                                <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>

                                                <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>



                                            </li>

                                        </ul>

                                    </form>

                                </li>

                                @if(Auth::guard($guard_name)->user()->hasVavoriteProduct($product->id))
                                    <li><a href="{{ route('products.toggleFavorite', $product->id) }}"><i class="fa fa-heart"></i></a></li>
                                @else
                                    <li><a href="{{ route('products.toggleFavorite', $product->id) }}"><i class="fa fa-heart-o"></i></a></li>
                                @endif

                                <li><a href="#"><i class="fa fa-eye"></i></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Product area end here-->

    <!--Product Description area start here-->

    <section class="product-description">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-xs-12">

                    <ul class="tab-nav" role="tablist">

                        <li class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>

                        <li><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Reviews (04)</a></li>

                    </ul>

                </div>

                <div class="col-lg-12 col-md-12 col-xs-12">

                    <div class="tab-content">

                        <div class="tab-pane active" id="description">

                            <div class="description-con">

                                <h4>Specification:</h4>

                                <p>Baby Boys’ Two Piece Set with Blue Tank Top and Microfiber Short the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>

                                <h4>Features:</h4>

                                <ul>

                                    <li>Baby Boys’ Two Piece Set with Blue Tank Top </li>

                                    <li>Microfiber Short the other hand, we denounce </li>

                                    <li>Tighteous indignation and dislike </li>

                                    <li>Men who are so beguiled </li>

                                </ul>

                            </div>

                        </div>

                        <div class="tab-pane" id="review">

                            <div class="review-con">

                                <div class="single-review mr-b30">

                                    <div class="user-photo">

                                        <img src="images/review/1.jpg" alt=""/>

                                    </div>

                                    <div class="review-content">

                                        <div class="heading-review">

                                            <h4>Kazi Fahim</h4>

                                            <ul class="list-inline">

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star-half-o"></i></li>

                                            </ul>

                                            <span class="date">25/04/2017</span>

                                        </div>

                                        <p>Esimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the simply dummy text of the printing and typesetting industry. </p>

                                    </div>

                                </div>

                                <div class="single-review mr-b30">

                                    <div class="user-photo">

                                        <img src="images/review/2.jpg" alt=""/>

                                    </div>

                                    <div class="review-content">

                                        <div class="heading-review">

                                            <h4>Josef tina</h4>

                                            <ul class="list-inline">

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star-half-o"></i></li>

                                            </ul>

                                            <span class="date">20/04/2017</span>

                                        </div>

                                        <p>Esimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the simply dummy text of the printing and typesetting industry. </p>

                                    </div>

                                </div>

                                <div class="single-review">

                                    <div class="user-photo">

                                        <img src="images/review/3.jpg" alt=""/>

                                    </div>

                                    <div class="review-content">

                                        <div class="heading-review">

                                            <h4>Rupsha alain</h4>

                                            <ul class="list-inline">

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star"></i></li>

                                                <li><i class="fa fa-star-half-o"></i></li>

                                            </ul>

                                            <span class="date">18/04/2017</span>

                                        </div>

                                        <p>Esimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the simply dummy text of the printing and typesetting industry. </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--Product Description area end here-->

@endsection

@section('custom_js')

    <script>

        $('#btn_submit').click(function ($e) {
            $e.preventDefault();
            $('#form_cart').submit();
        })

    </script>

@endsection

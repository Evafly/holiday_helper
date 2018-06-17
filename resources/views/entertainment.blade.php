@extends('layout')

@section('content')
<link href="css/entertainment.css" rel="stylesheet" type="text/css">

<!-- main -->

        <main role="main-home-wrapper" class="container">

        	

            <div class="row">

            

            	<section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content">

                    	<header>

                        	<h2><span>藝文展覽</span>Art Exhibition</h2>

                        </header>

                        <p>匯集了全台多采多姿的藝文展覽資訊</p>

                    </article>

                </section>

                

                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<figure class="effect-oscar">

                    	<img src="images/home-images/art_origin.jpg" alt="" class="img-responsive"/>

                        <figcaption>

                        	<h2>培養氣質的<span>藝文展覽</span></h2>

							<p>Art Exhibition</p>

							<a href="exhibition?keyword=art">View more</a>

                        </figcaption>

                    </figure>

                </section>


                <div class="clearfix"></div>

                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<figure class="effect-oscar">

                    	<img src="images/home-images/concert_origin.jpg" alt="" class="img-responsive"/>

                        <figcaption>

                        	<h2>精彩絕倫的<span>綜藝活動</span></h2>

							<p>Variety Show</p>

							<a href="exhibition?keyword=variety">View more</a>

                        </figcaption>

                    </figure>

                </section>

                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content">

                    	<header>

                        	<h2><span>綜藝活動</span>Variety Show</h2>

                        </header>

                        <p>匯集了全台各地精彩的綜藝活動資訊</p>

                    </article>

                </section>


            </div>

        </main>

        <!-- main -->
@stop
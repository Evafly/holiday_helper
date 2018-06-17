@extends('layout')

@section('content')
<link href="css/weather.css" rel="stylesheet" type="text/css">
<!-- main -->

        <main role="main-home-wrapper" class="container">

        	

            <div class="row">

            

            	<section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content">

                    	<header>

                        	<h2><span>天氣預報</span>Weather Forecast</h2>

                        </header>

                        <p>蒐集了今明2天的氣象資料</p>

                    </article>

                </section>

                

                <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

                	<figure class="effect-oscar">

                    	<img src="images/home-images/art_origin.jpg" alt="" class="img-responsive"/>

                        <figcaption>

                        	<h2>今明36小時的<span>天氣預報</span></h2>

							<p>Weather Forecast</p>

							<a href="/36hr_forecast">View more</a>

                        </figcaption>

                    </figure>

                </section>
        </main>

        <!-- main -->
@stop
@extends('layout')

@section('content')
<link href="css/entertainment.css" rel="stylesheet" type="text/css">

<!-- main -->

        <main role="main-inner-wrapper" class="container">

        	

            <div class="row">

            

            	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content" class="blog-header">

                    	<header>

                            <h2><span>{{ $data['title'] }}</span>{{ $data['subtitle'] }}</h2>
							<p>{{ $data['e_title'] }}</p>

                        </header>

                        <p>點選有興趣的活動圖片查看更多相關資訊</p>

                    </article>

                    <ul class="grid-lod effect-2" id="grid">
                        @foreach( $data['infos'] as $index => $info)
                            @if($index%2 > 0)
                            <li style="width:100%">

                                <section class="blog-content">

                                    <a href="exhibition_detail?keyword={{$_GET['keyword']}}&uid={{$info['uid']}}">
                                    <figure>

                                        <div class="post-date">

                                            <span>{{ $info['startD']}}</span>{{ $info['startM'] }}&nbsp;{{ $info['startY'] }}

                                        </div>

                                        <img src="{{ $info['imageUrl'] }}" alt="" class="img-responsive"/>

                                    </figure>

                                    </a>

                                    <article>

                                        {{ $info['title'] }}

                                    </article>

                                </section>

                            </li>
                            @endif
                        @endforeach
                    </ul>

                </div>

                

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                	<ul class="grid-lod effect-2" id="grid">
                        @foreach( $data['infos'] as $index => $info)
                            @if($index%2 === 0)
                            <li style="width:100%">

                                <section class="blog-content">

                                    <a href="exhibition_detail?keyword={{$_GET['keyword']}}&uid={{$info['uid']}}">

                                    <figure>

                                        <div class="post-date">

                                            <span>{{ $info['startD'] }}</span>{{ $info['startM'] }}&nbsp;{{ $info['startY'] }}

                                        </div>

                                        <img src="{{ $info['imageUrl'] }}" alt="" class="img-responsive" sytle="margin:0 auto"/>

                                    </figure>

                                    </a>

                                    <article>

                                        {{ $info['title'] }}

                                    </article>

                                </section>

                            </li>
                            @endif
                        @endforeach

                    	<!-- <li>

                   		 	<section class="blog-content">

                            	<a href="blog-details.html">

                                <figure>

                                    <div class="post-date">

                                        <span>24</span> July 2016

                                    </div>

                                    <img src="images/blog-images/blog-3.jpg" alt="" class="img-responsive"/>

                                </figure>

                                </a>

                                <article>

                                    This is a sample news post title content or sample post heading.

                                </article>

                            </section>

                    	</li>

                        <li>

                    		<section class="blog-content">

                            	<a href="blog-details.html">

                                <figure>

                                    <div class="post-date">

                                        <span>24</span> July 2016

                                    </div>

                                    <img src="images/blog-images/blog-5.jpg" alt="" class="img-responsive"/>

                                </figure>

                                </a>

                                <article>

                                    This is a sample news post title content or sample post heading.

                                </article>

                            </section>

                    	</li>

                         <li>

                            <section class="blog-content">

                            	<a href="blog-details.html">

                                <figure>

                                    <div class="post-date">

                                        <span>24</span> July 2016

                                    </div>

                                    <img src="images/blog-images/blog-1.jpg" alt="" class="img-responsive"/>

                                </figure>

                                </a>

                                <article>

                                    This is a sample news post title content or sample post heading.

                                </article>

                            </section>

                        </li>

                        <li>

                            <section class="blog-content">

                            	<a href="blog-details.html">

                                <figure>

                                    <div class="post-date">

                                        <span>24</span> July 2016

                                    </div>

                                    <img src="images/blog-images/blog-3.jpg" alt="" class="img-responsive"/>

                                </figure>

                                </a>

                                <article>

                                    This is a sample news post title content or sample post heading.

                                </article>

                            </section>

                        </li>

                        <li>

                        	<section class="blog-content">

                            	<a href="blog-details.html">

                                <figure>

                                    <div class="post-date">

                                        <span>24</span> July 2016

                                    </div>

                                    <img src="images/blog-images/blog-5.jpg" alt="" class="img-responsive"/>

                                </figure>

                                </a>

                                <article>

                                    This is a sample news post title content or sample post heading.

                                </article>

                            </section>

                        </li> -->

                    </ul>

                </div>


            </div>

        </main>

        <!-- main -->
        
@stop
@extends('layout')

@section('content')

<!-- main -->

        <main role="main-inner-wrapper" class="container">

                <!-- work details -->

                	<div class="work-details">

                    	

                        <div class="row">

                        	<div class="col-xs-12 col-sm-12 col-md-4">

                            	<header role="work-title">

                                	<h2>{{ $data['title'] }}</h2>

                                    <a href="{{ $data['promoteUrl'] }}" target="_blank">{{ $data['sourceName'] }}<i class="fa fa-external-link" aria-hidden="true"></i></a>

                                    <p><label>活動期間：</label>{{ $data['startD'] }} ~ {{ $data['endD']}}</p>

                                </header>

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-8">

                            	<section>

                                	<p>{{ $data['des'] }}</p>

                                    <!-- <p>elis est iaculis orci, et ornare sem mauris ut turpis. Pellentesque vitae tortor nec tellus hendrerit aliquam. Donec condimentum leo eu ullamcorper scelerisque pellentes rhoncus.</p> -->

                                    
                                    <p><label>活動類別：</label>{{ $data['category'] }}</p>
                                    <p><label>演出單位：</label>{{ $data['showUnit'] }}</p>
                                    <p><strong>售票網址</strong><br/><a href="{{ $data['saleUrl'] }}" target="_blank">{{ $data['saleUrl'] }}</a></p>

                                </section>

                            

                            </div>

                        </div>

                        <div class="clearfix"></div>

                        

                        <div class="work-images grid">

                            <ul class="grid-lod effect-2" id="grid">

                                <li><img src="{{ $data['imageUrl'] }}" alt="" class="img-responsive"/></li>

                            </ul>

                        </div>
                        <div>
                            <p><label>編輯時間：</label>{{ $data['editT'] }}</p>
                        </div>

                        

                    </div>

                <!-- work details -->

            

            

        </main>

        <!-- main -->
@stop
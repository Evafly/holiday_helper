@extends('layout')

@section('content')
<!-- main -->

        <main role="main-inner-wrapper" class="container">
                <!-- work details -->

                	<div class="work-details">
                        <div class="work-images grid">

                            <ul class="grid-lod effect-2" id="grid">

                                @foreach($data['infos'] as $index => $info)
                                <li>{{ $info['train'] }}&nbsp;</li>
                                @endforeach
                            </ul>

                        </div>

                        

                    </div>

                <!-- work details -->

            

            

        </main>

        <!-- main -->
        
@stop
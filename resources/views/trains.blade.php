@extends('layout')

@section('content')
<!-- main -->

        <main role="main-inner-wrapper" class="container">
                <!-- work details -->

                	<div class="work-details">
                        <div class="work-images grid">

                            <!-- <ul class="grid-lod effect-2" id="grid">

                                @foreach($data['infos'] as $index => $info)
                                <li>{{ $info['train'] }}&nbsp;</li>
                                @endforeach
                            </ul> -->
                            <table class="table table-bordered">
                                <thead>
                                    <th>車次</th>
                                    <th>列車種類</th>
                                    <th>行駛方向</th>
                                    <th>經過山海線</th>
                                </thead>
                                @foreach($data['infos'] as $index => $info)
                                <tr>
                                    <td>{{ $info['train'] }}</td>
                                    <td>{{ $info['carclass'] }}</td>
                                    <td>{{ $info['lineDir'] }}</td>
                                    <td>{{ $info['line'] }}</td>
                                </tr>
                                @endforeach
                            </table>

                        </div>

                        

                    </div>

                <!-- work details -->

            

            

        </main>

        <!-- main -->
        
@stop
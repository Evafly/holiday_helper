@extends('layout')

@section('content')
<link href="css/transport.css" rel="stylesheet" type="text/css">
<!-- main -->

        <main role="main-inner-wrapper" class="container">
                <!-- work details -->
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            請選擇站名
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            @foreach($data['stationData'] as $index => $info)
                                <li><a href="trains?STA={{ $info['id'] }}">{{ $info['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                	<div class="work-details">
                        <div class="work-images grid">
                            <table class="table table-bordered">
                                <thead>
                                    <tr style="background-color:#f0ad4e;color:#ffffff">
                                        <th style="border:1px solid #e08d17">車次</th>
                                        <th style="border:1px solid #e08d17">站名</th>
                                        <th style="border:1px solid #e08d17">到達時間</th>
                                        <th style="border:1px solid #e08d17">列車種類</th>
                                        <th style="border:1px solid #e08d17">行駛方向</th>
                                        <th style="border:1px solid #e08d17">經過山海線</th>
                                    </tr>
                                </thead>
                                @foreach($data['infos'] as $index => $info)
                                <tr>
                                    <td style="border:1px solid #eea236">{{ $info['train'] }}</td>
                                    <td style="border:1px solid #eea236">
                                        @foreach($info['traininfo'] as $info2)
                                            <p>{{ $info2 }}</p>
                                        @endforeach
                                    </td>
                                    <td style="border:1px solid #eea236">
                                        @foreach($info['arrtime'] as $info3)
                                            <p>{{ $info3 }}</p>
                                        @endforeach
                                    </td>
                                    <td style="border:1px solid #eea236">{{ $info['carclass'] }}</td>
                                    <td style="border:1px solid #eea236">{{ $info['lineDir'] }}</td>
                                    <td style="border:1px solid #eea236">{{ $info['line'] }}</td>
                                </tr>
                                @endforeach
                            </table>

                        </div>

                        

                    </div>

                <!-- work details -->

            

            

        </main>

        <!-- main -->
        
@stop
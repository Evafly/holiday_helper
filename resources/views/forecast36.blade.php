@extends('layout')

@section('content')
<link href="css/weather.css" rel="stylesheet" type="text/css">
<main role="main-inner-wrapper" class="container">

        	

    <div class="blog-details">

        <article class="post-details" id="post-details">

            <header role="bog-header" class="bog-header text-center">

                <h3>{{ $data['datasetTitle'] }}</h3>

                <p><label>發布時間：</label>{{ $data['issueTime'] }}</p>
                <p><label>更新時間：</label>{{ $data['updateTime'] }}</p>

            </header>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    請選擇縣市
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="forecast36">所有城市</a></li>
                    @foreach($data['infos2'] as $index => $info)
                        <li><a href="forecast36?loca={{ $info['location'] }}">{{ $info['location'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="enter-content">
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color:#5cb85c;color:#ffffff">
                            <th rowspan="2" style="border:1px solid #347934">縣市名稱</th>
                            <th style="border:1px solid #347934" colspan="3">天氣狀況</th>
                            <th style="border:1px solid #347934" colspan="3">最高溫</th>
                            <th style="border:1px solid #347934" colspan="3">最低溫</th>
                            <th style="border:1px solid #347934" colspan="3">舒適度</th>
                            <th style="border:1px solid #347934" colspan="3">降雨機率(%)</th>
                        </tr>
                        <tr style="background-color:#5cb85c;color:#ffffff">
                            <th style="border:1px solid #347934">今天白天</th>
                            <th style="border:1px solid #347934">今天晚上至明天清晨</th>
                            <th style="border:1px solid #347934">明天白天</th>
                            <th style="border:1px solid #347934">今天白天</th>
                            <th style="border:1px solid #347934">今天晚上至明天清晨</th>
                            <th style="border:1px solid #347934">明天白天</th>
                            <th style="border:1px solid #347934">今天白天</th>
                            <th style="border:1px solid #347934">今天晚上至明天清晨</th>
                            <th style="border:1px solid #347934">明天白天</th>
                            <th style="border:1px solid #347934">今天白天</th>
                            <th style="border:1px solid #347934">今天晚上至明天清晨</th>
                            <th style="border:1px solid #347934">明天白天</th>
                            <th style="border:1px solid #347934">今天白天</th>
                            <th style="border:1px solid #347934">今天晚上至明天清晨</th>
                            <th style="border:1px solid #347934">明天白天</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data['infos'] as $index => $info)
                        <tr>
                            <td style="border:1px solid #4cae4c">{{$info['location']}}</td>
                            @foreach ($info['wx'] as $wx)
                                @foreach($wx['weather'] as $weather)
                                    <td style="border:1px solid #4cae4c">{{ $weather }}</td>
                                @endforeach
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </article>

    </div>
</main>

    	<!-- main -->
        
@stop
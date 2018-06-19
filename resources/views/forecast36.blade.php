@extends('layout')

@section('content')
<main role="main-inner-wrapper" class="container">

        	

    <div class="blog-details">

        <article class="post-details" id="post-details">

            <header role="bog-header" class="bog-header text-center">

                <h3>{{ $data['datasetTitle'] }}</h3>

                <p><label>發布時間：</label>{{ $data['issueTime'] }}</p>
                <p><label>更新時間：</label>{{ $data['updateTime'] }}</p>

            </header>

            <div class="enter-content">

                <table class="table table-bordered">
                    <thead>
                        <th>縣市名稱</th>
                        <th colspan="3">天氣狀況</th>
                        <th colspan="3">最高溫</th>
                        <th colspan="3">最低溫</th>
                        <th colspan="3">舒適度</th>
                        <th colspan="3">降雨機率(%)</th>
                    </thead>
                    @foreach($data['infos'] as $index => $info)
                    <tr>
                        <td>{{$info['location']}}</td>
                        @foreach ($info['wx'] as $wx)
                            @foreach($wx['weather'] as $weather)
                                <td>{{ $weather }}</td>
                            @endforeach
                        @endforeach
                    </tr>
                    @endforeach
                </table>

            </div>

        </article>

    </div>
</main>

    	<!-- main -->
        
@stop
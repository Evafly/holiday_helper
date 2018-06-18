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
                        <th>天氣狀況</th>
                        <th>最高溫</th>
                        <th>最低溫</th>
                        <th>舒適度</th>
                        <th>降雨機率</th>
                    </thead>
                    @foreach($data['infos'] as $index => $info)
                    <tr>
                        <td>{{$info['location']}}</td>
                        <td>123</td>
                        <td>123</td>
                        <td>123</td>
                        <td>123</td>
                        <td>123</td>
                    </tr>
                    @endforeach
                </table>

            </div>

        </article>

    </div>
</main>

    	<!-- main -->
        
@stop
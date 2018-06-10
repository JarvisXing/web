<!doctype html>

<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <title>Photo</title>
        <script defer src="{{ asset('js/fontawesome-all.js') }}" ></script>
    </head>
    
    <body>

    <div>
        <table border="1">
        <thead>
            <tr>
                @foreach($movies_column as $movie)
                    <th>{{$movie}}</th>
                @endforeach
                <th>Aciton</th>
            </tr>
        </thead>
        <tfoot>
           
        </tfoot>
        <tbody>
            @foreach($moives_data as $movie)
            <tr>
                @foreach($movie as $item)
                <td>{{$item}}</td>
                @endforeach
                <td>
                <a href="{{route('movies.create')}}" >
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{route('welcome')}}" >
                    <i class="fas fa-home"></i>
                </a>              
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div> 

    <div id="main" style="width: 600px;height:400px;"></div>
    <script src="{{ asset('js/echarts.min.js') }}" ></script>
    <script>
        // var echarts = require("echarts");

       // alert("My First JavaScript");

        var myChart = echarts.init(document.getElementById('main'));
        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'ECharts 入门示例'
            },
            tooltip: {},
            legend: {
                data:['销量']
            },
            xAxis: {},
            yAxis: {},
            series: [{
                name: '销量',
                type: 'line',
                data: [1,2,3,4,5],
                areaStyle: {}

            }]
            
        };
        myChart.setOption(option);
        //setInterval("myChart.setOption(option)",1000);

    </script>
    </div>
</html>

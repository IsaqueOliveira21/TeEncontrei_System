<script>
    Highcharts.chart('grafico1', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'VISITAS: SEMANA ATUAL X SEMANA ANTERIOR'
        },
        xAxis: {
            categories: [
                @foreach($graficos['grafico1'] as $categoria => $valor)
                    '{{$categoria}}',
                @endforeach
            ],
            crosshair: true
        },
        yAxis: {
            title: {
                useHTML: true,
                text: 'QUANTIDADE DE VISITAS'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'QUANTIDADE',
            data: [
                @foreach($graficos['grafico1'] as $valor)
                    {{$valor}},
                @endforeach
            ]
        }]
    });
</script>

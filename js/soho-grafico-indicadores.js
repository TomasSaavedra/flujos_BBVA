$(function () {
        $('#grafico-indicadores').highcharts({
        chart : {
				height: 110,
				width: 260
		},
		xAxis: {
            gridLineWidth: 1,
            gridLineDashStyle: 'dot',
            tickInterval: 5,
            categories: ['9:00h', '', '', '', '', '12:00h', '', '', '', '', '18:00h', '']
        },
        
        yAxis: {
         gridLineDashStyle: 'dot',
          title: {
                text: 'UF'
                }, labels: {
                    enabled:false
                }
        },
        title: {
            text: ''
        },
        legend: {
            enabled:false
        },
        tooltip: {
            enabled:false
        },
        plotOptions: {
            series: {
                lineWidth: 2
            }
        },        
        series: [
		{
		data: [1.0, 0, 2.0, 1.4, 1.0, 1.7, 0.5, 1.2, 0, 0.2, 1.0, 1.3],
		color: '#479613',
		marker: {
				symbol:'circle',
				lineWidth: 2,
				lineColor: '#FFFFFF'
				}
        },
        {
		data: [0.9, 1.8, 0.8, 1.6, 0.2, 1.0, 0.7, 1.0, 1.3, 2.0, 1.5, 1.0],
		color: '#F68A1F',
		marker: {
				symbol:'circle',
				lineWidth: 2,
				lineColor: '#FFFFFF'
				}        
        },
		{
		data: [0.7, 1.0, 0.7, 1.8, 2.0, 1.5, 1.0, 1.8, 0, 0.7, 1.3, 0.3],
		color: '#005DA5',
		marker: {
				symbol:'circle',
				lineWidth: 2,
				lineColor: '#FFFFFF'
				}
        }
                ]
    });
    });

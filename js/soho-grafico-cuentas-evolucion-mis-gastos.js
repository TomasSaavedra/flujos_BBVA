$(function () {
	$(".detalle-gastos").data("open", false);
	$('.abrir-detalle-gastos, .cerrar-detalles-gastos').on('click', function(e){
		// e.preventDefault();
		 if ($(".detalle-gastos").data("open") == false){
				$(".detalle-gastos").animate({	
				  right: "0%" 			
				}, function(){ 
							$(".detalle-gastos").data("open", true); 
							}
				);
		 }else{
				$(".detalle-gastos").animate({	
				  right: "-35%" 			
				}, function(){ 
							$(".detalle-gastos").data("open", false); 
							}
				);
		 }

	});	
	
    $('#grafico-evolucion-gastos').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: 0,
            plotShadow: false
        }, 
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        },
        title: {
            text: '',
            align: 'center',
            verticalAlign: 'middle',
            y: 50
        },
        tooltip: {
                backgroundColor: '#FFFFFF',
    borderColor: '#DBDCDF',
    borderRadius: 5,
    borderWidth: 2,
            formatter: function() {
                return '<span style="color:#71777f; font-weight:bold; float:left;">' + this.point.name + '</span>                        <span style="color:#44a618;  padding-left:30px; font-weight:bold; float:left;">' + this.y + '%</span>';
            }
        },
        plotOptions: {
            pie: {
                dataLabels: {
                    enabled: false,
                    //distance: -50,
                    style: {
                        fontWeight: 'bold',
                        color: 'white',
                        textShadow: '0px 1px 2px black'
                    }
                },
                //startAngle: -90,
               // endAngle: 90,
               // center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: '',
            innerSize: '30%',
            states: {
                    hover: {
                        enabled: false
                    }
                },
		"data" : [
			  {
				"name": "Seguros",
				"y": 33.6,
				"color": {
				    "radialGradient": { "cx": "0.5", "cy": "0.5", "r": "0.5" },
				    "stops": [
				     
                         [0, "#1A7BC4"],
				         [1, "#0065B3"]
                        
				    ]
				}
			},{
				"name": "Telefonía celular",
				"y": 16.6,
				"color": {
				    "radialGradient": { "cx": "0.5", "cy": "0.5", "r": "0.5" },
				    "stops": [
				        [0, "#FDBD2C"],
				        [1, "#FDc341"]
				    ]
				}
			},{
				"name": "Luz",
				"y": 16.6,
				"color": {
				    "radialGradient": { "cx": "0.5", "cy": "0.5", "r": "0.5" },
				    "stops": [
				      
                        [0, "#92CD40"],//Verde
				        [1, "#82B03D"]
				    ]
				}
			},{
				"name": "Gas",
				"y": 16.6,
				"color": {
				    "radialGradient": { "cx": "0.5", "cy": "0.5", "r": "0.5" },
				    "stops": [
				       [0, "#F79E3B"], 
				       [1, "#EA831D"]
				    ]
				}
			},{
				"name": "Sin categorizar",
				"y": 16.6,
				"color": {
				    "radialGradient": { "cx": "0.5", "cy": "0.5", "r": "0.5" },
				    "stops": [
				       
                        [0, "#BC6718"],
				        [1, "#BC6718"]
				    ]
				}
			}
		]
        }]
    });
	
        $('#grafico-evolucion-barra').highcharts({
            chart: {
                type: 'column',
                marginBottom: 5
            },
            title: {
                text: ''
            },
			scrollbar:{
            	enabled:true,
                barBackgroundColor:'#FFFFFF',
                barBorderColor:'#FFFFFF',
                barBorderWidth:0,
                height:20,
                trackBackgroundColor:'#FFFFFF',
                trackBorderColor:'#FFFFFF',
                rifleColor:'#FFFFFF',
                buttonBorderRadius:3,
                buttonBorderColor:'#D5E2EE',
                buttonBackgroundColor:'#FFFFFF',
                buttonArrowColor:'#BACBE1'
            },
            xAxis: {
				 min:0,
                 max:2,
                 categories: ['Ene.', 'Feb.', 'Mar.', 'Abr.','May.', 'Jun.', 'Jul.','Ago.', 'Sep.', 'Oct.','Nov.', 'Dic.']
            },
            yAxis: {
                 gridLineColor: '#D5E2EE',
                 gridLineWidth: 1,
                 gridLineDashStyle: 'dot',
                 labels: {
                     format: '{value}'                
                 },
                 
            min: -30000,
            max: 120000,
            tickInterval: 15000,
            lineColor: '#FF0000',
            lineWidth: 0,
           title: {
                     align: 'high',
                     offset: 0,
                     text: '<b>$ (miles)</b>',
                     rotation: 0,
                     y: -15,
                     x: 0
                },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
            },
        
            plotOptions: {
                series: {
                    borderRadius: 2,
                    pointWidth: 30,
                    pointPadding: 0.1,
                    groupPadding: 0.1               
                }
            },
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'top',
                borderWidth: 0,
                itemDistance:60,
                margin:40
                
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Telefonia Celular',
                 color: '#479613',
                data: [60000, 60000, 60000, 60000, 60000, 60000, 60000, 60000, 60000, 60000, 60000, 60000]
            }, {
                name: 'Seguros',
                 color: '#FDBD2C',
                data: [30000, 30000, 30000,30000, 30000, 30000,30000, 30000, 30000,30000, 30000, 30000]
            }, {
                name: 'Luz',
                 color: '#003F8D',
                data: [16000, 16000, 16000,16000, 16000, 16000,16000, 16000, 16000,16000, 16000, 16000]
            }, {
                name: 'Gas',
                 color: '#F6891E',
                data: [16000, 16000, 16000,16000, 16000, 16000,16000, 16000, 16000,16000, 16000, 16000]
            }, {
                name: 'Sin categorizar',
                 color: '#42CEF8',
                data: [45000,45000, 45000,45000,45000, 45000,45000,45000, 45000,45000,45000, 45000]
            }]
        });	
		
		
        $('#grafico-distribucion-barra').highcharts({
            chart: {
                type: 'column',
                marginBottom: 5,
                marginTop:70,
				height: 350
            },
            title: {
                text: ''
            },
			scrollbar:{
            	enabled:true,
                barBackgroundColor:'#FFFFFF',
                barBorderColor:'#FFFFFF',
                barBorderWidth:0,
                height:20,
                trackBackgroundColor:'#FFFFFF',
                trackBorderColor:'#FFFFFF',
                rifleColor:'#FFFFFF',
                buttonBorderRadius:3,
                buttonBorderColor:'#D5E2EE',
                buttonBackgroundColor:'#FFFFFF',
                buttonArrowColor:'#BACBE1'
            },
            xAxis: {
				 min:0,
                 max:2,
                 categories: ['Ene.', 'Feb.', 'Mar.', 'Abr.','May.', 'Jun.', 'Jul.','Ago.', 'Sep.', 'Oct.','Nov.', 'Dic.']
            },
            yAxis: {
                 gridLineColor: '#D5E2EE',
                 gridLineWidth: 1,
                 gridLineDashStyle: 'dot',
                 labels: {
                     format: '{value}'                
                 },
                 
            min: -30000,
            max: 120000,
            tickInterval: 15000,
            lineColor: '#FF0000',
            lineWidth: 0,
           title: {
                     align: 'high',
                     offset: 0,
                     text: '<b>$ (miles)</b>',
                     rotation: 0,
                     y: -15,
                     x: 0
                },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
            },
        
            plotOptions: {
                series: {
                    borderRadius: 2,
                    pointWidth: 30,
                    pointPadding: 0.0001,
                    groupPadding: 0.13  
                    //stacking: 'normal'
                },
                column: {
                    stacking: 'normal'
                }
            },
            legend: {
                enabled:false
                
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Telefonia Celular',
                 color: '#003F8D',
                data: [60000, 60000, 60000, 60000, 60000, 60000, 60000, 60000, 60000, 60000, 60000, 60000],
                stack: 'uno'
            }, {
                name: 'Seguros',
                 color: '#42CEF8',
                data: [-28000, -28000, -28000,-28000, -28000, -28000,-28000, -28000, -28000,-28000, -28000, -28000],
                stack: 'uno'
            }, {
                name: 'Luz',
                 color: '#003F8D',
                data: [30000, 30000, 30000,30000, 30000, 30000,30000, 30000, 30000,30000, 30000, 30000],
                stack: 'dos'
            }, {
                name: 'Gas',
                 color: '#42CEF8',
                data: [-28000, -28000, -28000,-28000, -28000, -28000,-28000, -28000, -28000,-28000, -28000, -28000],
                stack: 'dos'
            }, {
                name: 'Sin categorizar',
                 color: '#42CEF8',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                stack: 'tres'
            }, {
                name: 'Sin categorizar',
                 color: '#42CEF8',
                data: [-12000, -12000, -12000, -12000, -12000, -12000, -12000, -12000, -12000, -12000, -12000, -12000],
                stack: 'tres'
            }, {
                name: 'Sin categorizar',
                 color: '#42CEF8',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                stack: 'cuatro'
            }, {
                name: 'Sin categorizar',
                 color: '#42CEF8',
                data: [-30000, -30000, -30000, -30000, -30000, -30000, -30000, -30000, -30000, -30000, -30000, -30000],
                stack: 'cuatro'
            }, {
                name: 'Sin categorizar',
                 color: '#42CEF8',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                stack: 'cinco'
            }, {
                name: 'Sin categorizar',
                 color: '#42CEF8',
                data: [-17000, -17000, -17000, -17000, -17000, -17000, -17000, -17000, -17000, -17000, -17000, -17000],
                stack: 'cinco'
            }]
    });
	
	
        $('#grafico-distribucion-barra2').highcharts({
            chart: {
                type: 'bar',
                width:590,
                height:180,
                 marginLeft: 0
            },
        credits: {
            enabled: false
        },
        exporting: {
            enabled: false
        },
            tooltip: {
            enabled: false
        },
            title: {
                text: ''
            },
            xAxis: {
              gridLineColor: 'transparent',
                
                        labels:
                        {
                            enabled: false
                        }
               
            },
            yAxis: {
               gridLineColor: 'transparent',
                min: 0,
                title: {
                    text: ''
                },
                        labels:
                        {
                            enabled: false
                        }
            },
            legend: {
                enabled:false,
                reversed: true
            },
            plotOptions: {
                 series: {
                    borderRadius: 2,
                    pointWidth: 100,
                    pointPadding: 0.0001,
                    groupPadding: 0.13  ,
                    stacking: 'normal'
                }
            },
                series: [{
                name: 'John',
                    color: '#A0E6FB',
                     
                data: [1]
            }, {
                name: 'Jane',
                 color: '#42CEF8',
                data: [5]
            }, {
                name: 'Joe',
                 color: '#003F8D',
                data: [3]
            }]
        });		
	
});
    

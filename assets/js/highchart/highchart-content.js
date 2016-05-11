$(function () {
    $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Rumah Terdaftar'
        },
        subtitle: {
            text: 'Data dari: <a href="http://pu.go.id">' +
                'pu.go.id</a>'
        },
        xAxis: {
            allowDecimals: false,
            labels: {
                formatter: function () {
                    return this.value; // clean, unformatted number for year
                }
            }
        },
        yAxis: {
            title: {
                text: 'Jumlah Rumah Terdata'
            },
            labels: {
                formatter: function () {
                    return this.value / 1000 + 'k';
                }
            }
        },
        tooltip: {
            pointFormat: '{series.name} terdata <b>{point.y:,.0f} Rumah</b><br/>pada tahun {point.x}'
        },
        plotOptions: {
            area: {
                pointStart: 1940,
                marker: {
                    enabled: false,
                    symbol: 'circle',
                    radius: 2,
                    states: {
                        hover: {
                            enabled: true
                        }
                    }
                }
            }
        },
        series: [{
            name: 'NTB',
            data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369, 640,
                1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434, 24126,
                27387, 29459, 31056, 31982, 32040, 31233, 40000, 41000, 41000,
                42000, 42000, 42000, 42000, 43000, 43050, 43055, 44000]
        }, {
            name: 'NTT',
            data: [null, null, null, null, null, null, null, null, null, null,
                5, 25, 50, 120, 150, 200, 426, 660, 869, 1060, 1605, 2471, 3322,
                4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
                15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
                33952, 35804, 37431, 39197, 45000, 46000, 47000, 49000, 57000,
                57000, 57000, 57000, 57001, 57010, 57011, 57011, 57011, 57011,
                57011, 57011, 57011, 57011, 58011, 58021, 70011, 70011, 70011,
                70011, 70011, 70011, 70011, 70011, 70011, 70011]
        }]
    });
});

// PIE
$(function () {
    // Create the chart
    $('#pie').highcharts({
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Data Rumah Cipta Karya. January, 1945 sampai May, 2016'
        },
        subtitle: {
            text: 'Klik slice untuk melihat detail. Sumber: ciptakarya.'
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}: {point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Jawa Barat',
                y: 56.33,
                drilldown: 'jawabarat'
            }, {
                name: 'Sumatra',
                y: 24.03,
                drilldown: 'sumatra'
            }, {
                name: 'Kalimantan',
                y: 10.38,
                drilldown: 'kalimantan'
            }, {
                name: 'Lombok',
                y: 4.77,
                drilldown: 'lombok'
            }, {
                name: 'Bali',
                y: 0.91,
                drilldown: 'bali'
            }, {
                name: 'Proprietary or Undetectable',
                y: 0.2,
                drilldown: null
            }]
        }],
        drilldown: {
            series: [{
                name: 'Jawa Barat',
                id: 'jawabarat',
                data: [
                    ['Jakarta', 24.13],
                    ['Bandung', 17.2],
                    ['Bekasi', 8.11],
                    ['Bogor', 5.33],
                    ['Ciamis', 1.06],
                    ['Cirebon', 1.06],
                    ['Garut', 1.06],
                    ['Indramayu', 1.06],
                    ['Karawang', 1.06],
                    ['Kuningan', 1.06],
                    ['Cianjur', 0.5]
                ]
            }, {
                name: 'Sumatra',
                id: 'sumatra',
                data: [
                    ['Padang', 5],
                    ['Medan', 4.32],
                    ['Aceh', 3.68],
                    ['Pekanbaru', 2.96]
                ]
            }, {
                name: 'Kalimantan',
                id: 'kalimantan',
                data: [
                    ['Kalimantan Tengah', 2.76],
                    ['Kalimantan Timur', 2.32],
                    ['Kalimantan Selatan', 2.31],
                    ['Kalimantan Barat', 1.27]
                ]
            }, {
                name: 'Lombok',
                id: 'lombok',
                data: [
                    ['Lombok Barat', 2.56],
                    ['Lombok Tengah', 0.77]
                ]
            }, {
                name: 'Bali',
                id: 'bali',
                data: [
                    ['Denpasar', 0.34],
                    ['Badung', 0.24],
                    ['Karangasem', 0.17],
                    ['Tabanan', 0.17],
                    ['Negara', 0.17],
                    ['Klungkung', 0.16]
                ]
            }]
        }
    });
});

// theme
/**
 * Grid-light theme for Highcharts JS
 * @author Torstein Honsi
 */

// Load the fonts
Highcharts.createElement('link', {
   href: 'https://fonts.googleapis.com/css?family=Dosis:400,600',
   rel: 'stylesheet',
   type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

Highcharts.theme = {
   colors: ["#7cb5ec", "#f7a35c", "#90ee7e", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
      "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
   chart: {
      backgroundColor: null,
      style: {
         fontFamily: "Dosis, sans-serif"
      }
   },
   title: {
      style: {
         fontSize: '16px',
         fontWeight: 'bold',
         textTransform: 'uppercase'
      }
   },
   tooltip: {
      borderWidth: 0,
      backgroundColor: 'rgba(219,219,216,0.8)',
      shadow: false
   },
   legend: {
      itemStyle: {
         fontWeight: 'bold',
         fontSize: '13px'
      }
   },
   xAxis: {
      gridLineWidth: 1,
      labels: {
         style: {
            fontSize: '12px'
         }
      }
   },
   yAxis: {
      minorTickInterval: 'auto',
      title: {
         style: {
            textTransform: 'uppercase'
         }
      },
      labels: {
         style: {
            fontSize: '12px'
         }
      }
   },
   plotOptions: {
      candlestick: {
         lineColor: '#404048'
      }
   },


   // General
   background2: '#F0F0EA'

};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);
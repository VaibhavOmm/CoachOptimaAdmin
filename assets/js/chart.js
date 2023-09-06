
"use strict";

// Class definition
var KTGeneralChartJS = function () {
    // Randomizer function
    function getRandom(min = 1, max = 100) {
        return Math.floor(Math.random() * (max - min) + min);
    }

    function generateRandomData(min = 1, max = 100, count = 10) {
        var arr = [];
        for (var i = 0; i < count; i++) {
            arr.push(getRandom(min, max));
        }
        return arr;
    }

    // Private functions
    var example1 = function () {
        // Define chart element
        var ctx = document.getElementById('kt_chartjs_1');
        
        // Define colors
        var primaryColor = KTUtil.getCssVariableValue('--bs-primary');
        var dangerColor = KTUtil.getCssVariableValue('--bs-danger');
        var successColor = KTUtil.getCssVariableValue('--bs-success');

        // Define fonts
        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

        // Chart labels
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        // Chart data
        const data = {
            labels: labels,
            datasets: [
                {
                    label: 'Active',
                    data: generateRandomData(1, 100, 12),
                    backgroundColor: primaryColor,
                    stack: 'Stack 0',
                },
                {
                    label: 'Inactive',
                    data: generateRandomData(1, 100, 12),
                    backgroundColor: dangerColor,
                    stack: 'Stack 1',
                },
            ]
        };

        // Chart config
        const config = {
            type: 'bar',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
                interaction: {
                    intersect: false,
                },
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(ctx, config);
    }

    var example2 = function () {
        // Define chart element
        var ctx = document.getElementById('kt_chartjs_2');

        // Define colors
        var primaryColor = KTUtil.getCssVariableValue('--bs-primary');
        var dangerColor = KTUtil.getCssVariableValue('--bs-danger');
        var successColor = KTUtil.getCssVariableValue('--bs-success');

        // Define fonts
        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

        // Chart labels
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];

        // Chart data
        const data = {
            labels: labels,
            datasets: [
                {
                    label: 'Dataset 1',
                    data: generateRandomData(1, 50, 7),
                    borderColor: primaryColor,
                    backgroundColor: 'transparent'
                },
                {
                    label: 'Dataset 2',
                    data: generateRandomData(1, 50, 7),
                    borderColor: dangerColor,
                    backgroundColor: 'transparent'
                },
            ]
        };

        // Chart config
        const config = {
            type: 'line',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(ctx, config);
    }

    var example3 = function () {
        // Define chart element
        var ctx = document.getElementById('kt_chartjs_3');

        // Define colors
        var primaryColor = KTUtil.getCssVariableValue('--bs-primary');
        var dangerColor = KTUtil.getCssVariableValue('--bs-danger');
        var successColor = KTUtil.getCssVariableValue('--bs-success');
        var warningColor = KTUtil.getCssVariableValue('--bs-warning');
        var infoColor = KTUtil.getCssVariableValue('--bs-info');

        // Chart labels
        const labels = ['Total Projects', 'Active Projects', 'Inactive Projects'];

        // Chart data
        const data = {
            labels: labels,
            datasets: [
                {
                    label: 'Dataset 1',
                    data: generateRandomData(1, 100, 5),
                    backgroundColor: [primaryColor, dangerColor, successColor, warningColor, infoColor]
                },
            ]
        };

        // Chart config
        const config = {
            type: 'pie',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(ctx, config);
    }
    var coachees = function () {
        // Define chart element
        var coacheees = document.getElementById('kt_chartjs_coachees');

        // Define colors
        var primaryColor = KTUtil.getCssVariableValue('--bs-primary');
        var dangerColor = KTUtil.getCssVariableValue('--bs-danger');
        var successColor = KTUtil.getCssVariableValue('--bs-success');
        var warningColor = KTUtil.getCssVariableValue('--bs-warning');
        var infoColor = KTUtil.getCssVariableValue('--bs-info');

        // Chart labels
        const labels = ['January', 'February', 'March', 'April', 'May'];

        // Chart data
        const data = {
            labels: labels,
            datasets: [
                {
                    label: 'Dataset 1',
                    data: generateRandomData(1, 100, 5),
                    backgroundColor: [primaryColor, dangerColor, successColor, warningColor, infoColor]
                },
            ]
        };

        // Chart config
        const config = {
            type: 'pie',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(coacheees, config);
    }
    var example4 = function () {
        // Define chart element
        var ctx = document.getElementById('kt_chartjs_4');

        // Define colors
        var primaryColor = KTUtil.getCssVariableValue('--bs-primary');
        var dangerColor = KTUtil.getCssVariableValue('--bs-danger');
        var dangerLightColor = KTUtil.getCssVariableValue('--bs-danger-light');

        // Define fonts
        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

        // Chart labels
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        // Chart data
        const data = {
            labels: labels,
            datasets: [
                {
                    label: 'Dataset 1',
                    data: generateRandomData(50, 100, 12),
                    borderColor: primaryColor,
                    backgroundColor: 'transparent',
                    stack: 'combined'
                },
                {
                    label: 'Dataset 2',
                    data: generateRandomData(1, 60, 12),
                    backgroundColor: dangerColor,
                    borderColor: dangerColor,
                    stack: 'combined',
                    type: 'bar'
                },

            ]
        };

        // Chart config
        const config = {
            type: 'line',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
                interaction: {
                    intersect: false,
                },
                scales: {
                    y: {
                        stacked: true
                    }
                }
            },
            defaults: {
                font: {
                    family: 'inherit',
                }
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(ctx, config);
    }

    var example5 = function () {
        // Define chart element
        var ctx = document.getElementById('kt_chartjs_5');

        // Define colors
        var infoColor = KTUtil.getCssVariableValue('--bs-info');
        var infoLightColor = KTUtil.getCssVariableValue('--bs-info-light');
        var warningColor = KTUtil.getCssVariableValue('--bs-warning');
        var warningLightColor = KTUtil.getCssVariableValue('--bs-warning-light');
        var primaryColor = KTUtil.getCssVariableValue('--bs-primary');
        var primaryLightColor = KTUtil.getCssVariableValue('--bs-primary-light');

        // Define fonts
        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');

        // Chart labels
        const labels = ['January', 'February', 'March', 'April', 'May', 'June'];

        // Chart data
        const data = {
            labels: labels,
            datasets: [
                {
                    label: 'Dataset 1',
                    data: generateRandomData(20, 80, 6),
                    borderColor: infoColor,
                    backgroundColor: infoLightColor,
                },
                {
                    label: 'Dataset 2',
                    data: generateRandomData(10, 60, 6),
                    backgroundColor: warningLightColor,
                    borderColor: warningColor,
                },
                {
                    label: 'Dataset 3',
                    data: generateRandomData(0, 80, 6),
                    backgroundColor: primaryLightColor,
                    borderColor: primaryColor,
                },
            ]
        };

        // Chart config
        const config = {
            type: 'radar',
            data: data,
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
            }
        };

        // Init ChartJS -- for more info, please visit: https://www.chartjs.org/docs/latest/
        var myChart = new Chart(ctx, config);
    }

    return {
        // Public Functions
        init: function () {
            // Global font settings: https://www.chartjs.org/docs/latest/general/fonts.html
            Chart.defaults.font.size = 13;
            Chart.defaults.font.family = KTUtil.getCssVariableValue('--bs-font-sans-serif');

            example1();
            // example2();
            example3();
            coachees();
            // example4();
            // example5();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTGeneralChartJS.init();
});



// GOOGLE CHARTS INIT
google.load('visualization', '1', {
    packages: ['corechart', 'bar', 'line']
});

google.setOnLoadCallback(function () {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Coache'],
        // ['Total',326],
        ['Active', 52],
        ['Inactive', 92],
       
    ]);

    var options = {
        title: 'Total-256',
        colors: ['#48B2FF', '#C9ECFF'],
        backgroundColor: 'transparent',
        titleTextStyle: {
            fontSize: 20, // Increase the font size of the title
            fontName: 'Plus Jakarta Sans' // Use an available font
        },
        legend: {
            textStyle: {
                fontSize: 14, // Increase the font size of the legend
                fontName: 'Plus Jakarta Sans' // Use an available font
            }
        },
        tooltip: {
            textStyle: {
                fontSize: 14, // Increase the font size of the tooltip
                fontName: 'Plus Jakarta Sans' // Use an available font
            }
        },
    };

    var chart = new google.visualization.PieChart(document.getElementById('kt_docs_google_chart_pie'));
    chart.draw(data, options);
});

// GOOGLE CHARTS INIT
google.load('visualization', '1', {
    packages: ['corechart', 'bar', 'line']
});

google.setOnLoadCallback(function () {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Coache'],
        // ['Total',326],
        ['Active', 52],
        ['Pending', 6],
       
    ]);

    var options = {
        title: 'Total-56',
        colors: ['#FF927B', '#FACA84'],
        backgroundColor: 'transparent',
        titleTextStyle: {
            fontSize: 20, // Increase the font size of the title
            fontName: 'Plus Jakarta Sans' // Use an available font
        },
        legend: {
            textStyle: {
                fontSize: 14, // Increase the font size of the legend
                fontName: 'Plus Jakarta Sans' // Use an available font
            }
        },
        tooltip: {
            textStyle: {
                fontSize: 14, // Increase the font size of the tooltip
                fontName: 'Plus Jakarta Sans' // Use an available font
            }
        },
    };

    var chart = new google.visualization.PieChart(document.getElementById('kt_docs_google_chart_pie_coache'));
    chart.draw(data, options);
});



google.setOnLoadCallback(function () {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Coache'],
        // ['Total',326],
        ['Active', 52],
        ['Pending', 6],
       
    ]);

    var options = {
        title: 'Total-56',
        colors: ['#FF927B', '#FACA84'],
        backgroundColor: 'transparent',
        titleTextStyle: {
            fontSize: 20, // Increase the font size of the title
            fontName: 'Plus Jakarta Sans' // Use an available font
        },
        legend: {
            textStyle: {
                fontSize: 14, // Increase the font size of the legend
                fontName: 'Plus Jakarta Sans' // Use an available font
            }
        },
        tooltip: {
            textStyle: {
                fontSize: 14, // Increase the font size of the tooltip
                fontName: 'Plus Jakarta Sans' // Use an available font
            }
        },
    };

    var chart = new google.visualization.PieChart(document.getElementById('kt_docs_google_chart_invoice'));
    chart.draw(data, options);
});


var KTChartsWidget36invoice = function() {
	var e = {
			self: null,
			rendered: !1
		},
		t = function(e) {
			var t = document.getElementById("kt_charts_widget_36_chart_1");
			if (t) {
				var a = parseInt(KTUtil.css(t, "height")),
					l = KTUtil.getCssVariableValue("--bs-gray-500"),
					r = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
					o = KTUtil.getCssVariableValue("--bs-danger"),
					i = KTUtil.getCssVariableValue("--bs-danger"),
					s = KTUtil.getCssVariableValue("--bs-success"),
					n = {
						series: [{
							name: "Inbound Calls",
							data: [65, 80, 80, 60, 60, 45, 45, 80, 80, 70, 70, 90, 90, 80, 80, 80, 60, 60, 50]
						}, {
							name: "Outbound Calls",
							data: [90, 110, 110, 95, 95, 85, 85, 95, 95, 115, 115, 100, 100, 115, 115, 95, 95, 85, 85]
						}],
						chart: {
							fontFamily: "inherit",
							type: "area",
							height: a,
							toolbar: {
								show: !1
							}
						},
						plotOptions: {},
						legend: {
							show: !1
						},
						dataLabels: {
							enabled: !1
						},
						fill: {
							type: "gradient",
							gradient: {
								shadeIntensity: 1,
								opacityFrom: .4,
								opacityTo: .2,
								stops: [15, 120, 100]
							}
						},
						stroke: {
							curve: "smooth",
							show: !0,
							width: 3,
							colors: [o, s]
						},
						xaxis: {
							categories: ["", "8 AM", "81 AM", "9 AM", "10 AM", "11 AM", "12 PM", "13 PM", "14 PM", "15 PM", "16 PM", "17 PM", "18 PM", "18:20 PM", "18:20 PM", "19 PM", "20 PM", "21 PM", ""],
							axisBorder: {
								show: !1
							},
							axisTicks: {
								show: !1
							},
							tickAmount: 6,
							labels: {
								rotate: 0,
								rotateAlways: !0,
								style: {
									colors: l,
									fontSize: "12px"
								}
							},
							crosshairs: {
								position: "front",
								stroke: {
									color: [o, s],
									width: 1,
									dashArray: 3
								}
							},
							tooltip: {
								enabled: !0,
								formatter: void 0,
								offsetY: 0,
								style: {
									fontSize: "12px"
								}
							}
						},
						yaxis: {
							max: 120,
							min: 30,
							tickAmount: 6,
							labels: {
								style: {
									colors: l,
									fontSize: "12px"
								}
							}
						},
						states: {
							normal: {
								filter: {
									type: "none",
									value: 0
								}
							},
							hover: {
								filter: {
									type: "none",
									value: 0
								}
							},
							active: {
								allowMultipleDataPointsSelection: !1,
								filter: {
									type: "none",
									value: 0
								}
							}
						},
						tooltip: {
							style: {
								fontSize: "12px"
							}
						},
						colors: [i, KTUtil.getCssVariableValue("--bs-success")],
						grid: {
							borderColor: r,
							strokeDashArray: 4,
							yaxis: {
								lines: {
									show: !0
								}
							}
						},
						markers: {
							strokeColor: [o, s],
							strokeWidth: 3
						}
					};
				e.self = new ApexCharts(t, n), setTimeout((function() {
					e.self.render(), e.rendered = !0
				}), 200)
			}
		};
	return {
		init: function() {
			t(e), KTThemeMode.on("kt.thememode.change", (function() {
				e.rendered && e.self.destroy(), t(e)
			}))
		}
	}
}();
"undefined" != typeof module && (module.exports = KTChartsWidget36invoice), KTUtil.onDOMContentLoaded((function() {
	KTChartsWidget36invoice.init()
}));


var KTChartsWidget36client = function() {
	var e = {
			self: null,
			rendered: !1
		},
		t = function(e) {
			var t = document.getElementById("kt_charts_widget_36_client");
			if (t) {
				var a = parseInt(KTUtil.css(t, "height")),
					l = KTUtil.getCssVariableValue("--bs-gray-500"),
					r = KTUtil.getCssVariableValue("--bs-border-dashed-color"),
					o = KTUtil.getCssVariableValue("--active-color"),
					i = KTUtil.getCssVariableValue("--active-color"),
					s = KTUtil.getCssVariableValue("--inactive-color"),
					n = {
						series: [{
							name: "Inbound Calls",
							data: [95, 80, 80, 60, 60, 45, 45, 80, 80, 70, 70, 90, 90, 80, 80, 80, 60, 60, 50]
						}, {
							name: "Outbound Calls",
							data: [0, 110, 110, 95, 95, 85, 85, 95, 95, 115, 115, 100, 100, 115, 115, 95, 95, 85, 85]
						}],
						chart: {
							fontFamily: "inherit",
							type: "area",
							height: a,
							toolbar: {
								show: !1
							}
						},
						plotOptions: {},
						legend: {
							show: !1
						},
						dataLabels: {
							enabled: !1
						},
						fill: {
							type: "gradient",
							gradient: {
								shadeIntensity: 1,
								opacityFrom: .4,
								opacityTo: .2,
								stops: [15, 120, 100]
							}
						},
						stroke: {
							curve: "smooth",
							show: !0,
							width: 3,
							colors: [o, s]
						},
						xaxis: {
							categories: ["", "8 AM", "81 AM", "9 AM", "10 AM", "11 AM", "12 PM", "13 PM", "14 PM", "15 PM", "16 PM", "17 PM", "18 PM", "18:20 PM", "18:20 PM", "19 PM", "20 PM", "21 PM", ""],
							axisBorder: {
								show: !1
							},
							axisTicks: {
								show: !1
							},
							tickAmount: 6,
							labels: {
								rotate: 0,
								rotateAlways: !0,
								style: {
									colors: l,
									fontSize: "12px"
								}
							},
							crosshairs: {
								position: "front",
								stroke: {
									color: [o, s],
									width: 1,
									dashArray: 3
								}
							},
							tooltip: {
								enabled: !0,
								formatter: void 0,
								offsetY: 0,
								style: {
									fontSize: "12px"
								}
							}
						},
						yaxis: {
							max: 120,
							min: 30,
							tickAmount: 6,
							labels: {
								style: {
									colors: l,
									fontSize: "12px"
								}
							}
						},
						states: {
							normal: {
								filter: {
									type: "none",
									value: 0
								}
							},
							hover: {
								filter: {
									type: "none",
									value: 0
								}
							},
							active: {
								allowMultipleDataPointsSelection: !1,
								filter: {
									type: "none",
									value: 0
								}
							}
						},
						tooltip: {
							style: {
								fontSize: "12px"
							}
						},
						colors: [i, KTUtil.getCssVariableValue("--inactive-color")],
						grid: {
							borderColor: r,
							strokeDashArray: 4,
							yaxis: {
								lines: {
									show: !0
								}
							}
						},
						markers: {
							strokeColor: [o, s],
							strokeWidth: 3
						}
					};
				e.self = new ApexCharts(t, n), setTimeout((function() {
					e.self.render(), e.rendered = !0
				}), 200)
			}
		};
	return {
		init: function() {
			t(e), KTThemeMode.on("kt.thememode.change", (function() {
				e.rendered && e.self.destroy(), t(e)
			}))
		}
	}
}();
"undefined" != typeof module && (module.exports = KTChartsWidget36client), KTUtil.onDOMContentLoaded((function() {
	KTChartsWidget36client.init()
}));

$("#kt_daterangepicker_1").daterangepicker();
$(".datepickerclass").daterangepicker();


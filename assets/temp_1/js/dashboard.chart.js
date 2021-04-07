$(function () {
////////////////////////////////// LIne Chart /////////////////////////////
var colors = ['#51a0e1', '#f9bb39', '#99f83a', '#3c53f7', '#d337fb', '#f43e83', '#b08d82', '#6794cb', '#51a0e1', '#f9bb39', '#99f83a', '#3c53f7'];
var theme = 'light';
if ($('body').hasClass('dark')) {
    theme = 'dark';
}
if ($('body').hasClass('dark-alt')) {
    theme = 'dark';
}

var options = {
    theme: {
        mode: theme
    },
    chart: {
        height: 350,
        type: 'line',
        zoom: {
            enabled: false
        },
         dropShadow: {
        enabled: true,
        color: '#000',
        top: 18,
        left: 7,
        blur: 10,
        opacity: 0.2
      },
    },
    colors: colors,
    series: [{
            name: "Blast",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148, 87, 77, 69]
        },{
            name: "Deliver",
            data: [33, 43, 37, 53, 51, 65, 72, 94, 151, 54, 80, 90]
        },{
            name: "Activated",
            data: [65, 40, 33, 52, 46, 68, 67, 92, 178, 65, 88, 70]
        },{
            name: "PS",
            data: [18, 48, 33, 59, 39, 67, 63, 81, 138, 49, 72, 88]
    }],
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'straight'
    },
    title: {

        align: 'left',
        style: {
            color: '#51a0e1'

        }
    },
    grid: {
        row: {
            colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
        },
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        // labels: {
        //     style: {
        //         colors: ['#51a0e1', '#51a0e1', '#51a0e1', '#51a0e1', '#51a0e1', '#51a0e1', '#51a0e1', '#51a0e1', '#51a0e1']

        //     }
        // }
    },
    yaxis: [{
        title: {
        text: "Hour"
        },
    }
    // {
    //     opposite: true,
    //     title: {
    //     text: "Series B"
    //     }
    // }
    ],
}

var chart = new ApexCharts(
        document.querySelector("#apex_line_chart"),
        options
        );

chart.render();

});
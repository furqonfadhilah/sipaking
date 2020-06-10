<div id="line" height="200"></div>
  <script>
var chart = Highcharts.chart('line', {
 title: {
        text: ''
    },

    subtitle: {
        text: 'Keterangan : ms (milisecond)'
    },

    yAxis: {
        title: {
            text: 'Pengujian Kinerja Website SIPAKING (ms)'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    credits: {
      enabled: false
    },

    xAxis: {
        categories: [
            <?php foreach ($line as $l):?>
                <?= $l['data_bandwith'];?>,
            <?php endforeach;?>
        ],

        title: {
            text: 'Data Pengujian 1000-9000 Pengguna Virtual',
        }
    },

    series: [{
        name: 'Jumlah total waktu pengiriman data (ms)',
        lineColor: 'green',
        color: 'green',
        data: [
            <?php foreach ($line as $l):?>
                <?= $l['latest_sample'];?>,
            <?php endforeach;?>
        ]
    }, {
        name: 'Rata-rata pengiriman data (ms)',
        lineColor: 'blue',
        color: 'blue',
        data: [
            <?php foreach ($line as $l):?>
                <?= $l['average'];?> ,
            <?php endforeach;?>
        ]
    }, {
        name: 'Standar pengiriman data (ms)',
        lineColor: 'red',
        color: 'red',
        data: [
            <?php foreach ($line as $l):?>
                <?= $l['deviation'];?>,
            <?php endforeach;?>
        ]
    }],



    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }
   
});
</script>
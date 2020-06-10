<div id="spline" height="200"></div>
<script>
	var chart = Highcharts.chart('spline', {

    title: {
        text: ''
    },
    subtitle: {
        text: 'Keterangan : ms (milisecond), MB (MegaByte)'
    },
    xAxis: {
        categories: [
            <?php foreach ($spline as $sp):?>
                <?= $sp['data_bandwith'];?>,
            <?php endforeach;?>
        ],


        title: {
            text: 'Data Pengujian 500 Pengguna Virtual = 5 MB',
        }
    },
    yAxis: {
        title: {
            text: 'Respond Time Website MataMu (ms)'
        },
        labels: {
            formatter: function () {
                return this.value + 'ms';
            }
        }
    },

    legend: {
        
        align: 'right',
        verticalAlign: 'top'
    },

    credits: {
      enabled: false
    },

    tooltip: {
        crosshairs: true,
        shared: true
    },
    plotOptions: {
        spline: {
            marker: {
                radius: 4,
                lineColor: '#666666',
                lineWidth: 1
            }
        }
    },
    series: [{
        name: 'Jumlah total waktu pengiriman data (ms)',
        lineColor: '',
        color: '',
        data: [
            <?php foreach ($line as $l):?>
                <?= $l['latest_sample'];?>,
            <?php endforeach;?>
        ], 
    },


     {
        name: 'Rata-rata pengiriman data (ms)',
        lineColor: 'green',
        color: 'green',
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
});







		





</script>
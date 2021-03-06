<script>
    
$(document).ready(function(){
    $.ajax({
        url : "<?php echo base_url().'monitoring/monitorluaran' ?>",
        dataType : "JSON",
        success : function(result){
            google.charts.load('current', {
                'packages' : ['corechart']
            });
            google.charts.setOnLoadCallback(function(){
                drawChart(result);
            });
        }
    });


    function drawChart(result) {


            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Tahun Lulus');
            data.addColumn('number', 'Indeks Prestasi Kumulatif Minimal');
            data.addColumn('number', 'Indeks Prestasi Kumulatif Maksimal');
            data.addColumn('number', 'Indeks Prestasi Kumulatif Rata-Rata');
            var dataArray = [];
            $.each(result, function(i, obj) {
                dataArray.push([ obj.tahunLulus, parseFloat(obj.ipkMin),parseFloat(obj.ipkMaks), parseFloat(obj.ipkRerata) ]);
            });

            data.addRows(dataArray);

                       

            var Combo_options = {
               title: 'Monitoring Indeks Prestasi Kumulatif Lulusan 3 Tahun Terakhir',
                seriesType :'bars',
                series : {2:{type: 'line'}},
                legend : {position : 'bottom'},
                width : 766,
                height : 350
            };
            var Combochart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                Combochart.draw(data, Combo_options);
    }

    
});

</script>

<div class="col-sm-9">
            <div id="wrapper">
                <div id="content-wrapper">
                    <div class="container-fluid monitor-body">
                        <!-- DataTables -->
                        <div class="card mb-3">
                            <div class="card-header bg-secondary">
                                <h6 class="judul-monitor">Monitoring Indeks Prestasi Kumulatif Lulusan 3 Tahun Terakhir</h6>
                            </div>
                                <div class="card-body">
                                <div class="table-responsive">
                                    <div class="col-8 offset-2" style="margin-left: 20px; margin-top: -20px">
                                        <table class="column" cellpadding="10">
                                            <tr>
                                                <td>
                                                    <div id="chart_div" style="border: 3px solid #ccc"></div>
                                                </td>
                                            </tr>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-wrapper -->

            </div>
            <!-- /#wrapper -->
        </div> 
    </div>
</body>
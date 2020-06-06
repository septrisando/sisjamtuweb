<script>
    
$(document).ready(function(){
	$.ajax({
		url : "<?php echo base_url().'monitoring/jmldosentetap' ?>",
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
            data.addColumn('string', 'Program Pasca Sarjana Terakhir');
            data.addColumn('number', 'Jumlah Dosen');
            var dataArray = [];
            $.each(result, function(i, obj) {
                dataArray.push(["S2", parseInt(obj.jumlah) ]);              
            });

                
            data.addRows(dataArray);
             

            var barchart_options = {
                title : 'Barchart: Jumlah Dosen Tetap Berdasarkan Pendidikan Terakhir',
                colors : ['green'],
                width : 766,
                height : 350,
                legend : 'none'
            };
            var barchart = new google.visualization.BarChart(document
                    .getElementById('barchart_div'));
            barchart.draw(data, barchart_options);
        	};
    
});

</script>

<div class="col-sm-9">
			<div id="wrapper">
				<div id="content-wrapper">
					<div class="container-fluid monitor-body">
						<!-- DataTables -->
						<div class="card mb-3">
							<div class="card-header bg-secondary">
								<h6 class="judul-monitor">Monitoring Dosen Tetap</h6>
							</div>
								<div class="card-body">
								<div class="table-responsive">
							        <div class="col-8 offset-2" style="margin-left: -20px; margin-top: -20px">
							            <table class="Column" cellpadding="10">
							            	<tr>
							            		<td>
							            			<div id="barchart_div" style="border: 3px solid #ccc"></div>
							            		</td>
							            	</tr>
							            </table>
							        </div>
								</div>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->


					<!-- Sticky Footer -->

				</div>
				<!-- /.content-wrapper -->

			</div>
			<!-- /#wrapper -->
		</div> 
	</div>
</body>
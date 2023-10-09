

<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">Daftar Integrasi Data Check-in di Terminal Terpadu Pulo Gebang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->


              <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>NO</th>
						<th>ID_BOKING</th>
						<th>TANGGAL</th>
						<th>JAM</th>
						<th>ID_PO</th>
						<th>ID_TUJUAN</th>
						<th>ID_USER</th>
						<th>STATUS</th>	
                        <th>AKSI</th>
                    </tr>
                </thead>
              </table>
				
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<!-- punya lama -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script> -->

<!-- baru tapi cdn -->
<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"> -->

<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

<script>
        $(document).ready(function() {
            var t = $('#mytable').DataTable( {
                "ajax": '<?php echo site_url('Boarding/data'); ?>',
                "order": [[ 2, 'asc' ]],
                "columns": [
                    {
                        "data": null,
                        "width": "50px",
                        "class": "text-center",
                        "orderable": false,
                    },
					{ 
                        "data": "noreg",
                        "class": "text-left",
						 "width": "50px"
                    },
                    { 
                        "data": "tgl_berangkat",
                        "class": "text-left",
						 "width": "250px"
                    },
                     { 
                        "data": "jam_berangkat",
                        "class": "text-left",
						"width": "150px"
						
                    },
                    { 
                        "data": "id_po",
						 "width": "150px"
                    },
					{ 
                        "data": "id_tujuan",
                        "width": "150px"
                    },
					{ 
                        "data": "id_user",
                        "width": "150px"
                    },
				
                    { 
                        "data": "status",
						 "class": "text-left",
                        "width": "50px"
                    },

                    { 
                        "data": "aksi",
                        "width": "80px",
                        "class": "text-center"
                    },
                ]
            } );
               
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
</script>
</body>
</html>



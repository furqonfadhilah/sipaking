<!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets2/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets2/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets2/'); ?>js/sb-admin-2.min.js"></script>
  <!-- overlayScrollbars -->
<script src="<?= base_url('assets2/')?>/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>
  <script type="text/javascript">
	$(document).ready(function() {

		//standard table
		$('#table1').DataTable();

		//fixed column table
	    $('#table2').DataTable( {
	        scrollY:        true,
	        scrollX:        true,
	        scrollCollapse: true,
	        paging:         true,
	        filter: true,
	        fixedColumns:   {
	            leftColumns: 2,
	            rightColumns: 1
	        }
	    } );

	    $('#table3').DataTable( {
	        scrollY:        true,
	        scrollX:        true,
	        scrollCollapse: true,
	        paging:         false,
	        filter: false,
	        fixedColumns:   {
	            leftColumns: 1,
	            rightColumns: 1
	        }
	    } );
	} );
</script>
</body>

</html>
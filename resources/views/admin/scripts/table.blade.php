<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="{{asset('js/plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
<script src="{{asset('js/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/AdminLTE/app.js')}}" type="text/javascript"></script>

<!-- page script -->
<script type="text/javascript">
$(function() {
  $("#example1").dataTable();
  $('#example2').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": false,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false
  });
});
</script>

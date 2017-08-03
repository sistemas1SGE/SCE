</div>
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0.0
  </div>
  <strong>Copyright &copy; 2017 <a href="http://web.artssoct.com/">ArtsSoct</a>.</strong> All rights
  reserved.
</footer>
</div>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/knob/jquery.knob.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url().'assets/';?>js/button.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/fastclick/fastclick.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/dist/js/app.min.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/dist/js/demo.js"></script>
<script src="<?php echo base_url().'assets/';?>AdminLTE/plugins/fullcalendar/fullcalendar.min.js"></script>
<script>
	$(function () {
	    $("#data_tabla_map1").DataTable();
	    $('#data_tabla_map2').DataTable({
	    	"paging": true,
		    "lengthChange": false,
		    "searching": false,
		    "ordering": true,
		    "info": true,
		    "autoWidth": false
	    });
	});
</script>
<script>
	function closeFrom(){
		$("#newFrom-view").removeClass("collapse");
		$("#from-view").addClass("collapse");
		$("#cloFrom-view").addClass("collapse");
	}
	function editFrom(){
		$("#newFrom-view").addClass("collapse");
		$("#from-view").removeClass("collapse");
		$("#cloFrom-view").removeClass("collapse");
	}
  $(function () {
    $(".select2").select2();
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    $("[data-mask]").inputmask();
    $('#reservation').daterangepicker();
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );
    $('#datepicker').datepicker({
      autoclose: true
    });
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
    $(".my-colorpicker1").colorpicker();
    $(".my-colorpicker2").colorpicker();
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
<script>
  $(function () {
    function ini_events(ele) {
      ele.each(function () {
        var eventObject = {
          title: $.trim($(this).text())
        };
        $(this).data('eventObject', eventObject);
        $(this).draggable({
          zIndex: 1070,
          revert: true,
          revertDuration: 0
        });

      });
    }
    ini_events($('#external-events div.external-event'));
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'day'
      },
      events: [
        {
          title: 'All Day Event',
          start: new Date(y, m, 1),
          backgroundColor: "#f56954",
          borderColor: "#f56954"
        },
        {
          title: 'Long Event',
          start: new Date(y, m, d - 5),
          end: new Date(y, m, d - 2),
          backgroundColor: "#f39c12",
          borderColor: "#f39c12"
        },
        {
          title: 'Meeting',
          start: new Date(y, m, d, 10, 30),
          allDay: false,
          backgroundColor: "#0073b7",
          borderColor: "#0073b7"
        },
        {
          title: 'Lunch',
          start: new Date(y, m, d, 12, 0),
          end: new Date(y, m, d, 14, 0),
          allDay: false,
          backgroundColor: "#00c0ef",
          borderColor: "#00c0ef"
        },
        {
          title: 'Birthday Party',
          start: new Date(y, m, d + 1, 19, 0),
          end: new Date(y, m, d + 1, 22, 30),
          allDay: false,
          backgroundColor: "#00a65a",
          borderColor: "#00a65a"
        },
        {
          title: 'Click for Google',
          start: new Date(y, m, 28),
          end: new Date(y, m, 29),
          url: 'http://google.com/',
          backgroundColor: "#3c8dbc",
          borderColor: "#3c8dbc"
        }
      ],
      editable: true,
      droppable: true,
      drop: function (date, allDay) {
        var originalEventObject = $(this).data('eventObject');
        var copiedEventObject = $.extend({}, originalEventObject);
        copiedEventObject.start = date;
        copiedEventObject.allDay = allDay;
        copiedEventObject.backgroundColor = $(this).css("background-color");
        copiedEventObject.borderColor = $(this).css("border-color");
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
        if ($('#drop-remove').is(':checked')) {
          $(this).remove();
        }
      }
    });
    var currColor = "#3c8dbc";
    var colorChooser = $("#color-chooser-btn");
    $("#color-chooser > li > a").click(function (e) {
      e.preventDefault();
      currColor = $(this).css("color");
      $('#add-new-event').css({"background-color": currColor, "border-color": currColor});
    });
    $("#add-new-event").click(function (e) {
      e.preventDefault();
      var val = $("#new-event").val();
      if (val.length == 0) {
        return;
      }
      var event = $("<div />");
      event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
      event.html(val);
      $('#external-events').prepend(event);
      ini_events(event);
      $("#new-event").val("");
    });
  });
</script>
</body>
</html>

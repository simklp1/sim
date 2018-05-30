        <footer>
          <div class="pull-right">
            Sistem Informasi Rumah Sakit - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>
    <script src="<?php echo base_url()?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/nprogress/nprogress.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/build/js/custom.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/iCheck/icheck.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/google-code-prettify/src/prettify.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/parsleyjs/dist/parsley.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/autosize/dist/autosize.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendors/starrr/dist/starrr.js"></script>

    <script>
    $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
  </body>
</html>
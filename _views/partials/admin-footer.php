</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo SITE_URL ?>/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo SITE_URL ?>/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo SITE_URL ?>/assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo SITE_URL ?>/assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo SITE_URL ?>/assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo SITE_URL ?>/assets/libs/flot/excanvas.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?php echo SITE_URL ?>/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- QUILL -->
    <script src="<?php echo SITE_URL ?>/assets/libs/quill/dist/quill.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo SITE_URL ?>/assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

        
    <script type="text/javascript">
    jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
    
    jQuery('#datepicker-autoclose-2').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    /****************************************
     *       Event Details Textarea         *
    ****************************************/
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>

</body> 
  <?php Load::do_css(); ?>
  <?php Load::do_js(); ?>
  <?php Load::do_footer(); ?>

</html>
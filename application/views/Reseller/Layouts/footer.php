 <!-- Required Jquery -->
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/jquery/jquery.min.js"></script>
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/jquery-ui/jquery-ui.min.js "></script>
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/popper.js/popper.min.js"></script>
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/bootstrap/js/bootstrap.min.js "></script>
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/pages/widget/excanvas.js "></script>
 <!-- waves js -->
 <script src="<?= base_url('asset/mega-able-lite/') ?>assets/pages/waves/js/waves.min.js"></script>
 <!-- jquery slimscroll js -->
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
 <!-- modernizr js -->
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/modernizr/modernizr.js "></script>
 <!-- slimscroll js -->
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/SmoothScroll.js"></script>
 <script src="<?= base_url('asset/mega-able-lite/') ?>assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
 <!-- Chart js -->
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/chart.js/Chart.js"></script>
 <!-- amchart js -->
 <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
 <script src="<?= base_url('asset/mega-able-lite/') ?>assets/pages/widget/amchart/gauge.js"></script>
 <script src="<?= base_url('asset/mega-able-lite/') ?>assets/pages/widget/amchart/serial.js"></script>
 <script src="<?= base_url('asset/mega-able-lite/') ?>assets/pages/widget/amchart/light.js"></script>
 <script src="<?= base_url('asset/mega-able-lite/') ?>assets/pages/widget/amchart/pie.min.js"></script>
 <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
 <!-- menu js -->
 <script src="<?= base_url('asset/mega-able-lite/') ?>assets/js/pcoded.min.js"></script>
 <script src="<?= base_url('asset/mega-able-lite/') ?>assets/js/vertical-layout.min.js "></script>
 <!-- custom js -->
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/pages/dashboard/custom-dashboard.js"></script>
 <script type="text/javascript" src="<?= base_url('asset/mega-able-lite/') ?>assets/js/script.js "></script>
 <script>
 	console.log = function() {}
 	$("#beras").on('change', function() {

 		$(".nama").html($(this).find(':selected').attr('data-nama'));
 		$(".nama").val($(this).find(':selected').attr('data-nama'));


 		$(".harga").html($(this).find(':selected').attr('data-harga'));
 		$(".harga").val($(this).find(':selected').attr('data-harga'));

 		$(".stok").html($(this).find(':selected').attr('data-stok'));
 		$(".stok").val($(this).find(':selected').attr('data-stok'));
 	});
 </script>
 </body>

 </html>

<footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
      <b>Version</b> 1.1
    </div>Copyright &copy; 2018 All Rights Reserved.
  </footer>
</div>
<!-- ./wrapper -->




	<!-- jQuery 3 -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

	<!-- popper -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.1.3-->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/bootstrap/js/bootstrap.js"></script>

	<!-- ChartJS -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/chart-js/chart.js"></script>

	<!-- Sparkline -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>

	<!-- jvectormap -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

	<!-- Morris.js charts -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/morris.js/morris.min.js"></script>

	<!-- Slimscroll -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

	<!-- FastClick -->
	<script src="<?php echo base_url() ?>assets/admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>

	<!-- Minimal-art Admin App -->
	<script src="<?php echo base_url() ?>assets/admin/js/template.js"></script>

	<!-- Minimal-art Admin dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url() ?>assets/admin/js/pages/dashboard.js"></script>

	<!-- Minimal-art Admin for demo purposes -->
  <!-- <script src="<?php echo base_url() ?>assets/admin/js/demo.js"></script> -->
  <script>
  var time = new Date();
  var t = new Date(time-(2*24*60*60*1000));
  var month = new Array();
  var tgl = new Array();
  var tahun = new Array();
  var data = new Array();
  data[0] = "<?php echo $user[0];?>";
  data[1] = "<?php echo $user[1];?>";
  data[2] = "<?php echo $user[2];?>";
  data[3] = "<?php echo $user[3];?>";
  data[4] = "<?php echo $user[4];?>";
  data[5] = "<?php echo $user[5];?>";
  data[6] = "<?php echo $user[6];?>";
  var data1 = new Array();
  data1[0] = "<?php echo $article[0];?>";
  data1[1] = "<?php echo $article[1];?>";
  data1[2] = "<?php echo $article[2];?>";
  data1[3] = "<?php echo $article[3];?>";
  data1[4] = "<?php echo $article[4];?>";
  data1[5] = "<?php echo $article[5];?>";
  data1[6] = "<?php echo $article[6];?>";
  var data2 = new Array();
  data2[0] = "<?php echo $ebook[0];?>";
  data2[1] = "<?php echo $ebook[1];?>";
  data2[2] = "<?php echo $ebook[2];?>";
  data2[3] = "<?php echo $ebook[3];?>";
  data2[4] = "<?php echo $ebook[4];?>";
  data2[5] = "<?php echo $ebook[5];?>";
  data2[6] = "<?php echo $ebook[6];?>";
  var data3 = new Array();
  data3[0] = "<?php echo $video[0];?>";
  data3[1] = "<?php echo $video[1];?>";
  data3[2] = "<?php echo $video[2];?>";
  data3[3] = "<?php echo $video[3];?>";
  data3[4] = "<?php echo $video[4];?>";
  data3[5] = "<?php echo $video[5];?>";
  data3[6] = "<?php echo $video[6];?>";
  for(var i=0;i<7;i++){
    var date = new Date();
    var days=i;
    var last = new Date(date.getTime() - (days * 24 * 60 * 60 * 1000));
    var day =last.getDate();
    var month=last.getMonth()+1;
    var year=last.getFullYear();
    tgl[i] = day+"-"+month+"-"+year;
    tahun[i] = year+"-"+month+"-"+day;
  }
</script>
  <script>
    $(function () {

    'use strict';


    // LINE CHART
      var line = new Morris.Line({
        element: 'user-regist',
        resize: true,
        data: [
          {y: String(tgl[6]), item1: data[6],yy: String(tahun[6])},
          {y: String(tgl[5]), item1: data[5],yy: String(tahun[5])},
          {y: String(tgl[4]), item1: data[4],yy: String(tahun[4])},
          {y: String(tgl[3]), item1: data[3],yy: String(tahun[3])},
          {y: String(tgl[2]), item1: data[2],yy: String(tahun[3])},
          {y: String(tgl[1]), item1: data[1],yy: String(tahun[2])},
          {y: String(tgl[0]), item1: data[0],yy: String(tahun[0])}
        ],
      xkey: 'yy',
      ykeys: ['item1'],
      labels: ['Analatics'],
      lineWidth:5,
      pointFillColors: ['#235459'],
      lineColors: ['#235459'],
      hideHover: 'auto',
      });
      //BAR CHART
      var bar = new Morris.Bar({
        element: 'bar-chart1',
        resize: true,
        data: [
          {y: String(tgl[6]), item1: data1[6],item2: data2[6],item3: data3[6],yy: String(tahun[6])},
          {y: String(tgl[5]), item1: data1[5],item2: data2[5],item3: data3[5],yy: String(tahun[5])},
          {y: String(tgl[4]), item1: data1[4],item2: data2[4],item3: data3[4],yy: String(tahun[4])},
          {y: String(tgl[3]), item1: data1[3],item2: data2[3],item3: data3[3],yy: String(tahun[3])},
          {y: String(tgl[2]), item1: data1[2],item2: data2[2],item3: data3[2],yy: String(tahun[3])},
          {y: String(tgl[1]), item1: data1[1],item2: data2[1],item3: data3[1],yy: String(tahun[2])},
          {y: String(tgl[0]), item1: data1[0],item2: data2[0],item3: data3[0],yy: String(tahun[0])}
        ],
      barColors: ['#235459', '#dd4124', '#cc9c52'],
      barSizeRatio: 0.5,
      barGap:1,
      xkey: 'yy',
      ykeys: ['item1', 'item2', 'item3'],
      labels: ['Artikel', 'Ebook', 'Video'],
      hideHover: 'auto'
      });


}); // End of use strict

  </script>

</body>
</html>

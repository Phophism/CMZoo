
	</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
</div>
    <!-- Javascript -->
    <script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/admin-template/js/bootstrap/bootstrap.js"></script>	
	<script src="assets/admin-template/js/king-common.js"></script>
	<script src="assets/admin-template/js/king-chart-stat-transparent.js"></script>
	<script src="assets/admin-template/js/king-table.js"></script>
    <script src="assets/admin-template/js/king-components-transparent.js"></script>
    
     <!-- Optional JavaScript -->
    <!-- jQuery first, Popper.js, Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="<?php echo base_url(); ?>assets/jquery/jquery-3-2-1.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <script src="<?php echo base_url(); ?>node_modules/bootstrap-slider/dist/bootstrap-slider.min.js"></script>
    
    <!-- <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script> -->

    <script src="<?php echo base_url(); ?>node_modules/chart.js/dist/Chart.js"></script>

    <!-- <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.js"></script> -->


    <!-- toggle -->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <!-- amchart -->
    <script src="assets/amchart/amcharts/amcharts.js"></script>
    <script src="assets/amchart/amcharts/radar.js"></script>
    <script src="assets/amchart/amcharts/serial.js"></script>
    <script src="assets/amchart/amcharts/themes/light.js"></script>
    <script src="assets/amchart/amcharts/themes/dark.js"></script>

    <!-- Slider -->
    <script>
        // With JQuery
        $("#ex13").slider({
            ticks: [0, 60, 120, 180, 240, 300, 360, 420, 480, 540, 600, 660, 720, 780, 840, 900, 960, 1020, 1080, 1140, 1200, 1260, 1320, 1380, 1439],
            ticks_labels: ['00.00', '01.00', '02.00', '03.00', '04.00', '06.00', '07.00', '08.00', '09.00', '10.00', '11.00', '12.00', '13.00', '14.00', '15.00', '16.00', '17.00', '18.00', '19.00', '20.00', '21.00', '22.00', '23.00', '23.59'],
            ticks_snap_bounds: 5
        });
    </script>

    <!-- datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        var currentDate = new Date();
        $("#mydate").datepicker().datepicker("setDate", new Date());
    </script>
    
    <!-- datepicker -->
    <script type="text/javascript">
        function change() {
            document.getElementById("dateForm").submit();
            console.log("date :\t\t\t"  + $("#date").val());
            console.log("previouse date :" + $("#previousDate").val());
            console.log("checkbox :\t\t" + $("#checkbox").val());
            console.log("radio :\t\t\t"+$("input[type=radio]:checked").val());
            
                var val = $("#timepicker").val() ;

                var h = Math.floor(val / 3600);
                var m = Math.floor(val % 3600 / 60);

                h = ('0' + h).slice(-2);
                m = ('0' + m).slice(-2);
                
            console.log("time picker :\t"+h+":"+m);
        }
    </script>

    <!-- activelink -->
    <script type="text/javascript">       
        var path = window.location.pathname.split('/');
        var pathActive = path[2]
        pathActive = pathActive.toLowerCase().trim();
        if (pathActive !== "" || pathActive !== null) {
        $('#exampleAccordion > li').removeClass('active');
            if (pathActive === "home") {
                $('#daynightMenu').addClass('active')
            }
            else if (pathActive === "map") {
                $('#mapMenu').addClass('active')
            }
            else if (pathActive === "daynight") {
                $('#daynightMenu').addClass('active')
            }
            else if (pathActive === "visual") {
                $('#visualMenu').addClass('active')
            }
            else if (pathActive === "report") {
                $('#reportMenu').addClass('active')
            }
            else if (pathActive === "sensor") {
                $('#sensorMenu').addClass('active')
            } else {
                $('#daynightMenu').addClass('active')
            }
        }
    </script>
    
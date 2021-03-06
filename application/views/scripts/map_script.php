<script src="<?php echo base_url(); ?>assets/js/raphael.min.js"></script>

<script>

    var paper = Raphael("sensor");// draw a circle at screen position (40,30) with radius 15
   
  // ----- Sensor 1 ----- //  
    var sensor1 = paper.circle(230,310,25);
    // adjust the circle’s attributes
    <?php if( $status[0]['status'] == 0){?>
        sensor1.attr({
        "fill" : "rgba(255,0,0,0.5)",
        "stroke" : "rgba(255,70,1,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 1 \n\nStatus: Inactive \n\nStart: <?php echo $status[0]['start']?> \n\nEnd:  <?php echo $status[0]['end']?> \n\nDuration:  <?php echo $status[0]['dur']?> "
        });
    <?php
        }else if( $status[0]['status'] == 1) {   
    ?>
         sensor1.attr({
        "fill" : "rgba(103,206,103,0.5)",
        "stroke" : "rgba(42,135,42,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 1 \n\nStatus: Active \n\nStart: <?php echo $status[0]['start']?> \n\nEnd:  <?php echo $status[0]['end']?> \n\nDuration:  <?php echo $status[0]['dur']?>  "
        });
    <?php 
        }else{
    ?>
        sensor1.attr({
        "fill" : "rgba(89, 140, 205,0.7)",
        "stroke" : "rgba(35, 112, 211 , 0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 1 \n\nStatus: Detected \n\nStart: <?php echo $status[0]['start']?> \n\nEnd:  <?php echo $status[0]['end']?> \n\nDuration:  <?php echo $status[0]['dur']?> "
        });
    <?php
        }
    ?>

    var sensor2 = paper.circle(190,270,25);
    // adjust the circle’s attributes
    <?php if( $status[1]['status'] == 0){?>
        sensor2.attr({
        "text" : "2",
        "fill" : "rgba(255,0,0,0.5)",
        "stroke" : "rgba(255,70,1,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 2 \n\nStatus: Inactive \n\nStart: <?php echo $status[1]['start']?> \n\nEnd:  <?php echo $status[1]['end']?> \n\nDuration:  <?php echo $status[1]['dur']?> "
        });
    <?php
        }else if( $status[1]['status'] == 1) {   
    ?>
         sensor2.attr({
        "fill" : "rgba(103,206,103,0.5)",
        "stroke" : "rgba(42,135,42,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 2 \n\nStatus: Active \n\nStart: <?php echo $status[1]['start']?> \n\nEnd:  <?php echo $status[1]['end']?> \n\nDuration:  <?php echo $status[1]['dur']?> "
        });
    <?php 
        }else{
    ?>
        sensor2.attr({
        "fill" : "rgba(89, 140, 205,0.7)",
        "stroke" : "rgba(35, 112, 211 , 0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 2 \n\nStatus: Detected \n\nStart: <?php echo $status[1]['start']?> \n\nEnd:  <?php echo $status[1]['end']?> \n\nDuration:  <?php echo $status[1]['dur']?> "
        });
    <?php
        }
    ?>

    var sensor3 = paper.circle(350,50,25);
    // adjust the circle’s attributes
    <?php if( $status[2]['status'] == 0){?>
        sensor3.attr({
        "fill" : "rgba(255,0,0,0.5)",
        "stroke" : "rgba(255,70,1,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 3 \n\nStatus: Inactive \n\nStart: <?php echo $status[2]['start']?> \n\nEnd:  <?php echo $status[2]['end']?> \n\nDuration:  <?php echo $status[2]['dur']?> "
        });
    <?php
        }else if( $status[2]['status'] == 1) {   
    ?>
         sensor3.attr({
        "fill" : "rgba(103,206,103,0.5)",
        "stroke" : "rgba(42,135,42,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 3 \n\nStatus: Active\n\nStart: <?php echo $status[2]['start']?> \n\nEnd:  <?php echo $status[2]['end']?> \n\nDuration:  <?php echo $status[2]['dur']?> "
        });
    <?php 
        }else{
    ?>
        sensor3.attr({
        "fill" : "rgba(89, 140, 205,0.7)",
        "stroke" : "rgba(35, 112, 211 , 0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 3 \n\nStatus: Detected\n\nStart: <?php echo $status[2]['start']?> \n\nEnd:  <?php echo $status[2]['end']?> \n\nDuration:  <?php echo $status[2]['dur']?> "
        });
    <?php
        }
    ?>

    var sensor4 = paper.circle(292,54,25);
    // adjust the circle’s attributes
    <?php if( $status[3]['status'] == 0){?>
        sensor4.attr({
        "fill" : "rgba(255,0,0,0.5)",
        "stroke" : "rgba(255,70,1,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 4 \n\nStatus: Inactive\n\nStart: <?php echo $status[3]['start']?> \n\nEnd:  <?php echo $status[3]['end']?> \n\nDuration:  <?php echo $status[3]['dur']?> "
        });
    <?php
        }else if( $status[3]['status'] == 1) {   
    ?>
         sensor4.attr({
        "fill" : "rgba(103,206,103,0.5)",
        "stroke" : "rgba(42,135,42,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 4 \n\nStatus: Active\n\nStart: <?php echo $status[3]['start']?> \n\nEnd:  <?php echo $status[3]['end']?> \n\nDuration:  <?php echo $status[3]['dur']?> "
        });
    <?php 
        }else{
    ?>
        sensor4.attr({
        "fill" : "rgba(89, 140, 205,0.7)",
        "stroke" : "rgba(35, 112, 211 , 0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 4 \n\nStatus: Detected \n\nStart: <?php echo $status[3]['start']?> \n\nEnd:  <?php echo $status[3]['end']?> \n\nDuration:  <?php echo $status[3]['dur']?> "
        });
    <?php
        }
    ?>

     var sensor5 = paper.circle(235,55,25);
    // adjust the circle’s attributes
    <?php if( $status[4]['status'] == 0){?>
        sensor5.attr({
        "fill" : "rgba(255,0,0,0.5)",
        "stroke" : "rgba(255,70,1,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 5 \n\nStatus: Inactive\n\nStart: <?php echo $status[4]['start']?> \n\nEnd:  <?php echo $status[4]['end']?> \n\nDuration:  <?php echo $status[4]['dur']?> "
        });
    <?php
        }else if( $status[4]['status'] == 1) {   
    ?>
         sensor5.attr({
        "fill" : "rgba(103,206,103,0.5)",
        "stroke" : "rgba(42,135,42,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 5 \n\nStatus: Active\n\nStart: <?php echo $status[4]['start']?> \n\nEnd:  <?php echo $status[4]['end']?> \n\nDuration:  <?php echo $status[4]['dur']?> "
        });
    <?php 
        }else{
    ?>
        sensor5.attr({
        "fill" : "rgba(89, 140, 205,0.7)",
        "stroke" : "rgba(35, 112, 211 , 0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 5 \n\nStatus: Detected\n\nStart: <?php echo $status[4]['start']?> \n\nEnd:  <?php echo $status[4]['end']?> \n\nDuration:  <?php echo $status[4]['dur']?> "
        });
    <?php
        }
    ?>

    var sensor6 = paper.circle(210,160,25);
    // adjust the circle’s attributes
    <?php if( $status[5]['status'] == 0){?>
        sensor6.attr({
        "fill" : "rgba(255,0,0,0.5)",
        "stroke" : "rgba(255,70,1,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 6 \n\nStatus: Inactive\n\nStart: <?php echo $status[5]['start']?> \n\nEnd:  <?php echo $status[5]['end']?> \n\nDuration:  <?php echo $status[5]['dur']?> "
        });
    <?php
        }else if( $status[5]['status'] == 1) {   
    ?>
         sensor6.attr({
        "fill" : "rgba(103,206,103,0.5)",
        "stroke" : "rgba(42,135,42,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 6 \n\nStatus: Active\n\nStart: <?php echo $status[5]['start']?> \n\nEnd:  <?php echo $status[5]['end']?> \n\nDuration:  <?php echo $status[5]['dur']?> "
        });
    <?php 
        }else{
    ?>
        sensor6.attr({
        "fill" : "rgba(89, 140, 205,0.7)",
        "stroke" : "rgba(35, 112, 211 , 0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 6 \n\nStatus: Detected\n\nStart: <?php echo $status[5]['start']?> \n\nEnd:  <?php echo $status[5]['end']?> \n\nDuration:  <?php echo $status[5]['dur']?> "
        });
    <?php
        }
    ?>

     var sensor7 = paper.circle(450,300,25);
    // adjust the circle’s attributes
        <?php if( $status[6]['status']  == 0){?>
        sensor7.attr({
        "fill" : "rgba(255,0,0,0.5)",
        "stroke" : "rgba(255,70,1,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 7 \n\nStatus: Inactive\n\nStart: <?php echo $status[6]['start']?> \n\nEnd:  <?php echo $status[6]['end']?> \n\nDuration:  <?php echo $status[6]['dur']?> "
        });
    <?php
        }else if( $status[6]['status']  == 1) {   
    ?>
         sensor7.attr({
        "fill" : "rgba(103,206,103,0.5)",
        "stroke" : "rgba(42,135,42,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 7 \n\nStatus: Active\n\nStart: <?php echo $status[6]['start']?> \n\nEnd:  <?php echo $status[6]['end']?> \n\nDuration:  <?php echo $status[6]['dur']?> "
        });
    <?php 
        }else{
    ?>
        sensor7.attr({
        "fill" : "rgba(89, 140, 205,0.7)",
        "stroke" : "rgba(35, 112, 211 , 0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 7 \n\nStatus: Detected\n\nStart: <?php echo $status[6]['start']?> \n\nEnd:  <?php echo $status[6]['end']?> \n\nDuration:  <?php echo $status[6]['dur']?> "
        });
    <?php
        }
    ?>
   
    var sensor8 = paper.circle(437,247,25);
    // adjust the circle’s attributes

        <?php if( $status[7]['status'] == 0){?>
        sensor8.attr({
        "fill" : "rgba(255,0,0,0.5)",
        "stroke" : "rgba(255,70,1,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 8 \n\nStatus: Inactive\n\nStart: <?php echo $status[7]['start']?> \n\nEnd:  <?php echo $status[7]['end']?> \n\nDuration:  <?php echo $status[7]['dur']?> "
        });
    <?php
        }else if( $status[7]['status'] == 1) {   
    ?>
         sensor8.attr({
        "fill" : "rgba(103,206,103,0.5)",
        "stroke" : "rgba(42,135,42,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 8 \n\nStatus: Active\n\nStart: <?php echo $status[7]['start']?> \n\nEnd:  <?php echo $status[7]['end']?> \n\nDuration:  <?php echo $status[7]['dur']?> "
        });
    <?php 
        }else{
    ?>
        sensor8.attr({
        "fill" : "rgba(89, 140, 205,0.7)",
        "stroke" : "rgba(35, 112, 211 , 0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 8 \n\nStatus: Detected\n\nStart: <?php echo $status[7]['start']?> \n\nEnd:  <?php echo $status[7]['end']?> \n\nDuration:  <?php echo $status[7]['dur']?> "
        });
    <?php
        }
    ?>

     var sensor9 = paper.circle(490,160,25);
    // adjust the circle’s attributes
        <?php if( $status[8]['status'] == 0){?>
        sensor9.attr({
        "fill" : "rgba(255,0,0,0.5)",
        "stroke" : "rgba(255,70,1,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 9 \n\nStatus: Inactive\n\nStart: <?php echo $status[8]['start']?> \n\nEnd:  <?php echo $status[8]['end']?> \n\nDuration:  <?php echo $status[8]['dur']?> "
        });
    <?php
        }else if( $status[8]['status'] == 1) {   
    ?>
         sensor9.attr({
        "fill" : "rgba(103,206,103,0.5)",
        "stroke" : "rgba(42,135,42,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 9 \n\nStatus: Active\n\nStart: <?php echo $status[8]['start']?> \n\nEnd:  <?php echo $status[8]['end']?> \n\nDuration:  <?php echo $status[8]['dur']?> "
        });
    <?php 
        }else{
    ?>
        sensor9.attr({
        "fill" : "rgba(89, 140, 205,0.7)",
        "stroke" : "rgba(35, 112, 211 , 0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 9 \n\nStatus: Detected\n\nStart: <?php echo $status[8]['start']?> \n\nEnd:  <?php echo $status[8]['end']?> \n\nDuration:  <?php echo $status[8]['dur']?> "
        });
    <?php
        }
    ?>

    var sensor10 = paper.circle(380,180,25);
    // adjust the circle’s attributes
    <?php if( $status[9]['status'] == 0){?>
        sensor10.attr({
        "fill" : "rgba(255,0,0,0.5)",
        "stroke" : "rgba(255,70,1,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 10 \n\nStatus: Inactive\n\nStart: <?php echo $status[9]['start']?> \n\nEnd:  <?php echo $status[9]['end']?> \n\nDuration:  <?php echo $status[9]['dur']?> "
        });
    <?php
        }else if( $status[9]['status'] == 1) {   
    ?>
         sensor10.attr({
        "fill" : "rgba(103,206,103,0.5)",
        "stroke" : "rgba(42,135,42,0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 10 \n\nStatus: Active\n\nStart: <?php echo $status[9]['start']?> \n\nEnd:  <?php echo $status[9]['end']?> \n\nDuration:  <?php echo $status[9]['dur']?> "
        });
    <?php 
        }else{
    ?>
        sensor10.attr({
        "fill" : "rgba(89, 140, 205,0.7)",
        "stroke" : "rgba(35, 112, 211 , 0.5)",
        "stroke-width" : 6,
        "title" : "Sensor : 10 \n\nStatus: Detected\n\nStart: <?php echo $status[9]['start']?> \n\nEnd:  <?php echo $status[9]['end']?> \n\nDuration:  <?php echo $status[9]['dur']?> "
        });
    <?php
        }
    ?>

</script>

<script>
var slider = document.getElementById("timepicker");
var output = document.getElementById("displayTime");
output.innerHTML = slider.value;

window.onload = function() {
    var val = (slider.value) ;

    var h = Math.floor(val / 3600);
    var m = Math.floor(val % 3600 / 60);
   
    h = ('0' + h).slice(-2);
    m = ('0' + m).slice(-2);

    output.innerHTML = h+":"+m;
}

slider.oninput = function() {
    var val = (this.value) ;

    var h = Math.floor(val / 3600);
    var m = Math.floor(val % 3600 / 60);
   
    h = ('0' + h).slice(-2);
    m = ('0' + m).slice(-2);

    output.innerHTML = h+":"+m;
}
</script>

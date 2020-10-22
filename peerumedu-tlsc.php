<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
require_once 'config/config.php';
 $db = getDbInstance();
 $db->where('id', 1);
 $timer = $db->getOne('timer');

 $db1 = getDbInstance();
 $db1->where('id', 5);
 $data = $db->getOne('pages');
 $url_link = $data['url_link'];
date_default_timezone_set('Asia/Kolkata');
$date_time = date('H:i:s',strtotime($timer['timer']));
$check_point  = $date_time;  
 
?>
<div class="container">
  <h2 class="date_data" id="demo"></h2>
  </div>

</body>
</html>
<script type="text/javascript">
  window.setInterval(function(){
  $.ajax({
    url:"ajax_check_time.php",
    dataType:'json',
    success:function(data){
      console.log(data);
      //now data is the current time on the server, react accordingly with location.reload(true);
     

       if(data.time>='<?php echo $check_point; ?>'){

          window.location.href="<?php echo $url_link; ?>";

       }



    }
  });

}, 1000); // check every 10 seconds (change to any milliseconds you want)
</script>

<script>


// Set the date we're counting down to
var countDownDate = new Date("<?php echo date('M d, Y H:i:s',strtotime($timer['timer'])); ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<?php

$nid = $node->nid;

?>

<link rel="stylesheet" type="text/css" href="/sites/all/themes/bartik/templates/css/mirrormain.css">
<link rel="stylesheet" type="text/css" href="/sites/all/themes/bartik/templates/css/weathericons.css">

<!-- Define variables from $node -->
<script type="text/javascript">
    var field_temperature_format = "<?php echo $node->field_temperature_format['und'][0]['value'];?>";
    var field_time_format = "<?php echo $node->field_time_format['und'][0]['value'];?>";
    var field_weather_location = "<?php echo $node->field_weather_location['und'][0]['safe_value'];?>";
    var field_calendar_feeds = "<?php echo $node->field_calendar_feeds['und'][0]['url'];?>";

    /* Extra Variables for later
        field_timezone
        field_calendar_feeds
        field_mirror_background_image
         field_background_image_opacity
         field_morning_messages
         field_afternoon_messages
         field_evening_messages
    */
</script>

<div class="top left"><div class="date small dimmed"></div><div class="time"></div><div class="calendar xxsmall"></div></div>
<div class="top right"><div class="windsun small dimmed"></div><div class="temp"></div><div class="forecast small dimmed"></div></div>
<!--<div class="center-top"><img src="images/finger.png" /></div>-->
<div class="center-ver center-hor"></div>
<div class="lower-third center-hor"><div class="compliment light"></div></div>
<div class="bottom center-hor"><div class="news medium"></div></div>

<!-- Include JS Files -->
<script src="/sites/all/themes/bartik/templates/js/jquery.js"></script>
<script src="/sites/all/themes/bartik/templates/js/jquery.feedToJSON.js"></script>
<script src="/sites/all/themes/bartik/templates/js/ical_parser.js"></script>
<script src="/sites/all/themes/bartik/templates/js/moment-with-locales.min.js"></script>
<script src="/sites/all/themes/bartik/templates/js/config.js"></script>
<script src="/sites/all/themes/bartik/templates/js/rrule.js"></script>
<script src="/sites/all/themes/bartik/templates/js/version/version.js" type="text/javascript"></script>
<script src="/sites/all/themes/bartik/templates/js/calendar/calendar.js" type="text/javascript"></script>
<script src="/sites/all/themes/bartik/templates/js/compliments/compliments.js" type="text/javascript"></script>
<script src="/sites/all/themes/bartik/templates/js/weather/weather.js" type="text/javascript"></script>
<script src="/sites/all/themes/bartik/templates/js/time/time.js" type="text/javascript"></script>
<script src="/sites/all/themes/bartik/templates/js/news/news.js" type="text/javascript"></script>
<script src="/sites/all/themes/bartik/templates/js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
<!-- <script src="/sites/all/themes/bartik/templates/js/socket.io.min.js"></script> -->
<!-- <meta http-equiv="refresh" content="9000"> -->
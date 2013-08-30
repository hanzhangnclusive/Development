<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<script type="text/javascript" src="http://dev.jontaffer.com.vhost.zerolag.com/lib/jquery-1.9.0.min.js"></script>
<script type="text/javascript" language="javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<script type="text/javascript" src="http://dev.jontaffer.com.vhost.zerolag.com/js/blogger.min.js"></script>
<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/jontaffer.json?callback=twitterCallback2&count=5"></script>
<script>$("ul#twitter_update_list").cycle({next:"ul#twitter_update_list",fx:"fade",delay:-5e3})</script>
</head>

<body>
<div class="twitt_container">
<div class="twit_bird"></div>
<div id="twitter">
   <div id="twitter_code">
     <div id="twitter-wrap">
     <ul id="twitter_update_list">
     <li>Loading Tweets..</li>
     </ul></div></div>
   <div id="twitter_line"></div>
   <div id="twitter_overlay"></div></div>
</div>
</body>
</html>
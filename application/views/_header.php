<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>贵州气象在线 - 手机版</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="贵州天气网 | 贵州天气预报 | 贵州天气实况 | 贵州预警" />
<meta name="description" content="贵州气象在线是集贵州省天气预报，天气实况，气象预警预警，科普信息与一体的天气信息门户网站，旨在为人们提供最新最权威的气象信息。" />
<link rel="Shortcut icon" href="/resources/images/favicon.ico" />
<link type="text/css" rel="stylesheet" href="/resources/styles/style.css" />
<script type="text/javascript" charset="utf-8" src="/resources/scripts/jquery-1.10.1.min.js"></script>
</head>
<body>

	<div class="nav">
    <a <?php if($this->uri->uri_string()==="forecast"){ echo "class='active'";} ;?>href="/forecast">天气预报</a>
    <a <?php if($this->uri->uri_string()==="alarm"){ echo "class='active'";} ;?> href="/alarm">预警信息</a>
    <a <?php if($this->uri->uri_string()==="weather"){ echo "class='active'";} ;?>href="/weather?citycode=57816">天气实况</a>
    <a <?php if($this->uri->uri_string()==="news"){ echo "class='active'";} ;?>class="nborder" href="/news">天气新闻</a>
	</div><!-- nav -->


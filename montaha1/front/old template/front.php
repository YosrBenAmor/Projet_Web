<?php
include "../Controller/produitC.php";

$produit=new produitC();
$produitC = new produitC();
$listeproduit=$produit->afficherproduit();






if(isset($_GET['recherche']))
                       {
                        $search_value=$_GET["recherche"];
                        
                        $listeproduit= $produit->recherche($search_value);
                        }
 

?>



<!DOCTYPE html>
<!-- saved from url=(0047)https://www.phpjabbers.com/mega-sale.php?rel=fs -->
<html class="h-100" lang="en"><div id="twoseven-scripts" data-info="Scripts added by TwoSeven extension" style="display: none !important; position: static !important; top: 0px !important; left: 0px !important; width: 0px !important; height: 0px !important;"><script async="" src="./front_files/pj-analytics.min.js.téléchargé"></script><script async="" src="./front_files/fbevents.js.téléchargé"></script><script async="" src="./front_files/analytics.js.téléchargé"></script><script async="" src="./front_files/gtm.js.téléchargé"></script><script type="text/javascript" id="__tmpScript-494115345" data-added-by-two-seven="1">(function() {
        window.twoseven = {};
      })();</script><script type="text/javascript" id="__tmpScript-616935671" data-added-by-two-seven="1">(function() {
        window.twoseven.waitForDOMNode = async function t(e,t=document){e=e||{};const{type:n,value:o}=e;if(!n||!o)throw new Error("Must specify identifier");let s=o;switch(n){case"tag":s=o.toUpperCase()}if("check"!==n){const e=await i({type:"selector",value:s},[],t);if(e)return new Promise(t=>t(e))}async function i({type:e,value:t},n,o){let s;switch(e){case"tag":s=n.find(e=>e.tagName===t);break;case"selector":s=o.querySelector(t);break;case"check":for(const e of n){if(await t(e))return e}}return s}return new Promise((e,o)=>{const a=new MutationObserver(async o=>{for(const r of o)if("childList"===r.type){const o=Array.from(r.addedNodes),w=await i({type:n,value:s},o,t);if(w)return a.disconnect(),e(w)}});a.observe(t,{childList:!0,subtree:!0})})};
      })();</script><script type="text/javascript" id="__tmpScript-86577529" data-added-by-two-seven="1">(function() {
        
    window.twoseven.reportError = function n(e,t,n){"string"==typeof(n=n||{})&&(n={message:n});const{message:o,stack:s}=t;Object.assign(n,{tag:e,error:{message:o,stack:s}}),window.tsExtGetPostToParent()({name:name,tag:e,action:"report-error",json:n}),console.error(JSON.stringify(n.error))}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-836302920" data-added-by-two-seven="1">(function() {
        
    window.twosevenHmsToSecondsOnly = function(str) {
        var p = str.split(':'),
            s = 0, m = 1;

        while (p.length > 0) {
            s += m * parseInt(p.pop(), 10);
            m *= 60;
        }

        return s;
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-701661282" data-added-by-two-seven="1">(function() {
        window.twosevenExtLog = function(e,o,c){o||(o=e,e=void 0);let n=c||"black";if(c)switch(c){case"success":n="Green";break;case"info":n="DodgerBlue";break;case"error":n="Red";break;case"warning":n="Orange";break;default:n=c}e?console.log("%c"+e+": "+o,`color:${n}`):console.log("%c"+o,`color:${n}`)};
      })();</script><script type="text/javascript" id="__tmpScript-476176394" data-added-by-two-seven="1">(function() {
        
    document.twosevenGET = function(url, callback) {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
          if (xmlhttp.status == 200) {
            callback(null, xmlhttp.responseText);
          } else {
            callback('something else other than 200 was returned', '');
          }
        }
      };
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    };
  ;
      })();</script><script type="text/javascript" id="__tmpScript-808883311" data-added-by-two-seven="1">(function() {
        
    window.triggerEvent = function(e,t,n,o=!1){let s;o?(n&&"string"!=typeof n&&(n=JSON.stringify(n)),s=n):s={data:n},window.twosevenScriptsDiv&&n&&"object"==typeof n&&(console.warn(`WARNING: Attempting to send an object via event.detail from CS->Page does not work on Firefox: ${JSON.stringify(n)}`),console.error((new Error).stack));var i=new CustomEvent(t,{bubbles:!0,composed:!0,detail:s});e.dispatchEvent(i)}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-432659965" data-added-by-two-seven="1">(function() {
        window.twoseven.postTo = async function o(e,t,n=!1){let o;return t.name=t.name||name,o=n?new Promise(e=>{const n=`ack-${t.action}-${1e9*Math.random()|0}`;t.ack={event:n};window.debug&&["play","pause","currentTime"].some(e=>t.action.includes(e)),window.addEventListener("message",function t({data:o={}}){o.action===n&&(window.removeEventListener("message",t),e(o.json))})}):new Promise(e=>e()),e.postMessage(t,"*"),o};
      })();</script><script type="text/javascript" id="__tmpScript-404003951" data-added-by-two-seven="1">(function() {
        window.tsExtGetPostTo = function s(){return window.twoseven&&window.twoseven.postTo||window.postTo};
      })();</script><script type="text/javascript" id="__tmpScript-839383467" data-added-by-two-seven="1">(function() {
        window.tsExtGetPostToParent = function i(){return window.twoseven&&window.twoseven.postToParent||window.postToParent};
      })();</script><script type="text/javascript" id="__tmpScript-318137273" data-added-by-two-seven="1">(function() {
        window.twoseven.postResponse = async function a(e,t){const{source:n,data:{ack:{event:o}}}=e;window.tsExtGetPostTo()(n,{action:o,json:t})};
      })();</script><script type="text/javascript" id="__tmpScript-19661010" data-added-by-two-seven="1">(function() {
        window.twoseven.postToParent = async function r(e,t=!1){return window.tsExtGetPostTo()(window.parent,e,t)};
      })();</script><script type="text/javascript" id="__tmpScript-780645558" data-added-by-two-seven="1">(function() {
        window.twoseven.postToTop = async function w(e,t=!1){return window.tsExtGetPostTo()(window.top,e,t)};
      })();</script><script type="text/javascript" id="__tmpScript-538754379" data-added-by-two-seven="1">(function() {
        
    window.twoseven.getFromStorage = e=>new Promise((t,n)=>{const o="get-from-storage-"+(1e9*Math.random()|0);window.addEventListener(o,e=>{window.removeEventListener(o,this);const{detail:{data:{value:n}}}=e;t(n)}),triggerEvent(window,"get-from-storage",{key:e,evt:o})})
    window.twoseven.saveToStorage = e=>{triggerEvent(window,"save-to-storage",e)}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-666277276" data-added-by-two-seven="1">(function() {
        
    window.attachHistoryListeners = function d(){var e=history.pushState;history.pushState=function(t,n,o){return"function"==typeof history.onpushstate&&history.onpushstate({state:t}),triggerEvent(window,"pushstate",{uri:o}),e.apply(history,arguments)};var t=history.replaceState;history.replaceState=function(e){return"function"==typeof history.onreplacestate&&history.onreplacestate({state:e}),t.apply(history,arguments)}}
    window.attachHistoryListeners()
  ;
      })();</script><script type="text/javascript" id="__tmpScript-320191317" data-added-by-two-seven="1">(function() {
        window.twoseven.once = function c(e,t,n){e.addEventListener(t,function o(s){e.removeEventListener(t,o),n(s)})};
      })();</script><script type="text/javascript" id="__tmpScript-464320129" data-added-by-two-seven="1">(function() {
        
    window.twoseven.isOnTwoSevenTab = async () => {
      const result = await window.twoseven.postTo(window, { action: 'is-on-twoseven-tab' }, true)
      return result
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-75478935" data-added-by-two-seven="1">(function() {
        
    window.twoseven.isPaused = async () => {
      const result = await window.twoseven.postTo(window, { action: 'twoseven:pause-state' }, true)
      return result
    }
  ;
      })();</script><script type="text/javascript" async="" src="./front_files/f.txt"></script><script type="text/javascript" id="__tmpScript-412252960" data-added-by-two-seven="1">(function() {
        window.twoseven = {};
      })();</script><script type="text/javascript" id="__tmpScript-494381555" data-added-by-two-seven="1">(function() {
        window.twoseven.waitForDOMNode = async function t(e,t=document){e=e||{};const{type:n,value:o}=e;if(!n||!o)throw new Error("Must specify identifier");let s=o;switch(n){case"tag":s=o.toUpperCase()}if("check"!==n){const e=await i({type:"selector",value:s},[],t);if(e)return new Promise(t=>t(e))}async function i({type:e,value:t},n,o){let s;switch(e){case"tag":s=n.find(e=>e.tagName===t);break;case"selector":s=o.querySelector(t);break;case"check":for(const e of n){if(await t(e))return e}}return s}return new Promise((e,o)=>{const a=new MutationObserver(async o=>{for(const r of o)if("childList"===r.type){const o=Array.from(r.addedNodes),w=await i({type:n,value:s},o,t);if(w)return a.disconnect(),e(w)}});a.observe(t,{childList:!0,subtree:!0})})};
      })();</script><script type="text/javascript" id="__tmpScript-382703836" data-added-by-two-seven="1">(function() {
        
    window.twoseven.reportError = function n(e,t,n){"string"==typeof(n=n||{})&&(n={message:n});const{message:o,stack:s}=t;Object.assign(n,{tag:e,error:{message:o,stack:s}}),window.tsExtGetPostToParent()({name:name,tag:e,action:"report-error",json:n}),console.error(JSON.stringify(n.error))}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-64156896" data-added-by-two-seven="1">(function() {
        
    window.twosevenHmsToSecondsOnly = function(str) {
        var p = str.split(':'),
            s = 0, m = 1;

        while (p.length > 0) {
            s += m * parseInt(p.pop(), 10);
            m *= 60;
        }

        return s;
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-861372551" data-added-by-two-seven="1">(function() {
        window.twosevenExtLog = function(e,o,c){o||(o=e,e=void 0);let n=c||"black";if(c)switch(c){case"success":n="Green";break;case"info":n="DodgerBlue";break;case"error":n="Red";break;case"warning":n="Orange";break;default:n=c}e?console.log("%c"+e+": "+o,`color:${n}`):console.log("%c"+o,`color:${n}`)};
      })();</script><script type="text/javascript" id="__tmpScript-343136859" data-added-by-two-seven="1">(function() {
        
    document.twosevenGET = function(url, callback) {
      var xmlhttp = new XMLHttpRequest();

      xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == XMLHttpRequest.DONE ) {
          if (xmlhttp.status == 200) {
            callback(null, xmlhttp.responseText);
          } else {
            callback('something else other than 200 was returned', '');
          }
        }
      };
      xmlhttp.open("GET", url, true);
      xmlhttp.send();
    };
  ;
      })();</script><script type="text/javascript" id="__tmpScript-725820326" data-added-by-two-seven="1">(function() {
        
    window.triggerEvent = function(e,t,n,o=!1){let s;o?(n&&"string"!=typeof n&&(n=JSON.stringify(n)),s=n):s={data:n},window.twosevenScriptsDiv&&n&&"object"==typeof n&&(console.warn(`WARNING: Attempting to send an object via event.detail from CS->Page does not work on Firefox: ${JSON.stringify(n)}`),console.error((new Error).stack));var i=new CustomEvent(t,{bubbles:!0,composed:!0,detail:s});e.dispatchEvent(i)}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-984293232" data-added-by-two-seven="1">(function() {
        window.twoseven.postTo = async function o(e,t,n=!1){let o;return t.name=t.name||name,o=n?new Promise(e=>{const n=`ack-${t.action}-${1e9*Math.random()|0}`;t.ack={event:n};window.debug&&["play","pause","currentTime"].some(e=>t.action.includes(e)),window.addEventListener("message",function t({data:o={}}){o.action===n&&(window.removeEventListener("message",t),e(o.json))})}):new Promise(e=>e()),e.postMessage(t,"*"),o};
      })();</script><script type="text/javascript" id="__tmpScript-124796434" data-added-by-two-seven="1">(function() {
        window.tsExtGetPostTo = function s(){return window.twoseven&&window.twoseven.postTo||window.postTo};
      })();</script><script type="text/javascript" id="__tmpScript-573045785" data-added-by-two-seven="1">(function() {
        window.tsExtGetPostToParent = function i(){return window.twoseven&&window.twoseven.postToParent||window.postToParent};
      })();</script><script type="text/javascript" id="__tmpScript-419818031" data-added-by-two-seven="1">(function() {
        window.twoseven.postResponse = async function a(e,t){const{source:n,data:{ack:{event:o}}}=e;window.tsExtGetPostTo()(n,{action:o,json:t})};
      })();</script><script type="text/javascript" id="__tmpScript-404664828" data-added-by-two-seven="1">(function() {
        window.twoseven.postToParent = async function r(e,t=!1){return window.tsExtGetPostTo()(window.parent,e,t)};
      })();</script><script type="text/javascript" id="__tmpScript-349460641" data-added-by-two-seven="1">(function() {
        window.twoseven.postToTop = async function w(e,t=!1){return window.tsExtGetPostTo()(window.top,e,t)};
      })();</script><script type="text/javascript" id="__tmpScript-975066039" data-added-by-two-seven="1">(function() {
        
    window.twoseven.getFromStorage = e=>new Promise((t,n)=>{const o="get-from-storage-"+(1e9*Math.random()|0);window.addEventListener(o,e=>{window.removeEventListener(o,this);const{detail:{data:{value:n}}}=e;t(n)}),triggerEvent(window,"get-from-storage",{key:e,evt:o})})
    window.twoseven.saveToStorage = e=>{triggerEvent(window,"save-to-storage",e)}
  ;
      })();</script><script type="text/javascript" id="__tmpScript-626615405" data-added-by-two-seven="1">(function() {
        
    window.attachHistoryListeners = function d(){var e=history.pushState;history.pushState=function(t,n,o){return"function"==typeof history.onpushstate&&history.onpushstate({state:t}),triggerEvent(window,"pushstate",{uri:o}),e.apply(history,arguments)};var t=history.replaceState;history.replaceState=function(e){return"function"==typeof history.onreplacestate&&history.onreplacestate({state:e}),t.apply(history,arguments)}}
    window.attachHistoryListeners()
  ;
      })();</script><script type="text/javascript" id="__tmpScript-634368894" data-added-by-two-seven="1">(function() {
        window.twoseven.once = function c(e,t,n){e.addEventListener(t,function o(s){e.removeEventListener(t,o),n(s)})};
      })();</script><script type="text/javascript" id="__tmpScript-399344133" data-added-by-two-seven="1">(function() {
        
    window.twoseven.isOnTwoSevenTab = async () => {
      const result = await window.twoseven.postTo(window, { action: 'is-on-twoseven-tab' }, true)
      return result
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-523680837" data-added-by-two-seven="1">(function() {
        
    window.twoseven.isPaused = async () => {
      const result = await window.twoseven.postTo(window, { action: 'twoseven:pause-state' }, true)
      return result
    }
  ;
      })();</script><script type="text/javascript" id="__tmpScript-853107717" data-added-by-two-seven="1">(function() {
        
      const modal = document.querySelector('.twoseven-ext-tab-media-modal')
      const modalCloseBtn = modal.querySelector('.close')
      function closeModal () {
        modal.style.display = 'none'
        const frame = document.querySelector('#twoseven-ext-tab-media-iframe').contentWindow
        frame.postMessage({
          __evt_name: 'modal-hide'
        }, '*')
      }
      modalCloseBtn.onclick = closeModal

      window.onmessage = function (e) {
        if (e.data.__evt_name === 'modal-hide') {
          closeModal()
        }
      }

      window.twoseven.closeTabMediaModal = closeModal

      window.onclick = function (e) {
        if (e.target.id === 'twoseven-ext-tab-media-modal' && modal.style.display === 'block') {
            closeModal()
        }
      }
    ;
      })();</script><script type="text/javascript" async="" src="./front_files/f(1).txt"></script><script type="text/javascript" async="" src="./front_files/f(2).txt"></script></div><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Buy PHP Scripts in Bundle (Mega Sale) | PHPJabbers</title>

	

	<meta name="description" content="">

	<meta name="robots" content="index,follow">

	<meta name="theme-color" content="#FFFFFF">

	<link rel="preload" as="image" href="https://cdn.phpjabbers.com/css/images/sprite.png">
<link rel="preconnect" href="https://stats.g.doubleclick.net/">
<link rel="dns-prefetch" href="https://stats.g.doubleclick.net/">
<link rel="preconnect" href="https://www.googletagmanager.com/">
<link rel="dns-prefetch" href="https://www.googletagmanager.com/">
<link rel="dns-prefetch" href="https://www.google-analytics.com/">
<link rel="preconnect" href="https://connect.facebook.net/">
<link rel="dns-prefetch" href="https://connect.facebook.net/">
<link rel="preconnect" href="https://www.facebook.com/">
<link rel="dns-prefetch" href="https://www.facebook.com/">
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href="./front_files/css2" rel="stylesheet">
	<!--<base href="https://www.phpjabbers.com/">--><base href=".">


	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-5JK7KNZ');</script>
<!-- End Google Tag Manager -->
<!-- Start of phpjabbers Zendesk Widget script -->
<!-- <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=c4bd3969-8ed4-4798-b629-0be07391ffd5"> </script> -->
<!-- End of phpjabbers Zendesk Widget script -->


<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.phpjabbers.com/css/images/favicon.ico">
    <link rel="manifest" href="https://www.phpjabbers.com/manifest.json">
	<link type="text/css" rel="stylesheet" href="./front_files/bootstrap.min.css" media="all">
	<link type="text/css" rel="stylesheet" href="./front_files/css2" media="all">
	<link type="text/css" rel="stylesheet" href="./front_files/main_new.min.css" media="all">


	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-241894-2', 'auto');
	ga('send', 'pageview');
	</script>
<!-- Hotjar Tracking Code for https://www.phpjabbers.com -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2841064,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script><script async="" src="./front_files/hotjar-2841064.js.téléchargé"></script>
	
	
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','//connect.facebook.net/en_US/fbevents.js');
	fbq('init', '443946209504641');
	fbq('track', "PageView");
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=443946209504641&ev=PageView&noscript=1" /></noscript>

	<script>
	(function (w,d,s,u,a) {
	a=d.createElement(s),m=d.getElementsByTagName(s)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//cdn.phpjabbers.com/js/pj-analytics.min.js');
	</script>

<style type="text/css">:root zeus-ad, :root topadblock, :root span[id^="ezoic-pub-ad-placeholder-"], :root guj-ad, :root div[jsdata*="CarouselPLA-"][data-id^="CarouselPLA-"], :root div[id^="yandex_ad"], :root div[id^="vuukle-ad-"], :root div[id^="rc-widget-"], :root div[id^="lazyad-"], :root div[id^="js-dfp-"], :root div[id^="gtm-ad-"], :root div[id^="gpt_ad_"], :root div[id^="div-gpt-"], :root div[id^="dfp-slot-"], :root div[id^="dfp-ad-"], :root div[id^="advads_"], :root div[id^="adspot-"], :root div[id^="ads300_250-widget-"], :root div[id^="ads300_100-widget-"], :root div[id^="ads250_250-widget-"], :root div[id^="adrotate_widgets-"], :root div[id^="adngin-"], :root div[id^="adfox_"], :root div[id^="ad_script_"], :root div[id^="ad-server-"], :root div[id^="ad-gpt-"], :root div[id^="ad-div-"], :root div[id*="ScriptRoot"], :root div[id*="MarketGid"], :root div[data-mpu1], :root div[data-insertion], :root div[data-id-advertdfpconf], :root div[data-google-query-id], :root hl-adsense, :root div[data-contentexchange-widget], :root div[data-content="Advertisement"], :root div[data-alias="300x250 Ad 2"], :root div[data-alias="300x250 Ad 1"], :root div[data-adzone], :root div[data-adunit-path], :root div[data-adname], :root div[data-ad-wrapper], :root div[data-ad-targeting], :root div[data-ad-placeholder], :root div[class^="s-dfp-"], :root div[class^="native-ad-"], :root div[data-dfp-id], :root div[class^="kiwi-ad-wrapper"], :root div[class^="Adstyled__AdWrapper-"], :root div[aria-label="Ads"], :root display-ads, :root aside[id^="advads_ad_widget-"], :root aside[id^="adrotate_widgets-"], :root article.ad, :root ark-top-ad, :root app-advertisement, :root amp-embed[type="taboola"], :root amp-connatix-player, :root amp-ad-custom, :root ad-shield-ads, :root ad-desktop-sidebar, :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[onmousedown^="this.href='https://paid.outbrain.com/network/redir?"][target="_blank"], :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"] + .ob_source, :root a[href^="https://www.vfreecams.com/in/?track="], :root a[href^="https://www.rabbits.webcam/?id="], :root a[href^="https://www.purevpn.com/"][href*="&utm_source=aff-"], :root a[href^="https://www.privateinternetaccess.com/"] > img, :root a[href^="https://www.passeura.com/"], :root a[href^="https://www.oneclickroot.com/?tap_a="] > img, :root a[href^="https://www.oboom.com/ref/"], :root a[href^="https://www.nutaku.net/signup/landing/"], :root a[href^="https://www.nudeidols.com/cams/"], :root a[href^="https://www.mypornstarcams.com/landing/click/"], :root a[href^="https://www.mrskin.com/account/"], :root a[href^="https://www.kingsoffetish.com/tour?partner_id="], :root a[href^="https://www.jackery.com?aff="] > img, :root a[href^="https://www.iyalc.com/"], :root a[href^="https://www.infowarsstore.com/"] > img, :root a[href^="https://www.highperformancegate.com/"], :root a[href^="https://www.healthrangerstore.com/"] > img, :root a[href^="https://www.goldenfrog.com/vyprvpn?offer_id="][href*="&aff_id="], :root a[href^="https://www.get-express-vpn.com/offer/"], :root a[href^="https://www.financeads.net/tc.php?"], :root a[href^="https://www.clicktraceclick.com/"], :root a[href^="https://www.camsoda.com/enter.php?id="], :root a[href^="https://www.brazzersnetwork.com/landing/"], :root div[class^="Display_displayAd"], :root a[href^="https://www.sheetmusicplus.com/?aff_id="], :root a[href^="https://www.bang.com/?aff="], :root a[href^="https://www.arthrozene.com/"][href*="?tid="], :root a[href^="https://www.adsexse.com/x/"], :root a[href^="https://webroutetrk.com/"], :root iframe[src^="http://ad.yieldmanager.com/"], :root a[href^="https://wantopticalfreelance.com/"], :root a[href^="https://waisheph.com/"], :root a[href^="https://uncensored.game/"], :root a[href^="https://twinrdsyn.com/"], :root a[href^="https://ttf.trmobc.com/"], :root a[href^="https://trusted-click-host.com/"], :root a[href^="https://trk.watchlivesports4k.club/"], :root a[href^="https://trk.moviesflix4k.xyz/"], :root a[href^="https://trf.bannerator.com/"], :root a[href^="https://trappist-1d.com/"], :root a[href^="https://tragency-clesburg.icu/"], :root a[href^="https://traffdaq.com/"], :root a[href^="https://tracking.trackcasino.co/"], :root a[href^="https://tracking.comfortclick.eu/"], :root a[href^="https://tracking.avapartner.com/"], :root a[href^="https://track.ultravpn.com/"], :root a[href^="https://track.totalav.com/"], :root a[href^="https://track.themadtrcker.com/"], :root a[href^="https://track.interactivegf.com/"], :root a[href^="https://vlnk.me/"], :root a[href^="https://track.healthtrader.com/"], :root a[href^="https://track.effiliation.com/servlet/effi.click?"] > img, :root a[href^="https://track.clickmoi.xyz/"], :root a[href^="https://track.afcpatrk.com/"], :root a[href^="https://tupitea.co/"], :root a[href^="https://track.adform.net/"], :root a[href^="https://torguard.net/aff.php"] > img, :root a[href^="https://tm-offers.gamingadult.com/"], :root a[href^="https://tracking.gitads.io/"], :root a[href^="https://taghaugh.com/"], :root a[href^="https://t.mobtya.com/"], :root a[href^="https://t.hrtyj.com/"], :root a[href^="https://www.profitablecpmgate.com/"], :root a[href^="https://t.adating.link/"], :root a[href^="https://topoffers.com/"][href*="/?pid="], :root a[href^="https://syndication.dynsrvtbg.com/"], :root a[href^="https://streamate.com/landing/click/"], :root a[href^="https://s.zlink2.com/"], :root a[href^="https://reachtrgt.com/"], :root a[href^="https://queersodadults.com/"], :root a[href^="https://promo-bc.com/"], :root a[href^="https://prf.hn/click/"][href*="/camref:"] > img, :root a[href^="https://serve.awmdelivery.com/"], :root a[href^="https://prf.hn/click/"][href*="/adref:"] > img, :root a[href^="https://pongidsrunback.com/"], :root a[href^="https://pcm.bannerator.com/"], :root iframe[id^="google_ads_frame"], :root a[href^="https://pb-track.com/"], :root a[href^="https://partners.fxoro.com/click.php?"], :root a[href^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://torrentsafeguard.com/?aid="], :root a[href^="https://offers.refchamp.com/"], :root a[href^="https://oackoubs.com/"], :root a[href^="https://ndt5.net/"], :root a[href^="https://natour.naughtyamerica.com/track/"], :root a[href^="https://cam4com.go2cloud.org/"], :root a[href^="https://my-movie.club/"], :root a[href^="https://iqbroker.com/"][href*="?aff="], :root a[href^="https://movie.download-file.org/"], :root div[id^="ezoic-pub-ad-"], :root a[href^="https://mk-cdn.net/"], :root .trc_rbox_div .syndicatedItemUB, :root [href^="https://zone.gotrackier.com/"], :root a[href^="https://meet-to-fuck.com/"], :root [href^="https://www.herbanomic.com/"] > img, :root a[href^="https://maymooth-stopic.com/"], :root div[id^="google_dfp_"], :root a[href^="http://googleads.g.doubleclick.net/pcs/click"], :root a[href^="https://look.utndln.com/"], :root a[href^="https://a.bestcontentweb.top/"], :root a[href^="https://lobimax.com/"], :root a[href^="https://lead1.pl/"], :root a[href^="https://refpazkjixes.top/"], :root a[href^="https://landing.brazzersplus.com/"], :root a[href^="https://landing.brazzersnetwork.com/"], :root a[href^="https://ads.leovegas.com/redirect.aspx?"], :root a[href^="https://land.brazzersnetwork.com/landing/"], :root a[href^="https://juicyads.in/"], :root a[href^="https://itubego.com/video-downloader/?affid="], :root a[href^="https://incisivetrk.cvtr.io/click?"], :root a[href^="https://iactrivago.ampxdirect.com/"], :root a[href^="https://iac.ampxdirect.com/"], :root a[href^="https://go.zybrdr.com"], :root [href^="http://join.michelle-austin.com/"], :root a[href^="https://go.xxxiijmp.com"], :root a[href*=".zlinkm.com/"], :root a[href^="https://go.xtbaffiliates.com/"], :root a[href^="https://thaudray.com/"], :root [data-role="tile-ads-module"], :root a[href^="https://adsrv4k.com/"], :root a[href^="https://go.xlviirdr.com"], :root .card-captioned.crd > .crd--cnt > .s2nPlayer, :root [data-css-class="dfp-inarticle"], :root a[href^="https://go.tmrjmp.com"], :root a[href^="https://go.strpjmp.com/"], :root a[href^="https://go.skinstrip.net"][href*="?campaignId="], :root a[href^="https://go.markets.com/visit/?bta="], :root a[href^="//lambingsyddir.com/"], :root a[href^="https://billing.purevpn.com/aff.php"] > img, :root a[href^="https://go.hpyrdr.com/"], :root a[href^="https://go.goaserv.com/"], :root a[href^="https://go.ebrokerserve.com/"], :root a[href^="https://ismlks.com/"], :root [href^="https://www.mypillow.com/"] > img, :root a[href^="https://azpresearch.club/"], :root a[href^="https://go.xlirdr.com"], :root a[href^="https://track.afftck.com/"], :root a[href^="https://gohere.pl/"], :root a[href^="https://go.cmrdr.com/"], :root a[href^="https://www.bebi.com"], :root a[href^="https://loboclick.com"], :root iframe[src^="https://pagead2.googlesyndication.com/"], :root a[href^="http://www.onwebcam.com/random?t_link="], :root a[href^="https://get2nesoft1.ru/"], :root [href^="https://kingered-banctours.com/"], :root a[href^="https://get.surfshark.net/aff_c?"][href*="&aff_id="] > img, :root a[href^="https://affiliate.rusvpn.com/click.php?"], :root a[href^="https://geniusdexchange.com/"], :root a[href^="https://aj1070.online/"], :root a[href^="https://frameworkdeserve.com/"], :root a[href^="https://www.mrskin.com/tour"], :root a[href^="https://financeads.net/tc.php?"], :root bottomadblock, :root a[href^="https://fertilitycommand.com/"], :root a[href^="https://bluedelivery.pro/"], :root a[href^="https://fast-redirecting.com/"], :root a[href^="https://fakelay.com/"], :root a[href^="https://medleyads.com/"], :root div[data-native-ad], :root AD-SLOT, :root a[href^="https://engine.trackingdesks.com/"], :root a[href^="https://engine.blueistheneworanges.com/"], :root a[href^="https://tc.tradetracker.net/"] > img, :root a[href^="https://dianches-inchor.com/"], :root a[href^="https://go.admjmp.com/"], :root amp-fx-flying-carpet, :root a[href^="https://dfsdkkka.com/"], :root .ob_dual_right > .ob_ads_header ~ .odb_div, :root a[href^="https://deliver.tf2www.com/"], :root [href^="https://www.targetingpartner.com/"], :root [href^="https://detachedbates.com/"], :root a[href^="https://deliver.ptgncdn.com/"], :root a[href^="https://datingbests.life/"], :root #kt_player > a[target="_blank"], :root a[href^="https://cpartner.bdswiss.com/"], :root a[href^="https://clixtrac.com/"], :root AD-TRIPLE-BOX, :root a[href^="https://click.hoolig.app/"], :root img[src^="https://images.purevpnaffiliates.com"], :root a[href^="https://porntubemate.com/"], :root a[href^="http://www.gfrevenge.com/landing/"], :root a[href^="https://clickadilla.com/"], :root a[href^="https://click.dtiserv2.com/"], :root a[href^="https://go.xlvirdr.com"], :root a[href^="https://claring-loccelkin.com/"], :root a[href^="https://chaturbate.com/in/?track="], :root a[href^="https://chaturbate.com/in/?tour="], :root a[href^="https://aaucwbe.com/"], :root a[href^="https://cams.imagetwist.com/in/?track="], :root a[href^="https://mob1ledev1ces.com/"], :root a[href^="https://explore.findanswersnow.net/"], :root a[href^="https://camfapr.com/landing/click/"], :root a[href^="https://affcpatrk.com/"], :root a[href^="https://bongacams2.com/track?"], :root a[href^="https://www.sheetmusicplus.com/"][href*="?aff_id="], :root a[href^="https://bngpt.com/"], :root #topstuff > #tads, :root a[href^="https://black77854.com/"], :root a[href^="https://burpee.xyz/"], :root a[href*=".flndmyiove.net/"], :root [href^="http://join.trannies-fuck.com/"], :root [href^="http://www.fleshlightgirls.com/"], :root a[href^="https://bestdatinghere.life/"], :root a[target="_blank"][onmousedown="this.href^='http://paid.outbrain.com/network/redir?"], :root a[href^="https://banners.livepartners.com/"], :root a[href^="https://m.do.co/c/"] > img, :root div[id^="sticky_ad_"], :root a[href^="https://avtub.click/assets/link.php"], :root a[href^="https://go.gldrdr.com/"], :root [href^="https://www.cloudways.com/en/?id"], :root a[href^="https://as.sexad.net/"], :root a[href^="https://bestcond1tions.com/"], :root a[href^="https://takeallsoft.ru/"], :root a[href^="https://as.conjectwatson.com/"], :root [href="https://masstortfinancing.com"] img, :root a[href^="https://bongacams10.com/track?"], :root [data-ez-name], :root a[href^="https://awecrptjmp.com/"], :root a[href^="https://someperceptionparade.com/"], :root a[href^="https://galaxyroms.net/?scr="], :root a[href^="https://albionsoftwares.com/"], :root display-ad-component, :root a[href^="https://ak.hetaruwg.com/"], :root a[href^="https://go.etoro.com/"] > img, :root a[href^="https://go.alxbgo.com/"], :root a[href^="https://aff-ads.stickywilds.com/"], :root a[href^="https://t.hrtye.com/"], :root a[href^="https://ads.cdn.live/"], :root a[href^="https://join.sexworld3d.com/track/"], :root a[href^="https://intenseaffiliates.com/redirect/"], :root a[href^="https://aweptjmp.com/"], :root a[href^="https://ads.ad4game.com/"], :root a[href^="https://affpa.top/"], :root a[href^="https://adnetwrk.com/"], :root a[href^="https://adjoincomprise.com/"], :root a[href^="https://t.grtyi.com/"], :root a[href^="https://myusenet.xyz/"], :root [href^="http://misslinkvocation.com/"], :root a[href^="https://adclick.g.doubleclick.net/"], :root a[href^="https://www.bet365.com/"][href*="affiliate="], :root [href^="https://r.kraken.com/"], :root a[href^="https://mmwebhandler.aff-online.com/"], :root a[href^="http://secure.vivid.com/track/"], :root a[href^="https://go.nordvpn.net/aff"] > img, :root a[href^="https://misspkl.com/"], :root [href^="http://clicks.totemcash.com/"], :root a[href^="https://ad.zanox.com/ppc/"] > img, :root a[href^="https://msecure117.com/"], :root a[href^="https://ad.kubiccomps.icu/"], :root a[href^="https://adswick.com/"], :root a[href^="https://static.fleshlight.com/images/banners/"], :root a[href^="https://ad.doubleclick.net/"], :root a[href^="https://ad.atdmt.com/"], :root a[href^="https://meet-sex-here.com/"], :root [data-m-ad-id], :root a[href^="https://a-ads.com/"], :root a[href^="http://www.mrskin.com/tour"], :root a[href^="https://k2s.cc/pr/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://www.coiwqe.site/"], :root iframe[src^="http://www.adpeepshosted.com/"], :root a[href^="https://prf.hn/click/"][href*="/creativeref:"] > img, :root a[href^="http://www.adultempire.com/unlimited/promo?"][href*="&partner_id="], :root a[href^="https://ads-for-free.com/click.php?"], :root a[href^="http://www.FriendlyDuck.com/"], :root a[href^="http://traffic.tc-clicks.com/"], :root a[href^="http://tc.tradetracker.net/"] > img, :root .trc_rbox .syndicatedItem, :root a[href^="https://1free33style.com/"], :root a[href^="http://rs-stripe.wsj.com/stripe/redirect"], :root a[href^="http://tour.mrskin.com/"], :root a[href^="http://pubads.g.doubleclick.net/"], :root [onclick*="content.ad/"], :root a[href^="http://pityhostngco2.xyz/"], :root a[href^="http://partners.etoro.com/"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > div > .vci, :root a[href^="http://paid.outbrain.com/network/redir?"], :root a[data-redirect^="https://paid.outbrain.com/network/redir?"], :root [href^="https://www.reimageplus.com/"], :root a[href^="https://engine.phn.doublepimp.com/"], :root a[href^="http://intent.bingads.com/"], :root a[href^="https://cagothie.net/"], :root a[href^="https://watchmygirlfriend.tv/"], :root a[href^="http://go.xtbaffiliates.com/"], :root a[href^="http://www.advcashpro.com/aff/"], :root a[href^="http://deloplen.com/"], :root a[href^="http://d2.zedo.com/"], :root .rc-cta[data-target], :root [href^="http://go.cm-trk2.com/"], :root a[href^="http://click.payserve.com/"], :root a[href^="https://bs.serving-sys.com"], :root [class^="chp_ads_block"], :root a[href^="http://betahit.click/"], :root a[href^="https://clicks.pipaffiliates.com/"], :root [href^="https://noqreport.com/"] > img, :root a[href^="//wagerprocuratorantiterrorist.com/"], :root a[href^="http://adserver.adreactor.com/"], :root [href^="https://cipledecline.buzz/"], :root a[href^="https://earandmarketing.com/"], :root a[href^="http://adf.ly/?id="], :root [href^="http://homemoviestube.com/"], :root a[href^="http://ad.doubleclick.net/"], :root .commercial-unit-mobile-top .jackpot-main-content-container > .UpgKEd + .nZZLFc > .vci, :root a[href^="//syndication.dynsrvtbg.com/"], :root a[href^="//pubads.g.doubleclick.net/"], :root [class^="s2nPlayer"], :root a[href^="https://chaturbate.jjgirls.com/?track="], :root a[href^="https://ausoafab.net/"], :root a[href^="//benoopto.com/"], :root a[href^="https://dooloust.net/"], :root [href^="https://www.mypatriotsupply.com/"] > img, :root a[onmousedown^="this.href='http://paid.outbrain.com/network/redir?"][target="_blank"], :root [href^="https://secure.bmtmicro.com/servlets/"], :root a[href="//rufflycouncil.com/"], :root a[href*="https://www.sweetdeals.com/"] img, :root div[data-native_ad], :root a[href*=".zlink9.com/"], :root [data-d-ad-id], :root a[href*=".engine.adglare.net/"], :root a[href^="https://a.bestcontentoperation.top/"], :root a[href^="//go.xlviiirdr.com"], :root [data-dynamic-ads], :root a[data-widget-outbrain-redirect^="http://paid.outbrain.com/network/redir?"], :root [data-ad-width], :root [href^="https://join.playboyplus.com/track/"], :root a[data-url^="http://paid.outbrain.com/network/redir?"] + .author, :root a[href^="https://axdsz.pro/"], :root a[href^="http://bodelen.com/"], :root a[data-oburl^="https://paid.outbrain.com/network/redir?"], :root a[href^="https://ptapjmp.com/"], :root DFP-AD, :root a[href^="http://allaptair.club/"], :root a[href^="//go.eabids.com/"], :root a[data-oburl^="http://paid.outbrain.com/network/redir?"], :root [href^="https://cpa.10kfreesilver.com/"], :root a[href^="https://a.bestcontentfood.top/"], :root a[href^="https://reinstandpointdumbest.com/"], :root a[href*="http://MyPillow.com"] > img, :root a[data-obtrack^="http://paid.outbrain.com/network/redir?"], :root a[href^="http://wct.link/"], :root [href^="https://goldforyourfuture.com/clk.trk"] img, :root [href^="https://infinitytrk.com/"], :root [onclick^="location.href='http://www.reimageplus.com"], :root a[href^="https://pl.premium4kflix.website/"], :root [id^="chp_ads_block"], :root a[href^="https://go.julrdr.com/"], :root a[href^="//chrif8kdstie.com/"], :root [id^="section-ad-banner"], :root .commercial-unit-mobile-top > div[data-pla="1"], :root a[href^="https://www.sweetdeals.com"], :root a[href^="https://track.bruceads.com/"], :root a[href^="https://t.aslnk.link/"], :root [href^="https://zstacklife.com/"] img, :root [href^="https://www.restoro.com/"], :root [data-ad-manager-id], :root a[href^="https://fleshlight.sjv.io/"], :root div[id^="zergnet-widget"], :root [href^="https://www.mystore.com/"] > img, :root div[id^="ad-position-"], :root a[href^="http://adultfriendfinder.com/go/page/landing"], :root a[href^="http://affiliate.glbtracker.com/"], :root a[href^="https://leg.xyz/?track="], :root a[href^="http://bc.vc/?r="], :root [href^="https://www.brighteonstore.com/products/"] img, :root a[href^="https://syndication.exoclick.com/"], :root [href^="https://track.fiverr.com/visit/"] > img, :root a[href^="https://go.trackitalltheway.com/"], :root a[href^="https://go.cmtaffiliates.com/"], :root [data-name="adaptiveConstructorAd"], :root [href^="https://optimizedelite.com/"] > img, :root a[href^="https://www.awin1.com/cread.php?awinaffid="], :root a[href^="//thaudray.com/"], :root a[href*=".trust.zone"], :root a[href^="http://trk.mdrtrck.com/"], :root [href^="https://shrugartisticelder.com"], :root div[id^="crt-"][style], :root a[href^="https://s.zlink1.com/"], :root a[href^="http://adultgames.xxx/"], :root a[href^="https://traffic.bannerator.com/"], :root [href^="https://shiftnetwork.infusionsoft.com/go/"] > img, :root a[href^="https://vo2.qrlsx.com/"], :root [href^="https://www.avantlink.com/click.php"] img, :root a[href^="https://losingoldfry.com/"], :root div[id^="ad-inserter-"], :root .scroll-fixable.rail-right > .deals-rail, :root a[href^="https://see.kmisln.com/"], :root [href^="https://routewebtk.com/"], :root a[href^="https://awptjmp.com/"], :root a[href^="https://go.goasrv.com/"], :root .commercial-unit-mobile-top > .v7hl4d, :root a[href^="https://mediaserver.entainpartners.com/renderBanner.do?"], :root [href^="https://stvkr.com/"], :root a[href^="https://tour.mrskin.com/"], :root a[href^="https://fastestvpn.com/lifetime-special-deal?a_aid="], :root ADS-RIGHT, :root [href^="https://mystore.com/"] > img, :root a[href^="https://moneynow.one/"], :root [href^="https://mypatriotsupply.com/"] > img, :root [href^="https://mylead.global/stl/"] > img, :root .vid-present > .van_vid_carousel__padding, :root a[href^="https://syndication.optimizesrv.com/"], :root [id^="google_ads_iframe"], :root app-ad, :root a[href^="https://go.xxxijmp.com"], :root [href^="https://istlnkcl.com/"], :root a[href^="https://playuhd.host/"], :root a[href^="https://5hjdbfjfd5.monster/"], :root [href^="https://www.hostg.xyz/"] > img, :root .section-subheader > .section-hotel-prices-header, :root [href^="http://join.ts-dominopresley.com/"], :root [href^="https://go.affiliatexe.com/"], :root a[href^="https://meet-sexhere.com/"], :root [href^="https://go.4rabettraff.com/"], :root [href^="https://glersakr.com/"], :root a[href^="https://click.a-ads.com/"], :root a[href^="https://wittered-mainging.com/"], :root [href^="https://engine.gettopple.com/"], :root [href^="https://awbbjmp.com/"], :root a[href^="https://gghf.mobi/"], :root [href^="https://affect3dnetwork.com/track/"], :root a[href^="https://go.currency.com/"], :root [href^="http://www.mypillow.com/"] > img, :root a[href^="//coarsewary.com/"], :root a[href^="https://a.montangop.top/"], :root [href^="https://v.investologic.co.uk/"], :root a[href^="https://dialling-abutory.com/"], :root div[id^="div-ads-"], :root [href^="https://rapidgator.net/article/premium/ref/"], :root a[href^="https://www.sugarinstant.com/?partner_id="], :root a[href^="https://adultfriendfinder.com/go/page/landing"], :root div[id^="advads-"], :root div[data-role="sidebarAd"], :root [href^="https://join3.bannedsextapes.com"], :root div[data-spotim-slot], :root [href^="https://antiagingbed.com/discount/"] > img, :root a[href^="https://go.247traffic.com/"], :root [href^="https://join.girlsoutwest.com/"], :root [href^="http://trafficare.net/"], :root a[href^="https://adserver.adreactor.com/"], :root [href^="http://join.shemalesfromhell.com/"], :root [id^="ad_slider"], :root [href^="https://clk.right-wing-health.com/"], :root a[href^="http://www.adultdvdempire.com/?partner_id="][href*="&utm_"], :root [href^="http://join.shemale.xxx/"], :root [href^="https://ilovemyfreedoms.com/landing-"], :root a[href^="https://ads.betfair.com/redirect.aspx?"], :root a[href^="http://cam4com.go2cloud.org/aff_c?"], :root a[href^="https://www.chngtrack.com/"], :root a[href^="https://cpmspace.com/"], :root [href^="https://freecourseweb.com/"] > .sitefriend, :root a[href^="https://ads.planetwin365affiliate.com/redirect.aspx?"], :root [href^="http://join.rodneymoore.com/"], :root a[href^="https://uncensored3d.com/"], :root a[href^="https://creacdn.top-convert.com/"], :root [href^="https://go.xlrdr.com"], :root [id^="div-gpt-ad"], :root .ob_container .item-container-obpd, :root gpt-ad, :root [href^="http://www.pingperfect.com/aff.php"], :root a[href^="https://scurewall.co/"], :root [name^="google_ads_iframe"], :root a[href^="https://landing1.brazzersnetwork.com"], :root #slashboxes > .deals-rail, :root [href^="http://globsads.com/"], :root [href^="http://mypillow.com/"] > img, :root [href^="//ngeoziadiyc4hi2e.com/"], :root a[href^="https://go.xxxjmp.com"], :root a[href^="https://transfer.xe.com/signup/track/redirect?"], :root #leader-companion > a[href], :root [data-desktop-ad-id], :root [href^="https://wct.link/"], :root [href^="https://traffserve.com/"], :root a[href^="https://1startfiledownload1.com/"], :root a[href^="https://a.adtng.com/"], :root a[href^="http://static.fleshlight.com/images/banners/"], :root [href="https://ourgoldguy.com/contact/"] img, :root [href="https://www.masstortfinancing.com/"] > img, :root a[href^="https://lnkxt.bannerator.com/"], :root div[id^="ad_position_"], :root a[href^="https://ovb.im/"], :root a[href^="http://hotcandyland.com/partner/"], :root [href="https://jdrucker.com/gold"] > img, :root [href^="https://goldcometals.com/clk.trk"], :root [data-mobile-ad-id], :root a[href^="http://affiliates.thrixxx.com/"], :root #searchResultsList > div > div[onclick$="'inline.ad'});"], :root a[href^="https://www.adultempire.com/"][href*="?partner_id="], :root [data-template-type="nativead"], :root a[data-redirect^="this.href='http://paid.outbrain.com/network/redir?"], :root a[href^="https://go.xlivrdr.com"], :root a[href^="https://www.onlineusershielder.com/torrent-guard/?"], :root [data-freestar-ad], :root [data-ad-cls], :root [id^="ad-wrap-"], :root div[id^="taboola-stream-"], :root [href^="https://go.astutelinks.com/"], :root [href^="http://join.hardcoreshemalevideo.com/"], :root a[href^="http://ads2.williamhill.com/redirect.aspx?"], :root a[href^="https://porngames.adult/?SID="], :root a[href^="http://go.247traffic.com/"], :root [href^="http://residenceseeingstanding.com/"], :root a[href^="https://www.adskeeper.com"], :root a[href^="//agacelebir.com/"], :root [href^="https://totlnkcl.com/"], :root div[data-adunit], :root app-large-ad, :root [href^="https://turtlebids.irauctions.com/"] img, :root a[href^="http://www.onclickmega.com/jump/next.php?"], :root .trc_rbox_border_elm .syndicatedItem, :root [class^="amp-ad-"], :root div[id^="_vdo_ads_player_ai_"], :root a[href^="http://enter.anabolic.com/track/"], :root .trc_related_container div[data-item-syndicated="true"], :root a[href^="https://delivery.porn.com/"], :root [href^="https://click2cvs.com/"], :root a[href^="https://a2.adform.net/"], :root a[data-redirect^="http://paid.outbrain.com/network/redir?"], :root [data-revive-zoneid], :root a[href^="https://googleads.g.doubleclick.net/pcs/click"], :root AMP-AD, :root [href^="https://mypillow.com/"] > img, :root [href^="https://ad.admitad.com/"], :root .trc_rbox_div .syndicatedItem, :root a-ad, :root a[href^="http://go.fpmarkets.com/"], :root [data-ad-module], :root .grid > .container > #aside-promotion, :root [href^="https://trackfin.asia/"], :root .plistaList > .plista_widget_underArticle_item[data-type="pet"], :root a[href^="https://spygasm.com/track?"], :root a[href^="https://agacelebir.com/"], :root a[href*="//lkstrck2.com/"], :root .plistaList > .itemLinkPET, :root [href^="http://join.shemalepornstar.com/"], :root [data-advadstrackid], :root [href^="https://affiliate.fastcomet.com/"] > img, :root #atvcap + #tvcap > .mnr-c > .commercial-unit-mobile-top, :root a[href^="https://www.googleadservices.com/pagead/aclk?"], :root a[href^="https://awentw.com/"], :root [class^="div-gpt-ad"], :root a[href^="//voyeurhit.com/cs/"], :root a[href^="https://track.wg-aff.com"], :root a[href^="https://nutrientassumptionclaims.com/"], :root div[id^="ad_bnr_"], :root a[href^="https://join.virtuallust3d.com/"], :root a[href^="https://speedsupermarketdonut.com/"], :root #taw > .med + div > #tvcap > .mnr-c:not(.qs-ic) > .commercial-unit-mobile-top, :root [data-adblockkey], :root div.fadeInDown[id$="____equal"][class$="____equal"], :root a[href^="https://mediaserver.gvcaffiliates.com/renderBanner.do?"], :root a[href^="https://join.dreamsexworld.com/"], :root a[href^="https://odnxe.lncredlbiedate.com/"], :root a[href^="https://click.linksynergy.com/fs-bin/"], :root a[href^="https://join.virtualtaboo.com/track/"], :root a[href^="http://https://www.get-express-vpn.com/offer/"], :root [id^="ad_sky"], :root a[href^="https://americafirstpolls.com/"] { display: none !important; }</style><meta http-equiv="origin-trial" content="A751Xsk4ZW3DVQ8WZng2Dk5s3YzAyqncTzgv+VaE6wavgTY0QHkDvUTET1o7HanhuJO8lgv1Vvc88Ij78W1FIAAAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><link href="chrome-extension://enhmdogmmnpajffldjiggaacoajnhkjl/web_resources/modal/modal.css" rel="stylesheet" id="__tmpStyle"><meta http-equiv="origin-trial" content="A751Xsk4ZW3DVQ8WZng2Dk5s3YzAyqncTzgv+VaE6wavgTY0QHkDvUTET1o7HanhuJO8lgv1Vvc88Ij78W1FIAAAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjgwNjUyNzk5LCJpc1RoaXJkUGFydHkiOnRydWV9"></head>


<body class="d-flex flex-column h-100">

<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JK7KNZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->

<style>
	
	.pageActions,
	.pageAsideMegaSale,
	.sectionAccess { display: none!important; }

	.border-steps { position: relative; }
	.border-steps:before { content: ''; background-color:  #E7E5E4; position: absolute; top: 1.5rem; bottom: 1.5rem; left: 50%; width: 2px; margin-left: -1px; z-index: 1; }
	.border-steps-row { width: calc(50% + 1.5rem)!important; display: flex; align-items: center; gap: .5rem; padding: 1rem 0; position: relative; z-index: 2; text-align: left; }
	.border-steps-row:nth-child(even) { justify-content: right; text-align: right; }
	.border-steps-step { width: 3rem; height: 3rem; display: flex; justify-content: center; align-items: center; font-size: 1.25rem; line-height: 1.75rem; color: #fff; flex-shrink: 0; border-radius: 50%; }

	.i-reply-outline { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/reply-outline.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/reply-outline.svg); }
	.i-flag { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/flag.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/flag.svg); }
	.i-thumb-up { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/thumb-up.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/thumb-up.svg); }
	.i-thumb-down { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/thumb-down.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/thumb-down.svg); }

	.i-color-calendar-outline { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-calendar-outline.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-calendar-outline.svg);  }
	.i-color-check-outline { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-check-outline.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-check-outline.svg);  }
	.i-color-clock-outline { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-clock-outline.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-clock-outline.svg);  }
	.i-color-desktop-computer-outline { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-desktop-computer-outline.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-desktop-computer-outline.svg);  }
	.i-color-layout { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-layout.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-layout.svg);  }
	.i-color-newspaper-outline { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-newspaper-outline.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-newspaper-outline.svg);  }
	.i-color-shopping-cart-outline { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-shopping-cart-outline.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-shopping-cart-outline.svg);  }
	.i-color-star-outline { -webkit-mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-star-outline.svg); mask-image: url(https://cdn.phpjabbers.com/css/images/icons/color-star-outline.svg);  }

	p a { font-weight: 500; }

	.dropdown-menu { box-shadow: 0px 16px 40px -4px rgba(0, 0, 0, 0.12), 0px 6px 18px -3px rgba(0, 0, 0, 0.08); border: 0; }

	.tabs-nav.active { z-index: 3; position: relative; }
	.tabs-nav.active .tabs { position:  fixed; top: 5rem; left: 0; right: 0; background-color: #fff; }

	.blog-content img { display: inline-block; max-width: 100%; height: auto; }

	.i.i-question-mark-circle.w-9.h-9 { margin-top: 2px; }

	.dropdown-menu-body ul { margin-bottom: 1.75rem; }

	.no-btn { border: 0; background: transparent; color: #DE461B; padding: 0; text-transform: none; }

	.no-btn:hover,
	.no-btn:focus { border: 0; background: transparent; color: #C8360E; padding: 0; text-transform: none; }

	.section .panelTitle { margin-bottom: 1.5rem; font-size: 2.25rem; line-height: 2.5rem; color: #1C1917; font-weight: 900; text-transform: capitalize; }
	.section .panelTitle:after { content: ''; width: 6.375rem ; height: 2px ; border-radius: 2px ; display: block; margin: 1.5rem 0 0; background-color: #E7E5E4; }

	.sectionBoxTitle,
	.section .articleBoxScriptTitle,
	.section .articleBoxScriptTitle a,
	.section .panelArticleTitle .btn,
	.section .panelArticleTitle a,
	.section .panelArticleTitle { font-size: 1.5rem; line-height: 2rem; color: #292524; padding: 0; border: 0; background: transparent; font-weight: 700!important; margin-bottom: 1rem; }

	.section .panelArticleTitle a { margin-bottom: 0!important; }

	.section .panelArticleImage { margin-bottom: 1rem;  }

	.panelArticleActions a,
	.panelArticleActions .btn,
	.sectionBoxActions .btn,
	.sectionBoxActions a,
	.articleBoxScriptActions .btn { color: #DE461B; padding: 0; font-size: 1rem; font-weight: 500; border: 0; text-transform: capitalize; }

	.panelArticleActions a:hover,
	.panelArticleActions .btn:hover,
	.sectionBoxActions .btn:hover,
	.sectionBoxActions a:hover,
	.articleBoxScriptActions .btn:hover { color: #C8360E; }

	.sectionBoxInner .sectionBoxContent { min-height: 10rem; }

	.sectionBoxImage img { max-height: 10rem; width: auto; display: block; }

	.panelArticleImage img,
	.articleBoxScriptImage img { display: block; max-width: 100%; height: auto; margin-bottom: 15px; }

	.bannerContainer .btn { text-transform: capitalize; }

	.section .col-lg-8 .fz-10 { word-break: break-word; }

	.table .btn { white-space: nowrap; }	

	.scriptAltSmallImage img { display: inline-block; max-width: 100%; height: auto; }

	.card-script-sm .scriptAltSmallTitle { margin-bottom: 0; }
	.card-script-sm .scriptAltSmallTitle .btn { padding: 1rem; }
	.card-script-sm .scriptAltSmallEntry { padding: 1rem; }
	.card-script-sm .scriptAltSmallEntry p { margin: 0; }

	.card-script-sm .scriptAltSmallActions { padding: 0 1rem 1rem }
	.card-script-sm .scriptAltSmallActions .btn { padding: 0; }

	.table-cell .ticketBadge { font-size: 0.875rem; display: block; line-height: 1.6; margin-bottom: .5rem; }

	.script-window-body img { max-height: 550px; }

	.btn-primary.disabled, 
	.btn-primary:disabled { background: linear-gradient(315deg, #DE461B 0%, #FB923C 100%); border-color: #DE461B; }

	.pricing-box-holder { padding-left: 2rem; padding-right: 2rem; }

	.pricing-holder .pricing-box-holder { padding-left: 0; padding-right: 0; }

	.syntaxhighlighter .line {white-space: normal!important; }

	.d-flex.justify-content-start.pb-4.gap-3,
	.syntaxhighlighter { word-break: break-word; }

	.section-bg-half-orange { white-space: normal; word-break: break-word; }

	.btnLink:focus:active,
	.btnLink:active,
	.btnLink:focus,
	.btnLink:hover,
	.btnLink { padding: 0; font-size: inherit; border: 0; line-height: inherit; vertical-align: inherit; color: inherit; font-weight: 500;   text-decoration: none; color: #DE461B;  }

	.btnLink:focus:active,
	.btnLink:active,
	.btnLink:focus,
	.btnLink:hover { color: #C8360E; } 
	

	@media (max-width: 1535px) {
		.navbar-mobile-actions .buttons { padding: 0; order: 1; }

		.navbar-collapse .buttons { display: none }

		.navbar-nav .dropdown .dropdown-toggle { justify-content: space-between; }
		.navbar-nav .nav-link { display: flex; justify-content: space-between; }

		.dropdown-item { text-align: left; }

		.backdrop:after { content: ''; position: fixed; top: 0; bottom:  0; left:  0; right:  0; z-index: 2; background-color: rgba(0,0,0,.65); }

		.btn-shopping-cart { display: none; }

		.card-script-image { width: 15rem!important; }

		.dropdown-menu { box-shadow: 0px 0 0 0px rgba(0, 0, 0, 0), 0px 0 0 0 rgba(0, 0, 0, 0); }
	}

	@media (max-width: 1024px) {
		.intro-home .intro-home-media { margin-top: 1rem; }	

		.pricing-box { padding: 1rem; }

		.pricing-box .limited-offer { margin: 1rem -1rem -1rem; padding: 1rem; }
	}

	@media (max-width: 1023px) {
		.intro-home .intro-home-media { margin-top: 1rem; }	

		.section-bg-half-orange { background: #fff; }

		.intro .script-window { margin-top: 0; display: inline-block; }

		.breadcrumbs .i { margin: 0 0.5rem; }

	}

	@media (max-width: 768px){
		.navbar-collapse .buttons { display: block; text-align: right }	
		.navbar-collapse .buttons .buttons-mobile-cart,
		.navbar-mobile-actions .buttons { display: none; }

		.btn-shopping-cart { display: flex; }

		.pricing-box-holder { overflow: visible; display: block; }

		.pricing-box-head { background-color: #fff; margin: -1rem -1rem 1rem ; padding: 1rem; border-top-left-radius: 1rem; border-top-right-radius: 1rem; display: block; }
		.pricing-holder { padding-bottom: 2rem; }
		.pricing-holder .pricing-box-holder { display: none; }
		.pricing-box { margin: 2rem auto; border-top-left-radius: 1rem; border-top-right-radius: 1rem; }

	}

	@media (max-width: 639px){
		.navbar-collapse .buttons .btn { margin-bottom: 0.625rem; }
		.navbar-collapse .buttons .btn:last-child { margin-bottom: 0; }

		.card-info-content .d-flex.justify-content-between.align-items-start { display: block!important; }

		.navbar-nav { max-height: 56vh; }

		.card-script-image { width: auto!important; padding-left: 1rem; }

		.p-5 { padding: 3rem 1rem!important; }

		.syntaxhighlighter table td.code .line { max-width: 200px; }

		.card-script-sm-actions { display: flex; gap: 1.25rem; flex-wrap: wrap; }

		.footer-nav {min-width: 100%; flex-grow: 1; }

		.intro-content { margin-bottom: 1rem; }
		.intro-content .pt-2.mb-4.d-flex.gap-3 { display: block!important; }
		.intro-content .pt-2.mb-4.d-flex.gap-3 .btn { display: flex!important; margin-bottom: 15px; width: 100%; justify-content: center; }

		p { font-size: 1rem!important; }

		.intro .d-flex.flex-wrap.gap-3.justify-content-center.align-items-center { gap: 1.5rem!important; }
	}
</style>

<nav class="navbar navbar-expand-xxl fixed-top active">
	<div class="container-fluid">
	<img width="200px" height="140px" src="../View/images/logo.png" alt="Logo">

		<div class="navbar-mobile-actions">
			<div class="buttons order-1">
		    						<a href="https://www.phpjabbers.com/mega-sale.php" class="btn btn-primary btn-sm text-uppercase"><i class="i i-percent-outline"></i> Mega Sale</a>
									<a href="https://www.phpjabbers.com/help-resources.php" class="btn btn-tertiary btn-sm text-uppercase"><i class="i i-help-circle-outline"></i> Help</a>

				<a href="https://www.phpjabbers.com/accounts/login" class="btn btn-tertiary btn-sm text-uppercase"><i class="i i-user-outline"></i> Log in</a>

<div class="sectionAccess">
	<div class="form fA tabs">
		<div class="formContent tabsBody">
			<div class="tab current" id="accessTabSignIn" role="tabpanel" aria-hidden="false" aria-labelledby="accessTab-1">
				<form action="https://www.phpjabbers.com/" method="post" id="frmHeaderLogin" novalidate="novalidate">
					<input type="hidden" name="do_login" value="1">
					<input type="hidden" name="csrf_token" value="MTY2ODMzNjI2MWRiOGJhMDQ4Nzg0Nzg5NWFhYjY1NzYxNTA2YjQwZGQyZTRhMDYxOGE5OWJhNjA0ZjE5OTkwZTQxNTM2ZDYxZjMzNTMzZGMyNA==">
					<input type="hidden" name="next" value="/account/dashboard">
					<header class="formHead">
						<p class="formTitle">Sign In</p>
					</header>
					
					<div class="formBody">
						<div class="formAlert" role="alert" style="display: none"></div>
						<div class="formRow">
							<label for="frmHeaderLoginEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="email" class="field" id="frmHeaderLoginEmail" name="email" placeholder="Email" data-msg-required="Email is required" data-msg-email="Please enter a valid email address." maxlength="255" aria-label="Email">
							</div>
						</div>
					
						<div class="formRow">
							<label for="frmHeaderLoginPassword" class="formLabel">
								<i class="ico icoPassword"></i>
							</label>
					
							<div class="formControls">
								<input type="password" class="field" id="frmHeaderLoginPassword" name="password" placeholder="Password" data-msg-required="Password is required" aria-label="Password">
							</div>
						</div>
					</div>
					
					<footer class="formFoot">
						<div class="formActions">
							<div class="formRow">
								<div class="checkbox">
									<input type="checkbox" id="frmHeaderLoginRemember" name="remember" value="1">
									<label for="frmHeaderLoginRemember">Remember me</label>
								</div>
					
								<div class="formControls">
									<a href="https://www.phpjabbers.com/accounts/password-recovery" class="btn btnLink btnLinkNoTransform">Forgot password?</a>
								</div>
							</div>
					
							<div class="formActionsInner">
								<button type="submit" class="btn btnPrimary">log in</button>
					
								<p>Not a member yet? <a href="https://www.phpjabbers.com/accounts/register" class="btn btnLink btnLinkNoTransform">Register now!</a></p>
							</div>
						</div>
					
						<div class="formSocials">
						<div class="mb-4">

	<a href="https://www.phpjabbers.com/accounts/auth/Facebook" class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="facebook-icon"></i> Log in with Facebook</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Google" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="google-icon"></i> Log in with Google</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Twitter" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="twitter-icon"></i> Log in with Twitter</a>

	<a href="https://www.phpjabbers.com/accounts/auth/LinkedIn" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="linkedin-icon"></i> Log in with LinkedIn</a>

</div>						</div>
					</footer>
				</form>
			</div>
		
			<div class="tab" id="accessTabSignUp" role="tabpanel" aria-hidden="true" aria-labelledby="accessTab-2">
				<form action="https://www.phpjabbers.com/" method="post" id="frmHeaderRegister" autocomplete="off" novalidate="novalidate">
					<input type="hidden" name="do_register" value="1">
					<input type="hidden" name="csrf_token" value="MTY2ODMzNjI2MWRiOGJhMDQ4Nzg0Nzg5NWFhYjY1NzYxNTA2YjQwZGQyZTRhMDYxOGE5OWJhNjA0ZjE5OTkwZTQxNTM2ZDYxZjMzNTMzZGMyNA==">
					<input type="hidden" name="next" value="/accounts/created">
					<header class="formHead">
						<p class="formTitle">Sign Up</p>
					</header>
					
					<div class="formBody">
						<div class="formAlert" role="alert" style="display: none"></div>
						<div class="formRow">
							<label for="frmHeaderRegisterName" class="formLabel">
								<i class="ico icoPerson"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderRegisterName" name="name" placeholder="Name" data-msg-required="Name is required" maxlength="255" autocomplete="off">
							</div>
						</div>

						<div class="formRow">
							<label for="frmHeaderRegisterEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="email" class="field" id="frmHeaderRegisterEmail" name="email" placeholder="Email" data-msg-required="Email is required" data-msg-email="Please enter a valid email address." maxlength="255" autocomplete="off">
							</div>
						</div>
					
						<div class="formRow">
							<label for="frmHeaderRegisterPassword" class="formLabel">
								<i class="ico icoPassword"></i>
							</label>
					
							<div class="formControls">
								<input type="password" class="field" id="frmHeaderRegisterPassword" name="password" placeholder="Password" data-msg-required="Password is required" autocomplete="off">
							</div>
						</div>

						<div class="formRow">
							<label for="frmHeaderRegisterPasswordRe" class="formLabel">
								<i class="ico icoPassword"></i>
							</label>
					
							<div class="formControls">
								<input type="password" class="field" id="frmHeaderRegisterPasswordRe" name="confirm" placeholder="Confirm Password" data-msg-required="Confirm password is required" data-msg-equalto="Password doesn&#39;t match" autocomplete="off">
							</div>
						</div>
						
						<div class="formRow formRowPhone">
							<label for="frmHeaderRegisterPhone" class="formLabel">
								<i class="ico icoPerson"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderRegisterPhone" name="phone" placeholder="Phone" data-msg-required="Phone is required" maxlength="255" autocomplete="off">
							</div>
						</div>
					</div>
					
					<footer class="formFoot">
						<div class="formActions">
							<div class="formActionsInner">
								<button type="submit" class="btn btnPrimary">register</button>
					
								<p>Are you a member? <a href="https://www.phpjabbers.com/accounts/login" class="btn btnLink">Log in</a></p>
							</div>
						</div>
					
						<div class="formSocials">
						<div class="mb-4">

	<a href="https://www.phpjabbers.com/accounts/auth/Facebook" class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="facebook-icon"></i> Log in with Facebook</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Google" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="google-icon"></i> Log in with Google</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Twitter" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="twitter-icon"></i> Log in with Twitter</a>

	<a href="https://www.phpjabbers.com/accounts/auth/LinkedIn" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="linkedin-icon"></i> Log in with LinkedIn</a>

</div>						</div>
					</footer>												
				</form>
			</div>
		
			<div class="tab" id="accessTabForgotPassword" role="tabpanel" aria-hidden="true" aria-labelledby="accessTab-4">
				<form action="https://www.phpjabbers.com/" method="post" id="frmHeaderForgot" autocomplete="off" novalidate="novalidate">
					<input type="hidden" name="do_forgot" value="1">
					<input type="hidden" name="csrf_token" value="MTY2ODMzNjI2MWRiOGJhMDQ4Nzg0Nzg5NWFhYjY1NzYxNTA2YjQwZGQyZTRhMDYxOGE5OWJhNjA0ZjE5OTkwZTQxNTM2ZDYxZjMzNTMzZGMyNA==">
					<input type="hidden" name="next" value="/mega-sale.php?rel=fs">
					<header class="formHead">
						<p class="formTitle">Forgot your password</p>
					</header>
					
					<div class="formBody">
						<div class="formAlert" role="alert" style="display: none"></div>
						<div class="formRow">
							<label for="frmHeaderForgotEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderForgotEmail" name="email" placeholder="Email" autocomplete="off" data-msg-required="Email is required" data-msg-email="Please enter a valid email address" maxlength="255">
							</div>
						</div>
					</div>
					
					<footer class="formFoot">
						<div class="formActions">
							<div class="formActionsInner">
								<button type="submit" class="btn btnPrimary">Send new password</button>
							</div>
						</div>
					
						<div class="formSocials">
						<div class="mb-4">

	<a href="https://www.phpjabbers.com/accounts/auth/Facebook" class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="facebook-icon"></i> Log in with Facebook</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Google" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="google-icon"></i> Log in with Google</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Twitter" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="twitter-icon"></i> Log in with Twitter</a>

	<a href="https://www.phpjabbers.com/accounts/auth/LinkedIn" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="linkedin-icon"></i> Log in with LinkedIn</a>

</div>						</div>
					</footer>												
				</form>
			</div>
		
			<div class="tab" id="accessTabSubscribe" role="tabpanel" aria-hidden="true" aria-labelledby="accessTab-5">
				<form action="https://www.phpjabbers.com/" method="post" id="frmHeaderSubscribe" autocomplete="off" novalidate="novalidate">
					<input type="hidden" name="do_subscribe" value="1">
					<input type="hidden" name="csrf_token" value="MTY2ODMzNjI2MWRiOGJhMDQ4Nzg0Nzg5NWFhYjY1NzYxNTA2YjQwZGQyZTRhMDYxOGE5OWJhNjA0ZjE5OTkwZTQxNTM2ZDYxZjMzNTMzZGMyNA==">
					<input type="hidden" name="next" value="/mega-sale.php?rel=fs">
					<header class="formHead">
						<p class="formTitle">Subscribe</p>
					</header>
					
					<div class="formBody">
						<div class="formAlert" role="alert" style="display: none"></div>
						<div class="formRow">
							<label for="frmHeaderSubscribeName" class="formLabel">
								<i class="ico icoPerson"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderSubscribeName" name="name" placeholder="Name" data-msg-required="Name is required" autocomplete="off" maxlength="255">
							</div>
						</div>
					
						<div class="formRow">
							<label for="frmHeaderSubscribeEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderSubscribeEmail" name="email" placeholder="Email" data-msg-required="Email is required" data-msg-email="Please enter a valid email address" autocomplete="off" maxlength="255">
							</div>
						</div>
					</div>
					
					<footer class="formFoot">
						<div class="formActions">
							<div class="formActionsInner">
								<button type="submit" class="btn btnPrimary">Subscribe</button>

								
							</div>
						</div>
					
						<div class="formSocials">
						<div class="mb-4">

	<a href="https://www.phpjabbers.com/accounts/auth/Facebook" class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="facebook-icon"></i> Log in with Facebook</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Google" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="google-icon"></i> Log in with Google</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Twitter" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="twitter-icon"></i> Log in with Twitter</a>

	<a href="https://www.phpjabbers.com/accounts/auth/LinkedIn" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="linkedin-icon"></i> Log in with LinkedIn</a>

</div>						</div>
					</footer>												
				</form>
			</div>
		</div>
		
		<aside class="formAside tabsHead">
			<nav class="formNav tabsNav">
				<ul role="tablist">
					<li class="current" role="tab" tabindex="0" aria-selected="true" aria-expanded="true" aria-controls="accessTabSignIn" aria-labelledby="accessTab-1">
						<a href="https://www.phpjabbers.com/#accessTabSignIn" role="presentation" tabindex="-1" id="accessTab-1">
							<span class="formNavIcon">
								<i class="ico icoPersonWhite"></i>
							</span>
		
							<strong>Sign In</strong>
							<span>Access your member account.</span>
						</a>
					</li>
		
					<li role="tab" tabindex="-1" aria-selected="false" aria-expanded="false" aria-controls="accessTabSignUp" aria-labelledby="accessTab-2">
						<a href="https://www.phpjabbers.com/#accessTabSignUp" role="presentation" tabindex="-1" id="accessTab-2">
							<span class="formNavIcon">
								<i class="ico icoPassword"></i>
							</span>
		
							<strong>Sign Up</strong>
							<span>Not a member? Register now!</span>
						</a>
					</li>
		
					<li role="tab" tabindex="-1" aria-selected="false" aria-expanded="false" aria-controls="accessTabForgotPassword" aria-labelledby="accessTab-4">
						<a href="https://www.phpjabbers.com/#accessTabForgotPassword" role="presentation" tabindex="-1" id="accessTab-4">
							<span class="formNavIcon">
								<i class="ico icoBellSmall"></i>
							</span>
		
							<strong>Forgot password?</strong>
							<span>Don't worry! It happens.</span>
						</a>
					</li>
		
					<li role="tab" tabindex="-1" aria-selected="false" aria-expanded="false" aria-controls="accessTabSubscribe" aria-labelledby="accessTab-5">
						<a href="https://www.phpjabbers.com/#accessTabSubscribe" role="presentation" tabindex="-1" id="accessTab-5">
							<span class="formNavIcon">
								<i class="ico icoSubscribe"></i>
							</span>
		
							<strong>Subscribe</strong>
							<span>Get our monthly newsletter!</span>
						</a>
					</li>
		
					<li role="tab" tabindex="-1" aria-selected="false" aria-expanded="false" aria-labelledby="accessTab-6">
						<a href="https://www.phpjabbers.com/contact.php" class="tabDisabled" role="presentation" tabindex="-1" id="accessTab-6">
							<span class="formNavIcon">
								<i class="ico icoMail"></i>
							</span>
		
							<strong>Contact us</strong>
							<span>Feel free to ask anytime!</span>
						</a>
					</li>
				</ul>
			</nav>
		</aside>
	</div>
</div>				
				<a href="https://www.phpjabbers.com/order.php" class="btn btn-tertiary btn-sm text-uppercase"><i class="i i-shopping-cart-outline"></i> Cart
				 
				</a>
			</div>

			<a href="https://www.phpjabbers.com/#" class="btn btn-tertiary btn-sm text-uppercase order-2 btn-shopping-cart"><i class="i i-shopping-cart-outline"></i> 
				0
				 </a>

			<button class="navbar-toggler btn btn-tertiary btn-sm order-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="i i-menu m-0"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbarNav">
			<div class="buttons">
		    						<a href="https://www.phpjabbers.com/mega-sale.php" class="btn btn-primary btn-sm text-uppercase"><i class="i i-percent-outline"></i> Mega Sale</a>
									<a href="https://www.phpjabbers.com/help-resources.php" class="btn btn-tertiary btn-sm text-uppercase"><i class="i i-help-circle-outline"></i> Help</a>
				<a href="https://www.phpjabbers.com/accounts/login" class="btn btn-tertiary btn-sm text-uppercase"><i class="i i-user-outline"></i> Log in</a>

<div class="sectionAccess">
	<div class="form fA tabs">
		<div class="formContent tabsBody">
			<div class="tab current" id="accessTabSignIn" role="tabpanel" aria-hidden="false" aria-labelledby="accessTab-1">
				<form action="https://www.phpjabbers.com/" method="post" id="frmHeaderLogin">
					<input type="hidden" name="do_login" value="1">
					<input type="hidden" name="csrf_token" value="MTY2ODMzNjI2MWRiOGJhMDQ4Nzg0Nzg5NWFhYjY1NzYxNTA2YjQwZGQyZTRhMDYxOGE5OWJhNjA0ZjE5OTkwZTQxNTM2ZDYxZjMzNTMzZGMyNA==">
					<input type="hidden" name="next" value="/account/dashboard">
					<header class="formHead">
						<p class="formTitle">Sign In</p>
					</header>
					
					<div class="formBody">
						<div class="formAlert" role="alert" style="display: none"></div>
						<div class="formRow">
							<label for="frmHeaderLoginEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="email" class="field" id="frmHeaderLoginEmail" name="email" placeholder="Email" data-msg-required="Email is required" data-msg-email="Please enter a valid email address." maxlength="255" aria-label="Email">
							</div>
						</div>
					
						<div class="formRow">
							<label for="frmHeaderLoginPassword" class="formLabel">
								<i class="ico icoPassword"></i>
							</label>
					
							<div class="formControls">
								<input type="password" class="field" id="frmHeaderLoginPassword" name="password" placeholder="Password" data-msg-required="Password is required" aria-label="Password">
							</div>
						</div>
					</div>
					
					<footer class="formFoot">
						<div class="formActions">
							<div class="formRow">
								<div class="checkbox">
									<input type="checkbox" id="frmHeaderLoginRemember" name="remember" value="1">
									<label for="frmHeaderLoginRemember">Remember me</label>
								</div>
					
								<div class="formControls">
									<a href="https://www.phpjabbers.com/accounts/password-recovery" class="btn btnLink btnLinkNoTransform">Forgot password?</a>
								</div>
							</div>
					
							<div class="formActionsInner">
								<button type="submit" class="btn btnPrimary">log in</button>
					
								<p>Not a member yet? <a href="https://www.phpjabbers.com/accounts/register" class="btn btnLink btnLinkNoTransform">Register now!</a></p>
							</div>
						</div>
					
						<div class="formSocials">
						<div class="mb-4">

	<a href="https://www.phpjabbers.com/accounts/auth/Facebook" class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="facebook-icon"></i> Log in with Facebook</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Google" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="google-icon"></i> Log in with Google</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Twitter" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="twitter-icon"></i> Log in with Twitter</a>

	<a href="https://www.phpjabbers.com/accounts/auth/LinkedIn" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="linkedin-icon"></i> Log in with LinkedIn</a>

</div>						</div>
					</footer>
				</form>
			</div>
		
			<div class="tab" id="accessTabSignUp" role="tabpanel" aria-hidden="true" aria-labelledby="accessTab-2">
				<form action="https://www.phpjabbers.com/" method="post" id="frmHeaderRegister" autocomplete="off">
					<input type="hidden" name="do_register" value="1">
					<input type="hidden" name="csrf_token" value="MTY2ODMzNjI2MWRiOGJhMDQ4Nzg0Nzg5NWFhYjY1NzYxNTA2YjQwZGQyZTRhMDYxOGE5OWJhNjA0ZjE5OTkwZTQxNTM2ZDYxZjMzNTMzZGMyNA==">
					<input type="hidden" name="next" value="/accounts/created">
					<header class="formHead">
						<p class="formTitle">Sign Up</p>
					</header>
					
					<div class="formBody">
						<div class="formAlert" role="alert" style="display: none"></div>
						<div class="formRow">
							<label for="frmHeaderRegisterName" class="formLabel">
								<i class="ico icoPerson"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderRegisterName" name="name" placeholder="Name" data-msg-required="Name is required" maxlength="255" autocomplete="off">
							</div>
						</div>

						<div class="formRow">
							<label for="frmHeaderRegisterEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="email" class="field" id="frmHeaderRegisterEmail" name="email" placeholder="Email" data-msg-required="Email is required" data-msg-email="Please enter a valid email address." maxlength="255" autocomplete="off">
							</div>
						</div>
					
						<div class="formRow">
							<label for="frmHeaderRegisterPassword" class="formLabel">
								<i class="ico icoPassword"></i>
							</label>
					
							<div class="formControls">
								<input type="password" class="field" id="frmHeaderRegisterPassword" name="password" placeholder="Password" data-msg-required="Password is required" autocomplete="off">
							</div>
						</div>

						<div class="formRow">
							<label for="frmHeaderRegisterPasswordRe" class="formLabel">
								<i class="ico icoPassword"></i>
							</label>
					
							<div class="formControls">
								<input type="password" class="field" id="frmHeaderRegisterPasswordRe" name="confirm" placeholder="Confirm Password" data-msg-required="Confirm password is required" data-msg-equalto="Password doesn&#39;t match" autocomplete="off">
							</div>
						</div>
						
						<div class="formRow formRowPhone">
							<label for="frmHeaderRegisterPhone" class="formLabel">
								<i class="ico icoPerson"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderRegisterPhone" name="phone" placeholder="Phone" data-msg-required="Phone is required" maxlength="255" autocomplete="off">
							</div>
						</div>
					</div>
					
					<footer class="formFoot">
						<div class="formActions">
							<div class="formActionsInner">
								<button type="submit" class="btn btnPrimary">register</button>
					
								<p>Are you a member? <a href="https://www.phpjabbers.com/accounts/login" class="btn btnLink">Log in</a></p>
							</div>
						</div>
					
						<div class="formSocials">
						<div class="mb-4">

	<a href="https://www.phpjabbers.com/accounts/auth/Facebook" class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="facebook-icon"></i> Log in with Facebook</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Google" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="google-icon"></i> Log in with Google</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Twitter" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="twitter-icon"></i> Log in with Twitter</a>

	<a href="https://www.phpjabbers.com/accounts/auth/LinkedIn" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="linkedin-icon"></i> Log in with LinkedIn</a>

</div>						</div>
					</footer>												
				</form>
			</div>
		
			<div class="tab" id="accessTabForgotPassword" role="tabpanel" aria-hidden="true" aria-labelledby="accessTab-4">
				<form action="https://www.phpjabbers.com/" method="post" id="frmHeaderForgot" autocomplete="off">
					<input type="hidden" name="do_forgot" value="1">
					<input type="hidden" name="csrf_token" value="MTY2ODMzNjI2MWRiOGJhMDQ4Nzg0Nzg5NWFhYjY1NzYxNTA2YjQwZGQyZTRhMDYxOGE5OWJhNjA0ZjE5OTkwZTQxNTM2ZDYxZjMzNTMzZGMyNA==">
					<input type="hidden" name="next" value="/mega-sale.php?rel=fs">
					<header class="formHead">
						<p class="formTitle">Forgot your password</p>
					</header>
					
					<div class="formBody">
						<div class="formAlert" role="alert" style="display: none"></div>
						<div class="formRow">
							<label for="frmHeaderForgotEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderForgotEmail" name="email" placeholder="Email" autocomplete="off" data-msg-required="Email is required" data-msg-email="Please enter a valid email address" maxlength="255">
							</div>
						</div>
					</div>
					
					<footer class="formFoot">
						<div class="formActions">
							<div class="formActionsInner">
								<button type="submit" class="btn btnPrimary">Send new password</button>
							</div>
						</div>
					
						<div class="formSocials">
						<div class="mb-4">

	<a href="https://www.phpjabbers.com/accounts/auth/Facebook" class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="facebook-icon"></i> Log in with Facebook</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Google" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="google-icon"></i> Log in with Google</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Twitter" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="twitter-icon"></i> Log in with Twitter</a>

	<a href="https://www.phpjabbers.com/accounts/auth/LinkedIn" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="linkedin-icon"></i> Log in with LinkedIn</a>

</div>						</div>
					</footer>												
				</form>
			</div>
		
			<div class="tab" id="accessTabSubscribe" role="tabpanel" aria-hidden="true" aria-labelledby="accessTab-5">
				<form action="https://www.phpjabbers.com/" method="post" id="frmHeaderSubscribe" autocomplete="off">
					<input type="hidden" name="do_subscribe" value="1">
					<input type="hidden" name="csrf_token" value="MTY2ODMzNjI2MWRiOGJhMDQ4Nzg0Nzg5NWFhYjY1NzYxNTA2YjQwZGQyZTRhMDYxOGE5OWJhNjA0ZjE5OTkwZTQxNTM2ZDYxZjMzNTMzZGMyNA==">
					<input type="hidden" name="next" value="/mega-sale.php?rel=fs">
					<header class="formHead">
						<p class="formTitle">Subscribe</p>
					</header>
					
					<div class="formBody">
						<div class="formAlert" role="alert" style="display: none"></div>
						<div class="formRow">
							<label for="frmHeaderSubscribeName" class="formLabel">
								<i class="ico icoPerson"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderSubscribeName" name="name" placeholder="Name" data-msg-required="Name is required" autocomplete="off" maxlength="255">
							</div>
						</div>
					
						<div class="formRow">
							<label for="frmHeaderSubscribeEmail" class="formLabel">
								<i class="ico icoMail"></i>
							</label>
					
							<div class="formControls">
								<input type="text" class="field" id="frmHeaderSubscribeEmail" name="email" placeholder="Email" data-msg-required="Email is required" data-msg-email="Please enter a valid email address" autocomplete="off" maxlength="255">
							</div>
						</div>
					</div>
					
					<footer class="formFoot">
						<div class="formActions">
							<div class="formActionsInner">
								<button type="submit" class="btn btnPrimary">Subscribe</button>

								
							</div>
						</div>
					
						<div class="formSocials">
						<div class="mb-4">

	<a href="https://www.phpjabbers.com/accounts/auth/Facebook" class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="facebook-icon"></i> Log in with Facebook</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Google" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="google-icon"></i> Log in with Google</a>

	<a href="https://www.phpjabbers.com/accounts/auth/Twitter" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="twitter-icon"></i> Log in with Twitter</a>

	<a href="https://www.phpjabbers.com/accounts/auth/LinkedIn" type="button " class="btn btn-tertiary btn-md w-100 mb-2 d-flex justify-content-center align-items-center gap-2 fw-medium"><i class="linkedin-icon"></i> Log in with LinkedIn</a>

</div>						</div>
					</footer>												
				</form>
			</div>
		</div>
		
		<aside class="formAside tabsHead">
			<nav class="formNav tabsNav">
				<ul role="tablist">
					<li class="current" role="tab" tabindex="0" aria-selected="true" aria-expanded="true" aria-controls="accessTabSignIn" aria-labelledby="accessTab-1">
						<a href="https://www.phpjabbers.com/#accessTabSignIn" role="presentation" tabindex="-1" id="accessTab-1">
							<span class="formNavIcon">
								<i class="ico icoPersonWhite"></i>
							</span>
		
							<strong>Sign In</strong>
							<span>Access your member account.</span>
						</a>
					</li>
		
					<li role="tab" tabindex="-1" aria-selected="false" aria-expanded="false" aria-controls="accessTabSignUp" aria-labelledby="accessTab-2">
						<a href="https://www.phpjabbers.com/#accessTabSignUp" role="presentation" tabindex="-1" id="accessTab-2">
							<span class="formNavIcon">
								<i class="ico icoPassword"></i>
							</span>
		
							<strong>Sign Up</strong>
							<span>Not a member? Register now!</span>
						</a>
					</li>
		
					<li role="tab" tabindex="-1" aria-selected="false" aria-expanded="false" aria-controls="accessTabForgotPassword" aria-labelledby="accessTab-4">
						<a href="https://www.phpjabbers.com/#accessTabForgotPassword" role="presentation" tabindex="-1" id="accessTab-4">
							<span class="formNavIcon">
								<i class="ico icoBellSmall"></i>
							</span>
		
							<strong>Forgot password?</strong>
							<span>Don't worry! It happens.</span>
						</a>
					</li>
		
					<li role="tab" tabindex="-1" aria-selected="false" aria-expanded="false" aria-controls="accessTabSubscribe" aria-labelledby="accessTab-5">
						<a href="https://www.phpjabbers.com/#accessTabSubscribe" role="presentation" tabindex="-1" id="accessTab-5">
							<span class="formNavIcon">
								<i class="ico icoSubscribe"></i>
							</span>
		
							<strong>Subscribe</strong>
							<span>Get our monthly newsletter!</span>
						</a>
					</li>
		
					<li role="tab" tabindex="-1" aria-selected="false" aria-expanded="false" aria-labelledby="accessTab-6">
						<a href="https://www.phpjabbers.com/contact.php" class="tabDisabled" role="presentation" tabindex="-1" id="accessTab-6">
							<span class="formNavIcon">
								<i class="ico icoMail"></i>
							</span>
		
							<strong>Contact us</strong>
							<span>Feel free to ask anytime!</span>
						</a>
					</li>
				</ul>
			</nav>
		</aside>
	</div>
</div>				<a href="https://www.phpjabbers.com/order.php" class="btn btn-tertiary btn-sm text-uppercase buttons-mobile-cart"><i class="i i-shopping-cart-outline"></i> Cart
				 
				</a>
			</div>

			<ul class="navbar-nav">
           <li class="nav-item show">
		       		<a class="nav-link" href="https://www.phpjabbers.com/">PHP Scripts</a>
		     	</li>
		    	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="https://www.phpjabbers.com/php-scripts.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
	          			Browse All
	          			<i class="i i-chevron-down-outline"></i>
					</a>
	
					<div class="dropdown-menu dropdown-menu-mega" aria-labelledby="navbarDropdown">
	          			<div class="dropdown-menu-body">
	            			<div class="row">
	              				<div class="col-lg-3">
	              					<button class="btn btn-text collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
Booking Scripts<i class="i i-chevron-down-outline"></i>
</button>
<div class="collapse" id="collapseExample2">
<ul>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/appointment-scheduler/">Appointment Scheduler</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/availability-booking-calendar/">Availability Booking Calendar</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/bus-reservation-system/">Bus Reservation System</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/car-park-booking/">Car Park Booking System</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/car-rental-script/">Car Rental Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/cinema-booking-system/">Cinema Booking System</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/class-scheduling-system/">Class Scheduling System</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/cleaning-business-software/">Cleaning Business Software</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/event-booking-calendar/">Event Booking Calendar</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/event-ticketing-system/">Event Ticketing System</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/hotel-booking-system/">Hotel Booking System</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/limo-booking-software/">Limo Booking Software</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/meeting-room-booking-system/">Meeting Room Booking System</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/night-club-booking-software/">Night Club Booking Software</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/rental-property-booking-calendar/">Rental Property Booking Calendar</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/restaurant-booking-system/">Restaurant Booking System</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/service-booking-script/">Service Booking Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/shared-asset-booking-system/">Shared Asset Booking System</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/shuttle-booking-software/">Shuttle Booking Software</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/taxi-booking-script/">Taxi Booking Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/time-slots-booking-calendar/">Time Slots Booking Calendar</a></li>
</ul>
</div>								</div>
								<div class="col-lg-3">
									<button class="btn btn-text collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample8" aria-expanded="false" aria-controls="collapseExample">
E-Commerce<i class="i i-chevron-down-outline"></i>
</button>
<div class="collapse" id="collapseExample8">
<ul>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/catering-system/">Catering System</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/equipment-rental-script/">Equipment Rental Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/food-delivery-script/">Food Delivery Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/fundraising-script/">Fundraising Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/invoice-manager/">Invoice Manager</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/make-an-offer-widget/">Make An Offer Widget</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-auction-script/">PHP Auction Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-shopping-cart-script/">STIVA Shopping Cart</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/store-locator/">Store Locator</a></li>
</ul>
</div><button class="btn btn-text collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
Classified Ads<i class="i i-chevron-down-outline"></i>
</button>
<div class="collapse" id="collapseExample6">
<ul>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/auto-classifieds-script/">Auto Classifieds Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/business-directory-script/">Business Directory Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/job-listing-script/">Job Listing Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/member-directory-script/">Member Directory Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/pet-listing-script/">Pet Listing Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/property-listing-script/">Property Listing Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/travel-tours-script/">Travel Tours Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/vacation-rental-script/">Vacation Rental Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/yacht-listing-script/">Yacht Listing Script</a></li>
</ul>
</div>								</div>
								<div class="col-lg-3">
									<button class="btn btn-text collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
Miscellaneous<i class="i i-chevron-down-outline"></i>
</button>
<div class="collapse" id="collapseExample3">
<ul>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/callback-widget/">Callback Widget</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/document-creator/">Document Creator</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/file-sharing-script/">File Sharing Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/interactive-floor-plan-software/">Interactive Floor Plan</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/interactive-image-gallery/">Interactive Image Gallery</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/member-login-script/">Member Login Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-contact-form-generator/">PHP Contact Form Generator</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-gallery-script/">PHP Gallery Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-newsletter-script/">PHP Newsletter Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/product-comparison-script/">Product Comparison Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/ticket-support-script/">Ticket Support Script</a></li>
</ul>
</div><button class="btn btn-text collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
Polls &amp; Voting<i class="i i-chevron-down-outline"></i>
</button>
<div class="collapse" id="collapseExample4">
<ul>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-feedback-form-script/">Feedback Form Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-poll-script/">PHP Poll Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-review-script/">PHP Review Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-survey-script/">PHP Survey Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/star-rating-script/">Star Rating Script</a></li>
</ul>
</div>								</div>
	
								<div class="col-lg-3">
									<button class="btn btn-text collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">
Content Management<i class="i i-chevron-down-outline"></i>
</button>
<div class="collapse" id="collapseExample7">
<ul>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/knowledge-base-builder/">Knowledge Base Builder</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-comment-script/">PHP Comment Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-forum-script/">PHP Forum Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-news-script/">PHP News Script</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/restaurant-menu-maker/">Restaurant Menu Maker</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/simple-cms/">Simple CMS</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/stiva-blog-script/">STIVA Blog Script</a></li>
</ul>
</div><button class="btn btn-text collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
Web Calendars<i class="i i-chevron-down-outline"></i>
</button>
<div class="collapse" id="collapseExample1">
<ul>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/availability-calendar/">Availability Calendar</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/conference-agenda-software/">Conference Agenda Software</a></li>
<li><a class="dropdown-item" href="https://www.phpjabbers.com/php-event-calendar/">PHP Event Calendar</a></li>
</ul>
</div>								</div>
							</div>
						</div>

			          	<div class="dropdown-menu-footer">
				         
			         	</div>
					</div>
      			</li>
            
            <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="https://www.phpjabbers.com/services.php" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
			          PHP Services
			
			          <i class="i i-chevron-down-outline"></i>
			        </a>

			        <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
			          <li>
			            <a class="dropdown-item dropdown-item-box" href="https://www.phpjabbers.com/script-modifications.php">
			              <i class="i i-gift"></i>
			
			              <div>
			                <div class="dropdown-item-title">Script Modifications</div>
			                <div class="dropdown-item-desc">Request a customization</div>
			              </div>
			            </a>
			          </li>
			
			          <li>
			            <a class="dropdown-item dropdown-item-box" href="https://www.phpjabbers.com/support-services.php">
			              <i class="i i-help-circle-outline"></i>
			
			              <div>
			                <div class="dropdown-item-title">Support Service</div>
			                <div class="dropdown-item-desc">Full assistance provided</div>
			              </div>
			            </a>
			          </li>
			
			          <li>
			            <a class="dropdown-item dropdown-item-box" href="https://www.phpjabbers.com/extended-licence.php">
			              <i class="i i-file-text"></i>
			
			              <div>
			                <div class="dropdown-item-title">Extended License</div>
			                <div class="dropdown-item-desc">Start offering our scripts</div>
			              </div>
			            </a>
			          </li>
			
			          <li>
			            <a class="dropdown-item dropdown-item-box" href="https://www.phpjabbers.com/remotely-hosted-scripts.php">
			              <i class="i i-cloud-upload-outline"></i>
			
			              <div>
			                <div class="dropdown-item-title">Remote Hosting</div>
			                <div class="dropdown-item-desc">Let us host your scripts</div>
			              </div>
			            </a>
			          </li>
			
			          <li>
			            <a class="dropdown-item dropdown-item-box" href="https://www.phpjabbers.com/web-sms/">
			              <i class="i i-chat-alt2-outline"></i>
			
			              <div>
			                <div class="dropdown-item-title">Web SMS</div>
			                <div class="dropdown-item-desc">Enable SMS messaging</div>
			              </div>
			            </a>
			          </li>
			
			          <li>
			            <a class="dropdown-item dropdown-item-box" href="https://www.phpjabbers.com/payment-gateways.php">
			              <i class="i i-dollar-sign-outline"></i>
			
			              <div>
			                <div class="dropdown-item-title">Payment Gateways</div>
			                <div class="dropdown-item-desc">Add other payment methods</div>
			              </div>
			            </a>
			          </li>
			        </ul>
      			</li>

            <li class="nav-item">
		       		<a class="nav-link" href="https://www.phpjabbers.com/blog.php">Blog</a>
		     	</li>
          
           <li class="nav-item show">
		       		<a class="nav-link" href="https://www.phpjabbers.com/free-website-templates.php">Web Templates</a>
		     	</li>
          
		      	

		     	

	     		

		      	

      			<li class="nav-item">
	       			<a class="nav-link" href="https://www.phpjabbers.com/contact.php">Contact us</a>
	     		</li>
	   		</ul>
	 	</div>
  	</div>
</nav>


<div class="wrapper">

	<div class="pageActions pageActionsActive">
		<a href="https://www.phpjabbers.com/#" class="btn btnPageAction btnGoTop">
			<span>go top</span>
		</a>
	</div><div class="pageAsideMegaSale pageAsideMegaSaleActive">
	<div class="pageAsideArticle pageAsideArticleShort pageAsideInner">
		<article class="pageAsideArticleInner">
			<div class="pageAsideArticleContent">
				<p class="pageAsideArticleTitle">
					<a href="https://www.phpjabbers.com/mega-sale.php" class="msLink" data-category="Link" data-id="2" target="_blank"><strong>MEGA</strong> Sale</a>
				</p>

				<div class="pageAsideArticleMeta">
					<ul>
						<li>Colection of <strong>65 PHP scripts</strong> for <strong>$4.29 each</strong></li>
					</ul>
				</div>
			</div>
		</article>

		<div class="pageAsideArticleActions">
			<a href="https://www.phpjabbers.com/mega-sale.php" class="btn btnPageAction msLink stop" data-category="Link" data-id="2" target="_blank" aria-label="Mega Sale">
				<i class="ico"></i>
			</a>
		</div>
	</div>
</div><main>
	<section class="special-offers bg-gradient-orange text-center rounded-0 overflow-hidden pt-5">
		<div class="special-offers-inner p-0">
			<div class="special-offer-mobile">
				<p class="text-shadow-md fw-medium pt-5 mb-3 fz-9">SPECIAL OFFER</p>

				<h3 class="fz-3 fw-black text-shadow-md mb-4">65+ Scripts for $4<sup>29</sup> each</h3>

									<p class="text-shadow-md mb-5 fw-medium fz-9">Purchase 65 PHP scripts in a bundle for $299 only!</p>
					<p class="text-shadow-md mb-5 fw-medium pt-3">For a limited time only get the best deal ever on the market! <br> Buy all 65 PHP scripts in a bundle now and save $3800. </p>
					<p class="text-shadow-md mb-4 fw-medium d-flex align-items-center justify-content-center pt-4"><i class="i i-shield-check bg-white w-8 h-8 me-1"></i> 30-Day Money-Back Guarantee</p>

					<div class="pb-5">
						<a href="https://www.phpjabbers.com/payments/regular/?view=form&amp;hash=ba839d8e263bd1903d1b09cd248769c0a0cca2ee&amp;product_id%5B0%5D=999&amp;amount=299&amp;mbs=2" class="btn btn-primary-inverted btn-lg shadow-lg mt-2 text-uppercase btnPaymentTrigger"><i class="i i-shopping-cart-outline"></i> BUY ALL FOR $299</a>
											</div>
								</div>

			<div class="container">
				<div class="script-windows">
					<div class="script-window">
						<div class="script-window-actions"></div>

						<div class="script-window-body">
							<img src="./front_files/mega-bundle-intro-image-1.jpg" alt="">
						</div>
					</div>

					<div class="script-window">
						<div class="script-window-actions"></div>

						<div class="script-window-body">
							<img src="./front_files/mega-bundle-intro-image-2.jpg" alt="">
						</div>
					</div>

					<div class="script-window">
						<div class="script-window-actions"></div>

						<div class="script-window-body">
							<img src="./front_files/mega-bundle-intro-image-3.jpg" alt="">
						</div>
					</div>

					<div class="script-window">
						<div class="script-window-actions"></div>

						<div class="script-window-body">
							<img src="./front_files/mega-bundle-intro-image-4.jpg" alt="">
						</div>
					</div>

					<div class="script-window">
						<div class="script-window-actions"></div>

						<div class="script-window-body">
							<img src="./front_files/mega-bundle-intro-image-5.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

		
	<section class="section pb-4 pt-4 bg-gray-100">
		<div class="container">
			<div class="py-5">
				<h2 class="fz-6 fw-black gray-900 title-separator mb-4 text-center">What’s included in Tedallel?</h2>

				<p class="gray-600 text-center">Review our products.</p>
			</div>

		
		</div>
	</section>
<br>

<br> <!-----------------------------------------------liste des produits---------->

<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
				<form method="get" action="afficher_produit.php"  class="mb-4">
                                   <input type="text" class="form-control" name="recherche" placeholder="chercher un produit">
                                   <br>
                                   <input type="submit" class="btn btn-primary "  value="Chercher">
                                   <style>
							                  	  input{
                                         
                                         margin-left:111px;

                                        position:relative;
                                      
                                        }
								                    </style>
                                    </form>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Liste des produits :</strong>
                            </div>
                            <div class="card-body">
                                


 

<div class="wrapper">
  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
      <!-- Sidebar Menu -->
     

  <!-- Content Wrapper. Contains page content -->

			           <div class="form-group">
                            <div class="input-group input-group-lg">
                                <!--<input type="search" class="form-control form-control-lg" placeholder="entrer votre produit" value="">
								-->

                                  

                            

<!-- jQuery -->
			  <!-- card-body-->
			  
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" name="prod">
                  <thead>
				  
                  <tr>
                 
                    <th>Id_Produit</th>
                    <th>Réfference</th>
                    <th>Nom_Produit</th>
                    <th>Categorie</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th>Image</th>
                    <th>Modifier</th>
					<th>Supprimer</th>
                   
					
                  </tr>
				  
				  
                  </thead>
				  
                  <tbody>
                  
                  
				  <?php
				  foreach($listeproduit as $row){
				  ?>

                  <tr>
                    <td> <?php echo $row['id_produit'];?></td>
                    <td> <?php echo $row['idC'];?></td>
					<td> <?php echo $row['nom_produit'];?></td>
					<td> <?php echo $row['categorie'];?></td>
					<td> <?php echo $row['prix'];?></td>
					 <td> <?php echo $row['quantite'];?></td>
                     
					 <!--
					 <td> <img src="../View/assets/images/ <?php echo $row['image'];?>"  width="90" height="90" alt="Image"></td>
                       -->
                        
                      <td><?PHP echo "<img  src='../View/assets/images/".$row['image']."' >"; ?>
					  <style>
					  img{
						width: 90px;
                        height:	90px;					
					  }
					  
					  </style>
					  
					  </td>					   

					
					 
					 
					 
                     <td><a type="button" class="btn btn-primary" href = "modifierproduit1.php?id_produit=<?= $row['id_produit'] ?>">modifier</a></td>                            
                     <td> 
                     <form method="POST" action="../View/supprimer_produit.php">
                                        <button type="submit"  id="supprimer"  class="btn btn-danger" onclick="Supp()">supprimer</button>
                                        <input type="hidden" value=<?PHP echo $row['id_produit']; ?> name="id_produit">
                                        </form>
                                        
                                       
                                   </td>    
						                                                                                                                                                                                    


                   </tr> 
                                     				  
				  </tbody>
				  
				  
                  <?PHP
				      }
		  	         ?>
                    	
               
               

                  						
				</table>
				<br>
				
				

                <tbody>
				 
			
                				 
         </tbody>			
              </table>


            <br>
                                
        </div>
      
    </div>
  



              </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
<br>
	<section class="section pt-5 pb-5 bg-gradient-purple text-white text-center">
		<div class="container pt-3 pb-3">
			<h2 class="fw-black fz-6 mb-4 text-shadow-md">Don’t miss this deal!</h2>

			<a href="https://www.phpjabbers.com/payments/regular/?view=form&amp;hash=ba839d8e263bd1903d1b09cd248769c0a0cca2ee&amp;product_id%5B0%5D=999&amp;amount=299&amp;mbs=2" class="btn btn-primary-inverted btn-lg shadow-lg mb-4 btnPaymentTrigger msBuyNow"><i class="i i-percent-outline"></i> BUY ALL FOR $299 </a>

			<p class="text-shadow-md fw-medium pt-2">Do you have any questions?</p>

			<div class="d-flex align-items-center justify-content-center gap-3">
				<a href="https://www.phpjabbers.com/mega-sale-terms.php" class="btn btn-secondary-outline-inverted btn-sm text-uppercase"> view terms</a>
				<button type="button" class="btn btn-secondary-outline-inverted btn-sm text-uppercase" data-bs-toggle="modal" data-bs-target="#mageSaleContact">
				  Contact Us
				</button>
			</div>
		</div>
	</section>

	<section class="section section-mobile">
		<div class="container">
			<h2 class="fz-6 fw-black gray-900 title-separator mb-4 text-center">Empower your web development business!</h2>

			<p class="gray-600 text-center mb-5">Get 65 professional PHP scripts! Money back guarantee! Limited offer!</p>

			<div class="row">
				<div class="col-xl-3 col-sm-6 mb-4">
					<div class="card-info p-4 sh bg-white h-100 rounded-5">
						<div>
							<div class="text-center pb-3">	
								<span class="i-holder-circle mb-4 w-3 h-3 mt-4"><i class="i i-medal w-7 h-7"></i></span>

								<h3 class="fw-bold gray-000 fz-10">Top Quality</h3>

								<p class="fz-12 gray-500">Excellent code quality, latest technology, QA assured PHP scripts:</p>
					 		</div>

							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Latest PHP 7.3 &amp; MySQL 8.0 supported</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> High-performance PHP Framework</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Clean PHP Code &amp; MVC model</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Easy to install and integrate</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> SQL Injections protected</p>
						</div>

						<div class="text-center py-4 mt-2 w-100">
								<a href="https://www.phpjabbers.com/our-php-code.php" class="btn btn-tertiary btn-sm text-uppercase">See our code</a>
							</div>
					</div>
				</div>	

				<div class="col-xl-3 col-sm-6 mb-4">
					<div class="card-info p-4 sh bg-white h-100 rounded-5">
						<div>
							<div class="text-center pb-3">	
								<span class="i-holder-circle mb-4 w-3 h-3 mt-4"><i class="i i-trending-up-outline w-7 h-7"></i></span>

								<h3 class="fw-bold gray-000 fz-10">Market-Proven</h3>

								<p class="fz-12 gray-500">Buy from a trustful provider. PHPJabbers is the market leader:</p>
					 		</div>

							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> 35 000+ clients worldwide</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> 600,000+ websites are using our products</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> 16 years of experience</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> 8,000+ custom modifications and projects</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Excellent reputation</p>

							
						</div>
						<div class="text-center py-4 mt-2 w-100">
							<a href="https://www.phpjabbers.com/our-clients.php" class="btn btn-tertiary btn-sm text-uppercase">See our clients</a>
						</div>
					</div>
				</div>	

				<div class="col-xl-3 col-sm-6 mb-4">
					<div class="card-info p-4 sh bg-white h-100 rounded-5">
						<div>
							<div class="text-center pb-3">	
								<span class="i-holder-circle mb-4 w-3 h-3 mt-4"><i class="i i-star-outline w-7 h-7"></i></span>

								<h3 class="fw-bold gray-000 fz-10">Top Features</h3>

								<p class="fz-12 gray-500">Superior standard commercial scripts that provide all-must have features.</p>
					 		</div>

							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Responsive front-end design</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Multi-Language &amp; Translation Module</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Wordpress &amp; Joomla Integration</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Cross-domain Integration</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Payment Gateways integrated</p>
						</div>

						<div class="text-center py-4 mt-2 w-100">
							<a href="https://www.phpjabbers.com/benefits.php" class="btn btn-tertiary btn-sm text-uppercase">See top features</a>
						</div>
					</div>
				</div>	

				<div class="col-xl-3 col-sm-6 mb-4">
					<div class="card-info p-4 sh bg-white h-100 rounded-5">
						<div>
							<div class="text-center pb-3">	
								<span class="i-holder-circle mb-4 w-3 h-3 mt-4"><i class="i i-file-text w-7 h-7"></i></span>

								<h3 class="fw-bold gray-000 fz-10">Developer Friendly License</h3>

								<p class="fz-12 gray-500">Fantastic deal based on our Developer Licence:</p>
					 		</div>

							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Unlimited installations allowed</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Modify script code and make your own changes</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> Remove PHPJabbers copyright and rebrand the scripts</p>
							<p class="fz-12 d-flex gap-2"><i class="i i-check-circle flex-shrink-0 w-9 h-9 bg-primary"></i> 30 days money-back guarantee</p>
						</div>

						<div class="text-center py-4 mt-2 w-100">
							<a href="https://www.phpjabbers.com/mega-sale-terms.php" class="btn btn-tertiary btn-sm text-uppercase">MEGA SALE TERMS</a>
						</div>
					</div>
				</div>	
			</div>	
		</div>
	</section>

	<section class="section section-mobile bg-gray-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6">
					<h2 class="fz-6 fw-black gray-900 mb-4">Our Clients Globally</h2>

					<div class="separator mb-4"></div>

					<p class="gray-600 mb-5 fz-9">Thousands of people around the world are using our PHP scripts.</p>
				</div>

				<div class="col-xl-6">
					<img src="./front_files/map-our-clients-globally.png" class="img-fluid mb-5" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="section section-mobile">
	<div class="container">
		<h2 class="fz-6 fw-black gray-900 title-separator mb-4 text-center">Testimonials</h2>

		<p class="gray-600 text-center mb-5">Let our clients share their experience with our online food ordering system and how it has improved their online business.</p>

		<div class="row clients-icons">
			<div class="col-lg-10 offset-lg-1">
				<div class="mb-4 d-flex justify-content-center justify-content-lg-between align-items-center gap-4 flex-wrap">
					<img src="./front_files/client-logo-1.png" style="width: 64px; height: 47.5px;" alt="">
					<img src="./front_files/client-logo-2.png" style="width: 72px; height: 37.5px;" alt="">
					<img src="./front_files/client-logo-3.png" style="width: 72px; height: 48.5px;" alt="">
					<img src="./front_files/client-logo-4.png" style="width: 96.5px; height: 19.5px;" alt="">
					<img src="./front_files/client-logo-5.png" style="width: 72.5px; height: 53.5px;" alt="">
					<img src="./front_files/client-logo-6.png" style="width: 72.5px; height: 55.5px;" alt="">
					<img src="./front_files/client-logo-7.png" style="width: 72.5px; height: 40.5px;" alt="">
				</div>

				<div class="mb-4 d-flex justify-content-center justify-content-lg-between align-items-center gap-4 flex-wrap">
					<img src="./front_files/client-logo-8.png" style="width: 144px; height: 38.5px;" alt="">
					<img src="./front_files/client-logo-9.png" style="width: 72.5px; height: 42.5px;" alt="">
					<img src="./front_files/client-logo-10.png" style="width: 144.5px; height: 36.5px;" alt="">
					<img src="./front_files/client-logo-11.png" style="width: 144.5px; height: 40.5px;" alt="">
					<img src="./front_files/client-logo-12.png" style="width: 96.5px; height: 44.5px;" alt="">
					<img src="./front_files/client-logo-13.png" style="width: 88px; height: 40.5px;" alt="">
				</div>
			</div>
		</div>
		<div class="row" data-masonry="{&quot;percentPosition&quot;: true }" style="position: relative; height: 2032px;">
						
											
																<div class="col-sm-6 col-lg-4 mb-4 mb-4" style="position: absolute; left: 0%; top: 0px;">
										<div class="card-info p-4 sh bg-white rounded-4">
											<div class="d-flex gap-4">
												<div class="fz-5 text-primary flex-shrink-0">“</div>
												<div>
													<p>Some companies claim to offer great support but PHPJabbers delivers. I have purchased two of their products and needed support both times. They solved the problem within minutes. They have hands down the best support of any company I have ever dealt with. They also offer first rate products at very reasonable prices. I would not hesitate to recommend their products to anyone.</p>
				
													<p class="gray-000 fw-medium mb-0">Mark Martin</p>
												</div>
											</div>
										</div>
									</div>
																		<div class="col-sm-6 col-lg-4 mb-4 mb-4" style="position: absolute; left: 33.333%; top: 0px;">
										<div class="card-info p-4 sh bg-white rounded-4">
											<div class="d-flex gap-4">
												<div class="fz-5 text-primary flex-shrink-0">“</div>
												<div>
													<p>I've had a very good experience with PHPJabbers. My order involved extensive customization of one of their appointment scheduling software. The support team worked closely with me over the course of several weeks until I was completely satisfied with the results. Excellent customer service is what sets them apart from other solutions.</p>
				
													<p class="gray-000 fw-medium mb-0">Morgan Schwartz</p>
												</div>
											</div>
										</div>
									</div>
																		<div class="col-sm-6 col-lg-4 mb-4 mb-4" style="position: absolute; left: 66.6661%; top: 0px;">
										<div class="card-info p-4 sh bg-white rounded-4">
											<div class="d-flex gap-4">
												<div class="fz-5 text-primary flex-shrink-0">“</div>
												<div>
													<p>I would just like to thank the team at PHPJabbers for all their hard work and complete professionalism while developing our new booking calendar software. I have found during the process that all questions were answered promptly and actioned without delay. This seems to be the culture with all staff at PHPJabbers as everyone who took part in the development process were always very helpful.<br>
We have been using the availability booking calendar for over 4 years now and are very happy with its functionality and were upgrading to take advantage of all the new features. <br>
Fantastic service, Fantastic pricing coupled with Fantastic software goes towards making this a brilliant product.<br>
Thanks for all your help, highly recommended.<br>
Ambulance Service Welfare Fund</p>
				
													<p class="gray-000 fw-medium mb-0">Steve Dodman</p>
												</div>
											</div>
										</div>
									</div>
															
												
																<div class="col-sm-6 col-lg-4 mb-4 mb-4" style="position: absolute; left: 33.333%; top: 328px;">
										<div class="card-info p-4 sh bg-white rounded-4">
											<div class="d-flex gap-4">
												<div class="fz-5 text-primary flex-shrink-0">“</div>
												<div>
													<p>I am a web designer and I have been using PHPJabbers scripts and services for over 4 years. Most of my work is mainly design work and does not require major programming. However I do need things like polls, classifieds, galleries which clients can use update themselves, captcha forms, etc. <br>
Their PHP blog script is amazing. Most of my clients can not figure out how to use Wordpress, but they grasp right away how to use PHPJabbers Blog Script. And best of all, I just plug it into the existing site and it fits right into my design.<br>
I absolutely love the simplicity and programming of PHPJabbers's scripts. They are easy to install and use. And when I have needed updates and alterations of a script, the PHPJabbers team has been there with quick, affordable and great service.<br>
Quite honestly, PHPJabbers has become an integral part of my business. Love these guys and gals!!!</p>
				
													<p class="gray-000 fw-medium mb-0">Leta Maler</p>
												</div>
											</div>
										</div>
									</div>
																		<div class="col-sm-6 col-lg-4 mb-4 mb-4" style="position: absolute; left: 0%; top: 352px;">
										<div class="card-info p-4 sh bg-white rounded-4">
											<div class="d-flex gap-4">
												<div class="fz-5 text-primary flex-shrink-0">“</div>
												<div>
													<p>I was really impressed with the speed of customer service and the level of support from PHPJabbers support services. This is the best service I've ever had from an online business. Nothing was too difficult and they didn't make me feel stupid for not understanding the technical aspects of installing their booking script.<br>
Up Front Training &amp; Motivation</p>
				
													<p class="gray-000 fw-medium mb-0">Hayley Solich</p>
												</div>
											</div>
										</div>
									</div>
																		<div class="col-sm-6 col-lg-4 mb-4 mb-4" style="position: absolute; left: 66.6661%; top: 640px;">
										<div class="card-info p-4 sh bg-white rounded-4">
											<div class="d-flex gap-4">
												<div class="fz-5 text-primary flex-shrink-0">“</div>
												<div>
													<p>To the team at PHPJabbers,<br>
I'd like to say a personal thank you for providing and customizing the software I needed for a website. I have been building and forward on a note to anyone who finds themselves occasionally searching for specialized software to use on their websites, these guys were great and offered customization at reasonable prices. They followed through on their work which I sometimes find other companies don't. I would like to recommend and thank the guys at PHPJabbers! I would be happy to use them again in the future.<br>
Website Designer and Management Services</p>
				
													<p class="gray-000 fw-medium mb-0">Adam Aitken</p>
												</div>
											</div>
										</div>
									</div>
															
												
																<div class="col-sm-6 col-lg-4 mb-4 mb-4" style="position: absolute; left: 0%; top: 704px;">
										<div class="card-info p-4 sh bg-white rounded-4">
											<div class="d-flex gap-4">
												<div class="fz-5 text-primary flex-shrink-0">“</div>
												<div>
													<p>I was very pleased with the first contacts I made with the support and decided to buy the first script. The quality exceeded my expectations. A property rental software that other companies would charge hundreds of dollars, this is proving an excellent value for money. I have experience with vacation rental software and this proved to be one of the best I've seen. Simplicity and ease of use.</p>
				
													<p class="gray-000 fw-medium mb-0">Antonio Santos</p>
												</div>
											</div>
										</div>
									</div>
																		<div class="col-sm-6 col-lg-4 mb-4 mb-4" style="position: absolute; left: 33.333%; top: 1016px;">
										<div class="card-info p-4 sh bg-white rounded-4">
											<div class="d-flex gap-4">
												<div class="fz-5 text-primary flex-shrink-0">“</div>
												<div>
													<p>I have been implementing multiple PHP scripts from PHPJabbers for more than a year on multiple web sites. Their products are excellent and equally important is the extremely high quality and quick responsiveness of their technical support. I am always amazed and very pleased with their service and recommend them highly. PHPJabbers is always my first choice when I need a canned or customized script for our web sites.<br>
City Connections LLC<br>
President &amp; CEO</p>
				
													<p class="gray-000 fw-medium mb-0">Morris Enyeart</p>
												</div>
											</div>
										</div>
									</div>
																		<div class="col-sm-6 col-lg-4 mb-4 mb-4" style="position: absolute; left: 0%; top: 1080px;">
										<div class="card-info p-4 sh bg-white rounded-4">
											<div class="d-flex gap-4">
												<div class="fz-5 text-primary flex-shrink-0">“</div>
												<div>
													<p>I'm not normally one for making feedback responses and testimonials but after stumbling on to this website via a search engine, I decided to try my luck and go with the PHP Shopping Cart due to a client request to add one to their site.  I know there are loads of other pieces of software you can use, but I had to look at it from a client side for both ease of use and also for looks to match in with the current web site they have.<br>
The outcome of my find?<br>
AMAZING, AWESOME, WICKED, BRILLIANT<br>
Look no further than this software folks because it's simplicity in itself giving you the perfect online shopping cart without the hassle of trying to get around an admin GUI that looks like something out of a N.A.S.A space station. Installed in seconds, configured in minutes and the client as happy as a dog in a butchers shop. <br>
And to top it all off, the support offered by Alexander Valkanov and his team with regards to ANY of the software they offer is second to none. Nothing is too much trouble and the answers are given both freely and quickly and in a format that even a new born could understand.<br>
Trust me folks when I say, buy any software with the name of PHPJabbers and PHPJabbers, and you will NOT be disappointed.<br>
Kind Regards from one very happy client.</p>
				
													<p class="gray-000 fw-medium mb-0">Mick Knight</p>
												</div>
											</div>
										</div>
									</div>
															
										
								
											
																<div class="col-sm-6 col-lg-4 mb-4 mb-4" style="position: absolute; left: 66.6661%; top: 1160px;">
										<div class="card-info p-4 sh bg-white rounded-4">
											<div class="d-flex gap-4">
												<div class="fz-5 text-primary flex-shrink-0">“</div>
												<div>
													<p>The dedication and professionalism of all PHPJabbers staff is simply outstanding. I asked for modifications to be made from the basic code and the support and guidance I received during this period was exceptional. I have absolutely no hesitation in recommending not only the availability booking script but the entire PHPJabbers collective. Simply first class all round.<br>
Many thanks for all your help in getting up and running.</p>
				
													<p class="gray-000 fw-medium mb-0">Gareth Meredith</p>
												</div>
											</div>
										</div>
									</div>
															
												
													
												
													
										
						</div>
		
					<div class="text-center">
				<a href="https://www.phpjabbers.com/our-clients.php" class="btn btn-secondary-outline btn-lg">More Client Stories <i class="i i-arrow-right-outline me-0"></i></a>
			</div>
						<div class="pt-5 mt-5 d-flex justify-content-center gap-4 flex-wrap">
		  		<img src="./front_files/checkout-icon-1.png" style="width: 32px; height: 20px;" alt="">
		  		<img src="./front_files/checkout-icon-2.png" style="width: 32px; height: 20px;" alt="">
		  		<img src="./front_files/checkout-icon-3.png" style="width: 46px; height: 20px;" alt="">
		  		<img src="./front_files/checkout-icon-4.png" style="width: 48px; height: 20px;" alt="">
		  		<img src="./front_files/checkout-icon-5.png" style="width: 76px; height: 20px;" alt="">
		 	</div>
		 		  </div>
	</section></main></div>

<div class="modal fade" id="mageSaleContact" tabindex="-1" aria-labelledby="mageSaleContactLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content login-box shadow border-0 mt-0 mb-0">
    	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

    	<form action="https://www.phpjabbers.com/mega-sale-contact.php" class="pt-4" method="post" id="frmAjaxContact" novalidate="novalidate">
			<h5 class="fz-8 fw-black text-center mb-2 pt-2" id="mageSaleContactLabel">Contact us</h5>


			<input type="hidden" name="do_contact" value="1">

			<input type="hidden" name="csrf_token" value="MTY2ODMzNjI2MWRiOGJhMDQ4Nzg0Nzg5NWFhYjY1NzYxNTA2YjQwZGQyZTRhMDYxOGE5OWJhNjA0ZjE5OTkwZTQxNTM2ZDYxZjMzNTMzZGMyNA==">

			
			<div class="formAlert linksDefHover alert alert-success d-none" role="alert" style="display: block"></div>

			<div class="form-group mb-4">
				<label for="frmAjaxContactName" class="form-label fz-12 mb-1">Name</label>

				<input type="text" class="form-control" id="frmAjaxContactName" name="name" data-msg-required="Name is required" maxlength="255" value="">
			</div>

			<div class="form-group mb-4">
				<label for="frmAjaxContactEmail" class="form-label fz-12 mb-1">Email</label>

				<input type="text" class="form-control" id="frmAjaxContactEmail" name="email" data-msg-required="Email is required" data-msg-email="Please enter a valid email address." maxlength="255" value="">
			</div>

			<div class="form-group mb-4">
				<label for="frmAjaxContactQeustions" class="form-label fz-12 mb-1">Questions</label>

				<textarea class="form-control" id="frmAjaxContactQeustions" name="question" rows="3"></textarea>
			</div>

			<button type="sumit" class="btn btn-primary btn-md d-block w-100 text-center">Submit</button>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content login-box shadow border-0 mt-0 mb-0">
		</div>
	</div>
</div><footer class="footer mt-auto">
	<div class="container">
		<div class="footer-top">
			<div class="footer-top-nav">
				<div class="footer-nav">
					<p><strong>PHP Scripts</strong></p>
					<div class="footer-nav-row">
						<div class="footer-nav-col">

							<p><a href="https://www.phpjabbers.com/php-booking-scripts">Booking Scripts</a></p>
							<p><a href="https://www.phpjabbers.com/content-management-systems">Content Management</a></p>
							<p><a href="https://www.phpjabbers.com/e-commerce-scripts">E-Commerce</a></p>
							<p><a href="https://www.phpjabbers.com/classified-ads-scripts">Classified Ads</a></p>
						</div>
						<div class="footer-nav-col">

							<p><a href="https://www.phpjabbers.com/miscellaneous-php-scripts">Miscellaneous</a></p>
							<p><a href="https://www.phpjabbers.com/web-calendars">Web Calendars</a></p>
							<p><a href="https://www.phpjabbers.com/polls-and-voting-scripts">Polls &amp; Voting</a></p>
							<p><a href="https://www.phpjabbers.com/websites-for-sale"></a></p>
						</div>
					</div>
				</div>
				<div class="footer-nav">
					<p><strong>Free Stuff</strong></p>
					<div class="footer-nav-col">
						
						<p><a href="https://www.phpjabbers.com/free-website-templates.php">Web Templates </a></p>
						
					</div>
				</div>
				<div class="footer-nav">
					<p><strong>Blog</strong></p>
					<div class="footer-nav-col">

						<p><a href="https://www.phpjabbers.com/blog/updates-and-releases/">Updates &amp; Releases</a></p><p><a href="https://www.phpjabbers.com/blog/useful-resources/">Useful Resources</a></p><p><a href="https://www.phpjabbers.com/blog/deals-and-offers/">Deals &amp; Offers</a></p><p><a href="https://www.phpjabbers.com/blog/custom-projects/">Custom Projects</a></p>					</div>
				</div>
				<div class="footer-nav">
					<p><strong>About Us</strong></p>
					<div class="footer-nav-row">
						<div class="footer-nav-col">
							<p><a href="https://www.phpjabbers.com/company.php">Company</a></p>
							<p><a href="https://www.phpjabbers.com/brands.php">Brands</a></p>
							<p><a href="https://www.phpjabbers.com/our-clients.php">Our Clients</a></p>
						</div>
						<div class="footer-nav-col">
							<p><a href="https://www.phpjabbers.com/services.php">Services</a></p>
							<p><a href="https://www.phpjabbers.com/blog.php">Blog</a></p>
						</div>
					</div>
				</div>
				<div class="footer-nav">
					<p><strong>Help</strong></p>
					<div class="footer-nav-col">
						<p><a href="https://www.phpjabbers.com/contact.php">Contact Us</a></p>
						<p><a href="https://www.phpjabbers.com/help-resources.php">Help Resources</a></p>
						<p><a href="https://www.phpjabbers.com/faq.php">FAQ</a></p>
					</div>
				</div>
			</div>

			<div class="footer-top-brand">
				<a href="https://www.phpjabbers.com/#"><img src="./front_files/logo-light.svg" alt=""></a>

				<div class="trustpilot-holder">
					<img src="./front_files/trustpilot-logo-starts 1.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</div>



	<div class="footer-bottom py-4">
	  <div class="container">
	  	<div class="footer-bottom-inner">
			<ul class="list-unstyled">
				<li><a href="https://www.phpjabbers.com/privacy-policy.php">Privacy Policy</a></li>
				<li><a href="https://www.phpjabbers.com/terms-of-use.php">Terms of Use</a></li>
				<li><a href="https://www.phpjabbers.com/licence-agreement.php">Licence Agreement</a></li>
			</ul>

			<div class="copy">© 2022 PHPJabbers.com. <span>All rights reserved.</span></div>
	    </div>
	  </div>
  </div>


</footer>




<script type="text/javascript" src="./front_files/jquery.min.js.téléchargé"></script>
<script type="text/javascript" src="./front_files/bootstrap.bundle.min.js.téléchargé"></script>
<script type="text/javascript" src="./front_files/jquery.validate.min.js.téléchargé"></script>
<script type="text/javascript" src="./front_files/additional-methods.min.js.téléchargé"></script>
<script type="text/javascript" src="./front_files/jquery.carouFredSel.packed.js.téléchargé"></script>
<script type="text/javascript" src="./front_files/jquery.touchSwipe.min.js.téléchargé"></script>
<script type="text/javascript" src="./front_files/jquery.colorbox-min.js.téléchargé"></script>
<script type="text/javascript" src="./front_files/masonry.pkgd.min.js.téléchargé"></script>
<script type="text/javascript" src="./front_files/functions_new.min.js.téléchargé"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('#navbarNav').on('show.bs.collapse', function () {
			$("body").addClass("backdrop");
		});

		$('#navbarNav').on('hide.bs.collapse', function () {
			$("body").removeClass("backdrop");
		});
		var tabs_nav = $('.tabs-nav');
		if (tabs_nav.length > 0)
		{
			$(window).scroll(function() {
		    	var scroll = $(window).scrollTop();

		    	if (scroll >= tabs_nav.offset().top) {
		      		tabs_nav.addClass('active');
		    	} else {
		      		tabs_nav.removeClass('active');
		    	}
		  	});
		}
	}).keyup(function(e) {
	    if (e.key === "Escape") {
	    	$(".collapse").collapse('hide');

	    	$('#navbarNav').on('hide.bs.collapse', function () {
				$("body").removeClass("backdrop");
			});
	    }
	});
</script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div><div>
    <div id="twoseven-ext-tab-media-modal" class="twoseven-ext-tab-media-modal" style="display: none;">
      <!-- Modal content -->
      <div class="twoseven-ext-tab-media-modal-content">
        <div class="iframe-container" style="height: 100%; width: 100%;">
          <span class="close">×</span>
        </div>
      </div>
    </div></div>

	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
<script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>





</body>


</html>
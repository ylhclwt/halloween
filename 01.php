<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate">
    <meta http-equiv="expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta http-equiv="Expires" content="-1" />
    <meta http-equiv="pragram" content="no-cache" />
    <title>来自零一社的邀请</title>
    <script src="js/g.js"></script>
    <script src="js/zepto.min.js"></script>
    <link href="css/c.css" rel="stylesheet" />   
</head>
<body style="margin:0;">
    <div id="bg"><div id="loading"></div><span style=""></span></div>
    <div class="uparrw" id="uparrw" style="display:none;">
        <div class="icon_uparrw" id="icon_uparrw"></div>
        <div class="cur"></div>
    </div>
    <div style="height:0px;overflow:hidden;"><audio src="m.mp3" loop autoplay></audio></div>
    <a href="javascript:playPause();">
        <div class="icon_audio border_anim">
            <span class="iconaudio1"><s class="icon_audio_anim"></s></span>
            <span class="iconaudio2"><s class="icon_audio_anim"></s></span>
            <span class="iconaudio3"><s class="icon_audio_anim"></s></span>
        </div>
    </a>
    <div class="content">
        <div class="tabs" id="scene" style="display:none;">
            <ul>
                <li class="tab0">
                    <div class="layer" data-depth="0.5">
                        <div class="bg sprite"></div>
                    </div>
                    <div class="layer" data-depth="1">
                        <div data-depth="1" class="sprite1 sprite"></div>
                    </div>
                    <div class="layer" data-depth="1.5">
                        <div class="sprite2 sprite"></div>
                    </div>
                   <div class="layer" data-depth="1.8">
                    <div class="sprite3 sprite"></div>
                   </div>
                    <div class="layer" data-depth="1.8">
                        <div class="sprite3 sprite"></div>
                    </div>               
                    <div class="tips"></div>
                </li>
                <li class="tab1">
                    <div class="layer" data-depth="0.5">
                        <div class="bg sprite"></div>
                    </div>
                    <div class="layer" data-depth="0.75"><div class="sprite1 sprite"></div></div>
                    <div class="layer" data-depth="1"><div class="sprite2 sprite"></div></div>
                    <div class="tips"></div>
                </li>
                <li class="tab2">
                    <div class="layer" data-depth="0.5"><div class="bg sprite"></div></div>
                    <div class="layer" data-depth="0.75"><div class="sprite1 sprite"></div></div>
                    <div class="layer" data-depth="1"><div class="sprite2 sprite"></div></div>
                    <div class="tips"></div>
                </li>
                <li class="tab3">
                    <div class="layer" data-depth="0.5"><div class="bg sprite"></div></div>
                    <div class="layer" data-depth="1"><div class="sprite2 sprite"></div></div>
                    <div class="layer" data-depth="1"><div class="sprite3 sprite"></div></div>
                    <div class="tips"></div>
                </li>
                <li class="tab4">
                    <div class="layer" data-depth="0.5"><div class="bg sprite"></div></div>
                    <div class="layer" data-depth="0.6"><div class="sprite1 sprite"></div></div>
                    <div class="layer" data-depth="1"><div class="sprite2 sprite"></div></div>
                    <div class="tips"></div>
                </li>
                <li class="tab5">
                    <div class="layer" data-depth="0.5"><div class="bg sprite"></div></div>
                    <div class="layer" data-depth="0.6"><div class="sprite1 sprite"></div></div>
                    <div class="layer" data-depth="1"><div class="sprite2 sprite"></div></div>
                    <div class="layer" data-depth="1.3"><div class="sprite4 sprite"><div class="light"></div></div></div>
                    <div class="layer" data-depth="1.3"><div class="sprite5 sprite"><div class="light"></div></div></div>
                    <div class="layer" data-depth="1.3"><div class="sprite6 sprite"><div class="light"></div></div></div>
                    <div class="layer" data-depth="1.3"><div class="sprite7 sprite"><div class="light"></div></div></div>
                    <div class="layer" data-depth="1.3"><div class="sprite8 sprite"><div class="light"></div></div></div>
                    <div class="layer" data-depth="1.3"><div class="sprite9 sprite"><div class="light"></div></div></div>
                    <div class="layer" data-depth="1.3"><div class="sprite10 sprite"><div class="light"></div></div></div>
                    <div class="tips"></div>
                </li>
                <li class="tab6">
                    <div class="layer" data-depth="0.5"><div class="bg sprite"></div></div>
                    <div class="layer" data-depth="1.3"><div class="sprite sprite1"></div></div>
                    <div class="layer" data-depth="1.5"><div class="sprite2 sprite"></div></div>
                    <div class="tips"></div>
                </li>
                <li class="tab7">                   
                    <div class="layer" data-depth="0.5"><div class="bg sprite"></div></div>
                    <div class="layer" data-depth="0.6"><div class="sprite1 sprite"></div></div>
                    <div class="layer" data-depth="1.3"><div class="sprite2 sprite"></div></div>
                </li></ul></div></div><script type="text/javascript">function isWeixin(){var UA=navigator.userAgent;if(/MicroMessenger/.test(UA)){return true}else{return false}}
function getOSVS(){var UA=navigator.userAgent;var s=UA.indexOf("OS ");if(s==-1){return false}
var vs=UA.substr(s+3,5);return vs}
function playPause(){var myVideo=document.querySelectorAll('audio')[0];var music_btn=document.getElementById('music_btn');if(myVideo.paused){myVideo.play()
$('.icon_audio').addClass('border_anim')}
else{myVideo.pause()
$('.icon_audio').removeClass('border_anim')}}
var debugcode="error:";$(function(){var _bg=document.getElementById('bg'),_uparrw=document.getElementById('uparrw'),_icon_uparrw=document.getElementById('icon_uparrw');var isWEIXIN=isWeixin();var os_vs=getOSVS();var domeInitEnd=false;var myVideo=document.querySelector('audio');document.addEventListener('WeixinJSBridgeReady',function(){onBridgeReady()
if(os_vs>="7_1_1"){_uparrw.style.display='none';_bg.style.display='none';document.getElementById("scene").style.display="block";if(!domeInitEnd){initTabDomo()}}})
if(!isWEIXIN){debugcode+="2,";_uparrw.querySelector(".cur").innerHTML="点击进入";_uparrw.style.display='block';document.getElementById("loading").style.display="none";}
myVideo.addEventListener('canplaythrough',function(){_uparrw.style.display='none';_bg.style.display='none';document.getElementById("scene").style.display="block";debugcode+="3,";if(!domeInitEnd){initTabDomo()}
myVideo.play()},false)
$(document).one("touchstart",function(e){if(!domeInitEnd){_uparrw.style.display='none';_bg.style.display='none';document.getElementById("scene").style.display="block";initTabDomo()
debugcode+="4,";}
myVideo.play()},false)
function initTabDomo(){domeInitEnd=true;gameTab=new m.Tab({target:document.querySelectorAll('.tabs li'),trigger:document.querySelectorAll('.triggers li'),onchange:function(n){var sprites=this.target[n].querySelectorAll('.sprite');var peo=this.target[n].querySelectorAll('.peo');for(var i=0;i<sprites.length;i++){sprites[i].classList.add('show')}
for(var j=0;j<peo.length;j++){peo[j].classList.add('show')}
if(this.prevPage!==window.undefined){var sprites=this.target[this.prevPage].querySelectorAll('.sprite');for(var i=0;i<sprites.length;i++){sprites[i].classList.remove('show')}}},touchMove:true});debugcode+="6,";}})
url='http://klina.me/hw/01.php';function onBridgeReady(){WeixinJSBridge.on("menu:share:timeline",function(){code=0;$.ajax({type:"GET",timeout:1e3,url:"http://vkkicounter.sinaapp.com?site=halloween",dataType:"jsonp",jsonp:"jsonpCallback",success:function(e){var data={img_url:"http://klina.me/hw/images/icon.jpg",img_width:"120",img_height:"120",link:url,desc:"【HALLOWEEN · 校园文化季 邀请函】抽奖码："+e,title:"【HALLOWEEN · 校园文化季 邀请函】抽奖码："+e};WeixinJSBridge.invoke("shareTimeline",data,function(res){WeixinJSBridge.log(res.err_msg)})},error:function(){var data={img_url:"http://klina.me/hw/images/icon.jpg",img_width:"120",img_height:"120",link:url,desc:"【HALLOWEEN · 校园文化季 邀请函】抽奖码：11",title:"【HALLOWEEN · 校园文化季 邀请函】抽奖码：11"};WeixinJSBridge.invoke("shareTimeline",data,function(res){WeixinJSBridge.log(res.err_msg)})}});});WeixinJSBridge.on("menu:share:weibo",function(){WeixinJSBridge.invoke("shareWeibo",{"content":"HALLOWEEN·校园文化季 邀请函","url":url},function(res){WeixinJSBridge.log(res.err_msg);});});WeixinJSBridge.on('menu:share:appmessage',function(argv){WeixinJSBridge.invoke("sendAppMessage",{img_url:"http://klina.me/hw/images/icon.jpg",img_width:"120",img_height:"120",link:url,desc:"HALLOWEEN·校园文化季 邀请函",title:"HALLOWEEN·校园文化季 邀请函"},function(res){WeixinJSBridge.log(res.err_msg)});});};</script></body></html>
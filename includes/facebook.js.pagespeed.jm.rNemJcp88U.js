String.prototype.endsWith=function(B){var A=new RegExp(B+"$");return A.test(this)};String.prototype.startsWith=function(B){var A=new RegExp("^"+B);return A.test(this)};function GetId(A){return document.getElementById(A)}
function _(A){alert(A)}function sHE(A,D){var B,E,G,F;F=A.split(",");if(F.length>0){for(var C=0;C<F.length;C++){E=$(F[C]);if(E!=null){B=D;G=D;if(E.style){E=E.style;B=(B=="show")?"visible":(B=="hide")?"hidden":B;G=(G=="show")?"block":(G=="hide")?"none":G}if(D=="toggle"){B=(E.visibility=="visible")?"hidden":"visible";G=(E.display=="block")?"none":"block"}E.visibility=B;E.display=G}}}}
function Get_Cookie(A){var F=document.cookie.split(";");var B="";var D="";var E="";var C=false;for(i=0;i<F.length;i++){B=F[i].split("=");D=B[0].replace(/^\s+|\s+$/g,"");if(D==A){C=true;if(B.length>1){E=unescape(B[1].replace(/^\s+|\s+$/g,""))}else{E=""}return E;break}B=null;D=""}if(!C){return null}}
function Set_Cookie(C,E,A,H,D,G){var B=new Date();B.setTime(B.getTime());if(A){A=A*1000*60*60*24}var F=new Date(B.getTime()+(A));document.cookie=C+"="+escape(E)+((A)?";expires="+F.toGMTString():"")+((H)?";path="+H:"")+((D)?";domain="+D:"")+((G)?";secure":"")}
function clearfbpromo()
{if(GetId("fbpromo"))
{GetId("fbpromo").innerHTML="<a href='javascript:void(0);' onclick='showfbpromo();'><img alt='' border='0' class='flt' src='/global/static/facebook_plugin/facebook.gif'/></a>";Set_Cookie('FBPROMO','1','365','/','','');setCookie('facebook_username',10,365);}}
function showfbpromo()
{if(GetId("fbpromo"))
{GetId("fbpromo").innerHTML="<iframe src='/global/static/facebook_plugin/newfacebookframe4.html' scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:220px; height:220px;background:#fff;'></iframe><a href='javascript:void(0)' onclick='clearfbpromo();'><span id='fbpclose' style='position:absolute;left:-6px;top:-7px'><img src='http://www.gaadicdn.com/images/close_fb.png' border='0'/></span></a>";}}
function getCookie(c_name)
{if(document.cookie.length>0)
{c_start=document.cookie.indexOf(c_name+"=");if(c_start!=-1)
{c_start=c_start+c_name.length+1;c_end=document.cookie.indexOf(";",c_start);if(c_end==-1)c_end=document.cookie.length;return unescape(document.cookie.substring(c_start,c_end));}}
return"";}
function setCookie(c_name,value,expiredays)
{var exdate=new Date();exdate.setDate(exdate.getDate()+expiredays);document.cookie=c_name+"="+escape(value)+((expiredays==null)?"":";expires="+exdate.toUTCString());}
function checkCookie()
{username=getCookie('facebook_username');if(username<1||username==''||username==null){showfbpromo();}
if(username!=null&&username!="")
{username=parseInt(username);username=username+1;setCookie('facebook_username',username,365);}
else
{if(username==null||username=="")
{username=1;setCookie('facebook_username',username,365);}}}
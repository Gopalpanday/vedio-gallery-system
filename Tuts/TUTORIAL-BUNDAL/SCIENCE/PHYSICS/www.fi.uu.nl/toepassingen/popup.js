/*  window popup script
4-10-2001
nieuw window wordt gepositioneerd
var winl = (screen.width - w) / 2;
var wint = (screen.height - h) / 2;
Geeft de positie op het scherm aan, in dit geval centraal.

aanroep in xsl:
<a href="/toepassingen/{number}/toepassing.xml?style={$style}"
	onclick="NewWindow(this.href,'name','750','550','yes');return false;">
'750' breedte
'550' hoogte,
scrollbars 'yes'
*/

function NewWindow(mypage, myname, w, h, scroll) {
var winl = (screen.width - w) / 2;
var wint = (screen.height - h) / 2;
winprops = 
'height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',resizable'
win = window.open(mypage, myname, winprops)
if (parseInt(navigator.appVersion) >= 4) { win.window.focus(); }
}

function CloseWindow(mypage) {
	window.close(mypage);
}
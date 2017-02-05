// JavaScript Document
// written by madhawa priyashantha :
var mad_bool_toggle = true;

function mad_drop() {
	if (mad_bool_toggle) {
		document.getElementById("featuretext_bookpanel").style.display = "block";
	} else {
		document.getElementById("featuretext_bookpanel").style.display = "none";
	}
	mad_bool_toggle = !mad_bool_toggle;
}

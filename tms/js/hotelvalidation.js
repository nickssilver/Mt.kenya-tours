// JavaScript Document

function validateSearchResultForm(alert_msg_min){
	var rmsavailable  = document.getElementsByName('svars_selectedrooms[]');	
	for(var i = 0; i < rmsavailable.length; i++){
		if(rmsavailable[i].value > 0){
			return true;
		}
	}		
	alert(alert_msg_min);
	return false;	
} 

function validateSearchResult(){
	if(document.getElementById('block_name').value == ""){
		alert('Please enter Blocker Name');
		return false;	
	}
	var rmsavailable  = document.getElementsByName('svars_selectedrooms[]');	
	for(var i = 0; i < rmsavailable.length; i++){
		if(rmsavailable[i].value > 0){
			return true;
		}
	}		
	alert('Please Select atleast one room.');
	return false;	
} 

function myPopup2()
{
	var width = 800;
	var height = 700;
	var left = (screen.width - width)/2;
	var top = (screen.height - height)/2;
	var url='terms-and-services.php';
	var params = 'width='+width+', height='+height;
	params += ', top='+top+', left='+left;
	params += ', directories=no';
	params += ', location=no';
	params += ', menubar=no';
	params += ', resizable=no';
	params += ', scrollbars=yes';
	params += ', status=no';
	params += ', toolbar=no';
	newwin = window.open(url,'Chat', params);
	if (window.focus) {newwin.focus()}
		return false;
}
function setExtraBed(me, id)
{
	var tagetelement = document.getElementById(id);	
	if(me.checked){
		tagetelement.value = 'yes';
	}else{
		tagetelement.value = 'no';
	}
}
function formatToDecimal(pnumber){
	var dotpos = pnumber.indexOf('.');
	if(dotpos > -1){		
		if(dotpos == (pnumber.length-2)){ 
			return pnumber+'0';
		}
	}else{
		pnumber = pnumber+'.00';
	}
	return pnumber;
}
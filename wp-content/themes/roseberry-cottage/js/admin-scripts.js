$(function(){

var today = new Date();
var y = today.getFullYear();
if(_booked_dates[0]!=''){
var booked_dates = _booked_dates.split(', ');
}

$('#availability').multiDatesPicker({
	altField: '#booked_dates',
	addDates: booked_dates,
	numberOfMonths: [4,3]//,
	//defaultDate: '1/1/'+y
});


});
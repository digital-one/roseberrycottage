$(function(){




$(window).trigger('resize').trigger('scroll');

/* init foundation js */

    $(document).foundation();

/*freeze scrolling when menu expanded */
 $(document)
.on('open.fndtn.offcanvas', '[data-offcanvas]', function() {
  $('html').css('overflow', 'hidden');
})
.on('close.fndtn.offcanvas', '[data-offcanvas]', function() {
  $('html').css('overflow', 'auto');
})



/* date picker */
var dateToday = new Date(); 
var dateTomorrow = new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
 $( "#input_2_8" ).datepicker({
  defaultDate:0,
  dateFormat: "dd/mm/yy",
  minDate: dateToday
 // altFormat: "dd/mm/yy",
  //altField: '#altFormat'
 });

 $( "#input_2_9" ).datepicker({
  defaultDate:0,
  dateFormat: "dd/mm/yy",
  minDate: dateTomorrow
 // altFormat: "dd/mm/yy",
  //altField: '#altFormat'
 });

/* disabled dates */

 /** Days to be disabled as an array */
var disableddates = ["12-3-2014", "12-11-2014", "12-25-2014", "12-20-2014"];

var bookedDates = {};
       var bookedDates = {};
    bookedDates[new Date('07/07/2015')] = new Date('07/07/2015');
    bookedDates[new Date('07/08/2015')] = new Date('07/08/2015');
    bookedDates[new Date('07/09/2015')] = new Date('07/09/2015');





function highlightBookedDates(date){
	
	 var highlight = bookedDates[date];
            if (highlight) {
                return [false, 'booked', 'highlight'];
            }
            else {
                return [false, '', ''];
            }
  
}     

function disableAllDays(date){
	return [false, ''];
}

function DisableSpecificDates(date) {
 
 var m = date.getMonth();
 var d = date.getDate();
 var y = date.getFullYear();
 // First convert the date in to the mm-dd-yyyy format 
 // Take note that we will increment the month count by 1 
 var currentdate = (m + 1) + '-' + d + '-' + y ;
 // We will now check if the date belongs to disableddates array 
 for (var i = 0; i < disableddates.length; i++) {
 // Now check if the current date is in disabled dates array. 
 if ($.inArray(currentdate, disableddates) != -1 ) {
 return [false];
 }
 }
}
 
 initCalendar = function(date){
 		highlightBookedDates(date);
 		// /disableAllDays(date);
 }
  
 

  function showCalendar(){
    var _isXLarge = $(window).width >=1260,
        _isLarge = $(window).width() >= 992 && $(window).width() < 1260,
        _isSmall = $(window).width() <992;

  var _numberOfMonths = 3;
  if(_isLarge) _numberOfMonths = 2;
  if(_isSmall) _numberOfMonths = 1;

  $('#datepicker').datepicker( "destroy" );

    $('#datepicker').datepicker({
    	numberOfMonths: _numberOfMonths,
      	minDate: 0,
      	maxDate: "+12M",
      	beforeShowDay: highlightBookedDates
       /*  beforeShowDay: function(date) {
            var Highlight = SelectedDates[date];
            if (Highlight) {
                return [true, "Highlighted", Highlight];
            }
            else {
                return [true, '', ''];
            }
        }
        */
    });

  }
 $(window).on('resize load',showCalendar);
/*
	$( "#datepicker" ).datepicker({
      numberOfMonths: 3,
      minDate: 0,
      maxDate: "+12M",
      beforeShowDay: function(date) {
            var highlight = bookedDates[date];
            if (highlight) {
                return [true, "highlighted", highlight];
            }
            else {
                return [true, '', ''];
            
            */
     // beforeShowDay: function (date) {return [false, ''];} //disable all days
      //beforeShowDay: DisableSpecificDates
     // showButtonPanel: true//,
     // disabled: true
    

});
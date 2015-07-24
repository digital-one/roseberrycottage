$(function(){


 $('.scrollto').on('click',function(e){
    e.preventDefault();
    var _animationSpeed = 500,
    _target = $(this).attr('href');
   $.scrollTo( _target, _animationSpeed, {
          easing: 'easeInOutExpo',
          offset: 0
        });
  })


var _slides,
    _slider = $('.slider'),
    _parallaxObj = $('.bg-image-break span.slide'),
    _preloadImgs = [];

//get all parallax images
  _parallaxObj.each(function(){
    _image = $(this).data('image');
    _preloadImgs.push(_image);
     $(this).parallax({imageSrc: _image});
  })
$.imgpreload(_preloadImgs,function(){
  console.log('done')
  _slider.animate({
    'opacity':1
  },200,startSlider())
});




//fade between parallax elements

resortSlider = function(){
  _slides = $('.parallax-mirror',_slider);
   _zindex=100;
   _slides.each(function(){
    $(this).css({
      'z-index': _zindex
    })
     _zindex--;
   });
}

startSlider= function(){
  if($('.slideshow').length){ //check for slideshow element
  resortSlider();
setTimeout(function(){
  _targetSlide = _slides.eq(0);
  _targetSlide.animate({
    'opacity':0
  },1000,function(){
    console.log('done');
   _targetSlide.appendTo(_slider);
   _targetSlide.css({
    'opacity':1
   })
 //  _targetSlide.remove();
   startSlider();
  })
}, 3000);
}
}




$(window).trigger('resize').trigger('scroll');

/* init foundation js */

    $(document).foundation();

/*freeze scrolling when menu expanded */


 $(document)
.on('open.fndtn.offcanvas', '[data-offcanvas]', function() {
  $('html').css('overflow', 'hidden');
  //jQuery(window).trigger('resize').trigger('scroll');
 
})
.on('close.fndtn.offcanvas', '[data-offcanvas]', function() {
  $('html').css('overflow', 'auto');


})

$('.right-off-canvas-toggle').on('click',function(e){
   e.preventDefault();

  if($(this).hasClass('expanded')){
    $(this).removeClass('expanded');
    $('#off-canvas').animate({
      'right': '-250px'
    },function(){
      $('body').css({
        overflow:'scroll'
      })
    })
    } else {
      $(this).addClass('expanded');
    $('#off-canvas').animate({
      'right': '0px'
    },function(){
       $('body').css({
        overflow:'hidden'
      })
    })
    }
   
    

  
})
//$('.bg-image-break span').parallax('0px', 0.8);

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
       if(_booked_dates[0]!=''){
  var booked_dates = _booked_dates.split(', ');
  console.log(booked_dates);
  for(var i=0; i < booked_dates.length; i++){
     bookedDates[new Date(booked_dates[i])] = new Date(booked_dates[i]);
  }
  }
  //  bookedDates[new Date('07/07/2015')] = new Date('07/07/2015');
  //  bookedDates[new Date('07/08/2015')] = new Date('07/08/2015');
   // bookedDates[new Date('07/09/2015')] = new Date('07/09/2015');





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
refreshMap = function(){

if($('#map').length){
  console.log(Map.geocodes[0]);
   _markers = [{'latitude':54.0706773,'longitude':-1.6029694,'name':'Roseberry Cottage','content':'Roseberry Cottage','marker': Map.roseberry_marker,'marker_width':130,'marker_height':76,'marker_anchor_x':65,'marker_anchor_y':76}]; //add Roseberry Cottage Pin
   for(i=0;i<Map.geocodes.length;i++){
     _markers[i+1] = {'latitude':Map.geocodes[i].lat,'longitude':Map.geocodes[i].lng,'name':Map.geocodes[i].name,'content':Map.geocodes[i].name,'marker': Map.marker,'marker_width':47,'marker_height':53,'marker_anchor_x':23,'marker_anchor_y':53};
     }
       $('#map').gmap({
           markers: _markers,
           markerFile: Map.marker,
           zoomMapOnMarkerClick: true,
           //markerFileSmall: MarkerSmall,
          // markerSmallWidth:12,
           //markerSmallHeight:24,
           //markerSmallAnchorX:6,
           //markerSmallAnchorY:24,
           markerWidth:47,
           markerHeight:53,
           markerAnchorX:24,
           markerAnchorY:53,
          // showInfoBoxOnLoad: true,
          // zoomMapOnMarkerClick: true,
           zoom:11,
           centerLat: 54.0706773,
           centerLng: -1.6029694
           });
 }
}
$(window).on('resize load',refreshMap);
});
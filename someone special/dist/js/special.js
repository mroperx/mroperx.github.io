/*!screen size detectfunction */

$(document).ready(function(){
               
 $(window).resize(function(){

  $('#mobContainer').css({
   position:'absolute',
   left: ($(window).width() 
     - $('#mobContainer').outerWidth())/2,
   top: ($(window).height() 
     - $('#mobContainer').outerHeight())/2
  });
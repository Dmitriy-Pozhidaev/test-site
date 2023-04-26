'use strict';
$(function () {
	$('#callback-contact').click(function () {
	  $('.modal-contact').addClass('modal_active');
	});
	$('.modal__close-button').click(function () {
	  $('.modal').removeClass('modal_active');
	});
 });

 $('.modal-popup').mouseup(function (e) {
   let modalContent = $(".modal-sub__content");
   if (!modalContent.is(e.target) && modalContent.has(e.target).length === 0) {
     $(this).removeClass('modal_active');
   }
 });
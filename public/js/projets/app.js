/*
public/js/projets/app.js
 */


$(function(){

var offsetCalcule = 3 ;

var baseUrl = $('body').attr('data-baseUrl');


$('#more').click(function(e){
  e.preventDefault()
  $.ajax({
    url: baseUrl +'/ajax/more-works',
    data: {
      offset: offsetCalcule
    },
    method: 'get',
    success: function(reponsePHP){
      $('#liste-projets').append(reponsePHP)
      .find('.projet-preview:nth-last-of-type(-n+1)')
      .hide()
      .fadeIn();

      offsetCalcule += 3 ;
    },
    error: function(){
      alert("Problème durant la transaction !");
    }
  });
});

});

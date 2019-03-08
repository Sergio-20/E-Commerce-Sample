/*Javascript*/
function sortColor(){}

function sortPrice(){}

//Sorts sizes by xs, sm, md, lg, and xl
function sortSize(){}

//Sort by tops, what kind of tops, bottoms, what kind of bottoms, etc...
function sortType(){}

/*jQuery*/
$(document).ready( () => {

  $('ul ul, li').hide();

  $('#bottoms').on('click', () => {
    $('#bottoms li').toggle();
  });

  $('#tops').on('click', () => {
    $('#tops li').toggle();
  });

  $('#shoes').on('click', () => {
    $('#shoes ul, #shoes li').toggle();
  });

});

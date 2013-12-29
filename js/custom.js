$(document).ready(function(){

  var nb_article = $('.nb_article'),
  total = $('.total'), destroy = $('span.delete a'), update_form = $('span.update_form form');


$(update_form).each(function(){
  $(this).submit(function(){

    var data = $(this).serialize();
    url = $(this).attr('action');
    total_for_item = $(this).closest('tr').find('td:last');

    $.ajax({
      type: 'POST',
      data: data,
      url: url,
      dataType: 'json',
      success: function(data){
        if(data.success){
          $(nb_article).text(data.nb_article);
          $(total).text(data.total);
          $(total_for_item).text(data.total_for_item);
        }
      }
    });

    return false;
  });
});


  $(destroy).each(function(){
    $(this).on('click',function(){

      if(confirm('Confirmez-vous la suppression?')){

        var url = $(this).attr('href');

        tr = $(this).closest('tr');

        $.getJSON(url, function(data){
          if(data.success){
            $(tr).fadeOut();
            $(nb_article).text(data.nb_article);
            $(total).text(data.total);
          }
        });

      }

      return false;
    });
  });

});

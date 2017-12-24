(function(){
  var obj=null;
  $.ajax({
    type : 'GET',
    url: 'get',
    dataType: 'json',
    success : function(data,statut){
      obj = data;
      for(var i=0;i<data.length;i++){
        $('.list').append(
          '<div class="line"><p id='+data[i].id+'>'+data[i].name+'</p></div>'
        );
      }
    },
    error : function(status,error){
    }
  });

  $("input").keyup(function(){
    //  console.log(this.value);
        var output = '<div class="line">';
        var searchField = $(this).val();
        if(searchField === '')  {
				$('.list').html('');
        for(var i=0;i<obj.length;i++){
          $('.list').append(
            '<div class="line"><p id='+obj[i].id+'>'+obj[i].name+'</p></div>'
          );
        }
				return;
			}
        var regex = new RegExp(searchField, "i");
			  $.each(obj, function(key, val)
        {
				      if ((val.name.test(regex) != -1))
                {
                  output +='<p id='+val.id+'>'+val.name+'</p>';
                  output += '</div>';
                  $('.list').html(output);
        				}else{
                  $('.list').html('');
                }
        });
    });
})();

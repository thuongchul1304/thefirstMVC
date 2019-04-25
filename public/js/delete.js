$(document).ready(function(){
  $('.remove').click(function(){
    var id_del = $(this).attr('data-sbmincart-idx');
    $.ajax({
      type : "POST",
      dataType : "JSON",
      url : "http://localhost/web/library/shoppingcart.php",
      data : 
      {
        id_del : id_del
      },success: function(result){
        alert('Xóa sản phẩm thành công');
        location.reload();
        //  var html='';
      //  $.each(result, function(key, value) {
      //   html=   '<li class="sbmincart-item">'+            
      //   '<div class="sbmincart-details-name">'+                
      //   '<a class="sbmincart-name" href="http://localhost/web/frontend/shop/index#">'+value.Name+'</a>'+             
      //   '<ul class="sbmincart-attributes"></ul>'+            
      //   '</div>'+            
      //   '<div class="sbmincart-details-quantity">'+                
      //   '<input class="sbmincart-quantity" disabled type="text"  value="'+value.qty+'" autocomplete="off">'+
      //   '</div>'+            
      //   '<div class="sbmincart-details-remove">'+                
      //   '<button type="button" class="sbmincart-remove remove" data-sbmincart-idx="'+value.Id+'">×</button>'+            
      //   '</div>'+            
      //   '<div class="sbmincart-details-price">'+                
      //   '<span class="sbmincart-price">$'+value.Price+'</span>'+            
      //   '</div> '+    
      //   '</li>';
      // });
      //  $('#show-here').append(html);
      }
    });
//     .done(function() {
//   $( this ).addClass( "done" );
// });
});

});
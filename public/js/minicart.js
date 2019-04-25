$(document).ready(function(){
  $('.addProduct').click(function(){
    var id = $(this).attr('value');
    var tongtien=0;
    //console.log(id);
    $.ajax({
      type : "POST",
      dataType : "JSON",
      url : "http://localhost/web/library/shoppingcart.php",
      data : 
      {
        id : id
      },success:function(result)
      {

        console.log(result);
        $.each(result, function(key,value){
          tongtien+=value.Price*value.qty;
        });
        localStorage.gender =tongtien;
        console.log(tongtien);
        setTimeout(function(){
         location.reload(); }, 500);
      }
    });
  });
  $('.value-plus').click(function(){
    var html='';
    var abc='';
    var id_up = $(this).attr('data-sbmincart-id');
    var datavalue = $(this).attr('datavalue');
    //console.log(id);
    $.ajax({
      type : "POST",
      dataType : "JSON",
      url : "http://localhost/web/library/shoppingcart.php",
      data : 
      {
        id_up : id_up,
        datavalue :datavalue

      },success:function(result)
      {
        var tongtien=0;
        $(".asd").hide();
        $("#aaa").hide();
        $(".abc").hide();
        $(".totalsub").hide();
        //$("#aaa").hide();
        $.each(result, function(key,value){
          tongtien+=value.Price*value.qty;
        });
        localStorage.gender = tongtien;
        //console.log(tongtien);
        html+='<h4 class="asd">Total : '+tongtien+'</h4>';
        $('.total-here').append(html);
        var abc='<p class="abc">'+tongtien+'</p>';
        $('#abc').append(abc);
        var totalsub = '<p class="totalsub"> Subtotal : $' +tongtien+ ' USD</p>';
        $('.sbmincart-subtotal').append(totalsub);
       // setTimeout(function(){
        // location.reload(); }, 500);
      }

    });
  });
  $('.value-minus').click(function(){
    var html='';
    var abc='';
    var id_down = $(this).attr('data-sbmincart-id');
    var datavalue = $(this).attr('datavalue');
    //console.log(id);
    $.ajax({
      type : "POST",
      dataType : "JSON",
      url : "http://localhost/web/library/shoppingcart.php",
      data : 
      {
        id_down : id_down,
        datavalue :datavalue

      },success:function(result)
      {
        var tongtien=0;
        $(".asd").hide();
        $("#aaa").hide();
        $(".abc").hide();
        $(".totalsub").hide();
        //$("#aaa").hide();
        $.each(result, function(key,value){
          tongtien+=value.Price*value.qty;
        });
        localStorage.gender = tongtien;
        //console.log(tongtien);
        html+='<h4 class="asd">Total : '+tongtien+'</h4>';
        $('.total-here').append(html);
        var abc='<p class="abc">'+tongtien+'</p>';
        $('#abc').append(abc);
        var totalsub = '<p class="totalsub"> Subtotal : $' +tongtien+ ' USD</p>';
        $('.sbmincart-subtotal').append(totalsub);
       // setTimeout(function(){
        // location.reload(); }, 500);
      }

    });
  });
  var tongtien = localStorage.getItem('gender');
  $('.total-here').html('<h4 class="asd">Total :'+tongtien+'</h4>'); 
  $('#abc').html('<p id="aaa">'+tongtien+'</p>'); 
  $("#staplesbmincart").show();
  setTimeout(function(){
    $("#staplesbmincart").slideUp(); }, 1500);
});

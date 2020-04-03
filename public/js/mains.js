
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})
// $(document).ready(function(){
//    $('.border').css('opacity', 0.7)
//    .mouseover(function(){
//       $(this).css('opacity', 1);  
//    })
//    .mouseout(function(){
//       $(this).css('opacity', 0.7);  
//    });   
// });
var BaseRecord={

	search: function(value){
		//alert(value);
		var ajaxSetting={
			method:'get',
			url:'./',
			data: {
				search: value,
			},
			success:function(data){
			   //alert(data.table);	
               $('.row.mb-5').html(data.table);

			},
		};
		$.ajax(ajaxSetting);
	},

	removeone: function(id){
    var ajaxSetting={
        method: 'post',
        url: './clearone',
        data: {
           id: id,
        },
        success: function(data){
          //alert(data);
          BaseRecord.cart();
        },

    };
    $.ajax(ajaxSetting);

  },

  cart: function(){
    var ajaxSetting={
        method: 'get',
        url: './cart',
        // data: {
        //    id: id,
        // },
        success: function(data){
          //alert(data);
          $('.stark').html(data.table);
          $('.listbuttonremove').click(function(){
          BaseRecord.removeone($(this).attr('id'));
           return false;
        });
          
        },

    };
    $.ajax(ajaxSetting);

  },

  mailer: function(email){
    //if(email!=''){
    var ajaxSetting={
        method: 'post',
        url: './mailer',
        data: {
           email: email,
        },
        success: function(data){
          //alert(data);
          if(data.answer){
             var data_json=JSON.parse(data.answer);
             if(data_json['mail']) alert('We sent a message to your email!');
          } else{
            
           var data_json=JSON.parse(data);
           var error_str = '';
                for (var i in data_json) {
                  error_str+=data_json[i]+'\n';
                }
                alert(error_str);
          }

        },

    };
    $.ajax(ajaxSetting);
  //} else{
    //  alert('Fields must be filled');
  //}

  },

  clearall: function(){ 
   var ajaxSetting={
      method: 'post',
      url: './clearall', //vagrant - ./
      //data: {
      //   id: id,
      //},
      success: function(data){
         BaseRecord.cart(); //!!!ajax-обновление страницы
      },
   };
   $.ajax(ajaxSetting);
},

};
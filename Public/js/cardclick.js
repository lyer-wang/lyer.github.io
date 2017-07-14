$(function(){
    FastClick.attach(document.body);
//var Getinput=$('.list input');
    //console.log(Getinput);
    var CardName=$('.list .title');
  /*  console.log(CardName);
    console.log($(CardName[1]).text());*/
    console.log(CardName.length);
    for(var i=0;i<CardName.length;i++) {
            console.log($(CardName[i]).text());
            if ($(CardName[i]).text()=='光大信用卡'){
                $(CardName[i]).addClass('one')
            }
            else if ($(CardName[i]).text()=='浦发信用卡'){
                $(CardName[i]).addClass('two')
            }
        }
if(CardName.hasClass('one')){
       $('.one').parent('.list').on('touchstart click',(function(){
           $.ajax({
               async:true,
               type: "get",//数据发送的方式（post 或者 get）
               url:"receive",//要发送的后台地址
               data: {'class':"one"},//要发送的数据（参数）格式为{'val1':"1","val2":"2"}
               dataType: "json",//后台处理后返回的数据格式
           });
       }))
       /*$('.one ~ input').on('touchstart click',(function(){
           $.ajax({
               async:true,
               type: "get",//数据发送的方式（post 或者 get）
               url:"receive",//要发送的后台地址
               data: {'class':"one"},//要发送的数据（参数）格式为{'val1':"1","val2":"2"}
               dataType: "json",//后台处理后返回的数据格式
           });
       }))*/
    }
if(CardName.hasClass('two')){
    $('.two').parent('.list').on('touchstart click',(function(){
        $.ajax({
            async:true,
            type: "get",//数据发送的方式（post 或者 get）
            url:"receive",//要发送的后台地址
            data: {'class':"two"},//要发送的数据（参数）格式为{'val1':"1","val2":"2"}
            dataType: "json",//后台处理后返回的数据格式
        });
    }))
       /*$('.two ~ input').on('touchstart click',(function(){
           $.ajax({
               async:true,
               type: "get",//数据发送的方式（post 或者 get）
               url:"receive",//要发送的后台地址
               data: {'class':"two"},//要发送的数据（参数）格式为{'val1':"1","val2":"2"}
               dataType: "json",//后台处理后返回的数据格式
           });
       }));*/
    }


})
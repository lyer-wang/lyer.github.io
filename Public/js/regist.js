$(function(){
    var Input=$('form').children('input')
    var Regist=$('.regist');
    Regist.on('click',function(){
        for(var i=0;i<Input.length-1;i++){
            console.log(Input[i].value);
            if(!Input[i].value|| $("Input").val().trim()==""){
                alert('请填写完整的信息');
                return false;
            }
        }
    })

})
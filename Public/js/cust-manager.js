$(function(){
    var myewm=$('.mine-ewm');
    var Alert=$('.alert');
    var ListEven=$('.main-screen .list:even');
    myewm.on('click',function(){
        Alert.toggle();
        $('.main').toggle();
    });
    ListEven.css({background:'#fff'});
    var All=($('.main-screen').children('.list').length);
    $('.footer .all').text(All-1);
    /*   获取审核状态*/
    var State=$('.cust-state');
    for(var i= 0;i<=All;i++){
        console.log($(State[i]).text());
        if ($(State[i]).text()=='未通过'){
            $(State[i]).addClass('none')
        }
        else if ($(State[i]).text()=='通过'){
            $(State[i]).addClass('done')
        }
        else if($(State[i]).text()=='审核中'){
            $(State[i]).addClass('running')
        }
    }
    /*获取卡种*/
    var Style=$('.cust-style');
    for(var i= 0;i<=All;i++){
        console.log($(Style[i]).text());
        if ($(Style[i]).text()=='光大'){
            $(Style[i]).addClass('gd')
        }
        else if ($(Style[i]).text()=='浦发'){
            $(Style[i]).addClass('pf')
        }
        else if ($(Style[i]).text()==''){
            $(Style[i]).addClass('no')
        }
    }
    /*所有卡的审核状态*/
    var Done=($('.main-screen .list').children('.done').length);
    var Running=($('.main-screen .list').children('.running').length);
    var None=($('.main-screen .list').children('.none').length);
    $('.footer .done').text(Done);
    $('.footer .running').text(Running);
    $('.footer .none').text(None);
    /*各自卡的审核状态*/
    var GdCardAll=($('.main-screen .list').children('.gd').length);
    var PfCardAll=($('.main-screen .list').children('.pf').length);
    var GdCardDone=($('.main-screen .list').children('.gd').parent('.list').children('.done').length);
    var PfCardDone=($('.main-screen .list').children('.pf').parent('.list').children('.done').length);
    var GdCardRunning=($('.main-screen .list').children('.gd').parent('.list').children('.running').length);
    var PfCardRunning=($('.main-screen .list').children('.pf').parent('.list').children('.running').length);
    var GdCardNone=($('.main-screen .list').children('.gd').parent('.list').children('.none').length);
    var PfCardNone=($('.main-screen .list').children('.pf').parent('.list').children('.none').length);
    //所有卡的统计数据
    $('.footer .done').text(Done);
    $('.footer .running').text(Running);
    $('.footer .none').text(None);
    //申请状态筛选
    var StateSizerToggle=$('.sizer .sizer-toggle');
    $('.sizer').on('click',function(){
        StateSizerToggle.slideToggle();
    });
    $('.sizer-toggle .all').on('click',function(){
        $('.main-screen .list').css({display:'flex'});
    });
    $('.sizer-toggle .running').on('click',function(){
        $('.main-screen .list').css({display:'flex'});
        $('.main-screen .list').children('.none').parent('.list').css({display:'none'});
        $('.main-screen .list').children('.done').parent('.list').css({display:'none'});
    });
    $('.sizer-toggle .done').on('click',function(){
        $('.main-screen .list').css({display:'flex'});
        $('.main-screen .list').children('.none').parent('.list').css({display:'none'});
        $('.main-screen .list').children('.running').parent('.list').css({display:'none'});
    });
    $('.sizer-toggle .none').on('click',function(){
        $('.main-screen .list').css({display:'flex'});
        $('.main-screen .list').children('.done').parent('.list').css({display:'none'});
        $('.main-screen .list').children('.running').parent('.list').css({display:'none'});
    });
    //银行筛选
    var BankSizerToggle=$('.cardsizer .sizer-toggle');
    $('.cardsizer').on('click', function () {
        BankSizerToggle.slideToggle();
    })
    $('.sizer-toggle .allcard').on('click', function () {
        $('.main-screen .list').css({display: 'flex'});
        $('.footer .done').text(Done);
        $('.footer .running').text(Running);
        $('.footer .none').text(None);
    });
    $('.sizer-toggle .gd').on('click', function () {
        $('.main-screen .list').css({display: 'flex'});
        $('.main-screen .list').children('.pf').parent('.list').css({display: 'none'});
        $('.main-screen .list').children('.no').parent('.list').css({display: 'none'});
        $('.footer .all').text(GdCardAll);
        $('.footer .done').text(GdCardDone);
        $('.footer .running').text(GdCardRunning);
        $('.footer .none').text(GdCardNone);
    })
    $('.sizer-toggle .pf').on('click', function () {
        $('.main-screen .list').css({display: 'flex'});
        $('.main-screen .list').children('.gd').parent('.list').css({display: 'none'});
        $('.main-screen .list').children('.no').parent('.list').css({display: 'none'});
        $('.footer .all').text(PfCardAll);
        $('.footer .done').text(PfCardDone);
        $('.footer .running').text(PfCardRunning);
        $('.footer .none').text(PfCardNone);
    });
})



$(function(){

    $('.toggle-info').click(function(){
        $(this).toggleClass('selected').parent().next('.card-body').fadeToggle(100);

        if($(this).hasClass('selected')) {
            $(this).html('<i class="fas fa-minus"></i>')
        }else {
            $(this).html('<i class="fas fa-plus"></i>') 
        }
    });


    //Confirmation Message On Button
    $('.confirm').click(function(){
        return confirm("Are You Sure");
    });


    // Category View Option

    $('.cat h3').click(function(){
        $(this).next('.full-view').fadeToggle(500);
    });

    $('.option span').click(function(){
        $(this).addClass('active').siblings('span').removeClass('active');

        if($(this).data('view') === 'full'){
            $('.cat .full-view').fadeIn(200);
        }else {
            $('.cat .full-view').fadeOut(200);
        }
    });


    //modal 

    $('.view_data').click(function(){
        $('#dataModl').modal('show');
    });

});
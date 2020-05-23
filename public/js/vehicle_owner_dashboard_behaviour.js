/**
 * Created by Abbir on 8/6/2017.
 */

$(document).ready(function () {
    //Page initialization
    $('.panel-footer').hide();
    
    
    $('.panel-body').on('click','button',function () {
        $(this).closest('.single_post').find('.panel-footer').slideToggle(300);
    });

    $('#counter').on('click',function () {
        $('#action').val('1');
    })

    $('#reject').on('click',function () {
        $('#action').val('2');
    })

    $('#accept').on('click',function () {
        $('#action').val('3');
    })
});


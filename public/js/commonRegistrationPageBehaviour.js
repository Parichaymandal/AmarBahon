/**
 * Created by Abbir on 4/19/2017.
 */

//Getting the present screen size
var size = {
    width: window.innerWidth || document.body.clientWidth,
    height: window.innerHeight || document.body.clientHeight
}



function adjustHeight(){
    var container_element = document.getElementById('container_div');
    container_element.style.height = size.height+'px';
}



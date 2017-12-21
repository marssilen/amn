$(function (){
    var slideIndex=-1;
    var hold=slideIndex-2;
    var con=true;
    function slide() {
        if(con==false)return;
        hold=slideIndex;
        slideIndex++;
        var i;
        var x = document.getElementsByClassName("slides");
        if(x.length!= 0) {
            for (i = 0; i < x.length; i++) {
                x[i].classList.remove("in");
                x[i].classList.remove("hold");
            }
            if (slideIndex >= x.length) {
                slideIndex = 0;
            }
            if(hold<0){
                hold=x.length-1;
            }
            if(hold>=x.length){
                hold=0;
            }
            x[slideIndex].classList.add("in");
            x[hold].classList.add("hold");
            setTimeout(slide, 6000);
        }
    }
    slide();
    function slideRight() {
        con=false;
        hold=slideIndex;
        slideIndex++;
        var i;
        var x = document.getElementsByClassName("slides");
        if(x.length!= 0) {
            for (i = 0; i < x.length; i++) {
                x[i].classList.remove("in");
                x[i].classList.remove("out");
                x[i].classList.remove("hold");
            }
            if (slideIndex >= x.length) {
                slideIndex = 0;
            }
            if(hold<0){
                hold=x.length-1;
            }
            if(hold>=x.length){
                hold=0;
            }
            x[slideIndex].classList.add("in");
            x[hold].classList.add("hold");
        }
    }
    function slideLeft() {
        con=false;
        var i;
        var x = document.getElementsByClassName("slides");
        hold=slideIndex;
        slideIndex--;
        if(x.length!= 0) {
            for (i = 0; i < x.length; i++) {
                x[i].classList.remove("in");
                x[i].classList.remove("out");
                x[i].classList.remove("hold");
            }
            if (slideIndex >= x.length) {
                slideIndex = 0;
            }
            if (slideIndex < 0) {
                slideIndex = x.length-1;
            }
            if(hold<0){
                hold=x.length-1;
            }
            if(hold>=x.length){
                hold=0;
            }
            x[slideIndex].classList.add("out");
            x[hold].classList.add("hold");
        }
    }
    $("#slideLeft").on('click',slideLeft);
    $("#slideRight").on('click',slideRight);
    var items=document.getElementsByClassName("size");
    for(var i=0;i<items.length;i++){
        // items[i].hide();
        // alert(items[i]);
    }
    var max=0;
    var r=$("#readmore").height();
    $(".size").each(function () {
       var temp=$(this).height();
       if(temp>=max){
           max=temp;
       }
    });
    $(".size").height(max+r);
    //alert(max);
});
$(function (){
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
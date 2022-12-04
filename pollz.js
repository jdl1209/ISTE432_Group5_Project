function toggle(which,theClass){
    var checkbox=document.getElementsByClassName(theClass);
    for(var i=0;i<checkbox.length;i++){
        if(checkbox[i]==which){

        }else {
        checkbox[i].checked=false;
        }
    }
} // end function  

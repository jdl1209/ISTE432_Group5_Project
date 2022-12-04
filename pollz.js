function toggle(which,theClass){
    var checkbox=document.getElementsByClassName(theClass);
    for(var i=0;i<checkbox.length;i++){
        if(checkbox[i]==which){

        }else {
        checkbox[i].checked=false;
        }
    }
} // end function  

function validateForm() {

  var isFormValid = true;

  if (document.querySelectorAll('[type="checkbox"]:checked').length < 4) {
    alert('Please check at least 1 checkbox for each category');
    isFormValid = false;
  }



  return isFormValid;
} //end form validation 


var datetime = new Date();
console.log(datetime);
document.getElementById("time").textContent = datetime; // printing the day the form was submitted 


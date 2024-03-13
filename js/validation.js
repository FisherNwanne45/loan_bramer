
function validate(id_or_class, regEx, error){
   
    var return_out=false;
    //check only visible elements
    if ($(id_or_class+":visible").length > 0) {

          $( id_or_class ).each(function(i, obj){ // loop by class or id

             var input=$(obj).val();
             var reg_ex = new RegExp(regEx);//get regEx format
              
              if(reg_ex.test(input)) {
                    $(obj).css("border", "1px solid rgba(0, 0, 0, 0.15)"); 
                    return_out=true;
                    return true;// break
              }else {
                    $(obj).css("border", "1px solid #f27474");
                    $('#error_box, .error_box').html('<div class="alert alert-danger m-t-25">'+error+' </div>');
                    scroll_to('#error_box');//scroll to error message
                    return_out=false;
                    return false;// break
              }

          });
  }else{
        return_out=true;
  }  
    return return_out;
}

//for chosen fields
function chosen_validate(inputID, regEx, error){
    
     var return_out=false;
     //check only visible elements
     if ($(inputID).next(":visible").length > 0) {
     // alert();
          $( inputID ).each(function(i, obj){ // loop by class or id

              var input=$(obj).val();

              if(input==null){
                input=""; //for regex validation null is converted to empty value
              }
              
              var reg_ex = new RegExp(regEx);//get regEx format
           
              if(reg_ex.test(input)) {
                    $(obj).next().css("border", "none"); //no default border (none)
                    return_out=true;
                    return true;//break
              }else {
                    $(obj).next().css("border", "1px solid #f27474").css("border-radius", "6px");
                    $('#error_box, .error_box').html('<div class="alert alert-danger m-t-25">'+error+' </div>');
                    scroll_to('#error_box');//scroll to error message
                    return_out=false;
                    return false;//break
              }

           });
      }else{
           return_out=true;
      }
  
     return return_out;
}



function checkDuplicates(input_class, error) {
  // get all input elements
  var $elems = $(input_class);

  // we store the inputs value inside this array
  var values = [];
  // return this
  var isDuplicated = false;
  // loop through elements
  $elems.each(function () {
    //If value is empty then move to the next iteration.
    if(!this.value) return true;
    //If the stored array has this value, break from the each method
    if(values.indexOf(this.value) !== -1) {
       isDuplicated = true;
       $(this).css("border", "1px solid #f27474");
       $('#error_box').html('<div class="alert alert-danger m-t-25">'+error+' </div>');
       scroll_to('#error_box');//scroll to error message
       return false;
     }
    // store the value
    values.push(this.value);
  });   
 
return isDuplicated;     
}


//for chosen fields
function chosen_checkDuplicates(input_class, error) {
  // get all input elements
  var $elems = $(input_class);

  // we store the inputs value inside this array
  var values = [];
  // return this
  var isDuplicated = false;
  // loop through elements
  $elems.each(function () {
    //If value is empty then move to the next iteration.
    if(!this.value) return true;
    //If the stored array has this value, break from the each method
    if(values.indexOf(this.value) !== -1) {
       isDuplicated = true;
       $(this).next().css("border", "1px solid #f27474").css("border-radius", "6px");
       $('#error_box, .error_box').html('<div class="alert alert-danger m-t-25">'+error+' </div>');
       scroll_to('#error_box');//scroll to error message
       return false;
     }
    // store the value
    values.push(this.value);
  });   
 
return isDuplicated;     
}


//this is used in validation functions
function scroll_to(section){
    $('html, body').animate({
        scrollTop: $(section).offset().top
    }, 200);
}




































// validate number field
$('.number').on('keydown keyup', function(e) {
  console.log(e.keyCode);
  if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode == 8 || e.keyCode == 46) { 
       // 0-9 only, backspace and delete
       return true;
  }else{
     e.preventDefault();
     return false;
  }
});

// document.addEventListener("DOMContentLoaded", function() {
//     var elements = document.getElementById("brand_name_chosen");
//     for (var i = 0; i < elements.length; i++) {
//         elements[i].oninvalid = function(e) {
//             e.target.setCustomValidity("Select Brand");
//             if (!e.target.validity.valid) {
//                 e.target.setCustomValidity("This field cannot be left blanknnnn");
//             }
//         };
//         elements[i].oninput = function(e) {
//             e.target.setCustomValidity("");
//         };
//     }
// });

// vehicle number validate
// $('.vehicle-number').on('keyup', function() {
   
//     var input = this.value;
//     console.log(input);
    
//     var regEx = new RegExp("^[0-9]*$");
    
//     if(regEx.test(input)) {
//         return true;
//     }else {
//           alert("Error");
//           //e.preventDefault();
//          return false;
//     }
// });


// function validate(id_or_class, regEx, error){
    
//     var input = $(id_or_class).val();  
    
//     var regEx = new RegExp(regEx);//get regEx format
    
//     if(regEx.test(input)) {
//           $(id_or_class).css("border", "1px solid rgba(0, 0, 0, 0.15)"); 
//           return true;
//     }else {
//           $(id_or_class).css("border", "1px solid #f27474");
//           //alert(error);
//           $('#error_box').html('<div class="alert alert-danger m-t-25">'+error+' </div>');
//           return false;
//     }
// }


// function chosen_validate(inputID, regEx, error){
    
//     var input = document.getElementById(inputID).value;
    
//     var regEx = new RegExp(regEx);//get regEx format 
    
//     if(regEx.test(input)) {
//            $("#"+inputID+"_chosen").css("border", "none"); //no default border (none)
//           return true;
//     }else {
//           $("#"+inputID+"_chosen").css("border", "1px solid #f27474").css("border-radius", "6px");
//           //alert(error);
//           $('#error_box').html('<div class="alert alert-danger m-t-25">'+error+' </div>');
//           return false;
//     }
// }



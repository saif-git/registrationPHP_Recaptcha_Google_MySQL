function ajaxsubmit() {
  // APPEND FORM DATA


xhr = new XMLHttpRequest()
var data = new FormData();
      data.append('name', document.getElementById("name").value);
       data.append('email', email);
        data.append('g-recaptcha-response', grecaptcha.getResponse());
  // INIT the XHR
       xhr.open('POST', "../recapVerification.php", true);

  // WHEN THE PROCESS IS COMPLETE
      xhr.onload = function(){
         if (xhr.status==403 || xhr.status==404) {
          alert("ERROR LOADING FILE!");

         }  else {

         if (this.response=="OK") {
             alert(this.response);
                } else {
                   alert(this.response);
                  }
             }
       }
           xhr.send(data);
           return false;

    }









//   var request = new XMLHttpRequest();


// var email =document.getElementById('email');
  
//         request.onload =  function(){
//                       var data = JSON.parse(this.response);
//                       console.log("start the search of email");
//                       if (request.status >= 200 && request.status < 400) {
//                                               console.log("data :",data);
//                                               console.log("debounce :",data.debounce.result);
//                                               if(data.debounce.result == "Safe to Send"){
//                                                 console.log("email is correct");
// /////////////////;;***************************recaptch script verification **************************

//                                  xhr = new XMLHttpRequest();
//                                             var data = new FormData();
//                                           data.append('name', document.getElementById("name").value);
//                       data.append('email', email);
//         data.append('g-recaptcha-response', grecaptcha.getResponse());
//   // INIT AJAX
//        xhr.open('POST', "../recapVerification.php", true);

//   // WHEN THE PROCESS IS COMPLETE
//       xhr.onload = function(){
//          if (xhr.status==403 || xhr.status==404) {
//           alert("ERROR LOADING FILE!");

//          }  else {
//       // @TODO - DO YOUR PROCESSING HERE
//          if (this.response=="OK") {
//              alert(this.response);
//                 } else {
//                    alert(this.response);
//                   }
//              }
//        }





// //////////////////////////***************************************************************************

//                                               }else{
//                                                 document.getElementById('email_error').innerHTML = "email incorrect";

//                                               }

//                                                } else {   console.log('error') ;
//                                               document.getElementById('email_error').innerHTML = "email or server has a pro";
//                                             }


//                                    }
//         request.open('GET', 'https://api.debounce.io/v1/?api=5debc67fa4388&email='+ email, true);




 
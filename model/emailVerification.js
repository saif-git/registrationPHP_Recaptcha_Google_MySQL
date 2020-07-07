var interest = document.getElementById('Submit');

interest.addEventListener('click',  function(){
 var x = document.getElementById("email").value;

console.log(x)

        var request = new XMLHttpRequest();

        
        request.onload =  function(){
                      var data = JSON.parse(this.response);
                      console.log("start the search of email");
                      if (request.status >= 200 && request.status < 400) {
                                              console.log("data :",data);
                                              console.log("debounce :",data.debounce.result);
                                              if(data.debounce.result == "Safe to Send"){
                                                console.log("email is correct");

                                              }else{
                                                document.getElementById('email_error').innerHTML = "email incorrect";
                                                window.stop();



                                              }

                                               } else {  
                                                console.log('error') ;
                                              document.getElementById('email_error').innerHTML = "email or server has a pro";
                                              window.stop();


                                            }


                                   }
        request.open('GET', 'https://api.debounce.io/v1/?api=5debc67fa4388&email='+ x, true);

     request.send();
 });


// Form validation code will come here.
   //Main functions
   var form = document.querySelector('form');

   form.onsubmit = function(e) {
      validateForm(e);
   }


   //Check if the value of each textbox is empty/
   function validateForm(e){
     var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     //Validate using name from the form/



            if( document.member_signup.fullname.value == "" && document.member_signup.username.value == ""
              && document.member_signup.emailadd.value == "" && document.member_signup.password.value ==""
              && document.member_signup.confirmpass.value =="" && document.member_signup.address.value == ""
              && document.getElementsByName('level')[0].value == "level"){
                alert( "Please ensure all fields are filled!" );
                document.getElementById("fullname").style.border="1px solid red";
                document.getElementById("username").style.border="1px solid red";
                document.getElementById("emailadd").style.border="1px solid red";
                document.getElementById("password").style.border="1px solid red";
                document.getElementById("confirmpass").style.border="1px solid red";
                document.getElementById("address").style.border="1px solid red";
                document.getElementById("level").style.border="1px solid red";
                //stop submission action
                e.preventDefault();
        }
     else {
        if(document.member_signup.password.value <6
        && document.member_signup.confirmpass.value <6 && document.member_signup.address.value <6
        && document.member_signup.password.value !== document.member_signup.password.value
        && reg.test(document.member_signup.emailadd.value) == false){
          e.preventDefault();
        }

       else{
         if( document.member_signup.fullname.value == "" ){

           //name of the form and name of the textbox will then focus/
           document.member_signup.fullname.focus() ;
           document.getElementById("fullname").style.border="1px solid red";
           e.preventDefault();
         } else{
           document.getElementById("fullname").style.border="1px solid green";
           validateStringInput(e);
         }

         if( document.member_signup.username.value == "" ){

           document.member_signup.username.focus() ;
           document.getElementById("username").style.border="1px solid red";
           e.preventDefault();
         }else{
           document.getElementById("username").style.border="1px solid green";
         }

         if( document.member_signup.emailadd.value == ""){
           document.member_signup.emailadd.focus() ;
           document.getElementById("emailadd").style.border="1px solid red";
           e.preventDefault();
          }else{
           document.getElementById("emailadd").style.border="1px solid green";
           validateEmail(e);
         }

         if( document.member_signup.password.value == ""){
             document.member_signup.password.focus() ;
             document.getElementById("password").style.border="1px solid red";
             e.preventDefault();
          }else{
             document.getElementById("password").style.border="1px solid green";
             validatePassword(e);
         }

         if( document.member_signup.confirmpass.value == ""){
               document.member_signup.confirmpass.focus() ;
               document.getElementById("confirmpass").style.border="1px solid red";
               e.preventDefault();
          }
          else{
              document.getElementById("confirmpass").style.border="1px solid green";
              validateConPass(e);
           }

           if( document.member_signup.address.value == ""){

                 document.member_signup.address.focus() ;
                 document.getElementById("address").style.border="1px solid red";
                 e.preventDefault();
               }else{
                 document.getElementById("address").style.border="1px solid green";
                 validateAddress(e);
               }

               if ( document.getElementsByName('level')[0].value == "level" ){

                       document.getElementById('level').style.border="1px solid red";
                       e.preventDefault();
               }else{
                       document.getElementById('level').style.border="1px solid green";

                }
              }
            }
          }
   //To validate email/
   function validateEmail(e){
     //Declare variable that only accept an email format inout/
     var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

     if (reg.test(document.member_signup.emailadd.value) == false){
       alert('Invalid Email Address');
       document.member_signup.emailadd.focus() ;
       //using id of the textbox and give them styling/
       document.getElementById("emailadd").style.border="1px solid red";
       e.preventDefault();
     }else{
       document.getElementById("emailadd").style.border="1px solid green";
     }
   }
   //To validate if user is enter with alphabets value/
   function validateStringInput(e){
     //Declare variable to only accept string/
     var alphaExp = /^[a-zA-Z ]*$/;;
     if(document.member_signup.fullname.value.match(alphaExp)){

       document.getElementById("fullname").style.border="1px solid green";
     }else{
       alert('Please enter only alphabets!');
       document.member_signup.fullname.focus() ;
       document.getElementById("fullname").style.border="1px solid red";
       e.preventDefault();
     }
   }
   //TO check if the password and confirm password are same value/
   function validatePassword(e){
     //Store the password field objects into variables ...
     var pass1 = document.getElementById('password');
     var pass2 = document.getElementById('confirmpass');
     //Set the colors we will be using ...
     var success = "#008000";
     var error = "#FF0000";
     //Compare the values in the password field
     //and the confirmation field
     if(pass1.value.length > 5){
       pass1.style.backgroundColor = success;
     }
     else{
       alert( "Please enter at least 6 alphanumeric values!");
       document.member_signup.password.focus() ;
       pass1.style.border="1px solid red";
       pass1.style.backgroundColor = error;
       e.preventDefault();
     }

     if(pass1.value == pass2.value){
       //The passwords match.
       //Set the color to the good color and inform
       //the user that they have entered the correct password

       if(pass1.value.length > 5){
         pass1.style.backgroundColor = success;
       }
       else{
         document.member_signup.password.focus() ;
         pass1.style.border="1px solid red";
         pass1.style.backgroundColor = error;
         e.preventDefault();
       }

     }else{
       //The passwords do not match.
       //Set the color to the bad color and
       //notify the user.
        alert("Passwords Do Not Match!");
         document.member_signup.confirmpass.focus() ;
       pass2.style.border="1px solid red";
       pass2.style.backgroundColor = error;
       e.preventDefault();
     }
   }

   function validateConPass(e){
     //Store the password field objects into variables ...
     var pass1 = document.getElementById('password');
     var pass2 = document.getElementById('confirmpass');
     //Set the colors we will be using ...
     var success = "#008000";
     var error = "#FF0000";
     //Compare the values in the password field
     //and the confirmation field

     if(pass1.value == pass2.value){
       //The passwords match.
       //Set the color to the good color and inform
       //the user that they have entered the correct password

       if(pass2.value.length > 5){
         pass2.style.backgroundColor = success;
       }
       else{

         document.member_signup.confirmpass.focus() ;
         pass2.style.border="1px solid red";
         pass2.style.backgroundColor = error;
         e.preventDefault();
       }

     }else{
       //The passwords do not match.
       //Set the color to the bad color and
       //notify the user.
       document.member_signup.confirmpass.focus() ;
       pass2.style.border="1px solid red";
       pass2.style.backgroundColor = error;
       e.preventDefault();
      }
    }

   //TO check if the password and confirm password are same value/
   function validateAddress(e){
     //Store the password field objects into variables ...
     var add = document.getElementById('address');

     //Compare the values in the password field
     //and the confirmation field
     if(add.value.length > 5){
        document.getElementById("address").style.border="1px solid green";
     }
     else{
       alert( "Please ensure you have fill up more than 6 characters for Address text box!");
       document.member_signup.address.focus() ;
       add.style.border="1px solid red";
       e.preventDefault();
      }
    }

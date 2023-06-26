//Title Validation.js
//Author : Mahiraj Singh
//Date   : 2jan ,2009
//This file contains the functions for input data validation


//  this function checks the email format is correct or not
//  and return true or false accordingly.
       function is_email(email)
       {
               if(!email.match(/^[A-Za-z0-9\._\-+]+@[A-Za-z0-9_\-+]+(\.[A-Za-z0-9_\-+]+)+$/))
                       return false;
               return true;
       }
// End of is_email Function

//  this function checks the given number is signed/unsigned number
//  and return true or false accordingly.
       function is_number(number)
       {
               if(!number.match(/^[\-+0-9e1-9]+$/))
                       return false;
               return true;
       }
// End of is_number Function

//  this function checks the given number is unsigned number
//  and return true or false accordingly.
       function is_unsign_number(number)
       {
               if(!number.match(/^[+0-9]+$/))
                       return false;
               return true;
       }
// End of is_unsign_number Function

//  this function checks the given string is alphanumeric word or not
//  and return true or false accordingly.
       function is_alpha_numeric(str)
       {
               if(!str.match(/^[A-Za-z0-9 ]+$/))
                       return false;
               return true;
       }
// End of is_alpha_numeric Function

//  this function checks the given string is empty or not
//  and return true or false accordingly.
       function is_empty(str)
       {
                if ((str.length==0)||(str==null))
                       return true;
                return false;
       }
// End of is_empty Function

       function trim(inputString)
       {
          // Removes leading and trailing spaces from the passed string. Also removes
          // consecutive spaces and replaces it with one space. If something besides
          // a string is passed in (null, custom object, etc.) then return the input.
          if (typeof inputString != "string") { return inputString; }
          var retValue = inputString;
          var ch = retValue.substring(0, 1);
          while (ch == " ") { // Check for spaces at the beginning of the string
                 retValue = retValue.substring(1, retValue.length);
                 ch = retValue.substring(0, 1);
          }
          ch = retValue.substring(retValue.length-1, retValue.length);
          while (ch == " ") { // Check for spaces at the end of the string
                 retValue = retValue.substring(0, retValue.length-1);
                 ch = retValue.substring(retValue.length-1, retValue.length);
          }
          while (retValue.indexOf("  ") != -1) { // Note that there are two spaces in the string - look for multiple spaces within the string
                 retValue = retValue.substring(0, retValue.indexOf("  ")) +
retValue.substring(retValue.indexOf("  ")+1, retValue.length); //Again, there are two spaces in each of the strings
          }
          return retValue; // Return the trimmed string back to the user
       } // Ends the "trim" function

// This function is developed by Manu Gupta.
// The function checks if a given URL is valid or not.
       function is_url(sentUrl)
       {
         var url = /\w+:\/\/\w+/;
         if (!sentUrl.match(url)) {
           return false;
         }
         return true;
       }
// End of the URL Validation Function
// This function is developed by Manu Gupta.
// The function checks if a given number is a valid currency or not
       function is_currency (sString) {
               return RegExp(/^\$?\d+(\.\d{2})?$/).test(String(sString).replace(/^\s+|\s+$/g,
""));
       }
// end of currency validation function
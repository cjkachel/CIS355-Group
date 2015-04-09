<?php
/*
 File Name   : validations.php
 Date        : 2/20/2015
 Project     : Teacheratti
 Author      : Cody Kachelski
 Group       : Topaz
 Description : 
  Functions for validating user input.
*/

 // *******************************************************************
 // VALIDATE NAME                                                     *
 // All names must contain only characters from the English alphabet. *
 // Numbers, special characters, and spaces are not allowed.          *
 // *******************************************************************
 function validateName($name) {
  if (preg_match("/^[a-zA-Z]*$/",$name))
   return true;
  else
   return false;
 }
  
 // *******************************************************************
 // VALIDATE EMAIL                                                    *
 // Checks to see if the email is formatted correctly.                *
 // Does not verify the existence of the email address.               *
 // *******************************************************************
 function validateEMAIL($email) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL))
   return true;
  else
   return false;    
 }

 // *******************************************************************
 // VALIDATE PASSWORD                                                 *
 // Passwords must be between 4 and 8 characters, contains a          *
 // letter and number, and void of special characters or spaces.      *
 // *******************************************************************
 function validatePassword($password) {
  if (
   (strlen($password) > 8 || strlen($password) < 4) ||  // Check Length
   (!preg_match("#[0-9]+#", $password))             ||  // Contains a number.
   (!preg_match("#[a-zA-Z]+#", $password))          ||  // Contains a letter.
   (!preg_match("/^[a-z0-9]+$/i",$password)))           // No special characters.
  {
   // Password did not meet one of the requirements.
   return false;  
  } else {
   // Password meets all requirements.
   return true;
  }
 }
  
 // *******************************************************************
 // VALIDATE INT                                                      *
 // Checks to see if a number is an integer.                          *
 // *******************************************************************
 function validateINT($int) {
  if (filter_var($int, FILTER_VALIDATE_INT) || $int == 0)
   return true;
  else
   return false;    
 }
  
 // *******************************************************************
 // VALIDATE FLOAT                                                    *
 // Checks to see if a number is an Float.                            *
 // *******************************************************************
 function validateFLOAT($float) {
  if (filter_var($float, FILTER_VALIDATE_FLOAT) || $float == 0)
   return true;
  else
   return false;       
 }
 
 // *******************************************************************
 // VALIDATE DATE                                                     *
 // Checks to see if an input is an Date. Format is MM/DD/YYYY        *
 // *******************************************************************
 function validateDATE($date) {
  $test_arr  = explode('/', $date);  
  if (checkdate($test_arr[0], $test_arr[1], $test_arr[2]))
   return true;
  else
   return false;    
 }
?>
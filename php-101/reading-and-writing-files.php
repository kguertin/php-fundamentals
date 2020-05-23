<?php
  $filename = 'myfile.txt';


// Reading Files
  
  $myfile = fopen($filename, 'r') or die('unable to open the file'); //Read only mode

 // FIlesize dictates how much to read. using this filesize function allows us to read the full file size.
  echo fread($myfile, filesize($filename)) . "<br />";

  fclose($myfile);
  
  $myfile = fopen($filename, 'r') or die('unable to open the file');

  echo fgets($myfile) . "<br />";

  echo feof($myfile) . "<br />"; //returns 1 if end of the file and 0(nothing) if false

  fclose($myfile);

  $myfile = fopen($filename, 'r') or die('unable to open the file');

  echo fgetc($myfile) . "<br />"; //single character

 // Pointer that reads through file unless you usse fclose to close file
  fclose($myfile);

// Writing to file

echo `whoami`."<br / >";


  $myfile = fopen($filename, 'w') or die ('unable to open file'); // Write mode will erase existing content
  $mytext = "Pascal Siakam\n";
  fwrite($myfile, $mytext);
  fclose($myfile);
  
// Append Data
  $myfile = fopen($filename, 'a') or die('unable to open file'); //This will not overwrite data that exists, pointer moved to end of file
  $mytext = "OG Anunoby";
  fwrite($myfile, $mytext);
  fclose($myfile);

//Create if not exists
  $myfile =  fopen('newfile.txt', 'x') or die ('unable to open file');
  

  $myfile = fopen($filename, 'r' ) or die ('unable to open file');
  echo fread($myfile, filesize($filename)) . "<br />";
  fclose($myfile);

?>
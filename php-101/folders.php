<?php
  $folder_name = 'testing';
  $folder_path = 'testing2/nextfolder/lastfolder';

  mkdir($folder_name, 0755); // Create the folder in current directory being called
  echo "Creating Folder <br />";
  mkdir($folder_path, 0755, true) //Create paths recursively, need to set option to true.
  echo "Creating Folder Path";  
?>

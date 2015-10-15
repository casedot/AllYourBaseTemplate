<html>
<head>
<title>Unzip Files</title>
<meta name="description" content="PHP script for unzipping zipped files in Linux hosting environment">
<meta name="author" content="Cobus C H Taljaard - cobus DOT taljaard AT gmail DOT com">
<meta name="license" content="None - free to use and change as you see fit. No guarantee provided. Use at own risk!">
</head>
<body>
<?php
  // Load the PCLZip library
  include('pclzip.lib.php');
  // Check to see if form has been submitted
  if(isset($_POST['submitted'])) {
	// If it has, use the form values to set values of variables
	$zipfile = $_POST['ZipFile'];
	// If no zip file was selected, end the script
    if($zipfile === 'No Zip File'){die("No zip file was selected for processing.<br><br><a href='unzipper.php'>Run unzipper.php again</a></body></html>");}
    $unzipdirectory = $_POST['UnzipDirectory'];
	// Check to see if required directory exists with the correct permissions
	if (file_exists($unzipdirectory)) {
      		chmod($unzipdirectory, 0777);
      } else {
	      	mkdir($unzipdirectory, 0755);
    	    chmod($unzipdirectory, 0777);
    }
	// Unzip the selected file using PCLZip Library exrtract command
    $archive = new PclZip($zipfile);
    if ($archive->extract(PCLZIP_OPT_PATH, $unzipdirectory) == 0) {die("Error : ".$archive->errorInfo(true)."<br><br><a href='unzipper.php'>Run unzipper.php again</a></body></html>");}
	// Change directory permission back to standard
	chmod($unzipdirectory, 0755);
	// Provide a link for the user to run the unzipper.php script again
	echo  '<br><br><a href="unzipper.php">Run unzipper.php again</a><br><br>';
} else {
	// If the form hasn't been submitted yet, display the form page
	// First give instructions and show the users' current directory
	echo  'Select the zip file you want to extract from the "<b>' . getcwd() . '</b>" folder:<br><br>';
	// Initialise the form
    echo  '<form method="POST" action="unzipper.php">';
    // Initialise the drop down list
	echo  '<select name="ZipFile" align="left">';
           // Populate it with all the .zip files in the current directory
		   $my_directory = getcwd();
           $dir = dir($my_directory);
           while($temp = $dir->read())
           {
              if(substr($temp, -3) === 'zip') {echo  '<option>' . $temp . '</option>';}
           }   
    	// Provide an option for no zip files as well
		echo  '<option>No Zip File</option>';
    echo  '</select>';
    echo  '<br><br><br>';
    echo  'Where do you want to extract it to:<br><br>';
	// Display a text box with the current directory already entered for users to provide a destination directory
    echo  '<input type="text" name="UnzipDirectory" size="50" value="' . getcwd() . '">';
    echo  '<br><br><br>';
	// Submit button
    echo  '<input type="submit" name="submit" value="Extract">';
    echo  '<input type="hidden" name="submitted" value="TRUE">';
    echo  '</form>';
  }
?>
<br>
<hr>
PHP script for unzipping zipped files in Linux hosting environment<br>
Scripted by Cobus C H Taljaard (cobus DOT taljaard AT gmail DOT com)<br>
Free to use and change as you see fit. No guarantee provided. Use at own risk!<br>
I've tested it on godaddy.com Linux hosting.<br><br>
Why:<br>
When you need to FTP a large amount of files in one sitting, it takes a lot of time.<br>
It is MUCH quicker to FTP a zipped file and then to extract the contents (with directory<br>
structure) on the server itself.  Something that took me over ten minutes now barely takes<br>
one!<br><br>
Instructions:<br>
FTP the "unzipper.php" and "pclzip.lib.php" files to your online folder containing the zip file/s and run it from your browser<br>
This script only looks for zipped files in the same folder as where the script is run from!<br>
NB NB NB - this script overwrites all files without asking. Please make sure you are using the<br>
correct directory. I advise you to first test it with a small zip file containing one dummy text file.<br><br>
Example:<br>
Let's say you have zipped files stored in the domain.com/zips folder that you want to unzip<br>
Then you need to FTP "unzipper.php" to the same "zips" directory of domain.com<br>
Now access "http://www.domain.com/zips/unzipper.php" from your browser
</body>
</html>
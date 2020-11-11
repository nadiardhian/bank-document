<?php
include 'template/connect.php';

if(isset($_POST['delete']))
{
    $checkbox = $_POST['checkbox'];

for($i=0;$i<count($checkbox);$i++){

$del_id = $checkbox[$i];
$sql = "DELETE FROM cv WHERE id='$del_id'";
$result = mysqli_query($connect,$sql);
}

if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=all_cv.php\">";
}
 }




else if(isset($_POST['download']))
{

$post = $_POST; 
$file_folder = "file/"; // folder to load files
if(extension_loaded('zip'))
{ 
// Checking ZIP extension is available
if(isset($post['files']) and count($post['files']) > 0)
{ 
// Checking files are selected
$zip = new ZipArchive(); // Load zip library 
$zip_name = time().".zip"; // Zip name
if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)
{ 
 // Opening zip file to load files
$error .= "* Sorry ZIP creation failed at this time";
}
foreach($post['files'] as $file)
{
$edit=  mysqli_query($connect,"update cv set count=count+1 where lokasi='$file'");
    
$zip->addFile($file_folder.$file); // Adding files into zip
}
$zip->close();
if(file_exists($zip_name))
{
// push to download the zip
header('Content-type: application/zip');
header('Content-Disposition: attachment; filename="'.$zip_name.'"');
readfile($zip_name);
// remove zip file is exists in temp path
unlink($zip_name);
}
 
}

}
    
}

?>
              
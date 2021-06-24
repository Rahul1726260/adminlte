<?php
include 'conn.php';
$statusMsg = '';
$targetdir = "upload/";
$filename = basename($_FILES["file"]["name"]);
$targetfilepath = $targetdir . $filename;
$filetype = pathinfo($targetfilepath,PATHINFO_EXTENSION);
$start=1;
if (file_exists($targetfilepath)) {
    echo "Sorry, file already exists.";
    $start=0;    
  }
  
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"] && $start==1)){
    // Allow certain file formats
    $allowtypes = array('jpg','png','jpeg','gif');
    if(in_array($filetype, $allowtypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetfilepath)){
            // Insert image file name into database
            $insert ="INSERT INTO `images` (`file_name`, `uploaded_on`) VALUES ('$filename',CURRENT_TIMESTAMP)";
            
            if($con->query($insert)==True){
                $statusMsg = "The file ".$filename. " has been uploaded successfully.";
                header('location:crud.php');
            }
            else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }
        else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }
    else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF files are allowed to upload.';
    }
}
else
{
    $statusMsg = 'Please select a new file to upload.';
}

echo $statusMsg;
?>
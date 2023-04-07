<?php
require 'config/database.php';

//get signup form data if button was clicked
if (isset($_POST['submit'])){

    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $price = $_POST['price'];
    $description = filter_var($_POST['description'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   
    $address=filter_var($_POST['address'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   

    $image1 = $_FILES['image1'];
   

    if(!$title){

        $_SESSION['add-post'] = 'Please enter your title.';
    
        } 
        elseif(!$price){
            
        $_SESSION['add-post'] = 'Please enter your price.';

        }
        else
        {
                  
                    
                    //for the image upload
                    $image1_name = $image1['name'];
                    $image1_temp_name = $image1['tmp_name'];

                    //make sure file is an image
                    $allowed_extensions1 = ['png', 'jpg', 'jpeg'];
                    $extension1 = explode('.', $image1_name);
                    $extension1 = strtolower(end($extension1));
                    $image1_new_name = uniqid('', true) . '.' . $extension1;

                    
                    $image1_destination_path = 'images/' . $image1_new_name;
                    if(in_array($extension1, $allowed_extensions1)){
                    //make sure image is not too large
                        if($image1['size'] < 8000000){
                            //upload avatar
                            move_uploaded_file($image1_temp_name, $image1_destination_path);
                        }
                        else{
                            $_SESSION['add-post'] = 'File size too big for the picture of the lead. Should be less than 8mb';

                        }
                    }else{
                        $_SESSION['add-post'] = 'File should be png, jpg or jpeg format for the picture of the lead';
                    }
                    
                

                    //for the video upload
                    $video_name = $_FILES["video"]["name"];
                    $video_temp_name = $_FILES["video"]["tmp_name"];

                    // Make sure the file is a video
                    // $allowed_extensions = ['mp4', 'avi', 'mov'];
                     $extension = explode('.', $video_name);
                     $extension = strtolower(end($extension));
                    $video_new_name = uniqid('', true) . '.' . $extension;

                    $video_destination_path = 'videos/' . $video_new_name;
                        if ($_FILES['video']['size'] < 100000000) {
                            // Upload the video
                            move_uploaded_file($video_temp_name, $video_destination_path);
                        } else {
                            $_SESSION['add-post'] = 'File size too big for the video. Should be less than 8mb';
                        }
                     
            

                    }

         if(isset($_SESSION['add-post']))
         {
         //pass form data back to add-post page
             $_SESSION['add-post-data'] = $_POST;

             header('location: add-houses.php');
             die();
         } else{
            
            // insert post into the table
            $query = "INSERT INTO houses (title, description, video, price, address, image)
            VALUES('$title', '$description', '$video_destination_path', '$price', '$address',  '$image1_destination_path')";
    
            $result = mysqli_query($connection, $query);
                    
                                    
          
             //redirect to login page with success message
             $_SESSION['add-houses-success'] = "New post added succesfully";
             header('location: index.php');
             die();

                                    
                                
         }


        } else{

    // if button was not clicked, bounce back to add-houses page
     header('location: add-houses.php' );
   die();


 }
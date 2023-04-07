
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="forms.css" />
    <!-- <link rel="stylesheet" href="side-bar.css"> -->
    <!-- <link rel="stylesheet" href="style.css" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-vDV7MPp8Oa/yUniA/Ag/1jD8jn/EQ9X/rZrKjvN8bZWV7i3IVwMz5Qv2jK5WVd9ZRfhZHA7vD8FOpjI1O+Rbrcw==" crossorigin="anonymous" />

    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/4b6416c890.js" crossorigin="anonymous"></script>




</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 style="font-weight: 900; margin-top: 0; padding-top: 0; margin-bottom: 20px;">POST HOUSE</h3>
                       
                                            <?php
                        if(isset($_SESSION['add-post'])) : ?>
                            <div class="alert__message error">
                                <p style="color:black">
                                <?= $_SESSION['add-post'];
                                unset($_SESSION['add-post']);
                                ?></p>
                            </div>
                            <?php endif ?>
                        <form action="addhomelogic.php" enctype="multipart/form-data" method="POST" class="requires-validation"  novalidate>

                       


                    <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Title</label>
                          </div>

                          <br>
                       
                      <div class="form-floating mb-3">
                            <input type="number" name="price" min="0" step="1" class="form-control" id="floatingInput"  placeholder="name@example.com">
                            <label for="floatingInput">Price</label>
                          </div>                        
                          
                        <br>
                      
                        <div class="mb-3">
                         <label for="description" class="little">Describe the property </label>  
                                <!-- <label for="formFile" class="form-label">Default file input example</label> -->                          
                        <textarea name="description" cols="30" rows="10"></textarea>
                        </div>
                            
                        <br>
                         

                            
                        <br>
                         
                        <div class="mb-3">
                         <label for="address" class="little">Enter the property address: </label>  
                                <!-- <label for="formFile" class="form-label">Default file input example</label> -->                          
                        <textarea name="address" cols="20" rows="10"></textarea>
                        </div>
                            

                        <div>
                        <label for="video">Upload a Video:</label>
                        <input type="file" name="video" id="video">
                      </div>

                

                              <div>
                        <label for="image1">Image 1:</label>
                        <input type="file" name="image1" id="image1" accept="image/*" onchange="previewImage(this, 'preview1')">
                        <img id="preview1" style="display: none; max-width: 200px; max-height: 200px;">
                      </div>
                      
                              <div style="display:grid; align-items:center">
                  
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" name="submit" class="btn btn-primary">POST HOUSE</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
  function previewImage(input, previewId) {
    var preview = document.getElementById(previewId);
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = "block";
      }
      reader.readAsDataURL(input.files[0]);
    } else {
      preview.src = "";
      preview.style.display = "none";
    }
  }
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
       $(document).ready(function(){

//jquery for toggle sub menus
 $('.sub-btn').click(function(){
 $(this).next('.sub-menu').slideToggle();
 $(this).find('.dropdown').toggleClass('rotate');
 });
});


    </script>

    
</body>

</html>
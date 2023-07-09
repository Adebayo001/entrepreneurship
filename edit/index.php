<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<title>Entrepreneurship Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style type="text/css">
      body { text-align: center; padding: 150px; }
      h1 { font-size: 40px; }
      body { font: 20px Helvetica, sans-serif; color: #333; }
      #article { display: block; text-align: left; width: 650px; margin: 0 auto; }
      a { color: white; text-decoration: none; }
      a:hover { color: #333; text-decoration: none; }
    </style>
</head>
<body>
<div id="article">
<h3>Entrepreneurship Form Update</h3><br>
<div>
    <form method="POST" action="editstudent.php">
        <div class="col-md-6">
            <label>Input your Matric Number</label>
            <?php
                      if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=="matricnotexist"){
                          echo '<div style="color:red;"> Not yet register!!! <a style="color:blue;" href="../modal.html">Click here to register</a></div>';
                      }elseif ($_GET['errorp']=="emptyfields"){
                        echo '<div style="color:red;">Please fill in all fields!</div>';
                      }else if ($_GET['errorp']=="File too large. File must be less than 100kb."){
                          echo '<div style="color:red;">File too large. File must be less than 100kb.</div>';
                      }else if ($_GET['errorp']=="Invalid file type. Only JPG, and PNG types are accepted."){
                          echo '<div style="color:red;">Invalid file type. Only JPG, and PNG types are accepted.</div>';
                      }
                      else if ($_GET['errorp']=="Sorry, this image already exists. Rename the image before uploading"){
                        echo '<div style="color:red;">Sorry, this image already exists. Rename the image before uploading</div>';
                    }
                    else if ($_GET['errorp']=="Sorry, this image already exists. Rename the image before uploading"){
                      echo '<div style="color:red;">Sorry, this image already exists. Rename the image before uploading</div>';
                    }
                  }
                       ?>
            <input type="text" name="search" placeholder="Matric Number" class="form-control"><br>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </div>
    </form>
</div>
</div>
</html>
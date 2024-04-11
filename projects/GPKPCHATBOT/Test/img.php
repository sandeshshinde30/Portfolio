<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
</head>
<body>
    

   <h4>Upload file</h4> <br>

   <form action="process.php" enctype="multipart/form-data" method="post">

   <Label>Name : </Label> <br>
   <input type="text" id="name" name="name"> <br><br>

   <Label>File : </Label>
   <input type="file" name="uploadFile" id="uploadFile"> <br>
   <span><b>Note:</b> Only JPG,PNG and GIF images are allowed . maximum upload size is 1 MB.</span> <br> <br>

   <button type="submit" name="submit">Submit</button>

   </form>
</body>
</html>
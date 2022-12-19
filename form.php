<html>
<head>
  <title>Form Upload image</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <div class="frame">
    <div class="bungkus">
	    <div class="center">
		    <div class="title">
		 	    <h1>Drop file to upload</h1>
		    </div>
          <form method="post" enctype="multipart/form-data" action="prosesupload.php">
		        <div class="dropzone">
			        <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
			        <input type="file" class="upload-input" name="gambar"/>
		        </div>
		        <button type="submit" class="btn" value="Upload">Upload image</button>
          </form>
         <div> <a style="text-decoration:none" class="home" href="home.php">Home</a> </div> 
            <div class="text1">
                <p>Photo are Clear</p>
                <p>High Quality Photo Only<p>
                <p>Only Upload Photo You Own Right</p>
           </div>
	    </div>
    </div>
  </div>
  

</body>
</html>
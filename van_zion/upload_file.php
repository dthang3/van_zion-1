<!DOCTYPE html>
<html>
<head>
	<title>Upload Song</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">
			<p>Title</p>  
			<input type="text" 
                  name="title">
			<p>Chord</p>  
			<input type="text" 
                  name="chord">
			<p>Number</p>  
			<input type="text" 
                  name="number">
            <p>Lyrics</p>
            <textarea name="lyrics" rows="10" cols="50"></textarea>
            <br>
           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
</body>
</html>
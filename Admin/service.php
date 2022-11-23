
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	
    <!-- <link rel="stylesheet" href="../css/admin.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

		<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		
</head>
<body>
<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo">Ash Grill Admin Panel</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					
				</ul>
			</div>
		</nav>

		<div>
		
	
	<h1>Add Service </h1>
	<div >
        <form action="../Actions/add_service.php" method="POST" enctype="multipart/form-data">

            <br>
            <label for=""> Service </label>
            <input type="text" name="service" id="">
            <br>
            <label for=""> Time</label>
            <input type="number" name="time" id="">
            <br>
            <label for=""> Price</label>
            <input type="text" name="price" id="">
            <br>
            <label for=""> Service image</label>
            <input type="file" name="service_image[]" require accept="service_image/*">
            <br>
           

            <button type='submit' name='submit'>
                Submit
            </button>

        </form>
        
    </div>



	
</body>
</html>
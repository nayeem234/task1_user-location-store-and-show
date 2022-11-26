

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Insert Data with Geolocation Data</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body onload="getLocation();">

<form class="myForm" action="add.php" method="post" autocomplete="off">

<label for="">Name</label>
<input type="text" name="name" required value=""><br>


<label for="">Email</label>
<input type="text" name="email" required value=""><br>

<input type="hidden" name="latitude" value="">

<input type="hidden" name="longitude" value=""><br>

<button type="submit" name="submit">submit</button>

</form>

<script type="text/javascript">
        function getLocation () { 
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition,showError);

            }
         }

         function showPosition(position){
            document.querySelector('.myForm input[name="latitude"]').value=position.coords.latitude;
            document.querySelector('.myForm input[name="longitude"]').value=position.coords.longitude;

         }
         function showError(error){
            switch(error.code){
                case error.PERMISSION_DENIED:
                alert("you must Allow The request for Geolocation To Fill Out the form");
                location.reload();
                break;
            }

         }

    </script>
    <br>
    <a href="data.php">Database Page</a>
    
</body>
</html>






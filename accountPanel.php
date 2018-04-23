<!DOCTYPE html>
<html lang="en">
	
    <?php include 'helper/header.php' ?> 
    
	<body>
        <form class="form-signin" action='helper/accountHelper.php' name='signup' method='post'>

            <div class="form-label-group">
                <input type="text" id="inputFirstName" class="form-control" name='first_Name' placeholder="First Name" required autofocus>
                <label for="inputFirstName">First Name</label>
            </div>

            <div class="form-label-group">
                <input type="text" id="inputLastName" class="form-control" name='last_Name' placeholder="Last Name" required autofocus>
                <label for="inputLastName">Last Name</label>
            </div>
            
            <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name='email' placeholder="Email Address" required autofocus>
                <label for="inputEmail">Email Address</label>
            </div>
            
            <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name='password' placeholder="Password" required>
                <label for="inputPassword">Password</label>
            </div>
            
            <?php 
            include 'helper/connect.php';
            $facultyQueryResult = mysqli_query($db, "SELECT* FROM EVENT");
			mysqli_close($db);
			while($row = mysqli_fetch_array($facultyQueryResult, MYSQLI_BOTH))
			{
            	echo"
            	<div class='form-label-group form-check form-check-inline'>
  					<input class='form-check-input' type='checkbox' id='$row[event_ID]' value='$row[event_ID]'>
  					<label class='form-check-label' for='$row[event_ID]'>$row[event_Name]</label>
				</div>";
			}
			?>
			
            
            <button class="btn btn-lg btn-success btn-block" type="submit" name='signup' value='login'>Update Account</button>
            <br>

            <a class="btn btn-lg btn-warning btn-block" href="index.php" role="button">Back to Home</a>
        </form>
    </body>
</html>
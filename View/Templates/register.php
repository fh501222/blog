<div class="register">
    <form action="index.php?page=register" method="POST">
    	<!-- hidden -->
            <input type="hidden" name="action" value="register">
            <!-- end_hidden -->
        <div class="col-md-6">
            <div class="row gy-5">
                <div class="col">
                    <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name" required>
                </div>
                <div class="col">
                    <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name" required>
                </div>
            </div>
            </div>

             <hr>

            <div class="col-md-6">
		    <label for="inputEmail4" class="form-label">Email</label>
		    <input type="email" name="email" class="form-control" id="inputEmail4" required>
		  </div>

			<div class="col-md-6">
		    <label for="inputPassword4" class="form-label">Password</label>
		    <input type="password" name="password" class="form-control" id="inputPassword4" required>
		  	</div>
        
        <div class="col-12">
            <label for="inputAddress" class="form-label">Country</label>
            <input type="country" name="country" class="form-control" id="inputAddress" placeholder="Ex... Djibouti" required>
        </div>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Phone</label>
            <input type="tel" name="tel" class="form-control" id="inputAddress" placeholder="EX... +253 123 4567">
        </div>
        <hr>

        <div class="col-12">
            <label for="inputAddress" class="form-label">Profession</label>
            <input type="text" name="profession" class="form-control" id="inputAddress" placeholder="Profession">
        </div>
        
        <div class="col-md-2">
            <label for="inputZip" class="form-label">User_Code</label>
            <input type="text" name="user_code" class="form-control" id="inputZip">
        </div>

        <div class="col-md-2">
            <label for="inputZip" class="form-label">IMG URL</label>
            <input type="text" name="img" class="form-control" id="inputZip">
        </div>
       <!--  <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
            </div>
        </div> -->
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>
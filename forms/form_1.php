

<div class="alert alert-info" role="alert"><h3>Add new data</h3></div>
<center>  
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <form action="insert.php" method="post" role='form' id="contact-form">
        

        <label for="email" class="control-label">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
        <br>
        <label>Password</label>
        <input type="text" class="form-control" id="password" name="password" placeholder="Password" required>
        <br>
        <label>Name</label>
        <input type="text" class="form-control" placeholder="Text input" name="name" id="name" required>
        <br>
        <label>Address</label>
        <textarea class="form-control" rows="3" name="address"></textarea>
      
      
        <div class="form-group">  
        <button type="submit" class="btn btn-success">Add</button>
        </div>
        <button type="reset" class="btn">Reset</button>
    
    
    </form>
    <br>
  </div>
</div>
</center>



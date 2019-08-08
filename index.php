<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>



<div class="panel panel-default">
  
  <div class="panel-body">
    <h1 style="color: blue">Demo Form</h1>
    <hr>
    <br>  
<form class="form-horizontal" action="backend/submit_form.php" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Date of Birth:</label>
    <div class="col-sm-10">
      <div class="Date">
        <input type="Date" class="form-control" id="dob" name="dob" placeholder="Enter DOB">
      </div>
    </div>
  </div>



  <div class="form-group">
  <label class="control-label col-sm-2" for="sel1">Gender:</label>
  <div class="col-sm-10">

    <select class="form-control" id="sel1" name="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
  </select>
  </div>
</div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Address:</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="3" cols="6" id="comment" name="addr"></textarea>
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Phone Number:</label>
    <div class="col-sm-10">
      <input type="Number" class="form-control" id="email" name="no" placeholder="Enter Phone Number">
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Examination Details:</label>
    <div class="col-sm-10">
      <div class="table-responsive">
  <table class="table">
      <thead>
          
          <th>Exam Name</th>
          <th>Board</th>
          <th>Year of Passing</th>
          <th>Marks</th>


      </thead>

      <tbody>
        <tr>

          <td>10th Grade</td>
          <td>
            <div class="form-group">
              <div class="col-sm-10">
                
                <select class="form-control" id="sel1" name="tenth_board">
                <option value="CBSC">CBSC</option>
                <option value="STATE">State Board</option>
              </select>
              </div>
              
            </div>
          </td>

          <td>

            <input type="Number" class="form-control" id="email" name="tenth_Year" placeholder="Enter Year">
            
          </td>

          <td>

            <input type="Number" class="form-control" id="email" name="tenth_marks" placeholder="Enter Marks">
            
          </td>
          
        </tr>

        <tr>

          <td>12th Grade</td>
          <td>
            <div class="form-group">
              <div class="col-sm-10">
                
                <select class="form-control" id="sel1" name="tw_board">
                <option value="CBSC">CBSC</option>
                <option value="STATE">State Board</option>
              </select>
              </div>
              
            </div>
          </td>

          <td>

            <input type="Number" class="form-control" id="email" name="tw_Year" placeholder="Enter Year">
            
          </td>

          <td>

            <input type="text" class="form-control" id="email" name="tw_marks" placeholder="Enter Marks">
            
          </td>
          
        </tr>

      </tbody>
  </table>
</div>
    </div>
  </div>


  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Upload Photo:</label>
    <div class="col-sm-10">
      <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="photoup">
  </div>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Upload Signature:</label>
    <div class="col-sm-10">
      <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="sigup">
  </div>
    </div>
  </div>


  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox" name="Accept"> Accept Terms and Condition</label>
      </div>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="save">Submit</button>
    </div>
  </div>
</form>


  </div>
  



</div>

</body>
</html>

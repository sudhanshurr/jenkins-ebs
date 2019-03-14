<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <form class="form-horizontal" >
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Date:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date" placeholder="Enter date" name="date">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Rooms:</label>
    <div class="col-sm-10">
          <select class="form-control"  id="rooms" name="rooms">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="button" class="btn btn-default" id="submitBtn" data-toggle="modal" data-target="#myModal">Submit</button>
    </div>
  </div>
</form>
  <!-- <button type="button" class="btn btn-info btn-lg" >Open Modal</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="post" action="SendGrid-API/send-email.php">
          <input type="hidden" class="form-control"   name="fname" id="fname" value="">
          <input type="hidden" class="form-control"   name="femail" id="femail" value="">
          <input type="hidden" class="form-control"   name="fdate" id="fdate" value="">
          <input type="hidden" class="form-control"   name="frooms" id="frooms" value="">
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Phone no:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="fno" placeholder="Enter password" name="fno">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default" >Submit</button>
            </div>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
<script>
$('#submitBtn').click(function() {
     $('#fname').val($('#name').val());
     $('#femail').val($('#email').val());
     $('#fdate').val($('#date').val());
     $('#frooms').val($('#rooms').val());


});

</script>
</body>
</html>

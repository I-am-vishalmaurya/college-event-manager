<?php 
$title = 'Event Confirmation';
$bodyColor = "bg-light";
    include 'includes/header.php';
    include 'includes/navbar.php';
?>
<div class="ml-4">

  <fieldset>
    <legend>Hosted by</legend>
    <div class="form-group row">
      <label for="staticName" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticName" value=<?php echo $_SESSION['first_name']; echo '&nbsp;'; echo $_SESSION['last_name'] ?>>
      </div>
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value=<?php echo $_SESSION['email']; ?>>
      </div>
      <label for="staticPhone" class="col-sm-2 col-form-label">Phone No</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticPhone" value=<?php echo "9076260427" ?>>
      </div>
    </div>
    <form action ="source/addMainEventCode.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="event_name" class="form-label mt-4">Event Name</label>
      <input type="eventName" name= "newEventName" class="form-control" id="event_name" aria-describedby="eventnameHelp" placeholder="Enter event name...">
      <small id="eventnameHelp" class="form-text text-muted">Event name should be unique.</small>
    </div>
    <div class="form-group">
      <label for="inputLocation" class="form-label mt-4">Event location</label>
      <input type="text" name= "newEventLocation" class="form-control" id="inputLocation" placeholder="Event Location">
    </div>
    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Number of days for event</label>
      <select class="form-select" id="exampleSelect1" name= "newEventdays">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>I am hosting a big event I want more days</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Little description about event</label>
      <textarea name="newEventDescription" class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="formFile" class="form-label mt-4">Thumbnail for event</label>
      <input class="form-control" name="newEventThumbnail" type="file" id="formFile">
    </div>
    <fieldset class="form-group">
      <legend class="mt-4">Number of visitor you expect</legend>
        <label for="customRange3" class="form-label">Example range</label>
        <input type="range" name="newEventVisitorRange" class="form-range slider_no_of_visitor" value = "100" min="0" max="10000" step="100" id="range">
        <div class="range-value" id="rangeV"></div>
    </fieldset>
    <button type="submit" name="addEvent" class="btn btn-primary">Host</button>
</form>
</div>

<?php 
    include 'includes/footer.php';
?>
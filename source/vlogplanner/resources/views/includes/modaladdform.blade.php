  <!-- End of Table-to-load-the-data Part -->
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal animated slideInRight" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h1 class="modal-title" id="myModalLabel">Add a New Rakuten Marketing Event</h1>
                        </div>
  <div class="modal-body">
<form name="frmEmployees" class="form-horizontal" method="POST" action="api/v1/event/store" id='addEvent'>
  
  <input type="text" name="EventName" value=""  autofocus placeholder="Enter Event Name">
  <label>Event Start Date</label>
  <md-datepicker ng-model="birthday"></md-datepicker>
  <input type="date" class="datepicker" name="EventStartDate" value="" required="true" placeholder="Event Start date">
  <label>Event End Date</label>
  <input type="date" name="EventEndDate" class="datepicker"value="" required="true" placeholder="Event End date">
  <label>Event Registration Start Date</label>

  <input type="date" name="EventRegStart" class="datepicker" required="true" value="" placeholder="Event Start date">
  <label>Event Registration End Date</label>

  <input type="date" name="EventRegEnd" class="datepicker" required="true" value="" placeholder="Event End date">
  <input type="text" name="EventAddress" value="" required="true" placeholder="Event address">
  <input type="text" name="EventZipcode" value="" required="true" placeholder="Event Zipcode">
  <label>Event Description</label>
  <textarea rows="4" cols="75" name="EventDescription" required placeholder="Describe the Event"> </textarea>

  <input type="submit" class="btn btn-primary waves-effect waves-light" id="btn-save" value="Save">
  </form>
  </div>

                    </div>
                </div>
            </div>
        </div>
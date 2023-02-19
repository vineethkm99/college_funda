<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px; border-bottom: 0px;">
        <button onclick="clr()" type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h3 id="myModalLabel">We'd Love to Hear From You</h3>
      </div>
      <div class="modal-body" style="padding:35px 50px;">
      <div>
        <form class="form-horizontal col-sm-12" id="feed" onsubmit="return false">
          <div class="form-group"><label>Name</label><input id="name" class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"/></div>
          <div class="form-group"><label>Message</label><textarea id="message" class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea></div>
          <div class="form-group"><label>E-Mail</label><input id="mail" class="form-control email" placeholder="email@you.com (so that we can contact you)" data-placement="top" data-trigger="manual" data-content="Must be a valid e-mail address (user@gmail.com)" type="text"/></div>
          <div class="form-group"><label>Phone</label><input id="phno" class="form-control phone" placeholder="999-999-9999" data-placement="top" data-trigger="manual" data-content="Must be a valid phone number (999-999-9999)" type="text"/></div>
          <div class="form-group"><button type="submit" class="btn btn-success pull-right">Send It!</button> <p class="help-block pull-left text-danger hide text-center" style="color : red;" id="form-error">&nbsp; Invalid input!! </p></div>
        </form>
      </div>
      </div>
      <div class="modal-footer" style="padding:35px 50px; border-top: 0px;">
        <p id="returnmessage" class="text-center"></p>
      </div>
    </div>
 </div>
 </div>
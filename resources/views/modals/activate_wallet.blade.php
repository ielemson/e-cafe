<!--ACTIVATE WALLET MODAL-->
<div class="modal fade" id="activModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<!--        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
<h4 class="modal-title" id="myModalLabel" align="center">Activate Your Wallet</h4>
</div>
<form  method="post" class="form-signin wallet_update"  action="">
{{ csrf_field() }}
<div class="modal-body">
<!-- Success / Error  message -->
<div role="alert" id="message_success"></div>
<div class="container-fluid" style="text-align:center; padding:0px;">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="icon-addon addon-md form-group has-feedback">
<input type="text" class="form-control" placeholder="Bank Name" name="bankname" id="bankname" required>
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<label class="fa fa-pencil"></label><br/>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="icon-addon addon-md form-group has-feedback">
<input type="text" class="form-control" value="{{auth::user()->last_name}}  {{auth::user()->first_name}}" name="accname" required>
<input  type="hidden" value="{{auth::user()->id}}" name="userID" id="userID">
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<label class="fa fa-pencil"></label><br/>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="icon-addon addon-md form-group has-feedback">
<input type="text" class="form-control" placeholder="Account Number" name="accnumb" id="accnumb" required>
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<label class="fa fa-pencil"></label><br/>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
<div class="icon-addon addon-md form-group has-feedback">
<input type="text" class="form-control"  value="{{auth::user()->wallet->user_tag}}"disabled>
<input type="hidden" class="form-control"  name="tag_id">
<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
<label for="inputlName" class="fa fa-user"></label><br/>
</div>
</div>
</div>

</div>
</div>
<div class="modal-footer">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6">
<button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Close</button>
</div>

<div class="col-xs-6 col-sm-6 col-md-6">
<button type="submit" class="btn btn-primary btn-block wallet_btn">Update</button>
</div>
</div>
<!--        <button type="button" class="btn btn-primary  btn-xs" data-dismiss="modal" >complete service request</button>-->
</div>
</form>
</div>
</div>
</div>
<!--ACTIVATE WALLET MODAL-->
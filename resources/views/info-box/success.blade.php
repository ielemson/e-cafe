@if(Session()->has('success'))
<div class="sufee-alert alert with-close alert-success alert-dismissible ">
<span class="badge badge-pill badge-success">Success</span>
<strong>{{Session()->get('success')}}</strong>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif

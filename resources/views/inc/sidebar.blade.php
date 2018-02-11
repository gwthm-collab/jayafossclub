@section('sidebar')
<div class="col-md-4 col-lg-4">
    <div class="well">
        <h4>Connected to server</h4>
        <?php echo $_SERVER['REMOTE_ADDR']; ?>
    </div>
    <div class="well">
        <h4>You Requested</h4>
        <?php echo $_SERVER['REQUEST_URI']; ?>
    </div>
    @if(Request::is('contact'))
    <div class="well">
        <h4>Club Address</h4>
        <p>Department of CSE, Jaya Engineering College</p>
    </div>        
    @endif
</div>
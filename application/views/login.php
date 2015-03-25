<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-theme.min.css')?>">
        <script lang="js" src="<?php echo base_url('js/jquery-2.1.3.min.js')?>"/></script>

        <script src="<?php echo base_url('js/bootstrap.min.js')?>"/></script>
        <title>SMS Manager Log in</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav id="navbar" class="navbar navbar-default navbar-static">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          SMS Manager Log in
        </div>
        
      </div><!-- /.container-fluid -->
    </nav>
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1"> Username or Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button id="submit" type="submit" class="btn btn-default">Submit</button>
</form>
    </body>
</html>
<script lang="javascript">
    document.getElementById('submit').addEventListener('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: "http://fiddle.jshell.net/favicon.png",
            beforeSend: function( xhr ) {
              xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
            }
          })
            .done(function( data ) {
              if ( console && console.log ) {
                console.log( "Sample of data:", data.slice( 0, 100 ) );
              }
            });
    });
</script>
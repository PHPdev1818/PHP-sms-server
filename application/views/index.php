<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-theme.min.css')?>">
        <script lang="js" src="<?php echo base_url('js/jquery-2.1.3.min.js')?>"/></script>

        <script src="<?php echo base_url('js/bootstrap.min.js')?>"/></script>
        <title>SNS Manager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav id="navbar-example" class="navbar navbar-default navbar-static">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SNS Manager</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                Users
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a id="create" role="menuitem" tabindex="-1" >Create</a></li>
                <li role="presentation"><a id="list" role="menuitem" tabindex="-1" >List</a></li>
                
              </ul>
            </li>
          </ul>
         
        </div><!-- /.nav-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
        <div>
            
            
        </div>
    </body>
</html>
<script lang="javascript" >
    var messages = [{message:'',response:'',text:''}]<?php echo $getMessages ?>;

</script>
        <script src="<?php echo base_url('js/OnLoad.js')?>"/></script>

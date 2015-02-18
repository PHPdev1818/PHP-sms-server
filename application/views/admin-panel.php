<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/jquery.dataTables.min.css')?>">

        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-theme.min.css')?>">
        <script lang="js" src="<?php echo base_url('js/jquery-2.1.3.min.js')?>"/></script>

        <script src="<?php echo base_url('js/bootstrap.min.js')?>"/></script>

        <script type="text/javascript" charset="utf8" src="<?php echo base_url('js/jquery.dataTables.min.js')?>"></script>
        <script type="text/javascript" charset="utf8" src="<?php echo base_url('js/dataTables.bootstrap.min.js')?>"></script>
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
            <li ><a href="#">Account</a></li>
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
            
            <table id="table_id" class="display">
    <thead>
        <tr><th><button type="button" id="myButton" class="btn btn-primary" autocomplete="off">+</button></th>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><button type="button" id="myButton" class="btn btn-primary" autocomplete="off">-</button></td>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td><button type="button" id="myButton" class="btn btn-primary" autocomplete="off">-</button></td>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
        </div>
    </body>
</html>
<script lang="javascript" >
    var messages = [{message:'',response:'',text:''}];
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>


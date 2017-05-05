<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Join.To.IT">

    <title>Join.To.IT form builder</title>

    <link rel="stylesheet" href="src/css/style.css">

  </head>

  <body>

    <div style="margin-top: 20px">

      <div id="JoinToITformBuilder"></div>

      <div id="footer">


        <p style="margin-top: 0">
           <a target="_blank" href="http://jointoit.com">Join.To.IT</a><br/><br/>
        </p>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
    <script src="src/libraries/dust-js/dust-core-0.3.0.min.js"></script>
    <script src="src/libraries/dust-js/dust-full-0.3.0.min.js"></script>
    <script src="src/libraries/dust-js/dust-helpers.js"></script>
    <script src="src/libraries/tabs.jquery.js"></script>
    <script src="src/formBuilder.jquery.js"></script>


    <script>

      $('#JoinToITformBuilder').formBuilder({
        
        load_url: 'src/json/example.json',
        save_url: 'demo/save.php',
        
        onSaveForm: function() {
          // redirect to demo page
          window.location.href = 'demo/render.php';
        }

      });

    </script>

  </body>
</html>

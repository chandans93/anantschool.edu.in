<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      <script>
         function getMessage() {
            $.ajax({
               type:'POST',
               url:'/getmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data) {
                  $("#msg").html(data.msg);
               }
            });
         }
      </script>
   </head>
   
   <body>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <div id = 'msg'>This message will be replaced using Ajax. 
         Click the button to replace the message.</div>

         <button onclick="getMessage()">Click me</button>
      
   </body>

</html>
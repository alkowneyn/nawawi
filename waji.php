<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SAHAL GAS | LIST CUSTOMER</title>
       <script src="jquery-3.2.1.js"></script>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap.min.css">
          <link rel="stylesheet" href="nawawi.css">
           <script src="bootstrap.min.js"> </script>
           <!--<link rel="stylesheet" href="font.css">-->
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
           
           <style>
                @font-face { font-family: "Glyphicons Halflings"; 
              src: url(fonts/glyphicons-halflings-regular.eot);
               src: url(fonts/glyphicons-halflings-regular.svg);
                src: url(fonts/glyphicons-halflings-regular.ttf);
                 src: url(fonts/glyphicons-halflings-regular.woff);  } 

                 
              </style>
    </head>
 <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-2"><br />
                <h3 align="center">CUSTOMER DETAILS</h3><br />
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Search</span>
                        <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="result"></div>
            </div>
        </div>
    </div>
 </body>
</html>


<script>
        $(document).ready(function(){
        load_data();
        function load_data(query)
        {
            $.ajax({
            url:"waji2.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
            });
        }
        $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
            else
            {
                load_data();
            }
        });
    });
</script>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <title>CKeditor Demo with KCFinder in Laravel 5.4 </title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
   <script src="{{asset('ckeditor/ckeditor.js')}}"> </script> 
 </head>
 <body>
 
 <div class="container">
   <div class="panel panel-success">
     <div class="panel-heading">Integrating CKeditor in Laravel 5.3 </div>
     <div class="panel-body">
       <textarea id="ckeditor" class="ckeditor"> </textarea>  
       <script type="text/javascript">  

        CKEDITOR.replace( 'ckeditor' );  

       </script>  
     </div>
   </div>
 </div>

 </body>
 </html>
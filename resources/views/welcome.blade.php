<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="/css/vuetify.css">
  </head>
  <body>

    <div id="app">



</div>




  </body>
  <script src="{{mix('js/app.js')}}" charset="utf-8"></script>

<script>



      window.onmessage = function(event){
	console.log(event)
	
      	if(event.data){

console.log(event.data)
       var token =  event.data
        localStorage.setItem('token', token)
            location.reload() 
}
      }
    </script>
</html>

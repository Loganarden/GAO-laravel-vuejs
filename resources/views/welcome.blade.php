<!DOCTYPE html> <html lang="fr"> 

    <head>     <meta charset="utf-8">     
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <meta name="csrf-token" content="{{ csrf_token() }}">  
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">     
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">   

        <title>Gao-laravel-vuejs</title> 

        <!-- Fonts -->   
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> 

    </head>  

    <body class="ma-0 pa-0">  

        <div id="layout" class="m-0 p-0" > 

            <layout>          

            </layout>   

        </div> <script src="{{ asset('js/app.js') }}"></script> 

    </body>  

</html>
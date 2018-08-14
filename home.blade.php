<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>deNoted</title>
<link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">deNoted</a>
            </div>            
        </div>
    </nav>
    <div class="content">
    <div class="container">
        <div class="col-sm-6">
            <h2>ABOUT</h2>
            <p>deNoted is an application that lets you save your tasks as notes or todo list for future reference.</p>
        </div>
        <hr class="col-sm-12">

    <div class="row">
        <div>
            @yield('content')
        </div>
            <div class="col-sm-6">
                @yield('edit')
            </div>
        </div>
    </div>
    <div>
        @yield('todoForm')
    </div>
        <div class="container">
            @yield('editTodo')
        </div>
        
    </div>
</body>
</html>
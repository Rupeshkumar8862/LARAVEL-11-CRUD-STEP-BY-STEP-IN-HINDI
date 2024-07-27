

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap4.0.0.min.css')}}">
    <title>layout </title>
    
</head>
<body>
    <div id="wrapper">
        <header class="bg-info p-1">
            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                <a class="navbar-brand" href="#">LARAVEL 11 CRUD</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      
                    </div>
                </div>
            </div>
        </header>


        @yield('content')



        <footer class="bg-info text-white p-2 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span>Copyright © @php echo date('Y'); 
        @endphp | <a href="https://rupeshtechnologies.com/" class="text-white" target="_blank">rupeshtechnologies.com</a></span>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <span class="text-dark">Your Laravel App &copy; {{ date('Y') }}</span>
            </div>
        </footer>
       
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
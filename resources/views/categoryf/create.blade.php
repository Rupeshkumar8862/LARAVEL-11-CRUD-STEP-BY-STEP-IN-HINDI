
@extends('layouts.home')
@section('content')

<section class="p-3" style="min-height: calc(100vh-112px)">
    <style>
         body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; }
  
  .form-container {
    background-color: #ffffff;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    width: 800px;
    /* max-width: 100%; */
    text-align: center;
    text-items:center;
  }
  
  .form-container h2 {
    margin-bottom: 20px;
  }
  
  .form-group {
    margin-bottom: 20px;
    text-align: left;
  }
  
  .form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  
  .form-group input[type="text"],
  .form-group input[type="email"],
  .form-group textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 16px;
  }
  
  .form-group input[type="radio"] {
    margin-right: 10px;
    
  }
  
  .form-group textarea {
    height: 80px;
  }
  
  .form-group .gender-label {
    margin-right: 10px;
  }
  
  .submit-btn {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }
  
  .submit-btn:hover {
    background-color: #45a049;
  }
</style>
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                          {{-- for message --}}
                @if($message = Session::get('success'))
                <div class="alert alert-success alert-block text-center">
                   <strong>{{$message}} </strong> </div>
                   @endif
                        <h4>ADD CATEGORY <a href="{{url('categoryf')}}" class="btn btn-primary float-right"> CATEGORY LIST </a></h4>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="form-container">
                               
                                <form action="{{route('categoryf.store')}}" method="POST">
                                    @csrf
                                  <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" required>
                                    @error('name') <span class="text-danger">{{$message}}</span>
                                        
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label>Gender:</label>
                                    <input type="radio" id="male" name="gender" value="male" class="gender-input">
                                    @error('gender') <span class="text-danger">{{$message}}</span>
                                        
                                    @enderror
                                    <label for="male" class="gender-label">Male</label>
                                    <input type="radio" id="female" name="gender" value="female" class="gender-input">
                                    <label for="female" class="gender-label">Female</label>
                                    <input type="radio" id="other" name="gender" value="other" class="gender-input">
                                    <label for="other" class="gender-label">Other</label>
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" required>
                                    @error('email') <span class="text-danger">{{$message}}</span>
                                        
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" required></textarea>
                                    @error('message') <span class="text-danger">{{$message}}</span>
                                        
                                    @enderror
                                  </div>
                                  <button type="submit" class="submit-btn">Submit</button>
                                </form>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
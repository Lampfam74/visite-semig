<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Semig | admin dashbord   </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>

    <body>
 
        <div>
            <div class="container" >
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center min-vh-100">
                            <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-block bg-login rounded-left" style="background-image: url('/3.jpg')">
                                        {{-- <img src="" alt=""> --}}
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center mb-5">
                                                <a href="{{url('/')}}" class="text-dark font-size-22 font-family-secondary">
                                                    <i class="mdi mdi-album" style="color:#079c7c;"></i> <b class="align-middle" style="color: rgb(212, 92, 48)">SEMIG <sup>SA</sup>  </b>
                                                </a>
                                            </div>
                                            <h1 class="h5 mb-1" style="text-align: center">Bienvenue!</h1>
                                            <p class="text-muted mb-4" style="text-align: center">Pour continuer entrer votre adresse mail et votre Mots de Passe.</p>
                                            <form class="user" method="post" action="{{route('login')}}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email"  name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email ">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="mots de passe">
                                                </div>
                                                <input class="btn btn-success btn-block waves-effect waves-light" value="Log In" type="submit">
    
                                                {{-- <div class="text-center mt-4">
                                                    <h5 class="text-muted font-size-16">Sign in using</h5>
                                                
                                                    <ul class="list-inline mt-3 mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                                        </li>
                                                    </ul>
                                                </div> --}}
                                                
                                            </form>
                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="row mt-4">
                                                <div class="col-12 text-center">
                                                    <p class="text-muted mb-2"><a href="" class="text-muted font-weight-medium ml-1">mots de passe oublié?</a></p>
                                                    {{-- <p class="text-muted mb-0">Don't have an account? <a href="pages-register.html" class="text-muted font-weight-medium ml-1"><b>Sign Up</b></a></p> --}}
                                                </div> <!-- end col -->
                                            </div>
                                            <!-- end row -->
                                        </div> <!-- end .padding-5 -->
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div> <!-- end .w-100 -->
                        </div> <!-- end .d-flex -->
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    
        <!-- jQuery  -->
        <!-- App js -->
        <script src="assets/js/theme.js"></script>
    
    </body>
    
    </html>
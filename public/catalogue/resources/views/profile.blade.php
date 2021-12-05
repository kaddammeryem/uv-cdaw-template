@extends('layouts.header')
@section('title', 'Home')
<html>
    @section('head')
        @parent
        <link href="../../public/css/profile.css" rel="stylesheet">
    @endsection
    <body>
        @section('sidebar')
        @parent
        <?php $urlProfile = route('profile');?>
        <?php $urlHomeDisc = route('homedisc');?> 
        <?php $urlHistory = route('history');?>
        <?php $urlHomeCo = route('homeco');?>
        @section('history')
        <div class="history">
            <button class="btn btn-link" id='in' type="submit" onclick="window.location= '{{ route('history') }}'">
                <span style="color:white">History</span>
            </button>
            <button class="btn btn-link" id='in' type="submit">
                <span style="color:white">Playlist</span>
             </button>
        </div> 
        @endsection
        @section('sign')
        <div class='sign'>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown" style=" list-style-type: none">
                    <button class="btn btn-outline-primary " style="color:white" id='in'   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user" style="color: white;"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <hr>
                        <a class="dropdown-item" href=<?php print_r($urlHomeDisc)?>>Log out</a>
                    </div>
                </li>
            </ul>
        </div>
        @endsection
       @endsection
       @section('content')
    <body>
        <div class="container">
        <form action="updateuser" submit="updatePassword" method="post">
                    @csrf
            <div class="row gutters">
           
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="https://i.pinimg.com/736x/8b/41/8d/8b418d2b374298028c4a312ade587afc.jpg">
                                    </div>
                                    <h5 class="user-name">{{$user[0]->name}}</h5>
                                    <h6 id="emailInfo" class="user-email">{{$user[0]->email}}</h6>
                                </div>
                                <div class="about">
                                    <h5 class="mb-2 text-warning">Favorite Quote</h5>
        
                                    <p id="quoteInfo">{{$user[0]->quote}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-warning">Personal Details</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div >
                                        <label for="lastname">Lastname</label>
                                        <input type="text" class="form-control" name="lastname" value="{{$user[0]->nom}}" id="lastname" placeholder="Enter lastname">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div >
                                        <label for="firstname">Firstname</label>
                                        <input type="text" class="form-control" name="firstname" value="{{$user[0]->prenom}}"id="firstname" placeholder="Enter firstname">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div >
                                        <label for="eMail">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{$user[0]->email}}" placeholder="Enter email ID">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div >
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{$user[0]->phone}}" placeholder="Enter phone number">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div >
                                        <label for="birthday">Birthday</label>
                                        <input type="date" class="form-control" id="birthday" name="birthday" value="{{$user[0]->naissance}}" placeholder="DD/MM/YYYY">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div >
                                        <label for="inputPassword4">Quote</label>
                                        <textarea type="text" id="quote" name="quote" class="form-control" >{{$user[0]->quote}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                
                                            <div >
                                           
                            
                                                <label for="inputPassword5">New Password</label>
                                                <input type="password" class="form-control" wire:model.defer="state.password"  name="password" placeholder="Enter new password" />
                                                @if ( $errors->count() > 0 )
                                                    <p style="color:red" class="small mb-2">Password does not respect requirements </p>
                                                @endif
                                            </div>
                                            <div >
                                                <label for="inputPassword6">Confirm Password</label>
                                                <input type="password" class="form-control"  placeholder="Confirm new password" name="password_confirmation"  />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-2">Password requirements</p>
                                            <p class="small text-muted mb-2">To create a new password, you have to meet all of the following requirements:</p>
                                            <ul class="small text-muted pl-4 mb-0">
                                                <li>Minimum 8 character</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="text-right">
                                                <button type="submit" id="submit" name="submit" class="btn btn-warning">Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
            </div>
           
        </div>
        @endsection
        @section('footer')
        @parent
        @section('home')
        <li><a href=<?php print_r($urlHomeCo)?>>Home</a></li>
        @endsection
        @endsection
        <script>
            

          

        </script>
    </body>
</html>
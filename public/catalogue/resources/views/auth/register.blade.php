<!DOCTYPE html>
<html>
    <head>
        <title>Signup Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <link rel="stylesheet" href="../../public/css/auth.css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign Up</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <x-jet-input id="name" type="text" class="form-control" placeholder="Login" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-at"></i></span>
                                </div>
                                <x-jet-input id="email" class="form-control" placeholder="email" type="email" name="email" :value="old('email')" required />
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <x-jet-input id="password" class="form-control" placeholder="password" type="password" name="password" required autocomplete="new-password" />
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <x-jet-input id="password_confirmation" placeholder="confirm password" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                            <div class="form-group d-flex justify-content-center">
						        <input type="submit" value="Sign Up" class="btn login_btn">
				        	</div>
                            <div class="flex items-center justify-end mt-4">
                                

                                <div class="card-footer">
                                    <div class="d-flex justify-content-center links" >
                                        You have an account ?<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>   
                </div>
            </div>
        </div>
</body>
</html>

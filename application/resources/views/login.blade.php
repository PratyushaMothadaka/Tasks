<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://unpkg.com/vue@2.6.11/dist/vue.js"></script>
        <script src="https://unpkg.com/element-ui/lib/index.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
        <style>
            .body{align-middle;}
        </style>
    </head>
    <body>
        <div class="container" id="root">
            <div class="row no-gutter">
                <div class="d-none d-md-flex col-lg-3"></div>
                    <div class="col-md-8 col-lg-6">
                        <div class="login d-flex align-items-center py-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 mx-auto">
                                        <h3 class="login-heading text-center mb-4">Login Here !</h3>
                                        <form action="{{ url('/login') }}" method="POST">
                                            @csrf
                                            <div class="form-label-group">
                                                <label for="inputEmail">Email address</label>
                                                <el-input prefix-icon="el-icon-user-solid" placeholder="abc@example.com" name="email" autofocus v-model="email"></el-input>
 
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div> 
 
                                            <div class="form-label-group mb-2">
                                                <label for="inputPassword">Password</label>
                                                <el-input placeholder="Password" prefix-icon="el-icon-lock" name="password" autofocus v-model="password" show-password></el-input>
                                                
                                                {{-- @if ($errors->has('password'))
                                                    <span class="error">{{ $errors->first('password') }}</span>
                                                @endif   --}}
                                                @error('password')
                                                    <p class="text-danger text-small">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{-- <el-button class="btn btn-lg btn-block btn-login text-uppercase font-weight-bold mb-2" type="danger" v-on:click="onSubmit">Login</el-button> --}}
                                            <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit" v-on:click="onSubmit">LOGIN</button>
                                            <center><h6><bold>or</bold></h6></center>
                                            <div class="form-row mb-2">
                                                {{-- <el-button href="/signin/github" class="btn btn-lg btn-block btn-outline-success text-uppercase font-weight-bold" type="danger" v-on:click="onSubmit">Github</el-button> --}}
                                                <a href="/signin/github" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Sign-in with Github</a>
                                            </div>
                                            <div class="form-row mb-2">
                                                    <a href="#" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Sign-in with Google</a>
                                            </div>
                                            <div class="form-row mb-2">
                                                    <a href="/oauth/redirect" class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2">Sign-in with Server</a>
                                            </div>
                                            <div class="text-center">Are you a new user?
                                                <a class="small" href="{{ route('register') }}">Sign Up Now</a>
                                            </div>
                                            <script src="/js/app.js" defer></script>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>
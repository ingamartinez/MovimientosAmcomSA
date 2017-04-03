<!DOCTYPE html>
<html>
<head>
    <title>Flat Admin V.3 - Free flat-design bootstrap administrator templates</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/flat-admin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/blue-sky.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/blue.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/red.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme/yellow.css')}}">

</head>
<body>
<div class="app app-blue-sky">

    <div class="app-container app-login">
        <div class="flex-center">
            <div class="app-header"></div>
            <div class="app-body">
                <div class="app-block">
                    <div class="app-form">
                        <div class="form-header">
                            <div class="app-brand">
                                <img src="{{asset('images/logo.png')}}" alt="Amcom SA" class="img-responsive" height="200" width="500">
                            </div>
                        </div>
                        <form action="/" method="POST">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                <input type="number" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                </span>
                                <input type="number" class="form-control" placeholder="Password">
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-success btn-submit" value="Login">
                            </div>
                        </form>
                        <div class="form-line">
                            <div class="title">OR</div>
                        </div>
                        <div class="form-footer">
                            <button type="button" class="btn btn-default btn-sm btn-social __facebook">
                                <div class="info">
                                    <i class="icon fa fa-facebook-official" aria-hidden="true"></i>
                                    <span class="title">Login with Facebook</span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-footer">
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" src="{{asset('js/vendor.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>

</body>
</html>
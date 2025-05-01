<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(227, 245, 255);
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('auth.login') }}" id="frmLogin">
                            @csrf
                            <div class="mb-3">
                                <h1 class="h4 text-center">Login</h1>
                            </div>
                            @if ($errors->has('fail-login'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('fail-login') }}
                                </div>
                            @endif
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email"
                                    value="{{ @old('email') }}" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Senha"
                                    required>
                            </div>
                            @if (config('services.recaptcha.enable'))
                                <button type="submit" class="btn btn-primary w-100 g-recaptcha"
                                    data-sitekey="{{ config('services.recaptcha.public') }}" data-callback="onSubmit"
                                    data-action="submit">Entrar</button>
                            @else
                                <button type="submit" class="btn btn-primary w-100">Entrar</button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>
    @if (config('services.recaptcha.enable'))
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
                document.getElementById("frmLogin").submit();
            }
        </script>
    @endif
</body>

</html>

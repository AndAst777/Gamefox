<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section class="vh-100" style="background-color: #000">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">
                    <h1 class="text-white mb-4 text-center">Регистрация</h1>
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body">
                            <div class="row align-items-center pt-4 pb-3">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">Почта</h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <input type="email" name="Login" class="form-control form-control-lg form-control-md form-control-sm form-control-sm" placeholder="example@example.com" />
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">Логин</h6>
                                </div>
                                <div class="col-md-9 pe-5">
                                    <input type="text" name="Login" class="form-control form-control-lg form-control-md form-control-sm form-control-sm" placeholder="Введите логин" />
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="row align-items-center py-3">
                                <div class="col-md-3 ps-5">
                                    <h6 class="mb-0">Пароль</h6>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 text-center pe-5">
                                    <input type="password" name="password" class="form-control form-control-lg form-control-md form-control-sm form-control-sm" placeholder="Введите пароль"></textarea>
                                </div>
                            </div>
                            <hr class="mx-n3">
                            <div class="px-2 py-2 text-center">
                                <button type="submit" name="register" value="register" class="btn btn-primary btn-lg ">Зарегистрироваться</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
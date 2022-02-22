<?php include ('head.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Войти</h5>
                        <form action='login.php' method='post'>
                            <div class="form-floating mb-3">
                                <input name="login" type="text" class="form-control" id="floatingInput" placeholder="Логин">
                                <label for="floatingInput">Логин</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Пароль">
                                <label for="floatingPassword">Пароль</label>
                            </div>
                            <div class="d-grid">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Войти</button>
                                    </div>
                                    <div class="col-md-6">
                                        <p><a href="/">Домашняя страница</a></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php echo $errs ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include ('foot.php');
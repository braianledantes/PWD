<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Bootstrap</title>
</head>

<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Signup Form</h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="signupForm">

                    <div class="form-group">
                        <label for="fullname" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="fullname" name="fullname" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="text" id="password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password" class="col-sm-2 control-label">Confirm password</label>
                        <div class="col-sm-10">
                            <input type="text" id="confirm_password" name="confirm_password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">Comments</label>
                        <div class="col-sm-10">
                            <textarea name="comments" id="comments" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <label for="luckynumber">Lucky Number</label>
                            <select name="luckynumber" id="luckynumber" class="form-control">
                                <option value="">--Seleccionar--</option>
                                <option value="double zero">double zero</option>
                                <option value="seven">seven</option>
                                <option value="thirteen">thirteen</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label><input type="checkbox" value="dog">Own a dog</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="cat">Cat</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Owned">Owned by a cat</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <span>Your favorite weather?</span><br>
                            <div class="checkbox">
                                <label><input type="checkbox" value="Owned">Owned by a cat</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="count" value="hot">hot</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="count" value="cold">cold</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="count" value="rainy">rainy</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label> <input type="checkbox" id="agree" name="agree" value="agree">I have read and accept the Terms of Use.</label>
                            </div>
                            <em id="agree-error" class="help-block"></em>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./js/jquery-3.7.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>

    <script src="./js/ejercicio1.js"></script>
</body>

</html>
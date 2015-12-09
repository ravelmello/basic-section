<?php
/**
 * Created by PhpStorm.
 * User: avanger
 * Date: 12/8/15
 * Time: 10:14 PM
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/superhero/bootstrap.min.css" rel="stylesheet" integrity="sha256-o0IkLyCCWGBI+ryg6bL44/f8s4cb7+5bncR4LvU57a8= sha512-jptu6vg45XTY9uPX3vD5nHN4vASCN2hHl+fhmgkdd/px/bFHKMXmDXhkNmTiCpKqH6sliEPFakl2KZNav2Zo1Q==" crossorigin="anonymous">
        <link rel="stylesheet" href="views/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="views/bootstrap-3.3.6-dist/css/bootstrap.css">
        <script type="text/javascript" src="views/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <div class="row">
                    <form class="form-horizontal" method="post" action="src/Session.php">
                        <fieldset>
                            <legend>Sign-in</legend>
                            <div class="form-group">
                                <label for="email" class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="email" id="email" placeholder="Email" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-lg-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input class="form-control" name="password" id="password" placeholder="Password" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="reset" class="btn btn-danger">Cancel</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>


    </body>
</html>
<html lang="en">
    <head>
        <title>Index</title>
        <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/yeti/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <br />
                <h1>Welcome to the site!</h1>
                <hr />
                <br />

                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">username</th>
                            <th scope="col">role</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
    require_once 'User.php';

    $out = "";
    foreach  ( getUsers() as $user ) {
        $out .= "<tr><td>$user->id</td><td>$user->username</td><td>$user->role</td></tr>";
    }

    echo $out;
?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </body>
</html>
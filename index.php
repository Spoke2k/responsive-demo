<!DOCTYPE html>
<html>
<head>

    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/default.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
    <div id='demo'></div>
    <div class='container'>
        <form name='dlg' action='$PHP_SELF' method='post'>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Staueingabe</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>
                            <button class="btn btn-default" type="button">
                                D - Deutschland
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-default" type="button">
                                NL - Niederlande
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-default" type="button">
                                B - Belgien
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-default" type="button">
                                CH - Schweiz
                            </button>
                        </li>
                    </ul>
                    <input type='hidden' name='step' value='2'>
                    <input type='hidden' name='country' value='0'>
                </div>
        </form>
    </div>
</body>
</html>


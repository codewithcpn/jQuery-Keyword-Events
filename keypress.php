<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>jquery keyword Event</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    #one {
        background-color: pink;
        border: 2px solid black;
        padding: 10px;
    }

    #two {
        background-color: tomato;
        border: 2px solid black;
        padding: 10px;
    }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-primary">Codewithcpn: jquery Keyword Events</h1><br>
            <div class="col-md-6">

                <div id="one">
                    <h2> Keypress Event - Keydown</h3>
                        <h4>1: Keydown - Press any key. It's applying orange color on full body </h4>

                </div>
                <hr><br>
                <div id="two">
                    <h2> Keypress Event - Keyup</h3>
                        <h4>2: Keyup - Free key. It's applying blue color on full body </h4>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('body').keydown(function() {
            $(this).css('background-color', 'orange');
        });
    });

    $('body').keyup(function() {
        $(this).css('background-color', 'blue');
    })
    </script>

</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#hide").click(function () {
              $("p").hide();
            });
            $("#show").click(function () {
               $("p").show();
            });
        });
    </script>
</head>
<body>
<p>If you click on the "Hide" button, I will disappear</p>
<button id="hide">Hide</button>
<button id="show">Show</button>
</body>
</html>
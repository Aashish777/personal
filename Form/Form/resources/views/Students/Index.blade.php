<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('student-create') }}" method="post">
    @csrf
    Name: <input type="text" name="name">;<br>
    Roll: <input type="text" name="roll">;<br>
    Email: <input type="text" name="email">;<br>
    Contact: <input type="number" name="contact">;<br>
    Submit: <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>

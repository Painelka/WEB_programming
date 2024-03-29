<!doctype html>
<html lang ="en">
<head>
    <meta charset = "UTF-8">
    <meta name="viewport"
          content = "width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale =1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action ="save.php" method="post">
        <label for="email">Email</label>
        <input type ="email" name="email" required>
        <label for ="category">Category </label>
        <select name ="category" required>
            <option value="doll">doll</option>
            <option value ="other">other</option>
        </select>

        <label for="title">Title</label>
        <input type ="text" name="title" required>

        <label for="description">Description</label>
        <textarea rows ="6" name="description"> HI! </textarea>
    </form>



</body>
</html>

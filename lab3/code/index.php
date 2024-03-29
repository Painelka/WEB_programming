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
<div id="form">
    <form action ="save.php" method="post">
        <label for="email">Email</label>
        <input type ="email" name="email" required>
        <label for ="category">Category </label>
        <select name ="category" required>
            <option value="doll">doll</option>
            <option value ="other">other</option>
        </select>

        <br><label for="title">Title</label>
        <input type ="text" name="title" required> <br>

        <label for="description">Description</label>
        <br> <textarea rows ="2" name="description">  </textarea><br>

        <input type ="submit" value = "save">
    </form>

</div>

<div id ="table">
    <table>
        <thead>
            <th>Category</th>
            <th>Title</th>
            <th>Description</th>
        </thead>

        <tbody>
        <tr>
            <td> other </td>
            <td> car </td>
            <td>   ttdd98o89 </td>
        </tr>
        </tbody>
    </table>
</div>


</body>
</html>

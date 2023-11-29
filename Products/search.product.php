
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Search Product</title>
    <style>
        .container{
            margin-top:40px;
            border-style:solid;
            padding:20px;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <div class="container col-6">
    <form action="search-result.php" method="POST">
        <div class="form-group" >
            <label for="searchInput"><b>Search</b></label>
            <input type="text" class="form-control" id="searchInput" name="searchInput">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:10px;">Search</button>
    </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
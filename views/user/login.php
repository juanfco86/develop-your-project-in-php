
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="views/assets/css/style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous" defer></script>
    <title>My Project PHP</title>
</head>

<body>

    <form action="?controller=User&action=login" method="post">
        <div class="container" align="center">
            <div class="mb-3 col-4" align="center">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="login">
            </div>
            <div class="mb-3 col-4" align="center">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
        </div>
        
        <div align="center">
            <button type="submit" name="login" class="col-1 btn btn-secondary">Submit</button>
        </div>
    </form>

</body>
</html>
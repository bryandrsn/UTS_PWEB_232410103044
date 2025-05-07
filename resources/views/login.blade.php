<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <title>Moview | Login</title>
</head>

<body>
    <section class="container-fluid bg-dark d-flex flex-column justify-content-center align-items-center vh-100">
        <div class="container bg-black rounded-3 p-5 border border-info" style="max-width: 480px">
            <h2 class="mb-5 display-4 text-center text-white">LOGIN</h2>
            <form action="/dashboard" method="get">
                <div class="mb-3 text-white">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control bg-dark text-white" id="inputUsername" required>
                </div>
                <div class="mb-5 text-white">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control bg-dark text-white" id="inputPassword" required>
                </div>
                <button type="submit" class="btn btn-outline-info w-100">Sign In</button>
            </form>
        </div>
    </section>
</body>

</html>

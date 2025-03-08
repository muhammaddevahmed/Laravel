<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
</head>
<body>
    <div class="container">
        <form action="" method="post">
            @csrf
        <div class="form-group mb-3">
            <label for="" class="form-label">Name</label>
            <input
                type="text"
                name="Name"
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
            />
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>

        <div class="form-group">
            <label for="" class="form-label">Email</label>
            <input
                type="email"
                name="Email"
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
            />
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>

        <div class="form-group">
            <label for="" class="form-label">Password</label>
            <input
                type="text"
                name="Password"
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
            />
            <!-- <small id="helpId" class="text-muted">Help text</small> -->
        </div>
        <button class="btn btn-info mt-4">Add User</button>

        </form>
        
    </div>
</body>
</html>
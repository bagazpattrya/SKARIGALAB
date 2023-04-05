<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device-witdh, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Pinjam SKARIGA | Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>

    <style>
        .main {
            height: 100vh;
            box-sizing: border-box; 
        }
        .loginbox{
            width: 500px;
            border: solid 1px;
            padding: 25px; 
        }

        form div{
            margin-bottom: 20px;
        }
    </style>

    <body>
        <div class="main d-flex flex-column justify-content-center align-items-center">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{session('message')}}
                </div>
            @endif
            
            
            <div class="loginbox">
                <form action="" method="post">
                    @csrf
                    <div>
                        <label for="nis" class="form-label ">Masukan NIS</label>
                        <input type="text" name="nis" id="nis" class="form-control" required>
                    </div>
                    <div>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary form-control">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
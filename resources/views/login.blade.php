<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- Google Font --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,500;1,600&display=swap');
    </style>
    {{-- Bootstrapt CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #2f48a4; font-family: 'Open Sans'">
    <div class="d-flex justify-content-center" style="margin-top: 100px">
        <div class="bg-white rounded px-4 py-5" style="width: 400px;box-shadow: -3px 10px 10px -5px">
            <form action="/proses_login" method="POST" style="color: #2f48a4">
            @csrf
                <div class="d-flex justify-content-center">
                    <img class="" style="width: 90px" src="assets/logotaper.png" alt="">
                </div>
                <h2 class="text-center mt-2 fw-bold">LOGIN</h2>
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <div style="font-size: 15px">
                    <div class="d-flex flex-column">
                        <label>USERNAME</label>
                        <input class="px-2 py-1 form-control" style="font-size: 15px; border:1px solid #2f48a4;" placeholder="Masukkan username kamu..." type="text" name="name" id="">
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label>PASSWORD</label>
                        <input class="px-2 py-1 form-control" style="font-size: 15px; border:1px solid #2f48a4;" placeholder="Masukkan password kamu..." type="password" name="password" id="">
                    </div>
                    <div class="d-flex flex-column mt-3">
                        <label>LEVEL</label>
                        <select class="px-2 py-1 form-control" style="font-size: 15px; border:1px solid #2f48a4;" name="level" id="">
                            <option value="">-- Pilih Level --</option>
                            <option value="admin">Admin</option>
                            <option value="tamu">Tamu</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="border btn-primary mt-4 px-5 py-2 rounded">LOGIN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

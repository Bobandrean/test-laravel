<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .number-box {
            width: 60px;
            height: 60px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 5px;
            border: 1px solid #ddd;
            font-size: 16px;
            border-radius: 5px;
            text-align: center;
        }

        .prime {
            background-color: #28a745;
            /* Hijau */
            color: white;
            font-weight: bold;
        }

        .non-prime {
            background-color: #f8f9fa;
            /* Abu-abu terang */
        }

        .btn-group {
            margin-top: 20px;
        }

        .btn-primary {
            margin-right: 10px;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="text-center mb-4">
            <h1>Bilangan Prima dari {{ $start }} sampai {{ $end }}</h1>
        </div>

        <div class="row justify-content-center">
            @for ($i = $start; $i <= $end; $i++)
                <div class="col-auto">
                    <div class="number-box @if (in_array($i, $primes)) prime @else non-prime @endif">
                        {{ $i }}
                    </div>
                </div>
            @endfor
        </div>

        <div class="text-center my-4 btn-group">
            <a href="{{ url('/prime-numbers/1/100') }}" class="btn btn-primary">1 - 100</a>
            <a href="{{ url('/prime-numbers/101/200') }}" class="btn btn-primary">101 - 200</a>
            <a href="{{ url('/prime-numbers/201/300') }}" class="btn btn-primary">201 - 300</a>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>

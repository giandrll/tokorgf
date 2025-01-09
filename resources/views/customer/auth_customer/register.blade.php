<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    @foreach ($data_setting as $item)
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}">
    @endforeach
    <link href="/assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        @keyframes gradientBG {
            0% {
                background: linear-gradient(-45deg, #181C14, #2c3e50, #3a637e, #276d5f);
                background-size: 400% 400%;
                background-position: 0% 50%;
            }
            25% {
                background: linear-gradient(-45deg, #2c3e50, #133750, #42645d, #181C14);
                background-size: 400% 400%;
                background-position: 50% 100%;
            }
            50% {
                background: linear-gradient(-45deg, #1f3a4d, #254e46, #181C14, #2c3e50);
                background-size: 400% 400%;
                background-position: 100% 50%;
            }
            75% {
                background: linear-gradient(-45deg, #273a36, #181C14, #2c3e50, #0e3957);
                background-size: 400% 400%;
                background-position: 50% 0%;
            }
            100% {
                background: linear-gradient(-45deg, #181C14, #2c3e50, #0a3755, #064639);
                background-size: 400% 400%;
                background-position: 0% 50%;
            }
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            animation: gradientBG 12s ease infinite;
            overflow: hidden;
            z-index: 1;
        }

        .squares {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
        }

        .square {
            position: absolute;
            display: block;
            border: 2px solid rgba(250, 247, 247, 0.952);
            animation: squareAnim 20s linear infinite;
            opacity: 0;
            backdrop-filter: blur(5px);
            background: rgba(182, 179, 179, 0.61);
        }

        @keyframes squareAnim {
            0% {
                transform: scale(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: scale(2) rotate(360deg);
                opacity: 0;
            }
        }

        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        .register-container {
            display: flex;
            justify-content: space-between;
            max-width: 1000px;
            width: 90%;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 10;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .register-image {
            width: 50%;
            position: relative;
            overflow: hidden;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .register-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(44, 62, 80, 0.3), rgba(58, 99, 126, 0.3));
            z-index: 1;
        }

        .register-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 1.2s ease;
        }

        .register-form {
            padding: 40px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: rgba(255, 255, 255, 0.9);
        }

        .register-form h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
            font-size: 2.5em;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 15px 45px;
            border: none;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            transition: all 0.3s ease;
            border: 1px solid rgba(44, 62, 80, 0.1);
        }

        .form-group input:focus {
            box-shadow: 0 5px 15px rgba(44, 62, 80, 0.3);
            transform: translateY(-2px);
            border-color: #2c3e50;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #2c3e50;
            font-size: 20px;
            transition: all 0.3s ease;
        }

        .form-group input:focus + i {
            color: #3a637e;
        }

        .btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #2c3e50, #3a637e);
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(44, 62, 80, 0.3);
            text-transform: uppercase;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(44, 62, 80, 0.4);
            background: linear-gradient(45deg, #3a637e, #2c3e50);
        }

        .login-link {
            text-align: center;
            margin-top: 10px;
            color: #666;
        }

        .login-link a {
            color: #2c3e50;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .login-link a:hover {
            color: #3a637e;
            text-decoration: underline;
        }

        .alert {
            color: #ff3333;
            text-align: center;
            background: rgba(255, 51, 51, 0.1);
            padding: 10px;
            border-radius: 8px;
            margin: 15px 0;
        }

        .alert ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        @media (max-width: 768px) {
            .register-container {
                flex-direction: column;
                width: 90%;
                max-width: 450px;
            }

            .register-form {
                width: 100%;
                padding: 30px;
                order: 2;
            }


            .register-form h2 {
                font-size: 2em;
                margin-bottom: 20px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            .form-group input {
                padding: 12px 40px;
            }
        }

       
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="background">
        <div class="squares" id="squaresContainer"></div>
    </div>

    <div class="register-container">
        <div class="register-image">  
             @foreach ($data_setting as $item)
            <img src="{{ asset('foto/fotoSetting/' . $item->logo_toko) }}" alt="Register Image">
            @endforeach
        </div>

        <div class="register-form">
            <h2>Sign Up</h2>

            <form method="POST" action="{{ route('customer.register') }}">
                @csrf
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Full Name" name="nama" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
                </div>
                <button type="submit" class="btn">Sign Up</button>
            </form>

            @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="login-link">
                <p>Already have an account? <a href="/authcustomer">Sign In</a></p>
            </div>
        </div>
    </div>

    <script>
        // Script untuk image slider
        let currentIndex = 0;
        const imgElements = document.querySelectorAll('.register-image img');

        function changeImage() {
            imgElements[currentIndex].classList.remove('visible');
            imgElements[currentIndex].classList.add('slide');

            currentIndex = (currentIndex + 1) % imgElements.length;

            imgElements[currentIndex].classList.remove('slide');
            imgElements[currentIndex].classList.add('visible');
        }

        setInterval(changeImage, 3000);

        // Script untuk animated squares background
        const container = document.getElementById('squaresContainer');
        const squareCount = 30;
        const colors = ['black', 'white'];

        function createSquares() {
            for (let i = 0; i < squareCount; i++) {
                const square = document.createElement('div');
                square.classList.add('square');

                const size = Math.random() * 30 + 20;
                square.style.width = size + 'px';
                square.style.height = size + 'px';

                square.style.top = Math.random() * 100 + 'vh';
                square.style.left = Math.random() * 100 + 'vw';

                square.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];

                const delay = Math.random() * 5;
                square.style.animationDelay = delay + 's';
                container.appendChild(square);
            }
        }

        createSquares();
    </script>
</body>
</html>
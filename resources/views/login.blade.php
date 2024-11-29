<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f0f2f5;
        }
        .login-container {
            margin: 0 auto;
            padding: 20px;
            max-width: 450px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-container img {
            display: block;
            margin: 0 auto 20px;
            width: 150px;
        }
        .mySlides {
            display: none;
        }
        .slideshow-container {
            max-width: 100%;
            position: relative;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="login-container text-center">
                    <div class="slideshow-container">
                        <div class="mySlides">
                            <img src="images/gambar1.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <img src="images/gambar2.jpg" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <img src="images/gambar3.png" style="width:100%">
                        </div>
                        <div class="mySlides">
                            <img src="images/gambar4.jpg" style="width:100%">
                        </div>
                    </div>

                    <img src="https://ajaib.co.id/wp-content/uploads/2020/09/logo-sidomuncul.png" alt="Company Logo" />

                    <form action="{{ url('/') }}" method="POST">
                        @csrf
                        <!-- PERNER -->
                        <div class="mb-3">
                            <input type="text" class="form-control" id="perner" name="perner" placeholder="Masukkan PERNER" required>
                        </div>
                        <!-- PASSWORD -->
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                        </div>
                        <!-- BUTTON LOGIN -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                        <!-- ERROR MESSAGE -->
                        @if (session('error'))
                            <div class="alert alert-danger mt-3">
                                {{ session('error') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change slide every 3 seconds
        }
    </script>
</body>
</html>

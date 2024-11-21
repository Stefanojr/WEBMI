<section class="vh-100">
    <link rel="stylesheet" href="welcome.css">
    <script src="script.js"></script>
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form id="login-form">
            <!-- Email input -->
            <html>
<head>
    <link rel="stylesheet" href="../../css/login.css">

    <title>Login Page</title>
</head>
<body>

    <div class="login-container" style="text-align: center;">
        <div class="slideshow-container">
            <div class="mySlides">
                <img src="images/gambar1.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides">
                <img src="images/gambar2.jpg" style="width:100%">
                <div class="text"></div>
            </div>

            <div class="mySlides">
                <img src="images/gambar3.png" style="width:100%" height="100%">
                <div class="text"></div>
            </div>

            <div class="mySlides">
                <img src="images/gambar4.jpg" style="width:100%">
                <div class="text"></div>
            </div>

        </div>

        <img src="https://ajaib.co.id/wp-content/uploads/2020/09/logo-sidomuncul.png" alt="Company Logo" style="display: block; margin: 0 auto;"/>

        <input type="text" id="user-id" placeholder="ID" style="display: inline-block; width: 45%; margin-right: 10px ;"/>
        <input type="text" id="username" placeholder="Username" style="display: inline-block; width: 45%;"/>
        <input type="password" id="password" placeholder="Password" style="display: inline-block; width: 100%; margin: 10px 0;"/>
        <button id="login-btn" style="display: inline-block; width: 100%; margin: 10px 0;">Log In</button>
    </div>

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
            if (slideIndex > slides.length) {slideIndex = 1}

            slides[slideIndex - 1].style.display = "block";
            slides[slideIndex - 1].style.animation = "slide 1s forwards"; // Menambahkan animasi slide

            setTimeout(showSlides, 3000); // Ubah slide setiap 3 detik
        }

        const loginBtn = document.getElementById('login-btn');
        const userIdInput = document.getElementById('user-id');
        const usernameInput = document.getElementById('username');
        const passwordInput = document.getElementById('password');

        loginBtn.addEventListener('click', (e) => {
            e.preventDefault();

            const userId = userIdInput.value;
            const username = usernameInput.value;
            const password = passwordInput.value;

            const userRole = authenticateUser(userId, username, password);

            if (userRole) {
                alert('Successful login!');
                switch (userRole) {
                    case 'superadmin':
                        window.location.href = 'superadmin/home';
                        break;
                    case 'unit':
                        window.location.href = 'unit/home2';
                        break;
                    case 'viewer':
                        window.location.href = 'viewer/home3';
                        break;
                    case 'sysadmin':
                        window.location.href = 'sysadmin/home4'; // Halaman untuk sysadmin
                        break;
                    default:
                        alert('Invalid username, ID or password');
                }
            } else {
                alert('Invalid username, ID or password');
            }
        });

        function authenticateUser(userId, username, password) {
            // Pengguna superadmin
            const superadmins = [
                { id: 'superadmin1', username: 'superadmin1', password: 'SA123' },
                { id: 'superadmin2', username: 'superadmin2', password: 'SA456' },
                { id: 'superadmin3', username: 'superadmin3', password: 'SA789' },
                { id: 'superadmin4', username: 'superadmin4', password: 'SA111' },
            ];

            // Pengguna unit
            const units = [
                { id: 'unit1', username: 'unit1', password: 'U123' },
                { id: 'unit2', username: 'unit2', password: 'U444' },
                { id: 'unit3', username: 'unit3', password: 'U789' },
            ];

            // Pengguna viewer
            const viewers = [
                { id: 'viewer1', username: 'viewer1', password: 'V123' },
                { id: 'viewer2', username: 'viewer2', password: 'V888' },
                { id: 'viewer3', username: 'viewer3', password: 'V789' },
            ];

            // Pengguna sysadmin
            const sysadmins = [
                { id: 'sysadmin1', username: 'sysadmin1', password: 'SY1234' },
                { id: 'sysadmin2', username: 'sysadmin2', password: 'SY5678' },
            ];

            // Cekrole superadmin
            for (let admin of superadmins) {
                if (userId === admin.id && username === admin.username && password === admin.password) {
                    return 'superadmin';
                }
            }

            // Cekrole unit
            for (let unit of units) {
                if (userId === unit.id && username === unit.username && password === unit.password) {
                    return 'unit';
                }
            }

            // Cekrole viewer
            for (let viewer of viewers) {
                if (userId === viewer.id && username === viewer.username && password === viewer.password) {
                    return 'viewer';
                }
            }

            // Cekrole sysadmin
            for (let sysadmin of sysadmins) {
                if (userId === sysadmin.id && username === sysadmin.username && password === sysadmin.password) {
                    return 'sysadmin'; // Mengembalikan role sysadmin
                }
            }

            // Jika tidak ada yang cocok
            return null;
        }
    </script>
</body>
</body>
</html>


<html>
 <head>
  <title>
   Unit Page
  </title>
  <link rel="stylesheet" href="../../css/main.css">

  <script>
    function logout() {
        // Redirect ke halaman login
        window.location.href = '/';
    }
     // Fungsi untuk menandai menu yang aktif
     function setActiveMenu() {
            const currentPath = window.location.pathname; // Mendapatkan path saat ini
            const menuItems = document.querySelectorAll('.menu a'); // Mengambil semua item menu

            menuItems.forEach(item => {
                // Jika href dari item menu sama dengan currentPath, tambahkan kelas 'active'
                if (item.getAttribute('href') === currentPath) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });
        }

        // Panggil fungsi setActiveMenu saat halaman dimuat
        window.onload = setActiveMenu;
</script>

    </head>

    <body>
    <div class="sidebar">
    <div class="logo">
    <img alt="Company Logo" height="50" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjRZ2eBIK7J28Q2tzynxNN46eOCuHedxyjmm8MleF0TMQT_7cftWzZVdMEbRRnLFfC4BPtCCJIC3YHMQ2riJ-dYuHSpPFLadgOLqoe082QjKRNAsNKDi6BNt9GNncXb-VQhjszu061LFv6D6mFg6h9bhLlgzyK7I338dD5a9C0tTpYvqodxfSxR0oyYTeBF/w1200-h630-p-k-no-nu/Sidomuncul%20Logo.png" width="150"/>
    </div>
    <div class="menu">
    <a class="active" href="/unit/home2">
     <i class="fas fa-home">
     </i>
     Dashboard
    </a>
    <a href="/unit/pendaftaran2">
    <i class="fas fa-file-alt">
    </i>
    Pendaftaran Improvement
    </a>
    <a href="/unit/timetable">
        <i class="fas fa-calendar"></i>
    Time Table
    </a>
    <a href="/unit/qcdsmpe">
        <i class="fas fa-table"></i>
    Qcdsmpe
    </a>
    <a href="/unit/risalah2">
        <i class="fas fa-file"></i>
    Risalah Improvement
    </a>

    <a href="/unit/approval2">
        <i class="fas fa-check">
         </i>
    Approval Risalah
        </a>

   </div>
   <div class="logout">
    <button onclick="logout()">
        <i class="fas fa-power-off"></i>
        Logout
    </button>
</div>
  </div>
  <div class="content" style="flex-grow: 1;">
    <div class="topbar">
    <h3>Welcome, Department Groups!</h3>

                <div class="profile-icon"></div>

    </i>
   </div>
   <div class="main-content">
    @yield('content')
   </div>
</div>

 </body>
</html>

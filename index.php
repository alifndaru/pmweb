<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio</title>
  <link rel="stylesheet" href="./public/asset/css/main.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  
</head>
<body>
  <div class="container">
      <nav class="wrapper">
        <div class="brand">
          <div class="firstname">alif</div>
          <div class="lastname">kusuma</div>
        </div>
        <ul class="navigation">
          <li><a href="#" class="active">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="/resource/view/Auth.php">Login</a></li>
        </ul>
      </nav>
      
    </div>
    
      <div class="main">
        <div class="sidebar">
          <img src="./public/asset/img/profile.jpeg" alt="">
          <div class="profile">
            <h3>alif ndaru kusuma</h3>
            <h4>alif ndaru</h4>
            <p>Saya adalah manusia setengah dewa <br>saya juga orang-orangan yang ada dimana-mana</p>
            <p><i class="fa-solid fa-location-dot"></i>   jakarta, Indonesia</p>
          </div>  
        </div>
        <div class="content">
         <div>
            <ul class="menu">
              <li>
                <a href="javascrip:void(0)" onclick="openTab(event, 'overview'); return false;"><i class="fa-solid fa-book-open"></i>  overview</a>
              </li>
              <li>
                <a href="javascrip:void(0)" onclick="openTab(event,'project'); return false;"><i class="fa-solid fa-swatchbook"></i> Project</a>
              </li>
              <li>
                <a href="javascrip:void(0)" onclick="openTab(event,'pendidikan'); return false;"> <i class="fa-solid fa-graduation-cap"></i>   Pendidikan</a>
              </li>
              <li>
                <a href="javascrip:void(0)" onclick="openTab(event,'kontak'); return false;"> <i class="fa-solid fa-address-card"></i>   Kontak</a>
              </li>
            </ul>
            <hr>
            <div id="overview" class="overview">
              <h2>Overview</h2>
              <div class="box">
                <p>
                  <a href="https://github.com/alifndaru">
                    <img
                        src="https://github-readme-stats.vercel.app/api/top-langs/?username=alifndaru&show_icons=true&theme=onedark&layout=compact&border_radius=24"
                        alt="alifndaru's most used languange"
                        align="center"
                        height="140"
                    />
                  </a>
                  <a href="https://github.com/alifndaru">
                    <img
                      src="https://github-readme-stats.vercel.app/api?username=alifndaru&show_icons=true&theme=onedark&layout=compact&border_radius=24"
                        alt="Github Stats"
                        align="center"
                        height="140"
                    />
                  </a>
                  <h3>languanges and tools</h3>
                  <p align="left" class="language">
                    <img alt="Visual Studio Code" height="24px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/visual-studio-code/visual-studio-code.png" />
                    <img alt="MySQL" height="24px" style="margin-left: 10px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/mysql/mysql.png" />
                    <img alt="Git" height="24px" style="margin-left: 10px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/git/git.png" />
                    <img alt="Terminal" height="24px" style="margin-left: 10px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/terminal/terminal.png" />
                    <img alt="PHP" height="24px" style="margin-left: 10px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/php/php.png" />
                    <img alt="Python" height="24px" style="margin-left: 10px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/python/python.png" />
                    <img alt="Laravel" height="24px" style="margin-left: 10px" src="https://raw.githubusercontent.com/github/explore/80688e429a7d4ef2fca1e82350fe8e3517d3494d/topics/laravel/laravel.png">
                  </p>
                </p>
              </div>
            </div>
            <div id="project" class="overview" style="display: none;">
              <h2>Project</h2>
              <div class="card">
                <img src="./public/asset/img/porto1.jpeg" style="width:100%" alt="">
                <div class="isiCard">
                  <h4><b>Volunteer Project</b></h4> 
                  <p>Codeigniter 4</p> 
                </div>
              </div>
              <div class="card">
                <img src="./public/asset/img/porto2.jpeg" style="width:100%" alt="">
                <div class="isiCard">
                  <h4><b>Internship Project</b></h4> 
                  <p>Laravel 8</p> 
                </div>
              </div>
              <div class="card">
                <img src="./public/asset/img/porto3.jpeg" style="width:100%" alt="">
                <div class="isiCard">
                  <h4><b>Project Pengaduan Masyarakat</b></h4> 
                  <p>Laravel 8</p> 
                </div>
              </div>
              <div class="card">
                <img src="./public/asset/img/porto4.jpeg" style="width:100%" alt="">
                <div class="isiCard">
                  <h4><b>Project TopUp games Online</b></h4> 
                  <p>Next JS, Typescript</p> 
                </div>
              </div>
            </div>
            <div id="pendidikan" class="overview" style="display: none;">
              <h2>Pendidikan</h2>
              <table>
                <tr>
                  <td><h2>RIWAYAT PENDIDIKAN</h2></td>
                </tr>
                <tr>
                  <td>
                    <li> SMK Kartika X-1</li>
                    <p>Jurusan Teknik komputer dan jaringan</p>
                    <li>Universitas Mercu buana</li>
                    <p>Sistem Informasi</p>
                  </td>
                </tr>
              </table>
            </div>
            <div id="kontak" class="overview" style="display: none;">
              <h2>Kontak</h2>
              <div>
                <ul class="contact">
                  <li>
                    <img src="./asset/img/gmail.png" alt="">
                    <a href="">alifndaru8@gmail.com</a>
                  </li>
                  <li>
                    <img src="./asset/img/instagram.png" alt="">
                    <a href="">alifffxy</a>
                  </li>
                  <li>
                    <img src="./asset/img/linkedin.png" alt="">
                    <a href="">alif ndaru kusuma</a>
                  </li>
                </ul>
              </div>
              <div class="form">
                <form action="App/Http/contactController.php" method="POST">
                  <label for="">Email</label>
                  <input type="email" name="email" require>
                  <label for="">Subject</label>
                  <input type="text" name="subjek" require>
                  <label for="">Isi</label>
                  <textarea name="isi" cols="30" rows="10" require></textarea>
                  <button type="submit" name="submit" class="btn-submit">Submit</button>
                </form>
              </div>
            </div>
         </div>
        </div>
    </div>
    <div class="footer">
      <h2>Alif ndaru kusuma @2022</h2>
    </div>
    <script>
      function openTab(evt,judul) {
        var i,x,tablinks;
        x = document.getElementsByClassName("overview");
        for(i = 0; i<x.length; i++){
          x[i].style.display = "none";
        }
        document.getElementById(judul).style.display = "block";
        evt.currentTarget.firstElementChild.className += "";
      }
    </script>

    <script src="https://kit.fontawesome.com/31aa38886d.js" crossorigin="anonymous"></script>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <div class="form">
      <form action="contactController.php" method="POST">
        <label for="">Email</label>
        <input type="email" name="email" require>
        <label for="">Subject</label>
        <input type="text" name="subjek" require>
        <label for="">Isi</label>
        <textarea name="isi" cols="30" rows="10" require></textarea>
        <button type="submit" name="submit" class="btn-submit">Submit</button>
      </form>
    </div>
</body>
</html> -->
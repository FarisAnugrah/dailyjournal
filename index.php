<?php
include "connection.php"; 
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disney+Hotstar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png" />
  </head>
  <body>
    <h1>Disney+Hotstar</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="Disney.png" width="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
             
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article  ">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#schedule">Schedule</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutme">About me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-success" href="login.php" target="_blank">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn btn-primary" href="logout.php">Log Out</a>
              </li>
              <li id="tombol">
                <button id="hitam" class="btn btn-info bg-dark"><i class="bi bi-moon-fill "></i></button>
              </li>
              <li id="putih">
                <button id="putih" class="btn btn-info bg-danger"><i class="bi bi-brightness-high-fill "></i></button>
              </li>
              
              
            </ul>
           
          </div>
        </div>
      </nav>    
     <!-- nav end -->

     <!-- hero begin -->
      <section id="hero" class="hero text-center p-5 bg-danger-subtle text-sm-start">
        <div class="container">
          <div class="d-sm-flex flex-sm-row-reverse align-items-center">
            <img src="aladin home1.jpg" class="img-fluid" width="600">
            <div>
              <h1 class="fw-bold display-4">Now streaming on Disney+Hotstar</h1>
              <h4 class="lead display-6">Something for everyone</h4>
              <h6>
                <span id="tanggal"></span>
                <span id="jam"></span>
              </h6>
            </div>
          </div>
        </div>

      </section>
      <!-- hero end -->

      <!-- article begin -->
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

      <section id="article" class="article text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
              <div class="col">
                <div class="card h-100">
                  <img src="img/article/alien.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Kingdom of the Planet of the Apes</h5>
                    <p class="card-text">Disutradarai oleh Wes Ball yang memberikan nuansa baru ke dalam franchise ini, “Kingdom of the Planet of the Apes” akan mengangkat latar beberapa generasi di masa depan setelah pemerintahan Caesar, di mana kera adalah spesies dominan yang hidup secara harmonis dan manusia terpaksa hidup dalam bayang-bayang.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="img/article/deadpool.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Deadpool & Wolverine</h5>
                    <p class="card-text">Marvel Studios’ “Deadpool & Wolverine” akan menghadirkan kisah sinematik paling epik dan ikonis di bioskop-bioskop Indonesia pada Juli 2024 mendatang. </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="img/article/omen.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">The First Omen</h5>
                    <p class="card-text">Ketika seorang wanita muda dari Amerika dikirim ke Roma untuk memulai perjalanannya dan berbakti pada gereja, ia justru dihadapkan pada sebuah kegelapan yang membuat ia mempertanyakan kembali imannya dan mengungkap sebuah konspirasi tentang kelahiran kembali iblis ke dunia.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="img/article/avatar.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Avatar: The Way of Water</h5>
                    <p class="card-text">Terjadi lebih dari satu dekade dari film pertama, <i>Avatar: The Way of Water</i> menceritakan tentang keluarga Sully, masalah yang mengikuti, kerelaan mereka menjaga satu sama lain tetap aman, pertempuran yang mereka lakukan untuk bertahan hidup, dan tragedi yang terjadi.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="img/article/alien.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Alien: Romulus</h5>
                    <p class="card-text">Film sci-fi horror-thriller ini akan membawa waralaba terkenal dan fenomenal “Alien" kembali ke akarnya, di mana sekelompok penjajah luar angkasa bertemu dengan bentuk kehidupan paling menakutkan di alam semesta ketika mereka menjelajahi sebuah stasiun luar angkasa tua.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                  </div>
                </div>
              </div>
            </div> 
        </div>
      </section>

      <!-- article end -->
            
      <!-- schedule begin -->
      <section id="schedule" class="schedule text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4">schedule</h1>
            <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-evenly">
              <div class="col">
              <div class="card w-100">
                <div class="card-header bg-danger">
                  Senin
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">09.00 - 10.30
                  </li>
                  <li class="list-group-item">11.00-12.30
                  </li>
                  </li>
                  <li class="list-group-item">13.00-14.30
                  </li>
                  </li>
                  <li class="list-group-item">15.00-16.30
                  </li>
                </ul>
              </div>
            </div>

            <div class="col">
              <div class="card w-100">
                <div class="card-header bg-danger">
                  Selasa
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">09.00 - 10.30
                  </li>
                  <li class="list-group-item">11.00-12.30
                  </li>
                  </li>
                  <li class="list-group-item">13.00-14.30
                  </li>
                  </li>
                  <li class="list-group-item">15.00-16.30
                  </li>
                </ul>
              </div>
            </div>

            <div class="col">
              <div class="card w-100">
                <div class="card-header bg-danger">
                  Rabu
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">09.00 - 10.30
                  </li>
                  <li class="list-group-item">11.00-12.30
                  </li>
                  </li>
                  <li class="list-group-item">13.00-14.30
                  </li>
                  </li>
                  <li class="list-group-item">15.00-16.30
                  </li>
                </ul>
              </div>
            </div>
            
            <div class="col">
              <div class="card w-100">
                <div class="card-header bg-danger">
                  Kamis
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">09.00 - 10.30
                  </li>
                  <li class="list-group-item">11.00-12.30
                  </li>
                  </li>
                  <li class="list-group-item">13.00-14.30
                  </li>
                  </li>
                  <li class="list-group-item">15.00-16.30
                  </li>
                </ul>
              </div>
            </div>

            <div class="col">
              <div class="card w-100">
                <div class="card-header bg-danger">
                  Jumat
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">09.00 - 10.30
                  </li>
                  <li class="list-group-item">11.00-12.30
                  </li>
                  </li>
                  <li class="list-group-item">13.00-14.30
                  </li>
                  </li>
                  <li class="list-group-item">15.00-16.30
                  </li>
                </ul>
              </div>
            </div>
            
            <div class="col">
              <div class="card w-100">
                <div class="card-header bg-danger">
                  Sabtu
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">09.00 - 10.30
                  </li>
                  <li class="list-group-item">11.00-12.30
                  </li>
                  </li>
                  <li class="list-group-item">13.00-14.30
                  </li>
                  </li>
                  <li class="list-group-item">15.00-16.30
                  </li>
                </ul>
              </div>
            </div>

            </div>
        </div>
      </section>
      <!-- schedule end -->

      <!-- about me begin -->

      <section id="aboutme" class="hero text-center p-4 bg-danger-subtle text-sm-start">
        <h1 class="fw-bold display-5 text-center">About me</h1>
        <div class="container">
          <div class="d-sm-flex flex-sm-reverse justify-content-center">
            
            <img src="data:image/webp;base64,UklGRmoNAABXRUJQVlA4IF4NAACwNwCdASrCAIQAPqVOoEumJCMvKDXqeeAUiWMG+Oc0AmdOOxbHPeQzbViqCBStWReV4p336COyfgBO97Q6/vwn49PAQ9U9A/rD/6nlC/a/9502Xsf/Zz2lP2jMxFu2bHZ6Jh285m4JMh5Ns4jbtN2vvAZmWs7egOcCo3njbIACc21Dy+mQ81HdAx0uvS9arE+CZTw0PZeDBN8BV3M2nt8KlgZ0UfIpUnaUau7FdG7NKj/kE/naAO1y648w3jUXtMn2noSEKmrJvyiyq4BeS49iaovPKDepxxb4v0PhlbjSWDKL7CqutBSpBxj6bUFvQ8eJ+r2su7YTrA3QgruXHaXdrX9mSJfzfDSOaHH0NsSncAtr84PSOi2vTde/3vvDJczAlbw/H11jJWOuayk5BAC6SNZM4BY7D6XKe4z2odYuqUNLecoPyDihWHBedjbRn2PJP1VMF9Gw7k36sFStJBj83E4nPscGxW5JRlQ/Obo6fanpA9YW2Esos0FamJpowHNs/cUinx20qDzRbBIlb4eY0In8OJV0ijmf7OwQ9NryVausiCXRSJbMSVk95nnNyFsz6esHUgmgdeXu70KIhe6PeMqDG3AAAP7zt44U9JkjnvLgf+/rS30t0/9dGxqcRQ5DeSU7N0TPFKRfeTkuuF16maVJd9bNbABl/I/ixSh+7vmDw/X2q4gxAIFVBoM5kFNK6+Xpy+le39J4IIjhPCm92UdeHVnyqIbpA2afuOf0khIlhYLlUQi0nvXS93y5EsbbMNHK6eBCKakkNvWqSbu/BxUIRY3CsQQhSHAhZYFpOgCdjBnFVZ93Ck6ZO5XyD6zziTzzDnM9gk9u+1oMgg2NqipqkxCBfoukgUj/xj3YqS+4O9BD5r7ZfjqwHW295f/KFJ5D/bUnflO1lwV50MTjEdU5cyWNzr2nXv9kNFDyaAFXXovNvsf3SjgUjYQK2iLh2f+k4iW7blX7kyb/8emY7/yOpzMtiIfQR2KcZrpYyb1f8rYIaP9GhRTy3vTrMOUe6+GZlMNgA/FgQx4WwbQeEpuM9uUgLWtCn373ovddrIrr/nnYRe79Y5rLvUoDTB4344ZFDLs9yMg2TzWSg1t+kUiL1bPOmtBR4o4eOEQe5TyuJHm3LNU9WFGeh95wmKa0e+Ph3UMhVWgW/hg4qKQqOlbHmu924v3KeiZHuDeMLTwnSA5UdA/wBLxp+u3Y2X1icwLvTPna8w46tZF+w6UZnKVgrKlc1XbkJg2YGOI1nItS65GfUbMdoDB5f/VAUyV3MfsbtFeDpbaODjo+ab/Egi9g1MgUMMoQTTdxYMZLEA6S9QPzCgRnVRgHLdrzSeRn4+UVcDhUITgB9PU9wbXcD1OcRGPiKHjpurhvPyoPZGo7lge02mVGnIMB2HzAMNYY0f0qoJ1k2PTuxMSpzvO7GgB8oWO+lrhmxHEyUUSEHuENxZLscyx+4eeb6yaWhLiXP5BncdXQNdUyJ7lGUbbs/+1bmcuL075uFgoA9//aSKgyqbpy+QZym0Ptkg71+VOsa82Nt5Rj0plhssGyvolrnJW5kSTKpeyqg/O8nRKnmQS/ZE7oQXklMp9CRuiJPTmttfwwHae89wkca86KwRCy9Y5QcLL9cW9J4xWXh0uIcQweCbQOyLNzah0CSkOsc34BNF6xkMGZNzfrA5HI974h1vMLaYNM90/GBMWgrthL8zK69PZoft4sIlFOsC0IWd1dNqIHzBtY0Ctk4D5B8YqLMD4nIoxAfSPW5tyNAkYnT9KnHlT+r1xT0vIYI6jRMuNFOJm5fEdOmnJKyMKVR4XydNvJB7XHKJGY9AF4tzsRbyolfpIIFUcKQHnjNBAZuUrh83qgJbCrgQXcwpDOylnXOIfLMZNXZj5w3MmG6QLsycgS4BecvrI3Av+8m3i9mnjHbdN1V13ZNhyI9xTsqp6nQinyBHdiRQReBxUilhO5uQFhzM0PKhMpUKNjeU3XhfjOAJVfW5Psm6r1FGapJ+Ql7M52oo/bgAvf/9Hv0ll3U3HFFFvP34WLxDNPilAskUAJRA4T6ifLCXeeIsnSA1BUM5bk6V0RnTjNnX8jDxcoP3F4+AordGrgF4HKPvksGb4S8nxNQc1dsb1YRpK1Bss3LvgQyR3G1wBOh47ymWHXDH8hn7C95tFiAWUajbHLCBDRHAg8JUsvaaPNpRtquqlDBRaB8zAoJwaPyJeazUfb78Lchbj5UhA+4nKTI4Pv0pQoT0EwoCyZBTATlPNybMyBwo9iUqmDRX0PEUEw1JZDKjhX1iISjPgKz2Gq323vD3tEcnqXXQDQpANZpIxH1ysxW5fO60Ff+cqZr6jfKXjjQow8Gi5+LQMV5QJzJh7l/5D1MyvyDDrLrZECIE3cjpP+RfDvaxwmgYpKuScwWsUNSyjOkFsPFmc5K40IOZblNdcOztlHfWLThqGVI2YwW8u8naMq34Fv5O8jFyssPh0UWhb5McOXPWp4ELvFthBtFDhAJvhP/rHENW/7NHlNo33xT2UqoSvaijVlYfUUx1UZ1lITm4puxVyU1TIbOBJKBsna/XwSjfzrIAX2d1Y0Yp11o6YKVx3T6/AHYbJYwOrs+aL3TLSzBvTNthR98pma/N9HnlXE8fnRzJrCNipwjpU+cT4bRmSS54oEi0IJbbbVtGcbbdym+2LaHpmDz3Oly7oEfGVV5W4Wkoc/z/6xRM4qN3JAgDd7ER+ALSfpbgNxxY7qT4W6J4JhQJ78B4BBLXnDsQ7oqENf+CStkdIgmFlo1nS3lLmLq/x/2CgvY7DK7UrrS1fV+D5JfWbmHzbCahv7rHyuQfruJQwhp2/1QUjYhJf2r5tiL8srDQqckfMVce7R8FKgC0uyLC4D65T8BqRolf1kO2YeUrUscr9g83VxxlcWL7gOH06l/2o8wiaxzMKFueNzC8xTzK2swqnKe7FK0gMF+aLqEJZSiJiFR9NozD2JUarv+8k01DUh5HjsdNghN+OGluetg8kAq0G+MppCHWridN6g6XnUP48MK0T4go4hcM5YIFJ19rdCavedLiB94O53sgOk9lq/jYYzNE/C3AnTJJuQMuMO+CRJIucdJJsOu7VWa3z5M+1XVTVbwVdc0L+hagK1MbJEw6CJyZqbN37UGzsTsGraceXrIPk54k/b9b4sIIMsf2lNIdgriUC7iImpwRFwFXujC14hI4NwGZYJhJfoqnDEpql/g67vXZZHF5IDmrlotp/nnYZPvUYkJxnoMY88ihe2/oBuAjG+0Qx8wHHJrBSF+8Iz0ztR/DRHSJSJ+trI2ZVdTnQpuTGGo/y8OcOD4WY+pmCLagAYMU7/aJdmNPwByZDm5Qsp0qH3y2lDm7JMeLizYzfl02Ga0LVpjWacIVW5kky7YB244tmG2D4V8quc3spPgVcZx0qosLYpQgDNtlnQ0NYR4nRHpSsVm9DzqFGGZjqN4TVGyha03wzUYl57bs9W4PwljvhxSlfmt7tKIFzHIAVlvZBumaIyEAKy9sExd0Z5nTkMrDTAPTsYCKVEWj7K1s8ALCO+1B1cRKbv/Xw2DKnfbrlcfcxS+KkIOxpTREbBQXas2rTvLHnV67+7NlFEuV6fUv6EWhSNxyl4rcosX3nnER+PvryORvfDmYeMm4YV6COe+3Rgl6eV8rh6WEboauZarmIIPVH2vcEa1xqNhdwSsZlP8uE8FBSb6wgEdhN3scLGoe/cut0Nk2gQwBJrnFOr3gkg9vozvILVIqkQyySea/MfCyf8iCJu+brw8rp3kB+Wsp/ka2OS3Zt+t7PRTDszlQJ+jOo7P71LNZm4qRfKbe3ppLJlMcu+w24I1ZhHELeCK17fK1ff4cJ4ltJTrJSj9c6peMvMSGpkwE7fUfa/WywsnCAewnSwL0tHKvGtJC00YfAc8kp2fc1uqCxAplzOP+RbKCzqXYBT1Tf8O9TRNON7n+dx/vIPkDA/oGrika1yylBhxsFfHUWAmr6xbijzkOfUe0u2pCHZWkApFgk67g6Lq1cOw7zqEkiU1mZPGyWxOdx1y+P+a69DkAoTDyVkMxmdINVN8AMcUG0y9JZBtx0/gW+h/jEEBaN09Et4Vxl1/11/vX5TbSDbs+u3zW+mFggqIQFN1wmlsE7Orzu/jk+sZoVAx24A+1j4uwiqf+mvSgBlqe5e4QTHuK+6vHog2TiS1exG6pTTe8nteqksLITAPtsRczgaRXQyfnz8lLt7p16JhJ2yPxgEXHphUDOUeDqdJCqK5VHux3pHG1SVExvlQu/+hOZNbryFOsRyRAUbIZxqzx4AWyyyFx5BzubBwBSbAitrvUtZ0ILUZ0UI0qm4uAvQW2ksR9qG79/0vCDCSoMVj1q0CXxQ+26d7FERsGd3G1E9UNA4qCBhI2WuVtdkYMC9rSpiZepbwwtXPGAnhAVuyJQxUuX+d6DSBd2vjR/mB/vQaDFKC1lVkGIWZ+NtzvwUaQEzfQJDBjr6ZhIkv0M8Bs/fSFLRNJu+WG6MOwm+ND4wmDuntv02Ljf6vOR0iAkr99fCXGkpuEQAWPm5dnXx4h/snOPUCGQAAA==" class="aladin img-fluid me-2 rounded-circle" width="400">
            <div class="isiabout">
              <h6>A11.2023.15130</h6>
              <h1 class="fw-bold display-5">Faris Anugrah</h1>
              <h5>Program Studi Teknik Informatika</h5>
              <h6>
               Universitas Dian Nuswantoro
              </h6>
            </div>
          </div>
        </div>

  
        <footer class="footer text-center p-5">
          <div>
           <a href="https://www.instagram.com/disneyplushotstarid/" class="icon h2 p-2 text-dark"><i class="bi bi-instagram"></i></a> 
            <a href="https://wa.me/089531649707" class="h2 p-2 text-dark"><i class="icon bi bi-whatsapp"></i></a>
            <a href="https://x.com/DisneyPlusHS?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="icon h2 p-2 text-dark"><i class="bi bi-twitter-x"></i></a>
          </div>

          <div>
            Faris Anugrah &copy; 2024
          </div>
        </footer>


      </section>

      <br>

      <!-- gallery begin -->
       <section id="gallery" class="hero text-center p-5 bg-danger-subtle" >
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">gallery</h1>
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/gallery/deadpool.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/gallery/alien.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/gallery/avatar.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/gallery/omen.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/gallery/apes.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>
       </section>
       <!-- gallery end -->

       <!-- footer begin -->
        <footer class="footer text-center p-5">
          <div>
           <a href="https://www.instagram.com/disneyplushotstarid/" class="icon h2 p-2 text-dark"><i class="bi bi-instagram"></i></a> 
            <a href="https://wa.me/089531649707" class="h2 p-2 text-dark"><i class="icon bi bi-whatsapp"></i></a>
            <a href="https://x.com/DisneyPlusHS?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="icon h2 p-2 text-dark"><i class="bi bi-twitter-x"></i></a>
          </div>

          <div>
            Faris Anugrah &copy; 2024
          </div>
        </footer>

        <!-- footer end -->
          <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
          </script>

          <script type="text/javascript">
            window.setTimeout("tampilWaktu()",1000);

            function tampilWaktu(){
              var waktu = new Date();
              var bulan =waktu.getMonth() + 1;

              setTimeout("tampilWaktu()",1000);
              document.getElementById("tanggal").innerHTML = 
              waktu.getDate () + "/" + bulan + "/" + waktu .getFullYear();
              document.getElementById("jam").innerHTML =
              waktu.getHours () + 
              ":" +
              waktu.getMinutes() +
              ":" +
              waktu.getSeconds();
            }
            
            document.getElementById("hitam").onclick=function () {
              document.body.classList.add("bg-dark");
              document.body.classList.add("text-light");
              document.body.classList.remove("bg-light");
              document.body.classList.remove("text-dark");
              const hero=document.getElementsByClassName("hero");
              for (i=0;i<hero.length;i++ ) {
                hero[i].classList.remove("bg-danger-subtle")
                hero[i].classList.remove("text-dark")
                hero[i].classList.add("bg-dark")
                hero[i].classList.add("text-light")
            }

              const navbar=document.getElementsByClassName("navbar");
              for (i = 0;i<navbar.length;i++ ) {
                navbar[i].classList.remove("bg-info")
                navbar[i].classList.remove("text-dark")
                navbar[i].classList.add("bg-secondary")
                navbar[i].classList.add("text-light")
              }
              
              const article=document.getElementsByClassName("article");
              for (i=0;i<article.length;i++) {
              article[i].classList.remove("bg-light");
              article[i].classList.remove("text-dark");
              article[i].classList.remove("border-dark");
              article[i].classList.add("bg-dark");
              article[i].classList.add("text-light");
              article[i].classList.add("border-light");
                
              }

              const icon=document.getElementsByClassName("icon");
              for (i=0;i<icon.length;i++) {
              icon[i].classList.remove("text-dark");
              icon[i].classList.add("text-light");
                
              }

              const aboutme=document.getElementsByClassName("aboutme");
              for (i=0;i<aboutme.length;i++ ) {
                hero[i].classList.remove("bg-danger-subtle")
                hero[i].classList.remove("text-dark")
                hero[i].classList.add("bg-dark")
                hero[i].classList.add("text-light")
            }
              
  
              document.getElementById("putih").onclick=function () {
              document.body.classList.remove("bg-dark");
              document.body.classList.remove("text-light");
              document.body.classList.add("bg-light");
              document.body.classList.add("text-dark");
              
              
              const navbar=document.getElementsByClassName("navbar");
              for (i = 0;i<navbar.length;i++ ) {
                navbar[i].classList.remove("bg-secondary");
                navbar[i].classList.remove("text-light");
                navbar[i].classList.add("bg-light");
                navbar[i].classList.add("text-dark");

              }
              const hero=document.getElementsByClassName("hero");
              for (i=0;i<hero.length;i++ ) {
                hero[i].classList.remove("bg-dark");
                hero[i].classList.remove("text-light");
                hero[i].classList.add("bg-danger-subtle");
                hero[i].classList.add("text-dark");
            }

            const article=document.getElementsByClassName("article");
              for (i=0;i<article.length;i++) {
              article[i].classList.remove("bg-dark");
              article[i].classList.remove("text-light");
              article[i].classList.remove("border-light");
              article[i].classList.add("bg-light");
              article[i].classList.add("text-dark");
              article[i].classList.add("border-dark");
                
              }

              const icon=document.getElementsByClassName("icon");
              for (i=0;i<icon.length;i++) {
              icon[i].classList.remove("text-light");
              icon[i].classList.add("text-dark");
                
              }

          }
          }

          // Function to toggle visibility of isiAbout text when the image is clicked
        document.querySelector("#aboutme").onclick = function() {
        const isiAboutText = document.querySelector(".isiabout");
        isiAboutText.style.display = isiAboutText.style.display === "none" ? "block" : "none";
        };
          </script>

          
  </body>
</html>
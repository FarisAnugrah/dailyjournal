<?php
session_start();
include "connection.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$message = "";

// Proses Update Profil
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_profile'])) {
        $new_password = $_POST['password'];
        $file_name = $_FILES['foto']['name'];
        $foto_lama = $_POST['foto_lama'];
        $foto = $foto_lama;

        if (!empty($file_name)) {
            $file_tmp = $_FILES['foto']['tmp_name'];
            $file_dest = "img/" . basename($file_name);

            if (move_uploaded_file($file_tmp, $file_dest)) {
                if (!empty($foto_lama) && file_exists("img/" . $foto_lama)) {
                    unlink("img/" . $foto_lama);
                }

                $foto = $file_name;
            } else {
                $message = "Gagal mengunggah foto.";
            }
        }

        if (!empty($new_password)) {
            $hashed_password = md5($new_password);
            $stmt = $conn->prepare("UPDATE user SET password = ?, foto = ? WHERE username = ?");
            $stmt->bind_param("sss", $hashed_password, $foto, $username);
        } else {
            $stmt = $conn->prepare("UPDATE user SET foto = ? WHERE username = ?");
            $stmt->bind_param("ss", $foto, $username);
        }

        if ($stmt->execute()) {
            $message = "Profil berhasil diperbarui.";
        } else {
            $message = "Terjadi kesalahan.";
        }

        $stmt->close();
    }
}

// Fetch User Data
$stmt = $conn->prepare("SELECT foto FROM user WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        html {
            position: relative;
            min-height: 100%;
        }

        body {
            margin-bottom: 100px;
            /* Margin bottom by footer height */
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            /* Set the fixed height of the footer here */
        }
    </style>
</head>

<body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top bg-danger-subtle">

        <div class="container">

            <a class="navbar-brand" href="">My Daily Journal</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HomePage</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-danger fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['username'] ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile.php">Profile</a></li> <!-- Link ke halaman profil -->
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->
    <div class="container mt-4">
        <h2 class="mb-4">Profil</h2>
        <hr class="bg-danger-subtle">

        <?php if (!empty($message)): ?>
            <div class="alert alert-info"><?= $message ?></div>
        <?php endif; ?>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="password" class="form-label">Ganti Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Tuliskan Password Baru Jika Ingin Mengganti Password Saja">
                    </div>
                    <label for="foto" class="form-label">Ganti Foto Profil</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                    <label for="foto" class="form-label">Foto Profil Saat Ini</label>
                    <br>
                    <?php if (!empty($user['foto'])): ?>
                        <img src="img/<?= $user['foto'] ?>" alt="Foto Profil" class="img-thumbnail mt-2" width="150">
                        <input type="hidden" name="foto_lama" value="<?= $user['foto'] ?>">
                    <?php endif; ?>
                </div>

                <button type="submit" name="update_profile" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>



    <footer class="text-center p-2 bg-danger-subtle">
        <div>
            <a href="https://www.instagram.com/udinusofficial"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
            <a href="https://twitter.com/udinusofficial"><i class="bi bi-twitter h2 p-2 text-dark"></i></a>
            <a href="https://wa.me/+62812685577"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        </div>
        <div>Faris Anugrah &copy; 2023</div>
    </footer>
    <!-- footer end -->

    <script>
        $(document).ready(function() {
            load_data();

            function load_data() {
                $.ajax({
                    url: "gallery_data.php",
                    method: "POST",
                    success: function(data) {
                        $('#gallery_data').html(data);
                    }
                });
            }


        });

        src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin = "anonymous"
    </script>
</body>

</html>
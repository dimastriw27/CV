<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css">
  <script src="script.js"></script>
  <title>Curriculum Vitae</title>
</head>

<body class="p-3">
  <nav class="navbar bg-body-tertiary biru sticky-top ">
    <div class="container-fluid">
      <h1>Curriculum Vitae</h1>
      <a class="navbar-brand" href="admin.php">Update</a>
    </div>
  </nav>
  <div class="card">
    <div class="p-5">
      <img src="<?php echo $data['foto_path']; ?>" class="rounded float-right h-100 " alt="Responsive image">
      <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header bg-black">Nama</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['nama']; ?></h5>
        </div>
        <div class="card-header bg-black">Alamat</div>
        <div class="card-body">
        <h5 class="card-title"><?php echo $data['alamat']; ?></h5>
        </div>
        <div class="card-header bg-black">Telepon</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['telepon']; ?></h5>
        </div>
        <div class="card-header bg-black">Email</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['email']; ?></h5>
        </div>
        <div class="card-header bg-black">Web</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['web']; ?></h5>
        </div>
        <div class="card-header bg-black">Pendidikan</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['pendidikan']; ?></h5>
        </div>
        <div class="card-header bg-black">Pengalaman</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['pengalaman_kerja']; ?></h5>
        </div>
        <div class="card-header bg-black">Keterampilan</div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['keterampilan']; ?></h5>
        </div>
      </div>
    </div>
  </div>
  <!-- Tampilkan komentar -->
  <nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h1>Komentar</h1>
    </div>
  </nav>
  <div class="card">
    <div class="p-3">
      <div id="comments" class="pb-3">
        <?php
        include 'config.php';

        $cvId = 1; 
        $query = "SELECT * FROM comments WHERE cv_id = $cvId";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
          while ($comment = mysqli_fetch_assoc($result)) {
            echo '<div class="comment">' . $comment['comment_text'] . '</div>';
          }
        } else {
          echo 'Belum ada komentar.';
        }

        mysqli_close($conn);
        ?>
      </div>
      <label for="commentInput" class="form-label pt-2 pb-2">Tambahkan Komentar</label>
      <div class="pb-3">
      <textarea class="form-control pb-3" id="commentInput" name="comment" rows="3" placeholder="Tambahkan komentar..."></textarea>
      </div>
      <button class="btn btn-secondary pt-2" onclick="addComment()">Tambah Komentar</button>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
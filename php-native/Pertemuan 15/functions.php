<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($data) {
    global $conn;
    // ambil data tiap element dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    // $gambar = htmlspecialchars($data["gambar"]);

    $gambar = upload();
    if (!$gambar ) {
        return false;
    }

     // query insert data
     $query = "INSERT INTO siswa
     VALUES ('', '$nama', '$nis', '$email', '$jurusan', '$gambar' )
     ";
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// function ubah($data)
// {
//     global $conn;
//     // ambil data tiap elemen dalam form
//     $id = $data["id"];
//     $nama = htmlspecialchars($data["nama"]);
//     $nis = htmlspecialchars($data["nis"]);
//     $email = htmlspecialchars($data["email"]);
//     $jurusan = htmlspecialchars($data["jurusan"]);
//     $gambarLama = htmlspecialchars($data["gambarLama"]);

//     // cek apakah user mengubah gambar baru atau tidak
//     if ($_FILES["gambar"]["error"] === 4) {
//         $gambar =$gambarLama;
//     } else {
//         $gambar = htmlspecialchars($data["gambar"]);
//     }
    
//     // query update data
//     $query = "UPDATE siswa SET 
//                 nama = '$nama',
//                 nis = '$nis',
//                 email = '$email',
//                 jurusan = '$jurusan',
//                 gambar = '$gambar'
//             WHERE id = $id";

//     mysqli_query($conn, $query);

//     return mysqli_affected_rows($conn);
// }

function ubah($data)
{
    global $conn;
    
    // Ambil data tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // check
    if($_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    // $gambar = htmlspecialchars($data["gambar"]);
    
    // Query update data
    $query = "UPDATE siswa SET 
                nama = '$nama',
                nis = '$nis',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// function upload() {
//     $namaFile = $_FILES["gambar"]["name"];
//     $ukuranFile = $_FILES["gambar"]["size"];
//     $error = $_FILES["gambar"]["error"];
//     $tmpName = $_FILES["gambar"]["tmp_name"];

//     // alert jika gambar belum diupload

//     if ($error === 4) {
//         echo "<script>
//             alert('pilih gambar terlebih dahulu!');
//         </script>";

//         return false;
//     }

//     // cek apakah file yang diupload adalah gambar
//     $ekstensiGambarValid = ["jpg", "jpeg", "png"];
//     $ekstensiGambar = explode(".", $namaFile);
//     $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
//         echo "<script>
//             alert('yang anda upload bukan gambar');
//         </script>";

//         return false;
//     }

//     // cek jika ukuran gambar terlalu besar

//     if ($ukuranFile > 1000000) {
//         echo "<script>
//             alert('ukuran gambar terlalu besar');
//         </script>";

//         return false;
//     }

//     // generate nama gambar
//     $namaFileBaru = uniqid();
//     $namaFileBaru .= '.';
//     $namaFileBaru .= $ekstensiGambar;

//     // gambar siap diupload

//     move_uploaded_file($tmpName, "img/" . $namaFileBaru);

//     return $namaFileBaru;

// }

function upload() {
    $fileName = $_FILES['gambar']['name'];
    $fileSize = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // check
    if($error === 4) {
        echo "<script>
                alert('Anda Tidak Menambahkan Gambar');
             </script>";
        return false;
    }

        // check
    $extensionValidImage = ['jpg', 'jpeg', 'png', 'webp'];
    $extensionImage = explode('.', $fileName);
    $extensionImage = strtolower(end($extensionImage));

    if(!in_array($extensionImage, $extensionValidImage)) {
        echo "<script>
            alert('Yang Anda Upload Bukan Gambar');
        </script>";
        return false;
    }

    // check[size]
    if($fileSize > 5000000 ) {
        echo "<script>
            alert('Size Gambar Terlalu Besar');
        </script>";
    return false;
    }

    //Generate New Name
    $newFileName = uniqid();
    $newFileName .= '.';
    $newFileName .= $extensionImage;

    // Ready to Upload
    move_uploaded_file($tmpName, '../pertemuan 15/img/' .$newFileName);
    return $newFileName;

}

function cari($keyword) {
    $query = "SELECT * FROM siswa WHERE
                nama LIKE '%$keyword%' OR
                nis LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '$keyword%'
        ";

    return query($query);
}

function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // Cek apakah username sudah terdaftar
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_num_rows($result) > 0) {
        echo "<script>
            alert('Username sudah terdaftar!');
        </script>";

        return false;
    }

    if ($password !== $password2) {
        echo "<script>
            alert('Konfirmasi password tidak sesuai');
        </script>";

        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan user baru ke database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>
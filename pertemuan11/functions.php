<?php 

// connect database 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// semua mekanisme query/mengambil data ada didalam function
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    // menyiapkan wadah kosong untuk untuk mengmbil data
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) { //mysqli_fetch_assoc mengambil data dalam bentuk array asosiatif
        $rows [] = $row;
    }
    return $rows;
}


//function tambah data
function tambah($data) {
    global $conn;

     // 3. ambil data dari tiap element kedalam form (menyiapkan data dari tiap element kedalam tiap tiap variabel)
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

     //4. query insert data (mmeyiapkan query datanya kedalam variabel query)
    //urutan harus sesuai dengan tabel database
    $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar' )";

     // 5. ambil/query data, dari data yang diinputkan kedalam database
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//function hapus
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id ");

    return mysqli_affected_rows($conn);
}

// function update
function update($data) {
    global $conn;
    $id =  $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

   $query = "UPDATE mahasiswa SET nama='$nama', nrp='$nrp', email='$email', jurusan='$jurusan', gambar='$gambar' WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);   
    
    
}



 


?>



<?php
// Set Header agar dikembalikan sebagai JSON
Header('content-type: application/json; charset=utf-8');

require_once 'koneksi.php';

try{
    //Ambil data dari database
    $stmt = $pdo->query("SELECT id,nama_alat,jumlah,kondisi FROM alat-lab");
    $data = $stmt->fetcAll();

    //Response HTTP 200 OK
    http_response_code(200);
    echo json_encode([
        'status' => 'succes',
        'code'   => 200,
        'message'=> 'Data alat lab berhasil diambil',
        'data'   => $data
    ], JSON_PRETTY_PRINT);

} catch (exception $e) {
    // Response HTTP 500 Internal Server Error jika dattabase error
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'code'   => 500,
        'message'=> 'terjadi kesalahan pada server database',
        'erroe'  => $e->getMessage()
    ], JSON_PRETTY_PRINT);
}
>?
<?php 
include('koneksi.php'); // panggil koneksi

$response = array();
$email = $_POST['email'];  // deklarasi vaaribale dari kiriman form
$password = $_POST['password']; // deklarasi variable data kiriman form

$sql = $conn->query("SELECT * FROM login WHERE email = '$email' AND password = '$password'"); // perintah  sql menjalankan pengecekan

if($sql->num_rows > 0){ // logika check jika ditemukan email dan password yang sama dgn yang ada di database 
	
	session_start(); // perintahkan browser untuk mengingat sesi yang di masukan user (email)
	$data = $sql->fetch_array();  // value dari sesi email sesuikan dengan yang  ada  di database
	
	$_SESSION['email'] = $data['email'];// perintah untuk membuat sesi email 

	$response = array('status' => 'valid', 'message' => 'Sukses...', 'direction' => 'administrator');
	// perintah jika sesi sudah dibuat (sukses login) arahkan ke folder administrator

}else{ // kemungkinan lain artinya jika tidak ada data ditemukan
	
	$response = array('status' => 'invalid', 'message' => 'Error: Invalid email and password', 'direction' => './');	
}
echo json_encode($response);
?>
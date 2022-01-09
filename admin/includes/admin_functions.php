<?php 
// Admin korisnik varijable
$admin_id = 0;
$isEditingUser = false;
$username = "";
$role = "";
$email = "";
// generalne varijable
$errors = [];

// Varijable Teme
$topic_id = 0;
$isEditingTopic = false;
$topic_name = "";



/* - - - - - - - - - - 
-  Admin-korisnik akcije
- - - - - - - - - - -*/
// ako korisnik zeli dodati (add) novog admina
if (isset($_POST['create_admin'])) {
	createAdmin($_POST);
}
// ako korisnik zeli urediti (edit) postojeceg admina
if (isset($_GET['edit-admin'])) {
	$isEditingUser = true;
	$admin_id = $_GET['edit-admin'];
	editAdmin($admin_id);
}
// ako korisnik zeli osvjeziti (update) admina
if (isset($_POST['update_admin'])) {
	updateAdmin($_POST);
}
// ako korisnik zeli izbrisati (delete) admina
if (isset($_GET['delete-admin'])) {
	$admin_id = $_GET['delete-admin'];
	deleteAdmin($admin_id);
}

/* - - - - - - - - - - 
-  TEME - akcije
- - - - - - - - - - -*/
// ako korisnik zeli dodati (add) temu
if (isset($_POST['create_topic'])) { createTopic($_POST); }
// ako korisnik zeli urediti (edit) temu
if (isset($_GET['edit-topic'])) {
	$isEditingTopic = true;
	$topic_id = $_GET['edit-topic'];
	editTopic($topic_id);
}
// ako korisnik zeli osvjeziti (update) temu
if (isset($_POST['update_topic'])) {
	updateTopic($_POST);
}
// ako korisnik zeli izbrisati(delete) temu
if (isset($_GET['delete-topic'])) {
	$topic_id = $_GET['delete-topic'];
	deleteTopic($topic_id);
}

/* - - - - - - - - - - - -
-  Admin - korisnik funkcije
- - - - - - - - - - - - -*/
/* * * * * * * * * * * * * * * * * * * * * * *
* - Prihvaca/dodaje novonastalog admina
* - Kreira novog admina
* - Vraca sve admine s njihivim ovlastenjima 
* * * * * * * * * * * * * * * * * * * * * * */
function createAdmin($request_values){
	global $conn, $errors, $role, $username, $email;
	$username = esc($request_values['username']);
	$email = esc($request_values['email']);
	$password = esc($request_values['password']);
	$passwordConfirmation = esc($request_values['passwordConfirmation']);

	if(isset($request_values['role'])){
		$role = esc($request_values['role']);
	}
	// form : mora biti tocno ispunjena
	if (empty($username)) { array_push($errors, "Hmmm...treba nam korisnicko ime"); }
	if (empty($email)) { array_push($errors, "Oops.. nedostaje Email"); }
	if (empty($role)) { array_push($errors, "Rola je napravljena za admina");}
	if (empty($password)) { array_push($errors, "uh-oh zaboravio si lozinku"); }
	if ($password != $passwordConfirmation) { array_push($errors, "Lozinke se ne podudaraju"); }
	// Osigurava da nemamo dva ista korisnika 
	// Email i korisnicko ime moraju biti jedinstveni
	$user_check_query = "SELECT * FROM users WHERE username='$username' 
							OR email='$email' LIMIT 1";
	$result = mysqli_query($conn, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	if ($user) { // ako postoji korisnik
		if ($user['username'] === $username) {
		  array_push($errors, "Korisnicko ime vec postoji");
		}

		if ($user['email'] === $email) {
		  array_push($errors, "Email se koristi");
		}
	}
	// registriraj novog korisnika ako nema errora
	if (count($errors) == 0) {
		$password = md5($password);//kriptiraj sifru
		$query = "INSERT INTO users (username, email, role, password, created_at, updated_at) 
				  VALUES('$username', '$email', '$role', '$password', now(), now())";
		mysqli_query($conn, $query);

		$_SESSION['message'] = "Admin kreiran uspjesno";
		header('location: users.php');
		exit(0);
	}
}
/* * * * * * * * * * * * * * * * * * * * *
* - uzima id admina kao parametar
* - dohvaca admina iz baze podataka
* * * * * * * * * * * * * * * * * * * * * */
function editAdmin($admin_id)
{
	global $conn, $username, $role, $isEditingUser, $admin_id, $email;

	$sql = "SELECT * FROM users WHERE id=$admin_id LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$admin = mysqli_fetch_assoc($result);

	// username i email postavi da budu osvjezeni
	$username = $admin['username'];
	$email = $admin['email'];
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
* - dohvaca adminov zahtjev i dodaje ga u bazu podataka
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function updateAdmin($request_values){
	global $conn, $errors, $role, $username, $isEditingUser, $admin_id, $email;
	// id admina se osvjezava
	$admin_id = $request_values['admin_id'];
	// uredivanje==false
	$isEditingUser = false;


	$username = esc($request_values['username']);
	$email = esc($request_values['email']);
	$password = esc($request_values['password']);
	$passwordConfirmation = esc($request_values['passwordConfirmation']);
	if(isset($request_values['role'])){
		$role = $request_values['role'];
	}
	// registriraj novog korisnika ako nema errora
	if (count($errors) == 0) {
		//kriptiraj sifru
		$password = md5($password);

		$query = "UPDATE users SET username='$username', email='$email', role='$role', password='$password' WHERE id=$admin_id";
		mysqli_query($conn, $query);

		$_SESSION['message'] = "Admin osvjezen";
		header('location: users.php');
		exit(0);
	}
}
// izbrisi (delete) admina
function deleteAdmin($admin_id) {
	global $conn;
	$sql = "DELETE FROM users WHERE id=$admin_id";
	if (mysqli_query($conn, $sql)) {
		$_SESSION['message'] = "Korisnik izbrisan";
		header("location: users.php");
		exit(0);
	}
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
* - dohvaca sve admine i njihove uloge
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function getAdminUsers(){
	global $conn, $roles;
	$sql = "SELECT * FROM users WHERE role IS NOT NULL";
	$result = mysqli_query($conn, $sql);
	$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $users;
}
/* * * * * * * * * * * * * * * * * * * * *
* -onemogucava injekciju sqla
* * * * * * * * * * * * * * * * * * * * * */
function esc(String $value){
	
	global $conn;
	
	$val = trim($value); 
	$val = mysqli_real_escape_string($conn, $value);
	return $val;
}
// dohvaca string i vraca ga drugacije napisanog
function makeSlug(String $string){
	$string = strtolower($string);
	$slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
	return $slug;
}

/* - - - - - - - - - - 
-  funkcije tema
- - - - - - - - - - -*/
// dohvaca sve teme iz baze podataka
function getAllTopics() {
	global $conn;
	$sql = "SELECT * FROM topics";
	$result = mysqli_query($conn, $sql);
	$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $topics;
}
function createTopic($request_values){
	global $conn, $errors, $topic_name;
	$topic_name = esc($request_values['topic_name']);
	
	$topic_slug = makeSlug($topic_name);
	// validacija
	if (empty($topic_name)) { 
		array_push($errors, "Ime Teme je obavezno"); 
	}
	// osigurava da nema duple,iste teme
	$topic_check_query = "SELECT * FROM topics WHERE slug='$topic_slug' LIMIT 1";
	$result = mysqli_query($conn, $topic_check_query);
	if (mysqli_num_rows($result) > 0) { // if topic exists
		array_push($errors, "Tema vec postoji");
	}
	// dodaj temuu ako nema errora
	if (count($errors) == 0) {
		$query = "INSERT INTO topics (name, slug) 
				  VALUES('$topic_name', '$topic_slug')";
		mysqli_query($conn, $query);

		$_SESSION['message'] = "Tema uspjesno dodana";
		header('location: topics.php');
		exit(0);
	}
}
/* * * * * * * * * * * * * * * * * * * * *
* - uzima id teme kao parametar
* - dohvaca temu iz baze
* * * * */
function editTopic($topic_id) {
	global $conn, $topic_name, $isEditingTopic, $topic_id;
	$sql = "SELECT * FROM topics WHERE id=$topic_id LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$topic = mysqli_fetch_assoc($result);
	// postavlja zahtjev za osvjezavanjem imena teme
	$topic_name = $topic['name'];
}
function updateTopic($request_values) {
	global $conn, $errors, $topic_name, $topic_id;
	$topic_name = esc($request_values['topic_name']);
	$topic_id = esc($request_values['topic_id']);
	
	$topic_slug = makeSlug($topic_name);
	// validacija
	if (empty($topic_name)) { 
		array_push($errors, "Ime Teme je obavezno"); 
	}
	// dodaj temz ako nema errora
	if (count($errors) == 0) {
		$query = "UPDATE topics SET name='$topic_name', slug='$topic_slug' WHERE id=$topic_id";
		mysqli_query($conn, $query);

		$_SESSION['message'] = "Tema osvjezena";
		header('location: topics.php');
		exit(0);
	}
}
// izbrisi(delete) temu
function deleteTopic($topic_id) {
	global $conn;
	$sql = "DELETE FROM topics WHERE id=$topic_id";
	if (mysqli_query($conn, $sql)) {
		$_SESSION['message'] = "Tema izbrisana";
		header("location: topics.php");
		exit(0);
	}
}
?>
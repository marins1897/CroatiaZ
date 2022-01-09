<?php 
	// deklaracija varijabli
	$username = "";
	$email    = "";
	$errors = array(); 

	// REGISTRIRAJ KORISNIKA
	if (isset($_POST['reg_user'])) {
		// dohvaca sve inpute iz forme 
		$username = esc($_POST['username']);
		$email = esc($_POST['email']);
		$password_1 = esc($_POST['password_1']);
		$password_2 = esc($_POST['password_2']);

		// validacija forme
		if (empty($username)) {  array_push($errors, "Uhmm...We gonna need your username"); }
		if (empty($email)) { array_push($errors, "Oops.. Email is missing"); }
		if (empty($password_1)) { array_push($errors, "uh-oh you forgot the password"); }
		if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match");}

		// osiguraj da nema duplih korisnika 
		// email i korisnicko ime jedinstveni za svakog korisnika
		$user_check_query = "SELECT * FROM users WHERE username='$username' 
								OR email='$email' LIMIT 1";

		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if ($user) { // ako korisnik vec postoji
			if ($user['username'] === $username) {
			  array_push($errors, "Username already exists");
			}
			if ($user['email'] === $email) {
			  array_push($errors, "Email already exists");
			}
		}
		// registriraj korisnika ako nema errora
		if (count($errors) == 0) {
			$password = md5($password_1);//kriptiraj njegovu sifru
			$query = "INSERT INTO users (username, email, password, created_at, updated_at) 
					  VALUES('$username', '$email', '$password', now(), now())";
			mysqli_query($conn, $query);

			// Get user id
			$reg_user_id = mysqli_insert_id($conn); 

			// dodaj logiranog usera u sesiju
			$_SESSION['user'] = getUserById($reg_user_id);

			// ako je logiran kao admin, prebaci ga na admin ulogu
			if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
				$_SESSION['message'] = "You are now logged in";
				// prebaci ga u dashboard admina
				header('location: ' . BASE_URL . 'admin/dashboard.php');
				exit(0);
			} else {
				$_SESSION['message'] = "You are now logged in";
				// idi u index
				header('location: index.php');				
				exit(0);
			}
		}
	}

	// LOGIRAJ SE
	if (isset($_POST['login_btn'])) {
		$username = esc($_POST['username']);
		$password = esc($_POST['password']);

		if (empty($username)) { array_push($errors, "Korisnicko ime potrebno"); }
		if (empty($password)) { array_push($errors, "Sifra potrebna"); }
		if (empty($errors)) {
			$password = md5($password); // kriptiraj sifru
			$sql = "SELECT * FROM users WHERE username='$username' and password='$password' LIMIT 1";

			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				// dohvati id od korisnika
				$reg_user_id = mysqli_fetch_assoc($result)['id']; 

				$_SESSION['user'] = getUserById($reg_user_id); 

	
				if ( in_array($_SESSION['user']['role'], ["Admin", "Author"])) {
					$_SESSION['message'] = "You are now logged in";
	
					header('location: ' . BASE_URL . '/admin/dashboard.php');
					exit(0);
				} else {
					$_SESSION['message'] = "You are now logged in";

					header('location: index.php');				
					exit(0);
				}
			} else {
				array_push($errors, 'Wrong credentials');
			}
		}
	}
	// escape value from form
	function esc(String $value)
	{	
		// bring the global db connect object into function
		global $conn;

		$val = trim($value); // remove empty space sorrounding string
		$val = mysqli_real_escape_string($conn, $value);

		return $val;
	}
	// dogvati podatke o korisniku
	function getUserById($id)
	{
		global $conn;
		$sql = "SELECT * FROM users WHERE id=$id LIMIT 1";

		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);

		// vrati podatke o korisniku u obliku:
		// ['id'=>10 'username' => 'Lorenzo', 'email'=>'insigne@gmail.com', 'password'=> 'napoli']
		return $user; 
	}
?>
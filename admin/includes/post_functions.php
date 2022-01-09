<?php 
// Varijable POST - objava
$post_id = 0;
$isEditingPost = false;
$published = 0;
$title = "";
$post_slug = "";
$body = "";
$featured_image = "";
$post_topic = "";

/* - - - - - - - - - - 
-  Akcije objave
- - - - - - - - - - -*/
// ako korisnik klikne na dodavanje (add) novog posta/objave
if (isset($_POST['create_post'])) { createPost($_POST); }
// ako korisnik klikne na uredivanje (edit) objave
if (isset($_GET['edit-post'])) {
	$isEditingPost = true;
	$post_id = $_GET['edit-post'];
	editPost($post_id);
}
// ako korisnik klikne na osvjezavanje (update) objave
if (isset($_POST['update_post'])) {
	updatePost($_POST);
}
// ako korisnik klikne na brisanje (delete) objave
if (isset($_GET['delete-post'])) {
	$post_id = $_GET['delete-post'];
	deletePost($post_id);
}

/* - - - - - - - - - - 
-  Funkcije posta/objave
- - - - - - - - - - -*/
//kreiraj novu objavu
function createPost($request_values)
	{
		global $conn, $errors, $title, $featured_image, $topic_id, $body, $published;
		$title = esc($request_values['title']);
		$body = htmlentities(esc($request_values['body']));
		if (isset($request_values['topic_id'])) {
			$topic_id = esc($request_values['topic_id']);
		}
		if (isset($request_values['publish'])) {
			$published = esc($request_values['publish']);
		}
		
		$post_slug = makeSlug($title);
		// validacija
		if (empty($title)) { array_push($errors, "Naslov objave je obavezan"); }
		if (empty($body)) { array_push($errors, "Objava je obavezna"); }
		if (empty($topic_id)) { array_push($errors, "Tema objave je obavezna"); }
		// Dohvati ime slike
	  	$featured_image = $_FILES['featured_image']['name'];
	  	if (empty($featured_image)) { array_push($errors, "Naslovna slika je obavezna"); }
	  	// Mapa slike
	  	$target = "../static/images/" . basename($featured_image);
	  	if (!move_uploaded_file($_FILES['featured_image']['tmp_name'], $target)) {
	  		array_push($errors, "Nije moguce dohvatiti sliku. Provjerite vezu s vasim serverom");
	  	}
		// Osiguraj da nema duplih istih objava
		$post_check_query = "SELECT * FROM posts WHERE slug='$post_slug' LIMIT 1";
		$result = mysqli_query($conn, $post_check_query);

		if (mysqli_num_rows($result) > 0) { // ako objava vec postoji
			array_push($errors, "Postoji objava s istim imenom/ista objava.");
		}
		// kreiraj novi post ako nema errora
		if (count($errors) == 0) {
			$query = "INSERT INTO posts (user_id, title, slug, image, body, published, created_at, updated_at) VALUES(1, '$title', '$post_slug', '$featured_image', '$body', $published, now(), now())";
			if(mysqli_query($conn, $query)){ // ako je objava uspjesno dodana
				$inserted_post_id = mysqli_insert_id($conn);
				// napravi vezu izmedu objave i teme
				$sql = "INSERT INTO post_topic (post_id, topic_id) VALUES($inserted_post_id, $topic_id)";
				mysqli_query($conn, $sql);

				$_SESSION['message'] = "Post created successfully";
				header('location: posts.php');
				exit(0);
			}
		}
	}

	/* * * * * * * * * * * * * * * * * * * * *
	* - uzima id objave kao parametar
	* - dohvaca objavu iz baze
	* * * * * * * * * * * * * * * * * * * * * */
	function editPost($role_id)
	{
		global $conn, $title, $post_slug, $body, $published, $isEditingPost, $post_id;
		$sql = "SELECT * FROM posts WHERE id=$role_id LIMIT 1";
		$result = mysqli_query($conn, $sql);
		$post = mysqli_fetch_assoc($result);
		// updejtaj
		$title = $post['title'];
		$body = $post['body'];
		$published = $post['published'];
	}

	function updatePost($request_values)
	{
		global $conn, $errors, $post_id, $title, $featured_image, $topic_id, $body, $published;

		$title = esc($request_values['title']);
		$body = esc($request_values['body']);
		$post_id = esc($request_values['post_id']);
		if (isset($request_values['topic_id'])) {
			$topic_id = esc($request_values['topic_id']);
		}
		// napravi slug od naslova
		$post_slug = makeSlug($title);

		if (empty($title)) { array_push($errors, "Naslov je obavezan"); }
		if (empty($body)) { array_push($errors, "Objava je obavezna"); }
	
		if (isset($_POST['featured_image'])) {
		
		  	$featured_image = $_FILES['featured_image']['name'];
		  	
		  	$target = "../static/images/" . basename($featured_image);
		  	if (!move_uploaded_file($_FILES['featured_image']['tmp_name'], $target)) {
		  		array_push($errors, "Neuspjesno dodavanje fotografije. Provjerite vezu sa serverom.");
		  	}
		}

		// dodaj objavu u temu
		if (count($errors) == 0) {
			$query = "UPDATE posts SET title='$title', slug='$post_slug', views=0, image='$featured_image', body='$body', published=$published, updated_at=now() WHERE id=$post_id";
			// povezi 
			if(mysqli_query($conn, $query)){ 
				if (isset($topic_id)) {
					$inserted_post_id = mysqli_insert_id($conn);
					// napravi vezu izmedu objave i teme
					$sql = "INSERT INTO post_topic (post_id, topic_id) VALUES($inserted_post_id, $topic_id)";
					mysqli_query($conn, $sql);
					$_SESSION['message'] = "Objava uspjesno dodana";
					header('location: posts.php');
					exit(0);
				}
			}
			$_SESSION['message'] = "Objava je osvjezena";
			header('location: posts.php');
			exit(0);
		}
	}
	// izbrisi objavu
	function deletePost($post_id)
	{
		global $conn;
		$sql = "DELETE FROM posts WHERE id=$post_id";
		if (mysqli_query($conn, $sql)) {
			$_SESSION['message'] = "Objava uspjesno izbrisana";
			header("location: posts.php");
			exit(0);
		}
	}
// dohvati sve objave iz baze
function getAllPosts()
{
	global $conn;
	
	// admin moze vidjeti sve objave
	// autor ne
	if ($_SESSION['user']['role'] == "Admin") {
		$sql = "SELECT * FROM posts";
	} elseif ($_SESSION['user']['role'] == "Author") {
		$user_id = $_SESSION['user']['id'];
		$sql = "SELECT * FROM posts WHERE user_id=$user_id";
	}
	$result = mysqli_query($conn, $sql);
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['author'] = getPostAuthorById($post['user_id']);
		array_push($final_posts, $post);
	}
	return $final_posts;
}
// dohvati autora objave
function getPostAuthorById($user_id)
{
	global $conn;
	$sql = "SELECT username FROM users WHERE id=$user_id";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		// vrati korisnicko ime
		return mysqli_fetch_assoc($result)['username'];
	} else {
		return null;
	}
}
// ako korisnik zeli objaviti objavu
if (isset($_GET['publish']) || isset($_GET['unpublish'])) {
	$message = "";
	if (isset($_GET['publish'])) {
		$message = "Objava uspjesno dodana";
		$post_id = $_GET['publish'];
	} else if (isset($_GET['unpublish'])) {
		$message = "Objava uspjesno izbrisana";
		$post_id = $_GET['unpublish'];
	}
	togglePublishPost($post_id, $message);
}
// izbrisi objavu
function togglePublishPost($post_id, $message)
{
	global $conn;
	$sql = "UPDATE posts SET published=!published WHERE id=$post_id";
	
	if (mysqli_query($conn, $sql)) {
		$_SESSION['message'] = $message;
		header("location: posts.php");
		exit(0);
	}
}
?>


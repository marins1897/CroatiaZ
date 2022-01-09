<?php 
/* * * * * * * * * * * * * * *
* Dohvaca sve objavljenje objave
* * * * * * * * * * * * * * */
function getPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true ORDER BY created_at DESC LIMIT 6";
	$result = mysqli_query($conn, $sql);
	// dohvaca sve objave spremljene kao $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}
/* * * * * * * * * * * * * * *
* Dohvaca posljednje dodanu objavu
* * * * * * * * * * * * * * */
function getLastPublishedPosts() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true ORDER BY created_at DESC LIMIT 1";
	$result = mysqli_query($conn, $sql);
	// dohvaca sve objave spremljene $posts i prikazuje 1
	$lastposts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ((array)$lastposts as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts   ;
}
/* * * * * * * * * * * * * * *
* Dohvaca i prikazuje posljednjih n-broj dodanih objava i poredaje ih
* * * * * * * * * * * * * * */
function getLastPublishedPost() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT * FROM posts WHERE published=true ORDER BY created_at DESC LIMIT 12";
	$result = mysqli_query($conn, $sql);
	// dohvaca sve objave spremljene kao $posts i prikazuje 12
	$lastpost = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ((array)$lastpost as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts   ;
}

/* * * * * * * * * * * * * * *
* dohvaca id posta/objave
* dohvaca temu posta
* * * * * * * * * * * * * * */
function getPostTopic($post_id){
	global $conn;
	$sql = "SELECT * FROM topics WHERE id  =
			(SELECT topic_id FROM post_topic WHERE post_id=$post_id)  LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$topic = mysqli_fetch_assoc($result);
	return $topic;
}



/* * * * * * * * * * * * * * * *
* dohvaca sve postove pod jednu temu
* * * * * * * * * * * * * * * * */
function getPublishedPostsByTopic($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=$topic_id GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)   ORDER BY created_at DESC ";
	$result = mysqli_query($conn, $sql);

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	$final_posts = array();
	foreach ($posts as $post) {
		$post['topic'] = getPostTopic($post['id']); 
		array_push($final_posts, $post);
	}
	return $final_posts;
}
/* * * * * * * * * * * * * * * *
* vraca naziv teme prema id
* * * * * * * * * * * * * * * * */
function getTopicNameById($id)
{
	global $conn;
	$sql = "SELECT name FROM topics WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$topic = mysqli_fetch_assoc($result);
	return $topic['name'];
}

/* * * * * * * * * * * * * * *
* dohvaca pojedinacnu objavu
* * * * * * * * * * * * * * */
function getPost($slug){
	global $conn;
	// GET pojedinacan slug
	$post_slug = $_GET['post-slug'];
	$sql = "SELECT * FROM posts WHERE slug='$post_slug' AND published=true  ";
	$result = mysqli_query($conn, $sql);

	
	$post = mysqli_fetch_assoc($result);
	if ($post) {
		// dodaj ovu objavu temi kojoj pripada
		$post['topic'] = getPostTopic($post['id']);
	}
	return $post;
}
/* * * * * * * * * * * *
*  dohvaca sve teme
* * * * * * * * * * * * */
function getAllTopics()
{
	global $conn;
	$sql = "SELECT * FROM topics";
	$result = mysqli_query($conn, $sql);
	$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $topics;
}


function getFirstTopics()
{
	global $conn;
	$sql = "SELECT * FROM topics WHERE id=1";
	$result = mysqli_query($conn, $sql);
	$topics1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $topics1;
}

?>



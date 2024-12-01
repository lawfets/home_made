<?php
require_once 'login.php';
// Database connection (modify as needed)
try{
    $pdo = new PDO($attr, $user, $pass, $opts);
}
catch (PDOException $e){
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}



// Number of posts per page
$posts_per_page = 3;

// Get the current page number from URL (default to page 1)
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the OFFSET
$offset = ($page - 1) * $posts_per_page;

// Fetch blog posts with pagination
$sql = "SELECT * FROM blogposts ORDER BY published_date DESC LIMIT $posts_per_page OFFSET $offset";
$result = $pdo ->query($sql);

// Display blog posts
while ($row = $result->fetch()) {
    echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
    echo "<p>" . htmlspecialchars($row['post']) . "</p>";
}

// Get the total number of posts
$total_posts_result = $pdo->query("SELECT COUNT(*) AS total FROM blogposts");
$total_posts = $total_posts_result->fetch()['total'];
$total_pages = ceil($total_posts / $posts_per_page);

// Pagination links
echo "<div class='pagination'>";
if ($page > 1) {
    echo "<a href='?page=" . ($page - 1) . "'>Previous</a> ";
}

echo $page;

if ($page < $total_pages) {
    echo "<a href='?page=" . ($page + 1) . "'>Next</a>";
}
echo "</div>";

// Close connection
$pdo = null;
?>

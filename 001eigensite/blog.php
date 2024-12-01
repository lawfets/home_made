<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Website full stack development</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/blog_styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton+SC&family=Edu+AU+VIC+WA+NT+Pre:wght@400..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <p class="talen"><a href="index_en.html" class="taal">Engels</a><p></p>
            <nav>
                <ul class="nav_ul">
                    <li class="nav-li"><a href="index.html" id="nav-li-link">startpagina</a></li>
                    <li class="nav-li"><a href="https://github.com/lawfets" target="_blank" id="nav-li-link">github</a></li>
                </ul>
            </nav>
        <section class="banner"><!-- this section is fixed to the top-->
            <img src="./images/banner.png" alt="website-banner" id="websiteBanner">
        </section>
        </header>
        <main>
            <div class="main-div" id="main-div">
                <?php
                require_once 'login.php';
            
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

                echo " ". $page . " ";

                if ($page < $total_pages) {
                    echo "<a href='?page=" . ($page + 1) . "'>Next</a>";
                }
                echo "</div>";

                // Close connection
                $pdo = null;   
            ?>
            </div>
        </main>
        <footer>
            <div>
                <ul class="footer-ul">
                    <li>Stefaan Walleghem</li>
                    <li>Duinkerkestraat 88 - 8630 Veurne - Belgium</li>
                    <li>phone: +32/493/171226</li>
                </ul>
            </div>
        </footer>
        <script src="./javascript/script.js"></script>
    </body>
</html>
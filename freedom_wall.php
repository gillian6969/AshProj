<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom Wall - Path to Awareness and Growth</title>
    <link rel="icon" href="https://scontent.fmnl17-7.fna.fbcdn.net/v/t1.15752-9/480023749_2028812964285065_3089753549494548426_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeGPba8JZk0kE7UqCBPlrs2Ta_cqTvDQCRNr9ypO8NAJE5Awl9H8U3KVsH45wZmUdBGEdiU_JEp_BkUQz86D677H&_nc_ohc=jFzkVazauv8Q7kNvgEoopwE&_nc_oc=Adn3qJ1YBw8TLB1uFb54UF0TRmwBSzQ_JQPTRzrByHiFY1wgjAgxgu46qcPg4RDdloo&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fmnl17-7.fna&oh=03_Q7cD1wEcVyd6qDk12PoaFz3_5DaF0R6x-yYwz2p9IyOnO4LTCA&oe=680A4BD1" type="image/jpeg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="bubble-background">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>
    <div class="app-container">
        <header class="main-header">
            <div class="header-content">
                <div class="header-title-container">
                    <h1>Path to Awareness and Growth</h1>
                    <img src="https://scontent.fmnl17-7.fna.fbcdn.net/v/t1.15752-9/480023749_2028812964285065_3089753549494548426_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeGPba8JZk0kE7UqCBPlrs2Ta_cqTvDQCRNr9ypO8NAJE5Awl9H8U3KVsH45wZmUdBGEdiU_JEp_BkUQz86D677H&_nc_ohc=jFzkVazauv8Q7kNvgEoopwE&_nc_oc=Adn3qJ1YBw8TLB1uFb54UF0TRmwBSzQ_JQPTRzrByHiFY1wgjAgxgu46qcPg4RDdloo&_nc_ad=z-m&_nc_cid=0&_nc_zt=23&_nc_ht=scontent.fmnl17-7.fna&oh=03_Q7cD1wEcVyd6qDk12PoaFz3_5DaF0R6x-yYwz2p9IyOnO4LTCA&oe=680A4BD1" alt="Awareness and Growth" class="header-image">
                </div>
                <p class="header-subtitle">Begin your journey to self-discovery</p>
                <button id="themeToggle" class="theme-toggle" aria-label="Toggle theme">
                    <i class="fas fa-moon"></i>
                </button>
            </div>
        </header>

        <nav class="main-nav">
            <a href="home.html" class="nav-button" target="_self">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            <a href="plan.html" class="nav-button" target="_self">
                <i class="fas fa-map"></i>
                <span>Plan</span>
            </a>
            <a href="freedom_wall.php" class="nav-button active" target="_self">
                <i class="fas fa-comment-dots"></i>
                <span>Freedom Wall</span>
            </a>
            <a href="contacts.html" class="nav-button" target="_self">
                <i class="fas fa-address-book"></i>
                <span>Contacts</span>
            </a>
        </nav>

        <main class="main-content">
            <div class="section-header">
                <h2>Freedom Wall</h2>
                <p>Express yourself freely and connect with others</p>
            </div>

            <div class="freedom-wall-container">
                <!-- Post Form -->
                <div class="post-form-container">
                    <h3><i class="fas fa-pen"></i> Share Your Thoughts</h3>
                    <form id="postForm" method="POST" action="post_handler.php">
                        <div class="form-group">
                            <label for="author">Your Name (optional)</label>
                            <input type="text" id="author" name="author" placeholder="Anonymous" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" placeholder="Share your thoughts, feelings, or experiences..." class="form-input" rows="6" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select id="category" name="category" class="form-input">
                                <option value="inspiration">Inspiration</option>
                                <option value="motivation">Motivation</option>
                                <option value="challenge">Challenge</option>
                                <option value="advice">Advice</option>
                                <option value="question">Question</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <button type="submit" class="submit-button">
                            <i class="fas fa-paper-plane"></i> Post Message
                        </button>
                    </form>
                    <div class="form-tips">
                        <h4><i class="fas fa-lightbulb"></i> Tips for Sharing</h4>
                        <ul>
                            <li>Be respectful and considerate of others</li>
                            <li>Share authentic experiences and thoughts</li>
                            <li>Provide context to help others understand</li>
                            <li>Consider how your words might impact readers</li>
                        </ul>
                    </div>
                </div>

                <!-- Posts Display -->
                <div class="posts-container">
                    <div class="post-filters">
                        <button class="filter-btn active" data-filter="all">All Posts</button>
                        <button class="filter-btn" data-filter="inspiration">Inspiration</button>
                        <button class="filter-btn" data-filter="motivation">Motivation</button>
                        <button class="filter-btn" data-filter="challenge">Challenges</button>
                        <button class="filter-btn" data-filter="advice">Advice</button>
                        <button class="filter-btn" data-filter="question">Questions</button>
                    </div>

                    <div id="postsDisplay" class="posts-display">
                        <?php
                        // Database connection
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "freedom_wall_db";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Check connection
                        if ($conn->connect_error) {
                            echo "<div class='error-message'>Database connection failed. Please try again later.</div>";
                        } else {
                            // Query to get all posts, ordered by creation date (newest first)
                            $sql = "SELECT id, author, message, category, created_at, likes FROM posts ORDER BY created_at DESC";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                echo "<div class='posts-counter'>" . $result->num_rows . " posts shared</div>";
                                
                                while ($row = $result->fetch_assoc()) {
                                    $author = !empty($row["author"]) ? htmlspecialchars($row["author"]) : "Anonymous";
                                    $message = htmlspecialchars($row["message"]);
                                    $category = htmlspecialchars($row["category"]);
                                    $created_at = date("F j, Y, g:i a", strtotime($row["created_at"]));
                                    $post_id = $row["id"];
                                    $likes = $row["likes"];
                                    
                                    echo "<div class='post-card' data-category='" . $category . "'>";
                                    echo "<div class='post-header'>";
                                    echo "<span class='post-author'><i class='fas fa-user-circle'></i> " . $author . "</span>";
                                    echo "<span class='post-category'>" . ucfirst($category) . "</span>";
                                    echo "</div>";
                                    echo "<p class='post-message'>" . nl2br($message) . "</p>";
                                    echo "<div class='post-footer'>";
                                    echo "<span class='post-time'><i class='far fa-clock'></i> " . $created_at . "</span>";
                                    echo "<div class='post-actions'>";
                                    echo "<button class='like-btn' data-id='" . $post_id . "' title='Show appreciation'>";
                                    echo "<i class='fas fa-heart'></i> <span class='likes-count'>" . $likes . "</span>";
                                    echo "</button>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            } else {
                                echo "<div class='no-posts'>";
                                echo "<i class='far fa-comment-dots no-posts-icon'></i>";
                                echo "<p>No posts yet. Be the first to share!</p>";
                                echo "</div>";
                            }
                            
                            $conn->close();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="js/main.js"></script>
    <script>
        // Theme functionality
        const themeToggle = document.getElementById('themeToggle');
        const icon = themeToggle.querySelector('i');
        
        // Check for saved theme preference
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            document.body.setAttribute('data-theme', savedTheme);
            icon.className = savedTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        }

        themeToggle.addEventListener('click', () => {
            const currentTheme = document.body.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            document.body.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            
            // Update icon
            icon.className = newTheme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        });

        // Filter posts by category
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                button.classList.add('active');
                
                const filter = button.getAttribute('data-filter');
                
                // Show/hide posts based on filter
                document.querySelectorAll('.post-card').forEach(post => {
                    if (filter === 'all' || post.getAttribute('data-category') === filter) {
                        post.style.display = 'block';
                    } else {
                        post.style.display = 'none';
                    }
                });
            });
        });

        // Handle like button clicks
        document.querySelectorAll('.like-btn').forEach(button => {
            button.addEventListener('click', () => {
                const postId = button.getAttribute('data-id');
                
                // Send AJAX request to like_handler.php
                fetch('like_handler.php?post_id=' + postId, {
                    method: 'POST'
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update likes count in UI
                        button.querySelector('.likes-count').textContent = data.likes;
                    }
                })
                .catch(error => {
                    console.error('Error liking post:', error);
                });
            });
        });
    </script>
</body>
</html> 
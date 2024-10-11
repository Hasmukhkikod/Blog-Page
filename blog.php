<?php
/** 
 * Template Name: Blog
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        /* Main Container Styling */
       /* Main Container Styling */
       #container {
    width: 90%;
    margin: 0 auto;
    max-width: 1200px;
    font-family: 'Roboto', sans-serif; /* Modern font */
}

/* Modern Search Bar Styling */
.search-bar-container {
    display: flex;
    justify-content: center;
    margin-bottom: 30px; /* Increased margin for breathing space */
}

.searchform {
    position: relative;
    width: 400px; /* Wider search bar */
    display: flex;
    justify-content: space-between;
    background-color: #f9f9f9;
    padding: 10px 25px; /* Slightly more padding */
    border-radius: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); /* Softer shadow for a modern look */
    transition: all 0.3s ease; /* Smooth transition on hover */
}

.searchform:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow increase on hover */
}

.searchform input[type="text"] {
    width: 100%;
    padding: 10px 15px;
    border: none;
    border-radius: 30px;
    background-color: transparent;
    outline: none;
    font-size: 16px;
    color: #333;
}

.searchform button {
    background: none;
    border: none;
    color: #007bff;
    font-size: 20px;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
}

.searchform button i {
    font-size: 22px;
}

/* Category Filter Styling */
#filterOptions {
    display: flex;
    justify-content: center;
    gap: 12px; /* Modern spacing */
    list-style: none;
    padding: 15px 0;
    border-bottom: 1px solid #ddd; /* Subtle separator line */
}

#filterOptions li {
    padding: 8px 20px;
    background-color: #f0f0f0;
    border-radius: 25px;
    cursor: pointer;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    font-size: 14px;
    font-weight: 500;
}

#filterOptions li:hover {
    background-color: #007bff;
    color: white;
    box-shadow: 0 4px 12px rgba(0, 123, 255, 0.1); /* Subtle shadow effect */
}

#filterOptions li.active {
    background-color: #272D4E;
    color: white;
    font-weight: bold;
    box-shadow: 0 4px 12px rgba(39, 45, 78, 0.15);
}

#filterOptions li a {
    text-decoration: none;
    color: inherit;
    font-size: 15px; /* Modern, slightly larger font */
}

#filterOptions li a:hover {
    color: #fff; /* Ensures text changes to white on hover */
}

/* Blog Posts Container */
#ourHolder {
    display: flex;
    flex-wrap: wrap;
    gap: 30px; /* More spacious layout */
    margin-top: 40px;
    justify-content: center;
}

/* Individual Blog Post Card Styling */
.item {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05); /* Softer shadow */
    padding: 20px;
    width: 30%;
    min-width: 320px;
    box-sizing: border-box;
    transition: all 0.4s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    position: relative;
    overflow: hidden; /* Ensures overflow is hidden */
}

.item:hover {
    transform: translateY(-10px); /* More dramatic hover effect */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1); /* Stronger shadow on hover */
}

/* Set fixed width and height for main blog post images */
.item img {
    width: 100%;
    height: 220px; /* Slightly larger height for main images */
    object-fit: cover;
    border-radius: 10px;
    transition: transform 0.3s ease; /* Smooth zoom on hover */
}

.item:hover img {
    transform: scale(1.05); /* Slight zoom on hover */
}

/* Set consistent height for titles */
.item h2 {
    font-size: 22px;
    margin: 15px 0;
    color: #272D4E;
    font-weight: 600; /* Slightly bolder */
    height: 55px; /* Adjusted height for consistency */
    overflow: hidden;
}

/* Limit excerpt length and set consistent height */
.item p {
    color: #606060;
    font-size: 15px;
    line-height: 1.6;
    overflow: hidden;
    margin: 10px 0;
}

/* Ensure "Read More" button stays at the bottom */
.item a {
    color: #007bff;
    font-weight: bold;
    text-decoration: none;
    margin-top: auto;
    transition: color 0.3s ease;
}

.item a:hover {
    color: #0056b3;
}

/* Consistent date and author information alignment */
.zl-blog-user-name-row {
    display: flex;
    align-items: center;
    gap: 5px;
    margin-top: 5px;
}

.zl-blog-user-img {
    display: none;
}

/* General Typography */
body {
    font-family: 'Roboto', sans-serif; /* Sleek modern font */
    color: #333;
    background-color: #f7f7f7;
    line-height: 1.6;
    font-size: 16px;
}
.item h2 a {
    text-decoration: none; /* Removes underline from heading links */
    color: inherit; /* Inherits color from heading */
}

.item h2 a:hover {
    color: #007bff; /* Optional: Change color on hover */
}


/* Media Queries for Responsiveness */
@media (max-width: 768px) {
    .item {
        width: 100%; /* Full width for smaller screens */
    }
}


    </style>
</head>
<body>

<div id="container">

    <!-- Search Bar Section -->
    <div class="search-bar-container">
        <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search here..." />
            <button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <!-- Blog Post Categories -->
    <ul id="filterOptions">
        <li class="active"><a href="#" class="all">All Categories</a></li>
        <?php
        // Fetch categories
        $categories = get_categories(['hide_empty' => false]);
        foreach ($categories as $category) {
            echo '<li><a href="#" class="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a></li>';
        }
        ?>
    </ul>

    <!-- Blog Posts -->
    <div id="ourHolder">
        <?php
        // Fetch posts
        $args = array('posts_per_page' => -1);
        $posts = new WP_Query($args);

        if ($posts->have_posts()) :
            while ($posts->have_posts()) : $posts->the_post();
                // Get categories for the current post
                $post_categories = wp_get_post_categories(get_the_ID());
                $cat_classes = '';

                foreach ($post_categories as $c) {
                    $cat = get_category($c);
                    $cat_classes .= esc_attr($cat->slug) . ' '; // Add category slugs as classes
                }
                ?>
<div class="item <?php echo trim($cat_classes); ?>">
    <!-- Wrap the image inside an <a> tag to link to the single post -->
    <a href="<?php the_permalink(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </a>

    <!-- Wrap the heading inside an <a> tag to link to the single post -->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <p><?php the_excerpt(); ?></p>

    <!-- The "Read More" button linking to the single post page -->
    <a href="<?php the_permalink(); ?>" class="read-more-link">Read More</a>

    <!-- Author and date section -->
    <div class="zl-blog-user-name-row">
        <img class="zl-blog-user-img" src="https://via.placeholder.com/32" alt="user image">
        <div class="zl-blog-user-name-text">
            <a href="#"><?php the_author(); ?></a>
        </div>
        <div class="zl-blog-user-name-text">
            <p><?php echo get_the_date(); ?></p>
        </div>
    </div>
</div>


                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>

<script>
   $(document).ready(function() {
    // Initially show all items
    $('#ourHolder').children('.item').show();

    // On category click
    $('#filterOptions li a').click(function() {
        // Fetch the class of the clicked category
        var ourClass = $(this).attr('class');

        // Reset the active class on all buttons
        $('#filterOptions li').removeClass('active');
        // Update the active state on the clicked button
        $(this).parent().addClass('active');

        if (ourClass == 'all') {
            // Show all items if "All Categories" is selected
            $('#ourHolder').children('.item').show();
        } else {
            // Hide all items and show only the selected category's items
            $('#ourHolder').children('.item').hide();
            $('#ourHolder').children('.' + ourClass).show(); // Use the class as a selector
        }

        return false; // Prevent default link behavior
    });
});

</script>

</body>
</html>


<?php get_header(); ?>



    <!-- Hero Section -->
    <section id="hero">
        <div class="container hero-content">
            <h2>Welcome to MyWebsite</h2>
            <p>This is a clean, responsive HTML & CSS template.</p>
            <a href="#features" class="btn">Learn More</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <div class="container">
            <h2>Features</h2>
            <div class="features-grid">
                <div class="feature">
                    <h3>Responsive Design</h3>
                    <p>Works perfectly on desktop, tablet, and mobile devices.</p>
                </div>
                <div class="feature">
                    <h3>Easy to Customize</h3>
                    <p>Fully editable HTML & CSS template.</p>
                </div>
                <div class="feature">
                    <h3>Fast & Lightweight</h3>
                    <p>Optimized for speed and simplicity.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container blog-container">
        <!-- Blog Content -->
        <section class="blog-posts">
            <article class="post">
                <h2>Blog Post Title 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae ligula nec quam cursus lacinia.</p>
                <a href="#" class="read-more">Read More</a>
            </article>
            <article class="post">
                <h2>Blog Post Title 2</h2>
                <p>Praesent et magna nec leo viverra dictum. Curabitur auctor mauris non nulla suscipit, a cursus justo.</p>
                <a href="#" class="read-more">Read More</a>
            </article>
            <article class="post">
                <h2>Blog Post Title 3</h2>
                <p>Fusce porttitor sapien vel libero ullamcorper, in fringilla justo posuere. Integer sed ex a risus.</p>
                <a href="#" class="read-more">Read More</a>
            </article>
        </section>

        <!-- Sidebar -->
        <?php get_sidebar(); ?>
    
</div>

<?php get_footer(); ?>
<footer class="footer">
    <div class="content">
        <span class="footer-title">Recent Posts</span>
        <ul class ="subtitle is-6">
            <?php wp_get_archives('title_li=&type=postbypost&limit= 3'); ?>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

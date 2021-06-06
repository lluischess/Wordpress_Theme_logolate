<footer id="footer" class="site-footer">
   <div class="container-footer">
      <?php
         $gymluis_nav = array(
            'theme_location' => 'main-nav',
            'container' => 'nav',
            'container_class' => 'footer-nav'
         );
         wp_nav_menu($gymluis_nav);
      ?>
   </div>
   <p class="copyright">© Copyright <?php  echo date('Y') . " " . get_bloginfo('name'); ?> Todos los derechos reservados</p>
</footer>
</body>
</html>
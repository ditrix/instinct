<?php
/**
 * This file is responsible for the theme footer.
 */
?>
<?php 
global $wp;
$current_url = home_url(add_query_arg(array(),$wp->request));
echo '<style>textarea[name="comment"],textarea[name="message"]{display:none}</style>'; 
?>


   <script>
    jQuery("#menu-toggle").click(function(e) {
        e.preventDefault();
        jQuery("#main_container").toggleClass("toggled");
    });
    </script>  
    
        <div class="clearfix"></div>
     <!--Footer Wrapper Start Here-->  
         <footer class="footer_wrapper">
           <div class="row">
                  <div class="fos-label col-sm-4">
                  <span>свяжитесь с нами:</span>
                  </div>
           
                  <div class="fos-block col-sm-8">
                	
                  
                  
                  <form action="<?php echo site_url() ?>/send.php" method="POST">
                  
                  
                  <div class="row">
                  
                  <div class="fos-block col-sm-4  ">
                    <input type="text" hidden required="true" name="current_url" value="<?php echo $current_url?>" />
                    <input type="text" name="name" required="true" placeholder="Имя *" /><br>
                    <input type="text" name="email" required="true" placeholder="Email *" /><br>
                    <textarea name="comment"></textarea>
                    <textarea name="message"></textarea>
                    <textarea name="soobschenie"  required="true" placeholder="Сообщение *"></textarea>
                    <div><?php if($_GET['msg'] == 'success'){echo 'Спасибо. Мы свяжемся с Вами';} ?></div>
                  </div>
                  <div class="fos-btn col-sm-8" style="float: left;">
                     <button>Отправить</button>
                  </div>
                  </div>
                </form>
  </div>

             </div>
           </div>  
        </footer>
       <!--Footer Wrapper End Here-->  
      
       <div class="copyright">
         <div class="container">	
            <div class="clearboth"></div>
              &copy;&nbsp;<span>2019 фитнес клуб "ОСНОВНОЙ ИНСТИНКТ"</span>          
        </div>        
       </div>       
                        </div>
                     </div>
                   </div> 
                  
                 <!--Right Content Wrapper End Here-->    
   
    <?php wp_footer(); ?>

</body>
</html>
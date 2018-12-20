 <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">About Allianz</h1>
            <p class="margin-bottom-0 text-size-16"><?= $profile['short']?></p>
          </div>  
        </header>
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
              <?php foreach($t as $post) : ?>

             <a href="<?php echo site_url('/gallery/'.$user.'/'.$post['slug']); ?>">
              <div class="s-12 m-6 l-4 padding">
                <div class="image-with-hover-overlay margin-bottom border-articles ">
                  <div class="image-hover-overlay background-new"> 
                    <div class="image-style-articles text-center">
                      <?php if($post['image'] != null){ ?>
                    <div align=center><img src="http://bisnis.financialsecurity.id/assets/posts/<?php echo $post['image']; ?>" width="12px" ></div>
                    <?php } ?>
                      <br>
                      <p><?php echo $post['title'] ?></p>
                    </div> 
                  </div> 
                  <img src="<?php echo base_url(); ?>assets/img/portfolio/thumb-02.jpg" alt="" title="Portfolio Image 1" />
                </div>  
              </div>
             </a>
             <?php endforeach; ?>
            </div>  
          </div>
        </div> 
      </article>     
     
    </main>
       <!-- FOOTER -->
       <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1"><a href="http://wa.me/<?php echo $agent['phone']; ?>">Click to Contact Us: +<?php echo substr($agent['phone'], 0, 2) ?>-<?php echo substr($agent['phone'], 2, 3)?>-<?php echo substr($agent['phone'], 5, 4)?>-<?php echo substr($agent['phone'], 9, 4)?></a></p> 
        
      </div>
            <section class="section-small-padding background-white text-center"> 
        <div class="line">
          <div class="margin">
                                  <div class="s-12 m-12 l-12 margin-m-bottom"><div class="padding-2x "> <img class="img-s2 center" src="http://bisnis.financialsecurity.id/assets/agents/<?php if(isset($agent)) echo $agent['image'];?>" alt=""></div></div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x ">
                
                <h2 class="text-thin">Surabaya Office</h2>
                <p class="margin-bottom-30">Gedung Graha Pacific Lt. 3A<br>
Jl Basuki Rahmat 87-91 | Embong Kaliasin, Kota Surabaya<br>
Jawa Timur - 60271 </p>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">

              <div class="padding-2x ">
            
                <h2 class="text-thin"><?php if($agent['name'] == NULL){echo $addon;}else{echo $agent['name'];}?></h2>
                <p class="margin-bottom-30"><?php if($agent['address'] == NULL){echo $addon;}else{echo $agent['address'];}?>
                <br>                <a href="mailto:<?php echo $agent['email']; ?>?Subject=Informasi mengenai keamanan finansial" target="_top"><?php echo $agent['email']; ?></a></p>

             </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x ">
                
                <h2 class="text-thin">Jakarta Office</h2>
                <p class="margin-bottom-30">APL Tower | Lt. 11 - Suite 01<br>
Jl. Letjen S. Parman kav. 28<br>
Kota Jakarta Barat<br>
Daerah Khusus Ibukota Jakarta 11470</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
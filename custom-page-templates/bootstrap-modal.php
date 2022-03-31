<?php

/**
 * Template Name: Bootstrap Modal
 *
 * @package Betheme
 * @author Muffin group
 * @link https://muffingroup.com
 */

get_header();
?>
  
  <div id="Content">
    <div class="content_wrapper clearfix">
      
      <div class="sections_group">
        
        <div class="entry-content" itemprop="mainContentOfPage">
          
          <?php do_action('mfn_before_content'); ?>
          
          <?php
            while ( have_posts() ) {
              
              the_post();
              
              $mfn_builder = new Mfn_Builder_Front(get_the_ID());
              $mfn_builder->show();
              
            }
          ?>
          
          <div class="section section-page-footer">
            <div class="section_wrapper clearfix">
              
              <div class="column one page-pager">
                <?php
                  wp_link_pages(array(
                    'before' => '<div class="pager-single">',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'next_or_number' => 'number'
                  ));
                ?>
              </div>
            
            </div>
          </div>
          
          <?php do_action('mfn_after_content'); ?>
        
        </div>
        
        <?php if ( mfn_opts_get( 'page-comments' ) ): ?>
          <div class="section section-page-comments">
            <div class="section_wrapper clearfix">
              
              <div class="column one comments">
                <?php comments_template('', true); ?>
              </div>
            
            </div>
          </div>
        <?php endif; ?>
      
      </div>
      
      <?php get_sidebar(); ?>
    
    </div>
  </div>
  
  <!-- Click For More Info Modal - Fight For Your Life -->
  <div class="modal fade" id="fightforlifeModal" tabindex="-1" aria-labelledby="fightforlifeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="fightforlifeModalLabel">Fight For Your Life Competition</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Your short horror film here!
           Must be no more than 25 minutes
           and no less than 23 minute.</p>
          <p>Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
         <a href="/product/package-99/" title="Purchase &amp; Upload"><button type="button" class="btn btn-dark">Purchase &amp; Upload</button></a>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 
  <!-- Click For More Info Modal - Script Pitch Only -->
  <div class="modal fade" id="scriptpitchModal" tabindex="-1" aria-labelledby="scriptpitchModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="scriptpitchModalLabel">Script Pitch Only</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <p>Upload your script here!
       Please donot submit a book.
       Must be in a script format.</p>
      <p>Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
      <a href="/product/package-199/" title="Purchase &amp; Upload"><button type="button" class="btn btn-dark">Purchase &amp; Upload</button></a>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
  </div>
 
  <!-- Click For More Info Modal - Featured Films Only -->
  <div class="modal fade" id="featuredfilmsModal" tabindex="-1" aria-labelledby="featuredfilmsModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
     <div class="modal-header">
      <h5 class="modal-title" id="featuredfilmsModalLabel">Featured Films Only</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <p>Upload your film here!
       Film must be 75 minutes
       or longer to qualify.</p>
      <p>Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</p>
      <a href="/product/package-299/" title="Purchase &amp; Upload"><button type="button" class="btn btn-dark">Purchase &amp; Upload</button></a>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
     </div>
    </div>
   </div>
  </div>
 

<?php get_footer();




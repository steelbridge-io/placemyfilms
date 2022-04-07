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
         <img class="mr-1" src="https://placemyfilms.s3.us-east-2.amazonaws.com/wp-content/uploads/2021/10/13103550/LOGOprofilewhite.png" alt="Place My Films">
          <h5 class="modal-title" id="fightforlifeModalLabel">Fight For Your Life Competition</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <h5>SUBMISSION RULES</h5>
          <p>Who can enter the Fright For Your Life short-film competition?</p>
          <p>Fright For Your Life is open to all independent short-film filmmakers anywhere in the world that meet the following criteria:</p>
         <ul class="list-group list-group-flush">
          <li class="list-group-item">Category is horror films only.</li>
          <li class="list-group-item">Films selected will win an opportunity for distribution, and the top streamer will receive an award for most streamed.</li>
          <li class="list-group-item">Total runtime for shorts must be no more than 25 minutes and no less than 23 minutes.</li>
          <li class="list-group-item">The film must not have been screened, broadcasted, streamed, on television, internet, and/or released via home video or other public distribution platforms. They will not be considered so please don’t waste your time or money.</li>
          <li class="list-group-item">Resolution for upload must be no more than 720dp and 700mb… A high resolution of 1080 or 4k will be required if participants win.</li>
          <li class="list-group-item">Must have music clearance.</li>
          <li class="list-group-item">Talent release forms must be signed.</li>
          <li class="list-group-item">Location agreements must be signed.</li>
          <li class="list-group-item">Must have captions.</li>
          <li class="list-group-item">Formatted for upload must be compressed into a  zip file and film must be mp4 or mov.</li>
         </ul>
         <h6 style="mt-5 mb-5">What steps do I need to take to submit to Place My Films for Fright For Your Life?</h6>
         <ol class="list-group list-group-flush">
          <li class="list-group-item">1. Create a good quality film</li>
          <li class="list-group-item">2. Purchase our "Fight For Your Life" plan for $99.00.</li>
          <li class="list-group-item">3. Upload your film to the Place My Films Website.</li>
          <li class="list-group-item">4. Expect us to get back to you with a response to your awesome film.</li>
         </ol>
         <a href="/product/package-99/" title="Purchase &amp; Upload"><button type="button" class="btn btn-dark">Purchase &amp; Upload</button></a>
        </div>
      </div>
    </div>
  </div>
 
  <!-- Click For More Info Modal - Script Pitch Only -->
  <div class="modal fade" id="scriptpitchModal" tabindex="-1" aria-labelledby="scriptpitchModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
     <div class="modal-header">
      <img class="mr-1" src="https://placemyfilms.s3.us-east-2.amazonaws.com/wp-content/uploads/2021/10/13103550/LOGOprofilewhite.png" alt="Place My Films">
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
    </div>
   </div>
  </div>
 
  <!-- Click For More Info Modal - Featured Films Only -->
  <div class="modal fade" id="featuredfilmsModal" tabindex="-1" aria-labelledby="featuredfilmsModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
     <div class="modal-header">
      <img class="mr-1" src="https://placemyfilms.s3.us-east-2.amazonaws.com/wp-content/uploads/2021/10/13103550/LOGOprofilewhite.png" alt="Place My Films">
      <h5 class="modal-title" id="featuredfilmsModalLabel">Featured Films Only</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <p>Upload your film here!
       Film must be 75 minutes
       or longer to qualify.</p>
      <p>Please provide a .zip compressed file.</p>
      <p>File size must not exceed 1GB.</p>
      <p>If your file is larger than 1GB, please use our <a href="/contact-us" title="Contact Us">contact form</a> to reach out to us and we can provide you with a link that allows larger uploads.</p>
      <a href="/product/package-299/" title="Purchase &amp; Upload"><button type="button" class="btn btn-dark">Purchase &amp; Upload</button></a>
     </div>
    </div>
   </div>
  </div>
 

<?php get_footer();




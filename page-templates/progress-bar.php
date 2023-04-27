<?php 

/**
*
* Template Name: Progress-Bar
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

?>



<?php get_header( ); ?>

<div class="background-wrap home-bg-one">


<div class="progress-area section-gap-xl-top section-gap-xl-bottom">
   <div class="container">
      <div class="row justify-content-between align-items-center">
         <div class="col-lg-5">
            <div class="w-feature-content-title mb-5">
               <h3 class="text-bright-gray">We Provide Globally valuable Business Solutions</h3>
               <p class="text-purple-haze body-disply-1 pt-3">Our co-founders Tuomo Riekki and Kristo Ovaska are serial entrepreneurs who, back in 2013, noticed how advanced marketers were starting to ramp up their Facebook advertising,were starting to ramp up.</p>
            </div>
            <div class="progress-bar-wrap">
               <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>SEO Analysis</span><span>85%</span></div>
               </div>
               <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>SEO Audit</span><span>90%</span></div>
               </div>
            </div>
         </div>
         <div class="col-lg-5">
            <img src=<?php echo get_template_directory_uri(  ) ?>.'../assets/img/progress.png' alt="">
         </div>
      </div>
   </div>
</div>


</div>

<?php get_footer( ); ?>
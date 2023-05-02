<?php 

/**
*
* Template Name: Tab
*
* @package: wordpress
* @subpackage: saasto
* @since  1.0.0
* @link  https://developer.wordpress.org/themes/template-files-section/page-template-files/
*/

?>



<?php get_header( ); ?>

<div class="background-wrap home-bg-one">


<div class="tab-area section-gap-xl-top section-gap-xl-bottom">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="w-feature-content-title text-center">
               <h3 class="text-bright-gray">This is our tab section</h3>
               <p class="text-purple-haze body-disply-1 pt-3">Our co-founders Tuomo Riekki and Kristo Ovaska are serial entrepreneurs who</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <ul class="nav nav-pills tab-wrap mb-5 mt-5" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Time tracking</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Productivity management</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Reporting</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">GPS tracking</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Timeshares</button>
               </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="row">
                     <div class="col-lg-6">
                        <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/tab.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                     </div>
                     <div class="col-lg-6">
                        <div class="w-feature-content-title tab-info">
                           <h3 class="text-bright-gray">Analytics & Reporting Brackdown</h3>
                           <p class="text-purple-haze body-disply-1 pt-3">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                           <p class="text-purple-haze body-disply-1 pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                           <p class="text-purple-haze body-disply-1 pt-3 mb-4">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                        </div>
                        <a href="#" class="btn-fill-rounded">CHECK OUT MORE</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="row">
                     <div class="col-lg-6">
                     <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/tab.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                     </div>
                     <div class="col-lg-6">
                        <div class="w-feature-content-title tab-info">
                           <h3 class="text-bright-gray">Analytics & Reporting Brackdown</h3>
                           <p class="text-purple-haze body-disply-1 pt-3">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                           <p class="text-purple-haze body-disply-1 pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                           <p class="text-purple-haze body-disply-1 pt-3 mb-4">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                        </div>
                        <a href="#" class="btn-fill-rounded">CHECK OUT MORE</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="row">
                     <div class="col-lg-6">
                        <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/tab.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                     </div>
                     <div class="col-lg-6">
                        <div class="w-feature-content-title tab-info">
                           <h3 class="text-bright-gray">Analytics & Reporting Brackdown</h3>
                           <p class="text-purple-haze body-disply-1 pt-3">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                           <p class="text-purple-haze body-disply-1 pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                           <p class="text-purple-haze body-disply-1 pt-3 mb-4">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                        </div>
                        <a href="#" class="btn-fill-rounded">CHECK OUT MORE</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                  <div class="row">
                     <div class="col-lg-6">
                        <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/tab.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                     </div>
                     <div class="col-lg-6">
                        <div class="w-feature-content-title tab-info">
                           <h3 class="text-bright-gray">Analytics & Reporting Brackdown</h3>
                           <p class="text-purple-haze body-disply-1 pt-3">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                           <p class="text-purple-haze body-disply-1 pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                           <p class="text-purple-haze body-disply-1 pt-3 mb-4">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                        </div>
                        <a href="#" class="btn-fill-rounded">CHECK OUT MORE</a>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                  <div class="row">
                     <div class="col-lg-6">
                        <img src="<?php echo esc_url(get_template_directory_uri())?>/assets/img/tab.png" alt="<?php echo esc_attr('saasto', 'saasto'); ?>">
                     </div>
                     <div class="col-lg-6">
                        <div class="w-feature-content-title tab-info">
                           <h3 class="text-bright-gray">Analytics & Reporting Brackdown</h3>
                           <p class="text-purple-haze body-disply-1 pt-3">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                           <p class="text-purple-haze body-disply-1 pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
                           <p class="text-purple-haze body-disply-1 pt-3 mb-4">An enim nullam tempor sapien gravida donec enim ipsum porta justo  congue magna at pretium purus pretium ligula </p>
                        </div>
                        <a href="#" class="btn-fill-rounded">CHECK OUT MORE</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


</div>

<?php get_footer( ); ?>
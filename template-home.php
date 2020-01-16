<?php
/*
Template name: Home
 */

get_header();
?>

<section class="slider-section">
<div class="container-fluid ">
<div class="row">
<div class="col-md-12 home-slider" style="
		background: url(<?php the_field('slider_image'); ?>);
		background-size: cover;
		background-position: center;
	">
<div class="slide">
	<div class="col-md-6 slider-caption">
	<?php the_field('slider_caption'); ?>
	
		<!--<h1>
		<span class="text-blue"><img src="<?php bloginfo('template_directory'); ?>/images/logo_icon.png"/>n-Site</span>
		International Geomatics Solutions
		</h1>
		<p>Providing innovative solutions to worldwide pipeline and mapping projects</p>
		<a class="btn blue-btn" href="#">Contact Us</a>-->
	</div>
</div>
<!--<div class="slide">
	<a class="slider-bg" href="#" style="
		background: url(<?php bloginfo('template_directory'); ?>/images/slider_img2.jpg);
		background-size: cover;
		background-position: center;
	"></a>
	<div class="col-md-6 slider-caption">
		<h1>
		<span class="text-blue"><img src="<?php bloginfo('template_directory'); ?>/images/logo_icon.png"/>n-Site</span>
		Helping You Achieve the 
		Most Accuracy
		</h1>
		<p>Providing innovative solutions to worlwide pipeline
and mapping projects</p>
		<a class="btn blue-btn" href="#">Contact Us</a>
	</div>
</div>-->
</div>
</div>
</div>
</section>  

<section class="pt-70 pb-70 emerging-section" style="background: url(<?php the_field('emerging_technologies_background'); ?>);background-size: cover;
background-position: center;">
<div class="container">
<div class="row">
<div class="col-md-12">
<p>
<?php the_field('emerging_technologies'); ?>
<!--Emerging technologies, even when implemented widely in a particular geographic area, may take years to migrate to
specific global regions.-->

</p>
</div>
</div>
</div>
</section>
  
<section class="pt-70 pb-70 about-section" id="AboutUs" style="background: url(<?php the_field('executive_background'); ?>);background-size: cover;
background-position: center; background-attachment: fixed;">
<div class="container relative">
<div class="row">
<div class="col-md-12 mb-40">
<?php if( get_field('executive_heading') ): ?>
    <h1 class="text-center section-heading"><!--EXECUTIVE--><?php the_field('executive_heading'); ?></h1>
<?php endif; ?>

</div>
</div>
<div class="row mb-30  about-block" >
<div class="col-md-4  nplr owner_bio_pic">
<div class="dwayne" style="background: url(<?php the_field('executive_image'); ?>);background-size: cover;
background-position: center;">
<!--<img src="<?php bloginfo('template_directory'); ?>/images/bio.jpg"/>-->
</div>
</div>
<div class="col-md-6 bio">
<?php the_field('biography'); ?>
<!--<h4 class="sub-heading">Dwayne L. Edmundson,&nbsp; A.L.S,&nbsp; BSc. Eng.</h4>
<div class="president"><span>President</span></div>
<p>A graduate of the University of Calgary’s Geomatic Engineering program, Dwayne has 20 years of robust experience in surveying and project management. In 2008, Dwayne elected to start his first company, specializing in oil and gas surveys which organically grew to provide numerous pipeline integrity services. As president of the firm, Dwayne oversaw all aspects of the company.</p>
<p>On-Site International seeks to continue the provision of cutting edge technical services with an unparalleled level of service.
</p>-->
</div>
<div class="col-md-2 budget">
<p><?php the_field('project_expectations'); ?>
<!--Each project should have clear expectations of deliverables and final
cost so you can budget accordingly.--></p>
</div>
</div>

<!--<div class="row about-block vcenter">
<div class="col-md-3 budget">
<p>Each project should have clear expectations of deliverables and final
cost so you can budget accordingly.</p>
</div>
<div class="col-md-6 text-right">
<h4 class="sub-heading">Dwayne L. Edmundson, A.L.S</h4>
<p>On-Site International seeks to continue the provision of cutting edge technical services with an unparalleled level of service.</p>
</div>
<div class="col-md-3 dwayne">
<img src="<?php bloginfo('template_directory'); ?>/images/dwayne_img.jpg"/>
</div>
</div>-->
</div>
</section>


<section class="pt-70 text-white " id="UFlocates" style="background: url(<?php the_field('underground_facility_locates_background'); ?>);background-size: cover;
background-position: center; background-attachment: fixed;">
<div class="container">
<div class="row">
<div class="col-md-10 text-center  mx-auto pb-40">
<h1 class="pb-20 text-white section-heading"><!--Underground Facility Locates--><?php the_field('underground_facility_locates'); ?></h1>
<p><?php the_field('underground_facility_locates_description'); ?></p>
<!--<h1 class="pb-20 text-white section-heading">Underground Facility Locates</h1>
<p>Accurate location of buried facilities is not an exact science. Multiple factors including pipe material, corrosion, soil conditions, proximity of adjacent facilities, and depth can influence detection. It is therefore critical that crews understand proper location techniques and the limitations of their equipment.</p>-->
</div>
</div>

<?php	
// vars
$electro = get_field('electro-magnetic_detection_methods');	
if( $electro ): 
?>	
<div class="row vcenter service-block">
<div class="col-md-2 nplr text-center service-icon">
<img src="<?php echo $electro['image']; ?>"/><!--images/service_icon1.jpg-->
</div>
<div class="col-md-10  service-icon">
<h4 class="sub-heading"><!--Electro-Magnetic detection methods--><?php echo $electro['title']; ?></h4>
<p><?php echo $electro['description']; ?><!--The prime method of buried line locating, using induced currents or detecting cathodic protection currents.--></p>
</div>
</div>	
<?php endif; ?>

<?php	
// vars
$radar = get_field('ground_penetrating_radar');	
if( $radar ): 
?>
<div class="row vcenter  service-block">
<div class="col-md-10 service-icon">
<h4 class="sub-heading"><!--Ground penetrating radar--><?php echo $radar['title']; ?></h4>
<p><?php echo $radar['description']; ?><!--Effective in congested areas, can locate non-conductive lines (concrete/PVC).--></p>
</div>
<div class="col-md-2 nplr text-center service-icon">
<img src="<?php echo $radar['image']; ?>"/><!--/images/service_icon2.jpg-->
</div>
</div>
<?php endif; ?>


<?php	
// vars
$hydrovac = get_field('hydrovac');	
if( $hydrovac ): 
?>
<div class="row vcenter service-block">
<div class="col-md-2 nplr text-center service-icon">
<img src="<?php echo $hydrovac['image']; ?>"/><!--/images/service_icon3.jpg-->
</div>
<div class="col-md-10  service-icon">
<h4 class="sub-heading"><?php echo $hydrovac['title']; ?><!--Hydrovac--></h4>
<p><!--Also known as ‘daylighting’, this method exposes the buried line using a combined high-pressure fluid and vacuum. Daylighting is non-destructive and should be done prior to excavation near any buried facilities.--><?php echo $hydrovac['description']; ?></p>
</div>
</div>
<?php endif; ?>


<div class="row pt-50 text-center">
<div class="col-md-12 bold">
<p><?php the_field('high_cost'); ?><!--A line strike comes with an extremely high cost. Cost to worker safety, production, and the environment.--></p>
</div>
</div>
</div>


<?php
		
// vars
$contact_us_button = get_field('contact_us_button');	

if( $contact_us_button ): ?>
<div class="container-fluid">
<div class="row pt-20 contact-block">
<div class="col-md-12 nplr blue_bg">
<a class="contact-us-btn" href="<?php echo $contact_us_button['url']; ?>"><?php echo $contact_us_button['text']; ?><!--Contact Us--></a>
</div>
</div>
</div> 
<?php endif; ?>
</section>

<section class="pt-60 pb-30 facility-section" id="UFMapping">
<div class="container">
<div class="row">
<div class="col-md-10 text-center  mx-auto pb-40">
<!--<h4 class="sub-heading">EXPLORE CORE DISCIPLINES</h4>-->
<h1 class="pb-20 section-heading"><?php the_field('underground_facility_mapping'); ?><!--UNDERGROUND FACILITY MAPPING--></h1>
<!--<p>Accurate location of buried facilities is not an exact science. Multiple factors including pipe material, corrosion, soil conditions, proximity of adjacent facilities, and depth can influence detection. It is therefore critical that crews understand proper location techniques and the limitations of their equipment.</p>-->
</div>
</div>
<div class="row service-block">


<!--<div class="col-md-6 mb-30">
<div class="survey" style="
		background: url(<?php bloginfo('template_directory'); ?>/images/Surveyor_yellow_Flag.jpg);
		background-size: cover;
		background-position: center;
	">
<div class="survey-desc">	
<h4 class="sub-title">Existing Underground Facilities</h4>
<p>When the location of a buried line is marked, it should be accurately surveyed, which is helpful in future project  planning.</p></div>
</div>
</div>



<div class="col-md-6 mb-30">
<div class="survey" style="
		background: url(<?php bloginfo('template_directory'); ?>/images/Surveyor_on_pipe.jpg);
		background-size: cover;
		background-position: center;
	">

<div class="survey-desc">	
<h4 class="sub-title">New Underground Facilities</h4>
<p>It is becoming common practice to survey the exact location and depth of a buried line at the time of installation.</p>
</div>
</div>
</div>
<div class="col-md-6 mb-30">
<div class="survey" style="
		background: url(<?php bloginfo('template_directory'); ?>/images/Surveyor_pipe_under_construction.jpg);
		background-size: cover;
		background-position: center;
	">
<div class="survey-desc">	
<h4 class="sub-title">Facility Specificatons</h4>
<p>Precise underground facility
locations can be paired with
additional information such as depth,
pipeline specifications, bends, and
weld locations
</p>

</div>
</div>
</div>
<div class="col-md-6 mb-30">
<div class="survey" style="
		background: url(<?php bloginfo('template_directory'); ?>/images/Geographic_Information_Systems.jpg);
		background-size: cover;
		background-position: center;
	">
<div class="survey-desc">	
<h4 class="sub-title">Geographic
Information Systems</h4>
<p>All positional and attribute data can
be uploaded to your company's GIS
system, so you know precisely where
your assets are.</p>
</div>
</div>
</div>-->


<?php
query_posts(array(
   'post_type' => 'services',
   'posts_per_page' => 4,
   'cat' => '1'
)); ?>
<?php
while (have_posts()) : the_post(); 
?>
 <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<div class="col-md-6 mb-30">
<div class="survey" style="
		background: url('<?php echo $thumb['0'];?>');
		background-size: cover;
		background-position: center;
	">
<div class="survey-desc">	
<h4 class="sub-title"><?php the_title(); ?></h4>
<p><?php the_excerpt(); ?></p>
<?php get_the_post_thumbnail_url(); ?>
</div>
</div>
</div>


<?php endwhile; 
wp_reset_query();
 ?>

</div>
</section>


<section class="pt-70 pb-50 text-white black_overlay facility-section" id="PipelineInspection"  style="
		background: url(<?php the_field('pipeline_inspection_background'); ?>);
		background-size: cover;
		background-position: center; background-attachment: fixed;
	"><!--Pipeline_bg.jpg-->
<div class="container">
<div class="row">
<div class="col-md-10 text-center  mx-auto pb-40">
<h1 class="pb-20 text-white section-heading"><?php the_field('pipeline_inspection'); ?><!--PIPELINE INSPECTION--></h1>
</div>
</div>
<div class="row">
<?php
query_posts(array(
   'post_type' => 'services',
   'posts_per_page' => 3,
   'cat' => '3'
)); ?>
<?php
while (have_posts()) : the_post(); 
?>
<div class="col-md-4 text-center service-icon">
<div class="wk_image">
<?php the_post_thumbnail('medium_large'); ?>
</div>
<p><?php the_content(); ?></p>
</div>
<?php endwhile;
wp_reset_query();
 ?>

<!--
<div class="col-md-4 text-center service-icon">
<div class="wk_image">
<img src="<?php bloginfo('template_directory'); ?>/images/Img-1.jpg">
</div>
<p>UAV (Unmanned Aerial Vehicle) pipeline inspection offers unparalleled access to review the condition of pipelines. Inaccessible terrain or security concerns may limit your ability to inspect with boots on the ground. A properly equipped UAV can accomplish this task in a fraction of the time..</p>
</div>
<div class="col-md-4 text-center service-icon">
<div class="wk_image">
<img src="<?php bloginfo('template_directory'); ?>/images/Img-2.jpg">
</div>
<p>UAVs can be equipped with
high-resolution multispectral cameras to
detect ‘hot spots’, ground sloughing, or
unauthorized activities along pipeline
routes.</p>
</div>
<div class="col-md-4 text-center service-icon">
<div class="wk_image">
<img src="<?php bloginfo('template_directory'); ?>/images/Img-3.jpg">
</div>
<p>Pipelines crossing
watercourses pose a unique challenge. Unseen, the depth
of earth coverage in a channel may wash away leaving a
pipe exposed and vulnerable. Regular inspection of
coverage can mitigate the risk of contaminating water
sources.
</p>
</div>
</div>-->
</div>
</div>
</section>


<section class="text-white pt-70 pb-40 white_overlay testimonial-section" id="3Das-builtscanning" style="
		background: url(<?php the_field('3d_as-built_scanning_background'); ?>);
		background-size: cover;
		background-position: center;
	">
<div class="container-fluid ccf">
<div class="row">
<div class="col-md-10 text-center  mx-auto pb-40">
<h1 class="section-heading"><?php the_field('3d_as-built_scanning'); ?><!--3D As-built Scanning--></h1>
</div>
</div>
<div class="client-slide">
<div class="row">

<?php
query_posts(array(
   'post_type' => 'services',
   'posts_per_page' => 3,
   'cat' => '4'
)); ?>
<?php
while (have_posts()) : the_post(); 
?>
	<div class="col-md-2 mb-20">
	<?php the_post_thumbnail('medium_large'); ?>
	</div>
	<div class="col-md-4 quotes">
	<?php the_content(); ?>
	</div>
<?php endwhile;
wp_reset_query();
 ?>



	<!--<div class="col-md-2">
	<img src="./wp-content/uploads/2019/10/10-Plant-to-Digital.jpg"/>
	</div>
	<div class="col-md-4 quotes">
	<p>Engineering design on an existing plant site has always been a challenge. New module and process
designs must account for the location of existing infrastructure, often requiring on-the-fly retrofitting.
No longer is that the case.</p>
	</div>
		<div class="col-md-2">
	<img src="./wp-content/uploads/2019/10/11-Paint-cloud.jpg"/>
	</div>
	<div class="col-md-4 quotes">
	<p>Using terrestrial LiDAR (Light Ranging and Detection), data may now be captured of any above
ground facility. The resulting point cloud, comprised of millions of measurements, is processed to
form a very precise model of the structure.</p>
	</div>-->
</div>
<div class="row">
	<div class="col-md-12 pt-40 bold text-center quotes">
		<p><?php the_field('3d_as-built_scanning_caption'); ?></p>
	</div>
</div>
</div>
</div>
</section>


<?php	
// vars
$pipeline  = get_field('pipeline_anomaly_staking_section');	
if( $pipeline ): 
?>
<section class="pt-60 pb-70 text-white black_overlay text-center staking-section" id="PipelineAnomolyStaking"  style="
		background: url(<?php echo $pipeline['background']; ?>); 
		background-size: cover;
		background-position: center; background-attachment: fixed;
	">
<div class="container-fluid ccf">
<div class="row">
<div class="col-md-10 mx-auto vcenter">
<h1 class="section-heading mb-10"><?php echo $pipeline['title']; ?><!--Pipeline Anomaly Staking--></h1>
<!--<p>As pipelines age they must be regularly be inspected for weaknesses in the pipe walls. When an anomaly is detected it's position must be calculated and surveyed accurately by correlating detection logs to the linear length of the pipe.  </p>
<p>Pipes should be located using hydrovac, to confirm depth before full exposure.</p>-->
<div class="description">
<?php echo $pipeline['caption']; ?>
</div>
</div>
<div class="offset-md-2 col-md-4 mt-30">
<div class="wk_image">
<img src="<?php echo $pipeline['first_image']; ?>"/><!--Exposing-by-hand.jpg-->
</div>
</div>
<div class="col-md-4 mt-30">
<div class="wk_image">
<img src="<?php echo $pipeline['second_image']; ?>"/><!--wrapper-pipe.jpg-->
</div>
</div>
</div>
</div>
</section>
<?php endif ?>


<?php	
// vars
$commitment  = get_field('commitment_to_training_nationals_section');	
if( $commitment ): 
?>
<section class="pt-100 pb-100 text-white text-center training-section"   style="
		background: url(<?php echo $commitment['background']; ?>); 
		background-size: cover;
		background-position: center; background-attachment: fixed;
	">
<div class="container-fluid ccf">
<div class="row">
<div class="col-md-10 mx-auto vcenter">
<h1 class="section-heading mb-10"><?php echo $commitment['title']; ?><!--Commitment To Training Nationals--></h1>
<?php echo $commitment['caption']; ?>
<!--<p>On-Site is committed to training motivated persons in each service area, such that nationals may gradually assume all field activities. Each nation has a vast workforce of varied skills that often require only opportunity so they might succeed.</p>-->
</div>
</div>
</div>
</section>
<?php endif ?>



<?php	
// vars
$contact  = get_field('contact_us');	
if( $contact ): 
?>
<section id="ContactUs" class="pt-70 pb-70 white_overlay contact-section" id="ContactUs"  style="
		background: url(<?php echo $contact['background']; ?>);
		background-size: cover;
		background-position: center; background-attachment: fixed;
	">
<div class="container-fluid ccf">
<div class="row">
<div class="col-md-12 pb-15">
<h1 class="section-heading pb-15"><?php echo $contact['title']; ?><!--Contact us--></h1>
<p><?php echo $contact['caption']; ?></p>
<!--<p>Please fill in the required fields below & we will get back to you within 24 hours.</p>-->
</div>
</div>

<?php echo do_shortcode('[contact-form-7 id="163" title="Contact form"]'); ?>

<!--<div class="row contact-form">
<div class="col-md-3">
<input class="form-control" type="text" placeholder="First Name">
</div>
<div class="col-md-3">
<input class="form-control" type="text" placeholder="Last Name">
</div>
<div class="col-md-6">
<input class="form-control" type="email" placeholder="Email">
</div>
<div class="col-md-6">
<select>
<option>SELECT A SERVICE</option>
<option>Underground Facility Locates</option>
<option>Underground Facility Mapping</option>
<option>Pipeline Inspections</option>
<option>3D As-built Scanning </option>
<option>Pipeline Anomoly Staking</option>
</select>
<select>
<option>SUBJECT/INQUIRY</option>
<option>Request a quote</option>
<option>Request a call back</option>
<option>Additional information</option>
</select>
</div>
<div class="col-md-6">
<textarea placeholder="Message">
</textarea>
</div>
<div class="col-md-12">
<input type="submit" value="Submit">
</div>
</div>-->
</div>
</section> 
<?php endif; ?>


<?php
get_footer();
?>

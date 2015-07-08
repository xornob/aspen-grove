<?php
/**
 * The template for displaying the front page
 *
 * @package Flint/Aspen Grove
 * @since 0.0.1
 *
 */

get_header(); ?>
<?php flint_get_widgets('header'); ?>

  <div id="primary" class="content-area container">

    <div class="row">

      <?php flint_get_widgets('left'); ?>

      <div id="content" role="main" <?php flint_content_class(); ?>>

        <div id="about" class="greenonwhite">

          <h1>Meet Gil</h1>

          <div class="image col-md-3"></div>

          <div class="col-md-9">
            <p>Liscensed Physical Therapist since 1994</p>
            <p>Certified Practitioner: Lower Systems - Dynamic Manual Interface</p>
            <p>Background in Tai Chi and Aikido</p>
          </div>

          <a class="btn btn-success alignright">Learn More</a>

        </div>

        <div id="what_to_expect" class="whiteongreen">
          
          <h1> What to Expect </h1>

            <div> <!-- ROW -->
              <div class="image col-md-3"></div>
              <div class="col-md-9">
                <p>
                  <h3>Manual Therapy</h3>
                  Pain-free hands-on work to help get you healing back in swing
                </p>
              </div>
            </div>
            <div> <!-- ROW -->
              <div class="image col-md-3"></div>
              <div class="col-md-9">
                <p>
                  <h3>Exercise</h3>
                  For flowing, integrated, powerful movement
                </p>
              </div>
            </div>
            <div> <!-- ROW -->
              <div class="image col-md-3"></div>
              <div class="col-md-9">
                <p>
                  <h3>Education</h3>
                  Learn how the process of healing occurs so that you can support your process of recovery
                </p>
            </div>
          </div>
        </div>

        <div id="aspentrees" class="greenonwhite">

          <h1>The Aspen Trees</h1>

          <div class="image col-md-3"></div>

          <div class="col-md-9">
            <p>
              <h3>Like a grove of aspen trees, the human body is made up of many interdependent components</h3>
              <p>
                A grove of aspen trees shares a complex root system; what affects on tree affects the entire organism.
              </p>
              <p>
                Similarly, a human body shares various systems, including the circulatory, muscular, and skeletal systems; what affects one system affects the entire body. The same is true for anatomical parts; while the symptoms may be in the neck, shoulder, or back, the problem may actually be in the hip, knees, or legs.
              </p>
              <p>
                The aspen grove in the logo reminds us to have a holistic approach, and to not lose sight of the person as a whole.
              </p>
            </p>
          </div>
        </div>

        <div id="conditionstreated" class="whiteongreen">

          <h1>Conditions Treated</h1>

          <div class="col-md-4">
            <h4 align="center">Back</h4>
            <h4 align="center">Neck</h4>
            <h4 align="center">Joints</h4>
            <p align="center">arms, legs, and anything in between</p>
          </div>

          <div class="col-md-4">
            <h4 align="center">Chronic fatigue</h4>
            <h4 align="center">Chronic illness</h4>
            <h4 align="center">Autoimmune</h4>
          </div>

          <div class="col-md-4">
            <h4 align="center">Stress Relief</h4>
            <h4 align="center">Improved Sleep</h4>
          </div>

        </div>

      </div><!-- #content .site-content -->

      <?php flint_get_widgets('right'); ?>

    </div><!-- .row -->

  </div><!-- #primary .content-area -->

</div><!-- #page -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>

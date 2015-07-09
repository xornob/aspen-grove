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

        <section id="meet-gil" class="bg-green-light">

          <h2 class="section-title">Meet Gil</h2>

          <div class="image col-md-3"></div>

          <div class="col-md-9">
            <p>Liscensed Physical Therapist since 1994</p>
            <p>Certified Practitioner: Lower Systems - Dynamic Manual Interface</p>
            <p>Background in Tai Chi and Aikido</p>
          </div>

          <a class="btn btn-success alignright">Learn More</a>

        </section>

        <section id="what-to-expect" class="bg-green-dark">

          <h2 class="section-title">What to Expect</h2>

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
        </section>

        <section id="aspen-trees" class="bg-green-light">

          <h2 class="section-title">The Aspen Trees</h2>

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
        </section>

        <section id="conditions-treated" class="bg-green-dark">

          <h2 class="section-title">Conditions Treated</h2>

          <div class="col-md-4">
            <ul class="condition-list">
              <li class="condition-item">Back</li>
              <li class="condition-item">Neck</li>
              <li class="condition-item">Joints<br>
                arms, legs, and anything in between</li>
            </ul>
          </div>

          <div class="col-md-4">
            <ul class="condition-list">
              <li class="condition-item">Chronic fatigue</li>
              <li class="condition-item">Chronic illness</li>
              <li class="condition-item">Autoimmune</li>
            </ul>
          </div>

          <div class="col-md-4">
            <ul class="condition-list">
              <li class="condition-item">Stress Relief</li>
              <li class="condition-item">Improved Sleep</li>
            </ul>
          </div>

        </section>

      </div><!-- #content .site-content -->

      <?php flint_get_widgets('right'); ?>

    </div><!-- .row -->

  </div><!-- #primary .content-area -->

</div><!-- #page -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>

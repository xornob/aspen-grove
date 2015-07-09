<?php
/**
 * The template for displaying the front page
 *
 * @package Flint/Aspen Grove
 * @since 0.0.2
 *
 */

get_header(); ?>
<?php flint_get_widgets('header'); ?>

    <section id="meet-gil" class="bg-green-light">

      <div class="container">
        <div class="row">

          <h2 class="section-title">Meet Gil</h2>

          <a class="btn btn-green-dark topright">Learn More</a>

          <div class="image col-md-4"></div>

          <div class="col-md-8">
            <p>Liscensed Physical Therapist since 1994</p>
            <p>Certified Practitioner: Lower Systems - Dynamic Manual Interface</p>
            <p>Background in Tai Chi and Aikido</p>
          </div>

        </div>
      </div>

    </section>

    <section id="what-to-expect" class="bg-green-dark">

      <div class="container">
        <div class="row">

          <h2 class="section-title">What to Expect</h2>

          <div> <!-- ROW -->
            <div class="image col-md-4"></div>
            <div class="col-md-8">
              <p>
                <p class="callout-header">Manual Therapy</p>
                Pain-free hands-on work to help get you healing back in swing
              </p>
            </div>
          </div>
          <div> <!-- ROW -->
            <div class="image col-md-4"></div>
            <div class="col-md-8">
              <p>
                <p class="callout-header">Exercise</p>
                For flowing, integrated, powerful movement
              </p>
            </div>
          </div>
          <div> <!-- ROW -->
            <div class="image col-md-4"></div>
            <div class="col-md-8">
              <p>
                <p class="callout-header">Education</p>
                Learn how the process of healing occurs so that you can support your process of recovery
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="aspen-trees" class="bg-green-light">
      <div class="container">
        <div class="row">
          <h2 class="section-title">The Aspen Trees</h2>

          <div class="image col-md-4"></div>

          <div class="col-md-8">
            <p class="callout-header">Like a grove of aspen trees, the human body is made up of many interdependent components</p>
            <p class="aspen-text">
              A grove of aspen trees shares a complex root system; what affects on tree affects the entire organism.
            </p>
            <p class="aspen-text">
              Similarly, a human body shares various systems, including the circulatory, muscular, and skeletal systems; what affects one system affects the entire body. The same is true for anatomical parts; while the symptoms may be in the neck, shoulder, or back, the problem may actually be in the hip, knees, or legs.
            </p>
            <p class="aspen-text">
              The aspen grove in the logo reminds us to have a holistic approach, and to not lose sight of the person as a whole.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="conditions-treated" class="bg-green-dark">
      <div class="container">
        <div class="row">
          <h2 class="section-title">Conditions Treated</h2>

          <div class="col-md-4">
            <ul class="condition-list">
              <li class="condition-item">Back</li>
              <li class="condition-item">Neck</li>
              <li class="condition-item">Joints<br>
                <span class="condition-desc">arms, legs, and anything in between</span></li>
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
        </div>
      </div>
    </section>

    <section id="other" class="bg-green-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="section-title">Office</h2>
            {picture}
            <p class="address">107 Peterson St<br>Fort Collins, CO 80524</p>
          </div>
          <div class="col-md-4">
            <h2 class="section-title">Contact</h2>
            <!--<form action="action_page.php" method="POST" accept-charset="UTF-8">
            </form>-->
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
    </section>
</div><!-- #page -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>


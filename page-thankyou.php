<?php
/**
 * Template Name: Thankyou Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package iptvsmart
 */

get_header();
?>

<!-- Start Gradient Banner Area -->
<div class="gradient-banner-area" style="background: linear-gradient(279.99deg, #9F5FF1 -1.19%, #FF54B0 50.96%, #FF9F5A 99.95%);padding-top: 0;">
    <div class="container thankyou">
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div>
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1>Thank You !</h1>
                    <p>We've send the link to your inbox. </p>
                    <a href="<?php echo home_url(); ?>" class="btn btn-primary">Back Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- End Gradient Banner Area -->

  <style>
    .thankyou p {
        color: #262A37;
        font-size: 16px;
        font-weight: bold;
        letter-spacing: 1px;
    }
    .thankyou a {
        background-color: #fff;
        color: #262A37;
        border: none;
        border-radius: 0;
        margin-top: 20px;
        font-weight: 500;
    }
  </style>


<?php

get_footer();

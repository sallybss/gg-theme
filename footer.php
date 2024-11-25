<?php
$logo = get_field("logo"); 
$address = get_field("address"); 
$phone = get_field("phone"); 
$email = get_field("email"); 
$cvr = get_field("cvr"); 
$partner_text = get_field("partner_text"); 
$partner_logo = get_field("partner_logo"); 
$fb_link = get_field("facebook_link"); 
$insta_link = get_field("instagram_link"); 
$ww_link = get_field("ww_link"); 
?>

<footer class="footer">
    <div class="footer-top">
        <!-- Left Section -->
        <div class="footer-left">
            <div class="footer-logo">
                <img src="<?php echo $logo['url']; ?>" alt="Logo" class="logo">
            </div>
            <div class="footer-text">
                <p><?php echo $address; ?></p>
                <p>Tlf: <?php echo $phone; ?><br><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                <p>CVR: <?php echo $cvr; ?></p>
                <p><a href="<?php echo $ww_link; ?>" target="_blank" aria-label="Website"></p>
            </div>
            <div class="social-icons">
                  <?php if ($fb_link): ?>
                   <a href="<?php echo $fb_link; ?>" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                   </a>
              <?php endif; ?>
             <?php if ($insta_link): ?>
                   <a href="<?php echo $insta_link; ?>" target="_blank" aria-label="Instagram">
                   <i class="fab fa-instagram"></i>
                   </a>
             <?php endif; ?>
            </div>
        </div>

        <!-- Right Section -->
        <div class="footer-right">
            <?php if ($partner_logo): ?>
                <img src="<?php echo $partner_logo['url']; ?>" alt="<?php echo $partner_text; ?>" class="partner-logo">
            <?php endif; ?>
            <p><?php echo $partner_text; ?></p>
        </div>
    </div>

    <div class="footer-credits">
        <p>Gadens Gastronomer © <?php echo date('Y'); ?></p>
    </div>
    <?php wp_footer(); ?>
</footer>
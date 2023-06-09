<?php
$mastheadSubheading = $data["masthead_subheading"];
$mastheadHeading = $data["masthead_heading"];
$mastheadButton = $data["masthead_button"];
$mastheadButtonUrl = $data["masthead_button_url"];
$mastheadImage = $data["masthead_image"]
?>

<section class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php if ($mastheadSubheading != null){ ?>
                    <h5 class="masthead__subheading color-red mb-1"><?php echo $mastheadSubheading; ?></h5>
                <?php } ?>

                <?php if ($mastheadHeading != null){ ?>
                    <div class="mb-2">
                        <?php echo $mastheadHeading; ?>
                    </div>

                <?php } ?>

                <?php if ($mastheadButton != null){ ?>
                    <a href="<?php echo $mastheadButtonUrl; ?> " class="main__btn"><?php echo $mastheadButton; ?><img class="ml-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cevron.png" /></a>
                <?php } ?>
            </div>

            <div class="col-12 col-md-6">
                <?php if ($mastheadImage != null){ ?>
                    <img class="masthead__image" src="<?php echo $mastheadImage['url']; ?>">
                <?php } ?>
            </div>
        </div>
    </div>
</section>

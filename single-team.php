<?php
$role = get_field('role');
$experience = get_field('experience');
$content = get_field('content');
$hire_link = get_field('hire_link');
$portfolio = get_field('portfolio');
$social_icon = get_field('social_icon');
$technology = get_field('technology');

?>

<section class="hire-team-section dpt-200 dpb-200">
    <div class="container">
        <div class="row row10">
            <div class="col-lg-3">
                <div class="position-sticky top-0 team-container">
                    <div class="team-member-img radius20 overflow-hidden">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="h-100 w-100 object-cover" />
                    </div>
                    <?php if (!empty($role)): ?><div class="urbanist font18 text-center mt-3 text--color"><?= $role ?></div><?php endif; ?>
                    <?php if (!empty($experience)): ?> <div class="urbanist font18 text-center text--color text-capitalize"> <?= $experience ?> Experience</div><?php endif; ?>
                    <?php if (!empty($hire_link)): ?>
                        <div class="w-100 text-center"> <a href="<?= $hire_link ?>" target="_blank" class="mt-3 theme-btn justify-content-center transition text--color white-btn urbanist font20 rounded-pill text-decoration-none"> Hire Freelancer </a> </div> <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ms-lg-5 tmt-20">
                    <div class="animate--text inter-bold font25 text--color dmb-5 mt-2"><?= the_title(); ?></div>
                    <?php if (!empty($content)): ?> <div class="animate--text inter-bold font16 text--color dmb-5 mt-2"><?= $content; ?></div> <?php endif; ?>
                    <?php if (!empty($social_icon)): ?>
                        <div class="d-flex align-items-center mt-3 animate--text">
                            <?php foreach ($social_icon as $icon): ?>
                                <div class="social-icon me-2"><a target="_blank" href="<?= $icon['url'] ?>"><img src="<?= $icon['icon'] ?>" alt="" class="h-100 w-100 object-fit-contain"></a></div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($portfolio)): ?>
                        <div class="animate--text inter-bold font25 text--color dmb-5 mt-5 text-capitalize"> portfolio </div>
                        <div class=" row row10 mt-3">
                            <?php foreach ($portfolio as $img):
                                if (!empty($img['url'])):
                            ?>
                                    <div class="col-lg-6">
                                        <div class="portfolio-img">
                                            <img src="<?= $img['url'] ?>" alt="" class="w-100 h-100 object-fit-contain">
                                        </div>
                                    </div>
                            <?php endif;
                            endforeach; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($technology)): ?>
                        <div class="animate--text inter-bold font25 text--color dmb-5 mt-5 text-capitalize"> technology </div>
                        <div class="row row10 mt-3">
                            <?php foreach ($technology as $img):
                                if (!empty($img['url'])):
                            ?>
                                    <div class="col-lg-2 col-6 tmb-20">
                                        <div class="technology-img">
                                            <img src="<?= $img['url'] ?>" alt="" class="w-100 h-100 object-fit-contain">
                                        </div>
                                    </div>
                            <?php endif;
                            endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'templates/page-builder.php';
?>
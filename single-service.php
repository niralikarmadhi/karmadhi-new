<section class="sub-hero-section dpt-200">
    <div class="container">
        <div class="col-lg-11 col-12 mx-auto text-center">
            <div class="center-content inter-semibold font100 leading1_2 text--color dmb-40 res_font30"><?= the_title(); ?></div>
            <div class="center-content urbanist font20 leading1_5 text--color"><?= the_excerpt(); ?>
            </div>
        </div>
    </div>
</section>
<section class="image-section dpt-50 dpb-50">
    <div class="container">
        <div class="row">
            <div class="img-part radius15 overflow-hidden center-content">
                <!-- image -->
                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="h-100 w-100 object-cover" />

            </div>
        </div>
    </div>
</section>
<?php
$content = get_field('content');
$service_list = get_field('service_list');
$service_image = get_field('service_image');
?>

<section class="service-list-section">
    <div class="container">
        <div class="col-lg-10 mx-auto">
            <?php if (!empty($content)): ?>
                <div class="urbanist font font20 text--color dmb-150 center-content">
                    <div class="dmb-20"><?= $content; ?></div>
                </div>
            <?php endif; ?>
            <div class="row row25">
                <div class="col-lg-4 dmb-35">
                    <?php if (!empty($service_list['service_list'])): ?>
                        <div class="service-list-area service-list radius15 position-sticky top-0 center-content">
                            <?php if (!empty($service_list['heading'])): ?>
                                <div class="font25 text--color inter-bold"><?= $service_list['heading']; ?></div>
                            <?php endif; ?>
                            <div class="dpt-10">

                                <?php foreach ($service_list['service_list'] as $key => $service):
                                    $id = $service->ID;
                                    $title = $service->post_title;
                                ?>
                                    <a href="<?= the_permalink($id); ?>"
                                        class="service-list text--color radius10 leading1_2 transition text-decoration-none dpt-15 dpb-15 mb-1 font20 inter-semibold w-100 d-flex align-items-center <?= get_the_permalink($id) == home_url($_SERVER['REQUEST_URI']) ? 'active' : '' ?>">
                                        <?php echo $title; ?>
                                        <span class="service-arrow ms-3 transition">
                                            <svg width="27" height="16" viewBox="0 0 27 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" class="transition">
                                                <path fill="#000000" class="transition"
                                                    d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM26.7071 8.70711C27.0976 8.31658 27.0976 7.68342 26.7071 7.29289L20.3431 0.928932C19.9526 0.538408 19.3195 0.538408 18.9289 0.928932C18.5384 1.31946 18.5384 1.95262 18.9289 2.34315L24.5858 8L18.9289 13.6569C18.5384 14.0474 18.5384 14.6805 18.9289 15.0711C19.3195 15.4616 19.9526 15.4616 20.3431 15.0711L26.7071 8.70711ZM1 9H26V7H1V9Z" />
                                            </svg>
                                        </span>
                                    </a>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-8  center-content">
                    <?php if (!empty($service_image)): ?>
                        <div class="service-open-img radius15 overflow-hidden w-100 dmb-50">
                            <img src="<?php echo $service_image; ?>" class="w-100 h-100 object-cover" alt="">
                        </div>
                    <?php endif; ?>
                    <?php if (have_rows("flexible_content")):
                        while (have_rows("flexible_content")):
                            the_row(); ?>

                            <div>
                                <?php if (get_row_layout() == "heading_content"):
                                    $heading = get_sub_field('heading');
                                    $content = get_sub_field('content');
                                ?>
                                    <?php if (!empty($heading)): ?>
                                        <div class="inter-bold font35 text--color"><?= $heading ?></div>
                                    <?php endif; ?>
                                    <?php if (!empty($content)): ?>
                                        <div class="urbanist font20 dmb-30 text--color"><?= $content; ?>
                                        </div>
                                    <?php endif; ?>
                                <?php elseif (get_row_layout() == "list_box"): ?>
                                    <?php
                                    $list_box = get_sub_field('list_item');
                                    ?>
                                    <?php if (!empty($list_box)): ?>
                                        <ul class="urbanist font20 dmb-30 text--color ps-2 dmb-30">
                                            <?php foreach ($list_box as $list): ?>
                                                <li>
                                                    <?php echo $list['item'] ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'templates/page-builder.php';
?>
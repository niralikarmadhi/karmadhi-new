<?php

/* Template Name: Page Builder */

$flexibleContent = get_field("flexible_content");
?>
<?php if (have_rows("flexible_content")):
    while (have_rows("flexible_content")):
        the_row();
        if (get_row_layout() == "hero_section"): ?>
            <section class="home-section">
                <?php
                $heading = get_sub_field('heading');
                $sub_heading = get_sub_field('sub_heading');
                $content = get_sub_field('content');
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <?php if (!empty($heading || $sub_heading)): ?>
                                <div class="inter-semibold font130 leading1_2 space_3 text-center text--color dmb-20 res_space_0 res_font40">
                                    <?= $heading; ?><span class="border-text"><?= $sub_heading; ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($content)): ?>
                                <div class="urbanist font25 leading1_5 fw-normal text-center text--color res_font18">
                                    <?= $content; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif (get_row_layout() == "about_section"): ?>
            <section class="about-section">
                <?php
                $prefix = get_sub_field('prefix');
                $heading = get_sub_field('heading');
                $content = get_sub_field('content');
                $button = get_sub_field('button');

                ?>
                <div class="container">
                    <?php if (!empty($prefix)): ?>
                        <div class="main-title title light-text inter-bold font150 leading1_2 space_3 res_space0 res_font50">
                            <?= $prefix; ?>
                        </div>
                    <?php endif; ?>
                    <div class="row justify-content-between">
                        <?php if (!empty($heading)): ?>
                            <div class="col-lg-6 pe-5 head-title">
                                <div class="inter-semibold font60 leading1_2 space1_5 text--color res_font26 tmb-20">
                                    <?= $heading; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-lg-6 right-content">
                            <?php if (!empty($content)): ?>
                                <div class="urbanist font20 leading1_5 fw-normal text--color res_font16">
                                    <?= $content; ?>
                                </div>
                            <?php endif; ?>
                            <div class="dmt-50">
                                <?php if (!empty($button)): ?>
                                    <a href="<?= $button['url'] ?>" class="theme-btn transition text--color white-btn urbanist font20 rounded-pill text-decoration-none w-100 justify-content-between res_font14">
                                        <span class="btn-text"><?= $button['title'] ?></span>
                                        <span class="arrow">
                                            <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition">
                                                <path
                                                    class="transition"
                                                    d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM26.7071 8.70711C27.0976 8.31658 27.0976 7.68342 26.7071 7.29289L20.3431 0.928932C19.9526 0.538408 19.3195 0.538408 18.9289 0.928932C18.5384 1.31946 18.5384 1.95262 18.9289 2.34315L24.5858 8L18.9289 13.6569C18.5384 14.0474 18.5384 14.6805 18.9289 15.0711C19.3195 15.4616 19.9526 15.4616 20.3431 15.0711L26.7071 8.70711ZM1 9H26V7H1V9Z"
                                                    fill="white" />
                                            </svg>
                                        </span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == "service_section"): ?>
            <section class="service-section">
                <?php
                $prefix = get_sub_field('prefix');
                $heading = get_sub_field('heading');
                $service_posts = get_sub_field('service_post');
                ?>
                <div class="container">
                    <?php if (!empty($prefix)): ?>
                        <div class="main-title title light-text inter-bold font150 leading1_2 space_3 res_space0 res_font50">
                            <?= $prefix; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($prefix)): ?>
                        <div class="col-lg-6 pe-5 dmb-75 tmb-20 head-title">
                            <div class="inter-semibold font60 leading1_2 space1_5 text--color res_font26 tmb-20">
                                <?= $heading; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($service_posts)): ?>
                        <div class="row justify-content-between">
                            <div class="col-lg-6 pe-lg-5 pe-3 service-content">
                                <?php foreach ($service_posts as $service_post) : ?>
                                    <?php
                                    $id = $service_post->ID;
                                    $title = $service_post->post_title;
                                    $excerpt = $service_post->post_excerpt;
                                    ?>
                                    <div class="service-content-cards dpt-50 dpb-50 tpt-25 tpb-25">
                                        <a href="<?= the_permalink($id); ?>" class="text-decoration-none">
                                            <div class="inter-semibold font35 leading1_2 text--color dmb-25 res_font25 tmb-10"><?= $title; ?></div>
                                            <div class="urbanist font20 leading1_2 fw-normal text--color dmb-25 res_font16 tmb-10">
                                                <?= $excerpt; ?>
                                            </div>
                                            <div
                                                class="more-btn text--color white-btn urbanist font20 leading1_5 fw-medium text-decoration-none transition  res_font16">
                                                <span class="btn-text"> View More </span>
                                                <span class="arrow">
                                                    <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        class="transition">
                                                        <path class="transition"
                                                            d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM26.7071 8.70711C27.0976 8.31658 27.0976 7.68342 26.7071 7.29289L20.3431 0.928932C19.9526 0.538408 19.3195 0.538408 18.9289 0.928932C18.5384 1.31946 18.5384 1.95262 18.9289 2.34315L24.5858 8L18.9289 13.6569C18.5384 14.0474 18.5384 14.6805 18.9289 15.0711C19.3195 15.4616 19.9526 15.4616 20.3431 15.0711L26.7071 8.70711ZM1 9H26V7H1V9Z" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-lg-5 right-content d-none d-lg-flex">
                                <div class="services-content-img w-100">
                                    <?php foreach ($service_posts as $service_post) :
                                        $id = $service_post->ID;
                                    ?>
                                        <div class="service-content-img radius15 overflow-hidden">
                                            <img src="<?php echo get_the_post_thumbnail_url($id); ?>" alt="" class="w-100 h-100 object-cover">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == "project_section"): ?>

            <section class="projects-section">
                <?php
                $prefix = get_sub_field('prefix');
                $heading = get_sub_field('heading');
                $project_posts = get_sub_field('project_post');
                ?>
                <div class="container">
                    <?php if (!empty($prefix)): ?>
                        <div class="main-title title light-text inter-bold font150 leading1_2 space_3 res_space0 res_font50">
                            <?= $prefix; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($heading)): ?>
                        <div class="col-lg-6 pe-5 dmb-80 head-title tmb-30">
                            <div class="inter-semibold font60 leading1_2 space1_5 text--color res_font26 tmb-20">
                                <?= $heading; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($project_posts)): ?>
                        <div class="row row40">
                            <?php foreach ($project_posts as $project_post) :
                                $id = $project_post->ID;
                            ?>
                                <div class="col-lg-6 project-cards dmt-120 tmt-10 tpb-10">
                                    <a href="<?= the_permalink($id); ?>">

                                        <div class="project-img card-hover radius30 overflow-hidden position-relative">
                                            <img src="<?php echo get_the_post_thumbnail_url($id); ?>" alt="" class="w-100 h-100 object-cover img">
                                            <div
                                                class="position-absolute top-left-center view-circle inter-bold font25 rounded-pill d-flex justify-content-center align-items-center text--color transition">
                                                View
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == "about_hero_content"): ?>
            <section class="sub-hero-section dpt-200">
                <?php
                $heading = get_sub_field('heading');
                $content = get_sub_field('content');
                ?>
                <div class="container">
                    <div class="col-lg-11 col-12 mx-auto text-center">
                        <?php if (!empty($heading)): ?>
                            <div class="center-content inter-semibold font100 leading1_2 text--color dmb-40 res_font30"><?= $heading ?></div>
                        <?php endif; ?>
                        <div class="col-lg-8 mx-auto">
                            <?php if (!empty($content)): ?>
                                <div class="center-content urbanist font20 leading1_5 text--color res_font14"><?= $content; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == "about_hero_image"): ?>
            <section class="image-section">
                <?php
                $hero_selection = get_sub_field("hero_selection");
                $image = get_sub_field("image");
                $video = get_sub_field('video');
                $vimeo = get_sub_field('vimeo');
                $youtube = get_sub_field('youtube');
                ?>
                <div class="container">
                    <div class="row">
                        <div class="img-part radius15 overflow-hidden center-content">
                            <!-- image -->
                            <?php if ($hero_selection == 'image'): ?>
                                <img src="<?= $image; ?>" alt="" class="h-100 w-100 object-cover" />

                                <!-- video -->
                            <?php elseif ($hero_selection == 'video'): ?>
                                <video playsinline autoplay muted loop class="h-100 w-100 object-cover" id="homeHeroVideo">
                                    <source src="<?= $video; ?>" type="video/mp4" />
                                </video>
                                <!-- viemo -->
                            <?php elseif ($hero_selection == 'vimeo'): ?>
                                <iframe
                                    class="w-100 h-100 object-cover"
                                    src="<?= $vimeo;  ?>"
                                    allow="autoplay; fullscreen">
                                </iframe>
                                <!-- youtube -->
                            <?php elseif ($hero_selection == 'youtube'): ?>
                                <iframe
                                    class="w-100 h-100 object-cover"
                                    src="<?= $youtube; ?>"
                                    allow="autoplay; fullscreen">
                                </iframe>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == "counter_section"): ?>
            <section class="counter-section">
                <?php
                $counter_cards = get_sub_field("counter_card");
                ?>
                <?php if (!empty($counter_cards)): ?>
                    <div class="container">
                        <div class="row row25">
                            <?php foreach ($counter_cards as $counter_card) : ?>
                                <div class="col-xl-3 col-lg-4 counter-card-container dmb-20">
                                    <div class="border border-1 border--color radius15 counter-card">
                                        <div class="text--color inter-semibold font50 leading1_2 mb-1 text-center text-lg-start"><?= $counter_card['number'] ?><span class="plus">+</span></div>
                                        <div class="text--color urbanist font20 leading1_5 text-center text-lg-start"><?= $counter_card['title'] ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                <?php endif; ?>
            </section>
        <?php elseif (get_row_layout() == "team_section"): ?>
            <section class="team-section">
                <?php
                $prefix = get_sub_field('prefix');
                $heading = get_sub_field('heading');
                $button = get_sub_field('button');
                $team_posts = get_sub_field('team_post');
                ?>
                <div class="container">
                    <?php if (!empty($prefix)): ?>
                        <div class="main-title title light-text inter-bold font150 leading1_2 space_3 res_space0 res_font50"><?= $prefix ?></div>
                    <?php endif; ?>
                    <div class="row justify-content-between align-items-end">
                        <?php if (!empty($heading)): ?>
                            <div class="col-lg-7 head-title">
                                <div class="inter-semibold font60 leading1_2 space1_5 text--color res_font26 tmb-20"><?= $heading ?></div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($button['url'])): ?>
                            <div class="col-lg-5 text-end right-content">
                                <a href="<?= $button['url'] ?>" class="theme-btn transition text--color white-btn urbanist font20 rounded-pill text-decoration-none">
                                    <span class="btn-text"><?= $button['title'] ?></span>
                                    <span class="arrow">
                                        <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition">
                                            <path
                                                class="transition"
                                                d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM26.7071 8.70711C27.0976 8.31658 27.0976 7.68342 26.7071 7.29289L20.3431 0.928932C19.9526 0.538408 19.3195 0.538408 18.9289 0.928932C18.5384 1.31946 18.5384 1.95262 18.9289 2.34315L24.5858 8L18.9289 13.6569C18.5384 14.0474 18.5384 14.6805 18.9289 15.0711C19.3195 15.4616 19.9526 15.4616 20.3431 15.0711L26.7071 8.70711ZM1 9H26V7H1V9Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="center-content">
                        <?php if (!empty($team_posts)): ?>
                            <div class="team-section-slider dpt-70">
                                <?php foreach ($team_posts as $team_post) : ?>
                                    <?php
                                    $id = $team_post->ID;
                                    $title = $team_post->post_title;
                                    $role = get_field('role', $id);
                                    ?>
                                    <div class="team-card cursor-pointer" data-id="<?= $id; ?>">
                                        <a href="#memberModalToggle" data-bs-toggle="modal" class="d-inline-block text-decoration-none">
                                            <div class="team-member-img radius30 overflow-hidden transition position-relative">
                                                <img src="<?= get_the_post_thumbnail_url($id); ?>" alt="" class="h-100 transition w-100 object-cover" />
                                                <div
                                                    class="position-absolute top-left-center view-circle inter-bold font25 rounded-pill d-flex justify-content-center align-items-center text--color transition">
                                                    View
                                                </div>
                                            </div>
                                            <div class="dpt-25">
                                                <div class="team-name text--color font30 inter-semibold leading1_2"><?= $title; ?></div>
                                                <div class="team-position text--color mt-1 urbanist font20 leading1_5"><?= $role; ?></div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <div
                class="modal member-modal fade text-center"
                id="memberModalToggle"
                data-bs-backdrop="static"
                aria-hidden="true"
                aria-labelledby="memberModalToggleLabel"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content background--color border-0 radiusS overflow-hidden align-items-center justify-content-center rounded-0">
                        <div class="close-div position-absolute z-3">
                            <button type="button" class="modal-close p-0 close-round border-0 rounded-circle" data-bs-dismiss="modal" aria-label="Close">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="512"
                                    height="512"
                                    x="0"
                                    y="0"
                                    viewBox="0 0 329.269 329"
                                    style="enable-background: new 0 0 512 512"
                                    xml:space="preserve"
                                    class="">
                                    <g transform="matrix(0.8,0,0,0.8,32.92702360153197,32.95340538024902)">
                                        <path
                                            d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.266 21.266 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.273 21.273 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0"
                                            fill="#000000"
                                            opacity="1"
                                            data-original="#000000"
                                            class=""></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        <div id="modalCarouselControls" class="carousel slide h-100" data-bs-ride="carousel">
                            <div class="carousel-inner h-100">
                                <?php if (!empty($team_posts)): ?>
                                    <?php foreach ($team_posts as $key => $team_post) : ?>
                                        <?php
                                        $id = $team_post->ID;
                                        $title = $team_post->post_title;
                                        $content = get_field('content', $id);
                                        $role = get_field('role', $id);
                                        $social_icons = get_field('social_icon', $id);

                                        ?>
                                        <div class="carousel-item  active h-100" id="<?php echo $id; ?>">
                                            <div class="w-100 d-inline-flex flex-column flex-lg-row align-items-center h-100">
                                                <div class="modal-member-img h-100 bg-ExtraLightGray d-flex align-items-center justify-lg-content-end justify-content-center">
                                                    <img src="<?= get_the_post_thumbnail_url($id); ?>" alt="" class="h-100 w-100 object-cover" />
                                                </div>
                                                <div class="modal-member-content text-start w-auto h-100 d-flex align-items-center position-relative">
                                                    <div class="col-12 position-relative">
                                                        <div class="inter-bold font35 leading1_2 text--color dmb-15 tmb-5"><?= $title; ?></div>
                                                        <div class="inter-semibold font16 leading1_2 text--color dmb-20 tmb-35"><?= $role; ?></div>
                                                        <div class="modal-member-desc dmb-70 tmb-30 res-h-fit">
                                                            <div class="urbanist font14 leading1_5 text--color dmb-70"><?= $content; ?>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex align-items-end justify-content-between">
                                                            <ul class="list-none mb-0 ps-0 d-flex">
                                                                <?php

                                                                if (!empty($social_icons)): ?>
                                                                    <?php foreach ($social_icons as $social_icon) : ?>
                                                                        <?php if (!empty($social_icon['url'])): ?>
                                                                            <li class="social-media-li me-3">
                                                                                <a target="_blank"
                                                                                    href="<?= $social_icon['url']; ?>"
                                                                                    class="d-inline-block text-decoration-none social-media-bg rounded-circle d-flex justify-content-center align-items-center"><img src="<?= $social_icon['icon']; ?>" alt="" /></a>
                                                                            </li>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>

                                                            </ul>
                                                            <div class="carousel-arrow d-inline-flex">
                                                                <button
                                                                    class="carousel-control-prev position-initial rotate-circle-negative-full"
                                                                    type="button"
                                                                    data-bs-target="#modalCarouselControls"
                                                                    data-bs-slide="prev">
                                                                    <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition">
                                                                        <path
                                                                            class="transition"
                                                                            d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM26.7071 8.70711C27.0976 8.31658 27.0976 7.68342 26.7071 7.29289L20.3431 0.928932C19.9526 0.538408 19.3195 0.538408 18.9289 0.928932C18.5384 1.31946 18.5384 1.95262 18.9289 2.34315L24.5858 8L18.9289 13.6569C18.5384 14.0474 18.5384 14.6805 18.9289 15.0711C19.3195 15.4616 19.9526 15.4616 20.3431 15.0711L26.7071 8.70711ZM1 9H26V7H1V9Z" />
                                                                    </svg>
                                                                </button>
                                                                <button
                                                                    class="carousel-control-next position-initial"
                                                                    type="button"
                                                                    data-bs-target="#modalCarouselControls"
                                                                    data-bs-slide="next">
                                                                    <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition">
                                                                        <path
                                                                            class="transition"
                                                                            d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM26.7071 8.70711C27.0976 8.31658 27.0976 7.68342 26.7071 7.29289L20.3431 0.928932C19.9526 0.538408 19.3195 0.538408 18.9289 0.928932C18.5384 1.31946 18.5384 1.95262 18.9289 2.34315L24.5858 8L18.9289 13.6569C18.5384 14.0474 18.5384 14.6805 18.9289 15.0711C19.3195 15.4616 19.9526 15.4616 20.3431 15.0711L26.7071 8.70711ZM1 9H26V7H1V9Z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif;  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif (get_row_layout() == "post_page"): ?>
            <?php
            $post_type = get_sub_field('select_post_type');
            ?>
            <?php if ($post_type == 'service'): ?>
                <?php
                $services = new WP_Query([
                    'post_type' => 'service',
                    'posts_per_page' => 6
                ]);
                ?>
                <?php if ($services->have_posts()): ?>
                    <section class="service-cards-section">
                        <div class="container">
                            <div class="row row45">
                                <?php while ($services->have_posts()): $services->the_post();  ?>
                                    <?php
                                    $id = get_the_ID();
                                    $title = get_the_title($id);
                                    $role = get_field('role', $id);
                                    ?>
                                    <div class="col-lg-6 col-12 dmt-95 tmt-35">
                                        <a href="<?= the_permalink($id) ?>" class="service-cards d-inline-block text-decoration-none w-100">
                                            <div class="service-img radius30 overflow-hidden card-hover dmb-20 position-relative">
                                                <img src="<?php echo  get_the_post_thumbnail_url($id) ?>" class="h-100 w-100 object-cover img"
                                                    alt="">
                                                <div
                                                    class="position-absolute top-left-center view-circle inter-bold font25 rounded-pill d-flex justify-content-center align-items-center text--color transition">
                                                    View
                                                </div>
                                            </div>
                                            <div class="inter-bold font35 leading1_2 text--color dmb-5 res_font25"><?= $title; ?></div>
                                            <div class="urbanist font25 text--color"><?= $role; ?></div>
                                        </a>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php elseif ($post_type == 'blogs'): ?>
                <?php
                $blogs = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 6
                ]);
                ?>
                <?php if ($blogs->have_posts()): ?>
                    <section class="blog-cards-section">
                        <div class="container">
                            <div class="blog-card-content">
                                <div class="row row30">
                                    <?php while ($blogs->have_posts()): $blogs->the_post();  ?>
                                        <?php
                                        $id = get_the_ID();
                                        $title = get_the_title($id);
                                        $category = get_the_terms($id, 'category');
                                        ?>
                                        <a class="col-lg-6 blog-card dmb-90 text-decoration-none tmb-45" href="<?= the_permalink($id); ?>">
                                            <div class="blog-img radius30 overflow-hidden dmb-35 card-hover">
                                                <img src="<?php echo  get_the_post_thumbnail_url($id) ?>" class="w-100 h-100 object-cover img" alt="..">
                                            </div>
                                            <div class="d-inline-flex dmb-15">
                                                <div class="urbanist font16 text--color me-2">
                                                    <?php echo get_the_date(); ?>
                                                </div>
                                                <?php if (!empty($category)): ?>
                                                    <?php foreach ($category as $cat) : ?>
                                                        <div class="urbanist font18 text--color">
                                                            <?= $cat->slug; ?>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                            <div>
                                                <div class="tk-inter-tight-variable font35 leading1_2 text-decoration-none text--color res_font25">
                                                    <?= $title; ?>
                                                </div>
                                            </div>
                                        </a>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php elseif ($post_type == 'project'): ?>
                <?php
                $projects = new WP_Query([
                    'post_type' => 'project',
                    'posts_per_page' => 6
                ]);
                ?>
                <?php if ($projects->have_posts()): ?>
                    <section class="service-cards-section">
                        <div class="container">
                            <div class="row row45">
                                <?php while ($projects->have_posts()): $projects->the_post();  ?>
                                    <?php
                                    $id = get_the_ID();
                                    $title = get_the_title($id);

                                    ?>
                                    <div class="col-lg-6 dmt-95 tmt-45">
                                        <a href="<?= the_permalink($id) ?>" class="service-cards d-inline-block text-decoration-none w-100">
                                            <div class="service-img radius30 overflow-hidden card-hover dmb-20 position-relative">
                                                <img src="<?php echo  get_the_post_thumbnail_url($id) ?>" class="h-100 w-100 object-cover img"
                                                    alt="">
                                                <div
                                                    class="position-absolute top-left-center view-circle inter-bold font25 rounded-pill d-flex justify-content-center align-items-center text--color transition">
                                                    View
                                                </div>
                                            </div>
                                            <div class="inter-bold font35 leading1_2 text--color dmb-5 res_font25"><?= $title; ?></div>

                                        </a>
                                    </div>
                                <?php endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </section>
                <?php endif; ?>
            <?php endif ?>
        <?php elseif (get_row_layout() == "testimonial_section"): ?>
            <section class="testimonial-section">
                <?php
                $prefix = get_sub_field('prefix');
                $heading = get_sub_field('heading');
                $testimonial_box = get_sub_field('testimonial_box');
                ?>
                <div class="container">
                    <div class="main-title title light-text inter-semibold font150 leading1_2 space_3 res_space0 res_font50">
                        <?= $prefix; ?>
                    </div>
                    <div class="col-8 head-title">
                        <div class="inter-bold font55 text--color res_font26"> <?= $heading; ?></div>
                    </div>
                    <div class="row row25">
                        <?php foreach ($testimonial_box as $testimonials) :
                            $star_icon = $testimonials['star_icon'];
                        ?>
                            <div class="col-lg-6 dmt-50">
                                <div class="testimonial-cards w-100 radius30 h-100">
                                    <div class="start-icon dmb-10 tmb-20">
                                        <?php for ($i = 1; $i <= $star_icon; $i++): ?>
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/start.svg" class="h-100" alt="">
                                        <?php endfor; ?>

                                    </div>
                                    <?php if (!empty($testimonials['content'])): ?>
                                        <div class="urbanist font20 text--color dmb-30 res_font16 tmb-20"> <?= $testimonials['content'] ?></div>
                                    <?php endif; ?>
                                    <div class="d-flex align-items-center">
                                        <?php if (!empty($testimonials['image'])): ?>
                                            <div class="testimonial-img rounded-pill overflow-hidden">
                                                <img src="<?= $testimonials['image'] ?>" class="w-100 h-100 object-cover"
                                                    alt="">
                                            </div>
                                        <?php endif; ?>
                                        <div class="ms-3">
                                            <?php if (!empty($testimonials['customer_name'])): ?>
                                                <div class="inter-bold font25 text--color dmb-5 res_font18"><?= $testimonials['customer_name'] ?></div>
                                            <?php endif; ?>
                                            <?php if (!empty($testimonials['customer_role'])): ?>
                                                <div class="urbanist font18 text--color res_font14"><?= $testimonials['customer_role'] ?></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == "brand_slider"): ?>
            <section class="logo-marquee-section position-relative overflow-hidden">
                <?php
                $image_slider = get_sub_field("image_slider");
                ?>
                <?php if (!empty($image_slider)) : ?>
                    <div class="marquee">
                        <?php foreach ($image_slider as $slider) : ?>
                            <div class="marquee_inner">
                                <div class="marquee_content">
                                    <div class="brand-bg-logo d-flex align-items-center justify-content-center">
                                        <div class="brand-logo">
                                            <img src="<?= $slider['image']; ?>" class="h-100" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
        <?php elseif (get_row_layout() == "faq_section"): ?>
            <section class="faq-section position-relative overflow-hidden">
                <?php
                $prefix = get_sub_field('prefix');
                $heading = get_sub_field('heading');
                $accordians = get_sub_field('accordian');
                ?>
                <div class="container">
                    <?php if (!empty($prefix)): ?>
                        <div class="main-title main-center center-content light-text inter-semibold font150 leading1_2 space_3 res_space0 res_font50">
                            <?= $prefix; ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($heading)): ?>
                        <div class="col-lg-8 m-auto center-content">
                            <div class="inter-semibold font60 text--color res_font26"> <?= $heading; ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($accordians)): ?>
                        <div class="closet-accordion dmt-70">
                            <?php foreach ($accordians as $accordian) : ?>

                                <div class="closet-item">
                                    <div class="closet-header d-flex align-items-center justify-content-between cursor-pointer dpt-40 dpb-40 tpt-20 tpb-20">
                                        <?php if (!empty($accordian['heading'])): ?>
                                            <div class="closet-header-title inter-semibold font35 text--color res_font20">
                                                <?= $accordian['heading']; ?></div>
                                        <?php endif; ?>
                                        <div class="accordion-close transition rounded-pill d-flex justify-content-center align-items-center ">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/right-arrow.svg" class="transition" alt="">
                                        </div>
                                    </div>
                                    <?php if (!empty($accordian['heading'])): ?>
                                        <div class="closet-content dpb-40">
                                            <div class="urbanist font20 leading1_5 text--color col-lg-9 col-11 res_font14"><?= $accordian['content']; ?></div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == "article_section"):
            $prefix = get_sub_field("prefix");
            $heading = get_sub_field("heading");
            $content = get_sub_field("content");
            $button = get_sub_field("button");
            $news_post = get_sub_field("news_post");
        ?>
            <section class="related-blog-section">
                <div class="container">
                    <?php if (!empty($prefix)): ?>
                        <div class="main-title title light-text inter-bold font150 leading1_2 space_3 res_space0 res_font50">
                            <?= $prefix; ?>
                        </div>
                    <?php endif; ?>
                    <div class="row dmb-70">
                        <div class="col-lg-7 head-title">
                            <?php if (!empty($heading)): ?>
                                <div class="inter-semibold font60 leading1_2 space1_5 text-capitalize text--color dmb-25 res_font26">
                                    <?= $heading; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($content)): ?>
                                <div class="col-lg-10">
                                    <div class="urbanist font20 leading1_5 fw-normal text--color res_font18">
                                        <?= $content; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-5 d-flex justify-content-lg-end align-items-end right-content tmt-20">
                            <?php if (!empty($button['title'])): ?>
                                <a href="<?= $button['url']; ?>"
                                    class="theme-btn transition text--color white-btn urbanist font20 rounded-pill text-decoration-none res_font14">
                                    <span class="btn-text"> <?= $button['title']; ?></span>
                                    <span class="arrow">
                                        <svg width="27" height="16" viewBox="0 0 27 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="transition">
                                            <path class="transition"
                                                d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM26.7071 8.70711C27.0976 8.31658 27.0976 7.68342 26.7071 7.29289L20.3431 0.928932C19.9526 0.538408 19.3195 0.538408 18.9289 0.928932C18.5384 1.31946 18.5384 1.95262 18.9289 2.34315L24.5858 8L18.9289 13.6569C18.5384 14.0474 18.5384 14.6805 18.9289 15.0711C19.3195 15.4616 19.9526 15.4616 20.3431 15.0711L26.7071 8.70711ZM1 9H26V7H1V9Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row row20">
                        <?php if (!empty($news_post)): ?>
                            <?php foreach ($news_post as $news) : ?>
                                <?php
                                $id = $news->ID;
                                $title = $news->post_title;
                                $category = get_the_terms($id, 'category');
                                ?>
                                <a class="col-lg-4 related-blog-card dmb-90 tmb-40 text-decoration-none" href="<?= the_permalink($id) ?>">
                                    <div class="article-img radius30 overflow-hidden dmb-35 card-hover tmb-20">
                                        <img src="<?php echo get_the_post_thumbnail_url($id); ?>" class="w-100 h-100 object-cover img" alt="..">
                                    </div>
                                    <div class="d-inline-flex dmb-15 align-items-center">
                                        <div class="urbanist font16 text--color me-2 res_font12">
                                            <?php echo get_the_date(); ?>
                                        </div>
                                        <?php if (!empty($category)): ?>
                                            <?php foreach ($category as $cat) : ?>
                                                <div class="urbanist font18 text--color res_font16">
                                                    <?= $cat->name; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php if (!empty($title)): ?>
                                        <div>
                                            <div class="inter-bold font26 leading1_2 text-decoration-none text--color res_font20">
                                                <?php echo $title; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                </div>
            </section>
        <?php elseif (get_row_layout() == "get_in_touch_section"): ?>
            <section class="contact-us-section">
                <?php
                $heading = get_sub_field('heading');
                $content = get_sub_field('content');
                $location = get_sub_field('location');
                $email = get_sub_field('email');
                $contact = get_sub_field('contact');
                ?>
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-5 col-12 head-title">
                            <?php if (!empty($heading)): ?>
                                <div class="inter-bold font60 leading1_2 text--color dmb-25">
                                    <?= $heading ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($content)): ?>
                                <div class="urbanist font20 leading1_5 text--color dmb-50">
                                    <?= $content; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($location['url'])): ?>
                                <div class="col-lg-8 col-12 dmb-35 pe-lg-3">
                                    <div class="contact-content text-decoration-none radius60 d-flex p-4 align-items-center">
                                        <div
                                            class="contact-bg-img d-flex justify-content-center align-items-center rounded-circle me-3">
                                            <div class="contact-img">
                                                <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/location.svg" alt="...">
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="inter-bold font25 leading1_2 text--color mb-1">
                                                Our office
                                            </div>
                                            <div>
                                                <a class="urbanist font18 leading1_2 text--color text-decoration-none" href=" <?= $location['url']; ?>" target="_blank">
                                                    <?= $location['title']; ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($email)): ?>
                                <div class="col-lg-8 col-12 dmb-35 pe-lg-3">
                                    <div class="contact-content text-decoration-none radius60 d-flex p-4 align-items-center">
                                        <div
                                            class="contact-bg-img d-flex justify-content-center align-items-center rounded-circle me-3">
                                            <div class="contact-img">
                                                <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/mail-img.svg" alt="...">
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="inter-bold font25 leading1_2 text--color mb-1">
                                                Our office
                                            </div>
                                            <div>
                                                <a class="urbanist font18 leading1_2 text--color text-decoration-none" href="mailto:<?= $email; ?>">
                                                    <?= $email; ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($contact)): ?>
                                <div class="col-lg-8 col-12 dmb-35 pe-lg-3">
                                    <div class="contact-content text-decoration-none radius60 d-flex p-4 align-items-center">
                                        <div
                                            class="contact-bg-img d-flex justify-content-center align-items-center rounded-circle me-3">
                                            <div class="contact-img">
                                                <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/phone_no.svg" alt="...">
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="inter-bold font25 leading1_2 text--color mb-1">
                                                Our office
                                            </div>
                                            <div>
                                                <a class="urbanist font18 leading1_2 text--color text-decoration-none" href="tel:<?= $contact; ?>">
                                                    <?= $contact; ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-6 col-12 contact-us-form dpt-50 dpb-50 radius30 px-lg-5 px-3 tpt-25 tpb-25 border border--color right-content">
                            <?php echo do_shortcode('[contact-form-7 id="c7b419e" title="Contact form 1"]') ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == "our_location_section"): ?>
            <section class="location-section">
                <?php
                $heading = get_sub_field('heading');
                $content = get_sub_field('content');
                $location_box = get_sub_field('location_box');
                ?>

                <div class="container">
                    <div class="col-lg-8 mx-auto dmb-60 pe-lg-5 center-content">
                        <?php if (!empty($heading)): ?>
                            <div class="inter-bold font60 leading1_2 text-center text--color dmb-25">
                                <?= $heading; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($content)): ?>
                            <div class="urbanist font20 leading1_5 text-center text--color">
                                <?= $content; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="row row20">
                        <?php if (!empty($location_box)): ?>
                            <?php foreach ($location_box as $location) : ?>
                                <div class="col-lg-6 col-12 tmb-25">
                                    <?php if (!empty($location['image'])): ?>
                                        <div class="location-card radius30 overflow-hidden dmb-25">
                                            <img class="w-100 h-100 object-cover" src="<?= $location['image']; ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($location['office_name'])): ?>
                                        <div class="d-flex align-items-center dmb-10">
                                            <?php if (!empty($location['location_flag'])): ?>
                                                <div class="flag-img me-2">
                                                    <img src="<?= $location['location_flag'] ?>" alt="" class="w-100 object-fit-contain">
                                                </div>
                                            <?php endif; ?>

                                            <div class="inter-bold font30 leading1_2 text--color">
                                                <?= $location['office_name']; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($location['location'])): ?>
                                        <div class="urbanist font20 leading1_5 text--color"><?= $location['location']; ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == "our_technology_section"): ?>
            <section class="dmt-200 dmb-200">
                <?php
                $heading = get_sub_field('heading');
                $content = get_sub_field('content');
                $language_box = get_sub_field('language_box');
                $language_counter = 1;
                ?>
                <div class="container">
                    <div class="dmb-100 text-center head-title">
                        <?php if (!empty($heading)): ?>
                            <div class="inter-bold font100 leading1_2 fw-bold text--color dmb-20 res_font45">
                                <?= $heading; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($content)): ?>
                            <div class="urbanist font20 fw-normal text--color col-10 mx-auto">
                                <?= $content; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="dmt-100">
                        <div class="row row20">
                            <?php if (!empty($language_box)): ?>
                                <?php foreach ($language_box as $key => $languages) : ?>

                                    <div class="technology-card col-lg-4 col-md-6 dmb-40">
                                        <div class="position-relative logo--bg border--color border radius30 dpt-50 dpb-50 px-5">
                                            <div class="tech-count urbanist font50 fw-medium text--color position-absolute">
                                                <?= $language_counter; ?>
                                            </div>
                                            <div class="d-flex align-items-center flex-column">
                                                <?php if (!empty($languages['image'])): ?>
                                                    <div class="tech-img dmb-15">
                                                        <img src="  <?= $languages['image']; ?>" alt=""
                                                            class="w-100 h-100 object-cover">
                                                    </div>
                                                <?php endif; ?>
                                                <?php if (!empty($languages['name'])): ?>
                                                    <div class="inter-semibold font30 text--color text-center">
                                                        <?= $languages['name']; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $language_counter++; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == "spacing"):

            $desktop = get_sub_field("desktop");
            $tablet = get_sub_field("tablet");
            $mobile = get_sub_field("mobile");
            $desktop_mb = $desktop["margin_bottom"];
            $desktop_mb_main = !empty($desktop["margin_bottom"]) ? " dmb-" : "";
            $tablet_mb = $tablet["margin_bottom"];
            $tablet_mb_main = !empty($tablet["margin_bottom"]) ? " tmb-" : "";
            $mobile_mb = $mobile["margin_bottom"];
            $mobile_mb_main = !empty($mobile["margin_bottom"]) ? " mmb-" : "";
            $paddingPosition = get_sub_field("padding_position");
        ?>
            <div class="spacing<?php
                                echo $desktop_mb_main;
                                echo $desktop_mb;
                                echo $tablet_mb_main;
                                echo $tablet_mb;
                                echo $mobile_mb_main;
                                echo $mobile_mb;
                                ?>" id="<?php echo $paddingPosition == "top"
                                            ? "spacing-$paddingPosition"
                                            : "spacing-$paddingPosition"; ?>"></div>
        <?php elseif (get_row_layout() == "hire_freelancer"): ?>
            <section class="team-section">
                <?php
                $prefix = get_sub_field('prefix');
                $heading = get_sub_field('heading');
                $master = new WP_Query([
                    'post_type' => 'team',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                ]);
                ?>
                <div class="container">
                    <?php if (!empty($prefix)): ?>
                        <div class="main-title title light-text inter-bold font150 leading1_2 space_3 res_space0 res_font50"><?= $prefix ?></div>
                    <?php endif; ?>
                    <div class="row justify-content-between align-items-end">
                        <?php if (!empty($heading)): ?>
                            <div class="col-lg-7 head-title">
                                <div class="inter-semibold font60 leading1_2 space1_5 text--color res_font26 tmb-20"><?= $heading ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="center-content freelancer-team row row10 dpt-50">
                        <?php if ($master->have_posts()):
                            while ($master->have_posts()):
                                $master->the_post();
                                $id = $master->ID;
                                $role = get_field('role', $id);
                                $hire_link = get_field('hire_link', $id);
                        ?>
                                <div class="team-card cursor-pointer col-lg-4 col-12 dmb-50 tmb-25" data-id="<?= $id; ?>">
                                    <a href="<?= get_permalink($id);?>" class="d-inline-block text-decoration-none w-100">
                                        <div class="team-member-img radius30 overflow-hidden transition position-relative">
                                            <img src="<?= get_the_post_thumbnail_url($id); ?>" alt="" class="h-100 transition w-100 object-cover" />
                                            <div
                                                class="position-absolute top-left-center view-circle inter-bold font25 rounded-pill d-flex justify-content-center align-items-center text--color transition">
                                                View
                                            </div>
                                        </div>
                                        <div class="dpt-25">
                                            <div class="team-name text--color font30 inter-semibold leading1_2"><?= get_the_title($id); ?></div>
                                            <div class="team-position text--color mt-1 urbanist font20 leading1_5"><?= $role; ?></div>
                                            <?php if (!empty($hire_link)): ?> <a href="<?=$hire_link ?>" class="mt-3 theme-btn transition text--color white-btn urbanist font20 rounded-pill text-decoration-none" > Hire Freelancer </a> <?php endif; ?>
                                        </div>
                                    </a>
                                </div>
                        <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
            </section>
<?php endif;
    endwhile;
endif; ?>
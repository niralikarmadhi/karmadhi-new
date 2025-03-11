    <?php
    $header_logo = get_field('header_logo', 'option');
    $white_logo = get_field('white_logo', 'option');
    $black_logo = get_field('black_logo', 'option');
    $nav_links = get_field('nav_link', 'option');
    $link_or_modal = get_field('link_or_modal', 'option');
    $get_started_button = get_field('get_started_button', 'option');
    $modal_button_text = get_field('modal_button_text', 'option');
    ?>
    <header class="dpt-30 dpb-30 header position-fixed w-100 top-0">
        <div class="container-large">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3">
                    <div class="header-logo">
                        <a href="<?php echo get_home_url(); ?>" class="h-100">
                            <?php if (!empty($white_logo)): ?>
                                <img src="<?php echo $white_logo; ?>" alt="" class="h-100 object-fit-contain white-logo" />
                            <?php endif; ?>
                            <?php if (!empty($black_logo)): ?>
                                <img src="<?php echo $black_logo; ?>" alt="" class="h-100 object-fit-contain black-logo" />
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header-container">
                        <?php if (!empty($nav_links)): ?>
                            <ul class="d-flex header-menu w-fit mx-auto align-items-center mb-0 p-0 list-none logo--bg rounded-pill px-2 justify-content-center">
                                <?php foreach ($nav_links as $nav_link) : ?>
                                    <?php if (!empty($nav_link['sub_link'])): ?>
                                        <?php if (!empty($nav_link['link']['url'])): ?>
                                            <li class="menu-link">
                                                <a href="<?php echo $nav_link['link']['url'] ?>" class="text-decoration-none text--color font20 urbanist leading1_2 d-flex">
                                                    <?php echo $nav_link['link']['title'] ?>
                                                    <span class="sub-arrow">
                                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/down-arrow.svg" alt="" class="h-100 w-100 object-fit-contain" />
                                                    </span>
                                                    <div class="sub-menu position-absolute logo--bg border border--color radius20">
                                                        <ul class="mb-0 ps-0 list-none">
                                                            <?php if (!empty($nav_link['sub_link'])): ?>
                                                                <?php foreach ($nav_link['sub_link'] as $sub_link) : ?>
                                                                    <?php if (!empty($sub_link['link']['url'])): ?>
                                                                        <li><a href="<?php echo $sub_link['link']['url'] ?>" class="text--color text-decoration-none font20 urbanist leading1_2"><?php echo $sub_link['link']['title'] ?></a></li>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <?php if (!empty($nav_link['link']['url'])): ?>
                                            <li class="menu-link">
                                                <a href="<?php echo $nav_link['link']['url'] ?>" class="text-decoration-none text--color font20 urbanist leading1_2"><?php echo $nav_link['link']['title'] ?></a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                            </ul>
                        <?php endif; ?>
                    </nav>
                </div>
                <div class="col-lg-3 text-end">
                    <?php if ($link_or_modal == 'link'): ?>
                        <?php if (!empty($get_started_button['url'])): ?>
                            <a href="<?php echo $get_started_button['url'] ?>" class="theme-btn transition text--color white-btn urbanist font20 rounded-pill text-decoration-none">
                                <span class="btn-text"><?php echo $get_started_button['title'] ?></span>
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
                    <?php else: ?>
                        <?php if (!empty($modal_button_text)): ?>
                            <a href="#FreeQuote" class="theme-btn transition text--color text-decoration-none white-btn urbanist font20 rounded-pill" data-bs-toggle="modal">
                                <span class="btn-text"><?= $modal_button_text; ?></span>
                                <span class="arrow">
                                    <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                        class="transition">
                                        <path class="transition"
                                            d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM26.7071 8.70711C27.0976 8.31658 27.0976 7.68342 26.7071 7.29289L20.3431 0.928932C19.9526 0.538408 19.3195 0.538408 18.9289 0.928932C18.5384 1.31946 18.5384 1.95262 18.9289 2.34315L24.5858 8L18.9289 13.6569C18.5384 14.0474 18.5384 14.6805 18.9289 15.0711C19.3195 15.4616 19.9526 15.4616 20.3431 15.0711L26.7071 8.70711ZM1 9H26V7H1V9Z"
                                            fill="white" />
                                    </svg>
                                </span>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>
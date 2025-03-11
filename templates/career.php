<?php
/* Template Name: Career */
?>

<!-- job-opening-section -->
<section class="dmt-200 dmb-200">
    <?php
    $heading = get_field('hero_heading');
    $content = get_field('content');
    $button_title = get_field('button_title');
    $vacancy_box = get_field('vacancy_box');
    ?>
    <div class="container">
        <div class="dmb-100 text-center">
            <?php if (!empty($heading)): ?>
                <div class="inter-bold font100 leading1_2 fw-bold text--color dmb-20 res_font45">
                    <?= $heading; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($content)): ?>
                <div class="urbanist font20 fw-normal text--color col-lg-10 col-12 mx-auto">
                    <?= $content; ?>
                </div>
            <?php endif; ?>
            <?php if (!empty($button_title)): ?>
                <div class="dmt-30">
                    <button class="theme-btn transition text--color white-btn urbanist font20 rounded-pill"
                        href="#jobModal" data-bs-toggle="modal">
                        <span class="btn-text"><?= $button_title; ?></span>
                        <span class="arrow">
                            <svg width="27" height="16" viewBox="0 0 27 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="transition">
                                <path class="transition"
                                    d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM26.7071 8.70711C27.0976 8.31658 27.0976 7.68342 26.7071 7.29289L20.3431 0.928932C19.9526 0.538408 19.3195 0.538408 18.9289 0.928932C18.5384 1.31946 18.5384 1.95262 18.9289 2.34315L24.5858 8L18.9289 13.6569C18.5384 14.0474 18.5384 14.6805 18.9289 15.0711C19.3195 15.4616 19.9526 15.4616 20.3431 15.0711L26.7071 8.70711ZM1 9H26V7H1V9Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
        <?php if (!empty($vacancy_box)): ?>
            <div class="dmt-100">
                <div class="row row20">
                    <?php foreach ($vacancy_box as $vacancy) : ?>
                        <div class="col-lg-6 dmb-60">
                            <div class="logo--bg border--color border radius30 dpt-50 dpb-50 px-lg-5 px-4 h-100 tpt-25 tpb-25">
                                <?php if (!empty($vacancy['post_name'])): ?>
                                    <div class="inter-semibold font40 fw-medium text--color dmb-20 res_font30">
                                        <?= $vacancy['post_name'] ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($vacancy['vacancy'])): ?>
                                    <div class="urbanist font20 text--color dmb-10">
                                        <span class="fw-medium">Openings : </span> <?= $vacancy['vacancy'] ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($vacancy['experience'])): ?>
                                    <div class="urbanist font20 text--color dmb-10">
                                        <span class="fw-medium">Experience : </span> <?= $vacancy['experience'] ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($vacancy['location'])): ?>
                                    <div class="urbanist font20 text--color dmb-10">
                                        <span class="fw-medium">Location : </span> <?= $vacancy['location'] ?>
                                    </div>
                                <?php endif; ?>
                                <a href="#jobModal" data-bs-toggle="modal"
                                    class="theme-btn transition text--color white-btn urbanist font20 rounded-pill text-decoration-none dmt-20">
                                    <span class="btn-text">Apply</span>
                                    <span class="arrow">
                                        <svg width="27" height="16" viewBox="0 0 27 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="transition">
                                            <path class="transition"
                                                d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM26.7071 8.70711C27.0976 8.31658 27.0976 7.68342 26.7071 7.29289L20.3431 0.928932C19.9526 0.538408 19.3195 0.538408 18.9289 0.928932C18.5384 1.31946 18.5384 1.95262 18.9289 2.34315L24.5858 8L18.9289 13.6569C18.5384 14.0474 18.5384 14.6805 18.9289 15.0711C19.3195 15.4616 19.9526 15.4616 20.3431 15.0711L26.7071 8.70711ZM1 9H26V7H1V9Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Job Modal -->
<div class="modal fade job-modal" id="jobModal" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="jobModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content logo--bg border-0 radiusS overflow-hidden align-items-center justify-content-center rounded-0">
                <div class="close-div position-absolute z-3">
                    <button type="button" class="modal-close p-0 close-round border-0 rounded-circle"
                        data-bs-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                            viewBox="0 0 329.269 329" style="enable-background: new 0 0 512 512"
                            xml:space="preserve" class="">
                            <g transform="matrix(0.8,0,0,0.8,32.92702360153197,32.95340538024902)">
                                <path
                                    d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.266 21.266 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.273 21.273 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0"
                                    fill="#000000" opacity="1" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="contact-us-form px-5 dpt-80 dpb-50 ">
                    <?php echo do_shortcode('[contact-form-7 id="cced0e5" title="Career Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$white_logo = get_field('white_logo', 'option');
$black_logo = get_field('black_logo', 'option');
// $footer_logo = get_field('footer_logo', 'option');
$content = get_field('content', 'option');
$social_icons = get_field('social_icon', 'option');
$news_letter_heading = get_field('news_letter_heading', 'option');
$contact_box = get_field('contact_box', 'option');
$contact_box2 = get_field('contact_box2', 'option');
$footer_links = get_field('footer_link', 'option');
$copyright_text = get_field('copyright_text', 'option');


?>
<footer class="footer">
    <div class="container-large">
        <div class="row align-items-baseline">
            <div class="col-xl-7">
                <a href="#" class="d-inline-flex">
                    <!-- white logo -->
                    <?php if (!empty($white_logo)): ?>
                        <div class="footer-logo white-footer-logo dmb-20 d-block">
                            <img src="<?= $white_logo; ?>" alt="" class="w-100 h-100 object-cover">
                        </div>
                    <?php endif; ?>
                    <!-- black logo -->
                    <?php if (!empty($black_logo)): ?>
                        <div class="footer-logo black-footer-logo dmb-20 d-none">
                            <img src="<?= $black_logo; ?>" alt="" class="w-100 h-100 object-cover">
                        </div>
                    <?php endif; ?>
                </a>
                <?php if (!empty($content)): ?>
                    <div class="urbanist font20 text--color dmb-10 col-lg-7 col-12">
                        <?= $content; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($social_icons)): ?>
                    <div class="social-media d-flex align-items-center dmt-30">
                        <?php foreach ($social_icons as $social_icon) : ?>
                            <?php if (!empty($social_icon['social_link'])): ?>
                                <a href="<?= $social_icon['social_link'] ?>" target="_blank"
                                    class="logo--bg social-icon rounded-5 d-flex align-items-center justify-content-center me-4">
                                    <img src="<?= $social_icon['icon'] ?>" alt="">
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>

                    </div>
                <?php endif; ?>
            </div>
            <div class="col-xl-5 tmt-50">
                <?php if (!empty($news_letter_heading)): ?>
                    <div class="inter-bold font30 text--color dmb-10 tmb-0">
                        <?= $news_letter_heading; ?>
                    </div>
                <?php endif; ?>
                <div class="position-relative d-flex justify-content-start align-items-center dmt-40 email-input">
                    <?php echo do_shortcode('[contact-form-7 id="9718edf" title="News Letter"]') ?>

                </div>
            </div>
        </div>

        <div class="spacing dmb-50"></div>
        <div class="divider border border-bottom-0 border-start-0 border-end-0 border--color"></div>
        <div class="spacing dmb-50"></div>

        <div class="d-flex align-items-baseline justify-content-between flex-lg-row flex-column-reverse">
            <div class="d-flex col-lg-6 col-12 flex-wrap">
                <div class="contact-details tmt-25 col-lg-5 me-lg-5">
                    <!-- <?php if (!empty($contact_box['heading'])): ?>
                        <div class="inter-bold font30 text--color dmb-25">
                            <?= $contact_box['heading'] ?>
                        </div>
                    <?php endif; ?> -->

                    <?php if (!empty($contact_box['location_logo'])): ?>
                        <div class="location-logo dmb-25">
                          <img src="<?= $contact_box['location_logo'] ?>" class="w-100 object-fit-contain" alt="">
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($contact_box['contact_number'])): ?>
                        <a href="tel:<?= $contact_box['contact_number'] ?>" class="d-flex align-items-center dmb-20 text-decoration-none">
                            <div class="detail-icon pe-2">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/phone.svg" alt="" class="w-100 h-100">
                            </div>
                            <div class="urbanist font20 text--color">
                                <?= $contact_box['contact_number'] ?>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($contact_box['email'])): ?>
                        <a href="mailto:<?= $contact_box['email'] ?>" class="d-flex align-items-center dmb-20 text-decoration-none">
                            <div class="detail-icon pe-2">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/email.svg" alt="" class="w-100 h-100">
                            </div>
                            <div class="urbanist font20 text--color">
                                <?= $contact_box['email'] ?>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($contact_box['location'])): ?>
                        <a href="<?= $contact_box['location']['url'] ?>" target="_blank" class="text-decoration-none d-inline-flex  dmb-20">
                            <div class="detail-icon pe-2">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/location.svg" alt="" class="w-100 h-100">
                            </div>
                            <div class="urbanist font20 text--color">
                                <?= $contact_box['location']['title'] ?>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="contact-details tmt-25 col-lg-5">
                    <!-- <?php if (!empty($contact_box2['heading'])): ?>
                        <div class="inter-bold font30 text--color dmb-25">
                            <?= $contact_box2['heading'] ?>
                        </div>
                    <?php endif; ?> -->
                    <?php if (!empty($contact_box2['location_logo'])): ?>
                        <div class="location-logo dmb-25">
                          <img src="<?= $contact_box2['location_logo'] ?>" class="w-100 object-fit-contain" alt="">
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($contact_box2['contact_number'])): ?>
                        <a href="tel:<?= $contact_box2['contact_number'] ?>" class="d-flex align-items-center dmb-20 text-decoration-none">
                            <div class="detail-icon pe-2">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/phone.svg" alt="" class="w-100 h-100">
                            </div>
                            <div class="urbanist font20 text--color">
                                <?= $contact_box2['contact_number'] ?>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($contact_box2['email'])): ?>
                        <a href="mailto:<?= $contact_box2['email'] ?>" class="d-flex align-items-center dmb-20 text-decoration-none">
                            <div class="detail-icon pe-2">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/email.svg" alt="" class="w-100 h-100">
                            </div>
                            <div class="urbanist font20 text--color">
                                <?= $contact_box2['email'] ?>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if (!empty($contact_box2['location'])): ?>
                        <a href="<?= $contact_box2['location']['url'] ?>" target="_blank" class="text-decoration-none d-inline-flex dmb-20">
                            <div class="detail-icon pe-2">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/location.svg" alt="" class="w-100 h-100">
                            </div>
                            <div class="urbanist font20 text--color">
                                <?= $contact_box2['location']['title'] ?>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if (!empty($footer_links)): ?>
                <div
                    class="d-flex align-items-baseline justify-content-between flex-wrap col-lg-5 col-12">
                    <?php foreach ($footer_links as $footer_link) : ?>

                        <div class="col-6 col-lg-4">
                            <?php if (!empty($footer_link['nav_link'])): ?>
                                <div>
                                    <ul class="ps-0 list-none">
                                        <?php foreach ($footer_link['nav_link'] as $nav_link) : ?>
                                            <?php if (!empty($nav_link['link']['url'])): ?>
                                                <li class="dmb-15">
                                                    <a href="<?= $nav_link['link']['url'] ?>"
                                                        class="text--color white-btn urbanist font20 res_font18 rounded-pill text-decoration-none"><?= $nav_link['link']['title'] ?></a>
                                                </li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="spacing dmb-50"></div>
        <div class="divider border border-bottom-0 border-start-0 border-end-0 border--color"></div>
        <div class="spacing dmb-40"></div>
        <?php if (!empty($copyright_text)): ?>
            <div class="text-center">
                <a href="<?= $copyright_text['url'] ?>" target="<?= $copyright_text['target'] ?>" class="text-decoration-none urbanist font20 text--color res_font18">
                    <?= $copyright_text['title']; ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="spacing dmb-35"></div>
    </div>
    <section class="mode-btn position-fixed">
        <div class="toggle-switch">
            <input type="checkbox"  id="toggle-mode" />
            <label for="toggle" class="round-button">
                <div></div>
                <div></div>
                <div></div>
                <div class="button-body"></div>
            </label>
        </div>
    </section>
</footer>


<div class="modal fade free-quote-modal" id="FreeQuote" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="memberModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content logo--bg border-0 radiusS overflow-hidden align-items-center justify-content-center radius15">
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

            <div class="contact-us-form px-5 dpt-80 dpb-50 ">
                <?php echo do_shortcode('[contact-form-7 id="25cafc7" title="Quotation Form"]'); ?>
                <!-- <form action="" class="">
                                <div class="contact-input-group row row10">
                                    <div class="col-lg-6 col-12 dmb-25">
                                        <label class="urbanist font20 leading1_5 text--color dmb-10" for="">
                                            Name
                                        </label>
                                        <input type="text" class="w-100 input dark-input background--color urbanist font18 radius60 px-4 border-0 text--color" placeholder="Full Name*">
                                    </div>
                                    <div class="col-lg-6 col-12 dmb-25">
                                        <label class="urbanist font20 leading1_5 text--color dmb-10" for="">Email</label>
                                        <input type="email" class="w-100 input dark-input background--color urbanist font18 radius60 px-4 border-0 text--color" placeholder="Email Address*">
                                    </div>
                                    <div class="col-12 dmb-25">
                                        <label class="urbanist font20 leading1_5 text--color dmb-10" for="">
                                            Phone
                                        </label>
                                        <input type="number" class="w-100 input dark-input background--color urbanist font18 radius60 px-4 border-0 text--color" placeholder="Contact Number">
                                    </div>

                                    <div class="col-12 dmb-25 tmb-30">
                                        <label class="urbanist font20 leading1_5 text--color dmb-10" for="">
                                            Message
                                        </label>
                                        <textarea name="" id="" placeholder="Type your message here....." rows="5" class="w-100 input background--color font18 res-leading20 radius30 px-3 border-0 text--color dpt-20 urbanist"></textarea>
                                    </div>
                                    <div class="col-lg-6 mx-auto">
                                        <button class="w-100 theme-btn transition text--color white-btn urbanist font20 rounded-pill align-items-center justify-content-center">
                                            <span> Submit </span>
                                        </button>
                                    </div>
                                </div>
                            </form> -->
            </div>
        </div>
    </div>
</div>
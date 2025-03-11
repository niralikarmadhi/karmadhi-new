<?php
$content = get_field('content');
$heading_content_image_box = get_field('heading_content_image_box');
$article_section = get_field('article_section');

?>
<section class="sub-hero-section dpt-200">
    <div class="container">
        <div class="col-lg-11 col-12 mx-auto text-center">
            <div class="center-content inter-semibold font100 leading1_2 text--color dmb-40 res_font30"><?= the_title(); ?></div>
            <div class="center-content urbanist font20 leading1_5 text--color"><?= the_excerpt(); ?>
            </div>
        </div>
    </div>
</section>
<section class="open-blog-section">
    <div class="container">
        <div class="open-blog-img radius30 overflow-hidden dmb-50 center-content">
            <img src="<?= get_the_post_thumbnail_url(); ?>" class="w-100 h-100 object-cover" alt="...">
        </div>
        <?php if (have_rows("flexible_content")):
            while (have_rows("flexible_content")):
                the_row(); ?>
                <div class="center-content">
                    <div class="col-lg-10 mx-auto">
                        <?php if (get_row_layout() == "content_box"):
                            $content = get_sub_field('content');
                        ?>
                            <?php if (!empty($content)): ?>
                                <div class="urbanist font20 leading1_5 text--color dmb-30">
                                    <?= $content; ?>
                                </div>
                            <?php endif; ?>
                        <?php elseif (get_row_layout() == "heading_content"):  ?>
                            <?php
                            $heading = get_sub_field('heading');
                            $content = get_sub_field('content');
                            ?>
                            <?php if (!empty($heading)): ?>
                                <div class="inter-semibold font35 leading1_5 text--color dmb-20">
                                    <?= $heading; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($content)): ?>
                                <div class="urbanist font20 leading1_5 text--color dmb-30">
                                    <?= $content; ?>
                                </div>
                            <?php endif; ?>
                        <?php elseif (get_row_layout() == "list_box"):  ?>
                            <?php
                            $list_items = get_sub_field('list_item');

                            ?>
                            <?php if (!empty($list_items)): ?>

                                <ol class="dmb-35">
                                    <?php foreach ($list_items as $list_item) : ?>
                                        <?php if (!empty($list_item['item'])): ?>
                                            <li class="urbanist font20 leading1_5 text--color dmb-10">
                                                <?php echo $list_item['item'] ?>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                </ol>
                            <?php endif; ?>
                        <?php elseif (get_row_layout() == "image_box"):  ?>
                            <?php
                            $image = get_sub_field('image');
                            ?>
                            <?php if (!empty($image)): ?>
                                <div class="inner-blog-img radius15 overflow-hidden dmb-60">
                                    <img src="<?php echo $image; ?>" class="w-100 h-100 object-cover" alt="...">
                                </div>
                            <?php endif; ?>
                        <?php elseif (get_row_layout() == "quote_content"):  ?>
                            <?php
                            $content = get_sub_field('content');
                            ?>
                            <?php if (!empty($content)): ?>
                                <div class="logo--bg radius15 overflow-hidden dpt-60 dpb-60 dmt-60 dmb-60">
                                    <div class="col-10 mx-auto urbanist font20 leading1_5 text-center text--color pe-lg-5">
                                        <?= $content; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>

</section>

<div class="spacing dmt-120"></div>

<!-- related-blog-section -->
<?php if (!empty($article_section)):
    $post_type = $article_section['post_type'];
?>
    <section class="related-blog-section">
        <div class="container">
            <?php if (!empty($article_section['prefix'])): ?>
                <div class="main-title title light-text inter-bold font150 leading1_2 space_3 res_font80">
                    <?= $article_section['prefix'] ?>
                </div>
            <?php endif; ?>
            <div class="row dmb-70">
                <div class="col-lg-7 head-title">
                    <?php if (!empty($article_section['heading'])): ?>
                        <div class="inter-semibold font60 leading1_2 space1_5 text-capitalize text--color dmb-25 res_font25">
                            <?= $article_section['heading'] ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($article_section['content'])): ?>
                        <div class="col-lg-10">
                            <div class="urbanist font20 leading1_5 fw-normal text--color">
                                <?= $article_section['content'] ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-5 d-flex justify-content-end align-items-end">
                    <?php if (!empty($article_section['url'])): ?>
                        <a href="<?= $article_section['button']['url'] ?>"
                            class="theme-btn transition text--color white-btn urbanist font20 rounded-pill text-decoration-none">
                            <span class="btn-text"> <?= $article_section['button']['title'] ?> </span>
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
                <?php if (!empty($article_section['blog_post'])): ?>
                    <?php foreach ($article_section['blog_post'] as $blog_post) : ?>
                        <?php
                        $id = $blog_post->ID;
                        $title = $blog_post->post_title;
                        $category = get_the_terms($id, 'category');
                        ?>
                        <a class="col-lg-4 related-blog-card dmb-90 tmb-45 text-decoration-none" href="<?= the_permalink($id) ?>">
                            <div class="article-img radius30 overflow-hidden dmb-35 card-hover">
                                <img src="<?php echo get_the_post_thumbnail_url($id); ?>" class="w-100 h-100 object-cover img" alt="..">
                            </div>
                            <div class="d-inline-flex dmb-15">
                                <div class="urbanist font16 text--color me-2">
                                    <?php echo get_the_date(); ?>
                                </div>
                                <?php if (!empty($category)): ?>
                                    <?php foreach ($category as $cat) : ?>
                                        <div class="urbanist font18 text--color">
                                            <?= $cat->name; ?>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </div>
                            <?php if (!empty($title)): ?>
                                <div>

                                    <div class="inter-bold font26 leading1_2 text-decoration-none text--color">
                                        <?php echo $title; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </a>
                    <?php endforeach; ?>

                <?php elseif (!empty($article_section['project_post'])): ?>
                    <?php foreach ($article_section['project_post'] as $project_post) : ?>
                        <?php
                        $id = $project_post->ID;
                        $title = $project_post->post_title;

                        ?>
                        <a class="col-lg-4 related-blog-card dmb-90 tmb-45 text-decoration-none" href="<?= the_permalink($id) ?>">
                            <div class="article-img radius30 overflow-hidden dmb-35 card-hover">
                                <img src="<?php echo get_the_post_thumbnail_url($id); ?>" class="w-100 h-100 object-cover img" alt="..">
                            </div>

                            <?php if (!empty($title)): ?>
                                <div>
                                    <div class="inter-bold font26 leading1_2 text-decoration-none text--color">
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
<?php endif; ?>
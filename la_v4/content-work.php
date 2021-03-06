<div class="work" id="work">

    <section class="container">

        <div class="row">

            <div class="col-sm-12">

                <h2>Recent Work</h2>

                <p class="col-sm-10 paddingless para-last">
                    Examples of my recent freelance work.
                </p>

                <div class='clearfix'></div>

                <div class="row">

                    <ul>

                        <?php

                            $args = array(
                                'post_type'      => 'project',
                                'posts_per_page' => -1
                            );

                            $query = new WP_Query($args);

                            while ($query->have_posts()) {
                                $query->the_post();
                                get_template_part('content-work', 'single');
                            }

                        ?>

                    </ul>

                </div>

            </div>

        </section>

    </div>

</div>
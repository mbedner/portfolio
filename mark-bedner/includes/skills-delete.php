    <!-- <section id="skills">
        <div class="skills-menu bg--dark"> 
            <ul>
                <li><a href="#stage1">Branding</a></li>
                <li><a href="#stage2">Design</a></li>
                <li><a href="#stage3">Development</a></li>
            </ul>
        </div>
            <div class="stages">
                <div id="stage1" class="stage container">
                    <div class="container--half">
                        <div class="content-half copy-content">
                            
                        <?php if ( have_rows( 'branding_section_front_page' ) ) : ?>
                                <?php while ( have_rows( 'branding_section_front_page' ) ) : the_row(); ?>
                                    <?php the_sub_field( 'branding_content_front_page', false, false ); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <div class="content-half copy-content">
                            <div class="gray-skill">
                                
                                <?php if ( have_rows( 'branding_section_front_page' ) ) : ?>
                                    <?php while ( have_rows( 'branding_section_front_page' ) ) : the_row(); ?>
                                        <?php the_sub_field( 'branding_skills_front_page', false, false); ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div id="stage2" class="stage container">
                    <div class="container--half">
                        <div class="content-half copy-content">
                            <div class="gray-skill">
                                
                                <?php if ( have_rows( 'design_section_front_page' ) ) : ?>
                                    <?php while ( have_rows( 'design_section_front_page' ) ) : the_row(); ?>
                                        <?php the_sub_field( 'design_skills_front_page', false, false); ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
    
                            </div>
                        </div>
                        <div class="content-half copy-content">
                                
                            <?php if ( have_rows( 'design_section_front_page' ) ) : ?>
                                <?php while ( have_rows( 'design_section_front_page' ) ) : the_row(); ?>
                                    <?php the_sub_field( 'design_content_front_page', false, false); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div id="stage3" class="stage container">
                    <div class="container--half">
                        <div class="content-half copy-content">

                        <?php if ( have_rows( 'dev_section_front_page' ) ) : ?>
                            <?php while ( have_rows( 'dev_section_front_page' ) ) : the_row(); ?>
                                <?php the_sub_field( 'dev_content_front_page', false, false ); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                        </div>
                        <div class="content-half copy-content">
                            <div class="gray-skill">
                                
                            <?php if ( have_rows( 'dev_section_front_page' ) ) : ?>
                                <?php while ( have_rows( 'dev_section_front_page' ) ) : the_row(); ?>
                                    <?php the_sub_field( 'dev_skills_front_page', false, ); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> -->
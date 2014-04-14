<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard"><?php
										printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
									?></p>

								</header>

								<section class="entry-content clearfix">
									<?php the_content(); ?>
								</section>
								<section class="tabs">
									<input id="tab_1" type="radio" name="tab" checked="checked" />
									<input id="tab_2" type="radio" name="tab" />
									<input id="tab_3" type="radio" name="tab" />
									<input id="tab_4" type="radio" name="tab" />
									<input id="tab_5" type="radio" name="tab" />
									<input id="tab_6" type="radio" name="tab" />
									<ul>
										<li><label for="tab_1" id="tab_l1">Tab One</label></li>
										<li><label for="tab_2" id="tab_l2">Tab Two</label></li>
										<li><label for="tab_3" id="tab_l3">Tab Three</label></li>
										<li><label for="tab_4" id="tab_l4">Tab Four</label></li>
										<li><label for="tab_5" id="tab_l5">Tab Five</label></li>
										<li><label for="tab_6" id="tab_l6">Tab Six</label></li>
									</ul>
									
									<div style="clear:both"></div>

									<div class="tabs_cont">
										<div id="tab_c1">Content of first tab</div>
										<div id="tab_c2">Content of first second</div>
										<div id="tab_c3">Content of third tab</div>
										<div id="tab_c4">Content of fourth tab</div>
										<div id="tab_c5">Content of fifth tab</div>
										<div id="tab_c6">
											У нас такие <br>охеренные услуги,<br>
											бери не хочу! Мы такие крутые,
											все можем, все<br> умеем! Кароче,
											надо брать!
										</div>
									</div>
								</section>
								<footer class="article-footer">
									<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

								</footer>

								<?php // comments_template(); // uncomment if you want to use them ?>

							</article>

							<?php endwhile; ?>

									<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
														<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>
								

							<?php endif; ?>
							

						</div>

				</div>

			</div>

<?php get_footer(); ?>

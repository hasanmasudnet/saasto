<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 */

    // If the current post is protected by a password and the visitor has not yet 
    // entered the password we will return early without loading the comments.
    // ----------------------------------------------------------------------------------------
    if ( post_password_required() ) {
        return;
    }
?>

<?php if ( have_comments() || comments_open()) : ?>
<div id="comments" class="blog__post_comment">

    <?php if ( get_comments_number() >= 1 ): ?>
    <div class="post-comments mb-70">
        <div class="blog-coment-title">

            <?php
                $comment_no = number_format_i18n( get_comments_number() );
                $comment_text = ( !empty( $comment_no ) AND ( $comment_no > 1 ) ) ? esc_html__( ' Comments', 'saasto' ) : esc_html__( ' Comment ', 'saasto' );
                $comment_no = ( !empty( $comment_no ) AND ( $comment_no > 0 ) ) ? '<h2>' . esc_html( $comment_no . $comment_text ) . '</h2>' : ' ';
                print sprintf( "%s", $comment_no );
            ?>

        </div>
        <div class="latest-comments mb-65">
            <ul>
                <?php
                    wp_list_comments( [
                        'style'       => 'ul',
                        'callback'    => 'saasto_comment',
                        'avatar_size' => 90,
                        'short_ping'  => true,
                    ] );
                ?>
            </ul>
        </div>
    </div>
    <?php endif;?>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ): ?>
        <div class="comment-pagination mb-50 d-none">
            <nav id="comment-nav-below" class="comment-navigation" role="navigation">
                <h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'saasto' );?></h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="nav-previous "><?php previous_comments_link( esc_html__( '&larr; Older ', 'saasto' ) );?></div>
                    </div>
                    <div class="col-md-6">
                        <div class="nav-next "><?php next_comments_link( esc_html__( 'Newer &rarr;', 'saasto' ) );?></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </nav><!-- #comment-nav-below -->
        </div>
    <?php endif; // check for comment navigation ?>


    <?php
    $post_id = '';
    if ( null === $post_id )
        $post_id = get_the_ID();
    else
        $id      = $post_id;

    $commenter       = wp_get_current_commenter();
    $user            = wp_get_current_user();
    $user_identity   = $user->exists() ? $user->display_name : '';


    $req         = get_option( 'require_name_email' );
    $aria_req    = ( $req ? " aria-required='true'" : '' );

    $fields = array(
        'author' => '<div class="row"><div class="col-md-6"><div class="postbox__comment-input"><input placeholder="'.  esc_attr__('Enter Name', 'saasto').'" id="author" class="saasto-form-control" name="author" type="text" value="' . esc_attr( $commenter[ 'comment_author' ] ) . '" size="30"' . $aria_req . ' /></div></div>',
        'email'  => '<div class="col-md-6"><div class="postbox__comment-input"><input placeholder="'.  esc_attr__('Enter Email', 'saasto').'" id="email" name="email" class="saasto-form-control" type="email" value="' . esc_attr( $commenter[ 'comment_author_email' ] ) . '" size="30"' . $aria_req . ' /></div></div>',
        'url'    => '<div class="col-md-12"><div class="postbox__comment-input"><input placeholder="'.  esc_attr__('Enter Website', 'saasto').'" id="url" name="url" class="saasto-form-control" type="url" value="' . esc_attr( $commenter[ 'comment_author_url' ] ) . '" size="30" /></div></div></div>'
    );

    if ( is_user_logged_in() ) {
        $cl = 'loginformuser';
    } else {
        $cl = '';
    }
    $defaults = [
        'fields'             => $fields,
        'comment_field'      => '
            <div class="row post-input">
                <div class="col-md-12 ' . $cl . '">
                    <div class="postbox__comment-input"><textarea class="saasto-form-control msg-box" placeholder="'.  esc_attr__('Enter Your Comments', 'saasto').'" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                </div></div>
                <div class="clearfix"></div>
            </div>
        ',
        'submit_button'    => '<div class="col-xl-12"><button class="saasto-btn" type="submit">' . esc_html__( 'Post Comment', 'saasto' ) . ' </button></div>',
        /** This filter is documented in wp-includes/link-template.php */
        'must_log_in'        => '
            <p class="must-log-in">
            '.esc_html__('You must be','saasto').' <a href="'.esc_url(wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) )).'">'.esc_html__('logged in','saasto').'</a> '.esc_html__('to post a comment.','saasto').'
            </p>',
        /** This filter is documented in wp-includes/link-template.php */
        'logged_in_as'       => '
            <p class="logged-in-as">
            '.esc_html__('Logged in as','saasto').' <a href="'.esc_url(get_edit_user_link()).'">'.esc_html($user_identity).'</a>. <a href="'.esc_url(wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) )).'" title="'.esc_attr__('Log out of this account','saasto').'">'.esc_html__('Log out?','saasto').'</a>
            </p>',
        'id_form'            => 'commentform',
        'class_form'            => 'blog-comment',
        'id_submit'          => 'submit',
        'class_submit'       => 'saasto-btn',
        'title_reply'        => esc_html__( 'Leave a Reply', 'saasto' ),
        'title_reply_to'     => esc_html__( 'Leave a Reply to %s', 'saasto' ),
        'cancel_reply_link'  => esc_html__( 'Cancel reply', 'saasto' ),
        'label_submit'       => esc_html__( 'Post Comment', 'saasto' ),
        'format'             => 'xhtml',
    ];

    comment_form( $defaults );
    ?>

</div><!-- #comments -->
<?php endif;
<?php

comment_form();

$args = array(
    'status' => 'approve'
);

$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );

if ( $comments ) {
    echo "<div class='comments'>";
    echo "<h3>Comments</h3>";
    foreach ( $comments as $comment ) {
        echo "<div class='comments__comment'>";
        echo "<div class='comments__comment__body'>" . $comment->comment_content . '</div>';
        echo "<div class='comments__comment__author'>-" . $comment->comment_author . '</div>';
        echo "</div>";
    }  
    echo "</div>";
} else {
    echo "<div class='comments'>No comments yet.</div>"; 
}
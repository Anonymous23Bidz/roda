
<hr class="my-5">

<?php
//Get only the approved comments
$args = array(
    'status' => 'approve'
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
 
// Comment Loop
if ( $comments ) {?>

<h4>Comments:</h4>
<ul class="resources-comments">
<?php 
 foreach ( $comments as $comment ) {
$comment_author = get_comment_author($comments->comment_ID);
 echo '<li>'."<strong>".$comment_author ."</strong>: " . $comment->comment_content . '</li>';
 }

 ?>
</ul>
 <?php
} else {
 echo '<h4>No comments found.</h4>';
}

?>

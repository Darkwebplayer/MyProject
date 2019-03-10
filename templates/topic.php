<?php include('./includes/header.php');?>

<ul id="topics">
<li id="main-topic" class="topic topic">
		<div class="row">
			<div class="col-md-2">
				<div class="user-info">
					<img class="avatar float-left" src="<?php echo BASE_URL; ?>/images/avatars/<?php echo $topic->avatar; ?>" />
					<ul>
						<li><strong><?php echo $topic->username; ?></strong></li>
						<li><?php echo userPostCount($topic->user_id); ?> Posts</li>
						<li><a href="<?php echo BASE_URL; ?>topics.php?user=<?php echo $topic->user_id; ?>">View topics</a>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<div class="topic-content float-right">
				<?php echo $topic->body; ?>
				</div>
			</div>
		</div>
	</li>
  <?php foreach($replies as $reply) : ?>
	<li class="topic topic">
		<div class="row">
			<div class="col-md-2">
				<div class="user-info">
					<img class="avatar pull-left" src="<?php echo BASE_URL; ?>/images/avatars/<?php echo $reply->avatar; ?>" />
					<ul>
						<li><strong><?php echo $reply->username; ?></strong></li>
						<li><?php echo userPostCount($reply->user_id); ?> Posts</li>
						<li><a href="<?php echo BASE_URL; ?>topics.php?user=<?php echo $reply->user_id; ?>">View Topics</a>
					</ul>
				</div>
			</div>
			<div class="col-md-10">
				<div class="topic-content pull-right">
					<?php echo $reply->body; ?>
				</div>
			</div>
		</div>
	</li>
	<?php endforeach; ?>
                      
                    </ul>
					<h3>Reply to topic</h3>
					<?php if(isLoggedin()):?>
                    <form role="form" method="post" action="topic.php?id=<?php echo $topic->id;?>">
						<div class="form-group">
						<textarea name="body" id="reply" cols="30" rows="10" class="form-control"></textarea>
                      <script>
                          ClassicEditor
                              .create( document.querySelector( '#reply' ), {
                                  toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                                  heading: {
                                      options: [
                                          { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                          { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                          { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                                      ]
                                  }
                              } )
                              .catch( error => {
                                  console.log( error );
                              } );
						  </script>
						</div>
                      
						 <button name="do_reply" type="submit" class="btn btn-primary">Submit</button>
					</form>
							<?php else:?>
							<p>please Login to reply</p>
							<?php endif;?>
					
<?php include('./includes/footer.php');?>
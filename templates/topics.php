<?php include('./includes/header.php');?>

<ul id="topics">
                <?php if($topics) : ?>
                <?php foreach($topics as $topic):?>
                <li class="topic">
                    <div class="row">
                      <div class="col-md-2">
                        <img src="images/avatars/<?php echo $topic->avatar;?>" alt="" class="avatar float-left">
                      </div>
                      <div class="col-md-10">
                        <div class="topic-content float-left">
                          <h3><a href="topic.php?id=<?php echo $topic->id;?>"><?php echo $topic->title;?></a></h3>
                          <div class="topic-info">
							<a href="topics.php?category=<?php echo urlFormat($topic->category_id); ?>"><?php echo $topic->name; ?></a> >> 
							<a href="topics.php?user=<?php echo urlFormat($topic->user_id); ?>"><?php echo $topic->username; ?></a> >> 
							<?php echo formatDate($topic->create_date); ?>
                            <span class="badge-pill badge-dark float-right"><?php echo replyCount($topic->id);?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>

                 <?php endforeach;?>
                  <?php else:  ?>
                  <p>No topics</p>
                  <?php endif; ?>
                </ul>
<?php include('./includes/footer.php');?>
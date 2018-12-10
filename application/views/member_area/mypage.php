<h2> <?= $title ?> </h2>

<h3> <?= $title_post ?> </h3>
<?php foreach($posts as $post) : ?>
	<h5><a href="<?php echo site_url('/posts/view/'.$post['slug']); ?>"><?php echo $post['title']; ?></a></h5>
	<?php if($post['image'] != null){ ?>
			 <img src="<?php echo site_url(); ?>assets/posts/<?php echo $post['image']; ?>">
			<?php } ?>
	<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
	<?php echo word_limiter($post['body'],60); ?>
	<small class="post-by"><?php echo $post['created_by']; ?></small>
<?php endforeach; ?>

<h3><?php echo $video['title']; ?></h3>
<?php echo $video['url']; ?><br>

<h3> <?= $title_agent ?> </h3>
<table class="table table-hover">
	<tr>
				<td align="center" colspan="3">
				<img src="<?php echo base_url(); ?>assets/agents/<?php echo $agent['image'] ?>" alt="Img" height="120" width="120" />
				</td>
			</tr>
			<tr>
				<th>Name</th>
				<td>:</td>
				<td><?php echo $agent['name'] ?></td>
			</tr>
			<tr>
				<th>Polis No</th>
				<td>:</td>
				<td><?php echo $agent['polis_no'] ?></td>
			</tr>
			<tr>
				<th>Telephone</th>
				<td>:</td>
				<td><?php echo $agent['phone'] ?></td>
			</tr>
			<tr>
				<th>Email</th>
				<td>:</td>
				<td><?php echo $agent['email'] ?></td>
	</tr>
</table>
<div class="row">
<?php foreach ($personal as $data) : ?>
	<h5><?php echo $data['title']; ?></h5>
	<?php if($data['image'] != null){ ?>
			 <img src="<?php echo site_url(); ?>assets/personals/<?php echo $data['image']; ?>">
			<?php } ?>
	<small class="post-date">Posted on: <?php echo $data['created_at']; ?></small><br>
	<?php echo word_limiter($data['body'],60); ?>
	<small class="post-by"><?php echo $data['name']; ?></small>
<?php endforeach; ?>
</div>
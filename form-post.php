<input type="hidden" name="id" value="<?php echo $post["id"] ?? ""; ?>">

Title: <input type="text" name="title" class="form-control" value="<?php echo $post["title"] ?? ""; ?>">
<p class="text-danger">
    <?php echo $process->errors["title"] ?? ""; ?>
</p>

<br>

<input type="file" name="file" class="form-control">

<br>

Body: <textarea name="body" cols="30" rows="10" class="form-control"><?php echo $post["body"] ?? ""; ?></textarea>
<p class="text-danger">
    <?php echo $process->errors["body"] ?? ""; ?>
</p>

<br>

<button type="submit" class="btn btn-primary">Save Post</button>
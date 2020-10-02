<?php include 'inc/header.php'; ?>
<h2 class="page-header">Edit Job Listing</h2>
<form method="POST" action="edit.php?id=<?php echo $job->id; ?>">
    <div class="form-group">
        <label>Company</label>
        <input class="form-control" name="company" type="text" value="<?php echo $job->company; ?>">
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category" class="form-control">
            <option value="0">Choose Categories</option>
            <?php foreach($categories as $category): ?>
                <?php if($job->category_id == $category->id): ?>
                    <option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
                <?php else : ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endif; ?>

                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Job Title</label>
        <input class="form-control" name="job_title" type="text" value="<?php echo $job->job_title; ?>">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description" ><?php echo $job->description; ?></textarea>
    </div>
    <div class="form-group">
        <label>Location</label>
        <input class="form-control" name="location" type="text" value="<?php echo $job->location; ?>">
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input class="form-control" name="salary" type="text" value="<?php echo $job->salary; ?>">
    </div>
    <div class="form-group">
        <label>Contact User</label>
        <input class="form-control" name="contact_user" type="text" value="<?php echo $job->contact_user; ?>">
    </div>
    <div class="form-group">
        <label>Contact Email</label>
        <input class="form-control" name="contact_email" type="text" value="<?php echo $job->contact_email; ?>">
    </div>
    <input type="submit" class="btn btn-primary" value="Submit" name="submit">
</form>
<?php include 'inc/footer.php'; ?>


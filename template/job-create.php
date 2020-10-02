<?php include 'inc/header.php'; ?>
    <h2 class="page-header">Create Job Listing</h2>
    <form method="POST" action="create.php">
        <div class="form-group">
            <label>Company</label>
            <input class="form-control" name="company" type="text">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control">
            <option value="0">Choose Categories</option>
            <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label>Job Title</label>
            <input class="form-control" name="job_title" type="text">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description" ></textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input class="form-control" name="location" type="text">
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input class="form-control" name="salary" type="text">
        </div>
        <div class="form-group">
            <label>Contact User</label>
            <input class="form-control" name="contact_user" type="text">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input class="form-control" name="contact_email" type="text">
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>


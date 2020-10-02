<?php include 'inc/header.php'; ?>
    <div class="jumbotron">
        <h1 class="display-3">Find A Job</h1>
        <form method="GET" action="index.php">
            <select class="form-control" name="category" id="">
                <option value="0">Choose Categories</option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" class="btn btn-lg btn-success" value="FIND">
        </form>
    </div>
    <h3><?php echo $title; ?></h3>

    <?php foreach($jobs as $job): ?>
    <div class="row marketing">
        <div class="col-md-10">
            <h4><?php echo $job->job_title ?></h4>
            <p><?php echo $job->description ?></p>
        </div>
        <div class="col-md-2">
            <a class="btn btn-warning" href="job.php?id=<?php echo $job->id ?>">View</a>
        </div>
    </div>
    <?php endforeach; ?>

<?php include 'inc/footer.php';?>


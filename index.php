<?php include_once 'config/init.php';?>

<?php
$job = new Job;

$template = new Template('template/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if ($category){
    $template->title = 'Jobs In '. $job->getCategory($category)->name;
    $template->jobs = $job->getByCategory($category);
}else{
    $template->title = 'Latest Jobs';
    $template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;
?>

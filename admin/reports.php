<?php
require_once './includes/config.php';
require_once './includes/session.php';
require_once './includes/auth.php';
require_once '../models/Report.php';

// Redirect to login page if not logged in
if (!authenticate()) {
    redirect('login.php');
}

// Get all reports
$reports = Report::getAll();

// Include the header
include_once './includes/header.php';
?>

<div class="container">
    <h2>Reports</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Report ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reports as $report) : ?>
                <tr>
                    <td><?php echo $report->getId(); ?></td>
                    <td><?php echo $report->getTitle(); ?></td>
                    <td><?php echo $report->getDate(); ?></td>
                    <td>
                        <a href="report-details.php?id=<?php echo $report->getId(); ?>" class="btn btn-sm btn-primary">View Details</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
// Include the footer
include_once './includes/footer.php';
?>

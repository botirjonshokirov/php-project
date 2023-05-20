<div>
    <h2>Reports</h2>
    <table>
        <thead>
            <tr>
                <th>Report ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reports as $report) { ?>
                <tr>
                    <td><?php echo $report->getId(); ?></td>
                    <td><?php echo $report->getTitle(); ?></td>
                    <td><?php echo $report->getDescription(); ?></td>
                    <td><?php echo $report->getDate(); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

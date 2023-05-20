<?php

require_once 'models/Report.php';

class ReportController
{
    public function generateReport()
    {
        // Generate the report
        $report = Report::generate();

        // Render the report view
        require 'views/report.php';
    }
}

<?php

class Report
{
    private $startDate;
    private $endDate;
    private $totalOrders;
    private $totalRevenue;

    // Getters and setters for the report attributes

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getTotalOrders()
    {
        return $this->totalOrders;
    }

    public function setTotalOrders($totalOrders)
    {
        $this->totalOrders = $totalOrders;
    }

    public function getTotalRevenue()
    {
        return $this->totalRevenue;
    }

    public function setTotalRevenue($totalRevenue)
    {
        $this->totalRevenue = $totalRevenue;
    }
}

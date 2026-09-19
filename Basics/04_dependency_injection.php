<?php

interface UserDataSource
{
    public function getUsers(): array;
}


// Real implementation
class Database implements UserDataSource
{
    public function getUsers(): array
    {
        return [
            "Muntasir",
            "Rahim",
            "Karim"
        ];
    }
}


// Fake implementation
class FakeDatabase implements UserDataSource
{
    public function getUsers(): array
    {
        return [
            "Test User 1",
            "Test User 2"
        ];
    }
}


// Report service depends on abstraction
class ReportService
{
    private UserDataSource $dataSource;

    public function __construct(UserDataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function generateReport(): void
    {
        $users = $this->dataSource->getUsers();

        echo "User Report\n";

        foreach ($users as $user) {
            echo "- " . $user . "\n";
        }
    }
}


// Real database
$database = new Database();

$report = new ReportService($database);

$report->generateReport();

echo "\n";

// Fake database
$fakeDatabase = new FakeDatabase();

$testReport = new ReportService($fakeDatabase);

$testReport->generateReport();
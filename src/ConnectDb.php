<?php
namespace App\DbConncetion;

use Doctrine\Persistence\ManagerRegistry;
use Doctrine\DBAL\Connection;
class ConnectDb
{
    private $doctrine;
    
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    public function connect()
    {
        try {
            /** @var Connection $connection */
            $connection = $this->doctrine->getConnection();
            return $connection;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}

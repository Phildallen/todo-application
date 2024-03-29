<?php

namespace App\Factories;

use PDO;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class PDOFactory
{
    private PDO $pdo;

    public function __construct(ContainerInterface $container)
    {
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $settings = $container->get('settings')['db'];
            $this->pdo = new PDO($settings['host'] . $settings['name'],
                $settings['user'], $settings['password'], $options);
        } catch (\PDOException $e) {
            echo 'There was an error connecting to the db.';
            exit;
        } catch (NotFoundExceptionInterface $e) {
            echo 'settings not found in container.';
            exit;
        } catch (ContainerExceptionInterface $e) {
            echo 'container error.';
            exit;
        }
    }

    public function __invoke(): PDO
    {
        return $this->pdo;
    }
}

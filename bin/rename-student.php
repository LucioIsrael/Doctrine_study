<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

// usar repositorio quando não for uma query especifica
$student = $entityManager->find(Student::class, $argv[1]);

$student->name = $argv[2];

$entityManager->flush();
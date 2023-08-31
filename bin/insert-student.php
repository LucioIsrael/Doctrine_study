<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

// $student = new Student($argv[1]);
// $student->addPhone(new Phone($argv[2]));
$student = new Student('Aluno com Telefones');

$student->addPhone(new Phone('619222222222'));
$student->addPhone(new Phone('619333333333'));
$student->addPhone(new Phone('619444444444'));

$entityManager->persist($student);

$entityManager->flush();
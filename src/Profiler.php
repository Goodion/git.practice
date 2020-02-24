<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class Profiler extends Command
{
    protected function configure()
    {
        $this
            ->setName('Profiler')
            ->setDescription('Gets information about user');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $question = new Question('Введите Ваше Имя ');
        $name = $helper->ask($input, $output, $question);

        $question = new Question('Введите возраст ');
        $age = $helper->ask($input, $output, $question);

        $question = new ChoiceQuestion(
            'Укажите Ваш пол (по умолчанию - мужской) ',
            ['мужской', 'женский'],
            0
        );
        $sex = $helper->ask($input, $output, $question);


        $output->writeln('Привет ' . $name . '. Вам ' . $age . ' лет и Ваш пол - ' . $sex);

        return 0;
    }
}

<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Repeater extends Command
{
    protected function configure()
    {
        $this
            ->setName('Repeater')
            ->setDescription('Repeates $string $arg times (default 2)')
            ->addArgument('string', InputArgument::REQUIRED, 'input string')
            ->addArgument('arg', InputArgument::OPTIONAL, 'times to repeat');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $timesToRepeat = $input->getArgument('arg') == '' ? 2 : $input->getArgument('arg');

        for($i = 0; $i < $timesToRepeat; $i++) {
            $output->writeln($input->getArgument('string'));
        }

        return 0;
    }
}

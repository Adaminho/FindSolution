<?php
/**
 * Created by PhpStorm.
 * User: amaliszewski
 * Date: 02/06/2018
 * Time: 11:13
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Service\ElasticClient;


class CreateElasticIndex extends Command
{
    private $elasticClient;

    public function __construct(ElasticClient $elasticClient)
    {
        $this->elasticClient = $elasticClient;

        parent::__construct();

    }

    protected function configure()
    {
        $this
            ->setName('elastic:create-index')
            ->setDescription('Create index in Elasticsearch')
            ->setHelp('This method allows you to create index in Elasticsearch');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->_createSolutionIndex();
    }

    protected function _createSolutionIndex()
    {
        $uri = 'solution';
        $this->elasticClient->sendPut('', $uri);
    }
}
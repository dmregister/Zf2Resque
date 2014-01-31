<?php

namespace Zf2Resque\Job;

class Email {
    
    public $serviceManager;
    
    
    public function setUp() {
        # Set up something before perform, like establishing a database connection
    }

    public function perform() {

        $config = $this->serviceManager->get('config');

        fwrite(STDOUT, 'Start job! -> localVar');
        sleep(1);
        fwrite(STDOUT, '---- ' . $config['localVar'] . '----Job ended!' . PHP_EOL);
    }

    public function tearDown() {
        # Run after perform, like closing resources
    }

}
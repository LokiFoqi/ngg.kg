@servers(['web' => ['user@ngg.kg.test'], 'workers' => ['ngg.kg_jtktiyc0apf@195.38.165.5']])

@task('restart-queues', ['on' => 'workers'])
cd ~/httpdocs/
php artisan queue:restart
@endtask

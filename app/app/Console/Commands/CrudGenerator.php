<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CrudGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:generator {model} {table-name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create CRUD operations';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $modelName = $this->argument('model');
        $tableName = $this->argument('table-name');

        Artisan::call('code:models', [
            '--table' => $tableName
        ]);
        $this->info(Artisan::output());

        Artisan::call('infyom:api', [
            'model'     => $modelName,
            '--fromTable' => 1,
            '--tableName' => $tableName,
            '--skip' => 'model'
        ]);

        $this->info(Artisan::output());


//        $this->controller($name);
//        $this->model($name);
//        $this->request($name);

//        File::append(base_path('routes/api.php'),
//            'Route::resource(\'' . strtolower($name) . "', '{$name}Controller');");
    }

    /**
     * @param $type
     *
     * @return bool|string
     */
    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    protected function model($name)
    {
        echo "skip model generate; todo: use 'code:models' replace";
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(str_plural($name)),
                strtolower($name)
            ],
            $this->getStub('Controller')
        );

        file_put_contents(app_path("/Http/Controllers/{$name}Controller.php"), $controllerTemplate);
    }

    protected function request($name)
    {
        $requestTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Request')
        );

        if (!file_exists($path = app_path('/Http/Requests'))) {
            mkdir($path, 0777, true);
        }

        file_put_contents(app_path("/Http/Requests/{$name}Request.php"), $requestTemplate);
    }


}

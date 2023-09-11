<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:v {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = 'resources/views/' . $this->argument('view');
        $fullPath = $this->getFullPath($path);
        $dir = $this->checkDir($fullPath);

        if(File::exists($fullPath)) {
            $this->error('file is aleady exists');
        } else {
            File::put($fullPath, $fullPath);
        }
        $this->warn('file is created ');
    }
    // create:v product
    // create:v products.product
    public function getFullPath($argument)
    {
        $myViewPath = \str_replace('.', '/', $argument) . '.blade.php' ;

        return $myViewPath;
    }

    public function checkDir($path)
    {
        $dir = dirname($path);
        if(! file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
    }
}

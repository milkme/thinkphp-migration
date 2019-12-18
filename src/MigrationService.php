<?php
namespace milkme\phinx;


use think\App;
use think\facade\Config;

class MigrationService extends \think\Service{

    /**
     * 注册服务
     *
     * @return mixed
     */
    public function register()
    {
        $this->app->get('config')->set([
            'commands' => [
                \milkme\phinx\command\Run::class,
                \milkme\phinx\command\Create::class,
                \milkme\phinx\command\Status::class,
                \milkme\phinx\command\Rollback::class,
                \milkme\phinx\command\Breakpoint::class,
                \milkme\phinx\command\seed\Create::class,
                \milkme\phinx\command\seed\Run::class
            ]
        ], 'console') ;
    }

}
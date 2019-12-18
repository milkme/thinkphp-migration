<?php
namespace ke\phinx;


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
                \ke\phinx\command\Run::class,
                \ke\phinx\command\Create::class,
                \ke\phinx\command\Status::class,
                \ke\phinx\command\Rollback::class,
                \ke\phinx\command\Breakpoint::class,
                \ke\phinx\command\seed\Create::class,
                \ke\phinx\command\seed\Run::class
            ]
        ], 'console') ;
    }

}
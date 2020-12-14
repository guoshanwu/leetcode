<?php declare(strict_types=1);

namespace App\Http\Controller;

use App\Model\User;
use Swoft\Db\DB;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Message\Response;
use Swoft\Redis\Redis;

/**
 * @Controller(prefix="Test")
 */
class TestController
{
    /**
     * @RequestMapping(route="index", method="get")
     */
    public function index(Response $response)
    {
        $sql = User::where('id', 2)->first();
        return $sql;
    }

}

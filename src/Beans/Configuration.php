<?php
namespace App\Beans;
use App\Services;
use App\Services\ConnectionService;
use App\Services\QueryService;

class Configuration  extends BaseBean{
    
    private static $config = [];

    public function loadProperties() {
        $dbQueries = new QueryService(new ConnectionService());
        echo "loading props from db " . $dbQueries;
        self::$config = $dbQueries->getConfig();
        echo "config loaded props";
    }

    public function getConfigurationValue($key) {
        if (count(self::$config) == 0) {
            $this->loadProperties();
        }
        return isset(self::$config[$key]) ? self::$config[$key] : null;
    }
}

?>

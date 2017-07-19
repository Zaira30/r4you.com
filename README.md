# r4you.com
crud com cakephp3 e bootstrap

Dentro da pasta dump tem o arquivo sql para geração do banco.
Dentro de Config-> app.php fica a configuração de banco de dados.

'Datasources' => [
        'default' => [
            'className' => 'Cake\Database\Connection',
            'driver' => 'Cake\Database\Driver\Mysql',
            'persistent' => false,
            'host' => 'localhost',
            /**
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',
            'username' => 'root',
            'password' => '',
            'database' => 'crud_four',
            'encoding' => 'utf8',
            'timezone' => 'UTC',
            'flags' => [],
            'cacheMetadata' => true,
            'log' => false,
Host localhost, username root. password , datebase crud_four. Para alteração de banco tem que ser alterado no arquivo, no meu caso o campo passoword tá em branco.

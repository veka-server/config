<?php
/**
 * Created by PhpStorm.
 * User: nvanhaezebrouck
 * Date: 19/10/2017
 * Time: 20:52
 */

namespace VekaServer\Config;

class Config
{

    private $settings = [];

    private static $_instance = null;

    /**
     * Retourne une instance singleton du fichier de config
     * @param null $path_config_file Chemin vers le fichier de config
     * @return null|Config
     */
    public static function getInstance($path_config_file = null){

        if( ! (self::$_instance instanceof self ) )
            self::$_instance = new self($path_config_file);

        return self::$_instance;

    }

    /**
     * Config constructor.
     * @param string $path_config_file Chemin vers le fichier de configuration
     */
    public function __construct($path_config_file)
    {
        $this->settings = require_once($path_config_file);
    }

    /**
     * Get setting by key
     *
     * @param $key
     * @return mixed
     * @throws \Exception Key not found on config file
     */
    public function getSetting($key){

        if(!$this->has($key))
            throw new \Exception('Key "'.$key.'" not found on config file.');

        return $this->settings[$key];
    }

    /**
     * Get setting by key
     *
     * Same function as getSetting($key)
     *
     * @param $key
     * @return mixed
     * @throws \Exception Key not found on config file
     */
    public function get($key){
        return $this->getSetting($key);
    }


    /**
     * Check if setting exist
     *
     * @param $key
     * @return bool
     */
    public function has($key){
        return (array_key_exists($key,$this->settings));
    }

    /**
     * Get all settings
     *
     * @return mixed
     */
    public function getSettings(){
        return $this->settings;
    }

}

<?php
/**
 * Name:     ci-db-timestamp
 * Author:   Matheus Castro
 *           matheuscastroweb@gmail.com
 *           @matheuscastrobr
 *
 *
 * Created:  21.01.2020
 *
 *
 * Requirements: PHP5.6 or above
 *
 * @package    ci-db-timestamp
 * @author     Matheus Castro
 * @link       https://github.com/matheuscastroweb/ci-db-timestamp
 * @filesource
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Db_timestamp
 */
class Db_timestamp
{
    /**
     * Format time use
     * @var string
     */
    protected $format_time;

    /**
     * Name column created
     * @var string
     */
    protected $create;

    /**
     * Name column updated
     * @var string
     */
    protected $update;

    /**
     * Name column deleted
     * @var string
     */
    protected $delete;

    /**
     * Sufix column is name table
     * @var bool
     */
    protected $suffix;

    /**
     * __construct
     *
     * @author Matheus
     */
    public function __construct()
    {
        $this->config->load('db_timestamp', TRUE);

        $this->create = $this->config->item('create', 'db_timestamp');
        $this->update = $this->config->item('update', 'db_timestamp');
        $this->delete = $this->config->item('delete', 'db_timestamp');

        $this->format_time = $this->config->item('format_time', 'db_timestamp');

        date_default_timezone_set($this->config->item('time_zone', 'db_timestamp'));
    }

    /**
     * __get
     *
     * Enables the use of CI super-global without having to define an extra variable.
     *
     * @author Militis
     * @param  string $var
     * @return mixed
     */
    public function __get($var)
    {
        return get_instance()->$var;
    }

    /**
     * Insert itens use timestamp   
     *
     * @param string $table  Table name
     * @param array  $data   Associative array of field/value pairs
     * @param bool   $escape Whether to escape values and identifiers
     */
    public function insert($table = '', $data = NULL, $escape = NULL)
    {
        $data += array(
            $this->create . $this->_verify_suffix($table)  => date($this->format_time, time()),
            $this->update . $this->_verify_suffix($table)  => date($this->format_time, time()),
        );

        if ($this->db->insert($table, $data, $escape)) {
            return TRUE;
        }

        return FALSE;
    }

    /**
     * Insert itens use timestamp   
     *
     * @param  string $table Table name
     * @param  array  $data An associative array of field/value pairs
     * @param  string $where The WHERE clause
     * @param  int    $limit he LIMIT clause
     * @return bool 
     */
    public function update($table = '', $data = NULL, $where = NULL, $limit = NULL)
    {

        $data += array(
            $this->update . $this->_verify_suffix($table)  => date($this->format_time, time()),
        );

        if ($this->db->update($table, $data, [$where['column'] => $where['id']], $limit)) {
            return TRUE;
        }

        return FALSE;
    }

    /**
     * Deleted itens use timestamp   
     *
     * @param string $table  Table name
     * @param array  $data   Associative array of field/value pairs
     * 
     * @return bool
     */
    public function delete($table = '', $where = NULL, $data = NULL)
    {
        $data += array(
            $this->delete . $this->_verify_suffix($table)  => date($this->format_time, time()),
        );

        if ($this->db->update($table, $data, [$where['column'] => $where['id']])) {
            return TRUE;
        }

        return FALSE;
    }

    /**
     * Verify exist suffix
     *
     * @param string $table
     * @return string
     */
    public function _verify_suffix($table = '')
    {
        return $this->config->item('suffix', 'db_timestamp') ?  '_' . $table : NULL;
    }
}

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
 * Description:  Modified auth system based on redux_auth with extensive customization. This is basically what Redux Auth 2 should be.
 * Original Author name has been kept but that does not mean that the method has not been modified.
 *
 * Requirements: PHP5.6 or above
 *
 * @package    ci-db-timestamp
 * @author     Matheus Castro
 * @link       http://github.com/benedmunds/CodeIgniter-Ion-Auth
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');


/*
| -------------------------------------------------------------------------
| Columns 
| -------------------------------------------------------------------------
| Database columns names
*/
$config['create'] = 'created_on';
$config['update'] = 'updated_on';
$config['delete'] = 'deleted_on';

/*
| -------------------------------------------------------------------------
| Suffix 
| -------------------------------------------------------------------------
| Sufix column is name table columns_suffix
*/
$config['suffix'] = TRUE;

/*
| -------------------------------------------------------------------------
| Time_zone 
| -------------------------------------------------------------------------
| Reference time_zone 
*/
$config['time_zone'] = 'America/Sao_Paulo';

/*
| -------------------------------------------------------------------------
| Format time 
| -------------------------------------------------------------------------
| Format time in db 
*/
$config['format_time'] = 'Y-m-d H:i:s';






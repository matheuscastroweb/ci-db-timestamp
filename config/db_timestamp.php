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
$config['suffix'] = FALSE;

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

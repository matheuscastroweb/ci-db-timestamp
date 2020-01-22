# CodeIgniter 3 Database timestamp
#### A feature from codeigniter 4 to 3

```php 
    protected $useTimestamps  = true;
    protected $useSoftDeletes = true;
```

## Features implemented

| Function  | Status |
| ------------- | ------------- |
| ``insert()``  | OK |
| ``update()``  | OK |
| ``delete()``  | OK |
| ``select()``  | NOT YET |


## Use

```php 
// Loading library
$this->load->library('db_timestamp');

// Use insert
$this->db_timestamp->insert('table_name', $data)

$where = array(
    'column' => 'name_column', //Example id_user
    'id'     => $id
);

// Use update
$this->db_timestamp->update('table_name', $data, $where)

// Use delete
$this->db_timestamp->delete('table_name', $where)

//Use select add clause where if deleted is NULL
```

## Result

| reference  | id_user | created_at | updated_at | deleted_at |
| -------- | -------- |  -------- |  -------- |  -------- |
| ``after insert()``  | 1 | 2020-01-22 08:43:10 |  2020-01-22 08:43:10 |  NULL |
| ``after update()``  | 1 | 2020-01-22 08:43:10 |  2020-01-23 08:45:00 |  NULL |
| ``after delete()``  | 1 | 2020-01-22 08:43:10 |  2020-01-23 08:45:00 |  2020-01-25 08:50:50 |


## Installation:

Read the file [INSTALLING.md](INSTALLING.md).

## Contribution:

Read the file [CONTRIBUTING.md](CONTRIBUTING.md).

## Updates:

Read the file [CHANGELOG.md](CHANGELOG.md).

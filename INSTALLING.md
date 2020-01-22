# How to install

### Add files from this package to the corresponding folder structure

```shell
CI                          # → Root Directory
└── application/
    ├── config/
    │   └── db_timestamp.php
    ├── libraries
    │   └── Db_timestamp.php
```


### Add columns to the table

```sql
ALTER TABLE table_name
    ADD (
        created_at DATETIME NOT NULL,
        updated_at DATETIME NOT NULL,
        deleted_at DATETIME DEFAULT NULL 
        );
```

### Use

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

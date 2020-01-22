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

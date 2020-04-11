<?
    //montrer les bases de données
    $show_databases = "show databases";

    //créer db
    $create = "create database dbName";

    //utiliser une Db
    $use_database = "use dbName";

    //montrer les tables
    $show_tables = "show tables";
    
    //créer unre table
    $create_table = "create movies(id int primary key auto_increment,title varchar(255),type varchar(50),date_of_release varchar(10))";

    //voir la structure
    $table_structure = "describe tableName";

    //inserer dans la table
    $insert = "insert into movies values(null,'MOney Heist','Heist','2019')";

    //select all
    $select_all = "select * from movies";

    //select with id
    $select_with_id = "select * from movies where id=3";

    //update row
    $update_row = "update movies set genre='Action' where id=2";

    //delete entry
    $delete = "delete from movies where date_of_release='2019'";



?>
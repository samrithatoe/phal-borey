
create table users(
    id int unsigned auto_increment primary key,
    username varchar(50) not null unique,
    password varchar(255) not null
);

create table products(
    id int unsigned auto_increment primary key,
    product_code varchar(50) not null unique,
    product_name varchar(150) not null,
    category varchar(100) not null default 'general',
    price decimal(10,2) not null default 0,
    quantity int unsigned not null default 0,
    created_at timestamp default current_timestamp
);
insert into products
(product_code,product_name,category,price,quantity)
values
('P001','Keyboard','computer',12.50,20),
('P002','Mouse','computer',7.25,35),
('P003','Laptop surface 3','computer',230,3);

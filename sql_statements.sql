create table collaborators ( user_id int, project_id int, start_date date, end_date date, primary key(user_id, project_id), foreign key (user_id) references user(id), foreign key  (project_id) references project(id) );


create table skill ( owner int, name varchar(255), level varchar(255), PRIMARY KEY (name), FOREIGN KEY (owner) REFERENCES user(id) )

create table user(id INT NOT NULL AUTO_INCREMENT, username varchar(255) NOT NULL, firstname varchar(255), lastname varchar(255), city varchar(255), country varchar(255), avatar varchar(255), PRIMARY KEY (id) );
alter table user modify username varchar(255) UNIQUE NOT NULL;




use sjodinj2;

drop table project;

drop table images;
drop table collaborators;

drop table project;

create table project (
id int not null auto_increment,
owner int not null references user(id),
name varchar(255),
description text(65535),
logo varchar(255),
startdate date,
enddate date,
status varchar(255),
primary key (id)
);

show columns in project;

create table images(
project_id int not Null,
foreign key (project_id) references project(id),
path varchar(255),
primary key(project_id, path)
);

show columns in images;

show tables;

insert into project values(
0,
1,

'bobs great project',
'insert html here',
'http://www.images.com',
'20140131',
NULL,
'ongoing'
);

select * from project;

insert into collaborators values(
1,
1,
'20140131',
NULL
);

select * from collaborators;
Images.com
www.images.com


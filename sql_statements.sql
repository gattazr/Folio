create table collaborators ( user_id int, project_id int, start_date date, end_date date, primary key(user_id, project_id), foreign key (user_id) references user(id), foreign key  (project_id) references project(id) );


create table skill ( owner int, name varchar(255), level varchar(255), PRIMARY KEY (name), FOREIGN KEY (owner) REFERENCES user(id) )

create table user(id INT NOT NULL AUTO_INCREMENT, username varchar(255) NOT NULL, firstname varchar(255), lastname varchar(255), city varchar(255), country varchar(255), avatar varchar(255), PRIMARY KEY (id) );


DROP SCHEMA public CASCADE;
CREATE SCHEMA public;
SET search_path TO public;
create table location
   (
      id serial primary key,
      name varchar(250) NOT NULL
   );

create table character
(
   id SERIAL PRIMARY KEY,
   name VARCHAR(250) NOT NULL,
   relationship INTEGER DEFAULT 0,
   locationID SMALLINT references location(id)
);

create table item
(
   id SERIAL PRIMARY KEY,
   item_name INT NOT NULL,
   item_type VARCHAR(250),
   item_description TEXT NOT NULL,
   item_attribute VARCHAR(70)
);

create table inventory
  (
    id SERIAL PRIMARY KEY,
    item_id SMALLINT references item(id),
    quantity SMALLINT NOT NULL DEFAULT 1
  );

create table character_dialouge
(
   id SERIAL PRIMARY KEY,
   body text NOT NULL,
   character_id SMALLINT references character(id)
);

create table user_response
(
  id serial primary key,
  character_id SMALLINT references character(id),
  body text NOT NULL,
  character_dialouge_id SMALLINT references character_dialouge(id),
  next_dialouge_id SMALLINT references character_dialouge(id),
  relationship_modifier SMALLINT DEFAULT 1,
  response_level SMALLINT
);

create table user_data
  (
    id serial primary key,
    first_name VARCHAR(80),
    last_name VARCHAR(80)
  );

create table user_credentials
  (
    id serial primary key,
    user_id SMALLINT references user_data(id),
    user_name VARCHAR(50),
    password VARCHAR(255)
  );
  
create table user_relationship
  (
    id serial primary key,
    user_id SMALLINT references user_data(id),
    character_id SMALLINT references character(id),
    relationship SMALLINT,
    times_spoken SMALLINT
  );

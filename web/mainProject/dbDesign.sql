create table "characters"
(
   id SERIAL PRIMARY KEY,
   name VARCHAR(250) NOT NULL,
   relationship INTEGER,
   locationID VARCHAR(150) NOT NULL
);

create table items
(
   id SERIAL PRIMARY KEY,
   item_name INT NOT NULL,
   item_type VARCHAR(250),
   item_description TEXT NOT NULL,
   item_attribute VARCHAR(70)
);
create table location
   (
      id serial primary key,
      character_id int references characters(id),
      name varchar(250) NOT NULL
   );

create table dialouge
(
   id SERIAL PRIMARY KEY,
   cid INT references Character(id),
   response text NOT NULL

);

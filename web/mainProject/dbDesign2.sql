DROP TABLE characters, item, location;
DROP TABLE character, location, item, inventory,

create table location
   (
      id serial primary key,
      name varchar(250) NOT NULL
   );

create table character
(
   id SERIAL PRIMARY KEY,
   name VARCHAR(250) NOT NULL,
   relationship INTEGER,
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

create table user_response
(
  id serial primary key,
  character_id SMALLINT references character(id),
  body text NOT NULL,
  user_response_group_id SMALLINT,
  relationship_modifier SMALLINT DEFAULT 1
);


create table user_response_group
  (
    id serial primary KEY,
    user_response_id SMALLINT references user_response(id),
    character_dialouge_id SMALLINT,
    response_level SMALLINT
  );

-- modify user response add FK
ALTER TABLE user_response
  ADD CONSTRAINT fk_user_response_group_id
  FOREIGN KEY (user_response_group_id)
  REFERENCES user_response_group(id);


create table character_dialouge
(
   id SERIAL PRIMARY KEY,
   user_response_group_id SMALLINT references user_response_group(id),
   body text NOT NULL,
   character_id SMALLINT references character(id)
);

/*MODIFY urg add FK*/
ALTER TABLE user_response_group
  ADD CONSTRAINT fk_user_response_group_id
  FOREIGN KEY (character_dialouge_id)
  REFERENCES  character_dialouge(id);

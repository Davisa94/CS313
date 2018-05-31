create table characters
(
   id SERIAL PRIMARY KEY,
   name VARCHAR(250) NOT NULL,
   relationship INTEGER,
   locationID VARCHAR(150) NOT NULL
);

create table participant
(
   id SERIAL PRIMARY KEY,
   firstName VARCHAR(40) NOT NULL,
   lastName VARCHAR(100) NOT NULL,
   dateOfBirth date NOT NULL,
   age smallint NOT NULL,
   isMale boolean,
   weight smallint
)

create table event_participant
   (
      id serial primary key,
      event_id int references event(id)
      participant_id int references participant(id)
   );
create table dialouge
(
   id SERIAL PRIMARY KEY,
   cid references Character(id),

)

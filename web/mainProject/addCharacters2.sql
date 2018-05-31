DELETE FROM character;
DELETE FROM location;
DELETE FROM character_dialouge;
ALTER SEQUENCE character_id_seq RESTART WITH 1;
ALTER SEQUENCE location_id_seq RESTART WITH 1;
ALTER SEQUENCE character_dialouge_id_seq RESTART WITH 1;

insert into location(name)
  values ('Home'),
         ('Jerusalem');

insert into character (name, locationID)
  values ('Nephi', 1),
         ('Lehi', 1),
         ('Sariah', 1),
         ('Laban', 2),
         ('Lemuel', 1),
         ('Laman', 1);

insert into character_dialouge(body, character_id)
  values('Hello',
    (select id From character where name = 'Nephi'));

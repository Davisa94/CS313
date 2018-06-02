DELETE FROM character;
DELETE FROM location;
DELETE FROM character_dialouge;
DELETE FROM user_response;
ALTER SEQUENCE character_id_seq RESTART WITH 1;
ALTER SEQUENCE location_id_seq RESTART WITH 1;
ALTER SEQUENCE character_dialouge_id_seq RESTART WITH 1;
ALTER SEQUENCE user_response_id_seq RESTART WITH 1;

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
  values
  ('Hello', (select id From character where name = 'Nephi')),
  ('I am doing well apart from my apostate brothers.', (select id From character where name = 'Nephi')),
  ('I agree, we have been blessed greatly by the Lord for this wonderful day.', (select id From character where name = 'Nephi'));


-- i=TODO: Insert two responses for nephi

insert into user_response(character_id, body, character_dialouge_id, next_dialouge_id)
  values
  ((SELECT id FROM character WHERE name = 'Nephi'),
   'Hey, good weather we are having today isnt it?',
   (SELECT id FROM character_dialouge WHERE (character_id = ((SELECT id FROM character WHERE name = 'Nephi')) AND (body LIKE '%Hello%'))),
   (SELECT id FROM character_dialouge WHERE (character_id = ((SELECT id FROM character WHERE name = 'Nephi')) AND (body LIKE '%I agree, we%'))));

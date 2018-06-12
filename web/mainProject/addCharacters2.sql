DELETE FROM character;
DELETE FROM location;
DELETE FROM character_dialogue;
DELETE FROM user_response;
ALTER SEQUENCE character_id_seq RESTART WITH 1;
ALTER SEQUENCE location_id_seq RESTART WITH 1;
ALTER SEQUENCE character_dialogue_id_seq RESTART WITH 1;
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

insert into character_dialogue(body, character_id)
  values
  ('Hello', (select id From character where name = 'Nephi')),
  ('I am doing well apart from my apostate brothers.', (select id From character where name = 'Nephi')),
  ('I agree, we have been blessed greatly by the Lord for this wonderful day.', (select id From character where name = 'Nephi')),
  ('What do you want?', (select id From character where name = 'Laban')),
  ('NO, dont be silly, I cant just give the sacred records to you!', (select id From character where name = 'Laban')), --Give us the brass plates
  ('Since you asked so nicely, here you can have the records.', (select id From character where name = 'Laban')), --If its not too much trouble could you please give us the Brass plates?
  ('No, not really! Now Get OUT!', (select id From character where name = 'Laban')),--really?
  ('Of course I was not serious, Now Get OUT!', (select id From character where name = 'Laban')),--You are not being serious are you?
  ('You Again! I thought I already told you no, Now leave before I have my guards slay you', (select id From character where name = 'Laban'));--speak again


-- TODO: Insert two responses for nephi
create table user_response
(
  id serial primary key,
  character_id SMALLINT references character(id),
  body text NOT NULL,
  character_dialogue_id SMALLINT references character_dialogue(id),
  next_dialogue_id SMALLINT references character_dialogue(id),
  relationship_modifier SMALLINT DEFAULT 1,
  response_level SMALLINT
);

insert into user_response(character_id, body, character_dialogue_id, next_dialogue_id, relationship_modifier)
  values
  ((SELECT id FROM character WHERE name = 'Nephi'),
   'Hey, good weather we are having today isnt it?',
   (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Nephi')) AND (body LIKE '%Hello%'))),
   (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Nephi')) AND (body LIKE '%I agree, we%'))),
   1),
   ((SELECT id FROM character WHERE name = 'Nephi'),
    'Hey, How are you doing today?',
    (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Nephi')) AND (body LIKE '%Hello%'))),
    (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Nephi')) AND (body LIKE '%doing well apart%'))),
    1),
    ((SELECT id FROM character WHERE name = 'Laban'),
     'Give us the brass plates!',
     (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Laban')) AND (body LIKE '%What do you want?%'))),
     (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Laban')) AND (body LIKE '%NO, dont be silly,%'))),
     -2),
     ((SELECT id FROM character WHERE name = 'Laban'),
      'If its not too much trouble could you please give us the Brass plates?',
      (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Laban')) AND (body LIKE '%What do you want?%'))),
      (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Laban')) AND (body LIKE '%Since you asked so nicely,%'))),
      -1),
    ((SELECT id FROM character WHERE name = 'Laban'),
    'really?',
    (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Laban')) AND (body LIKE '%Since you asked%'))),
    (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Laban')) AND (body LIKE '%No, not really!%'))),
    -3),

    ((SELECT id FROM character WHERE name = 'Laban'),
     'You are not being serious are you?',
     (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Laban')) AND (body LIKE '%Since you asked%'))),
     (SELECT id FROM character_dialogue WHERE (character_id = ((SELECT id FROM character WHERE name = 'Laban')) AND (body LIKE '%Of course I was not%'))),
     -3);

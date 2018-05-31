insert into character (name, locationID)
  values ('Nephi', 1),
         ('Lehi', 1),
         ('Sariah', 1),
         ('Laban', 2),
         ('Lemuel', 1),
         ('Laman', 1);
insert into location(name)
  values ('Home'),
         ('Jerusalem');

insert into character_dialouge(user_response_group_id, body, character_id)
  values(1, 'Hello',
    (select id From character where name = 'Nephi'));


  create table character_dialouge
  (
     id SERIAL PRIMARY KEY,
     user_response_group_id SMALLINT references user_response_group(id),
     body text NOT NULL,
     character_id SMALLINT references character(id)
  );

  create table characters
  (
     id SERIAL PRIMARY KEY,
     name VARCHAR(250) NOT NULL,
     relationship INTEGER,
     locationID VARCHAR(150) NOT NULL
  );

insert into movies(title, year, rating_id) Values ('The Incredibles 2', 2018, 2);

insert into movies(title, year, rating_id) values ('Star Wars: something', 1977,
  (select id From ratings where code = 'PG'));

  SELECT * FROM movies WHERE title LIKE '%Star Wars%';
  Grabs everything that has a title that contains 'Star Wars'
JOINS:

Put what you want to see where the star is

  SELECT m.title, m.year, r.code FROM movies as m
    INNER JOIN ratings as r ON m.rating_id = r.id
    where r.code = 'PG';



  SELECT * FROM movies as m
    INNER JOIN Movies_actors as ma ON m.id = ma.movie_id
    INNER JOIN actors a on ma.actor_id = a.id
    where r.code = 'PG';

insert into characters (name, location)
  values (Nephi, Home),
         (Lehi, Home),
         (Sariah, Home),
         (Laban, Jerusalem),
         (Lemuel, Home),
         (Laman, Home);

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

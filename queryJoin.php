SELECT * FROM books AS b JOIN reviews AS r ON b.book_id=r.book_id




//3 tabela
SELECT * FROM books AS b JOIN book_genre AS bg ON b.book_id=bg.book_id JOIN genre AS g ON bg.genre_id=g.id

//njejte veq eleminon cilat po don me i pa

SELECT book_name AS "Book Name", g.name AS "genre" FROM books AS b JOIN book_genre AS bg ON b.book_id=bg.book_id JOIN genre AS g ON bg.genre_id=g.id




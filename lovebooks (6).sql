-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 06:58 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lovebooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_author` varchar(255) NOT NULL,
  `book_description` varchar(1000) NOT NULL,
  `book_price` int(255) NOT NULL,
  `book_photo` varchar(255) NOT NULL,
  `book_genre` varchar(255) NOT NULL,
  `book_genre2` varchar(255) NOT NULL,
  `book_genre3` varchar(255) NOT NULL,
  `book_genre4` varchar(255) NOT NULL,
  `book_original_title` varchar(255) NOT NULL,
  `book_publish` varchar(255) NOT NULL,
  `book_pages` varchar(255) NOT NULL,
  `book_ISBN` int(255) NOT NULL,
  `book_ISBN13` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_author`, `book_description`, `book_price`, `book_photo`, `book_genre`, `book_genre2`, `book_genre3`, `book_genre4`, `book_original_title`, `book_publish`, `book_pages`, `book_ISBN`, `book_ISBN13`) VALUES
(1, 'The Midnight Library', 'Matt Haig', 'Between life and death there is a library, and within that library, the shelves go on forever. Every book provides a chance to try another life you could have lived. To see how things would be if you had made other choices . . . Would you have done anything different, if you had the chance to undo your regrets?\r\n    A dazzling novel about all the choices that go into a life well lived, from the internationally bestselling author of Reasons to Stay Alive and How To Stop Time. \r\n    Somewhere out beyond the edge of the universe there is a library that contains an infinite number of books, each one the story of another reality. One tells the story of your life as it is, along with another book for the other life you could have lived if you had made a different choice at any point in your life. While we all wonder how our lives might have been, what if you had the chance to go to the library and see for yourself? Would any of these other lives truly be better?', 13, 'popular_book1.jpg', 'Fiction', 'Fantasy', 'Contemporary', 'Science Fiction', 'The Midnight Library', 'Published September 29th 2020 by Viking (first published August 13th 2020)', 'Hardcover, 304 pages', 2147483647, 1147483648),
(2, 'The Hobbit', 'J. R. R. Tolkien', 'In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort.\r\nWritten for J.R.R. Tolkien’s own children, The Hobbit met with instant critical acclaim when it was first published in 1937. Now recognized as a timeless classic, this introduction to the hobbit Bilbo Baggins, the wizard Gandalf, Gollum, and the spectacular world of Middle-earth recounts of the adventures of a reluctant hero, a powerful and dangerous ring, and the cruel dragon Smaug the Magnificent. The text in this 372-page paperback edition is based on that first published in Great Britain by Collins Modern Classics (1998), and includes a note on the text by Douglas A. Anderson (2001).', 9, 'popular_book2.jpg', 'Fiction', 'Fantasy', 'Classics', 'Young Adult', 'The Hobbit, or There and Back Again', 'Published August 15th 2002 by Houghton Mifflin (first published September 21st 1937)', 'Paperback, 366 pages', 2147483647, 2147483647),
(3, 'Harry Potter and the Philosophers Stone', 'J.K. Rowling', 'Harry Potters life is miserable. His parents are dead and he is stuck with his heartless relatives, who force him to live in a tiny closet under the stairs. But his fortune changes when he receives a letter that tells him the truth about himself: he is a wizard. A mysterious visitor rescues him from his relatives and takes him to his new home, Hogwarts School of Witchcraft and Wizardry. After a lifetime of bottling up his magical powers, Harry finally feels like a normal kid. But even within the Wizarding community, he is special. He is the boy who lived: the only person to have ever survived a killing curse inflicted by the evil Lord Voldemort, who launched a brutal takeover of the Wizarding world, only to vanish after failing to kill Harry. Though Harrys first year at Hogwarts is the best of his life, not everything is perfect. There is a dangerous secret object hidden within the castle walls, and Harry believes it is his responsibility to prevent it from falling into evil hands.', 7, 'popular_book3.jpg', 'Fiction', 'Fantasy', 'Children', 'Classics', 'Harry Potter and the Philosophers Stone', 'Published November 1st 2003 by Scholastic Inc (first published June 26th 1997)', 'Hardcover, Library Edition, 309 pages', 2147483647, 2147483647),
(4, 'The Little Prince', 'Antoine de Saint-Exupéry', 'A pilot stranded in the desert awakes one morning to see, standing before him, the most extraordinary little fellow. -Please, asks the stranger, -draw me a sheep. And the pilot realizes that when lifes events are too difficult to understand, there is no choice but to succumb to their mysteries. He pulls out pencil and paper... And thus begins this wise and enchanting fable that, in teaching the secret of what is really important in life, has changed forever the world for its readers.Few stories are as widely read and as universally cherished by children and adults alike as The Little Prince, presented here in a stunning new translation with carefully restored artwork. The definitive edition of a worldwide classic, it will capture the hearts of readers of all ages.', 9, 'popular_book4.jpg', 'Fiction', 'Fantasy', 'Young Adult', 'Classics', 'Le Petit Prince', 'Published June 29th 2000 by Harcourt, Inc. (first published April 6th 1943)', 'Paperback, 96 pages', 2147483647, 2147483647),
(5, 'Taste: My Life through Food', 'Stanley Tucci', 'From award-winning actor and food obsessive Stanley Tucci comes an intimate and charming memoir of life in and out of the kitchen. Before Stanley Tucci became a household name with The Devil Wears Prada, The Hunger Games, and the perfect Negroni, he grew up in an Italian American family that spent every night around the table. He shared the magic of those meals with us in The Tucci Cookbook and The Tucci Table, and now he takes us beyond the recipes and into the stories behind them. Taste is a reflection on the intersection of food and life, filled with anecdotes about growing up in Westchester, New York, preparing for and filming the foodie films Big Night and Julie & Julia, falling in love over dinner, and teaming up with his wife to create conversation-starting meals for their children. Each morsel of this gastronomic journey through good times and bad, five-star meals and burnt dishes, is as heartfelt and delicious as the last.', 12, 'popular_book6.jpg', 'Non-Fiction', 'Biography', 'Autobiography', 'XXXXX', 'Taste: My Life Through Food', 'Published October 5th 2021 by Gallery Books', 'Hardcover, 291 pages', 1982168013, 2147483647),
(6, 'The Lion, the Witch and the Wardrobe', 'C. S. Lewis', 'Narnia… the land beyond the wardrobe door, a secret place frozen in eternal winter, a magical country waiting to be set free. Lucy is the first to find the secret of the wardrobe in the professors mysterious old house. At first her brothers and sister do not believe her when she tells of her visit to the land of Narnia. But soon Edmund, then Peter and Susan step through the wardrobe themselves. In Narnia they find a country buried under the evil enchantment of the White Witch. When they meet the Lion Aslan, they realize they have been called to a great adventure and bravely join the battle to free Narnia from the Witchs sinister spell.', 7, 'popular_book7.jpg', 'Fiction', 'Fantasy', 'Classics', 'Young Adult', 'The Lion, the Witch and the Wardrobe', 'Published 2005 by HarperCollins Publishers (first published October 16th 1950)', 'Paperback, Film tie-in (US/Can.), 206 pages', 2147483647, 2147483647),
(7, 'The Seven Husbands of Evelyn Hugo: A Novel', 'Taylor Jenkins Reid', 'Aging and reclusive Hollywood movie icon Evelyn Hugo is finally ready to tell the truth about her glamorous and scandalous life. But when she chooses unknown magazine reporter Monique Grant for the job, no one is more astounded than Monique herself. Why her? Why now? Monique is not exactly on top of the world. Her husband has left her, and her professional life is going nowhere. Regardless of why Evelyn has selected her to write her biography, Monique is determined to use this opportunity to jumpstart her career. From making her way to Los Angeles in the 1950s to her decision to leave show business in the ‘80s, and, of course, the seven husbands along the way, Evelyn unspools a tale of ruthless ambition, unexpected friendship, and a great forbidden love. Monique begins to feel a very real connection to the legendary star, but as Evelyn’s story near its conclusion, it becomes clear that her life intersects with Monique’s own in tragic and irreversible ways.', 13, 'popular_book8.jpg', 'Fiction', 'LGBT', 'Romance', 'Adult', 'The Seven Husbands of Evelyn Hugo', 'Published June 13th 2017 by Atria Books', 'Hardcover, 389 pages', 1501139231, 2147483647),
(8, 'The Dressmakers of Auschwitz: The True Story of the Women Who Sewed to Survive', 'Lucy Adlington', 'A powerful chronicle of the women who used their sewing skills to survive the Holocaust, stitching beautiful clothes at an extraordinary fashion workshop created within one of the most notorious WWII death camps. At the height of the Holocaust twenty-five young inmates of the infamous Auschwitz-Birkenau concentration camp—mainly Jewish women and girls—were selected to design, cut, and sew beautiful fashions for elite Nazi women in a dedicated salon. It was work that they hoped would spare them from the gas chambers. This fashion workshop—called the Upper Tailoring Studio—was established by Hedwig Höss, the camp commandant’s wife, and patronized by the wives of SS guards and officers. Here, the dressmakers produced high-quality garments for SS social functions in Auschwitz, and for ladies from Nazi Berlin’s upper crust.', 12, 'popular_book9.jpg', 'Non-Fiction', 'Historical', 'Biography', 'Adult', 'The Dressmakers of Auschwitz', 'Published September 14th 2021 by Harper Paperbacks', 'Paperback, 304 pages', 63030934, 2147483647),
(9, 'The Alchemist', 'Paulo Coelho', 'Paulo Coelhos enchanting novel has inspired a devoted following around the world. This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago, who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Along the way he meets a Romany woman, a man who calls himself a king, and an alchemist, all of whom point Santiago in the right direction for his quest. No one knows what the treasure is, or whether Santiago will be able to surmount the obstacles in his path; but what starts out as a journey to find worldly goods turns into a discovery of treasure within. Lush, evocative, and deeply humane, the story of Santiago is an eternal testament to the transforming power of our dreams and the importance of listening to our hearts.', 6, 'popular_book10.jpg', 'Fiction', 'Fantasy', 'Classics', 'Philosophy', 'O Alquimista', 'Published April 15th 2014 by HarperOne (first published 1988)', 'Paperback, 25th Anniversary Edition, 182 pages', 2147483647, 222222222),
(10, 'Anna Karenina', 'Leo Tolstoy', 'Acclaimed by many as the worlds greatest novel, Anna Karenina provides a vast panorama of contemporary life in Russia and of humanity in general. In it Tolstoy uses his intense imaginative insight to create some of the most memorable characters in all of literature. Anna is a sophisticated woman who abandons her empty existence as the wife of Karenin and turns to Count Vronsky to fulfil her passionate nature - with tragic consequences. Levin is a reflection of Tolstoy himself, often expressing the authors own views and convictions.\r\nThroughout, Tolstoy points no moral, merely inviting us not to judge but to watch. As Rosemary Edmonds comments, He leaves the shifting patterns of the kaleidoscope to bring home the meaning of the brooding words following the title, -Vengeance is mine, and I will repay.', 9, 'popular_book12.jpg', 'Fiction', 'Classics', 'Romance', 'Novels', 'Анна Каренина', 'October 16th 2012 by Vintage (first published 1877)', 'Paperback, Movie Tie-In Edition, 964 pages', 2147483647, 222222222),
(11, 'The Catcher in the Rye', 'J. D. Salinger', 'The hero-narrator of The Catcher in the Rye is an ancient child of sixteen, a native New Yorker named Holden Caulfield. Through circumstances that tend to preclude adult, secondhand description, he leaves his prep school in Pennsylvania and goes underground in New York City for three days. The boy himself is at once too simple and too complex for us to make any final comment about him or his story. Perhaps the safest thing we can say about Holden is that he was born in the world not just strongly attracted to beauty but, almost, hopelessly impaled on it. There are many voices in this novel: childrens voices, adult voices, underground voices-but Holdens voice is the most eloquent of all. Transcending his own vernacular, yet remaining marvelously faithful to it, he issues a perfectly articulated cry of mixed pain and pleasure. However, like most lovers and clowns and poets of the higher orders, he keeps most of the pain to, and for, himself.', 11, 'popular_book11.jpg', 'Fiction', 'Fantasy', 'Classics', 'Young Adult', 'XXXXX', 'XXXXXXX', 'XXXXXXXXXX', 2147483647, 222222222),
(12, 'Jane Eyre', 'Charlotte Brontë', 'Charlotte Brontes impassioned novel is the love story of Jane Eyre, a plain yet spirited governess, and her arrogant, brooding Mr. Rochester. Published in 1847, under the pseudonym of Currer Bell, the book heralded a new kind of heroine—one whose virtuous integrity, keen intellect and tireless perseverance broke through class barriers to win equal stature with the man she loved. Hailed by William Makepeace Thackeray as -the masterwork of great genius,- Jane Eyre is still regarded, over a century later, as one of the finest novels in English literature.\r\nOrphaned as a child, Jane has felt an outcast her whole young life. Her courage is tested once again when she arrives at Thornfield Hall, where she has been hired by the brooding, proud Edward Rochester to care for his ward Adèle. Jane finds herself drawn to his troubled yet kind spirit. She falls in love. Hard.But there is a terrifying secret inside the gloomy, forbidding Thornfield Hall. Is Rochester hiding from Jane?', 12, 'popular_book18.jpg', 'Fiction', 'Classics', 'Adult', 'Romance', 'Jane Eyre: An Autobiography', 'Published February 4th 2003 by Penguin (first published October 16th 1847)', 'Paperback, Penguin Classics, 532 pages', 142437204, 2147483647),
(13, 'The Great Gatsby', 'F. Scott Fitzgerald', 'The Great Gatsby, F. Scott Fitzgeralds third book, stands as the supreme achievement of his career. This exemplary novel of the Jazz Age has been acclaimed by generations of readers. The story is of the fabulously wealthy Jay Gatsby and his new love for the beautiful Daisy Buchanan, of lavish parties on Long Island at a time when The New York Times noted -gin was the national drink and sex the national obsession,- it is an exquisitely crafted tale of America in the 1920s. The Great Gatsby is one of the great classics of twentieth-century literature.', 9, 'popular_book14.jpg', 'Fiction', 'Classics', 'Politics', 'Novels', 'The Great Gatsby', 'Published September 2004 by Scribner (first published 1925)', 'Paperback, US / CAN, 200 pages', 684801523, 2147483647),
(14, 'To Kill a Mockingbird', 'Harper Lee', 'The unforgettable novel of a childhood in a sleepy Southern town and the crisis of conscience that rocked it. To Kill A Mockingbird- became both an instant bestseller and a critical success when it was first published in 1960. It went on to win the Pulitzer Prize in 1961 and was later made into an Academy Award-winning film, also a classic.Compassionate, dramatic, and deeply moving, To Kill A Mockingbird- takes readers to the roots of human behavior - to innocence and experience, kindness and cruelty, love and hatred, humor and pathos. Now with over 18 million copies in print and translated into forty languages, this regional story by a young Alabama woman claims universal appeal. Harper Lee always considered her book to be a simple love story. Today it is regarded as a masterpiece of American literature.', 8, 'popular_book13.jpg', 'Fiction', 'Classics', 'Literature', 'Young Adult', 'To Kill a Mockingbird', 'Published June 24th 2010 by Arrow Books Ltd (first published July 11th 1960)', 'Paperback, 50th Anniversary Edition, 309 pages', 2147483647, 222222222),
(15, 'The 1619 Project: A New Origin Story', 'Nikole Hannah-Jones', 'This new book substantially expands on the original 1619 Project, weaving together eighteen essays that explore the legacy of slavery in present-day America with 36 poems and works of fiction that illuminate key moments of oppression, struggle, and resistance. The essays show how the inheritance of 1619 reaches into every part of contemporary American society, from politics, music, diet, traffic, and citizenship to capitalism, religion, and our democracy itself. This legacy can be seen in the way we tell stories, the way we teach our children, and the way we remember. Together, the elements of the book reveal a new origin story for the United States, one that helps explain not only the persistence of anti-Black racism and inequality in American life today, but also the roots of what makes the country unique.', 11, 'popular_book27.jfif', 'Non-Fiction', 'Historical', 'Politics', 'Race', 'The 1619 Project: A New Origin Story', 'Published December 28th 2021 by Random House Large Print (first published August 18th 2019)', 'Paperback, Unabridged; Large Print, 1040 pages', 593230574, 2147483647),
(17, 'The Year of Magical Thinking', 'Joan Didion', 'Several days before Christmas 2003, John Gregory Dunne and Joan Didion saw their only daughter, Quintana, fall ill with what seemed at first flu, then pneumonia, then complete septic shock. She was put into an induced coma and placed on life support. Days later–the night before New Years Eve–the Dunnes were just sitting down to dinner after visiting the hospital when John Gregory Dunne suffered a massive and fatal coronary. In a second, this close, symbiotic partnership of forty years was over. Four weeks later, their daughter pulled through. Two months after that, arriving at LAX, she collapsed and underwent six hours of brain surgery at UCLA Medical Center to relieve a massive hematoma.\r\nThis powerful book is Didions attempt to make sense of the weeks and then months that cut loose any fixed idea I ever had about death, about illness . . . about marriage and children and memory . . . about the shallowness of sanity, about life itself.', 14, 'nonfiction_book5.jpg', 'Non-Fiction', 'Autobiography', 'Psychology', 'Literature', 'The Year of Magical Thinking', 'Published February 13th 2007 by Vintage (first published September 1st 2005)', 'Paperback, Vintage International (US / Canada), 227 pages', 1400078431, 2147483647),
(18, 'The House of Gucci: A True Story of Murder, Madness, Glamour, and Greed', 'Sara Gay Forden', 'The sensational true story of murder, madness, glamour, and greed that shook the Gucci dynasty, now fully updated with a new afterword.\r\nOn March 27, 1995, Maurizio Gucci, heir to the fabulous fashion dynasty, was slain by an unknown gunman as he approached his Milan office. In 1998, his ex-wife Patrizia Reggiani Martinelli--nicknamed -The Black Widow- by the press-was sentenced to 29 years in prison, for arranging his murder.\r\nDid Patrizia murder her ex-husband because his spending was wildly out of control? Did she do it because her glamorous ex was preparing to marry his mistress, Paola Franchi? Or is there a possibility she did not do it at all?\r\nThe Gucci story is one of glitz, glamour, intrigue, the rise, near fall and subsequent resurgence of a fashion dynasty. Beautifully written, impeccably researched, and widely acclaimed, The House of Gucci will captivate readers with its page-turning account of high fashion, high finance, and heart-rending personal tragedy.', 15, 'nonfiction_book6.jpg', 'Non-Fiction', 'Crime', 'Mystery', 'Business', 'The House of Gucci: A Sensational Story of Murder, Madness, Glamour, and Greed', 'Published October 26th 2021 by Custom House (first published 2000)', 'Paperback, Movie Tie-In, 544 pages', 63159988, 2147483647),
(19, 'Wonder', 'R. J. Palacio', 'I won’t describe what I look like. Whatever you’re thinking, it’s probably worse.\r\nAugust Pullman was born with a facial difference that, up until now, has prevented him from going to a mainstream school. Starting 5th grade at Beecher Prep, he wants nothing more than to be treated as an ordinary kid—but his new classmates can’t get past Auggie’s extraordinary face. Wonder, begins from Auggie’s point of view, but soon switches to include his classmates, his sister, her boyfriend, and others.', 10, 'popular_book35.jfif', 'Fiction', 'Family', 'Fiction', 'Realistic Fiction', 'Wonder', 'Published February 14th 2012 by Alfred A. Knopf', 'Hardcover, 315 pages', 2147483647, 2147483647),
(20, 'Animal Farm', 'George Orwell', 'A farm is taken over by its overworked, mistreated animals. With flaming idealism and stirring slogans, they set out to create a paradise of progress, justice, and equality. Thus the stage is set for one of the most telling satiric fables ever penned –a razor-edged fairy tale for grown-ups that records the evolution from revolution against tyranny to a totalitarianism just as terrible.When Animal Farm was first published, Stalinist Russia was seen as its target. Today it is devastatingly clear that wherever and whenever freedom is attacked, under whatever banner, the cutting clarity and savage comedy of George Orwell’s masterpiece have a meaning and message still ferociously fresh.', 7, 'fiction_book16.jpg', 'Fiction', 'Fantasy', 'Fiction', '', 'Animal Farm: A Fairy Story', 'Published March 15th 2011 by Penguin Books India (first published August 17th 1945)', 'Paperback, 95 pages', 143416316, 2147483647),
(21, 'Klara and the Sun', 'Kazuo Ishiguro', 'From the best-selling author of Never Let Me Go and The Remains of the Day, a stunning new novel—his first since winning the Nobel Prize in Literature—about the wondrous, mysterious nature of the human heart.\r\nFrom her place in the store, Klara, an Artificial Friend with outstanding observational qualities, watches carefully the behavior of those who come in to browse, and of those who pass on the street outside. She remains hopeful that a customer will soon choose her, but when the possibility emerges that her circumstances may change forever, Klara is warned not to invest too much in the promises of humans.\r\nIn Klara and the Sun, Kazuo Ishiguro looks at our rapidly changing modern world through the eyes of an unforgettable narrator to explore a fundamental question: what does it mean to love?', 11, 'book14.jpg', 'Fiction', 'Fantasy', 'Fantasy', 'Science Fantasy', 'Klara and the Sun', 'Published March 2nd 2021 by Alfred A. Knopf', 'Hardcover, 303 pages', 59331817, 2147483647),
(22, 'Open Water', 'Caleb Azumah Nelson', 'Two young people meet at a pub in South East London. Both are Black British, both won scholarships to private schools where they struggled to belong, both are now artists - he a photographer, she a dancer - trying to make their mark in a city that by turns celebrates and rejects them. Tentatively, tenderly, they fall in love. But two people who seem destined to be together can still be torn apart by fear and violence.', 12, 'fiction_book1.jpg', 'Fiction', 'Adult', 'Romance', 'Contemporary', 'Open Water', 'Published February 4th 2021 by Viking', 'Hardcover, 145 pages', 241448778, 2147483647),
(23, 'Afterparties', 'Anthony Veasna So', 'Seamlessly transitioning between the absurd and the tenderhearted, balancing acerbic humor with sharp emotional depth, Afterparties offers an expansive portrait of the lives of Cambodian-Americans. As the children of refugees carve out radical new paths for themselves in California, they shoulder the inherited weight of the Khmer Rouge genocide and grapple with the complexities of race, sexuality, friendship, and family.\r\nA high school badminton coach and failing grocery store owner tries to relive his glory days by beating a rising star teenage player. Two drunken brothers attend a wedding afterparty and hatch a plan to expose their shady uncle’s snubbing of the bride and groom.', 10, 'fiction_book2.jpg', 'Fiction', 'Fantasy', 'Adult', 'LGBT', 'Afterparties: Stories', 'Published August 3rd 2021 by Ecco', 'ebook, 272 pages', 63049910, 2147483647),
(24, 'Cloud Cuckoo Land', 'Anthony Doerr', 'Thirteen-year-old Anna, an orphan, lives inside the formidable walls of Constantinople in a house of women who make their living embroidering the robes of priests. Restless, insatiably curious, Anna learns to read, and in this ancient city, famous for its libraries, she finds a book, the story of Aethon, who longs to be turned into a bird so that he can fly to a utopian paradise in the sky. This she reads to her ailing sister as the walls of the only place she has known are bombarded in the great siege of Constantinople. Outside the walls is Omeir, a village boy, miles from home, conscripted with his beloved oxen into the invading army. His path and Anna’s will cross.', 10, 'fiction_book3.jpg', 'Fiction', 'Science Fiction', 'Adult', 'Historical', 'Cloud Cuckoo Land', 'Published September 28th 2021 by Scribner', 'Hardcover, 626 pages', 1982168439, 2147483647),
(25, 'Great Circle', 'Maggie Shipstead', 'After being rescued as infants from a sinking ocean liner in 1914, Marian and Jamie Graves are raised by their dissolute uncle in Missoula, Montana. There—after encountering a pair of barnstorming pilots passing through town in beat-up biplanes—Marian commences her lifelong love affair with flight. At fourteen she drops out of school and finds an unexpected and dangerous patron in a wealthy bootlegger who provides a plane and subsidizes her lessons, an arrangement that will haunt her for the rest of her life, even as it allows her to fulfill her destiny: circumnavigating the globe by flying over the North and South Poles. A century later, Hadley Baxter is cast to play Marian in a film that centers on Marians disappearance in Antarctica. Vibrant, canny, disgusted with the claustrophobia of Hollywood, Hadley is eager to redefine herself after a romantic film franchise has imprisoned her in the grip of cult celebrity.', 9, 'fiction_book4.jpg', 'Fiction', 'Science Fiction', 'Adult', 'Historical', 'Great Circle', 'Published May 4th 2021 by Knopf', 'Hardcover, 608 pages', 1111111111, 22222222),
(26, 'The Wife Upstairs', 'Rachel Hawkins', 'Meet Jane. Newly arrived to Birmingham, Alabama, Jane is a broke dog-walker in Thornfield Estates—a gated community full of McMansions, shiny SUVs, and bored housewives. The kind of place where no one will notice if Jane lifts the discarded tchotchkes and jewelry off the side tables of her well-heeled clients. Where no one will think to ask if Jane is her real name. But her luck changes when she meets Eddie Rochester. Recently widowed, Eddie is Thornfield Estates’ most mysterious resident. His wife, Bea, drowned in a boating accident with her best friend, their bodies lost to the deep. Jane can’t help but see an opportunity in Eddie—not only is he rich, brooding, and handsome, he could also offer her the kind of protection she’s always yearned for. Yet as Jane and Eddie fall for each other, Jane is increasingly haunted by the legend of Bea, an ambitious beauty with a rags-to-riches origin story, who launched a wildly successful southern lifestyle brand.', 11, 'book8.jpg', 'Fiction', 'Thriller', 'Adult', 'Mystery', 'The Wife Upstairs', 'Published January 5th 2021 by St. Martins Press', 'Hardcover, 290 pages', 1250245494, 2147483647),
(28, 'The Prophets', 'Robert Jones, Jr.', 'Isaiah was Samuel’s and Samuel was Isaiah’s. That was the way it was since the beginning, and the way it was to be until the end. In the barn they tended to the animals, but also to each other, transforming the hollowed-out shed into a place of human refuge, a source of intimacy and hope in a world ruled by vicious masters. But when an older man—a fellow slave—seeks to gain favor by preaching the master’s gospel on the plantation, the enslaved begin to turn on their own. Isaiah and Samuel’s love, which was once so simple, is seen as sinful and a clear danger to the plantation’s harmony. With a lyricism reminiscent of Toni Morrison, Robert Jones, Jr. fiercely summons the voices of slaver and the enslaved alike to tell the story of these two men; from Amos the preacher to the calculating slave-master himself to the long line of women that surround them, women who have carried the soul of the plantation on their shoulders.', 9, 'fiction_book5.jpg', 'Fiction', 'Historical', 'LGBT', 'Adult', 'The Prophets', 'Published January 5th 2021 by G.P. Putnam’s Sons', 'Hardcover, 400 pages', 111111111, 222222222),
(29, 'Detransition, Baby', 'Torrey Peters', 'A whipsmart debut about three women—transgender and cisgender—whose lives collide after an unexpected pregnancy forces them to confront their deepest desires around gender, motherhood, and sex.Reese almost had it all: a loving relationship with Amy, an apartment in New York City, a job she didn’t hate. She had scraped together what previous generations of trans women could only dream of: a life of mundane, bourgeois comforts. The only thing missing was a child. But then her girlfriend, Amy, detransitioned and became Ames, and everything fell apart. Now Reese is caught in a self-destructive pattern: avoiding her loneliness by sleeping with married men. Ames isn’t happy either. He thought detransitioning to live as a man would make life easier, but that decision cost him his relationship with Reese—and losing her meant losing his only family. Even though their romance is over, he longs to find a way back to her. When Ames’s boss and lover, Katrina, reveals that she’s pregnant with his ba', 12, 'fiction_book6.jfif', 'Fiction', 'Fantasy', 'Science Fiction', 'Adult', 'Detransition, Baby', 'Published January 12th 2021 by One World', 'Hardcover, 337 pages', 593133374, 2147483647),
(31, 'The Life of the Mind', 'Christine Smallwood', 'As an adjunct professor of English in New York City with no hope of finding a permanent position, Dorothy feels \"like a janitor in the temple who continued to sweep because she had nowhere else to be but who had lost her belief in the essential sanctity of the enterprise.\" No one but her boyfriend knows that she\'s just had a miscarriage, not even her therapists--Dorothy has two of them. Nor can she bring herself to tell the other women in her life: her friends, her doctor, her mentor, her mother. The freedom not to be a mother is one of the victories of feminism. So why does she feel like a failure?', 10, 'fiction_book7.jpg', 'Fiction', 'Novels', 'Adult', 'Mental Health', 'The Life of the Mind', 'Published March 2nd 2021 by Hogarth Press', 'Hardcover, 240 pages', 593229894, 2147483647),
(32, 'The Love Songs of W.E.B. Du Bois', 'Honorée Fanonne Jeffers', 'The great scholar, W. E. B. Du Bois, once wrote about the Problem of race in America, and what he called “Double Consciousness,” a sensitivity that every African American possesses in order to survive. Since childhood, Ailey Pearl Garfield has understood Du Bois’s words all too well. Bearing the names of two formidable Black Americans—the revered choreographer Alvin Ailey and her great grandmother Pearl, the descendant of enslaved Georgians and tenant farmers—Ailey carries Du Bois’s Problem on her shoulders. Ailey is reared in the north in the City but spends summers in the small Georgia town of Chicasetta, where her mother’s family has lived since their ancestors arrived from Africa in bondage. From an early age, Ailey fights a battle for belonging that’s made all the more difficult by a hovering trauma, as well as the whispers of women—her mother, Belle, her sister, Lydia, and a maternal line reaching back two centuries—that urge Ailey to succeed in their stead. ', 13, 'fiction_book8.jpg', 'Fiction', 'Historical Ficiton', 'Literary Fiction', 'Historical', 'The Life of the Mind', 'Published August 24th 2021 by Harper', 'Hardcover, 816 pages', 6294293, 2147483647),
(33, 'My Monticello', 'Jocelyn Nicole Johnson', 'A young woman descended from Thomas Jefferson and Sally Hemings driven from her neighborhood by a white militia. A university professor studying racism by conducting a secret social experiment on his own son. A single mother desperate to buy her first home even as the world hurtles toward catastrophe. Each fighting to survive in America.  Tough-minded, vulnerable, and brave, Jocelyn Nicole Johnson’s precisely imagined debut explores burdened inheritances and extraordinary pursuits of belonging. Set in the near future, the eponymous novella, “My Monticello,” tells of a diverse group of Charlottesville neighbors fleeing violent white supremacists. Led by Da’Naisha, a young Black descendant of Thomas Jefferson and Sally Hemings, they seek refuge in Jefferson’s historic plantation home in a desperate attempt to outlive the long-foretold racial and environmental unravelling within the nation.', 9, 'fiction_book9.jpg', 'Fiction', 'Short Stories', 'Historical Fiction', 'Adult', 'My Monticello', 'Published October 5th 2021 by Henry Holt and Co.', 'Hardcover, 224 pages', 1250807158, 2147483647),
(34, 'Nineteen Eighty-Four', 'George Orwell', '\'It was a bright cold day in April, and the clocks were striking thirteen.\' Winston Smith works for the Ministry of truth in London, chief city of Airstrip One. Big Brother stares out from every poster, the Thought Police uncover every act of betrayal. When Winston finds love with Julia, he discovers that life does not have to be dull and deadening, and awakens to new possibilities. Despite the police helicopters that hover and circle overhead, Winston and Julia begin to question the Party; they are drawn towards conspiracy. Yet Big Brother will not tolerate dissent - even in the mind. For those with original thoughts they invented Room 101 . . . Nineteen Eighty-Four is George Orwell\'s terrifying vision of a totalitarian future in which everything and everyone is slave to a tyrannical regime.', 11, 'fiction_book10.jpg', 'Fiction', 'Classics', 'Science Fiction', 'Politics', 'Nineteen Eighty-Four', 'Published July 3rd 2008 by Penguin Books (first published April 8th 1949)', 'Paperback, 311 pages', 141036141, 2147483647),
(35, 'The Grapes of Wrath', 'John Steinbeck', 'The Pulitzer Prize-winning epic of the Great Depression, a book that galvanized—and sometimes outraged—millions of readers.First published in 1939, Steinbeck’s Pulitzer Prize-winning epic of the Great Depression chronicles the Dust Bowl migration of the 1930s and tells the story of one Oklahoma farm family, the Joads—driven from their homestead and forced to travel west to the promised land of California. Out of their trials and their repeated collisions against the hard realities of an America divided into Haves and Have-Nots evolves a drama that is intensely human yet majestic in its scale and moral vision, elemental yet plainspoken, tragic but ultimately stirring in its human dignity. A portrait of the conflict between the powerful and the powerless, of one man’s fierce reaction to injustice, and of one woman’s stoical strength, the novel captures the horrors of the Great Depression and probes into the very nature of equality and justice in America.', 10, 'fiction_book12.jpg', 'Fiction', 'Classics', 'Adult', 'Historical Fiction', 'The Grapes of Wrath', 'Published April 10th 2014 by Viking (first published April 14th 1939)', 'Hardcover, 75th Anniversary Edition, 479 pages', 2147483647, 2147483647),
(36, 'Pride And Prejudice', 'Jane Austen', 'Since its immediate success in 1813, Pride and Prejudice has remained one of the most popular novels in the English language. Jane Austen called this brilliant work \"her own darling child\" and its vivacious heroine, Elizabeth Bennet, \"as delightful a creature as ever appeared in print.\" The romantic clash between the opinionated Elizabeth and her proud beau, Mr. Darcy, is a splendid performance of civilized sparring. And Jane Austen\'s radiant wit sparkles as her characters dance a delicate quadrille of flirtation and intrigue, making this book the most superb comedy of manners of Regency England.', 11, 'fiction_book13.jpg', 'Fiction', 'Classics', 'Romance', 'Historical Fiction', 'Pride and Prejudice', 'Published March 2003 by Bantam Classic (first published March 1st 1813)', 'Paperback, Bantam Classic, 334 pages', 553213105, 2147483647),
(37, 'Silent Spring', 'Rachel Carson', 'Rachel Carson’s Silent Spring was first published in three serialized excerpts in the New Yorker in June of 1962. The book appeared in September of that year and the outcry that followed its publication forced the banning of DDT and spurred revolutionary changes in the laws affecting our air, land, and water. Carson’s passionate concern for the future of our planet reverberated powerfully throughout the world, and her eloquent book was instrumental in launching the environmental movement. It is without question one of the landmark books of the twentieth century.', 11, 'nonfiction_book1.jpg', 'Non-Fiction', 'Adult', 'Literary ', 'Mental Health', 'Silent Spring', 'Published October 22nd 2002 by Mariner Books (first published September 27th 1962)', 'Paperback, 378 pages', 618249060, 2147483647),
(38, 'Becoming', 'Michelle Obama', 'In a life filled with meaning and accomplishment, Michelle Obama has emerged as one of the most iconic and compelling women of our era. As First Lady of the United States of America—the first African American to serve in that role—she helped create the most welcoming and inclusive White House in history, while also establishing herself as a powerful advocate for women and girls in the U.S. and around the world, dramatically changing the ways that families pursue healthier and more active lives, and standing with her husband as he led America through some of its most harrowing moments. Along the way, she showed us a few dance moves, crushed Carpool Karaoke, and raised two down-to-earth daughters under an unforgiving media glare.', 22, 'nonfiction_book45.jfif', 'Non-Fiction', 'Memoir', 'Biography', 'Autobiography', 'Becoming', 'Published November 13th 2018 by Crown', 'Hardcover, 426 pages', 0, 0),
(39, 'The Sixth Extinction: An Unnatural History', 'Elizabeth Kolbert', 'Over the last half-billion years, there have been five mass extinctions, when the diversity of life on earth suddenly and dramatically contracted. Scientists around the world are currently monitoring the sixth extinction, predicted to be the most devastating extinction event since the asteroid impact that wiped out the dinosaurs. This time around, the cataclysm is us. In prose that is at once frank, entertaining, and deeply informed, The New Yorker writer Elizabeth Kolbert tells us why and how human beings have altered life on the planet in a way no species has before. Interweaving research in half a dozen disciplines, descriptions of the fascinating species that have already been lost, and the history of extinction as a concept, Kolbert provides a moving and comprehensive account of the disappearances occurring before our very eyes. She shows that the sixth extinction is likely to be mankind\'s most lasting legacy, compelling us to rethink the fundamental question of what it means to b', 14, 'nonfiction_book3.jpg', 'Non-Fiction', 'Science', 'Adult', 'Environment', 'The Sixth Extinction: An Unnatural History', 'Published February 11th 2014 by Henry Holt and Co. (Georg von Holtzbrinck)', 'Hardcover, 336 pages', 805092994, 2147483647),
(40, 'Renegades: Born in the USA', 'Barack Obama and Bruce Springsteen', 'Two longtime friends share an intimate and urgent conversation about life, music, and their enduring love of America, with all its challenges and contradictions, in this stunningly produced expansion of their groundbreaking Higher Ground podcast, featuring more than 350 photographs, exclusive bonus content, and never-before-seen archival material. Renegades: Born in the USA is a candid, revealing, and entertaining dialogue between President Barack Obama and legendary musician Bruce Springsteen that explores everything from their origin stories and career-defining moments to our country’s polarized politics and the growing distance between the American Dream and the American reality. Filled with full-color photographs and rare archival material, it is a compelling and beautifully illustrated portrait of two outsiders—one Black and one white—looking for a way to connect their unconventional searches for meaning, identity, and community with the American story itself.', 29, 'nonfiction_book44.jfif', 'Non-Fiction', 'Politics', 'Biography', 'Historical', 'Renegades: Born in the USA', 'Published October 26th 2021 by Crown Publishing Group (NY)', 'Hardcover, 320 pages', 593236319, 2147483647),
(41, 'Ariel', 'Sylvia Plath', 'The poems in Sylvia Plath\'s Ariel, including many of her best-known such as \'Lady Lazarus\', \'Daddy\', \'Edge\' and \'Paralytic\', were all written between the publication in 1960 of Plath\'s first book, The Colossus, and her death in 1963. \'If the poems are despairing, vengeful and destructive, they are at the same time tender, open to things, and also unusually clever, sardonic, hardminded . . . They are works of great artistic purity and, despite all the nihilism, great generosity . . . the book is a major literary event.\' A. Alvarez in the Observer This beautifully designed edition forms part of a series with five other cherished poets, including Wendy Cope, Don Paterson, Philip Larkin, Simon Armitage and Alice Oswald.', 8, 'nonfiction_book11.jpg', 'Non-Fiction', 'Poetry', 'Classics', 'Literature', 'Ariel', 'Published May 6th 2010 by Faber and Faber (first published 1965)', 'Hardcover, 81 pages', 571259316, 2147483647),
(42, 'Will', 'Will Smith', 'One of the most dynamic and globally recognized entertainment forces of our time opens up fully about his life, in a brave and inspiring book that traces his learning curve to a place where outer success, inner happiness, and human connection are aligned. Along the way, Will tells the story in full of one of the most amazing rides through the worlds of music and film that anyone has ever had. Will Smith’s transformation from a fearful child in a tense West Philadelphia home to one of the biggest rap stars of his era and then one of the biggest movie stars in Hollywood history, with a string of box office successes that will likely never be broken, is an epic tale of inner transformation and outer triumph, and Will tells it astonishingly well. But it\'s only half the story.', 18, 'nonfiction_book43.jfif', 'Non-Fiction', 'Biography', 'Adult', 'Self Help', 'Will', 'Published November 9th 2021 by Penguin Press', 'Hardcover, 418 pages', 1984877925, 2147483647),
(43, 'The Very Hungry Caterpillar', 'Eric Carle', 'THE all-time classic story, from generation to generation, sold somewhere in the world every 30 seconds! Have you shared it with a child or grandchild in your life? One sunny Sunday, the caterpillar was hatched out of a tiny egg. He was very hungry. On Monday, he ate through one apple; on Tuesday, he ate through three plums--and still he was hungry. When full at last, he made a cocoon around himself and went to sleep, to wake up a few weeks later wonderfully transformed into a butterfly! The brilliantly innovative Eric Carle has dramatized the story of one of Nature\'s commonest yet loveliest marvels, the metamorphosis of the butterfly. This audiobook will delight as well as instruct the very youngest listener.', 7, 'children_book1.jfif', 'Childrens', 'Fiction', 'Classics', 'Animals', 'The Very Hungry Caterpillar', 'Published 1994 by Puffin Books (first published June 3rd 1969)', 'Board book, 26 pages', 241003008, 2147483647),
(44, 'Yes No Maybe So', 'Aisha Saeed and Becky Albertalli', 'New York Times bestselling authors Becky Albertalli and Aisha Saeed have crafted a resonant, funny, and memorable story about the power of love and resistance. YES Jamie Goldberg is cool with volunteering for his local state senate candidate—as long as he’s behind the scenes. When it comes to speaking to strangers (or, let’s face it, speaking at all to almost anyone), Jamie’s a choke artist. There’s no way he’d ever knock on doors to ask people for their votes…until he meets Maya. NO Maya Rehman’s having the worst Ramadan ever. Her best friend is too busy to hang out, her summer trip is canceled, and now her parents are separating. Why her mother thinks the solution to her problems is political canvassing—with some awkward dude she hardly knows—is beyond her.', 12, 'children_book40.jfif', 'Young Adult', 'Romance', 'Fiction', 'Realistic Fictioon', 'Yes No Maybe So', 'Published February 4th 2020 by Balzer + Bray', 'Hardcover, 436 pages', 62937049, 2147483647),
(45, 'Charlotte\'s Web', 'E. B. White', 'This beloved book by E. B. White, author of Stuart Little and The Trumpet of the Swan, is a classic of children\'s literature that is \"just about perfect.\" This high-quality paperback features vibrant illustrations colorized by Rosemary Wells!  Some Pig. Humble. Radiant. These are the words in Charlotte\'s Web, high up in Zuckerman\'s barn. Charlotte\'s spiderweb tells of her feelings for a little pig named Wilbur, who simply wants a friend. They also express the love of a girl named Fern, who saved Wilbur\'s life when he was born the runt of his litter. E. B. White\'s Newbery Honor Book is a tender novel of friendship, love, life, and death that will continue to be enjoyed by generations to come. This edition contains newly color illustrations by Garth Williams, the acclaimed illustrator of E. B. White\'s Stuart Little and Laura Ingalls Wilder\'s Little House series, among many other books.', 6, 'children_book3.jpg', 'Childrens', 'Classics', 'Fiction', 'Fantasy', 'Charlotte\'s Web', 'Published October 1st 2001 by HarperCollinsPublishers (first published October 15th 1952)', 'Paperback, Full Color Edition, 184 pages', 64410935, 2147483647),
(46, 'Charlie and the Chocolate Factory', 'Roald Dahl', 'The gates of Mr. Willy Wonka\'s famous chocolate factory are opening at last! But only five lucky children will be allowed inside. And the winners are: Augustus Gloop, an enormously fat boy whose hobby is eating; Veruca Salt, a spoiled-rotten brat whose parents are wrapped around her little finger; Violet Beauregarde, a dim-witted gum-chewer with the fastest jaws around; Mike Teavee, a toy pistol-toting gangster-in-training who is obsessed with television; and Charlie Bucket, Our Hero, a boy who is honest and kind, brave and true, and good and ready for the wildest time of his life!', 8, 'charlie.jpg', 'Childrens', 'Classics', 'Fiction', 'Adventure', 'Charlie and the Chocolate Factory', 'Published June 1st 1998 by Puffin Books (first published January 17th 1964)', 'Paperback, 155 pages', 141301155, 2147483647),
(47, 'Little Women', 'Louisa May Alcott', 'Generations of readers young and old, male and female, have fallen in love with the March sisters of Louisa May Alcott’s most popular and enduring novel, Little Women. Here are talented tomboy and author-to-be Jo, tragically frail Beth, beautiful Meg, and romantic, spoiled Amy, united in their devotion to each other and their struggles to survive in New England during the Civil War. It is no secret that Alcott based Little Women on her own early life. While her father, the freethinking reformer and abolitionist Bronson Alcott, hobnobbed with such eminent male authors as Emerson, Thoreau, and Hawthorne, Louisa supported herself and her sisters with \"woman’s work,” including sewing, doing laundry, and acting as a domestic servant. But she soon discovered she could make more money writing. Little Women brought her lasting fame and fortune, and far from being the \"girl’s book” her publisher requested, it explores such timeless themes as love and death, war and peace, and the clash of cultu', 13, 'children_book38.jpg', 'Young Adult', 'Classics', 'Fiction', 'Romance', 'Little Women or, Meg, Jo, Beth and Amy', 'Published April 6th 2004 by Signet Classics (first published 1869)', 'Paperback, 449 pages', 451529308, 2147483647),
(48, 'A Wrinkle in Time', 'Madeleine L\'Engle', 'It was a dark and stormy night.  Out of this wild night, a strange visitor comes to the Murry house and beckons Meg, her brother Charles Wallace, and their friend Calvin O\'Keefe on a most dangerous and extraordinary adventure—one that will threaten their lives and our universe. Winner of the 1963 Newbery Medal, A Wrinkle in Time is the first book in Madeleine L\'Engle\'s classic Time Quintet.', 7, 'children_book5.jpg', 'Young Adult', 'Classics', 'Fiction', 'Science Fiction', 'A Wrinkle in Time', 'Published May 2007 by Square Fish (first published 1962)', 'Paperback, 247 pages', 312367546, 2147483647),
(49, 'Skin of the Sea', 'Natasha Bowen', 'A way to survive. A way to serve. A way to save. Simi prayed to the gods, once. Now she serves them as Mami Wata--a mermaid--collecting the souls of those who die at sea and blessing their journeys back home.But when a living boy is thrown overboard, Simi goes against an ancient decree and does the unthinkable--she saves his life. And punishment awaits those who dare to defy the gods. To protect the other Mami Wata, Simi must journey to the Supreme Creator to make amends. But all is not as it seems. There\'s the boy she rescued, who knows more than he should. And something is shadowing Simi, something that would rather see her fail . . . Danger lurks at every turn, and as Simi draws closer, she must brave vengeful gods, treacherous lands, and legendary creatures. Because if she fails, she risks not only the fate of all Mami Wata, but also the world as she knows it.', 12, 'children_book32.jfif', 'Young Adult', 'Fantasy', 'Fiction', 'Mythology', 'Skin of the Sea', 'Published November 9th 2021 by Random House Books for Young Readers', 'Kindle Edition, 336 pages', 2147483647, 2147483647);
INSERT INTO `books` (`book_id`, `book_name`, `book_author`, `book_description`, `book_price`, `book_photo`, `book_genre`, `book_genre2`, `book_genre3`, `book_genre4`, `book_original_title`, `book_publish`, `book_pages`, `book_ISBN`, `book_ISBN13`) VALUES
(50, 'Matilda', 'Roald Dahl', 'Matilda is a little girl who is far too good to be true. At age five-and-a-half she\'s knocking off double-digit multiplication problems and blitz-reading Dickens. Even more remarkably, her classmates love her even though she\'s a super-nerd and the teacher\'s pet. But everything is not perfect in Matilda\'s world. For starters she has two of the most idiotic, self-centered parents who ever lived. Then there\'s the large, busty nightmare of a school principal, Miss (\"The\") Trunchbull, a former hammer-throwing champion who flings children at will and is approximately as sympathetic as a bulldozer. Fortunately for Matilda, she has the inner resources to deal with such annoyances: astonishing intelligence, saintly patience, and an innate predilection for revenge.', 9, 'children_book10.jfif', 'Childrens', 'Humor', 'Fiction', 'Classics', 'Matilda', 'Published June 1st 1998 by Puffin Books (first published October 1st 1988)', 'Paperback, 240 pages', 141301066, 2147483647),
(55, 'ejpic', 'Christine Smallwood', 'icfdjvsclkef', 6, 'author2.jpg', 'fkdhujv', 'fdf', 'fdvfd', 'djdkf', 'The Life of the Mind', 'Published April 10th 2014 by Viking (first published April 14th 1939)', 'Hardcover, 75th Anniversary Edition, 479 pages', 2147483647, 2147483647),
(56, 'The Love Songs of W.E.B. Du Bois', 'Roald Dahl', 'icfdjvsclkef', 6, 'book1.jpg', 'fkdhujv', 'fdf', 'fdvfd', 'djdkf', 'Pride and Prejudice', 'Published March 2003 by Bantam Classic (first published March 1st 1813)', 'Paperback, 311 pages', 1250807158, 2147483647),
(57, 'It Ends With Us', 'Colleen Hoover', 'Sometimes it is the one who loves you who hurts you the most.  Lily hasn’t always had it easy, but that’s never stopped her from working hard for the life she wants. She’s come a long way from the small town in Maine where she grew up — she graduated from college, moved to Boston, and started her own business. So when she feels a spark with a gorgeous neurosurgeon named Ryle Kincaid, everything in Lily’s life suddenly seems almost too good to be true.  Ryle is assertive, stubborn, maybe even a little arrogant. He’s also sensitive, brilliant, and has a total soft spot for Lily. And the way he looks in scrubs certainly doesn’t hurt. Lily can’t get him out of her head. But Ryle’s complete aversion to relationships is disturbing. Even as Lily finds herself becoming the exception to his “no dating” rule, she can’t help but wonder what made him that way in the first place.', 11, 'popular_book19.jpg', 'Romance', 'Fiction', '', '', 'It Ends with Us', 'August 2, 2016 by Atria Books', '386 pages, Kindle Edition', 1501106910, 2147483647),
(58, 'Tom Lake', 'Ann Patchett', 'In the spring of 2020, Lara’s three daughters return to the family\'s orchard in Northern Michigan. While picking cherries, they beg their mother to tell them the story of Peter Duke, a famous actor with whom she shared both a stage and a romance years before at a theater company called Tom Lake. As Lara recalls the past, her daughters examine their own lives and relationship with their mother, and are forced to reconsider the world and everything they thought they knew.  Tom Lake is a meditation on youthful love, married love, and the lives parents have led before their children were born. Both hopeful and elegiac, it explores what it means to be happy even when the world is falling apart. As in all of her novels, Ann Patchett combines compelling narrative artistry with piercing insights into family dynamics. The result is a rich and luminous story, told with profound intelligence and emotional subtlety, that demonstrates once again why she is one of the most revered and acclaimed lite', 14, 'popular_book38.jpg', '', '', '', '', 'Tom Lake', 'August 1, 2023 by Harper', '320 pages, Hardcover', 6332752, 2147483647),
(59, 'Lessons In Chemistry', 'Bonnie Garmus', 'Chemist Elizabeth Zott is not your average woman. In fact, Elizabeth Zott would be the first to point out that there is no such thing as an average woman. But it’s the early 1960s and her all-male team at Hastings Research Institute takes a very unscientific view of equality. Except for one: Calvin Evans; the lonely, brilliant, Nobel–prize nominated grudge-holder who falls in love with—of all things—her mind. True chemistry results.  But like science, life is unpredictable. Which is why a few years later Elizabeth Zott finds herself not only a single mother, but the reluctant star of America’s most beloved cooking show Supper at Six. Elizabeth’s unusual approach to cooking (“combine one tablespoon acetic acid with a pinch of sodium chloride”) proves revolutionary. But as her following grows, not everyone is happy. Because as it turns out, Elizabeth Zott isn’t just teaching women to cook. She’s daring them to change the status quo.', 13, 'popular_book39.jpg', '', '', '', '', 'Lessons in Chemistry', 'March 31, 2022', '400 pages, Hardcover', 385697376, 2147483647),
(60, 'Atomic Habits', 'James Clear', 'No matter your goals, Atomic Habits offers a proven framework for improving—every day. James Clear, one of the world\'s leading experts on habit formation, reveals practical strategies that will teach you exactly how to form good habits, break bad ones, and master the tiny behaviors that lead to remarkable results.  If you\'re having trouble changing your habits, the problem isn\'t you. The problem is your system. Bad habits repeat themselves again and again not because you don\'t want to change, but because you have the wrong system for change. You do not rise to the level of your goals. You fall to the level of your systems. Here, you\'ll get a proven system that can take you to new heights.', 13, 'popular_book20.jpg', '', '', '', '', 'Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones', 'October 16, 2018 by Avery', '319 pages, Kindle Edition', 735211302, 2147483647),
(61, 'Happy Place', 'Emily Henry', 'Harriet and Wyn have been the perfect couple since they met in college—they go together like salt and pepper, honey and tea, lobster and rolls. Except, now—for reasons they’re still not discussing—they don’t.  They broke up six months ago. And still haven’t told their best friends.  Which is how they find themselves sharing the largest bedroom at the Maine cottage that has been their friend group’s yearly getaway for the last decade. Their annual respite from the world, where for one vibrant, blue week they leave behind their daily lives; have copious amounts of cheese, wine, and seafood; and soak up the salty coastal air with the people who understand them most.', 12, 'beach1.jpg', '', '', '', '', 'Happy Place', 'April 25, 2023 by Berkley', '400 pages, Hardcover', 593441273, 2147483647),
(62, 'Summer Stage', 'Meg Mitchell Moore', 'Amy Trevino, a former aspiring playwright, has stayed close to her Rhode Island hometown while her famous brother, Timothy Fleming, pursued and achieved his Hollywood dreams. Now a high school English teacher and occasional drama director, Amy takes on the production manager role for her brother’s play in an effort to mend rifting family relationships.  Sam, Amy’s daughter, was a Disney child star who continued her pursuit for fame in a Manhattan TikTok house. Now she’s returned home unexpectedly. Her sudden arrival is shrouded in secrets, and Sam refuses to open up to her mother, deciding instead to join her uncle on Block Island for the summer.   Timothy, a successful and well-loved actor, is directing a summer production at a storied Block Island theater—and his famous ex-wife has the lead role. As they work together to ensure the production is a success, Amy, Sam, and Timothy are forced to grapple with their desires for recognition and fortune, stand up for what they believe art an', 14, 'beach2.jpg', '', '', '', '', 'Summer Stage', 'May 23, 2023 by William Morrow', '336 pages, Hardcover', 63026163, 2147483647),
(63, 'The Celebrants', 'Steven Rowley', 'A Big Chill for our times, celebrating decades-long friendships and promises—especially to ourselves—by the bestselling and beloved author of The Guncle.  It’s been a minute—or five years—since Jordan Vargas last saw his college friends, and twenty-eight years since their graduation when their adult lives officially began. Now Jordan, Jordy, Naomi, Craig, and Marielle find themselves at the brink of a new decade, with all the responsibilities of adulthood, yet no closer to having their lives figured out. Though not for a lack of trying. Over the years they’ve reunited in Big Sur to honor a decades-old pact to throw each other living “funerals,” celebrations to remind themselves that life is worth living—that their lives mean something, to one another if not to themselves.', 14, 'beach3.jpg', '', '', '', '', 'The Celebrants', 'May 30, 2023 by G.P. Putnam\'s Sons', '320 pages, Hardcover', 593540425, 2147483647),
(64, 'Meet Me At The Lake', 'Carley Fortune', 'Fern Brookbanks has wasted far too much of her adult life thinking about Will Baxter. She spent just twenty-four hours in her early twenties with the aggravatingly attractive, idealistic artist, a chance encounter that spiraled into a daylong adventure in Toronto. The timing was wrong, but their connection was undeniable: they shared every secret, every dream, and made a pact to meet one year later. Fern showed up. Will didn\'t.  At thirty-two, Fern\'s life doesn\'t look at all how she once imagined it would. Instead of living in the city, Fern\'s back home, running her mother\'s Muskoka lakeside resort--something she vowed never to do. The place is in disarray, her ex-boyfriend\'s the manager, and Fern doesn\'t know where to begin.', 11, 'beach4.jpg', '', '', '', '', 'Meet Me At The Lake', 'May 2, 2023 by Viking', '336 pages, Paperback', 735243786, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `book_genre`
--

CREATE TABLE `book_genre` (
  `book_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_genre`
--

INSERT INTO `book_genre` (`book_id`, `genre_id`) VALUES
(23, 2),
(1, 1),
(1, 5),
(1, 8),
(2, 1),
(2, 5),
(2, 13),
(2, 14),
(3, 1),
(3, 5),
(3, 9),
(3, 13),
(4, 1),
(4, 5),
(4, 9),
(4, 13),
(5, 3),
(5, 7),
(5, 15),
(6, 1),
(6, 5),
(6, 13),
(7, 1),
(7, 16),
(7, 10),
(7, 4),
(8, 3),
(8, 12),
(8, 6),
(8, 10),
(9, 1),
(9, 5),
(9, 13),
(9, 17),
(10, 1),
(10, 13),
(10, 4),
(NULL, NULL),
(10, 18),
(11, 1),
(11, 5),
(11, 13),
(11, 14),
(12, 1),
(12, 13),
(12, 10),
(12, 4),
(13, 1),
(13, 13),
(13, 18),
(13, 19),
(14, 1),
(14, 13),
(14, 14),
(14, 20),
(NULL, NULL),
(15, 3),
(15, 12),
(15, 21),
(15, 19),
(17, 3),
(17, 7),
(17, 20),
(17, 22),
(18, 3),
(NULL, NULL),
(18, 25),
(18, 24),
(18, 23),
(19, 1),
(19, 14),
(19, 9),
(20, 13),
(21, 1),
(21, 8),
(21, 5),
(21, 10),
(22, 1),
(22, 4),
(22, 10),
(22, 21),
(23, 5),
(23, 16),
(23, 10),
(24, 1),
(24, 8),
(24, 10),
(24, 12),
(25, 1),
(25, 8),
(25, 10),
(25, 12),
(26, 1),
(26, 2),
(26, 24),
(26, 10),
(28, 1),
(28, 12),
(28, 16),
(28, 10),
(29, 1),
(29, 5),
(29, 10),
(29, 8),
(31, 1),
(31, 18),
(31, 27),
(31, 10),
(32, 1),
(32, 12),
(32, 20),
(33, 1),
(33, 12),
(33, 10),
(34, 1),
(34, 8),
(34, 19),
(34, 13),
(35, 1),
(35, 13),
(35, 10),
(35, 12),
(36, 1),
(36, 13),
(36, 4),
(36, 12),
(37, 3),
(37, 10),
(37, 27),
(37, 20),
(38, 3),
(38, 15),
(38, 7),
(39, 3),
(39, 11),
(39, 10),
(39, 29),
(40, 3),
(40, 19),
(40, 12),
(40, 6),
(41, 3),
(41, 13),
(41, 20),
(42, 3),
(42, 6),
(42, 10),
(42, 27),
(43, 13),
(43, 1),
(43, 5),
(43, 9),
(44, 14),
(44, 4),
(44, 1),
(45, 1),
(45, 5),
(45, 13),
(45, 9),
(46, 1),
(46, 9),
(46, 13),
(46, 31),
(47, 13),
(47, 14),
(47, 1),
(47, 4),
(48, 8),
(48, 1),
(48, 13),
(48, 14),
(49, 5),
(49, 1),
(49, 14),
(49, 32),
(50, 1),
(50, 9),
(50, 13),
(20, 1),
(23, 1),
(6, 14),
(57, 33),
(57, 1),
(57, 4),
(57, 14),
(58, 33),
(58, 1),
(58, 28),
(59, 33),
(59, 10),
(59, 4),
(60, 33),
(60, 3),
(61, 34),
(61, 4),
(62, 34),
(62, 4),
(63, 34),
(63, 1),
(64, 34),
(64, 4),
(20, 19);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `created_at`) VALUES
(1, 7, '2023-07-20 15:36:44'),
(2, 8, '2023-07-25 08:50:22'),
(3, 12, '2023-08-28 09:29:18'),
(4, 13, '2024-03-09 05:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `item_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`item_id`, `cart_id`, `book_id`, `quantity`) VALUES
(7, 2, 21, 1),
(35, 2, 45, 3),
(36, 2, 46, 1),
(37, 2, 46, 3),
(38, 2, 38, 3),
(39, 4, 42, 1),
(40, 4, 48, 1);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(255) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Fiction'),
(2, 'Thriller'),
(3, 'Non-Fiction'),
(4, 'Romance'),
(5, 'Fantasy'),
(6, 'Biography'),
(7, 'Autobiography'),
(8, 'Science Fiction'),
(9, 'Children'),
(10, 'Adult'),
(11, 'Science'),
(12, 'History'),
(13, 'Classic'),
(14, 'Young Adult'),
(15, 'Memoir'),
(16, 'LGBT'),
(17, 'Philosophy'),
(18, 'Novel'),
(19, 'Politics'),
(20, 'Literature'),
(21, 'Race'),
(22, 'Psychology'),
(23, 'Crime'),
(24, 'Mystery'),
(25, 'Bussines'),
(26, 'Family'),
(27, 'Mental Health'),
(28, 'Historical Fiction'),
(29, 'Environment'),
(30, 'Poetry'),
(31, 'Adventure'),
(32, 'Mythology'),
(33, 'Popular'),
(34, 'Summer');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `name_on_card` varchar(100) NOT NULL,
  `credit_card_number` varchar(16) NOT NULL,
  `card_expiration` varchar(5) NOT NULL,
  `card_cvv` char(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `total_amount`, `address`, `country`, `zip_code`, `payment_method`, `name_on_card`, `credit_card_number`, `card_expiration`, `card_cvv`, `created_at`, `updated_at`) VALUES
(1, 8, '2023-08-04 13:21:45', '0.00', 'Rottachstrase', 'Switzerland', '12345', 'on', 'User userLastname', '1004569821354795', '12/02', '123', '2023-08-04 11:21:45', '2023-08-04 11:21:45'),
(2, 8, '2023-08-08 15:21:59', '0.00', 'Rottachstrase', 'Spain', '4587', 'on', 'User userLastname', '1234867456874653', '12/25', '123', '2023-08-08 13:21:59', '2023-08-08 13:21:59'),
(3, 12, '2023-08-28 11:41:27', '0.00', 'cjkdc', 'Germany', '12345', 'on', 'Ejona Humolli', '1568464546235153', '12/45', '455', '2023-08-28 09:41:27', '2023-08-28 09:41:27'),
(4, 8, '2023-09-03 21:05:36', '0.00', 'chdjbc', 'Switzerland', '424', 'on', 'User userLastname', '7896316436565313', '12/45', '456', '2023-09-03 19:05:36', '2023-09-03 19:05:36'),
(5, 8, '2023-09-03 21:41:36', '0.00', '', '', '', 'on', '', '', '', '', '2023-09-03 19:41:36', '2023-09-03 19:41:36'),
(6, 8, '2023-09-03 21:43:46', '0.00', '', '', '', 'on', '', '', '', '', '2023-09-03 19:43:46', '2023-09-03 19:43:46'),
(7, 8, '2023-09-03 23:47:37', '0.00', '1245 vhfdkjc', 'Spain', '4545', 'on', 'User userLastname', '1456135411211654', '12/25', '123', '2023-09-03 21:47:37', '2023-09-03 21:47:37'),
(8, 13, '2024-03-09 06:36:32', '0.00', '32 dhsfdh', 'United States', '10000', 'on', 'Admin Smith', '1056185687894651', '12/24', '456', '2024-03-09 05:36:32', '2024-03-09 05:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(255) NOT NULL,
  `review_text` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review_text`, `date`, `book_id`) VALUES
(10, 'This is one of the best sci-fi dances with fantasy which carries additional philosophic vibes novel of the year!', '2023-07-14', 1),
(11, 'A quick read that I enjoyed.', '2023-07-14', 1),
(12, 'This was cute and the concept was great but unfortunately it really lacked some depth for me!', '2023-07-14', 1),
(13, 'This is a book I cast aside, unfinished, as a child, and learned to love through the enraptured passion of my own child, nestled in my lap.', '2023-07-14', 2),
(14, 'The Hobbit is still one of the most boring books I have ever read.', '2023-07-14', 2),
(15, 'It was an enjoyable tale of adventure, friendship, and courage which was set in a beautiful, massive, and lore-filled world named MIDDLE-EARTH.', '2023-07-14', 2),
(16, 'This book was okay. I didn\'t hate it or love it either way', '2023-07-14', 3),
(17, 'There are no words to do this book justice.', '2023-07-14', 3),
(18, 'I will never ever rate this lower than 5 stars. BEAUTIFUL.', '2023-07-14', 3),
(19, 'Beautiful reading!', '2023-07-14', 4),
(20, 'This is a book I will continuously re-read throughout my life', '2023-07-14', 4),
(21, 'Great observations, but personally I think it\'s overrated.', '2023-07-14', 4),
(22, 'What I love about this book is that I feel Stanley Tucci is my new friend.', '2023-07-14', 5),
(23, 'Charming best describes Taste: My Life through Food by Stanley Tucci', '2023-07-14', 5),
(24, 'Well, it didn\'t turn out as I expected.', '2023-07-14', 5),
(25, 'absolutely as good. this book had such a profound impact on me and still does.', '2023-07-14', 7),
(26, 'This is genuinely one of the most remarkable novels I have ever read.', '2023-07-14', 7),
(27, 'This book has crossed the boundaries of books, and has taken a life of its own, creating a movement all around the globe.', '2023-07-14', 9),
(28, 'This is either beautifully written and fable-like illustration of simple and universal truths or a lot of crap.', '2023-07-14', 9),
(29, '5.0 stars. I LOVE IT when I go into a book with low expectations and it ends up knocking me on my ass. Admittedly, this is tougher to do with \"classics\" but it certainly happened in this case.', '2023-07-14', 11),
(30, 'Turns out this is still a damn good book. Salinger kid is a great writer. He really is.', '2023-07-14', 11),
(31, 'If I could give this book a zero, I would.', '2023-07-14', 11),
(32, 'This is a book that I was actually dreading reading for quite some time.', '2023-07-14', 10),
(33, 'goodness me, russians are dramatic.', '2023-07-14', 10),
(34, 'This book was possibly the best thing I\'ve ever read', '2023-07-14', 10),
(35, 'A must read book for the concerned. Carson brings forth, without ever putting on alarmist garbs, all the horrors of the warfare that we have undertaken against ourselves.\r\n\r\n    ', '2023-07-14', 37),
(36, 'One person alone can achieve anything if there is a dedicated public behind it.It´s inspiring to see what a human with a vision has achieved on his own, because the book has changed the behavior of one of the most influential, one could also use othe', '2023-07-14', 37),
(37, 'This is a classic. It has not lost its validity. It has an important global message still today, 54 years after publication. Everyone should read this at least once.', '2023-07-14', 37),
(38, 'Michelle Obama sharing her experience and dropping nuggets of wisdom into my ear holes for 19 hours straight was just a delightful experience :)\r\n\r\n    ', '2023-07-14', 38),
(39, 'I didn\'t know much about Michelle Obama nor her husband. This book absolutely humanized them and show me how much they care about others. The contrast with the actual political situation is blatant.', '2023-07-14', 38),
(40, 'This book is poorly written. Only fans of M.O. could possibly like this book as it doesn\'t stick to facts. They are the only ones allowed to give reviews of it.', '2023-07-14', 38),
(41, 'I don\'t recall ever reading a book that SO made me want to curl up in a ball on the floor and just SOB.\r\n\r\n    ', '2023-07-14', 39),
(42, 'In this well-researched book, science writer Elizabeth Kolbert casts a strong light on the damage humans are doing to planet Earth. In one example Kolbert describes declining populations of the golden frog, which is rapidly disappearing from all its ', '2023-07-14', 39),
(43, 'This is officially the most boring book I\'ve read this year.There were some interesting moments but they were too few to compensate.You\'ll learn more about random rainforest frogs than you ever wanted...', '2023-07-14', 39),
(44, 'I\'m guessing the two reviews who gave 1 star did not bother to read the book and are of opposing political leanings.', '2023-07-14', 40),
(45, 'Very well done. A lovely friendship. Enjoyed their stories and their way with words. The two have so much in common. Difficult relationships with their fathers. Strong mothers. Wonderful wives and children. Both men would have made excellent preacher', '2023-07-14', 40),
(46, 'As a big fan of both of these accomplished gentlemen, I read this book in a day and a half (counting Christmas Day!) It is insightful, profound, and charming with copies of some of Obama\'s annotated speeches, a selections of Springsteen\'s original ha', '2023-07-14', 40),
(47, 'I just finished reading this book and I\'m seventeen. I loved it. I lost my dad a few years ago though so I connected to a lot of the material she wrote about.', '2023-07-14', 17),
(48, 'Right off the top I will say this for the book: raw, powerful, honest, amazing. If you have any interest in the grief process, READ THIS BOOK.', '2023-07-14', 17),
(49, 'I\'m not sure what I was expecting when I started reading this, I had just known it was Didion\'s most well known work, but I was kind of caught off guard to find out it was about her husband\'s death and the simultaneous acute illness of her daughter. ', '2023-07-14', 17),
(50, 'I watched the movie before reading the book and it left me with a lot of questions. I just wanted to know more of the family and how things went down.', '2023-07-14', 18),
(51, 'The family drama and murder of Maurizio Gucci were the most interesting parts of this book. Unfortunately the business history drags the book down. Forden also seems to get a bit off track at points.', '2023-07-14', 18),
(52, 'If you’re reading this because of the murder forget it. The book opens with the murder of Maurizio Gucci but then takes about 70% of the book to get back there and is relatively lacking in details, considering the blurb makes it sound like this is th', '2023-07-14', 18),
(53, 'Read it. Read it because a lot of people don\'t want you to, and the fact that they don\'t want you to should tell you something powerful is at work here. And it is. This collection of articles is simply amazing, and no matter what someone might want t', '2023-07-14', 15),
(54, 'I\'ve read this twice and enjoyed it both times.This has multiple contributors and is able to more than adequately defend its views and claims. That said its not radical and is inaccurate in regards to capitalism ever being good or a benefit.', '2023-07-14', 15),
(55, 'Worth every moment of your time; ought to be required reading. A couple of pieces relating to health care are particularly relevant right now.', '2023-07-14', 15),
(56, 'Haunting and honest - a scalpel that cuts so deep and quick you don\'t even feel it. The first time I read Ariel I was amazed by the depth and honesty of the poems; there is no \'slight of hand\' here - only the raw and honest feelings of an artist deal', '2023-07-14', 41),
(57, 'Either disturbed by some haunting, otherworldly presence or simply because of the purring birdsong I awake on the early hours of this winter morning and I grab Sylvia Plath’s collection of poems Ariel, which is calling to me from my bedside table. ', '2023-07-14', 41),
(58, 'These poems are jagged, visceral, and very, very raw. They’re angry and bruised, “extravagant, like torture.” And they are frequently charged with a dark, mirthless laughter. After all, “there is no fate that cannot be surmounted by scorn.” Or so Cam', '2023-07-14', 41),
(59, 'This may be one of the most honest and inspiring memoirs I\'ve ever read.', '2023-07-14', 42),
(60, 'WOW.... Will was so open and vulnerable during this book....I was so engrossed and I didn\'t want to stop listening....This audiobook was definitely worth the 16 hours it took to complete. Bravo Will Bravo!!!', '2023-07-14', 42),
(61, 'Biggest ego in Hollywood turns in a surprisingly inept memoir that is filled with his verbal vomit (he admits that from childhood he can\'t shut up). ', '2023-07-14', 42),
(62, 'I actually gave this book 5 stars, but the very hungry caterpillar ate one of them.Also, did anyone else get a defective book? My version has a bunch of holes in it.', '2023-07-14', 43),
(63, 'Eric Carle\'s books have a special place in my heart. The way he creates his illustrations makes them so colorful and appealing to all.', '2023-07-14', 43),
(64, 'There are some books I’m just not smart enough to read but, darnit, I challenged myself and I finally made it through The Very Hungry Caterpillar (after several false starts)! I’m not gonna flatter myself that I unnerstood the depth of the ideas, the', '2023-07-14', 43),
(65, 'I thought going in that this would be a sweet, summery romance with a little bit of political discourse sprinkled in. It was, but it was also relevant, engaging and realistic. The romance took a back seat to the friendship and political aspects, whic', '2023-07-14', 44),
(66, 'I am sad to report that YES NO MAYBE SO, a collaborative YA romance written by Becky Albertalli and Aisha Saeed, is the latest to join my list of Big Disappointments. I haven’t read any books by either authors, so this book was clearly a terrible pla', '2023-07-14', 44),
(67, '4.5 stars. Read this entire book during my red-eye to Philly bc I could NOT put it down. ', '2023-07-14', 44),
(68, 'I don\'t give a fig if it is a kid\'s book, Charlotte\'s Web is one of the most well-crafted stories ever written. This classic children\'s tale deserves 5 stars for story craft and language usage alone!', '2023-07-14', 45),
(69, 'If you\'ve never read Charlotte\'s Web by E.B. White, you are utterly missing out on a classic Newbery Honor award winner.', '2023-07-14', 45),
(70, 'I read this book three times and my opinion of the book has changed each time.', '2023-07-14', 45),
(71, 'Tonight I just finished reading Charlie and the Chocolate factory with my son. This is the first chapter book I\'ve read all the way through with him. And it was a ton of fun.', '2023-07-14', 46),
(72, 'My 2020 adventure revisiting some of my classic favorites from childhood with my kids continues! I just finished reading them Charlie and the Chocolate Factory and they loved it!', '2023-07-14', 46),
(73, 'A book that never gets old. I remember carrying this around with me as a child until it fell apart.', '2023-07-14', 46),
(74, 'What a fun weird little story!', '2023-07-14', 48),
(75, '5+ Stars! “A Wrinkle in Time”. How can I never have read this before? Have I been living under a rock my entire life? This was utterly DELIGHTFUL, Amazing, Funny, Scary, Brilliant & Crazy Bold. In short, I loved it.', '2023-07-14', 48),
(76, 'Ye gods, what a wonderful book! I don\'t read a lot of realistic middle grade fiction. I tend to gravitate toward fantasy. But this is probably the best such book I\'ve read since Sherman Alexie\'s The Absolutely True Diary of a Part-Time Indian.', '2023-07-14', 19),
(77, 'What a WONDERful first book of the year! I read this book almost too quickly, I wanted it to last longer. This might be technically a children\'s book, but it really was such a special and meaningful read and I highly recommend that everyone read this', '2023-07-14', 19),
(78, 'Wow! I am so glad that I finally got around to listening to this story. \'Wonder\' had been sitting on my TBR list for a really long time, but I had been waiting for a time to listen to it with my daughters. ', '2023-07-14', 19),
(79, 'Someone I know claimed this no longer has value, that she would never recommend it because it\'s saccharine, has a religious agenda, and sends a bad message to girls that they should all be little domestic homebodies. I say she\'s wrong on all counts. ', '2023-07-14', 47),
(80, 'This book is so cozy and delightful and happy. A lot of the time, when series start out in the childhood of characters and then follow their growing up, the book gets worse. But I always liked reading about this ragtag group of gals!!', '2023-07-14', 47),
(81, 'This book means SISTERHOOD... FAMILY… HAPPINESS…TOGETHERNESS… THANKFULNESS… GENUINENESS…SOLIDARITY…BELIEFS… RESPECT…UNCONDITIONAL LOVE…HONESTY…KINDNESS…', '2023-07-14', 47),
(82, 'It’s just a typical YA fantasy plot. I love the mythology woven into the story, but the rest is just too typical. The characters don’t really have much personality.', '2023-07-14', 49),
(83, 'During a time when representation is so important, this book really spoke to me. Mermaids are beautiful creatures and my whole life, I never thought they looked like me because I never saw a mermaid that slightly resembled me. ', '2023-07-14', 49),
(84, 'There was so much I loved about this book: - West African culture and mythology - the concept of Black mermaids shepherding the souls of those thrown overboard from slave ships is something I will always love - I really liked Simidele as a character.', '2023-07-14', 49),
(85, 'Absolutely delightful. I really wish I\'d read this when I was a kid - I would have related to and loved Matilda so much! I like that this is a book for children that doesn\'t cater to them - it treats them like intelligent beings. The plot was exciting, the characters fun, and the themes interesting.', '2023-07-14', 50),
(86, 'Matilda is a lovely little book. It’s a book about standing up against bullies (no matter who the bullies are.) It’s also a book about learning to live with yourself, about being who you are despite the pressures those who are supposed to love you may exert on your personality. ', '2023-07-14', 50),
(87, 'I tore through the ARC in less than 24 hours, and now I\'m just sitting here with tears in my eyes, completely and utterly satisfied.', '2023-07-14', 21),
(88, 'The language is beautiful but supremely flat. It reminds me of Never Let Me Go in its dystopian setting and grueling humorlessness.', '2023-07-14', 21),
(89, 'This book made me sad. Sad not because of the story but because I read it expecting the brilliance that the author of The Remains of the Day and Never Let Me Go can deliver in spades — and instead I got... well... this.', '2023-07-14', 21),
(90, 'This is one of the most beautiful books of 2021.', '2023-07-14', 22),
(91, 'As soon as I saw this book cover I just new I had to read this. So beautiful.', '2023-07-14', 22),
(92, 'Don’t let this rating hinder your interest in the book, as I’m definitely in the minority!', '2023-07-14', 22),
(93, 'An outstanding short story collection and one of the finest books I’ve read on how generational trauma can shape and influence a diasporic community.', '2023-07-14', 23),
(94, 'Loved this short story collection’s intimate examination of Cambodian Americans living in California.', '2023-07-14', 23),
(95, 'I did not love this as much as I thought I would. Everybody adores these stories, so do take my opinion with a grain of salt.', '2023-07-14', 23),
(96, 'Have mercy! That\'s how I felt reading this monstrosity of a book. So many descriptions... it would take seven lifetimes to read them all. Sigh.', '2023-07-14', 24),
(97, 'This book is everything a reader could ask for.', '2023-07-14', 24),
(98, 'An amazing and epic novel that spans a century and the entire planet.', '2023-07-16', 25),
(99, 'Now, more than ever, I love reading about women who chart their own course. As a mom of two little girls and a young boy, I believe it is important to highlight fictional and nonfictional stories of fierce, independent women who don’t conform to what society says we need to be.', '2023-07-16', 25),
(100, 'For me, Great Circle is the worst kind of modern fiction, a 600-page brick of a novel brimming with unearned self-importance and tediously overwritten prose.', '2023-07-16', 25),
(101, 'A quick and easy read if you want a thriller fix.', '2023-07-16', 26),
(102, 'I wanted SO BADLY to love it, but ultimately I kinda feel like it was just okay?', '2023-07-16', 26),
(103, 'This is a magnificent novel. Truly. At its heart, it is a love story set against the brutality of slavery. The bond Isaiah and Samuel share is so beautifully written, so romantic, so powerful.', '2023-07-16', 28),
(104, 'All praise I have heard of this novel is truly deserved in my opinion.', '2023-07-16', 28),
(105, 'I just finished re-reading Detransition Baby and I will probably turn around and give it a third read before its startling, joyful, frontal attack on transphobic thinking (wrapped in a sweet comedic romance) settles down enough in my brain for me to be able to give it all the praise it deserves.', '2023-07-16', 29),
(106, 'What it doesn\'t have:A plot. Or even a real point.', '2023-07-16', 29),
(107, 'I\'m kinda obsessed with this book and the absolute audacity it has to distill what\'s terrible about 21st century living into a slim, 229-paged novel.', '2023-07-16', 31),
(108, '3.5 rounded up. Nearly the entirety of the narrative is an inner monologue.', '2023-07-16', 31),
(109, 'Whatever must be said to get you to heft this daunting debut novel by Honorée Fanonne Jeffers, I’ll say, because “The Love Songs of W.E.B. Du Bois” is the kind of book that comes around only once a decade.', '2023-07-16', 32),
(110, '‘The Love Songs of W.E.B Du Bois’, is so beautifully written and so moving that it brought tears to my eyes.', '2023-07-16', 32),
(111, 'I understand what the novel attempted to create and execute, but it would have really benefitted from a skilled editor.', '2023-07-16', 32),
(112, 'It is a rare breed of writer who can tell any kind of story and do so with exquisite deftness. Jocelyn Nicole Johnson is one such writer.', '2023-07-16', 33),
(113, 'Beautifully written, nuanced, and insightful, they each make you think. My introverted self found myself wishing for a book club so I could discuss these stories with others.', '2023-07-16', 33),
(114, 'Oh my God. I got the chills so many times toward the end of this book. It completely blew my mind. It managed to surpass my high expectations AND be nothing at all like I expected.', '2023-07-16', 34),
(115, 'This was the book that started my love affair with the dystopian genre. And maybe indirectly influenced my decision to do a politics degree.', '2023-07-16', 34),
(116, '1984 is not a particularly good novel, but it is a very good essay.', '2023-07-16', 34),
(117, 'DAISY BUCHANAN IS A GIFT TO READERS EVERYWHERE AND THE HERO OF THE GREAT GATSBY, FOR SURE, NO QUESTIONS', '2023-07-16', 13),
(118, 'Fitzgerald can set a scene so perfectly, flawlessly. He paints a world of magic and introduces one of the greatest characters of all time, Jay Gatsby.', '2023-07-16', 13),
(119, 'There was one thing I really liked about The Great Gatsby. It was short.', '2023-07-16', 13),
(120, 'Certainly one of the best novels ever written.', '2023-07-16', 12),
(121, 'Jane Eyre is the quintessential Victorian novel. It literally has everything that was typical of the period, but, unlike other novels, it has all the elements in one story.', '2023-07-16', 12),
(122, 'Whew! I finished this one this morning, and I\'m glad I finally read it. I can\'t say, however, that I enjoyed it, would recommend it, or will ever read it again.', '2023-07-16', 12),
(123, 'If you are an American you need to read The Grapes of Wrath.', '2023-07-16', 35),
(124, 'This book was incredibly scary; especially because it was so realistic.', '2023-07-16', 35),
(125, 'If you read enough reviews, you\'ll notice that most of the people who gave this book 1 or 2 stars had to read the book for a high school class. Most of the 4 and 5 star ratings came from those who read it as adults. I recommend listening to those who read it as adults.', '2023-07-16', 35),
(126, 'Some of my happiest, and most looked-forward-to days of the year are the ones that I reserve for the re-reading of Pride and Prejudice.', '2023-07-16', 36),
(127, 'I am physically unqualified, because I could write infinite words about how much I love this book, and I type in a weird way that makes my wrists hurt so infinity is simply not going to happen.', '2023-07-16', 36),
(128, '\"Pride and Prejudice\" by Jane Austen started off annoying me and ended up enchanting me.', '2023-07-16', 36),
(129, 'To Kill a Mockingbird one of the best-loved stories of all time, is a novel by Harper Lee published in 1960.', '2023-07-16', 14),
(130, 'Why is it when I pick up To Kill A Mockingbird , I am instantly visited by a sensory memory: I’m walking home, leaves litter the ground, crunching under my feet.', '2023-07-16', 14),
(131, 'A short, important, and powerful classic that deserved all its fame.\r\n\r\n    ', '2023-07-16', 14),
(132, 'A perfect book. People will still be reading this in a thousand years time, when communism is just a footnote.', '2023-07-16', 20),
(133, 'I did NOT expect to love this like I did. I thought it would be one that I would be happy I read but didn\'t enjoy. Nope. I loved this book.', '2023-07-16', 20),
(134, 'George Orwell leaves absolutely nothing to the imagination. This is a blatant political statement. There’s no reading between the lines in order to ascertain the meaning, it’s all here on the page.', '2023-07-16', 20),
(138, 'Ajani', '2023-08-08', 1),
(155, 'I loved this book', '2023-08-08', 2),
(156, 'chkdjvnkjkd', '2023-08-15', 58),
(157, 'One of the best books i\'ve ever read', '2023-09-03', 60),
(158, 'vjkdhkvc s', '2023-09-03', 38),
(159, 'awesome\r\n', '2024-03-08', 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `username`, `password`, `user_type`) VALUES
(1, 'Ejona', 'Humolli ', 'humolliejona@gmail.com', 'ejonaH', '$2y$10$vflgWa9lxNjYaiAgYENyTe3WRVtalGx3Po63x4AdBfd8mSuFtEnEm', 'user'),
(2, 'Lireza', 'Humolli ', 'lhumolli@gmail.com', 'LHumolli', '$2y$10$Hze1fl3H5K1ErMgWfQ5KzezOAriLHWHWCBBx6/bDsdn/HU.q6/MLe', 'user'),
(4, 'Anae', 'Berisha', 'anaberisha@gmail.com', 'AnaB', '$2y$10$gt7dPEN8KG96pOh.1ATaweKgm3vF1bDoieOXOOLUsUzWWxO5Q6vhy', 'user'),
(6, 'Era', 'Berisha', 'eraberisha@gmail.com', 'EB', '$2y$10$Rq2v13I0gG8bf0G7.ZZSFutschnndn3tTbYnKqKxKTh9MVNDDk5BW', 'admin'),
(7, 'Max', 'Smith', 'max@gmail.com', 'maxs', '$2y$10$nQlhghys0YX3UG0IfGNu2eEVnIb9HQYez1EUVeir0r5tWHWkz4CwC', 'user'),
(8, 'User1', 'UserLastname', 'user1@gmail.com', 'user1', '$2y$10$RRm6IVlAI90m5/XHJ5UJVe7vaJzilO9xbdvRndaHgkT6ft4biC2vS', 'user'),
(12, 'User2', 'User2 Lastname', 'user2@gmail.com', 'user2', '$2y$10$Cg2MVzXECrGHy.LYIs4GWOi4Hz6wi/0W8t4OLckPOhrUMRdozKTiu', 'admin'),
(13, 'Admin', 'Smith', 'admin@gmail.com', 'admin', '$2y$10$AhTHRxH5NErCizfNkc5Ba.Bi5NjPVgqeXEj90YPnS.4AqxrfVSqMW', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD KEY `book_id` (`book_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reviews_books` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD CONSTRAINT `book_genre_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `book_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_reviews_books` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

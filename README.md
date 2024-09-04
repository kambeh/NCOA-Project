# NCOA-Project
Codeigniter and Vue.Js

CRUD application API
=======================
- http://ncoa.localhost
- http://ncoa.localhost/books/view/1
- http://ncoa.localhost/books/update/20
- http://ncoa.localhost/books/delete/20
- http://ncoa.localhost/books/create

Challenges faced
=================
1. In codeIC, I could not product route like 'localhost/books/2', but later found out that the default controller is 'index', I use it and its works.
2. My computer could not load, so I have to use an old computer running in Windows XP, the browser is outdated, some of the scripts doesn't run properly, I have to put polyfill scripts to get around the fix.
3. Needs to find compatible CDN library to install routes in Vue.Js

Database table schema
=======================		
create table Books (
    id int primary key,
    title varchar (255) not null,
    author varchar (255) not null,
    genre varchar (50) not null,
    published_year year not null,
    description text
)

Insert into books (
id, title, author, published_year, genre, description) values 
(1, 'The Great Gatsby', 'F. Scott Fitzgerald', '1925', 'Tragedy', 'It tells the story of Jay Gatsby, a self-made millionaire, and his pursuit of Daisy Buchanan, a wealthy young woman whom he loved in his youth'),
(2, 'ULYSSES', 'James Joyce', '1922', 'Modernist Novel', 'Joyce\'s exploration of themes such as identity, nationality, and the human experience through the lens of everyday events makes this book a challenging but rewarding read for those interested in complex and thought-provoking literature.'),
(3, 'Lolita', 'Vladimir Nabokov', '1955', 'Novel', 'he novel is both internationally famous for its innovative style and infamous for its controversial subject: the book\'s narrator and protagonist Humbert Humbert becoming sexually obsessed with a twelve-year-old girl named Dolores Haze.'),
(4, 'Brave New World', 'Aldous Huxley', '1932', 'Science Fiction Dystopian Fiction', 'a science fiction classic about a futuristic society controlled by technology'),
(5, 'The Sound And The Fury', 'William Faulkner', '1929', 'Southern Gothic', 'The Sound and the Fury is set in Jefferson, Mississippi, in the first third of the 20th century. The novel centers on the Compson family, former Southern aristocrats who are struggling to deal with the dissolution of their family and its reputation. Over the course of the 30 years or so related in the novel, the family falls into financial ruin, loses its religious faith and the respect of the town of Jefferson, and many of them die tragically.'),
(6, 'Catch22', 'Joseph Heller', '1961', 'Dark Comedy', 'The story of a bombardier in World War II who is frantic and angry because thousands of people he does not know are trying to kill him.'),
(7, 'The Grapes Of Wrath', 'John Steinbeck', '1939', 'Novel', 'Set during the Great Depression, the novel focuses on the Joads, a poor family of tenant farmers driven from their Oklahoma home by drought, economic hardship, agricultural industry changes, and bank foreclosures forcing tenant farmers out of work. Due to their nearly hopeless situation, and in part because they are trapped in the Dust Bowl, the Joads set out for California along with thousands of other "Okies" seeking jobs, land, dignity, and a future.The Grapes of Wrath is frequently read in American high school and college literature classes due to its historical context and enduring legacy.A celebrated Hollywood film version, starring Henry Fonda and directed by John Ford, was released in 1940.'),
(8, 'I Claudius', 'Robert Graves', '1934', 'Historical', 'Drawing on the histories of Plutarch, Suetonius, and Tacitus, noted historian and classicist Robert Graves tells the story of the much-maligned Emperor Claudius with both skill and compassion.'),
(9, 'To The Lighthouse', 'Virginia Woolf', '1927', 'Modernism', 'The novel centres on the Ramsay family and their visits to the Isle of Skye in Scotland between 1910 and 1920. The novel recalls childhood emotions and highlights adult relationships. Among the book's many tropes and themes are those of loss, subjectivity, the nature of art and the problem of perception. In 1998, the Modern Library named To the Lighthouse No. Ramsay bring their eight children to their summer home in the Hebrides (a group of islands west of Scotland). Across the bay from their house stands a large lighthouse. Six-year-old James Ramsay wants desperately to go to the lighthouse, and Mrs. Ramsay tells him that they will go the next day if the weather permits.'),
(10, 'Slaughter house Five', 'Kurt Vonnegut', '1969', 'War Novel', 'The story of Kurt Vonnegut and Slaughterhouse-Five, an enduring masterpiece on trauma and memory Kurt Vonnegut was twenty years old when he enlisted in the United States Army.'),
(11, 'Invisible Man', 'Ralph Ellison', '1952', 'African American Literature', NULL),
(12, 'Native Son', 'Richard Wright', '1940', 'Social Protest', NULL),
(13, 'USA Trilogy', 'John Dos Passos', '1930', 'Political Fiction', NULL),
(14, 'A Passage To India', 'E M Forster', '1924', 'Novel', NULL),
(15, 'Tender Is The Night', 'F Scott Fitzgerald', '1934', 'Tragedy', NULL),
(16, 'Animal Farm', 'George Orwell', '1945', 'Political Satire', NULL),
(17, 'The Golden Bowl', 'Henry James', '1904', 'Philosophy', NULL),
(18, 'A Handful Of Dust', 'Evelyn Waugh', '1934', 'Fiction', NULL),
(19, 'As I Lay Dying', 'William Faulkner', '1930', 'Black Comedy', NULL),
(20, 'The Heart Of The Matter', 'Graham_Greene', '1948', 'Nove', NULL)

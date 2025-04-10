const menuToggle = document.getElementById('menu-toggle');
        const navLinks = document.getElementById('nav-links');
    
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('left-[-100%]');
            navLinks.classList.toggle('left-0');
        });


        document.addEventListener('DOMContentLoaded', () => {
            const books = [
                {
                    id: "Book1",
                    title: "Gone with the Wind",
                    author: "Margaret Mitchell",
                    description: "Set in the American South against the backdrop of the American Civil War and the Reconstruction era, the film tells the story of Scarlett O'Hara, the strong-willed daughter of a Georgia plantation owner, following her romantic pursuit of Ashley Wilkes, who is married to his cousin.",
                    image: "./images/Book1.jpg"
                },

                {
                    id: "Book2",
                    title: "The Great Gatsby",
                    author: "F. Scott Fitzgerald",
                    description: "A tale of wealth, love, and the American Dream in the Roaring Twenties, following the mysterious millionaire Jay Gatsby and his obsession with the beautiful Daisy Buchanan.",
                    image: "./images/Book2.jpg"
                },
                
                {
                    id: "Book3",
                    title: "I Claudius",
                    author: "Robert Graves",
                    description: "A fictional autobiography of Roman Emperor Claudius, chronicling the history of the Julio-Claudian dynasty and the intrigues of ancient Rome.",
                    image: "./images/Book3.jpg"
                },
               
                {
                    id: "Book4",
                    title: "The Grapes of Wrath",
                    author: "John Steinbeck",
                    description: "A powerful depiction of the Great Depression, following the Joad family as they journey from Oklahoma to California in search of a better life.",
                    image: "./images/Book4.jpg"
                    
                },

                {
                    id: "Book5",
                    title: "Lord of the Rings",
                    author: "J.R.R. Tolkien",
                    description: "An epic fantasy trilogy about the quest to destroy a powerful ring and defeat the dark lord Sauron.",
                    image: "./images/Book5.jpg"
                
                },

                {
                    id: "Book6",
                    title: "On the Road",
                    author: "Jack Kerouac",
                    description: "A defining work of the Beat Generation, following Sal Paradise and his friends as they travel across America in search of freedom and meaning.",
                    image: "./images/Book6.jpg"
                },
                {
                    id: "Book7",
                    title: "To Kill a Mockingbird",
                    author: "Harper Lee",
                    description: "A story of racial injustice and the loss of innocence in a small Southern town, seen through the eyes of young Scout Finch.",
                    image: "./images/Book5.jpg"
                },
                {
                    id: "Book8",
                    title: "Watchmen",
                    author: "Alan Moore",
                    description: "A graphic novel that deconstructs the superhero genre, exploring themes of power, morality, and the nature of heroism.",
                    image: "./images/Book8.jpg"
                },
                {
                    id: "Book9",
                    title: "George Orwell's 1984",
                    author: "George Orwell",
                    description: "A dystopian novel set in a totalitarian regime that uses surveillance, censorship, and propaganda to control its citizens.",
                    image: "./images/Book9.jpg"
                },
                {
                    id: "Book10",
                    title: "The Catcher in the Rye",
                    author: "J.D. Salinger",
                    description: "A coming-of-age story about Holden Caulfield, a teenager who struggles with alienation and the complexities of adulthood.",
                    image: "./images/Book10.jpg"
                },
               
                {
                    id: "Book11",
                    title: "Jane Eyre",
                    author: "Charlotte Brontë",
                    description: "A gothic romance about an orphaned governess, Jane Eyre, and her complex relationship with the brooding Mr. Rochester.",
                    image: "./images/Book11.jpg"
                },
                {
                    id: "Book12",
                    title: "LORD OF THE FLIES",
                    author: "William Golding",
                    description: "A chilling tale of a group of British schoolboys stranded on a deserted island, who descend into savagery as they struggle for power and survival, revealing the dark side of human nature.",
                    image: "./images/Book12.jpg"
                },
                {
                    id: "Book13",
                    title: "Harry Potter and the Chamber of Secrets",
                    author: "J.K. Rowling",
                    description: "The second book in the Harry Potter series, where Harry returns to Hogwarts and uncovers a dark secret about the school.",
                    image: "./images/Book13.jpg"
                },
                {
                    id: "Book14",
                    title: "The kite runner",
                    author: "Khaled Hosseini",
                    description: "A powerful story of friendship and redemption set against the backdrop of a changing Afghanistan.",
                    image: "./images/Book14.jpg"
                },

                {
                    id: "Book15",
                    title: "Romeo and Juliet",
                    author: "William Shakespeare",
                     description: "A tragic love story of two young lovers, Romeo Montague and Juliet Capulet, whose passion defies their feuding families in Verona, leading to a fateful and heartbreaking end.",
                    image: "./images/Book15.jpg"
                }
            ];
        
            const urlParams = new URLSearchParams(window.location.search);
            const bookId = urlParams.get('book');
            const bookImage = document.querySelector('.detail-image');
            const bookTitle = document.querySelector('.detail-title');
            const bookDescription = document.querySelector('.detail-description');
            const bookAuthor = document.querySelector('.detail-author');
            

            let book = books[0];
            for (let i = 0; i < books.length; i++) {
                if (books[i].id === bookId) {
                    book = books[i];
                }
            }
            bookImage.src = book.image;
            bookImage.alt = book.title;
            bookTitle.textContent = book.title;
            bookDescription.textContent = book.description;
            bookAuthor.textContent = book.author;
        });
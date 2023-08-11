<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productData = [
            [
                'name' => 'American Psycho',
                'description' => '<h2>by <span style="text-decoration: underline;">Bret Easton Ellis</span></h2><h3>Synopsis</h3><p><strong>Bret Easton Ellis’s <em>American Psycho</em> is one of the most controversial and talked-about novels of all time. A multi-million-copy bestseller hailed as a modern classic, it is a violent and outrageous black comedy about the darkest side of human nature.<br><br>With an introduction by Irvine Welsh, author of Trainspotting.</strong><br><br><em>I like to dissect girls. Did you know I’m utterly insane?</em><br><br> Patrick Bateman has it all: good looks, youth, charm, a job on Wall Street, and reservations at every new restaurant in town. He is also a psychopath. A man addicted to his superficial, perfect life, he pulls us into a dark underworld where the American Dream becomes a nightmare . . .</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://static.onecms.io/wp-content/uploads/sites/6/2015/07/american-psycho.jpg',
                'is_active' => true,
                'slug' => Str::slug('American Psycho'),
                'price' => '17.99'
            ],
            [
                'name' => 'Pride and Prejudice',
                'description' => '<h2>by <span style="text-decoration: underline;">Jane Austen</span></h2><h3>Illustrated by<span style="text-decoration: underline;">Hugh Thomson</span></a></h3><p>Synopsis</p><p><strong>A special edition featuring beautiful heritage wallpaper patterns from her own home in Hampshire, these collectable paperbacks are a must for all Jane Austen fans.</strong> From Macmillan Collector’s Library; a series of stunning classics that make perfect gifts or a treat for any book lover.<br><br>Jane Austen’s best-loved novel is an unforgettable story about the inaccuracy of first impressions, the power of reason and, above all, the strange dynamics of human relationships and emotions. A tour de force of wit and sparkling dialogue, <em>Pride and Prejudice</em> shows how the headstrong Elizabeth Bennet and the aristocratic Mr Darcy must have their pride humbled and their prejudices dissolved before they can acknowledge their love for each other.<br><br>With original illustrations by the celebrated Hugh Thomson, this Macmillan Collector’s Library edition also features bonus material by Jane Austen expert and curator of Jane Austen`s House Sophie Reynolds.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71Q1tPupKjL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Pride and Prejudice'),
                'price' => '15.99'
            ],
            [
                'name' => 'The Adventures of Sherlock Holmes',
                'description' => '<h2>by Arthur Conan Doyle</a></h2><h3>Synopsis</h3><p><em>The Adventures of Sherlock Holmes</em> is perhaps the greatest collection of detective stories ever written. From his residence at 221B Baker Street, Sherlock Holmes solves a series of baffling and bizarre cases, including those of a man terrified by the arrival of an envelope containing orange pips, and a woman whose fiancé disappeared on his way to their wedding. Each story showcases the great detective`s inimitable and extraordinary deductive powers, recounted to us by his faithful friend and colleague, Dr Watson.<br><br>Part of the Macmillan Collector’s Library; a series of stunning, clothbound, pocket-sized classics with gold foiled edges and ribbon markers. These beautiful books make perfect gifts or a treat for any book lover. This edition features an afterword by David Stuart Davies - a Fellow of the Royal Literary Fund and an authority on Sherlock Holmes.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/81tNnqcHxlL._AC_UF894,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('The Adventures of Sherlock Holmes'),
                'price' => '29.99'
            ],
            [
                'name' => 'Don Quixote',
                'description' => '<h2>by Miguel de Cervantes</h2><p><strong>Translated by J. M. Cohen</strong></p><h3>Synopsis</h3><p>Widely regarded as one of the funniest and most tragic books ever written, <em>Don Quixote </em>chronicles the famous picaresque adventures of the noble knight-errant Don Quixote de La Mancha and his faithful squire, Sancho Panza. Together they journey through sixteenth-century Spain in search of adventure, taking on spirits, evil enchanters and giants in a quest to perform acts of valour worthy of Dulcinea, his lady love.<br><br>A masterpiece of world fiction and a brilliant satire on traditional romances, <em>Don Quixote </em>by Miguel de Cervantes is not only the world’s first modern novel – it is also an uproarious comedy that continues to delight readers today.<br><br>This Macmillan Collector’s Library edition of <em>Don Quixote </em>is translated by the acclaimed J. M. Cohen and features an afterword by writer and journalist Ned Halley.<br><br>Designed to appeal to the booklover, the Macmillan Collector’s Library is a series of beautiful gift editions of much-loved classic titles. Macmillan Collector’s Library are books to love and treasure.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://cdn.kobo.com/book-images/b2ece927-6fe1-40fd-8ee2-681e9c3fe4c3/353/569/90/False/don-quixote-101.jpg',
                'is_active' => true,
                'slug' => Str::slug('Don Quixote'),
                'price' => '24.99'
            ],
            [
                'name' => 'David Copperfield',
                'description' => '<h2>by Charles Dickens</h2><p><<strong>Complete and unabridged.<br><br>In one of his most energetic and enjoyable novels, Charles Dickens tells the life story of David Copperfield, from his birth in Suffolk, through the various struggles of his childhood, to his successful career as a novelist.</strong></p><h3>Synopsis</h3><p>Part of the Macmillan Collector’s Library; a series of stunning, clothbound, pocket sized classics with gold foiled edges and ribbon markers. These beautiful hardbacks make perfect gifts for book lovers, or wonderful additions to your own collection. This edition features the original illustrations by H. K. "Phiz" Browne, with an afterword by Sam Gilpin. <br><br>Dickens` early scenes are particularly masterful, depicting the world as seen from the perspective of a fatherless small boy. David`s idyllic life with his mother is ruined when she marries again, this time to a domineering and cruel man. David Copperfield is partly modelled on Dickens` own experiences, and one of the great joys of the book lies in its outlandish cast of characters, including the glamorous Steerforth, the cheerful, verbose Mr Micawber, the villainous Uriah Heep, and David`s eccentric aunt, Betsey Trotwood. Dickens described it as his "favourite child" among his novels – and it is easy to see why.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/51TrWpIwMfL.jpg',
                'is_active' => true,
                'slug' => Str::slug('David Copperfield'),
                'price' => '14.99'
            ],
            [
                'name' => 'The Great Gatsby',
                'description' => '<h2>by <span style="text-decoration: underline;">F. Scott Fitzgerald</span></h2><h3><strong>Synopsis</strong></h3><p><strong>In <em>The Great Gatsby</em> F. Scott Fitzgerald captures the flamboyance, the carelessness and the cruelty of the wealthy during America`s Jazz Age.</strong><br><br>Part of the Macmillan Collector’s Library; a series of stunning, clothbound, pocket sized classics with gold foiled edges and ribbon markers. These beautiful books make perfect gifts or a treat for any book lover. This beautiful Macmillan Collector`s Library edition features an afterword by David Stuart Davies.<br><br>The Great Gatsby lives mysteriously in a luxurious Long Island mansion, playing lavish host to hundreds of people. And yet no one seems to know him or how he became so rich. He is rumoured to be everything from a German spy to a war hero. People clamour for invitations to his wild parties. But Jay Gatsby doesn`t heed them. He cares for one person alone - Daisy Buchanan, the woman he has waited for all his life. Little does he know that his infatuation will lead to tragedy and end in murder.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71FTb9X6wsL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('The Great Gatsby'),
                'price' => '24.99'
            ],
            [
                'name' => 'The War of the Worlds',
                'description' => '<h2>by <span style="text-decoration: underline;">H. G. Wells
</span></h2><h3><strong>Synopsis</strong></h3><p>Shooting stars tear across the night sky, then a gigantic artificial cylinder descends from Mars to land near London. Inquisitive locals gather round, only to be struck down by a murderous Heat-Ray. Giant destructive machines disgorge from the cylinder, destroying everything in their path on a merciless march towards the capital. Can humanity survive this Martian onslaught?<br><br>A gripping adventure written in semi-documentary style, <em>The War of the Worlds</em> by H. G. Wells is the seminal man versus machine adventure which has inspired countless science fiction stories and novels.<br><br>This Macmillan Collector`s Library edition of <em>The War of the Worlds</em> contains an introduction by author James P. Blaylock.<br><br>Designed to appeal to the booklover, the Macmillan Collector`s Library is a series of beautiful gift editions of much loved classic titles. Macmillan Collector`s Library are books to love and treasure.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/81cP98OAsmL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('The War of the Worlds'),
                'price' => '16.99'
            ],
            [
                'name' => 'Frankenstein',
                'description' => '<h2>by <span style="text-decoration: underline;">Mary Shelley</span></h2><h3><strong>Synopsis</strong></h3><p><strong>One of BBC`s 100 Novels That Shaped Our World. <em>Frankenstein</em> is the most famous novel by Mary Shelley: a dark parable of science misused.</strong><br><br>Part of the Macmillan Collector’s Library; a series of stunning, clothbound, pocket sized classics with gold foiled edges and ribbon markers. These beautiful hardbacks make perfect gifts for book lovers, or wonderful additions to your own collection. The novel is produced here in its original form and with an afterword by David Pinching.<br><br>Victor Frankenstein, a brilliant but wayward scientist, builds a human from dead flesh. Horrified at what he has done, he abandons his creation. The hideous creature learns language and becomes civilized but society rejects him. Spurned, he seeks vengeance on his creator. So begins a cycle of destruction, with Frankenstein and his "monster" pursuing each other to the extremes of nature until all vestiges of their humanity are lost. In 1831, Mary Shelley succumbed to conservative pressures and toned down elements of the work; this edition presents the work as originally intended.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71hCBEMpQ0L._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Frankenstein'),
                'price' => '19.99'
            ],
            [
                'name' => 'Children of Time',
                'description' => '<h2>by <span style="text-decoration: underline;">Adrian Tchaikovsky</span></h2><h3><strong>Synopsis</strong></h3><p><strong>Winner of the 30th anniversary Arthur C. Clarke Award for Best Novel.<br><br>Adrian Tchaikovksy`s critically acclaimed novel <em>Children of Time</em>, is the epic story of humanity`s battle for survival on a terraformed planet.</strong><br><br>Who will inherit this new Earth? The last remnants of the human race left a dying Earth, desperate to find a new home among the stars. Following in the footsteps of their ancestors, they discover the greatest treasure of the past age – a world terraformed and prepared for human life.<br><br>But all is not right in this new Eden. In the long years since the planet was abandoned, the work of its architects has borne disastrous fruit. The planet is not waiting for them, pristine and unoccupied. New masters have turned it from a refuge into mankind`s worst nightmare.<br><br>Now two civilizations are on a collision course, both testing the boundaries of what they will do to survive. As the fate of humanity hangs in the balance, who are the true heirs of this new Earth?</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/61N8KZpUuqS._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Children of Time'),
                'price' => '15.99'
            ],
            [
                'name' => 'Zone One',
                'description' => '<h2>by <span style="text-decoration: underline;">Colson Whitehead</span></h2><h3><strong>Synopsis</strong></h3><p>Pulitzer Prize-winning novelist Colson Whitehead was inspired to write this apocalyptic sci-fi novel because of his teenage fascination with the work of Stephen King and Issac Asimov. A plague has ravaged the planet, and the population is divided into the living and the living dead. Mark Spitz is working on a task force to clear the infested from ‘Zone One’. He undertakes the mundane mission of malfunctioning zombie removal, the rigours of Post-Apocalypic Stress Disorder all while attempting to come to terms with a fallen world. But little does Mark Spitz know, things will quickly turn from bad to worse. </p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/81KTN2667KL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Zone One'),
                'price' => '11.99'
            ],
            [
                'name' => 'Kindred',
                'description' => '<h2>by <span style="text-decoration: underline;">Octavia E. Butler</span></h2><h3><strong>Synopsis</strong></h3><p>The first science fiction written by a black woman, <em>Kindred</em> has become a cornerstone of black American literature. On her 26th birthday, Dana and her husband are moving into their apartment when she starts to feel dizzy. She falls to her knees, nauseous. Then the world falls away. She finds herself at the edge of a green wood by a vast river. She`s terrified. The next thing she knows she`s back in her apartment, soaking wet. It`s the most terrifying experience of her life – until it happens again. This combination of slave memoir, fantasy, and historical fiction is a novel of rich literary complexity.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71fWPuYtHSL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Kindred'),
                'price' => '9.99'
            ],
            [
                'name' => 'Dune',
                'description' => '<h2>by <span style="text-decoration: underline;">by Frank Herbert</span></h2><h3><strong>Synopsis</strong></h3><p>Before The Matrix, before Star Wars, before Ender`s Game and Neuromancer, there was <em>Dune</em> – widely considered one of the greatest sci-fi novels ever written. Melange, or "spice", is the most valuable - and rarest - element in the universe. And it can only be found on a single planet: the inhospitable desert world Arrakis. Whoever controls Arrakis controls the spice. And whoever controls the spice controls the universe. Against this backdrop, man as a political animal is laid completely bare and pertinent themes are explored, making Dune one of the epic sci-fi novels of the twentieth century. </p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/81ym3QUd3KL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Dune'),
                'price' => '18.99'
            ],
            [
                'name' => 'Bad Blood',
                'description' => '<h2>by <span style="text-decoration: underline;">John Carreyrou</span></h2><h3><strong>Synopsis</strong></h3><p><strong>‘I couldn’t put down this thriller’ – Bill Gates<br><br>Winner of the Financial Times/McKinsey Business Book of the Year Award.<br><br>The shocking true story of the breathtaking rise and collapse of Theranos, the multibillion-dollar biotech startup founded by Elizabeth Holmes, written by the prize-winning journalist who first broke the story and pursued it to the end.</strong><br><br>Seen as the female Steve Jobs, Theranos founder and CEO Elizabeth Holmes was a brilliant Stanford dropout whose startup ‘unicorn’ promised to revolutionize the medical industry with a machine that would make blood testing significantly faster and easier. Backed by wealthy investors, Theranos sold shares that valued the company at more than $9 billion.<br><br>There was just one problem: the technology didn’t work . . .<br><br>Despite threats of legal action, brave whistleblowers started to talk. They revealed a culture of intimidation and secrecy, technology that repeatedly failed, results sent to real patients that were incorrect but upon which life-changing medical decisions were being made, with devastating consequences.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71QaArYs96L._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Bad Blood'),
                'price' => '21.99'
            ],
            [
                'name' => 'This is Going to Hurt',
                'description' => '<h2>by <span style="text-decoration: underline;">Adam Kay
</span></h2><h3><strong>Synopsis</strong></h3><p><strong>Now a major BAFTA nominated BBC comedy-drama starring BAFTA and Emmy award-winning actor Ben Whishaw.<br><br>The multi-million copy bestseller now with an exclusive preface by the author.</strong><br><br>Welcome to the life of a junior doctor: 97-hour weeks, life and death decisions, a constant tsunami of bodily fluids, and the hospital parking meter earns more than you.<br><br>Scribbled in secret after endless days, sleepless nights and missed weekends, Adam Kay`s <em>This is Going to Hurt</em> provides a no-holds-barred account of his time on the NHS front line. Hilarious, horrifying and heartbreaking, this diary is everything you wanted to know – and more than a few things you didn`t – about life on and off the hospital ward.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/41Pm-QDSvmL.jpg',
                'is_active' => true,
                'slug' => Str::slug('This is Going to Hurt'),
                'price' => '26.99'
            ],
            [
                'name' => 'Absolute Power',
                'description' => '<h2>by <span style="text-decoration: underline;">David Baldacci</span></h2><h3><strong>Synopsis</strong></h3><p><strong>Set at the heart of political power in Washington DC, <em>Absolute Power</em> was the book which launched David Baldacci`s career as a worldwide bestseller of thrilling fiction. The movie, starring Clint Eastwood, was a major box office success across the world.</strong><br><br>In a heavily guarded mansion in the Virginian countryside, professional burglar and break-in artist, Luther Whitney, is trapped behind a one-way mirror. What he witnesses destroys his faith not only in justice, but all he holds dear.<br><br>What follows is an unthinkable abuse of power and a criminal conspiracy, as a breathtaking cover-up is set in motion by those appointed to work for one of the most important people in the world – the President of the United States.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/51-UUoL7IkL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Absolute Power'),
                'price' => '19.99'
            ],
            [
                'name' => 'Gone Girl',
                'description' => '<h2>by <span style="text-decoration: underline;">Gillian Flynn</span></h2><h3><strong>Synopsis</strong></h3><p>This twisty psychological thriller became a phenomenon when it was published, selling over twenty million copies worldwide and being adapted into a hit film starring Ben Affleck and Rosamund Pike. When Nick Dunne wakes up on the morning of his fifth wedding anniversary to find his wife missing, he quickly becomes the police’s chief suspect. Amy’s friends reveal she was afraid of him, there are strange searches on his computer and persistent calls to his mobile phone, but Ben swears he knows nothing about any of this. So what really happened to Amy Dunne? </p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71+khXHbe5L._AC_UF894,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Gone Girl'),
                'price' => '14.99'
            ],
            [
                'name' => 'Murder on the Orient Express',
                'description' => '<h2>by <span style="text-decoration: underline;">Agatha Christie</span></h2><h3><strong>Synopsis</strong></h3><p>Agatha Christie belongs on any essential reading list, and <em>Murder on the Orient Express</em> is widely regarded as her most famous murder mystery. A train journey is delayed by thick snow. So when a passenger on the train is found murdered in his bed, it is the perfect opportunity for Agatha Christie`s famous detective, Hercule Poirot, to prove his ability and solve the crime using the power of his brain. Now also a major motion picture, delve into the suspense, twists and turns of this story from the queen of mystery herself. </p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/51r0M+3m6FL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Murder on the Orient Express'),
                'price' => '18.99'
            ],
            [
                'name' => 'The Pillars of the Earth',
                'description' => '<h2>by <span style="text-decoration: underline;">Ken Follett</span></h2><h3><strong>Synopsis</strong></h3><p><strong>A spellbinding epic tale of ambition, anarchy and absolute power set against the sprawling medieval canvas of twelfth-century England, <em>The Pillars of the Earth</em> is Ken Follett`s classic historical masterpiece.</strong><br><br>A MASON WITH A DREAM<br><br>1135 and civil war, famine and religious strife abound. With his family on the verge of starvation, mason Tom Builder dreams of the day that he can use his talents to create and build a cathedral like no other.<br><br>A MONK WITH A BURNING MISSION<br><br>Philip, prior of Kingsbridge, is resourceful, but with money scarce he knows that for his town to survive it must find a way to thrive, and so he makes the decision to build within it the greatest Gothic cathedral the world has ever known.<br><br><strong>More than 175 million copies sold worldwide. Published in over eighty territories and thirty-seven languages. The international No. 1 bestselling phenomenon returns.</strong></p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71+Lfa1AwBL._AC_UF894,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('The Pillars of the Earth'),
                'price' => '18.99'
            ],
            [
                'name' => 'Beloved',
                'description' => '<h2>by <span style="text-decoration: underline;">Toni Morrison</span></h2><h3><strong>Synopsis</strong></h3><p>This Pulitzer-prize winning novel is arguably the most iconic work of Toni Morrison, an essential and important voice of contemporary American literature. It is the mid-1800s and as slavery looks to be coming to an end, Sethe is haunted by the violent trauma it wrought on her former enslaved life at Sweet Home, Kentucky. Her dead baby daughter, whose tombstone bears the single word, Beloved, returns as a spectre to punish her mother, but also to elicit her love. Morrison combines the visionary power of legend with the unassailable truth of history in this enduring novel.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71gcUQfRi+L._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Beloved'),
                'price' => '14.99'
            ],
            [
                'name' => 'The Little Prince',
                'description' => '<h2>by <span style="text-decoration: underline;">Antoine de Saint-Exupéry</span></h2><h3><strong>Synopsis</strong></h3><p><strong>With an introduction by Kate Mosse<br><br>
Translated by Ros Schwartz</strong><br><br><em>All grown-ups were children once (but most of them have forgotten).</em><br><br>A pilot who has crash landed in the desert awakes to see an extraordinary little boy. "Please," asks the stranger, "will you draw me a little lamb!" Baffled by the little prince`s incessant questioning, the pilot pulls out his pencil, and starts to draw. As the little prince`s curiosity takes them further on their journey together, the pilot is able to piece together an understanding of the tiny planet from which the prince has come and of his incredible travels across the universe.<br><br>First published in 1943, <em>The Little Prince</em> by Antoine de Saint-Exupéry has been translated into more than 250 languages, becoming a global phenomenon. Heart-breaking, funny and thought-provoking, it is an enchanting and endlessly wise fable about the human condition and the power of imagination. A book about both childhood and adulthood, it can be read as a parable, a war story, a classic children`s fairy-tale, and many more things besides: <em>The Little Prince</em> is a book for everyone; after all, all grown-ups were children once.<br><br>"<em>The Little Prince</em> moves from asteroid to desert, from fable and comedy to enigmatic tragedy, in order to make one recurrent point: You can`t love roses. You can only love a rose" Adam Gopnik, New Yorker</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71OZY035QKL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('The Little Prince'),
                'price' => '16.99'
            ],
            [
                'name' => 'The Alchemist',
                'description' => '<h2>by <span style="text-decoration: underline;">Paulo Coelho</span></h2><h3><strong>Synopsis</strong></h3><p>First published in Portuguese, <em>The Alchemist</em> has become a modern classic, selling over thirty million copies worldwide. The story follows Santiago, an Andalusian shepherd boy who dreams of travelling the world in search of a worldly treasure as fabulous as any ever found. From his home in Spain he journeys to the markets of Tangiers, and from there into the Egyptian desert, where a fateful encounter with the alchemist awaits him. This is a magical fable about learning to listen to your heart, read the omens strewn along life`s path and, above all follow your dreams.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/51FXs5gTmdL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('The Alchemist'),
                'price' => '13.99'
            ],
            [
                'name' => 'Never Let Me Go',
                'description' => '<h2>by <span style="text-decoration: underline;">Kazuo Ishiguro</span></h2><h3><strong>Synopsis</strong></h3><p>Shortlisted for the Booker Prize in 2005, <em>Never Let Me Go</em> breaks the boundaries of the literary novel. Hailsham seems like a pleasant English boarding school, far from the influences of the city. Its students are well tended and supported, trained in art and literature, and become just the sort of people the world wants them to be. But, curiously, they are taught nothing of the outside world and are allowed little contact with it. Kazuo Ishiguro beautifully paints a story of love, friendship and memory,  charged throughout with a sense of the fragility of life.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71m61vu42YL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Never Let Me Go'),
                'price' => '18.99'
            ],
            [
                'name' => 'The Trial',
                'description' => '<h2>by <span style="text-decoration: underline;">Franz Kafka</span></h2><h3><strong>Synopsis</strong></h3><p><strong>In Kafka`s powerful and disturbing novel, an innocent man is arrested and repeatedly interrogated for a crime that is never ever explained.</strong><br><br>Part of the Macmillan Collector’s Library, a series of stunning, clothbound, pocket-sized classics with gold-foiled edges and ribbon markers. These beautiful books make perfect gifts or a treat for any book lover. This edition is translated from German by Douglas Scott and Chris Waller, and features an afterword by David Stuart Davies.<br><br>On the morning of his thirtieth birthday, a young bank official named Joseph K is arrested although he has done nothing wrong and is never told what he’s been charged with. <em>The Trial</em> is the chronicle of his fight to prove his innocence, of his struggles and encounters with the invisible Law and the untouchable Court where he must make regular visits. It is an account, ultimately, of state-induced self-destruction presenting in a nightmarish scenario the persecution of the outsider and the incomprehensible machinations of the state. Using the power of simple, straightforward language Kafka draws the reader into this bleak and frightening world so that we too experience the fears, uncertainties and tragedy of Joseph K.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/51wQmxud3NL._AC_UF1000,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('The Trial'),
                'price' => '14.99'
            ],
            [
                'name' => 'Fahrenheit 451',
                'description' => '<h2>by <span style="text-decoration: underline;">Ray Bradbury</span></h2><h3><strong>Synopsis</strong></h3><p>Possibly the most terrifying dystopian scenario for booklovers, <em>Fahrenheit 451</em> is set in a not-too-distant future where books are burned and intellectual thought is illegal. Guy Montag’s job as a fireman means he is responsible for burning any books that are found, because they`re considered the source of all discord and unhappiness. But everything changes when Guy`s doubts start to grow.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/71X0Wsoa+vL._AC_UF894,1000_QL80_.jpg',
                'is_active' => true,
                'slug' => Str::slug('Fahrenheit 451'),
                'price' => '21.99'
            ],
            [
                'name' => 'The Hunger Games Trilogy',
                'description' => '<h2>by <span style="text-decoration: underline;">Suzanne Collins</span></h2><h3><strong>Synopsis</strong></h3><p>This bestselling dystopian fiction young adult trilogy was adapted into the smash hit film series which catapulted Jennifer Lawrence to stardom. Set in a dark vision of the near future, twelve boys and twelve girls are forced to take part in a brutal reality TV show where the only rule is kill or be killed. A prequel, The Ballad of Songbirds and Snakes, set sixty-four years before the events of the first book in the trilogy, was published in May 2020.</p>',
                'short_description' => 'Widely regarded as one of the funniest and most tragic books ever written.',
                'image' => 'https://m.media-amazon.com/images/I/41nphb8vbPL.jpg',
                'is_active' => true,
                'slug' => Str::slug('The Hunger Games Trilogy'),
                'price' => '15.99'
            ],
        ];

        foreach ($productData as $data) {
            Product::create($data);
        }
    }
}

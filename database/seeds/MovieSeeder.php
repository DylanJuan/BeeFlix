<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            //drama
           ['title'=>'Descendants of the Sun','photo'=>'/img/drama1.png','description'=>'Captain Yoo Si-jin (Song Joong-ki) is a special forces soldier in the South Korean Army who
            leads a special group called Team Alpha which consists of five soldiers, including himself. At the beginning of the story, Si-jin and Sergeant Major Seo Dae-young (Jin Goo)
            catch motorcycle thief Kim Gi-beom. Gi-beom, who is injured as a result of falling from a motorcycle, is sent to Haesung Hospital, where Doctor Kang Mo-yeon (Song Hye-kyo) works.
            Fascinated by Mo-yeons beauty, Si-jin tries to get Mo-yeon attention. However, Mo-yeon doesnt believe that Si-jin and Dae-young are really soldiers, even more so because Si-jin
            pseudonym is Big Boss (big boss), so Mo-yeon suspects the two of them are the gangsters who beat Gi. -beom.','rating'=>4.8],

            ['title'=>'Descendants of the Sun 2','photo'=>'/img/drama1.png','description'=>'Descendants of the Sun Season 2 will begin to tell the story of Seo Dae Young (Jin Goo) and Lieutenant Yoon Myung-joo (Kim Ji Won), reported by Bitbang, recently.
            Another source said, Descendants Of The Sun Season 2 began shooting. However, the location of the drama filming is still a secret.
            In Descendants of the Sun, the story about Lieutenant Yoon Myung Joo (played by Kim Jiwon) also caught the attention of viewers in the drama Descendants of the Sun.
            This beautiful soldier turns out to be a doctor who has the ability to make good decisions as one of the top brass in the medical team.','rating'=>4.6],

            ['title'=>'The World of The Married','photo'=>'/img/drama2.png','description'=>'Synopsis The World of The Married tells the story of Joon Young, Sun Woo and Taes son, who is confused by his parents
            divorce. One day Sun Woo took Joon Young. The audience is swept away and thinks Sun Woo is crazy and recommends that he kill Joon Young.
            That is also what Tae Oh thought. The synopsis of The World of The Married rolls back to the time when Tae Oh met Sun Woo. He thinks Sun Woo killed Joon Young. Tae Oh, who was already emotional,
            was torturing Sun Woo. When Sun Woo is already battered,Joon Young walks in and finds Sun Woo after being beaten by Tae Oh.','rating'=>3.8],

            ['title'=>'Boys Over Flower','photo'=>'/img/drama3.png','description'=>'Geum Jan Di (Koo Hye Sun) is a girl who comes from an ordinary family who owns a laundry shop located near Shin Hwa school,
            the most prestigious school in South Korea. The beginning of the story begins when Jan Di was about to deliver the laundry belonging to a Shinhwa student, it turned out that the laundry belonged to a student who was about to commit suicide due to stress due to bullying from F4.
            By chance Jan Di helped the boy. Her actions immediately came to the publics attention and sparked public outrage towards Shin Hwa. To calm the publics anger, Jan Di was offered a swimming scholarship to attend Shinhwa school,
            initially refused but eventually accepted after his family forced him to.','rating'=>3.8],

            // kids
            ['title'=>'Gravity Falls Movie','photo'=>'/img/kids1.png','description'=>'Gravity Falls tells the story of Dipper Pines and his twin sister Mabel Pines
            summer trip to the home of their cousin Grunkle (Great-Uncle) Stan.They spend their summer vacation in Gravity Falls, Oregon, a city full of mystery and also supernatural activity.
            Dipper and Mabel help Grunkle Stan work at a gift shop called The Mistery Shack.Inside the shop, there are many mysterious items on display as a mysterious museum for visiting tourists
            who come to Gravity Falls', 'rating'=>4.0],

            ['title'=>'Adventure Times','photo'=>'/img/kids2.png','description'=>'Adventure Time, originally titled Adventure Time with Finn & Jake, is an American animated television series created by Pendleton Ward for Cartoon Network. The series follows the adventures of Finn (voiced by Jeremy Shada),
            a 14-year-old human, and his adopted brother Jake (voiced by John DiMaggio), a dog with magical powers to change shape, grows and shrinks. Finn and Jake live in the post-extinction land of The Land of Ooo.
            Throughout the adventure, they interact with the other main character of the animated series: Princess Bubblegum','rating'=>4.5],

            ['title'=>'Spongebob the Movie','photo'=>'/img/kids3.png','description'=>'The SpongeBob SquarePants Movie is a 2004 American live-action/animated adventure comedy film based on the animated television series SpongeBob SquarePants.
            The film was directed, co-written, and produced by series creator Stephen Hillenburg, with live-action sequences directed by Mark Osborne. It features the series
            cast of Tom Kenny, Bill Fagerbakke, Clancy Brown, Rodger Bumpass and Mr. Lawrence, with Alec Baldwin, David Hasselhoff, Scarlett Johansson, and Jeffrey Tambor portraying new characters.
            It is the first film in the SpongeBob SquarePants film series. In this film, Plankton devises a plan to discredit his business nemesis Mr. Krabs, steal the Krabby Patty secret formula and take over the world by stealing King Neptunes
            crown and framing Mr. Krabs for the crime. SpongeBob and Patrick team up to retrieve the crown from Shell City to save Mr. Krabs from Neptunes wrath and the oceanic world from Plankton rule.','rating'=>4.8],

            ['title'=>'Rick And Morty','photo'=>'/img/kids4.png','description'=>'Contribute Rick and Morty is an American adult animated science fiction sitcom created by Justin Roiland and Dan Harmon for Cartoon Networks late-night programming block Adult Swim .
            The series follows the misadventures of cynical mad scientist Rick Sanchez and his good-hearted but fretful grandson Morty Smith , who split their time between domestic life and interdimensional adventures.
            oiland voices the eponymous characters, with Chris Parnell , Spencer Grammer and Sarah Chalke voicing the rest of Rick and Mortys family. The series originated from an animated short parody film of Back to the Future , created by Roiland for Channel 101 ,
            a short film festival co-founded by Harmon. The series has been acclaimed by critics for its originality,
            creativity and humor.','rating'=>4.2],

            //tvshow
            ['title'=>'Transformer Age of Ultron','photo'=>'/img/tv1.png','description'=>'Transformers is a 2007 American science fiction action film based on the Transformers toy line. The film, which combines computer animation with live-action filming, was directed by Michael Bay, with Steven Spielberg serving as executive producer. It was produced by Don Murphy and Tom DeSanto, and is the first installment in the live-action Transformers film series. The film stars Shia LaBeouf as Sam Witwicky, a teenager who gets caught up in a war between the heroic Autobots and the villainous Decepticons, two factions of alien robots who can disguise themselves by transforming into everyday machinery, primarily vehicles. The Autobots intend to retrieve and use the AllSpark, the object that created their robotic race that is on Earth, to rebuild their home planet Cybertron and end the war, while the Decepticons have the intention of using it to build an army by giving life to the machines of Earth. Tyrese Gibson, Josh Duhamel, Anthony Anderson, Megan Fox, Rachael Taylor, John Turturro, and Jon Voight also star, while voice actors Peter Cullen and Hugo Weaving voice Optimus Prime and Megatron respectively.','rating'=>2.8],

            ['title'=>'Chernobyl The Movie','photo'=>'/img/tv2.png','description'=>'This film tells the story of six young tourists, looking for unusual adventures, they hire an eccentric tour guide. Ignoring the warnings, the guide takes them to the city of Pripyat, a former home of the Chernobyl nuclear reactor workers, but the city has been deserted since the disaster more than 25 years ago. After exploring the forbidden city, these young people realize that they are not alone there….','rating'=>4.6],

            ['title'=>'Game of Thrones','photo'=>'/img/tv3.png','description'=>'Game of Thrones is an American fantasy drama television series created by David Benioff and D. B. Weiss for HBO. It is an adaptation of A Song of Ice and Fire, George R. R. Martins series of fantasy novels, the first of which is A Game of Thrones (1996). The show was shot in the United Kingdom, Canada, Croatia, Iceland, Malta, Morocco, and Spain. The series premiered on HBO in the United States on April 17, 2011, and concluded on May 19, 2019, with 73 episodes broadcast over eight seasons.Set on the fictional continents of Westeros and Essos, Game of Thrones has a large ensemble cast and follows several story arcs. One arc is about the Iron Throne of the Seven Kingdoms of Westeros and follows a web of alliances and conflicts among the noble dynasties, either vying to claim the throne or fighting for independence from it. Another focuses on the last descendant of the realms deposed ruling dynasty, who has been exiled to Essos and is plotting a return to the throne. A third story arc follows the Nights Watch, a brotherhood defending the realm against the fierce peoples and legendary creatures of the North.','rating'=>4.7],

            ['title'=>'The Scheme Biography','photo'=>'/img/tv4.png','description'=>'Initially four episodes were made, but only the first two episodes were aired during the intended broadcast schedule. Episodes 3 and 4 were originally postponed due to a court case involving a participant in the series. Since broadcast of these episodes could have potentially influenced a jury, BBC Scotland had no choice but to postpone transmission of the episodes[7][8] The series made a return in full from episode one on 16 May 2011. All episodes were repeated to the rest of the United Kingdom on BBC One from 14 June-12 July 2011.[citation needed] A fifth episode was also broadcast during this run; it was filmed a year after the other episodes and caught up with some of the people featured in the first four episodes.','rating'=>4.6],

        ]);
    }
}

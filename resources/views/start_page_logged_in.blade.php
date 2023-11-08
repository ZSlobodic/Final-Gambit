<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>
<body class="bgi">
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">ZiK</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!--<li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>-->
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Bases
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="spells">Spell Database</a></li>
                            <li><a class="dropdown-item" href="classes">Class Database</a></li>
                            <li><a class="dropdown-item" href="subclasses">Subclasses Database</a></li>
                            <li><a class="dropdown-item" href="backgrounds">Background Database</a></li>
                            <li><a class="dropdown-item" href="races">Race Database</a></li>
                            <li><a class="dropdown-item" href="feats">Feat Database</a></li>
                            <li><a class="dropdown-item nav-link disabled" href="#">Item Database</a></li>
                            <!--<li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>-->
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li> -->
                </ul>

                <ul class="nav middle">
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading1">How to get started?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading2">Basics of the PC Sheet</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Step by Step Guide</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#scrollspyHeading3">Ability Scores</a></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading4">Basic Proficiencies</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading5">Race</a></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading6">Background</a></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading7">Class</a></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading8">Spells</a></li>
                        </ul>
                    </li>
                </ul>

                <!--<ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/register">Register</a>
                    </li>
                </ul>-->

                <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->

                <!-- Settings Dropdown -->
                <ul class="nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"> 
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profile">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <a class="dropdown-item" href="#">{{ __('Log Out') }}</a>
                                    </dropdown-link>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </nav>

        <!--<img src="{{ asset('images/dnd_5e_sheet.png') }}" alt="description of myimage">-->

        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                <p>Considering you've come here could only mean one of the two things. You've been sent here by the creator to make a character on your own or you stumbled upon this site by chance since you were looking on how to make a character on your own. In any of the cases, you don't know how to do it and are seeking help. Well you've come to the right place and this whole section here should be everything you need to make the right steps in order to make a fully fledged character for D&D 5E by the book.</p>
                <p>DISCLAIMER: This is a guide on how to make a character by the book, nothing more and nothing less. In case your Dungeon Master happens to rule things differently, has a different play style or whatever else comes to their mind, they have the ability to veto anything that is said here. After all, everyone may play the game differently and that is something I can not predict nor adapt to.</p>
                <p>With that said, I hope you manage to create the character you envision! Next destination... destiny!</p>
            <br>

            <h1 id="scrollspyHeading1">How to get started?</h1>
                <p>No matter if you are playing in person or online, the very first step is to get an idea of what kind of character you desire to play. Without thinking about any rules of the game, just take a minute or two to think just what is it that you want your character to be and be able to do. D&D 5E has small limits when it comes to ideas, as long as its not something really over the top since who would even enjoy a character who is good at everything? Not me at least...</p>
                <p>Done thinking? Good.</p>
                <p>No matter if you may not find something that is word for word on your character, there is always a work around. There are no Katanas in the item list but it is little to no issue to make the plain Longsword into a Katana but keeping the mehanical values of a Longsword. Flavor should always be FREE!! Unless it doesn't fit in in your Dungeon Masters world, I suggest talking about it with them.</p>
            
            <br>

            <h2 id="scrollspyHeading2">Basics of the PC Sheet</h2>
                <p>When it comes to Character Sheets, they can come in all shapes and sizes. I will be using the most common one for my explanations but any custom one you may find online should have the core features in them. The sheet itself is divided usually into three pieces. The Core, Bio, and Spells. I will be explaning each one and the specific parts of each as I think its needed.</p>

                <div class="accordion" id="character_sheet">

                    <div class="accordion-item">
                        <h3 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            
                            Core Sheet

                        </button>
                        </h3>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <img class="big_sheet" src="{{ asset('images/dnd_5e_sheet_numbered.png') }}" alt="Core sheet which is numbered.">
                            
                            <p>The Core of the Character Sheet is where most players are going the spend the most of their time. Either making it, or at least looking at it while playing.</p>
                            
                            <p><strong>1.</strong> Straight forward. Write your characters name here.</p>
                            
                            <p><strong>2.</strong> With six open fields, each one is quickly filled: <br>
                                - Class & Level: The name of your Subclass (when obtained), then the name of the Class, your level in the class right after it. Example: Champion Fighter 3 <br>
                                - Background: The name of your Background goes here. <br>
                                - Player Name: Mostly encountered in generic phisical sheets, your own name goes here. Not really important. <br>
                                - Race: The name of your Race, and Subrace if any, goes here. Example: Elf (High), or High Elf. As long as its easy to understand. <br>
                                - Alignement: A very short description of your characters way of life. Pick one from the 9 possible from combining two words. First word being Lawful, Neutral or Chaotic. Second word being Good, Neutral or Evil. Picking Neutral twice usually makes you True Neutral (more info later down the line). <br>
                                - Expirience Points: If you are playing with such rules, you write them down here.
                            </p>
                            
                            <p><strong>3.</strong> One of the most important parts of your Character Sheet. It will shape your character, mechanically so do be carefull when assining them. In any case, look at this as your stats.</p>
                            
                            <p><strong>4.</strong> Inspiration is something what you either have or don't. It is given to you by your Dungeon Master. More on that later.</p>
                            
                            <p><strong>5.</strong> Proficiency Bonus is something every character has and it is always the same amount depending on your Characters Level. It starts from 2 and it can grow up to 6. More on that later.</p>
                            
                            <p><strong>6.</strong> Saving Throws are used to resist a negative effect which may befallen your character. Depending on the event, your Dungeon Master calls for it and you roll. More details on that later.</p>
                            
                            <p><strong>7.</strong> Skills are your bread and butter. Sometimes your Dungeon Master will call for one of them for you to roll depending on the event. More on them later. <br><br>
                            <strong>7.a</strong> Inititative is also a "Skill". It is used when you start combat to determine who goes first. It is separated from the other skills since you can not gain proficiency in it. More on that later.</p>
                            
                            <p><strong>8.</strong> Armor Class defines how easy are you to be hit. In short; bigger the number, the harder you are to be hit.</p>
                            
                            <p><strong>9.</strong> Speed defines how much you can move on your turn during comabt. It is defined by your Race for the most part.</p>
                            
                            <p><strong>10.</strong> The Current Hit Points show how healthy your character is in the moment. Although there is no limit on which abilities a Character can use in regards to their HP. So even a 1 HP character could do the same amount of damage as a full HP character would. There are some exceptions but they are minimal.</p>
                            
                            <p><strong>10.a</strong> Temporary Hit Points are like a little pool of extra HP that is going to be reduced first. It can't stack and it resets to 0 after a long rest.</p>
                            
                            <p><strong>10.b</strong> Hit Dice are used to heal your own HP during a short rest. The amount of Hit Dices you have is equal to your level. They reset only by half after you complete your long rest.</p>
                           
                            <p><strong>11.</strong> No mehanical input here but it would be good to still fill it out for when you get to it.In short, it adds more character to your Character. You wouldn't want to be an empty husk walking around now, would you?</p>
                            
                            <p><strong>12.</strong> If you have any attacks, weapon or spells, you would write them down here. Name is the name of the attack. Example: "Longsword", or "Firebolt". You can add a flavorful name too as long as you remember what it is. The ATK Bonus describes how big of a bonus do you get to hit while the damage/type part describes how much damage the attack does if you even hit. More on that later.</p>
                            
                            <p><strong>13.</strong> Within the Features & Traits you write, usually, all of your Race, Class and Background features you get. In phisical form of the sheet, this will never be enough. Feel free to think out of the box for how to make up for the space. I take more blank paper to write stuff down.</p>
                            
                            <p><strong>14.</strong> Equipment is where you write down the items your Character is carrying. There is also 5 open slots for the money of the game. Seeing the example of the picture from top to bottom: CP stands for Copper Pieces, SP stands for Silver Pieces (10 Copper is 1 Silver), EP stands for Electrum Pieces (don't use Electrum but 5 Silver is 1 electrum), GP is Gold Pieces (10 Silver is 1 Gold) and PP is Platinum Pieces (10 Gold is 1 Platinum). Weight does matter in the game if your DM is keeping track of it somehow.</p>
                            
                            <p><strong>15.</strong> This little spot is used to write down any proficiencies your Character has from any form of Tools, Artisan Tools, Vehicles, Instruments, perhaps some custom skills and etc.</p>

                            <!--
                            <div class="accordion" id="character_sheet">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">

                                        Accordion Item #1

                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse ***show***">
                                        <div class="accordion-body">
                                            
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->

                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            
                                Bio Sheet
                        
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <img class="big_sheet" src="{{ asset('images/bio_sheet_numbered.png') }}" alt="Bio sheet which is numbered.">
                                <p>The Bio section of the sheet is where most players don't spend much time, if at all. It usually contains information about your character that doesn't come up all too often but those who wich to flash out more about their character may appriciate it nonetheless.</p>
                                <p><strong>1.</strong> Just like in the Core sheet, this is where the name of your character is written.</p>
                                <p><strong>2.</strong> A bit more specific stuff about the characters looks. Nothing to break your head about. Just go with the flow and write it in. Some numbers may very depending on your race but most of it is already known if you started making a character by using a picture.</p>
                                <p><strong>3.</strong> In Character Appearance is usually described the phisical look of your character.</p>
                                <p><strong>4.</strong> If your character may have some allies, you can write them down here. Usually NPCs.</p>
                                <p><strong>4.a</strong> Sometimes your character may be a part of a bigger organization. So you get a cool little space to show off their name and symbol. More often then not, you will not find this in online sheets</p>
                                <p><strong>5.</strong> Any features that may come up less or perhaps something about your character that isn't really mehanical to be written in the Core. For an example, I would write my Paladin oath in here but anything can go in here really.</p>
                                <p><strong>6.</strong> Treasure is a space that is made to write down any form of treasure your Character may have. Is it worth gold or just sentimental value, in any case I would write it down here.</p>
                                <p><strong>7.</strong> The most important part of the Bio sheet. Your Character's Backstory defines who they were before the adventure. Some people might write a lot, some barely anything but I suggest to talk about this with your Dungeon Master to discuss something that would fit in their world.</p>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            
                            Spell Sheet

                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <img class="big_sheet" src="{{ asset('images/spell_sheet_numbered.png') }}" alt="Spell sheet which is numbered.">
                            
                                <p>The Spell sheet may look simple but with all the rules that change depending on the class you are playing. Some Classes don't even have access to Spells which makes them fundementally simple like the Martial Classes. Although the Spell sheet may be complicated for beginners, those with dedication and the will to learn it will be just fine with the assistance of a good Dungeon Master. There are 10 different Spell levels, Cantrips (also known as 0 level spells) to Level 9 Spells. You will be able to cast higher level spells as you level up in your spellcasting class.</p>
                                <p><strong>1.</strong> Here is where you write down the name of your class that has the spellcasting feature. Some online sheets just have your name in here. It really depends on the format. No matter what it will be here, it will be easy to understand.</p>
                                <p><strong>2.</strong> Spellcasting Ability is one of your Ability Scores depending on the Spellcasting Class you are playing. Wizards and Artificers spellcasting ability is Intelligence. Druids, Rangers and Clerics use Wisdom. Sorcerers, Warlocks, Paladins and Bards use Charisma. More on the specifics later.</p>
                                <p><strong>3.</strong> Spell Save DC is a number which has to be met or beaten to resist your spell effects. You want this to be big. More on that later.</p>
                                <p><strong>4.</strong> Similar to the previous, this is also a number but this one helps you in hitting your targets with Spell Attacks. More on that later too.</p>
                                <p><strong>5.</strong> To cast Spells you use Spell Slots. They are written here for every level of a spell from 1 to 9. The number of slots you have is defined in your class.</p>
                                <p><strong>6.</strong> To keep track of how many slots have been used, or have left, you use this space. The tracking is, more of then then not, manual.</p>
                                <p><strong>7.</strong> Here is the space where you write down the names of the spells you know. In a phisical sheet this may be not enough for beginners since you have no space to write down what does the spell even do. I usually use another sheet of paper for this but any workaround should be fine. Don't dwell too much on it.</p>
                                <p><strong>8.</strong> Talking about the circles left of the spell names. Some spellcasting classes require you to prepare spells before you can consider casting them. Even if you may know the spell, if its not prepared you will not be able to use it. There is a way around it depending on the class you are playing but more on that later.</p>
                            </div>
                        </div>
                    </div>

                </div>
            <br>

            <br>
            <h4 id="scrollspyHeading3">Ability Scores</h4>
                <img class="noodle" src="{{ asset('images/ability_scores.png') }}" alt="Example of an Ability Score Array.">
                <p>
                    The bread and butter of your charactrer when it comes to the mehanical capabilities. These scores will be with you through the whole game and rarely change on most occasions. Setting them up in a way that will benefit you will be very importnat and therefor I will make sure to explain what do the numbers and each individual field mean.
                </p>
                <p>You should notice there are two numbers in each individual ability score. To use the picture on the left as an example in regards to strenght; the character's Strenght <strong>Modifier</strong> is 2 while the Strength <strong>Score</strong> is 14. Remember the difference since it is used in many situations and it will always mention if it is a <strong>Score</strong> or a <strong>Modifier</strong> (or just <strong>Mod</strong> for short).
                </p>
                <p>- <strong>Strength:</strong> It measures a characters ability to exert physical force. A character with high Strength can lift heavier objects, carry more gear without being overloaded, break things with brute strength, shove and grapple creatures more effectively, and is more accurate and more effective with melee weapons.
                    <br>
                Strength is most important for characters who fight in melee using heavy weapons like longswords and greataxes. Barbarians, Fighters, and Paladins frequently have high Strength.</p>
                <p>- <strong>Dexterity:</strong> It measures a character's nimbleness, their agility, and their fine motor skills. A character with high Dexterity is able to avoid attacks in combat, evade area effects like dragon's breath and explosions, move stealthily, perform feats of acrobatics, pick locks, and use both light, nimble melee weapons like daggers and rapiers and ranged weapons like bows and crossbows more effectively.
                    <br>
                Dexterity is most important for characters who fight using light weapons like dagger, finesse weapons like rapiers, and ranged weapons like bows. Bards, Monks, Rangers, and Rogues frequently have high Dexterity. Sometimes other classes, including Fighters, Paladins, and Warlocks also have high Dexterity.</p>
                <p>- <strong>Constitution:</strong> It describes a character's physical fortitude; their ability to endure pain, to take damage without falling unconscious, to resist the effects of poison, disease, and other physical maladies, to hold your breath, to travel long distances without rest, and to go without sleep for extended periods.
                    <br>
                All characters gain additional hit points from Constitution, so most player characters have at least moderately high Constitution, but it's most important for characters who fight in hand-to-hand combat because those characters tend to draw more attacks and suffer more damage as a result.</p>
                <p>- <strong>Intelligence:</strong> It measures a character's analytical ability, their memory, and their ability to reason logically. A character with high Intelligence knows many facts and pieces of trivia, can estimate the value of items, can communicate nonverbally, and they are often good at puzzles, games of skill, researching, investigation, forgery, and investigation.
                    <br>
                Intelligence is most important for Artificers, for Wizards, and a more important secondary option for Fighters who select the Eldritch Knight and Rouges who select the Arcane Trickster subclass. For those characters, Intelligence will make their spellcasting more effective.</p>
                <p>- <strong>Wisdom:</strong> It measures a character's practical intelligence, their cleverness, their perceptiveness, and how in tune they are with the world around them. Characters with high Wisdom are perceptive, observant, and sensible. They are able to handle animals, notice subtle details about creature's motives and about the world around them, and to make decisions when the right choice isn't clear.
                    <br>
                Wisdom is most important for Clerics and Druids, and a more important secondary option for Rangers and Monks. For Clerics, Druids, and Rangers, Wisdom is used for spellcasting, and higher Wisdom means that their spells will be more effective. For Monks, Wisdom improves their Armor Class and the effectiveness of several of their class features.</p>
                <p>- <strong>Charisma:</strong> It measures a character's charm and eloquence, their force of personality, their self-confidence, and their ability to interact with other creatures. Characters with high Charisma are charming, well-liked, and are often natural leaders. These characters are able to make friends, talk their way out of trouble, negotiate, and otherwise get by on talk.
                    <br>
                Charisma is most important for Sorcerers, Warlocks, and Bards, and a more important secondary option for Paladins. For those characters, Charisma will make their spellcasting more effective.</p>
                
                <p><strong>- To give you some form of understanding of what is good and bad in stats; every even number above 10 gives you a +1 to your modifier, while every odd number below 10 gives you a -1 to your modifier.</strong></p>

                <div class="accordion" id="ability_score">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">

                                How does one set up their ability scores?

                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <p><strong>1. Standard Array:</strong> From a statis pool of numbers, which are 15, 14, 13, 12, 10, and 8, the player picks which one goes where. Then you keep going from there.</p>

                                <p><strong>2. Point Buy:</strong> Having a pool of 27 points, you get to invest those points into your stats as you see fit. Every Ability score starts from 8 and you make your way up from there where you can upgrade a stat to the max of 15. Every upgrade costs only one point until you reach 13 in any stat. To get 14 and 15, you need to invest 2 points for each. Making the investment in one stat from 8 to 15 cost a total of 9 points. I personally like this one the most since every player has the same amount of points and the freedom to customize their stats as they see fit. There is also a website I suggest to use for such method right <a href="https://chicken-dinner.com/5e/5e-point-buy.html" target="_blank">here</a>.</p>

                                <p><strong>3. Rolling:</strong> The most popular way of doing it with the new players, or at least the first thing a new player may encounter. Basically the most common way of doing it is getting four six-sided dice and you roll all four of them. Remove the lowest value from those four and sum up the other three. Write down the sum and that is one of your stats. Repeat that five more times and you should have a set of six numbers. After that, just like with Standard Array, you pick which number goes where. I personally don't suggest this method considering that a some players at the same table may have excelent stats while other very bad ones. In other words, this creates a chaotic enviorment. That doesn't mean you should avoid this but keep in mind what it means to use such method.</p>

                            </div>
                        </div>
                    </div>

                </div>
            
            <br>

            <br>
            <h4 id="scrollspyHeading4">Skills, Saving Throws & Proficiency Bonus</h4>
                <p>As you remember in the section 5., 6., 6.a, 7., and 7.a; all of those little sections there will have to be filled with an appropriate modifier.</p>

                <p><strong>Proficiency Bonus</strong> is rather simple. It is a set number which only changes depending on your total player level. It starts from +2 and it gets to +3 on level 5, +4 on level 9, +5 on level 13, and +6 on level 17. It is added to various places while setting up your Character Sheet. I will make sure to mention specific locations where it does as we go along.</p>

                <p><strong>Saving Throws</strong> are the type of rolls your Dungeon Master calls for you to do to resist a negative effect. Depending on the class you pick, you will get proficiency in, typically, two saving throws. That is described in your class. The way they work when you have to roll one is that you roll 1 twenty-sided dice, add your mod to it (which corresponds to the name of the saving throw), and add your proficiency mod on top of that if you have proficiency. To mark that you have proficiency in it, you fill out the circle or square on the left of the name of the saving throw. Example: them DM calls for a Strength saving throw and you know your STR mod is +2. So you roll the dice, and whatever you get you get an additional +2 on top of that and you add the proficiency bonus to that too if you have proficiency in that saving throw. <br>
                You might also notice in section 6.a there is a Death Save. That is also a saving throw but unlike the normal one, this is rolled when your character happens to be dying but they are not dead outright. Any effect that effects saving throws, such as the spell Bless, it effects this one too.</p>

                <p><strong>Skills</strong> are similar to saving throws. But instead of trying to resist a negative effect, you are instead facing some form of challange. Weather you are picking a lock, pickpocketing someone, brute forcing yourself through a door, trying to remember that one piece of info from the past by memory and etc. Checking the 7.a part, Initiative is also a skill but you can not add your proficiency bonus to it, at least not in the usual means. Every skill corresponds to one Ability Score. The way you roll for them is the same as for Saving Throws and marking that you have proficiency in them as well. I will go into detail with them by giving you the full explanation of each individual skill. <br>
                Section 7.b also shows some form of passive skill. Passive Perception is a number you calculate by using the sum of 10 plus your Perception mod you have written down in the Skills. Other skills have passive variants too, which are calculated the same, but Perception is used way more often then the rest so it get a special section of its own. If it happens that you have "advantage" but only your passive number is being looked at, you get a +5 on that number instead.</p>

                <div class="accordion" id="all_skills">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="true" aria-controls="panelsStayOpen-collapseFive">

                                All Skills Explained

                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                            
                                <p><strong>Acrobatics:</strong> Your Dexterity (Acrobatics) check covers your attempt to stay on your feet in a tricky situation, such as when you're trying to run across a sheet of ice, balance on a tightrope, or stay upright on a rocking ship's deck. The DM might also call for a Dexterity (Acrobatics) check to see if you can perform acrobatic stunts, including dives, rolls, somersaults, and flips.</p>

                                <p><strong>Animal Handling:</strong> When there is any question whether you can calm down a domesticated animal, keep a mount from getting spooked, or intuit an animal's intentions, the DM might call for a Wisdom (Animal Handling) check. You also make a Wisdom (Animal Handling) check to control your mount when you attempt a risky maneuver.</p>

                                <p><strong>Arcana:</strong> Your Intelligence (Arcana) check measures your ability to recall lore about spells, magic items, eldritch symbols, magical traditions, the planes of existence, and the inhabitants of those planes.</p>

                                <p><strong>Athletics:</strong> Your Strength (Athletics) check covers difficult situations you encounter while climbing, jumping, or swimming. Examples include the following activities: <br>

                                - You attempt to climb a sheer or slippery cliff, avoid hazards while scaling a wall, or cling to a surface while something is trying to knock you off. <br>

                                - You try to jump an unusually long distance or pull off a stunt mid jump. <br>

                                - You struggle to swim or stay afloat in treacherous currents, storm-tossed waves, or areas of thick seaweed. Or another creature tries to push or pull you underwater or otherwise interfere with your swimming.</p>

                                <p><strong>Deception:</strong> Your Charisma (Deception) check determines whether you can convincingly hide the truth, either verbally or through your actions. This deception can encompass everything from misleading others through ambiguity to telling outright lies. Typical situations include trying to fast-talk a guard, con a merchant, earn money through gambling, pass yourself off in a disguise, dull someone's suspicions with false assurances, or maintain a straight face while telling a blatant lie.</p>

                                <p><strong>History:</strong> Your Intelligence (History) check measures your ability to recall lore about historical events, legendary people, ancient kingdoms, past disputes, recent wars, and lost civilizations.</p>

                                <p><strong>Insight:</strong> Your Wisdom (Insight) check decides whether you can determine the true intentions of a creature, such as when searching out a lie or predicting someone's next move. Doing so involves gleaning clues from body language, speech habits, and changes in mannerisms.</p>

                                <p><strong>Intimidation:</strong> When you attempt to influence someone through overt threats, hostile actions, and physical violence, the DM might ask you to make a Charisma (Intimidation) check. Examples include trying to pry information out of a prisoner, convincing street thugs to back down from a confrontation, or using the edge of a broken bottle to convince a sneering vizier to reconsider a decision.</p>

                                <p><strong>Investigation:</strong> When you look around for clues and make deductions based on those clues, you make an Intelligence (Investigation) check. You might deduce the location of a hidden object, discern from the appearance of a wound what kind of weapon dealt it, or determine the weakest point in a tunnel that could cause it to collapse. Poring through ancient scrolls in search of a hidden fragment of knowledge might also call for an Intelligence (Investigation) check.</p>

                                <p><strong>Medicine:</strong> A Wisdom (Medicine) check lets you try to stabilize a dying companion or diagnose an illness.</p>

                                <p><strong>Nature:</strong> Your Intelligence (Nature) check measures your ability to recall lore about terrain, plants and animals, the weather, and natural cycles.</p>

                                <p><strong>Perception:</strong> Your Wisdom (Perception) check lets you spot, hear, or otherwise detect the presence of something. It measures your general awareness of your surroundings and the keenness of your senses. For example, you might try to hear a conversation through a closed door, eavesdrop under an open window, or hear monsters moving stealthily in the forest. Or you might try to spot things that are obscured or easy to miss, whether they are orcs lying in ambush on a road, thugs hiding in the shadows of an alley, or candlelight under a closed secret door.</p>

                                <p><strong>Performance:</strong> Your Charisma (Performance) check determines how well you can delight an audience with music, dance, acting, storytelling, or some other form of entertainment.</p>

                                <p><strong>Persuasion:</strong> When you attempt to influence someone or a group of people with tact, social graces, or good nature, the DM might ask you to make a Charisma (Persuasion) check. Typically, you use persuasion when acting in good faith, to foster friendships, make cordial requests, or exhibit proper etiquette. Examples of persuading others include convincing a chamberlain to let your party see the king, negotiating peace between warring tribes, or inspiring a crowd of townsfolk.</p>

                                <p><strong>Religion:</strong> Your Intelligence (Religion) check measures your ability to recall lore about deities, rites and prayers, religious hierarchies, holy symbols, and the practices of secret cults.</p>

                                <p><strong>Sleight of Hand:</strong> Whenever you attempt an act of legerdemain or manual trickery, such as planting something on someone else or concealing an object on your person, make a Dexterity (Sleight of Hand) check. The DM might also call for a Dexterity (Sleight of Hand) check to determine whether you can lift a coin purse off another person or slip something out of another person's pocket.</p>
                                
                                <p><strong>Stealth:</strong> Make a Dexterity (Stealth) check when you attempt to conceal yourself from enemies, slink past guards, slip away without being noticed, or sneak up on someone without being seen or heard.</p>

                                <p><strong>Survival:</strong> The DM might ask you to make a Wisdom (Survival) check to follow tracks, hunt wild game, guide your group through frozen wastelands, identify signs that owlbears live nearby, predict the weather, or avoid quicksand and other natural hazards.</p>

                                <p><strong>Initiative:</strong> Initiative determines the order of turns during combat. When combat starts, every participant makes a Dexterity check to determine their place in the initiative order. Players roll for themselves, and the Dungeon Master rolls for other creatures. <br>
                                
                                The DM ranks the combatants in order from the one with the highest Dexterity check total to the one with the lowest. This is the order (called “initiative order”) in which they act during each round. The initiative order remains the same from round to round.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>

            <br>

            <br>
            <h4 id="scrollspyHeading5">Race</h4>
                <p>Alright, with the stats in their place, skills and saving throws understood it is time to see what you are racially. There are many races to choose from in D&D. There are multiple features that you will start writing into your Core sheet, a bit in the Bio sheet too, and I will make sure to refrence it as I did before as I go.</p>

                <p>- The name from the Race goes into the section 2. If your race has a subrace, I suggest adding it there too.</p>

                <p>- Every race will give you some form of a bonus to your Ability Scores. You add those to your already existing ones for a bonus. If a modifier happens to change, make sure to update your skills and saving throws!</p>

                <p>- The race will also define your size, either Medium or Small. There isn't a spot for it if you are using real phisical sheets so add it somewhere where you will remember it. In online sheets, it might be located in the Bio sheet at the 2.</p>

                <p>- Speed defines how much you can move during combat. Every square on the filed is, more often then not, 5 feet. Make sure to write it down at 9. in the Core sheet.</p>

                <p>- Age is something you decide on your own, but one of the older races (in regards to their release date) define what is an adult for them and what not. Write it down in the Bio sheet at 2.</p>

                <p>- There will be multiple features you get from the Race listed one after the other. Each of those go into the Features & Traits section 13. Some Features will give you extra proficiencies too. Skills are marked on the left in their circle or square that you have proficiency in them. Anything goes to Other Proficiencies & Languages.</p>

                <p>- Languges go into the section 15. I think the rest is pretty self explanatory about them.</p>

                <p>- Don't forget to finish up the 2. section on the Bio Sheet too. You should have all info you need from the source you are using for the race to do so. And if not, then the source you are using may not be the best or it is one of the newer released races but that part is really up to you.</p>

                <div class="accordion" id="FAQ_Races">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="true" aria-controls="panelsStayOpen-collapseSix">

                                FAQ

                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                            
                                <p>- If I am doing Point Buy for my Ability Scores, does the bonus I get from my Race effect the remaining points? <br>
                                No, it does not. It simply gets added on as a bonus. So you can break the 15 cap to get a 16 or 17 for instance.</p>
                                
                                <p>- None of the Races really appeal to me. Is there a way to make something I was thinking about? <br>
                                Yes, most of the time. Speak with your DM about what you had in mind and try to come to a decision together.Flavor is, and should be, always free but if you are looking for something mehanical that might be unique, then it might be a bit harder to implement.</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            <br>
            <br>

            <h4 id="scrollspyHeading6">Background</h4>
                <p>In short, this describes what was your character doing before the adventure. It grants you some pretty useful proficiencies. I will go over everything you get in order.</p>

                <p>- Make sure to write down the name of your Background in the Core sheet, section 2.</p>

                <p>- You get two skill proficiencies depending on the Background you chose. Make sure to mark them down in the Core sheet, section 7.</p>

                <p>- This section changes depending on the Background. All in all, you get two proficiencies that are not skills. So the usual thing you may encounter here are: Artisan Tools, Tools, Languages, Gaming Sets, Vehicles, Musical Instruments... Some might even suggest a combination of the two or you might get two of the same category.</p>

                <p>- Coming up, you should see a list of Equipment. Again, it depends on the background you choose. I suggest taking a read and writing it all down in your Core, section 14.</p>

                <p>- All Backgrounds give you a Feature. Some form of ability that fits in with the Background. Most of the time, they are rather specific. Although they are not used often; once you do come in a situation where you can use it, it feels pretty good. So make sure to keep that feature in mind while you are playing. Write it down in the Core sheet, section 13.</p>

                <p>- At the end of every Background there should be some Suggested Characteristics. Those are suggested traits you can give to your character in the Core sheet, section 11. They don't effect your character in any way mechanically but they do give you a hand in terms of roleplaying. The great things about those are that you don't even have to take what the Background is giving you since you can make your own too. In any case, the PHB suggests to have 2 Personality Traits, 1 Ideal, 1 Bond, and 1 Flaw at the very least.</p>

                <div class="accordion" id="FAQ_Races">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="true" aria-controls="panelsStayOpen-collapseSeven">

                                FAQ

                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                            
                                <p>- The given Backgrounds don't really speak to me or are not fully what I would envision. Is there any way around it? <br>
                                As a fact, yes. There is a rule in PHB where the player is allowed to make a custom Background. Either fully or just edit an existing one. As long as you get exactly two Skill proficiencies, two more Proficiencies that are not Skills, some Equipment pack from any Background and any Feature, you will be good to go. Make sure to talk it out with your DM in any case.</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            <br>
            <br>

            <h4 id="scrollspyHeading7">Class</h4>
                <p>The Class is the selling point of your Character. Are you a big hunk of muscle swining a heavy weapon? Perhaps a more sneaky type to strike from the shadows? A magic wielder who blasts anyone using the knowledge of the arcane? There are a lot of combinations of what one can do. I will give a rundown of each class to give you a decent idea of what is each of them about.</p>
                
                <div class="accordion" id="FAQ_Races">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="true" aria-controls="panelsStayOpen-collapseEight">

                                Brief Explanation of each Class

                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                            
                                <p>- <strong>Artificer</strong> is a class with a tool for every job and a solution to every problem. They excel as a Support character, but make decent Defenders, Healers, and Strikers, too. With the right infusions and spells, they can fill nearly any role in the party, making the Artificer's versatility rival that of the Bard.
                                    <br>
                                However, the Artificer is complicated. This is not a class I would recommend for new players or for players who suffer from analysis paralysis. The Artificer has more decision points than any class to date, including the Wizard. Every time you finish a long rest you can reset your prepared spells, shuffle where you apply all of your infusions, and pick magic items from a list of some 40+ options. While some of these decisions may remain static for long periods of time, the intent of the class is that you will tailor your abilities day-to-day to suit the challenges you expect to face. While that versatility and adaptability is very powerful, it also requires a great deal of micromanagement of your character.
                                    <br>
                                This is the sort of class that can be rewarding for players who enjoy “crunch” and fiddling with their character's build, but which will be absoltuely punishing for players who don't like to spend hours agonizing over the differences between individual character options.</p>

                                <p>- <strong>Barbarians</strong> are all about getting angry and dealing damage. They have a ton of hit points, resistance to damage, and Rage gives a wonderful bonus to damage. Barbarians don't get much in the way of skills, so generally they're stuck as combat monsters, but they function equally well as a Defender and a Striker, and certain character options can even expand them into a limited Support role.</p>

                                <p>- <strong>Bard</strong> is fantastically versatile. With access to every skill, expertise, full casting, and a decent set of proficiencies, the Bard can fill essentially every role in the party. Subclasses like College of Lore are more of the classic supportive Bard, with improved magical options and support abilities, while College of Swords and College of Valor can serve as front-line melee characters who can bring their spellcasting and support capabilities into the heat of battle.
                                    <br>
                                Strangely, the Bard's emphasis on the Performance skill from previous editions has wholly vanished. There is literally no mechanical reason to take the skill.</p>

                                <p>- <strong>Cleric</strong> is among the most diverse and interesting classes in 5e DnD. Because your choice of Divine Domain so greatly affects your capabilities, Clerics can fit a variety of roles and play styles. More generally, Clerics are the best healers in the game, and have among the best support, utility, and divination options in the game. However, they are by no means limited to healing and support roles. Clerics have abundant offensive options, and can even be effective with weapons.</p>

                                <p>- <strong>Druid</strong> is a very versatile class. Between their available archetypes, they're able to serve mixes roles as scouts, strikers, blaster, support casters, and controllers. Their spell list has a lot of unique options. There is a strong emphasis on area control spells, and most of the Druid's best spells require Concentration. By spellcaster standards, the Druid is relatively simple to play because you so rarely need to track more than one ongoing spell effect, but it certainly doesn't make them less fun or less powerful.
                                    <br>
                                They are primarily a spellcaster, and they fill a role in the party similar to the Cleric, serving as a Healer, Support, and Utility caster. However, their capabilities don't end there. Several subclasses also allow the Druid to serve as an effective Defender or Striker in an impressively broad and unique number of ways.
                                    <br>
                                The Class can be a lot of fun to play, and if you stick to one of the low-complexity subclasses the Druid is among the easiest spellcasters to play. For new players looking to try their first spellcaster, Circle of the Land can be a great introduction to the complexities of managing spellcasters.</p>

                                <p>- <strong>Fighter</strong> is a fantastic addition to any party. While their skill and tool proficiencies are extremely limited, Fighters excel in combat. They are durable, have great armor, and provide plenty of damage output. Fighters get more Ability Score Increases than any other class, allowing them to easily explore feats without sacrificing crucial ability scores. They also notably get more attacks than any other class, which can be a lot of fun.
                                    <br>
                                Fighters are a great example of “opt-in complexity” in DnD 5e. The core of the class is very simple, but the complexity of the subclasses varies significantly. The Champion adds almost no complexity, while subclasses like the Edlritch Knight can add quite a bit. This makes the Fighter a great choice for players of all experience levels and for players with a broad range of preferences, allowing you to build a character that you find mechanically appealing but without making it more work than you might like. For players totally new to DnD or to tabletop RPGs in general, the Champion Fighter is among the simplest characters in the game and is a great way to learn if you're nervous about learning the game's mechanics.</p>

                                <p>- <strong>Monk</strong> is the iconic martial-artist, popular among those who prefer to punch things rather than stabbing them or setting them on fire (though stabbing things and setting them on fire is still a possibility for the Monk). Monks are excellent Defenders and Strikers, and typically fill a role in party as a Fighter-equivalent or Rogue-equivalent depending on your subclass and proficiencies. Certain subclasses also introduce healing and Support capabilities, allowing monks to thrive in new roles depending on your build.
                                    <br>
                                It can be difficult to play compared to the Fighter or the Rogue. They are the most MAD class in DnD 5e, needing three high ability scores to function effectively with very little room to ignore any of them, and the Monk isn't as durable as the Fighter nor as lethal as the Rogue. Monks also lean heavily into using Bonus Actions right from level 1, which can be briefly confusing for new players who are still acclimating to the game's mechanics. Subclasses can introduce additional complexity to the class, but that complexity also brings a lot of diversity and a lot of fun options.</p>

                                <p>- <strong>Paladins</strong> are the most durable, survivable, and self-sufficient class in the game. As such, they both make excellent solo characters and are excellent additions to nearly any party regardless of existing capabilities. In a party, they serve as a Defender, Face, and Striker. They do have some healing and utility options, but not enough to replace a full spellcaster in most parties. Your choice of subclass will influence which of those roles your character emphasizes, though typically it's just a sliding scale between Defender and Striker.
                                    <br>
                                They are extremely durable and can survive a long hard day of adventuring, but none of their abilities except Channel Divinity recharge on a short rest, so you need to ration your resources more strictly than many classes. They also have nearly no options for fighting at range, which means that nearly every paladin is a heavily-armored melee monster.
                                    <br>
                                Also, they are one of the more complex classes to play. They have a long list of class features, touching on all of the game's core mechanics. While this makes them challenging for new players, this also makes the Paladin a great introductory class because the player needs to learn so much to play it. This complexity phases in gradually over the first three class levels, which is a perfect trajectory for a new player to settle into the game and their character.</p>

                                <p>- <strong>Ranger</strong> is an interesting mix of Druid-style spellcasting, Fighter-style combat capabilities, and Rogue-style skills. Themed around nature and exploration, the Ranger is a welcome asset in parties exploring untamed lands above or below ground.
                                    <br>
                                They can fill the role of either a Fighter-equivalent or a Rogue-equivalent (sometimes both), and works well as a Scout and Striker, but trades the Fighter's durability for better skills and improved damage output. While they do have the ability to cast spells, and can therefore provide healing and utility options, the Ranger doesn't have nearly enough magic to serve as a Healer or a Utility caster.
                                    <br>
                                Just make sure to ask your DM to play the TCE update of the Ranger. The PHB base one is rather lackluster.</p>

                                <p>- <strong>Rogues</strong> are the quintessential Face, Scout and Striker. Sneak Attack allows them to do a huge pile of damage in a single attack, and their pile of skills allows them to easily handle locks, traps, guards, and many other challenges. While a party can function just fine without a Rogue, it's hard to compete with the sheer number of important skill and tool proficiencies offered by the Rogue.
                                    <br>
                                They typically split into melee or ranged builds, though the universal efficacy of Dexterity makes it easy for many rogues to switch between the two. Melee Rogues frequently go for two-weapon fighting because it provides a second chance to score Sneak Attack, and hit-and-run tactics enabled by Cunning Action are great way to get into melee to attack before retreating behind your party.
                                    <br>
                                Ranged rogues typically rely on sniping, which is also enabled by Cunning Action due to the ability to hide as a Bonus Action. Hiding after each attack using Cunning Action is reliable and effective, though it can be very static and repetitive. Rogue subclasses expand upon those tactical options, but in many cases these staple tactics remain crucial to the class's function.</p>
                            
                                <p>- <strong>Sorcerers</strong> are a challenge, but at the same time they can be less complex than most spellcasting classes. The Sorcerer's spell list allows them to serve as a Blaster, Controller, Striker, and Utility Caster, and sorcerers make one of the easiest Faces in the game due to their skill list and their dependence on Charisma.
                                    <br>
                                They fall into a middle ground between the Wizard and the Warlock. The Sorcerer lacks the versatility of a Wizard due to their limited number of spells known, but share many of the same capabilities and almost all of the same spells. Where the Wizard is powerful because they own a tool for every problem, the Sorcerer is powerful because they own a few good tools and can use them to fix any problem. The Sorcerer gets more spell slots than the Warlock, allowing them to focus more on leveled spells than the Warlock, who must use them sparingly and rely heavily on cantrips and invocations.
                                    <br>
                                The Sorcerer's versatility comes from their ability to boost their spells using Metamagic, shaping them to suit the needs of the moment. If you're accustomed to playing a wizard, expect to cast a lot of low-level spells using higher-level spell slots to get as much utility as you can out of your limited number of spells known.</p>

                                <p>- <strong>Warlock</strong> is likely the easiest of any spellcaster to play. You get only a handful of spell slots at a time, and never have to juggle multiple spell slot levels. Warlocks learn spells permanently, so you don't need to worry about changing your spells on a daily basis. Warlocks also get the most powerful damage cantrip in the game, giving them a solid, reliable option for damage output in between your big spells.
                                    <br>
                                At the same time, the Warlock is one of the most customizable classes in the game. You get two major decision points with your Otherwordly Patron (the Warlock's Subclass) and your Pact Boon, plus spells known and a pile of Eldritch Invocations. This wide degree of customization makes it easy to play warlocks back-to-back with very little overlap in your builds.
                                    <br>
                                The Warlock typically fills the party's Wizard-equivalent role, offering options as a Controller and Striker, and with some minor investments the Warlock can also serve as the party's Face. The Warlock falls a bit short in terms of Utility spell options compared to similar spellcasters, but that can be mitigated with Pact of the Tome and a few Invocation choices if your party can't compensate for that shortcoming. The Hexblade subclass also offers the ability to serve as a Defender, though Hexblades still lean more toward damage output than durability.</p>

                                <p>- <strong>Wizard</strong> is the iconic arcane spellcaster, capable of doing all manner of fantastic tricks, and generally limited only by their spellbook and their spell slots. A Wizard with a comprehensive spellbook can do essentially anything in the game, often as well as or better than a non-magical character who is built to do that thing. A Wizard with Invisibility is as stealthy as a Rogue. A Wizard with a summoned pet can replace a fighter (at least temporarily). A clever Wizard could even find a way to heal their allies and replace a Cleric.
                                    <br>
                                Because Wizards can do so much so well, their roles are numerous and varied. However, in a typical party the Wizard's primary functions are as a Blaster, Controller, Librarian, Support caster, Striker, and Utility Caster. Depending on your spells and potentially your skills, you can also serve as a Defender, Face, Healer (though it's difficult), and Scout. You may think, “but wait, isn't that every role?”. Yes. Yes, it is.
                                    <br>
                                However, with that incredible breadth of capability comes both complexity and risk. Most of this complexity is buried in the Wizard's spellcasting. Wizards get very few actual class/subclass features, but spellcasting fills in the gaps. Managing a spellbook is a complex, and unlike clerics and druids who can select from a vast spell list after every long rest, you need to hoard newly-learned spells to expand your capabilities, sometimes at great expense, so learning new spells may be a gamble, costing precious gold for a spell which you may never use. If you are prone to analysis paralysis, the wizard is a waking nightmare.
                                    <br>
                                Wizards are among the least-durable characters in the game, having no armor proficiencies, poor saving throws, and the lowest hit dice available. Staying alive as a wizard can be very difficult, and in most cases requires a part of sturdy allies willing to protect you from harm. There are exceptions to this rule (bladesingers can achieve some of the highest AC in the game without the aid of magic items), but they are few in number.
                                    <br>
                                They are a class that rewards system mastery, and while you don't need to be an experienced player to succeed as a wizard, improving your familiarity with the game will pay dividends.</p>

                            </div>
                        </div>
                    </div>
                </div>
                
                <br>
                <p>So after you pick which Class you wish to go for. The following steps apply pretty much for every Class so it should be easy to follow:</p>

                <p>- Every Class has its own Hit Dice. The type of the dice is decided on the Class too. A d6 is used by Wizards and Sorcerers. A d8 is used by Artificers, Bards, Clerics, Druids, Monks, Rogues, and Warlocks. A d10 is used by Fighters, Paladins, and Rangers. And a d12 is just used by Barbarians. <br>
                - The way you calculate HP is the same for everyone. On level 1 you take the maximum possible. That being the highest possible number on your Hit Dice (so if its a d8, then that would be 8) plus your Constitution Mod. Every level after that, you either roll for HP or take avrage. Depends on the DM. Rolling is pretty simple, you roll your Hit Dice and add your Constitution Mod to what you've rolled. That is how much your max HP increases. Alternatively, taking an average makes your HP more consistent. To know what is the average of your Hit Dice, just devide the highest possible value on your dice by 2, and add 1 to the result. The rest is the same, add the Constitution Mod and that is how much you add to your max HP. <br>
                - For example: if your Hit Dice is a d8, half of that is 4 and by adding a 1, that is a 5. If our CON Mod is a 2, the sum in the end is a 7. Your max HP increases for 7. Simple elementary math. <br>
                - Make sure to write down the amount and type of Hit Dice(s) you have in the Core sheet, section 10.b.</p>

                <p>- If your class has any Armor Proficiencies, add all of them to the Core sheet, section 15.</p>

                <p>- Every class gets some Weapon Proficiencies, add all of them to the Core sheet, section 15.</p>

                <p>- Some classes may get some tools, add all of them to the Core sheet, section 15.</p>

                <p>- Every class gets two Saving Throws. Mark which ones you get in the Core sheet, section 6.</p>

                <p>- Every class gets at least two Skill proficiencies. Most of the classes pick from a list given, excpet Bard who can pick any.</p>
            
                <p>- More equpment is dealt to you. This time more oriented around your class. Some lines you just get what is written in them but some might show some options with signs like: (a) and (b). In such cases you only get one of the two. Keep going line by line until the end. Alternatively, classes offer a chance to roll for your gold to buy a starting equipment yourself.I don't suggest for new players to try that just yet. Anyhow, add all items on your Core sheet, section 14.</p>

                <p>- Within those items, there should be some weapons and potentially armor within. <br>
                - Starting with weapons, you should set up an attack with those within the Core sheet, section 12. The way you may set up a weapon may differ from a weapon to weapon but I will cover the basics. Lets say you have a Longsword, you would write down the name of it under Name. Then the ATK Bonus is decided by your STR mod and your proficiency bonus if you have proficiency with the weapon. Lets say you have 14 in STR, which makes the mod a +2 and that your proficiency bonus is also a +2. That makes your ATK bonus a +4 and you write that number in there. <br>
                - In regards to the Damage/Type, that is partially decided by the weapon itself. If you check your source material, the Longsowrd should be described with doing 1d8 Slashing damage. So that is how much you do if you hit and since it is a melee weapon, you add your STR mod to the damage itself. Taking the example from before, your total damage on hit would be 1d8+2 Slashing damage.</p>

                <br>

                <p>Moving onwards, you have potentially many features a class may get. If your source material is good, it should be everything in sequence. Add every Feature individually on your Core sheet, section 13.</p>

                
            
            
            
            
            <br><br>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
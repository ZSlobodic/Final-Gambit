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
                            <li><a class="dropdown-item" href="spells">Spell Data Base</a></li>
                            <li><a class="dropdown-item" href="classes">Class Data Base</a></li>
                            <li><a class="dropdown-item" href="subclasses">Subclasses Data Base</a></li>
                            <li><a class="dropdown-item" href="backgrounds">Background Data Base</a></li>
                            <li><a class="dropdown-item" href="races">Race Data Base</a></li>
                            <li><a class="dropdown-item" href="feats">Feat Data Base</a></li>
                            <li><a class="dropdown-item nav-link disabled" href="#">Item Data Base</a></li>
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
                        <a class="nav-link" href="#scrollspyHeading2">The Basics of the Character Sheet</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
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

        <p>YOU ARE LOGGED IN</p>

        <!--<img src="{{ asset('images/dnd_5e_sheet.png') }}" alt="description of myimage">-->

        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                <p>Considering you've come here could only mean one of the two things. You've been sent here by the creator to make a character on your own or you stumbled upon this site by chance since you were looking on how to make a character on your own. In any of the cases, you don't know how to do it and are seeking help. Well you've come to the right place and this whole section here should be everything you need to make the right steps in order to make a fully fledged character for D&D 5E by the book.</p>
                <p>DISCLAIMER: This is a guide on how to make a character by the book, nothing more and nothing less. In case your Dungeon Master happens to rule things differently, has a different play style or whatever else comes to their mind, they have the ability to veto anything that is said here. After all, everyone may play the game differently and that is something I can not predict nor adapt to.</p>
                <p>With that said, I hope you manage to create the character you envision! Next destination... destiny!</p>
            <br>
            <h4 id="scrollspyHeading1">How to get started?</h4>
                <p>No matter if you are playing in person or online, the very first step is to get an idea of what kind of character you desire to play. Without thinking about any rules of the game, just take a minute or two to think just what is it that you want your character to be and be able to do. D&D 5E has small limits when it comes to ideas, as long as its not something really over the top since who would even enjoy a character who is good at everything? Not me at least...</p>
                <p>Done thinking? Good.</p>
                <p>No matter if you may not find something that is word for word on your character, there is always a work around. There are no Katanas in the item list but it is little to no issue to make the plain Longsword into a Katana but keeping the mehanical values of a Longsword. Flavor should always be FREE!! Unless it doesn't fit in in your Dungeon Masters world, I suggest talking about it with them.</p>
            <br>
            <h4 id="scrollspyHeading2">The Basics of the Character Sheet</h4>
                <p>When it comes to Character Sheets, they can come in all shapes and sizes. I will be using the most common one for my explanations but any custom one you may find online should have the core features in them. The sheet itself is divided usually into three pieces. The Core, Bio, and Spells. I will be explaning each one and the specific parts of each as I think its needed.</p>




                <div class="accordion" id="accordionPanelsStayOpenExample">

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Core
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <img class="big_sheet" src="{{ asset('images/dnd_5e_sheet_numbered.png') }}" alt="description of myimage">
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
                            <p><strong>15.</strong> This little spot is used to write down any proficiencies your Character has from any form of Tools, Artisan Tools, Vehicles, Instruments</p>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
                                    Accordion Item #1
                                </button>
                                </h2>
                                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    
                                </div>
                                </div>
                            </div>





                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Accordion Item #2
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Accordion Item #3
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                        </div>
                    </div>

                </div>












            <br>
            <h4 id="scrollspyHeading3">Third heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati error est aliquid eius, ipsum aspernatur molestias, reprehenderit quos autem debitis molestiae qui quod ratione. Laudantium velit ullam ut voluptas corporis vero soluta quia est? A provident debitis quam numquam illum architecto, delectus, tempore quod temporibus fugit reiciendis, quasi eveniet? Optio fuga quo recusandae distinctio labore odit ratione maiores, itaque rerum excepturi veritatis impedit, asperiores id in architecto consequatur sed minus est voluptas quasi, debitis maxime ex. Sed, doloribus, accusamus recusandae voluptates soluta quia architecto atque suscipit, ipsum eveniet ea numquam quibusdam pariatur et tempora! Hic consequuntur voluptate impedit rem vitae, iure molestias recusandae illum nemo at laboriosam illo ratione porro modi minima quos esse distinctio totam ab maiores eos excepturi perferendis! Natus at, laboriosam quasi velit facilis vitae quod dicta sed nam vel, nobis, aliquam totam aliquid laborum quidem! At nam omnis officia ad impedit velit cupiditate a excepturi iusto atque labore saepe distinctio unde laboriosam voluptatem nobis ullam consectetur, sed quo quia, consequuntur perspiciatis nisi. Optio ullam nulla molestiae, quia tempora exercitationem tenetur dolorum rerum accusantium nisi corporis id, ducimus veniam eos amet nesciunt fugiat ratione reprehenderit architecto suscipit minus? Laudantium, vel quaerat iusto officia tempora non aut cupiditate error deserunt consequuntur unde quis eum dolorum! Minus, dolor repellat! Vel distinctio qui maxime explicabo enim exercitationem, illum deserunt ipsa cumque accusamus necessitatibus adipisci officiis provident eum ab accusantium cum nam dolorem. Voluptate quod quas est nam asperiores qui natus quam laudantium reiciendis architecto, distinctio iusto inventore in. Deserunt ea asperiores ex impedit quasi! Quia totam nobis sit possimus debitis. Dolor doloremque molestiae cum officiis. Dicta distinctio facere ullam, fuga quasi earum rem culpa eos cupiditate reiciendis quis magnam illo architecto quos impedit laborum eaque quisquam voluptatum eius possimus deleniti. Suscipit asperiores voluptatum aliquam odit velit necessitatibus ipsa illo vitae!</p>
            <h4 id="scrollspyHeading4">Fourth heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident voluptate soluta consectetur iure aliquam reiciendis enim quia, dolorem reprehenderit earum velit neque, omnis quaerat repudiandae tempore perferendis sapiente, dignissimos sint maxime cumque ad molestias fugit? Vero soluta debitis temporibus molestiae voluptatibus suscipit at nihil reiciendis odio, blanditiis optio cumque et tenetur vel facilis. Natus dolor officiis porro ullam quasi ea unde veniam cum. Dolore consequuntur excepturi exercitationem quo provident, ipsum iure praesentium. Blanditiis, dicta totam deserunt laborum omnis cum. Magni perspiciatis, laborum iste error illum ut temporibus aliquam consequatur accusantium molestiae laboriosam maxime consequuntur beatae impedit, necessitatibus expedita inventore! Amet omnis excepturi magni pariatur placeat necessitatibus sequi veniam harum iste quidem suscipit, eaque rem in sapiente magnam delectus quisquam enim ab eum ipsa? Consequuntur in minima beatae architecto ab, possimus deserunt a! Exercitationem praesentium eveniet eos, illum beatae blanditiis laborum magnam, aliquid est nobis nisi consectetur cum! Aliquam esse nam error et cupiditate, velit nesciunt culpa consectetur repellendus maiores repellat, suscipit delectus sequi? Recusandae minus explicabo atque exercitationem quia officiis harum ea unde consequuntur magnam sed omnis architecto cumque iusto, labore quasi quisquam maxime ipsa neque, rem pariatur! Quae dolore ducimus natus voluptatum non quo fugiat reprehenderit omnis commodi.</p>
            <h4 id="scrollspyHeading5">Fifth heading</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos fuga beatae, quisquam eaque quasi qui rerum enim obcaecati, autem soluta sequi possimus quia hic vitae delectus voluptatem distinctio! Fugiat aliquid, optio animi minus quae laboriosam odit quam aspernatur earum quod inventore veniam ea nisi eos doloremque magni mollitia? Ut ea fuga laudantium tenetur iure dolorum eius aperiam minus doloremque tempora obcaecati adipisci iste quaerat vel eligendi accusamus similique aut ratione, in libero illum accusantium quisquam consectetur? Harum, fugit quasi est ullam neque possimus magni provident corporis mollitia commodi cupiditate dolores animi magnam facere rerum repellendus quis delectus, ipsum architecto asperiores?</p>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
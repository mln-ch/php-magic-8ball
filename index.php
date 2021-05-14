<?php
$title = 'CLAIR.Voyant';
$menu = 'home';
$desc = 'description here';

include 'top.php';
?>

<div class="contenitore">
    <div class="main">

        <div class="initial">
            <div class="initial_title">
                <h1>CLAIR<span class="dot"></span><span class="voyant">Voyant</span> <br>
                    <span class="subtitle">Company's Magic 8-Ball</span>
                </h1>
            </div>

            <div class="scrollDown">
                <a href="#main">
                    <p>scrolla giù</p>
                    <div class="anchor">
                        <div class="scroll"></div>
                    </div>
                </a>
            </div>
        </div>

        <div id="main"></div>

        <div class="main_wrapper">
            <div class="home">
                <div class="magic">
                    <div class="magic_ball">
                        <div class="void">
                            <!-- aggiungi la classe "move" per il mousetrack -->
                            <div class="eyeball focus"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="main_subtitle">
                <h2>Fammi una domanda.</h2>
            </div>

            <form action="esito.php" method="POST">
                <div class="ask">
                    <input type="text" name="domanda" id="question" placeholder="scrivi qui la tua domanda..." required>
                    <button class="btn buff" type="submit" id="chiedi">chiedi</button>
                </div>
            </form>
        </div>
    </div>

    <?php
include 'bottom.php';
?>
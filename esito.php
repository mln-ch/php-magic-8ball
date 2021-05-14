<?php
$title = 'La tua risposta';
$desc = 'description';
$menu = 'esito';

include 'top.php';
?>

<?php
//p
$ans_array = array('sì', 'no.', 'certamente.', 'ne dubito.', 'può darsi.', 'non ne sono certa, riprova più tardi', 'non ci conterei', 'meglio di no.', 'non vedo perchè no', 'probabilmente sì', 'ci puoi sperare', 'è meglio non saperlo', 'stai a vedere', 'credo di sì', 'dipende da te');
// print_r($ans_array);

$tot_array = count($ans_array);
$ans_gen = rand(0, $tot_array-1);

$risposta = array_rand($ans_array);


// h2
$dida_array = array('Hmm... sembra che questa sia la tua risposta', 'Credo sia la risposta migliore', 'Ecco la tua risposta', 'Se la risposta non ti piace, puoi sempre riprovare.');
// print_r($dida_array);

$tot_dida = count($dida_array);
$dida_gen = rand(0, $tot_dida-1);

$dida = array_rand($dida_array);
?>

<div class="contenitore">
    <div class="esito">
        <div class="main_wrapper">
            <div class="home">
                <div class="magic">
                    <div class="magic_ball">
                        <div class="void">
                        <p class="slideDown fadeInDown">
                                <?php echo $ans_array[$ans_gen]; ?>
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="main_subtitle">
            <h2 class="fadeInDown"><?php echo $dida_array[$dida_gen]; ?></h2>
            <a href="index.php#main" class="btn">vuoi chiedermi altro?</a>
        </div>
    </div>
</div>

<?php
include 'bottom.php'
?>
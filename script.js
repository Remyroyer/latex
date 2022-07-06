//Déclarations des variables et constantes globales
let j=0; //Nb de vêtements retiré [utilisée dans plusieurs fonctions ayant déjà des return... Pas réussit à return plusieurs valeurs --> Possible?]
let array = ['texas', 'texmex', 'gore tex','textile', 'latex', 'texte','texto', 'semtex', 'cortex', 'pattex', 'texaco', 'tex avery', 'le texier', 'alexis texas', 'tex'];
//Liste des mots à trouver sera déplacé dans BD
let nb_mots=array.length; //Nombre de mots à trouver dans la liste du tableau
var nomgamer;//[utilisée dans plusieurs fonctions]. Inconnu au début (quoi que 'Votre nom' est inscrit dès le début!)... Donc var, Sera remplacé lors de la création du compte utilisateur!
    const departMinutes = 0.5; //Temps alloué au joueur pour trouver les mots de la liste
let scoretime=0; //Bonus/malus temps

let modaltxt="<button type='button' class='btn' id='id_butt_4' data-toggle='modal' data-target='#exampleModal'>\
Cliquer pour recommencer\
</button>\
<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='ModalLabel' aria-hidden='true'>\
<div class='modal-dialog' role='document'>\
  <div class='modal-content'>\
    <div class='modal-header'>\
      <h5 class='modal-title' id='ModalLabel'>Nous soutenir...</h5>\
      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>\
        <span aria-hidden='true'>&times;</span>\
      </button>\
    </div>\
    <div class='modal-body'>\
    &nbsp Pour nous soutenir, regardez une vidéo en cliquant sur 'Nous soutenir'!\
    </div>\
    <div class='modal-footer'>\
      <button type='button' class='btn btn-secondary' data-dismiss='modal' onclick='fautload()'>Close</button>\
      <button type='button' class='btn btn-primary' data-dismiss='modal' onclick='soutenir()'>Nous soutenir</button>\
    </div>\
  </div>\
</div>\
</div>";

//===============================//
let var_Sexe='';
let avatar_1 = 'null';
//===============================//

//Temps de jeu
let scoretime_init=0;//???[utilisée dans 2 fonctions]. Inconnu au début??? A regarder de plus près!
function fautload()
{
    location.reload();
}

function chrono()
{
    let temps = departMinutes * 60
    scoretime_init=departMinutes * 60
    const timerElement = document.getElementById("timer")
  
    document.getElementById('id_butt_2').style.display='none';

    var x=setInterval(function()
        {
        let minutes = parseInt(temps / 60, 10)
        let secondes = parseInt(temps % 60, 10)
        minutes = minutes < 10 ? "0" + minutes : minutes
        secondes = secondes < 10 ? "0" + secondes : secondes
        timerElement.innerText = `${minutes}:${secondes}`
        temps = temps <= 0 ? 0 : temps - 1
        scoretime=temps;

                if ((minutes == 0)&&(secondes == 0)) 
                {
                    clearInterval(x);
                    document.getElementById('id_butt_2').style.display='block';//Pose un bug sur la console si il est déjà display!
                    document.getElementById("id_butt_2").innerHTML = "Temps imparti écoulé, cliquer pour recommencer!";
                    finpartie();//Fin de partie 3/3
                }
        }, 1000)
    return scoretime;
}

function continu()
{
    let div_a_lire = document.getElementById('id_welcome');
    div_a_lire.innerHTML = "<h2>Et c'est parti, à toi de jouer!</h2>";

    document.getElementById('id_legend').style.display='none';
    document.getElementById('id_group_régles').style.display='none';
    document.getElementById('id_lead').style.display='none';
    document.getElementById('avatar_1').style.display='block';

    if (document.getElementById('female').checked == false)
    {document.getElementById('female').style.display='none';
    document.getElementById('label_female').style.display='none';}
    if (document.getElementById('male').checked == false)
    {document.getElementById('male').style.display='none';
    document.getElementById('label_male').style.display='none';}

    text_accueil="<div id='middle1_contenant'>\
    <div id='tex_tex'><h2>TEX</h2></div>\
    <div id='indice_chrono_position'>\
    <div id='chrono'><div id='timer'></div></div>\
    </div>\
    <div id='cadre_validation'>\
    <input type='text' id='input_pre'autocomplete='off'></div>\
    <br>\
    <p id='txt_score'>Score: </p>\
    <input type='number' id='input_score' value='0' readonly=true></div>\
    </div>";

    let div_a_changer = document.getElementById('id_line_3');
    div_a_changer.innerHTML = text_accueil;

    /**/
    if (document.getElementById('female').checked == true)
    {text_a_modif="<div class='avatarF' id='avatarF'></div>\
    <div class='jeanF' id='jeanF'></div>\
    <div class='vesteF' id='vesteF'></div>\
    <div class='tshirtF' id='tshirtF'></div>\
    <div class='chapeauF' id='chapeauF'></div>\
    <div class='fouetF' id='fouetF'></div>";}

    /**/
    if (document.getElementById('male').checked == true)
    {text_a_modif="<div class='avatarH' id='avatarH'></div>\
        <div class='chapeauH' id='chapeauH'></div>\
        <div class='jeanH' id='jeanH'></div>\
        <div class='vesteH' id='vesteH'></div>\
        <div class='tshirtH' id='tshirtH'></div>\
        <div class='fouetH' id='fouetH'></div>";}

        let sexeavatar=document.getElementById('avatar_1');
        sexeavatar.innerHTML= text_a_modif;

         //L'appui sur la touche entrée après la saisie d'un mot lance la boucle sur les mots à trouver
    const input=document.getElementById('input_pre');
    input.addEventListener('keyup', (e)=>{if(e.keyCode===13){bouclearray();}});

    document.getElementById('input_pre').focus();
    chrono();
}

function bouclearray()
{
    var scorum = document.getElementById('input_score').value;
  let homme = document.getElementById('avatar_1');
  let hommeliste = homme.getElementsByTagName('div');
  var el = document.getElementById('input_pre').value; //Elément à rechercher
  let flag = 0;  // Initialement 0 - Introuvable

  console.log(hommeliste[j]);
    
  for(let i2=0; i2<array.length; i2++)
    {
        if(el === array[i2])
        {
           flag = 1;
           array.splice(i2, 1);
           //console.log(array);
        }
    }

     //Vérifier si la valeur du drapeau a changé.
  if(flag == 1 && el!==''){
    console.log('Mot trouvé')
    document.getElementById('input_pre').value='';
    document.getElementById('input_score').value= ++scorum;
  }
  else{
    console.log('Mot pas trouvé')
    document.getElementById('input_pre').value='';
j=++j;
document.getElementById('input_score').value= --scorum;

if (j>0 && j<=4){
    console.log('déssap.')
    hommeliste[j].style.display = 'none';//Retirer les vêtements
    terminé='False';
}
else{
    if(j=5){
    console.log('fouet')
    hommeliste[j].style.display = 'block';//Rajouter le fouet
    terminé='True';
    document.getElementById('id_butt_2').style.display='block';
    document.getElementById("id_butt_2").innerHTML = "Perdu, cliquer pour recommencer!";
finpartie();
}
}
  }
}

function finpartie()
{
    j=0;
        //"Perdu, la partie est terminée sur temps écoulé, vous avez un score de: "
        var scorum = document.getElementById('input_score').value;
        document.getElementById('input_score').style.display='none';  
        document.getElementById('input_pre').style.display='none';
        document.getElementById('tex_tex').style.display='none';  
        document.getElementById('chrono').style.display='none';
        document.getElementById('txt_score').style.display='none';

        document.getElementById("id_line_3").innerHTML = "<input type='button' id='but_Tab_Scores' value='Tableau des scores'\
        onclick='tableauscores()' style='cursor: pointer;'>";

        document.getElementById("but_Tab_Scores").style.display="block";
        let div_a_rerelire = document.getElementById('id_welcome');
        div_a_rerelire.innerHTML = "Perdu, la partie est terminée, vous avez un score de: " + parseInt(parseInt(scorum) - (scoretime_init - parseInt(scoretime)));
}

function tableauscores()
{
    document.getElementById('but_Tab_Scores').style.display='none';

    let div_a_lire = document.getElementById('id_welcome');
    div_a_lire.innerHTML = "<h2>Vous en êtes où?</h2>";    

    let div_a_relire = document.getElementById('avatar_1');
    div_a_relire.innerHTML = "<p id='id_worksite'><ion-icon name='code-working-outline'></ion-icon><br><br>On apprend le PHP,<br>et on\
    reviens ''très vite'' pour réaliser cette page.<br><br><ion-icon name='code-working-outline'></ion-icon></p>";
    
    document.getElementById("id_line_6").innerHTML = modaltxt;
}

function soutenir()
{

    let div_a_changer = document.getElementById('id_line_5');
    document.getElementById('avatar_1').style.display='none';
    div_a_changer.innerHTML = "<div class='embed-responsive embed-responsive-16by9' id='id_videocontainer'>\
    <iframe src='https://www.youtube.com/embed/Y-kXtWdjtmw' title='Learn Latex in 5 minutes'\
     frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'\
      allowfullscreen></iframe></div>";
    //width='785' height='477'//

    let div_a_lire = document.getElementById('id_butt_4');
    div_a_lire.innerHTML = "<button type='button' class='btn' onclick='fautload()'>REJOUER...</button>";   

}

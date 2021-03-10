const submit = document.getElementById('submit');
const matiere = document.getElementById('matiere');
const inputs = document.querySelectorAll('.note');

submit.addEventListener('click', function() {
    //creer un tableu de notes
    const notes = [];
    //fair une boucle sur touts les inputs
    inputs.forEach(input  => {
        //creer une structure d'une seul note
        let note = {
            id_eleve: Number(input.id) ,
            note: Number(input.value) ,
            matiere: matiere.value
        }
        //ajouter note aux tableux notes
        notes.push(note)
    })
    axios.post('/includes/ajouterNote.php', {notes: notes })
        .then(res => {
            window.location = "/tableau.php?msg=success";
        })
})
/* tableau de notes kyjm3hum kysifthum lajouternote.php sous format json */ 
let deleteButton = document.getElementById('#deleteButton');

deleteButton.addEventListener('click', function() {
          // Envoyez une requête de suppression au serveur
        fetch('admin.product.destroy', {
            method: 'DELETE',
        })

        .then (response => response.json())
        .then (data => {
            if (data.success) {
                 // Suppression réussie, traitez la réponse du serveur
                 console.log(data.message);
            } else {
                 // Suppression échouée, affichez les erreurs ou un message d'erreur
                 console.error(data.errors || 'La suppression a échoué.');
            }
        },)
        .catch(error=> {
            console.error('Erreur lors de l\'envoi de la requête', error);
        })
});
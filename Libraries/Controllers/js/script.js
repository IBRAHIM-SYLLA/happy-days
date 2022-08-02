document.addEventListener("DOMContentLoaded", function (){

        // variables
        let stripe = Stripe('pk_test_51LKIPhE1hkhM3fmbZdaa3ueOz28T8VFzNVbxmjaEjEPrSsRXFkXsrs5CsgFOZAo2lBODkN1idyEnFzO0ktUkZOhJ00XxzKzFyB');
        let elements = stripe.elements();

        // Objets de la page
        let cardHolderName = document.getElementById("cardholder-name");
        let cardButton = document.getElementById("card-button");
        let clientSecret = cardButton.dataset.secret;

        // creer les élément du formulaire de carte bancaire
        let card = elements.create("card");
        card.mount("#card-elements");

        // on gére la saisie
        card.addEventListener("change", (event) => {
            let displayError = document.getElementById("card-errors");
            if(event.error){
                displayError.textContent = event.error.message;
            }
            else{
                displayError.textContent = "";
            }
        })

        // On gère le paiement
        cardButton.addEventListener("click", () => {
            stripe.handleCardPayment(
                clientSecret, card, {
                    payment_method_data: {
                        billing_details: {name: cardHolderName.value}
                    }
                }
            ).then((result) => {
                if(result.error){
                    document.getElementById('errors').innerText = result.error.message
                }
                else{
                    document.location.href = "confirmation.php";
                }
            })
        })

})
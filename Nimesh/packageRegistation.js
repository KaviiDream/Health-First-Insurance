function submitRegistration() {
    const formContainer = document.querySelector('.form-container');
    formContainer.innerHTML = "";  

    const newParagraph = document.createElement('p');
    newParagraph.textContent = 'Thank you for your submission. Your request has been received..!';
    formContainer.appendChild(newParagraph);

    setTimeout(() => {
        window.location.href = 'childrenPlan.html';
    }, 10000);
}

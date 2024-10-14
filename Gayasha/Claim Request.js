function replaceForm() {
 
    const checkBox = document.getElementById("checkbox");
    const regID = document.getElementById("reg").value;
    const File = document.getElementById("file");

    if(checkBox.checked && regID != "" && File.value != ""){
        //checking whether checkbox checked, RegisterId entered and File uploded correctly

        const formContainer = document.querySelector('.form-container'); //selecting the first element named as 'form-container'
        
        const newParagraph = document.createElement('p'); //adding a paragraph
        newParagraph.textContent = 'Thank you for your submission. Your request has been received..!';
        //adding text content to the paragraph

        formContainer.innerHTML = "";  //clearing the form content


        formContainer.appendChild(newParagraph);    //appending new paragraph as the form content


        document.getElementById("refreshBtn").removeAttribute('hidden'); //removing the hidden attribute from the 'request another claim' button
    }

    
}


function refreshPage() {   

    window.location.reload();  //refreshing the page so user can submit another form
}


//adding event listner for the button 'request another claim'
document.getElementById("refreshBtn").addEventListener("click", refreshPage);
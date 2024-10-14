function loadHeaderFooter() {
    fetch('./Header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('headerSection').innerHTML = data;
        })
        .catch(error => console.error('Error loading header:', error));

    fetch('./footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footerSection').innerHTML = data;
        })
        .catch(error => console.error('Error loading footer:', error));
}

window.onload = loadHeaderFooter;

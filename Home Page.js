



const images = [
        'home1.avif',
        'home2.jpeg',
        'home10.avif',
        'home3.jpeg',
        'home11.jpg',
        'home5.jfif',
        'home7.jfif',
        'home9.jpeg',
        'home8.jfif',
        'home4.jpg'
    ];
                
            
let currentIndex = 0;
                
    // changing the image
    function changeImage() {
            currentIndex++;  
            if (currentIndex >= images.length) {
                   currentIndex = 0;  
            }
            document.getElementById('cover-image').src = images[currentIndex];  
            }
                
            
    setInterval(changeImage, 3000); 
                    
       
















    





// SEARCH BOX

document.getElementById("searchBtn").addEventListener("click", function(event) {
    event.preventDefault();

    
    var searchTerm = document.getElementById("searchBox").value.toLowerCase();

    if (!searchTerm) return; 

    
    removeHighlights();

    
    var elements = document.querySelectorAll("body *:not(script):not(style)"); 
    
    let firstMatch = null;

    
    function highlightText(element) {
        
        element.childNodes.forEach(function(childNode) {
            if (childNode.nodeType === 3) { // NodeType 3 means it's a text node
                var text = childNode.textContent;
                var lowerCaseText = text.toLowerCase();

                // Check if the text includes the search term
                if (lowerCaseText.includes(searchTerm)) {
                    if (!firstMatch) firstMatch = childNode.parentElement; // Store the first match to scroll to

                    // Create a new HTML structure where the matched term is wrapped in a span
                    var regex = new RegExp(`(${searchTerm})`, 'gi');
                    var highlightedText = text.replace(regex, '<span class="highlight">$1</span>');

                    // Create a new HTML element to replace the text node
                    var newHTML = document.createElement('span');
                    newHTML.innerHTML = highlightedText;
                    childNode.parentNode.replaceChild(newHTML, childNode); // Replace text node with the new HTML
                }
            } else if (childNode.nodeType === 1) { // NodeType 1 is an element node
                highlightText(childNode); // Recursively process child elements
            }
        });
    }

    // Traverse the DOM and apply highlight to all elements
    elements.forEach(function(element) {
        highlightText(element); // Call the highlight function on each element
    });

    // Scroll to the first matched element if found
    if (firstMatch) {
        firstMatch.scrollIntoView({ behavior: "smooth", block: "center" });
    } else {
        alert("No match found");
    }
});

// Function to remove existing highlights
function removeHighlights() {
    var highlightedElements = document.querySelectorAll(".highlight");
    highlightedElements.forEach(function(el) {
        // Replace the outer <span> with the text content
        el.replaceWith(el.textContent);
    });
}





function displayContent(event, contentNameID) {
    let content = document.getElementsByClassName("contentClass");
    let totalCount = content.length;

    // Loop through the content class and hide the tabs first
    for (let count = 0; count < totalCount; count++) {
        content[count].style.display = "none";
    }

    let links = document.getElementsByClassName("linkClass");
    let totalLinks = links.length;

    // Loop through the links and remove the active class
    for (let count = 0; count < totalLinks; count++) {
        links[count].classList.remove("active");
    }

    // Display the current tab
    let currentContent = document.getElementById(contentNameID);
    currentContent.style.display = "block";

    // Add the active class to the current tab
    event.currentTarget.classList.add("active");

    // Adjust container height dynamically based on content
    let container = document.querySelector('.container');
    let contentHeight = currentContent.scrollHeight + 30; // Add some extra padding
    container.style.height = contentHeight + 'px';
}


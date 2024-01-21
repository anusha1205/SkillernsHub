document.addEventListener("DOMContentLoaded", function () {
    // Initial display of all searchable-div elements
    const allDivs = document.querySelectorAll('.searchable-div');
    allDivs.forEach(div => div.style.display = 'block');

    // Attach the performSearch function to the Search button click event
    document.getElementById('searchButton').addEventListener('click', performSearch);
});

function performSearch() {
    const keyword = document.getElementById('searchInput').value.toLowerCase();
    const selectedLanguageoptions = document.getElementById('languageoptions').value.toLowerCase();
    const selectedInterestOption = document.getElementById('interestOption').value.toLowerCase();
    const selectedCareerAspiration = document.getElementById('careerAspiration').value.toLowerCase();

    // Hide all divs
    const allDivs = document.querySelectorAll('.searchable-div');
    allDivs.forEach(div => div.style.display = 'none');

    // Show divs that match any of the selected options or the keyword
    const filteredDivs = document.querySelectorAll(`.searchable-div[data-options*="${selectedLanguageoptions}"], .searchable-div[data-options*="${selectedInterestOption}"], .searchable-div[data-options*="${selectedCareerAspiration}"]`);
    filteredDivs.forEach(div => {
        if (div.innerText.toLowerCase().includes(keyword) || keyword === "") {
            div.style.display = 'block';
        }
    });
}

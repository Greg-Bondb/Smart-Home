const searchBar = document.getElementById("search");

searchBar.addEventListener("input", () => {
  const searchString = searchBar.value;
  const urlParams = new URLSearchParams(window.location.search);

  if (searchString) {
    urlParams.set("q", searchString);
  } else {
    urlParams.delete("q");
  }

  const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
  window.history.replaceState(null, null, newUrl);
});







//searchbar
// var searchInput = document.getElementById('searchInput');
// var rows = document.querySelectorAll('tbody tr');

// searchInput.addEventListener('input', function() {
//     var input = searchInput.value;

//     for (i = 0; i < rows.length; i++) {
//         var cells = rows[i].getElementsByClassName('giromagny');
//         var found = false;

//         for (j = 0; j < cells.length; j++) {
//             var cellText = cells[j].textContent || cells[j].innerText;

//             if (cellText.toLowerCase().indexOf(input.toLowerCase()) > -1) {
//                 found = true;
//                 break;
//             }
//         }

//         if (found) {
//             rows[i].style.display = '';
//         } else {
//             rows[i].style.display = 'none';
//         }
//     }
// });
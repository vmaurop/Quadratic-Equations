function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Κλείσε το dropdown μενού εαν ο χρήστης κλικάρει έξω από αυτό
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
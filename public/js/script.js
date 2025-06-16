function toggleProjet(projetId) {
    const projet = document.getElementById(projetId);
    const projetInfo = projet.querySelector('.projet-info');
    const projetDetails = projet.querySelector('.projet-details');

    if (projetInfo.style.display === 'none' || projetInfo.style.display === '') {
        projetInfo.style.display = 'block';
        projetDetails.style.display = 'none';
    } else {
        projetInfo.style.display = 'none';
        projetDetails.style.display = 'block';
    }
}

function openCvModal() {
  document.getElementById("cvModal").style.display = "block";
  document.getElementById("cvImage").src = "images/CV_2024-12-21_Mohamed_Kosbar_page-0001.jpg";
}

function closeCvModal() {
  document.getElementById("cvModal").style.display = "none";
}

//Menu burger
$(document).ready(function(){
  $('.navbar-toggler').on('click', function(){
    $('.navbar-collapse').toggleClass('show');
  });
});